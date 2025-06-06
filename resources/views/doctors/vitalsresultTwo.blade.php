<html>
  <head>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link
      rel="stylesheet"
      as="style"
      onload="this.rel='stylesheet'"
      href="https://fonts.googleapis.com/css2?display=swap&amp;family=Inter%3Awght%40400%3B500%3B700%3B900&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900"
    />

    <title>Vitals Result</title>
    <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64," />

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  </head>
  <body>

    <div class="relative flex size-full min-h-screen flex-col bg-slate-50 group/design-root overflow-x-hidden" style='font-family: Inter, "Noto Sans", sans-serif;'>
      <div class="layout-container flex h-full grow flex-col">
        <header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-b-[#e7eef3] px-10 py-3">
          <div class="flex items-center gap-4 text-[#0e161b]">
            <div class="size-4">
              <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_6_535)">
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M47.2426 24L24 47.2426L0.757355 24L24 0.757355L47.2426 24ZM12.2426 21H35.7574L24 9.24264L12.2426 21Z"
                    fill="currentColor"
                  ></path>
                </g>
                <defs>
                  <clipPath id="clip0_6_535"><rect width="48" height="48" fill="white"></rect></clipPath>
                </defs>
              </svg>
            </div>
            <h2 class="text-[#0e161b] text-lg font-bold leading-tight tracking-[-0.015em]">VisionCare</h2>
          </div>
          <div class="flex flex-1 justify-end gap-8">
            <div class="flex items-center gap-9">
              <a class="text-[#0e161b] text-sm font-medium leading-normal" href="{{ route('doctors.treatment') }}">Treatment Plan</a>
              <a class="text-[#0e161b] text-sm font-medium leading-normal" href="{{ route('search.vitals') }} ">Vitals Records</a>
              <a class="text-[#0e161b] text-sm font-medium leading-normal" href=" {{ route('search.treatment') }} ">Treatment Records</a>
            </div>
            <button
              class="flex max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 bg-[#e7eef3] text-[#0e161b] gap-2 text-sm font-bold leading-normal tracking-[0.015em] min-w-0 px-2.5"
            >
              <div class="text-[#0e161b]" data-icon="Bell" data-size="20px" data-weight="regular">
                <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                  <path
                    d="M221.8,175.94C216.25,166.38,208,139.33,208,104a80,80,0,1,0-160,0c0,35.34-8.26,62.38-13.81,71.94A16,16,0,0,0,48,200H88.81a40,40,0,0,0,78.38,0H208a16,16,0,0,0,13.8-24.06ZM128,216a24,24,0,0,1-22.62-16h45.24A24,24,0,0,1,128,216ZM48,184c7.7-13.24,16-43.92,16-80a64,64,0,1,1,128,0c0,36.05,8.28,66.73,16,80Z"
                  ></path>
                </svg>
              </div>
            </button>
            <div
              class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10"
              style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCd66TkKE4yQEUeRqSVBW8CdLE1h51zw9j71ozd-zDzNE2ljkG_4UK9xu-nF7lhbBLP2PaNEVVLPpyTlODE9aneXhL3_xw5W8w-wlB_umaybwJGpB0vt7U3Dc7JSdM-Btxa44gw9Y1TXwkcseOP_PLWgrlA-nckMUiYcgqtKJb6wCl57aMtBDn2Rn7VoU9IzmcSBBPpP9_5Xt74L07Tyk8tnkmltNwdRX2FZncD2P9qQdgjwBMrXQnBQCUlDhA4Y0x7NdeFykzuBoY");'
            ></div>
          </div>
        </header>
        <div class="px-40 flex flex-1 justify-center py-5">
          <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
            <div class="px-4 py-3">
              <label class="flex flex-col min-w-40 h-12 w-full">
                <div class="flex w-full flex-1 items-stretch rounded-lg h-full">
                  <div
                    class="text-[#4e7a97] flex border-none bg-[#e7eef3] items-center justify-center pl-4 rounded-l-lg border-r-0"
                    data-icon="MagnifyingGlass"
                    data-size="24px"
                    data-weight="regular"
                  >
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                      <path
                        d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z"
                      ></path>
                    </svg>
                  </div>
                  <input
                    placeholder="Search by Patient ID"
                    class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#0e161b] focus:outline-0 focus:ring-0 border-none bg-[#e7eef3] focus:border-none h-full placeholder:text-[#4e7a97] px-4 rounded-l-none border-l-0 pl-2 text-base font-normal leading-normal"
                    value=""
                  />
                </div>
              </label>
            </div>
       
            <?php
                $totalResults = count($combinedResults);
                $halfResults = floor($totalResults / 2);
                $halfCombinedResults = array_slice($combinedResults, 0, $halfResults);
                ?>
            @foreach ($halfCombinedResults as $combinedResult)
                
         
            <h2 class="text-[#0e161b] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Case History</h2>
            <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
              <label class="flex flex-col min-w-40 flex-1">
                <textarea
                  placeholder="Chief Complaint (C/C)"
                  class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#0e161b] focus:outline-0 focus:ring-0 border border-[#d0dee7] bg-slate-50 focus:border-[#d0dee7] min-h-36 placeholder:text-[#4e7a97] p-[15px] text-base font-normal leading-normal"
                >  {{ $combinedResult->cc }} </textarea>
              </label>
            </div>
            <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
              <label class="flex flex-col min-w-40 flex-1">
                <textarea
                  placeholder="Present Ocular History (PoHx)"
                  class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#0e161b] focus:outline-0 focus:ring-0 border border-[#d0dee7] bg-slate-50 focus:border-[#d0dee7] min-h-36 placeholder:text-[#4e7a97] p-[15px] text-base font-normal leading-normal"
                >  {{ $combinedResult->pohx }} </textarea>
              </label>
            </div>
            <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
              <label class="flex flex-col min-w-40 flex-1">
                <textarea
                  placeholder="Past Ocular History (PfoHx)"
                  class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#0e161b] focus:outline-0 focus:ring-0 border border-[#d0dee7] bg-slate-50 focus:border-[#d0dee7] min-h-36 placeholder:text-[#4e7a97] p-[15px] text-base font-normal leading-normal"
                >  {{ $combinedResult->lee }} </textarea>
              </label>
            </div>
            <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
              <label class="flex flex-col min-w-40 flex-1">
                <textarea
                  placeholder="Lifestyle and Exposure Events (LEE)"
                  class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#0e161b] focus:outline-0 focus:ring-0 border border-[#d0dee7] bg-slate-50 focus:border-[#d0dee7] min-h-36 placeholder:text-[#4e7a97] p-[15px] text-base font-normal leading-normal"
                > {{ $combinedResult->pmhx }} </textarea>
              </label>
            </div>
            <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
              <label class="flex flex-col min-w-40 flex-1">
                <textarea
                  placeholder="Past Medical History (PmHx)"
                  class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#0e161b] focus:outline-0 focus:ring-0 border border-[#d0dee7] bg-slate-50 focus:border-[#d0dee7] min-h-36 placeholder:text-[#4e7a97] p-[15px] text-base font-normal leading-normal"
                > {{ $combinedResult->pfohx }} </textarea>
              </label>
            </div>
            <h2 class="text-[#0e161b] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Visual Examination</h2>
            <div class="px-4 py-3 @container">
              <div class="flex overflow-hidden rounded-lg border border-[#d0dee7] bg-slate-50">
                <table class="flex-1">
                  <thead>
                    <tr class="bg-slate-50">
                      <th class="table-ed93db9d-8d40-4a89-8594-a3c6ef716f33-column-120 px-4 py-3 text-left text-[#0e161b] w-[400px] text-sm font-medium leading-normal"></th>
                      <th class="table-ed93db9d-8d40-4a89-8594-a3c6ef716f33-column-240 px-4 py-3 text-left text-[#0e161b] w-[400px] text-sm font-medium leading-normal">Unaided</th>
                      <th class="table-ed93db9d-8d40-4a89-8594-a3c6ef716f33-column-360 px-4 py-3 text-left text-[#0e161b] w-[400px] text-sm font-medium leading-normal">
                        Pin Hole
                      </th>
                      <th class="table-ed93db9d-8d40-4a89-8594-a3c6ef716f33-column-480 px-4 py-3 text-left text-[#0e161b] w-[400px] text-sm font-medium leading-normal">
                        Near V/A
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="border-t border-t-[#d0dee7]">
                      <td class="table-ed93db9d-8d40-4a89-8594-a3c6ef716f33-column-120 h-[72px] px-4 py-2 w-[400px] text-[#0e161b] text-sm font-normal leading-normal">
                        Right Eye
                      </td>
                      <td class="table-ed93db9d-8d40-4a89-8594-a3c6ef716f33-column-240 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal">{{ $combinedResult->odunaided }}</td>
                      <td class="table-ed93db9d-8d40-4a89-8594-a3c6ef716f33-column-360 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal"> {{ $combinedResult->odpinhole }} </td>
                      <td class="table-ed93db9d-8d40-4a89-8594-a3c6ef716f33-column-480 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal"> {{ $combinedResult->odnearva }} </td>
                    </tr>
                    <tr class="border-t border-t-[#d0dee7]">
                      <td class="table-ed93db9d-8d40-4a89-8594-a3c6ef716f33-column-120 h-[72px] px-4 py-2 w-[400px] text-[#0e161b] text-sm font-normal leading-normal">Left Eye</td>
                      <td class="table-ed93db9d-8d40-4a89-8594-a3c6ef716f33-column-240 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal"> {{  $combinedResult->osunaided }} </td>
                      <td class="table-ed93db9d-8d40-4a89-8594-a3c6ef716f33-column-360 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal"> {{ $combinedResult->ospinhole }} </td>
                      <td class="table-ed93db9d-8d40-4a89-8594-a3c6ef716f33-column-480 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal"> Missing record from database </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <style>
                          @container(max-width:120px){.table-ed93db9d-8d40-4a89-8594-a3c6ef716f33-column-120{display: none;}}
                @container(max-width:240px){.table-ed93db9d-8d40-4a89-8594-a3c6ef716f33-column-240{display: none;}}
                @container(max-width:360px){.table-ed93db9d-8d40-4a89-8594-a3c6ef716f33-column-360{display: none;}}
                @container(max-width:480px){.table-ed93db9d-8d40-4a89-8594-a3c6ef716f33-column-480{display: none;}}
              </style>
            </div>
               <h2 class="text-[#0e161b] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Lensometry</h2>
            <div class="px-4 py-3 @container">
              <div class="flex overflow-hidden rounded-lg border border-[#d0dee7] bg-slate-50">
              {{-- <div>
                   <h2 class="text-[#0e161b] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5 mt-[30px]">Visual Examination</h2>
              </div> --}}
              {{-- Lensometry --}}
                <table class="flex-1">
                  <thead>
                    <tr class="bg-slate-50">
                      <th class="table-0ff4604b-733a-4828-be83-9f4a384d75a3-column-120 px-4 py-3 text-left text-[#0e161b] w-[400px] text-sm font-medium leading-normal"></th>
                      <th class="table-0ff4604b-733a-4828-be83-9f4a384d75a3-column-240 px-4 py-3 text-left text-[#0e161b] w-[400px] text-sm font-medium leading-normal">
                        Spherical
                      </th>
                      <th class="table-0ff4604b-733a-4828-be83-9f4a384d75a3-column-360 px-4 py-3 text-left text-[#0e161b] w-[400px] text-sm font-medium leading-normal">
                        Cylindrical
                      </th>
                      <th class="table-0ff4604b-733a-4828-be83-9f4a384d75a3-column-480 px-4 py-3 text-left text-[#0e161b] w-[400px] text-sm font-medium leading-normal">Axis</th>
                      <th class="table-0ff4604b-733a-4828-be83-9f4a384d75a3-column-600 px-4 py-3 text-left text-[#0e161b] w-[400px] text-sm font-medium leading-normal">
                        Visual Acuity
                      </th>
                    
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="border-t border-t-[#d0dee7]">
                      <td class="table-0ff4604b-733a-4828-be83-9f4a384d75a3-column-120 h-[72px] px-4 py-2 w-[400px] text-[#0e161b] text-sm font-normal leading-normal">
                        Right Eye
                      </td>
                      <td class="table-0ff4604b-733a-4828-be83-9f4a384d75a3-column-240 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal">{{ $combinedResult->lodsph }}</td>
                      <td class="table-0ff4604b-733a-4828-be83-9f4a384d75a3-column-360 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal">{{ $combinedResult->lodcyl }}</td>
                      <td class="table-0ff4604b-733a-4828-be83-9f4a384d75a3-column-480 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal">{{ $combinedResult->lodaxis }}</td>
                      <td class="table-0ff4604b-733a-4828-be83-9f4a384d75a3-column-600 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal"> {{ $combinedResult->lodva }} </td>
                     
                    </tr>
                    <tr class="border-t border-t-[#d0dee7]">
                      <td class="table-0ff4604b-733a-4828-be83-9f4a384d75a3-column-120 h-[72px] px-4 py-2 w-[400px] text-[#0e161b] text-sm font-normal leading-normal">Left Eye</td>
                      <td class="table-0ff4604b-733a-4828-be83-9f4a384d75a3-column-240 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal"> {{ $combinedResult->lossph }}</td>
                      <td class="table-0ff4604b-733a-4828-be83-9f4a384d75a3-column-360 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal"> {{ $combinedResult->loscyl }} </td>
                      <td class="table-0ff4604b-733a-4828-be83-9f4a384d75a3-column-480 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal"> {{ $combinedResult->loaxis }} </td>
                      <td class="table-0ff4604b-733a-4828-be83-9f4a384d75a3-column-600 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal"> {{ $combinedResult->losva }} </td>
                   
                    </tr>
                  </tbody>
                </table>
              </div>
              <style>
                          @container(max-width:120px){.table-0ff4604b-733a-4828-be83-9f4a384d75a3-column-120{display: none;}}
                @container(max-width:240px){.table-0ff4604b-733a-4828-be83-9f4a384d75a3-column-240{display: none;}}
                @container(max-width:360px){.table-0ff4604b-733a-4828-be83-9f4a384d75a3-column-360{display: none;}}
                @container(max-width:480px){.table-0ff4604b-733a-4828-be83-9f4a384d75a3-column-480{display: none;}}
                @container(max-width:600px){.table-0ff4604b-733a-4828-be83-9f4a384d75a3-column-600{display: none;}}
                @container(max-width:720px){.table-0ff4604b-733a-4828-be83-9f4a384d75a3-column-720{display: none;}}
              </style>
            </div>
              <h2 class="text-[#0e161b] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Auto-Refraction</h2>
            <div class="px-4 py-3 @container">
              <div class="flex overflow-hidden rounded-lg border border-[#d0dee7] bg-slate-50">
                <table class="flex-1">
                  <thead>
                    <tr class="bg-slate-50">
                      <th class="table-3e1aa050-7954-44d8-94a8-b2590c05fc7d-column-120 px-4 py-3 text-left text-[#0e161b] w-[400px] text-sm font-medium leading-normal"></th>
                      <th class="table-3e1aa050-7954-44d8-94a8-b2590c05fc7d-column-240 px-4 py-3 text-left text-[#0e161b] w-[400px] text-sm font-medium leading-normal">
                        Spherical
                      </th>
                      <th class="table-3e1aa050-7954-44d8-94a8-b2590c05fc7d-column-360 px-4 py-3 text-left text-[#0e161b] w-[400px] text-sm font-medium leading-normal">
                        Cylindrical
                      </th>
                      <th class="table-3e1aa050-7954-44d8-94a8-b2590c05fc7d-column-480 px-4 py-3 text-left text-[#0e161b] w-[400px] text-sm font-medium leading-normal">Axis</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="border-t border-t-[#d0dee7]">
                      <td class="table-3e1aa050-7954-44d8-94a8-b2590c05fc7d-column-120 h-[72px] px-4 py-2 w-[400px] text-[#0e161b] text-sm font-normal leading-normal">
                        Right Eye
                      </td>
                      <td class="table-3e1aa050-7954-44d8-94a8-b2590c05fc7d-column-240 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal">{{ $combinedResult->arodsph }}</td>
                      <td class="table-3e1aa050-7954-44d8-94a8-b2590c05fc7d-column-360 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal"> {{ $combinedResult->arodcyl }} </td>
                      <td class="table-3e1aa050-7954-44d8-94a8-b2590c05fc7d-column-480 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal"> {{ $combinedResult->arodaxis }} </td>
                    </tr>
                    <tr class="border-t border-t-[#d0dee7]">
                      <td class="table-3e1aa050-7954-44d8-94a8-b2590c05fc7d-column-120 h-[72px] px-4 py-2 w-[400px] text-[#0e161b] text-sm font-normal leading-normal">Left Eye</td>
                      <td class="table-3e1aa050-7954-44d8-94a8-b2590c05fc7d-column-240 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal">{{ $combinedResult->arossph }}</td>
                      <td class="table-3e1aa050-7954-44d8-94a8-b2590c05fc7d-column-360 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal"> {{ $combinedResult->aroscyl }} </td>
                      <td class="table-3e1aa050-7954-44d8-94a8-b2590c05fc7d-column-480 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal"> {{ $combinedResult->arosaxis}} </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <style>
                          @container(max-width:120px){.table-3e1aa050-7954-44d8-94a8-b2590c05fc7d-column-120{display: none;}}
                @container(max-width:240px){.table-3e1aa050-7954-44d8-94a8-b2590c05fc7d-column-240{display: none;}}
                @container(max-width:360px){.table-3e1aa050-7954-44d8-94a8-b2590c05fc7d-column-360{display: none;}}
                @container(max-width:480px){.table-3e1aa050-7954-44d8-94a8-b2590c05fc7d-column-480{display: none;}}
              </style>
            </div>
              <h2 class="text-[#0e161b] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Retinoscope</h2>
            <div class="px-4 py-3 @container">
                {{-- Retinoscope --}}
              <div class="flex overflow-hidden rounded-lg border border-[#d0dee7] bg-slate-50">
                <table class="flex-1">
                  <thead>
                    <tr class="bg-slate-50">
                      <th class="table-41c02972-1f93-4d83-95a0-81b214e4b82d-column-120 px-4 py-3 text-left text-[#0e161b] w-[400px] text-sm font-medium leading-normal"></th>
                      <th class="table-41c02972-1f93-4d83-95a0-81b214e4b82d-column-240 px-4 py-3 text-left text-[#0e161b] w-[400px] text-sm font-medium leading-normal">
                        Spherical
                      </th>
                      <th class="table-41c02972-1f93-4d83-95a0-81b214e4b82d-column-360 px-4 py-3 text-left text-[#0e161b] w-[400px] text-sm font-medium leading-normal">
                        Cylindrical
                      </th>
                      <th class="table-41c02972-1f93-4d83-95a0-81b214e4b82d-column-480 px-4 py-3 text-left text-[#0e161b] w-[400px] text-sm font-medium leading-normal">Axis</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="border-t border-t-[#d0dee7]">
                      <td class="table-41c02972-1f93-4d83-95a0-81b214e4b82d-column-120 h-[72px] px-4 py-2 w-[400px] text-[#0e161b] text-sm font-normal leading-normal">
                        Right Eye
                      </td>
                      <td class="table-41c02972-1f93-4d83-95a0-81b214e4b82d-column-240 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal">{{ $combinedResult->rodsph }}</td>
                      <td class="table-41c02972-1f93-4d83-95a0-81b214e4b82d-column-360 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal"> {{ $combinedResult->rodcyl }} </td>
                      <td class="table-41c02972-1f93-4d83-95a0-81b214e4b82d-column-480 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal"> {{ $combinedResult->rodaxis }} </td>
                    </tr>
                    <tr class="border-t border-t-[#d0dee7]">
                      <td class="table-41c02972-1f93-4d83-95a0-81b214e4b82d-column-120 h-[72px] px-4 py-2 w-[400px] text-[#0e161b] text-sm font-normal leading-normal">Left Eye</td>
                      <td class="table-41c02972-1f93-4d83-95a0-81b214e4b82d-column-240 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal"> {{ $combinedResult->rossph}} </td>
                      <td class="table-41c02972-1f93-4d83-95a0-81b214e4b82d-column-360 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal"> {{$combinedResult->roscyl }} </td>
                      <td class="table-41c02972-1f93-4d83-95a0-81b214e4b82d-column-480 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal"> {{ $combinedResult->rosaxis }} </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <style>
                          @container(max-width:120px){.table-41c02972-1f93-4d83-95a0-81b214e4b82d-column-120{display: none;}}
                @container(max-width:240px){.table-41c02972-1f93-4d83-95a0-81b214e4b82d-column-240{display: none;}}
                @container(max-width:360px){.table-41c02972-1f93-4d83-95a0-81b214e4b82d-column-360{display: none;}}
                @container(max-width:480px){.table-41c02972-1f93-4d83-95a0-81b214e4b82d-column-480{display: none;}}
              </style>
            </div>
            {{-- Subjective Refraction --}}
              <h2 class="text-[#0e161b] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Subjective Refraction</h2>
            <div class="px-4 py-3 @container">
              <div class="flex overflow-hidden rounded-lg border border-[#d0dee7] bg-slate-50">
                <table class="flex-1">
                  <thead>
                    <tr class="bg-slate-50">
                      <th class="table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-120 px-4 py-3 text-left text-[#0e161b] w-[400px] text-sm font-medium leading-normal"></th>
                      <th class="table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-240 px-4 py-3 text-left text-[#0e161b] w-[400px] text-sm font-medium leading-normal">
                        Spherical
                      </th>
                      <th class="table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-360 px-4 py-3 text-left text-[#0e161b] w-[400px] text-sm font-medium leading-normal">
                        Cylindrical
                      </th>
                      <th class="table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-480 px-4 py-3 text-left text-[#0e161b] w-[400px] text-sm font-medium leading-normal">Axis</th>
                      <th class="table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-600 px-4 py-3 text-left text-[#0e161b] w-[400px] text-sm font-medium leading-normal">
                        Visual Acuity
                      </th>
                      <th class="table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-600 px-4 py-3 text-left text-[#0e161b] w-[400px] text-sm font-medium leading-normal">
                        Addition
                      </th>
                       <th class="table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-600 px-4 py-3 text-left text-[#0e161b] w-[400px] text-sm font-medium leading-normal">
                        Near V/A
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="border-t border-t-[#d0dee7]">
                      <td class="table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-120 h-[72px] px-4 py-2 w-[400px] text-[#0e161b] text-sm font-normal leading-normal">
                        Right Eye
                      </td>
                      <td class="table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-240 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal">{{ $combinedResult->srodsph }} </td>
                      <td class="table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-360 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal">{{ $combinedResult->srodcyl }}</td>
                      <td class="table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-480 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal"> {{ $combinedResult->srodaxis}} </td>
                      <td class="table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-600 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal"> {{ $combinedResult->srodva }}  </td>
                       <td class="table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-600 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal">{{ $combinedResult->srodadd }}</td>
                        <td class="table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-600 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal">{{ $combinedResult->srodnva }}</td>
                    </tr>
                    <tr class="border-t border-t-[#d0dee7]">
                      <td class="table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-120 h-[72px] px-4 py-2 w-[400px] text-[#0e161b] text-sm font-normal leading-normal">Left Eye</td>
                      <td class="table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-240 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal">{{ $combinedResult->srossph }}</td>
                      <td class="table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-360 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal">{{ $combinedResult->sroscyl }}</td>
                      <td class="table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-480 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal">{{ $combinedResult->srosaxis }}</td>
                      <td class="table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-600 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal">{{ $combinedResult->srosva }}</td>
                       <td class="table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-600 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal">{{ $combinedResult->srosadd }}</td>
                        <td class="table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-600 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal">{{ $combinedResult->srosnva }}</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <style>
                          @container(max-width:120px){.table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-120{display: none;}}
                @container(max-width:240px){.table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-240{display: none;}}
                @container(max-width:360px){.table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-360{display: none;}}
                @container(max-width:480px){.table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-480{display: none;}}
                @container(max-width:600px){.table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-600{display: none;}}
              </style>
            </div>

            {{-- Final RX --}}
              <h2 class="text-[#0e161b] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Finax RX</h2>
            <div class="px-4 py-3 @container">
              <div class="flex overflow-hidden rounded-lg border border-[#d0dee7] bg-slate-50">
                <table class="flex-1">
                  <thead>
                    <tr class="bg-slate-50">
                      <th class="table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-120 px-4 py-3 text-left text-[#0e161b] w-[400px] text-sm font-medium leading-normal"></th>
                      <th class="table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-240 px-4 py-3 text-left text-[#0e161b] w-[400px] text-sm font-medium leading-normal">
                        Spherical
                      </th>
                      <th class="table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-360 px-4 py-3 text-left text-[#0e161b] w-[400px] text-sm font-medium leading-normal">
                        Cylindrical
                      </th>
                      <th class="table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-480 px-4 py-3 text-left text-[#0e161b] w-[400px] text-sm font-medium leading-normal">Axis</th>
                      <th class="table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-600 px-4 py-3 text-left text-[#0e161b] w-[400px] text-sm font-medium leading-normal">
                        Visual Acuity
                      </th>
                      <th class="table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-600 px-4 py-3 text-left text-[#0e161b] w-[400px] text-sm font-medium leading-normal">
                        Addition
                      </th>
                       <th class="table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-600 px-4 py-3 text-left text-[#0e161b] w-[400px] text-sm font-medium leading-normal">
                        Near V/A
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="border-t border-t-[#d0dee7]">
                      <td class="table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-120 h-[72px] px-4 py-2 w-[400px] text-[#0e161b] text-sm font-normal leading-normal">
                        Right Eye
                      </td>
                      <td class="table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-240 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal">{{ $combinedResult->fodsph }} </td>
                      <td class="table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-360 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal">{{ $combinedResult->fodcyl }}</td>
                      <td class="table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-480 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal"> {{ $combinedResult->fodaxis}} </td>
                      <td class="table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-600 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal"> {{ $combinedResult->fodva }}  </td>
                       <td class="table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-600 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal">{{ $combinedResult->fodadd }}</td>
                        <td class="table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-600 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal">{{ $combinedResult->fodnva }}</td>
                    </tr>
                    <tr class="border-t border-t-[#d0dee7]">
                      <td class="table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-120 h-[72px] px-4 py-2 w-[400px] text-[#0e161b] text-sm font-normal leading-normal">Left Eye</td>
                      <td class="table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-240 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal">{{ $combinedResult->fossph }}</td>
                      <td class="table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-360 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal">{{ $combinedResult->foscyl }}</td>
                      <td class="table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-480 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal">{{ $combinedResult->fosaxis }}</td>
                      <td class="table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-600 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal">{{ $combinedResult->fosva }}</td>
                       <td class="table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-600 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal">{{ $combinedResult->fosadd }}</td>
                        <td class="table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-600 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal">{{ $combinedResult->fodnva}}</td>
                    </tr>
                  </tbody>
                </table>
              </div>

              {{-- IOP --}}
               <h2 class="text-[#0e161b] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">IOP</h2>
              <div class="px-4 py-3 @container">
              <div class="flex overflow-hidden rounded-lg border border-[#d0dee7] bg-slate-50">
                <table class="flex-1">
                  <thead>
                    <tr class="bg-slate-50">
                      <th class="table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-120 px-4 py-3 text-left text-[#0e161b] w-[400px] text-sm font-medium leading-normal"></th>
                      <th class="table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-240 px-4 py-3 text-left text-[#0e161b] w-[400px] text-sm font-medium leading-normal">
                        CCT
                      </th>
                      <th class="table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-360 px-4 py-3 text-left text-[#0e161b] w-[400px] text-sm font-medium leading-normal">
                        NCT
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="border-t border-t-[#d0dee7]">
                      <td class="table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-120 h-[72px] px-4 py-2 w-[400px] text-[#0e161b] text-sm font-normal leading-normal">
                        Right Eye
                      </td>
                      <td class="table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-240 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal">{{ $combinedResult->odcct }} </td>
                      <td class="table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-360 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal">{{ $combinedResult->odnct }}</td>
                    </tr>
                    <tr class="border-t border-t-[#d0dee7]">
                      <td class="table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-120 h-[72px] px-4 py-2 w-[400px] text-[#0e161b] text-sm font-normal leading-normal">Left Eye</td>
                      <td class="table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-240 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal">{{ $combinedResult->oscct }}</td>
                      <td class="table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-360 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal">{{ $combinedResult->osnct }}</td>
                      
                    </tr>
                  </tbody>
                </table>
              </div>

              {{-- External Examination And Internal Examination --}}
               <h2 class="text-[#0e161b] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">External Examination And Internal Examination</h2>
              <div class="px-4 py-3 @container">
              <div class="flex overflow-hidden rounded-lg border border-[#d0dee7] bg-slate-50">
                <table class="flex-1">
                  <thead>
                    <tr class="bg-slate-50">
                      <th class="table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-120 px-4 py-3 text-left text-[#0e161b] w-[400px] text-sm font-medium leading-normal"></th>
                      <th class="table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-240 px-4 py-3 text-left text-[#0e161b] w-[400px] text-sm font-medium leading-normal">
                        Right Eye
                      </th>
                      <th class="table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-360 px-4 py-3 text-left text-[#0e161b] w-[400px] text-sm font-medium leading-normal">
                        Left Eye
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="border-t border-t-[#d0dee7]">
                      <td class="table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-120 h-[72px] px-4 py-2 w-[400px] text-[#0e161b] text-sm font-normal leading-normal">
                        Eyelid
                      </td>
                      <td class="table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-240 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal">{{ $combinedResult->eyelidod }} </td>
                      <td class="table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-360 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal">{{ $combinedResult->eyelidos }}</td>
                    </tr>
                    <tr class="border-t border-t-[#d0dee7]">
                      <td class="table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-120 h-[72px] px-4 py-2 w-[400px] text-[#0e161b] text-sm font-normal leading-normal">Conjuctiva</td>
                      <td class="table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-240 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal">{{ $combinedResult->conjuctivaod }}</td>
                      <td class="table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-360 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal">{{ $combinedResult->conjuctivaos }}</td>
                    </tr>
                      <tr class="border-t border-t-[#d0dee7]">
                      <td class="table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-120 h-[72px] px-4 py-2 w-[400px] text-[#0e161b] text-sm font-normal leading-normal">Cornea</td>
                      <td class="table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-240 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal">{{ $combinedResult->corneaod }}</td>
                      <td class="table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-360 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal">{{ $combinedResult->corneaos }}</td>
                    </tr>
                      <tr class="border-t border-t-[#d0dee7]">
                      <td class="table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-120 h-[72px] px-4 py-2 w-[400px] text-[#0e161b] text-sm font-normal leading-normal">Pupil</td>
                      <td class="table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-240 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal">{{ $combinedResult->pupilod }}</td>
                      <td class="table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-360 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal">{{ $combinedResult->pupilos }}</td>
                    </tr>
                    </tr>
                      <tr class="border-t border-t-[#d0dee7]">
                      <td class="table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-120 h-[72px] px-4 py-2 w-[400px] text-[#0e161b] text-sm font-normal leading-normal">Iris</td>
                      <td class="table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-240 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal">{{ $combinedResult->irisod }}</td>
                      <td class="table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-360 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal">{{ $combinedResult->irisos }}</td>
                    </tr>
                    </tr>
                      <tr class="border-t border-t-[#d0dee7]">
                      <td class="table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-120 h-[72px] px-4 py-2 w-[400px] text-[#0e161b] text-sm font-normal leading-normal">Lens</td>
                      <td class="table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-240 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal">{{ $combinedResult->lensod }}</td>
                      <td class="table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-360 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal">{{ $combinedResult->lensos }}</td>
                    </tr>
                    </tr>
                      <tr class="border-t border-t-[#d0dee7]">
                      <td class="table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-120 h-[72px] px-4 py-2 w-[400px] text-[#0e161b] text-sm font-normal leading-normal">Virtreous</td>
                      <td class="table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-240 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal">{{ $combinedResult->vitreousod }}</td>
                      <td class="table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-360 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal">{{ $combinedResult->vitreousos }}</td>
                    </tr>
                    </tr>
                      <tr class="border-t border-t-[#d0dee7]">
                      <td class="table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-120 h-[72px] px-4 py-2 w-[400px] text-[#0e161b] text-sm font-normal leading-normal">C/D Ratio</td>
                      <td class="table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-240 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal">{{ $combinedResult->cdratiood }}</td>
                      <td class="table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-360 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal">{{ $combinedResult->cdratioos }}</td>
                    </tr>
                    </tr>
                      <tr class="border-t border-t-[#d0dee7]">
                      <td class="table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-120 h-[72px] px-4 py-2 w-[400px] text-[#0e161b] text-sm font-normal leading-normal">Macula</td>
                      <td class="table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-240 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal">{{ $combinedResult->macularod }}</td>
                      <td class="table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-360 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal">{{ $combinedResult->maculaos }}</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <style>
                          @container(max-width:120px){.table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-120{display: none;}}
                @container(max-width:240px){.table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-240{display: none;}}
                @container(max-width:360px){.table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-360{display: none;}}
                @container(max-width:480px){.table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-480{display: none;}}
                @container(max-width:600px){.table-ae47780c-e688-4c02-9f3e-0f37f1371680-column-600{display: none;}}
              </style>
            </div>
          </div>
        </div>
           @endforeach
      </div>
    </div>
  </body>
</html>