<html>
  <head>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link
      rel="stylesheet"
      as="style"
      onload="this.rel='stylesheet'"
      href="https://fonts.googleapis.com/css2?display=swap&amp;family=Inter%3Awght%40400%3B500%3B700%3B900&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900"
    />

    <title>Stitch Design</title>
    <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64," />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  </head>
  <body>
    @php
      $inputClass = 'form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#111518] focus:outline-0 focus:ring-0 border border-[#d5dce2] bg-gray-50 focus:border-[#d5dce2] h-14 placeholder:text-[#5e7687] px-3 text-base font-normal leading-normal';
      $cellClass = 'h-[72px] px-4 py-2 text-[#4d7999] text-sm font-normal leading-normal';
      $rows = array_values(old('inputs', [[]]));
    @endphp
       <form action="{{ route('admin2.stock.store') }}" method="POST" id="stock-form">
         @csrf
    <div class="relative flex size-full min-h-screen flex-col bg-slate-50 group/design-root overflow-x-hidden" style='font-family: Inter, "Noto Sans", sans-serif;'>
      <div class="layout-container flex h-full grow flex-col">
        <header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-b-[#e7eef3] px-10 py-3">
          <div class="flex items-center gap-4 text-[#0e161b]">
            <div class="size-4">
              <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M39.475 21.6262C40.358 21.4363 40.6863 21.5589 40.7581 21.5934C40.7876 21.655 40.8547 21.857 40.8082 22.3336C40.7408 23.0255 40.4502 24.0046 39.8572 25.2301C38.6799 27.6631 36.5085 30.6631 33.5858 33.5858C30.6631 36.5085 27.6632 38.6799 25.2301 39.8572C24.0046 40.4502 23.0255 40.7407 22.3336 40.8082C21.8571 40.8547 21.6551 40.7875 21.5934 40.7581C21.5589 40.6863 21.4363 40.358 21.6262 39.475C21.8562 38.4054 22.4689 36.9657 23.5038 35.2817C24.7575 33.2417 26.5497 30.9744 28.7621 28.762C30.9744 26.5497 33.2417 24.7574 35.2817 23.5037C36.9657 22.4689 38.4054 21.8562 39.475 21.6262ZM4.41189 29.2403L18.7597 43.5881C19.8813 44.7097 21.4027 44.9179 22.7217 44.7893C24.0585 44.659 25.5148 44.1631 26.9723 43.4579C29.9052 42.0387 33.2618 39.5667 36.4142 36.4142C39.5667 33.2618 42.0387 29.9052 43.4579 26.9723C44.1631 25.5148 44.659 24.0585 44.7893 22.7217C44.9179 21.4027 44.7097 19.8813 43.5881 18.7597L29.2403 4.41187C27.8527 3.02428 25.8765 3.02573 24.2861 3.36776C22.6081 3.72863 20.7334 4.58419 18.8396 5.74801C16.4978 7.18716 13.9881 9.18353 11.5858 11.5858C9.18354 13.988 7.18717 16.4978 5.74802 18.8396C4.58421 20.7334 3.72865 22.6081 3.36778 24.2861C3.02574 25.8765 3.02429 27.8527 4.41189 29.2403Z"
                  fill="currentColor"
                ></path>
              </svg>
            </div>
            <h2 class="text-[#0e161b] text-lg font-bold leading-tight tracking-[-0.015em]">MediCare</h2>
          </div>
          <div class="flex flex-1 justify-end gap-8">
            <div class="flex items-center gap-9">
               <a class="text-[#0e161b] text-sm font-medium leading-normal"  href="{{route('services.index')}}">Services</a>
              <a class="text-[#0e161b] text-sm font-medium leading-normal"  href="{{route('admin2.inventory')}}">Inventory List</a>
              <a class="text-[#0e161b] text-sm font-medium leading-normal"  href="{{route('admin2.stocklog')}}">Stock Log</a>
              <a class="text-[#0e161b] text-sm font-medium leading-normal" href="{{route('admin2.drugs')}}" >Drug</a>
              <a class="text-[#0e161b] text-sm font-medium leading-normal"  href="{{route('admin2.frame')}}"  >Frame</a>
              <a class="text-[#0e161b] text-sm font-medium leading-normal"   href="{{route('admin2.lens')}}">Lens</a>
            </div>
            <div
              class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10"
              style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCbb49Pi3NNur_JxgzAGt8BFBZNaRM5Oy-NychuL-ThKXSbxcRuT4h2ot3I4jws9XOEbKSQGHAnPVGfGMmUkXf_eRVe1YOTQVRbd5sd6lW6SqEkVIdpZtxIWctRGgfMVO312hMGw0mSgTxJ9R7bC3eJd_REWwEwEA3EKxvuc5_yrKMkfIcTkRynm7BjANx08RBSgiY9MWrE2vN4J_k9mjaNBoa6d67MESk6pP1_hxlKkq1WX9gcsfNOsF0eE7RYhQmJe1lXvf1id00");'
            ></div>
          </div>
        </header>
        <div class="px-6 flex flex-1 justify-center py-5">
          <div class="layout-content-container flex flex-col w-full flex-1">
            <div class="flex flex-wrap justify-between gap-3 p-4">
              <p class="text-[#0e161b] tracking-light text-[32px] font-bold leading-tight min-w-72">Stock Management</p>
              <a href="{{ route('admin2.stocklog') }}" class="self-center text-sm font-bold text-[#1581cf]">View stock log &rarr;</a>
            </div>

            @if (Session::has('success'))
              <div class="mx-4 mb-2 rounded-xl border border-green-200 bg-green-50 px-4 py-3 text-green-800" role="status">
                {{ Session::get('success') }}
              </div>
            @endif
            @if ($errors->any())
              <div class="mx-4 mb-2 rounded-xl border border-red-200 bg-red-50 px-4 py-3 text-red-800" role="alert">
                <ul class="list-disc pl-5">
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif
            @if ($frames->isEmpty())
              <div class="mx-4 mb-2 rounded-xl border border-amber-200 bg-amber-50 px-4 py-3 text-amber-800">
                There are no frames on the frame list yet. <a class="font-bold underline" href="{{ route('admin2.frame') }}">Add frames</a> first, then take stock here.
              </div>
            @endif

            <div class="px-4 py-3 @container">
              <div class="flex overflow-x-auto rounded-xl border border-[#d0dde7] bg-slate-50">
                <table class="flex-1" id="table">
                  <thead>
                    <tr class="bg-slate-50">
                      <th class="px-4 py-3 text-left text-[#0e161b] w-[170px] text-sm font-medium leading-normal">Date</th>
                      <th class="px-4 py-3 text-left text-[#0e161b] w-[340px] text-sm font-medium leading-normal">Frame (name &mdash; type)</th>
                      <th class="px-4 py-3 text-left text-[#0e161b] w-[220px] text-sm font-medium leading-normal">Patient Name</th>
                      <th class="px-4 py-3 text-left text-[#0e161b] w-[200px] text-sm font-medium leading-normal">Patient Code</th>
                      <th class="px-4 py-3 text-left text-[#0e161b] w-[200px] text-sm font-medium leading-normal">Reciept Number</th>
                      <th class="px-4 py-3 text-left text-[#0e161b] w-[130px] text-sm font-medium leading-normal">Qty In</th>
                      <th class="px-4 py-3 text-left text-[#0e161b] w-[130px] text-sm font-medium leading-normal">Qty Out</th>
                      <th class="px-4 py-3 text-left text-[#0e161b] w-[130px] text-sm font-medium leading-normal">Balance</th>
                      <th class="px-4 py-3 text-left text-[#0e161b] w-[120px] text-sm font-medium leading-normal">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($rows as $i => $row)
                      <tr class="border-t border-t-[#d0dde7] stock-row">
                        <td class="{{ $cellClass }}">
                          <input type="date" name="inputs[{{ $i }}][date]" class="{{ $inputClass }}" value="{{ $row['date'] ?? now()->toDateString() }}" required />
                        </td>
                        <td class="{{ $cellClass }}">
                          <select name="inputs[{{ $i }}][frame_id]" class="{{ $inputClass }} js-frame" required>
                            <option value="">Select a frame</option>
                            @foreach ($frames as $frame)
                              <option value="{{ $frame->id }}" data-qty="{{ (int) $frame->quantity }}" @selected((string) ($row['frame_id'] ?? '') === (string) $frame->id)>{{ $frame->name }}{{ $frame->special_code ? ' — '.$frame->special_code : '' }} (in stock: {{ (int) $frame->quantity }})</option>
                            @endforeach
                          </select>
                        </td>
                        <td class="{{ $cellClass }}">
                          <input placeholder="Enter Patient Name" name="inputs[{{ $i }}][patient_name]" class="{{ $inputClass }}" value="{{ $row['patient_name'] ?? '' }}" required />
                        </td>
                        <td class="{{ $cellClass }}">
                          <input placeholder="Enter Patient Code" name="inputs[{{ $i }}][patient_code]" class="{{ $inputClass }}" value="{{ $row['patient_code'] ?? '' }}" required />
                        </td>
                        <td class="{{ $cellClass }}">
                          <input placeholder="Enter Code" name="inputs[{{ $i }}][booklet_no]" class="{{ $inputClass }}" value="{{ $row['booklet_no'] ?? '' }}" required />
                        </td>
                        <td class="{{ $cellClass }}">
                          <input type="number" min="0" step="1" placeholder="0" name="inputs[{{ $i }}][qty_in]" class="{{ $inputClass }} js-qty-in" value="{{ $row['qty_in'] ?? 0 }}" required />
                        </td>
                        <td class="{{ $cellClass }}">
                          <input type="number" min="0" step="1" placeholder="0" name="inputs[{{ $i }}][qty_out]" class="{{ $inputClass }} js-qty-out" value="{{ $row['qty_out'] ?? 0 }}" required />
                        </td>
                        <td class="{{ $cellClass }}">
                          <input class="{{ $inputClass }} js-balance" placeholder="Auto" title="Calculated automatically: frame stock + Qty In − Qty Out" readonly tabindex="-1" />
                        </td>
                        <td class="{{ $cellClass }}">
                          @if ($i === 0)
                            <button type="button" id="add" class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-10 px-4 bg-[#e7eef3] text-[#0e161b] text-sm font-bold leading-normal tracking-[0.015em]">
                              <span class="truncate">Add</span>
                            </button>
                          @else
                            <button type="button" class="remove-table-row flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-10 px-4 bg-red-500 text-white text-sm font-bold leading-normal tracking-[0.015em]">Remove</button>
                          @endif
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>

            <div class="flex px-4 py-3 justify-end">
              <button type="submit" class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-10 px-4 bg-[#1581cf] text-slate-50 text-sm font-bold leading-normal tracking-[0.015em]" @disabled($frames->isEmpty())>
                <span class="truncate">Submit</span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
</form>
<script>
$(document).ready(function() {
  var rowCounter = $('#table tbody tr.stock-row').length - 1;

  // Balance = the chosen frame's current stock + Qty In - Qty Out. The server recalculates it on save.
  function recalc(row) {
    var option = row.find('.js-frame option:selected');
    var balance = row.find('.js-balance');
    if (!option.val()) { balance.val(''); return; }
    var stock = parseInt(option.data('qty'), 10) || 0;
    var qtyIn = parseInt(row.find('.js-qty-in').val(), 10) || 0;
    var qtyOut = parseInt(row.find('.js-qty-out').val(), 10) || 0;
    balance.val(stock + qtyIn - qtyOut);
  }

  $(document).on('change input', '.js-frame, .js-qty-in, .js-qty-out', function() {
    recalc($(this).closest('tr'));
  });
  $('#table tbody tr.stock-row').each(function() { recalc($(this)); });

  $(document).on('click', '#add', function() {
    rowCounter++;
    var newRow = $('#table tbody tr.stock-row').first().clone();

    newRow.find('input, select').each(function() {
      var name = $(this).attr('name');
      if (name) {
        $(this).attr('name', name.replace(/inputs\[\d+\]/, 'inputs[' + rowCounter + ']'));
      }
    });
    // Keep the date; start everything else empty.
    newRow.find('input:not([type=date])').val('');
    newRow.find('.js-qty-in, .js-qty-out').val('0');
    newRow.find('.js-frame').val('');
    newRow.find('#add').replaceWith(
      $('<button>', {
        type: 'button',
        class: 'remove-table-row flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-10 px-4 bg-red-500 text-white text-sm font-bold leading-normal tracking-[0.015em]',
        text: 'Remove'
      })
    );

    $('#table tbody').append(newRow);
  });

  $(document).on('click', '.remove-table-row', function() {
    $(this).closest('tr').remove();
  });
});
</script>
</body>
</html>
