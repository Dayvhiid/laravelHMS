<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <title>DRUG LIST</title>
</head>
<body>
    <div class="container">
        {{-- <nav class="navbar navbar-light bg-light">
            <form class="form-inline">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </nav> --}}
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
                <th scope="col">ID</th>
                <th scope="col">Drug Name</th>
                <th scope="col">Price</th>
                <th scope="col">Drug type</th>
                <th scope="col">Quantity</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach($drugs as $drug)
              <tr>
                <td>{{ $drug->id }}</td>
                <td><input type="text" class="form-control" name="name" value="{{ $drug->name }}" form="update-drug-{{ $drug->id }}" required></td>
                <td><input type="number" step="any" class="form-control" name="price" value="{{ $drug->price }}" form="update-drug-{{ $drug->id }}" required></td>
                <td><input type="text" class="form-control" name="drug_type" value="{{ $drug->drug_type }}" form="update-drug-{{ $drug->id }}" required></td>
                <td><input type="number" step="1" class="form-control" name="quantity" value="{{ $drug->quantity }}" form="update-drug-{{ $drug->id }}" required></td>
                <td>
                  <form id="update-drug-{{ $drug->id }}" action="{{ route('doctors.update', ['drugs' => $drug]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <button type="submit" class="btn btn-primary">Edit</button>
                  </form>
                </td>
                <td>
                  <form action="{{route('drugs.delete', ['drugs' => $drug ])}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
        </table>
        {{ $drugs->links('pagination::bootstrap-4') }}
    </div>
</body>
</html>