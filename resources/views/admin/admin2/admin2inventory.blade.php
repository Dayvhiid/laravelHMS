<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        {{-- <nav class="navbar navbar-light bg-light">
            <form class="form-inline">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </nav> --}}
        <div class="d-flex justify-content-end gap-3 mt-3">
            <a href="{{ route('admin.admin2') }}">Stock Management</a>
            <a href="{{ route('admin2.stocklog') }}">Stock Log</a>
        </div>
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger mt-3">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <table class="table">
            <thead>
              <tr>
                <th scope="col">SN</th>
                <th scope="col">Date</th>
                <th scope="col">Name</th>
                <th scope="col">Patient Name</th>
                <th scope="col">Patient Code</th>
                <th scope="col">Receipt No</th>
                <th scope="col">Qty In</th>
                <th scope="col">Qty out</th>
                <th scope="col">Balance</th>
                <th scope="col" colspan="2">Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach($item as $index)
              @php($formId = 'update-inventory-'.$index->id)
              <tr>
                <td>{{ $index->id }}</td>
                <td><input type="date" class="form-control" name="date" value="{{ $index->date }}" form="{{ $formId }}" required></td>
                <td>
                  @if ($index->frame_id)
                    {{-- Linked to a frame: the name always follows the frame. --}}
                    <input type="text" class="form-control" value="{{ $index->name }}" title="Linked to a frame on the frame list" readonly tabindex="-1">
                    <a class="small" href="{{ route('admin2.stocklog', ['frame_id' => $index->frame_id]) }}">Stock log</a>
                  @else
                    <input type="text" class="form-control" name="name" value="{{ $index->name }}" form="{{ $formId }}" required>
                  @endif
                </td>
                <td><input type="text" class="form-control" name="patient_name" value="{{ $index->patient_name }}" form="{{ $formId }}"></td>
                <td><input type="text" class="form-control" name="patient_code" value="{{ $index->patient_code }}" form="{{ $formId }}" required></td>
                <td><input type="text" class="form-control" name="booklet_no" value="{{ $index->booklet_no }}" form="{{ $formId }}" required></td>
                @if ($index->frame_id)
                  {{-- Frame stock entry: changing quantities corrects the frame's stock; Balance is the frame's stock after the entry. --}}
                  <td><input type="number" step="1" min="0" class="form-control" name="qty_in" value="{{ $index->qty_in }}" form="{{ $formId }}" required></td>
                  <td><input type="number" step="1" min="0" class="form-control" name="qty_out" value="{{ $index->qty_out }}" form="{{ $formId }}" required></td>
                  <td><input type="text" class="form-control" value="{{ $index->balance }}" title="Frame stock after this entry. Updated when you save." readonly tabindex="-1"></td>
                @else
                  <td><input type="number" step="any" min="0" class="form-control js-qty-in" name="qty_in" value="{{ $index->qty_in }}" form="{{ $formId }}" required></td>
                  <td><input type="number" step="any" min="0" class="form-control js-qty-out" name="qty_out" value="{{ $index->qty_out }}" form="{{ $formId }}" required></td>
                  <td><input type="text" class="form-control js-balance" value="{{ $index->balance }}" title="Calculated automatically: Qty In − Qty Out" readonly tabindex="-1"></td>
                @endif
                <td>
                  <form id="{{ $formId }}" action="{{ route('admin2.inventory.update', ['item' => $index]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <button type="submit" class="btn btn-primary">Edit</button>
                  </form>
                </td>
                <td>
                  <form action="{{ route('admin2.inventory.delete', ['item' => $index]) }}" method="POST" onsubmit="return confirm('{{ $index->frame_id ? 'Delete this stock entry? Its quantity will be reversed on the frame. This cannot be undone.' : 'Delete this inventory item? This cannot be undone.' }}');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
        </table>
        {{ $item->links('pagination::bootstrap-4') }}
    </div>
    <script>
        // Live preview of Balance (Qty In − Qty Out). The server recalculates it on save.
        document.querySelectorAll('tbody tr').forEach(function (row) {
            var qtyIn = row.querySelector('.js-qty-in');
            var qtyOut = row.querySelector('.js-qty-out');
            var balance = row.querySelector('.js-balance');
            if (!qtyIn || !qtyOut || !balance) return;

            function recalc() {
                if (qtyIn.value === '' || qtyOut.value === '' || isNaN(qtyIn.valueAsNumber) || isNaN(qtyOut.valueAsNumber)) {
                    balance.value = '';
                    return;
                }
                balance.value = String(+(qtyIn.valueAsNumber - qtyOut.valueAsNumber).toFixed(4));
            }

            qtyIn.addEventListener('input', recalc);
            qtyOut.addEventListener('input', recalc);
        });
    </script>
</body>
</html>
