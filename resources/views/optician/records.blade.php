<html>
  <head>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link
      rel="stylesheet"
      as="style"
      onload="this.rel='stylesheet'"
      href="https://fonts.googleapis.com/css2?display=swap&amp;family=Inter%3Awght%40400%3B500%3B700%3B900&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900"
    />

    <title>Optician Records</title>
    <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64," />

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  </head>
  <body>
    @php
      $cellClass = 'px-4 py-2 align-top text-[#6a7681] text-sm font-normal leading-normal';
      $inputClass = 'form-input flex w-full min-w-0 flex-1 rounded-lg text-[#111418] focus:outline-0 focus:ring-0 border border-[#dbe0e6] bg-white focus:border-[#dbe0e6] h-14 placeholder:text-[#60758a] px-3 text-base font-normal leading-normal';
      // Multi-line fields: grow with their content so every line stays visible.
      $textareaClass = 'form-textarea js-autogrow block w-full min-w-0 rounded-lg text-[#111418] focus:outline-0 focus:ring-0 border border-[#dbe0e6] bg-white focus:border-[#dbe0e6] min-h-14 placeholder:text-[#60758a] px-3 py-3 text-base font-normal leading-normal resize-y overflow-hidden';
      $rows = array_values(old('patients', [[]]));
    @endphp
    <form method="POST" action="{{ route('optician.store') }}">
    @csrf
    <div class="relative flex size-full min-h-screen flex-col bg-white group/design-root overflow-x-hidden" style='font-family: Inter, "Noto Sans", sans-serif;'>
      <div class="layout-container flex h-full grow flex-col">
        <header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-b-[#f1f2f4] px-10 py-3">
          <div class="flex items-center gap-4 text-[#121416]">
            <div class="size-4">
              <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M4 42.4379C4 42.4379 14.0962 36.0744 24 41.1692C35.0664 46.8624 44 42.2078 44 42.2078L44 7.01134C44 7.01134 35.068 11.6577 24.0031 5.96913C14.0971 0.876274 4 7.27094 4 7.27094L4 42.4379Z"
                  fill="currentColor"
                ></path>
              </svg>
            </div>
            <h2 class="text-[#121416] text-lg font-bold leading-tight tracking-[-0.015em]">Optician Records</h2>
          </div>
          <div class="flex flex-1 justify-end gap-8">
            <nav class="flex items-center gap-8">
                    <a class="text-sm font-medium text-slate-700 hover:text-[#1993e5] transition-colors duration-200"
                        href=" {{ route('optician.list') }} ">Optician Record List</a>
                    <a class="text-sm font-medium text-slate-700 hover:text-[#1993e5] transition-colors duration-200"
                        href=" {{ route('optician.find') }}">Optician Record Search</a>
                </nav>
            <div
              class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10"
              style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAodQrXkhRVwSa95Mo5rgyvTwAnPljtqRABiVfcSRJ6uEOT1jw9213JcPRle2-rUrqsrrZL8kQ8YyjESsBlLDdeuu1FzCojabenrVGn-IBnEe2GFp-GdIYHKjsgradkPQaM66M9Cae10ZG3DyUvF2Af3WDiNVg6h5rk8bM8FSRYdE_Zr_KsvHFngHqwrIppGo9O_oeMdsYxcEnVz0JVbZBrLaQld_ITv9LV0QWqoU7oPjY9j7UPFI7MN27qLKGm_GT6xK2fJxx24sxy");'
            ></div>
          </div>
        </header>
        <div class="px-6 flex flex-1 justify-center py-5">
          <div class="layout-content-container flex flex-col w-full flex-1">
            <div class="flex flex-wrap justify-between gap-3 p-4"><p class="text-[#121416] tracking-light text-[32px] font-bold leading-tight min-w-72">Patient Details</p></div>

            @if (session('success'))
              <div class="mx-4 mb-2 rounded-xl border border-green-200 bg-green-50 px-4 py-3 text-green-800" role="status">
                {{ session('success') }}
              </div>
            @endif
            @if ($errors->any())
              <div class="mx-4 mb-2 rounded-xl border border-red-200 bg-red-50 px-4 py-3 text-red-800" role="alert">
                <p class="font-bold">Nothing was saved. Please fix the following:</p>
                <ul class="list-disc pl-5">
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif

            <p class="px-4 text-sm text-[#6a7681]">Power, Posted From and Frame Type can span several lines: press Enter for a new line. The box grows as you type (up to 255 characters).</p>

            <div class="px-4 py-3 @container">
              <div class="flex overflow-x-auto rounded-xl border border-[#dde1e3] bg-white">
                <table class="flex-1" id="patientTable">
                  <thead>
                    <tr class="bg-white">
                      <th class="px-4 py-3 text-left text-[#121416] w-[170px] text-sm font-medium leading-normal">Date</th>
                      <th class="px-4 py-3 text-left text-[#121416] w-[300px] text-sm font-medium leading-normal">Patient Name</th>
                      <th class="px-4 py-3 text-left text-[#121416] w-[260px] text-sm font-medium leading-normal">Power</th>
                      <th class="px-4 py-3 text-left text-[#121416] w-[260px] text-sm font-medium leading-normal">Posted From</th>
                      <th class="px-4 py-3 text-left text-[#121416] w-[200px] text-sm font-medium leading-normal">Card Number</th>
                      <th class="px-4 py-3 text-left text-[#121416] w-[260px] text-sm font-medium leading-normal">Frame Type</th>
                      <th class="px-4 py-3 text-left text-[#121416] w-[120px] text-sm font-medium leading-normal">Quantity</th>
                      <th class="px-4 py-3 text-left text-[#121416] w-[100px] text-sm font-medium leading-normal">Action</th>
                    </tr>
                  </thead>
                  <tbody id="tableBody">
                    @foreach ($rows as $i => $row)
                    <tr class="border-t border-t-[#dde1e3] patient-row">
                      <td class="{{ $cellClass }}">
                        <input type="date" name="patients[{{ $i }}][date]" class="{{ $inputClass }}" value="{{ $row['date'] ?? '' }}" />
                      </td>
                      <td class="{{ $cellClass }}">
                        <input type="text" name="patients[{{ $i }}][patient_name]" maxlength="100" class="{{ $inputClass }}" value="{{ $row['patient_name'] ?? '' }}" />
                      </td>
                      <td class="{{ $cellClass }}">
                        <textarea name="patients[{{ $i }}][power]" rows="2" maxlength="255" class="{{ $textareaClass }}">{{ $row['power'] ?? '' }}</textarea>
                      </td>
                      <td class="{{ $cellClass }}">
                        <textarea name="patients[{{ $i }}][posted_from]" rows="2" maxlength="255" class="{{ $textareaClass }}">{{ $row['posted_from'] ?? '' }}</textarea>
                      </td>
                      <td class="{{ $cellClass }}">
                        <input type="text" name="patients[{{ $i }}][card_number]" maxlength="50" class="{{ $inputClass }}" value="{{ $row['card_number'] ?? '' }}" />
                      </td>
                      <td class="{{ $cellClass }}">
                        <textarea name="patients[{{ $i }}][frame_type]" rows="2" maxlength="255" class="{{ $textareaClass }}">{{ $row['frame_type'] ?? '' }}</textarea>
                      </td>
                      <td class="{{ $cellClass }}">
                        <input type="text" name="patients[{{ $i }}][qty]" class="{{ $inputClass }}" value="{{ $row['qty'] ?? '' }}" />
                      </td>
                      <td class="{{ $cellClass }}">
                        <button type="button" onclick="addNewRow()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                          Add
                        </button>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>

              <div class="flex px-4 py-3 justify-end">
              <button
                type="submit"
                class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-[#0c7ff2] text-white text-sm font-bold leading-normal tracking-[0.015em]"
              >
                <span class="truncate">Submit</span>
              </button>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </form>
    <script>
      // Grow a multi-line box to fit its text, so no line is hidden behind a scrollbar.
      function autoGrow(el) {
        el.style.height = 'auto';
        el.style.height = el.scrollHeight + 'px';
      }
      document.addEventListener('input', function (e) {
        if (e.target.classList && e.target.classList.contains('js-autogrow')) autoGrow(e.target);
      });
      document.querySelectorAll('.js-autogrow').forEach(autoGrow);

      let rowCount = document.querySelectorAll('#tableBody tr.patient-row').length;
      function addNewRow() {
        const tableBody = document.getElementById('tableBody');
        const newRow = tableBody.querySelector('tr.patient-row').cloneNode(true);

        newRow.querySelectorAll('input, textarea').forEach(function (field) {
          field.name = field.name.replace(/patients\[\d+\]/, 'patients[' + rowCount + ']');
          field.value = '';
          if (field.tagName === 'TEXTAREA') field.style.height = '';
        });

        tableBody.appendChild(newRow);
        rowCount++;
      }
    </script>
  </body>
</html>
