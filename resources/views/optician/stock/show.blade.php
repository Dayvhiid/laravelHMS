<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $category->name }} · Optician Stock</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
</head>
<body class="bg-slate-50 text-slate-800" style='font-family: Inter, "Noto Sans", sans-serif;'>
    @php
        $field = 'w-full min-w-0 rounded-md border-slate-300 px-2 py-1.5 text-sm focus:border-[#1993e5] focus:ring-[#1993e5]';
        // Only refill the add form with the add form's own input (not an inline edit's).
        $addOld = fn ($key, $default = '') => old('_form') === 'add' ? old($key, $default) : $default;
    @endphp

    <header class="flex flex-wrap items-center justify-between gap-4 border-b border-slate-200 bg-white px-6 py-3">
        <h1 class="text-xl font-bold text-slate-900">Optician Stock</h1>
        <nav class="flex flex-wrap items-center gap-6 text-sm font-medium">
            <a class="text-slate-700 hover:text-[#1993e5]" href="{{ route('optician.index') }}">Optician Index</a>
            <a class="text-slate-700 hover:text-[#1993e5]" href="{{ route('optician.records') }}">Optician Record</a>
            <a class="text-[#1993e5]" href="{{ route('optician.stock') }}">Stock</a>
        </nav>
    </header>

    <main class="px-4 py-6">
        <div class="mb-4 flex flex-wrap items-end justify-between gap-3">
            <div>
                <a href="{{ route('optician.stock') }}" class="text-sm text-[#1993e5] hover:underline">&larr; All categories</a>
                <h2 class="text-2xl font-bold text-slate-900">{{ $category->name }}</h2>
            </div>
            <div class="rounded-lg border border-slate-200 bg-white px-4 py-2 text-right">
                <div class="text-xs text-slate-500">Current balance</div>
                <div class="text-2xl font-bold">{{ $currentBalance }}</div>
            </div>
        </div>

        @if (session('success'))
            <div class="mb-4 rounded-lg border border-green-200 bg-green-50 px-4 py-3 text-green-800" role="status">{{ session('success') }}</div>
        @endif
        @if ($errors->any())
            <div class="mb-4 rounded-lg border border-red-200 bg-red-50 px-4 py-3 text-red-800" role="alert">
                <p class="font-bold">Nothing was saved. Please fix the following:</p>
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <section class="mb-6 rounded-xl border border-slate-200 bg-white p-4">
            <h3 class="mb-3 text-lg font-bold">Add record</h3>
            <form method="POST" action="{{ route('optician.stock.records.store', $category) }}" class="grid grid-cols-2 gap-3 md:grid-cols-4 lg:grid-cols-8">
                @csrf
                <input type="hidden" name="_form" value="add">
                <label class="text-xs font-medium text-slate-600">Date
                    <input type="date" name="date" required value="{{ $addOld('date', now()->toDateString()) }}" class="{{ $field }} mt-1">
                </label>
                <label class="text-xs font-medium text-slate-600">New Stock
                    <input type="text" name="new_stock" maxlength="255" value="{{ $addOld('new_stock') }}" class="{{ $field }} mt-1">
                </label>
                <label class="text-xs font-medium text-slate-600 col-span-2 md:col-span-1 lg:col-span-2">Name
                    <input type="text" name="name" maxlength="255" required value="{{ $addOld('name') }}" class="{{ $field }} mt-1">
                </label>
                <label class="text-xs font-medium text-slate-600">Patient Code
                    <input type="text" name="patient_code" maxlength="255" value="{{ $addOld('patient_code') }}" class="{{ $field }} mt-1">
                </label>
                <label class="text-xs font-medium text-slate-600">Booklet Number
                    <input type="text" name="booklet_no" maxlength="255" value="{{ $addOld('booklet_no') }}" class="{{ $field }} mt-1">
                </label>
                <label class="text-xs font-medium text-slate-600">Qty In
                    <input type="number" name="qty_in" min="0" step="1" required value="{{ $addOld('qty_in', 0) }}" class="{{ $field }} mt-1 js-add-in">
                </label>
                <label class="text-xs font-medium text-slate-600">Qty Out
                    <input type="number" name="qty_out" min="0" step="1" required value="{{ $addOld('qty_out', 0) }}" class="{{ $field }} mt-1 js-add-out">
                </label>
                <div class="col-span-2 flex flex-wrap items-center justify-between gap-3 md:col-span-4 lg:col-span-8">
                    <p class="text-sm text-slate-500">Balance after this record: <strong class="js-add-balance" data-current="{{ $currentBalance }}">{{ $currentBalance }}</strong> <span class="text-xs">(calculated automatically)</span></p>
                    <button type="submit" class="rounded-lg bg-[#1993e5] px-4 py-2 text-sm font-bold text-white hover:bg-[#147bc0]">Add record</button>
                </div>
            </form>
        </section>

        <section class="rounded-xl border border-slate-200 bg-white">
            @if ($records->isEmpty())
                <p class="px-4 py-8 text-center text-slate-500">No records in this category yet. Add the first one above.</p>
            @else
                <div class="overflow-x-auto">
                    <table class="w-full min-w-[1100px] text-sm">
                        <thead class="bg-slate-50 text-left text-slate-600">
                            <tr>
                                <th class="px-2 py-2 font-medium">S/N</th>
                                <th class="px-2 py-2 font-medium">Date</th>
                                <th class="px-2 py-2 font-medium">New Stock</th>
                                <th class="px-2 py-2 font-medium">Name</th>
                                <th class="px-2 py-2 font-medium">Patient Code</th>
                                <th class="px-2 py-2 font-medium">Booklet Number</th>
                                <th class="px-2 py-2 font-medium">Qty In</th>
                                <th class="px-2 py-2 font-medium">Qty Out</th>
                                <th class="px-2 py-2 text-right font-medium">Balance</th>
                                <th class="px-2 py-2 font-medium" colspan="2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($records as $index => $record)
                                @php $formId = 'record-'.$record->id; @endphp
                                <tr class="border-t border-slate-100 align-middle">
                                    <td class="px-2 py-2 text-slate-500">{{ $records->firstItem() + $index }}</td>
                                    <td class="px-2 py-2"><input type="date" name="date" form="{{ $formId }}" required value="{{ $record->date->toDateString() }}" class="{{ $field }}"></td>
                                    <td class="px-2 py-2"><input type="text" name="new_stock" form="{{ $formId }}" maxlength="255" value="{{ $record->new_stock }}" class="{{ $field }}"></td>
                                    <td class="px-2 py-2"><input type="text" name="name" form="{{ $formId }}" maxlength="255" required value="{{ $record->name }}" class="{{ $field }}"></td>
                                    <td class="px-2 py-2"><input type="text" name="patient_code" form="{{ $formId }}" maxlength="255" value="{{ $record->patient_code }}" class="{{ $field }}"></td>
                                    <td class="px-2 py-2"><input type="text" name="booklet_no" form="{{ $formId }}" maxlength="255" value="{{ $record->booklet_no }}" class="{{ $field }}"></td>
                                    <td class="px-2 py-2"><input type="number" name="qty_in" form="{{ $formId }}" min="0" step="1" required value="{{ $record->qty_in }}" class="{{ $field }} w-20"></td>
                                    <td class="px-2 py-2"><input type="number" name="qty_out" form="{{ $formId }}" min="0" step="1" required value="{{ $record->qty_out }}" class="{{ $field }} w-20"></td>
                                    <td class="px-2 py-2 text-right font-semibold" title="Running balance, calculated automatically">{{ $record->balance }}</td>
                                    <td class="px-2 py-2">
                                        <form id="{{ $formId }}" method="POST" action="{{ route('optician.stock.records.update', [$category, $record]) }}">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit" class="rounded-md bg-[#1993e5] px-3 py-1.5 text-xs font-bold text-white hover:bg-[#147bc0]">Save</button>
                                        </form>
                                    </td>
                                    <td class="px-2 py-2">
                                        <form method="POST" action="{{ route('optician.stock.records.destroy', [$category, $record]) }}" onsubmit="return confirm('Delete record {{ $records->firstItem() + $index }}? Balances after it will be recalculated. This cannot be undone.');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="rounded-md bg-red-600 px-3 py-1.5 text-xs font-bold text-white hover:bg-red-700">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="border-t border-slate-100 px-4 py-3">
                    {{ $records->links() }}
                </div>
            @endif
        </section>
    </main>

    <script>
        // Preview of the add form's balance: current balance + Qty In − Qty Out. The server recalculates on save.
        (function () {
            var qtyIn = document.querySelector('.js-add-in');
            var qtyOut = document.querySelector('.js-add-out');
            var out = document.querySelector('.js-add-balance');
            if (!qtyIn || !qtyOut || !out) return;
            function recalc() {
                var current = parseInt(out.dataset.current, 10) || 0;
                out.textContent = current + (parseInt(qtyIn.value, 10) || 0) - (parseInt(qtyOut.value, 10) || 0);
            }
            qtyIn.addEventListener('input', recalc);
            qtyOut.addEventListener('input', recalc);
            recalc();
        })();
    </script>
</body>
</html>
