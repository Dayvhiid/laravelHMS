<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Stock Log</title>
</head>
<body>
    <div class="container py-4">
        <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mb-3">
            <h1 class="h3 m-0">Frame Stock Log</h1>
            <div class="d-flex gap-3">
                <a href="{{ route('admin.admin2') }}">Stock Management</a>
                <a href="{{ route('admin2.inventory') }}">Inventory List</a>
            </div>
        </div>

        <form method="GET" action="{{ route('admin2.stocklog') }}" class="row g-2 align-items-end mb-3">
            <div class="col-12 col-md-5">
                <label for="frame_id" class="form-label">Frame</label>
                <select name="frame_id" id="frame_id" class="form-select">
                    <option value="">All frames</option>
                    @foreach ($frames as $frame)
                        <option value="{{ $frame->id }}" @selected((string) ($filters['frame_id'] ?? '') === (string) $frame->id)>{{ $frame->name }}{{ $frame->special_code ? ' — '.$frame->special_code : '' }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-6 col-md-2">
                <label for="from" class="form-label">From</label>
                <input type="date" name="from" id="from" class="form-control" value="{{ $filters['from'] ?? '' }}">
            </div>
            <div class="col-6 col-md-2">
                <label for="to" class="form-label">To</label>
                <input type="date" name="to" id="to" class="form-control" value="{{ $filters['to'] ?? '' }}">
            </div>
            <div class="col-12 col-md-3 d-flex gap-2">
                <button type="submit" class="btn btn-primary">Filter</button>
                <a href="{{ route('admin2.stocklog') }}" class="btn btn-outline-secondary">Clear</a>
            </div>
        </form>

        @if ($selectedFrame)
            <div class="alert alert-info">
                <strong>{{ $selectedFrame->name }}</strong>{{ $selectedFrame->special_code ? ' — '.$selectedFrame->special_code : '' }}:
                current stock <strong>{{ (int) $selectedFrame->quantity }}</strong>
            </div>
        @endif

        <div class="table-responsive">
            <table class="table table-sm table-striped align-middle">
                <thead>
                    <tr>
                        <th scope="col">Date &amp; time</th>
                        <th scope="col">Frame</th>
                        <th scope="col">What happened</th>
                        <th scope="col" class="text-end">In</th>
                        <th scope="col" class="text-end">Out</th>
                        <th scope="col" class="text-end">Balance after</th>
                        <th scope="col">Patient</th>
                        <th scope="col">Reference</th>
                        <th scope="col">By</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($movements as $movement)
                        <tr>
                            <td class="text-nowrap">{{ $movement->created_at->format('M j, Y g:i A') }}</td>
                            <td>{{ $movement->item_name }}{{ $movement->item_type ? ' — '.$movement->item_type : '' }}</td>
                            <td>
                                {{ $movement->label() }}
                                @if ($movement->note)
                                    <div class="small text-muted">{{ $movement->note }}</div>
                                @endif
                            </td>
                            <td class="text-end text-success">{{ $movement->qty_in ? '+'.$movement->qty_in : '' }}</td>
                            <td class="text-end text-danger">{{ $movement->qty_out ? '−'.$movement->qty_out : '' }}</td>
                            <td class="text-end fw-semibold">{{ $movement->balance_after }}</td>
                            <td>
                                @if ($movement->patient_name || $movement->patient_code)
                                    {{ $movement->patient_name ?? '—' }}
                                    @if ($movement->patient_code)
                                        <div class="small text-muted">{{ $movement->patient_code }}</div>
                                    @endif
                                @else
                                    —
                                @endif
                            </td>
                            <td>{{ $movement->reference }}</td>
                            <td>{{ $movement->user_name ?? '—' }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="9"class="text-center text-muted py-4">No stock changes recorded{{ $selectedFrame || ($filters['from'] ?? null) || ($filters['to'] ?? null) ? ' for this filter' : ' yet' }}.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        {{ $movements->links('pagination::bootstrap-4') }}
    </div>
</body>
</html>
