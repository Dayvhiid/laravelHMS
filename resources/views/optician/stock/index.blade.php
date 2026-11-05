<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Optician Stock</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
</head>
<body class="bg-slate-50 text-slate-800" style='font-family: Inter, "Noto Sans", sans-serif;'>
    <header class="flex flex-wrap items-center justify-between gap-4 border-b border-slate-200 bg-white px-6 py-3">
        <h1 class="text-xl font-bold text-slate-900">Optician Stock</h1>
        <nav class="flex flex-wrap items-center gap-6 text-sm font-medium">
            <a class="text-slate-700 hover:text-[#1993e5]" href="{{ route('optician.index') }}">Optician Index</a>
            <a class="text-slate-700 hover:text-[#1993e5]" href="{{ route('optician.records') }}">Optician Record</a>
            <a class="text-[#1993e5]" href="{{ route('optician.stock') }}" aria-current="page">Stock</a>
        </nav>
    </header>

    <main class="mx-auto max-w-5xl px-4 py-6">
        @if (session('success'))
            <div class="mb-4 rounded-lg border border-green-200 bg-green-50 px-4 py-3 text-green-800" role="status">{{ session('success') }}</div>
        @endif
        @if ($errors->any())
            <div class="mb-4 rounded-lg border border-red-200 bg-red-50 px-4 py-3 text-red-800" role="alert">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <section class="mb-6 rounded-xl border border-slate-200 bg-white p-4">
            <h2 class="mb-1 text-lg font-bold">New category</h2>
            <p class="mb-3 text-sm text-slate-500">Create a category first (for example "Contact lens solution"), then open it to add stock records.</p>
            <form method="POST" action="{{ route('optician.stock.categories.store') }}" class="flex flex-wrap gap-2">
                @csrf
                <label for="new-category" class="sr-only">Category name</label>
                <input id="new-category" type="text" name="name" maxlength="255" required placeholder="Category name"
                       value="{{ old('name') }}"
                       class="min-w-0 flex-1 rounded-lg border-slate-300 focus:border-[#1993e5] focus:ring-[#1993e5]">
                <button type="submit" class="rounded-lg bg-[#1993e5] px-4 py-2 text-sm font-bold text-white hover:bg-[#147bc0]">Create category</button>
            </form>
        </section>

        <section class="rounded-xl border border-slate-200 bg-white">
            <h2 class="border-b border-slate-200 px-4 py-3 text-lg font-bold">Categories</h2>
            @if ($categories->isEmpty())
                <p class="px-4 py-8 text-center text-slate-500">No categories yet. Create one above to start recording stock.</p>
            @else
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead class="bg-slate-50 text-left text-slate-600">
                            <tr>
                                <th class="px-4 py-2 font-medium">Category</th>
                                <th class="px-4 py-2 text-right font-medium">Records</th>
                                <th class="px-4 py-2 text-right font-medium">Current balance</th>
                                <th class="px-4 py-2 font-medium">Last updated</th>
                                <th class="px-4 py-2 font-medium">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr class="border-t border-slate-100 align-middle">
                                    <td class="px-4 py-2">
                                        <a href="{{ route('optician.stock.show', $category) }}" class="font-semibold text-[#1993e5] hover:underline">{{ $category->name }}</a>
                                    </td>
                                    <td class="px-4 py-2 text-right">{{ $category->records_count }}</td>
                                    <td class="px-4 py-2 text-right font-semibold">{{ $balances[$category->id] }}</td>
                                    <td class="px-4 py-2 text-slate-500">
                                        {{ $category->records_max_updated_at ? \Carbon\Carbon::parse($category->records_max_updated_at)->diffForHumans() : '—' }}
                                    </td>
                                    <td class="px-4 py-2">
                                        <div class="flex flex-wrap items-center gap-2">
                                            <a href="{{ route('optician.stock.show', $category) }}" class="rounded-md bg-[#1993e5] px-3 py-1.5 text-xs font-bold text-white hover:bg-[#147bc0]">Open</a>
                                            <details class="relative">
                                                <summary class="cursor-pointer rounded-md border border-slate-300 px-3 py-1.5 text-xs font-bold text-slate-700 hover:bg-slate-50">Rename</summary>
                                                <form method="POST" action="{{ route('optician.stock.categories.update', $category) }}" class="absolute z-10 mt-1 flex w-72 gap-2 rounded-lg border border-slate-200 bg-white p-2 shadow-lg">
                                                    @csrf
                                                    @method('PUT')
                                                    <label class="sr-only" for="rename-{{ $category->id }}">New name for {{ $category->name }}</label>
                                                    <input id="rename-{{ $category->id }}" type="text" name="name" value="{{ $category->name }}" maxlength="255" required class="min-w-0 flex-1 rounded-md border-slate-300 text-sm">
                                                    <button type="submit" class="rounded-md bg-slate-800 px-3 text-xs font-bold text-white">Save</button>
                                                </form>
                                            </details>
                                            @if ($category->records_count === 0)
                                                <form method="POST" action="{{ route('optician.stock.categories.destroy', $category) }}" onsubmit="return confirm('Delete the empty category &quot;{{ e($category->name) }}&quot;?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="rounded-md bg-red-600 px-3 py-1.5 text-xs font-bold text-white hover:bg-red-700">Delete</button>
                                                </form>
                                            @else
                                                <span class="text-xs text-slate-400" title="Only empty categories can be deleted">Has records</span>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </section>
    </main>
</body>
</html>
