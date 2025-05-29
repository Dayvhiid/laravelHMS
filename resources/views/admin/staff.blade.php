<html>
  <head>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link
      rel="stylesheet"
      as="style"
      onload="this.rel='stylesheet'"
      href="https://fonts.googleapis.com/css2?display=swap&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900&amp;family=Public+Sans%3Awght%40400%3B500%3B700%3B900"
    />

    <title>Staff Management</title>
    <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64," />

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  </head>
  <body>
    <div class="relative flex size-full min-h-screen flex-col bg-slate-50 group/design-root overflow-x-hidden" style='font-family: "Public Sans", "Noto Sans", sans-serif;'>
      <div class="layout-container flex h-full grow flex-col">
        <div class="gap-1 px-6 flex flex-1 justify-center py-5">
          <div class="layout-content-container flex flex-col w-80">
            <div class="flex h-full min-h-[700px] flex-col justify-between bg-slate-50 p-4">
              <div class="flex flex-col gap-4">
                <h1 class="text-[#0e161b] text-base font-medium leading-normal">Acme Health</h1>
                <div class="flex flex-col gap-2">
                  <div class="flex items-center gap-3 px-3 py-2">
                    <div class="text-[#0e161b]" data-icon="House" data-size="24px" data-weight="regular">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                        <path
                          d="M218.83,103.77l-80-75.48a1.14,1.14,0,0,1-.11-.11,16,16,0,0,0-21.53,0l-.11.11L37.17,103.77A16,16,0,0,0,32,115.55V208a16,16,0,0,0,16,16H96a16,16,0,0,0,16-16V160h32v48a16,16,0,0,0,16,16h48a16,16,0,0,0,16-16V115.55A16,16,0,0,0,218.83,103.77ZM208,208H160V160a16,16,0,0,0-16-16H112a16,16,0,0,0-16,16v48H48V115.55l.11-.1L128,40l79.9,75.43.11.1Z"
                        ></path>
                      </svg>
                    </div>
                    <p class="text-[#0e161b] text-sm font-medium leading-normal">
                       <a class="text-[#0e141b] text-sm font-medium leading-normal" href="/admin/dashboard">Dashboard</a>
                    </p>
                  </div>
                  {{-- <div class="flex items-center gap-3 px-3 py-2 rounded-lg bg-[#e7eef3]">
                    <div class="text-[#0e161b]" data-icon="Users" data-size="24px" data-weight="fill">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                        <path
                          d="M164.47,195.63a8,8,0,0,1-6.7,12.37H10.23a8,8,0,0,1-6.7-12.37,95.83,95.83,0,0,1,47.22-37.71,60,60,0,1,1,66.5,0A95.83,95.83,0,0,1,164.47,195.63Zm87.91-.15a95.87,95.87,0,0,0-47.13-37.56A60,60,0,0,0,144.7,54.59a4,4,0,0,0-1.33,6A75.83,75.83,0,0,1,147,150.53a4,4,0,0,0,1.07,5.53,112.32,112.32,0,0,1,29.85,30.83,23.92,23.92,0,0,1,3.65,16.47,4,4,0,0,0,3.95,4.64h60.3a8,8,0,0,0,7.73-5.93A8.22,8.22,0,0,0,252.38,195.48Z"
                        ></path>
                      </svg>
                    </div>
                    <p class="text-[#0e161b] text-sm font-medium leading-normal">Staff</p>
                  </div> --}}
                  <div class="flex items-center gap-3 px-3 py-2">
                    <div class="text-[#0e161b]" data-icon="UsersThree" data-size="24px" data-weight="regular">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                        <path
                          d="M244.8,150.4a8,8,0,0,1-11.2-1.6A51.6,51.6,0,0,0,192,128a8,8,0,0,1-7.37-4.89,8,8,0,0,1,0-6.22A8,8,0,0,1,192,112a24,24,0,1,0-23.24-30,8,8,0,1,1-15.5-4A40,40,0,1,1,219,117.51a67.94,67.94,0,0,1,27.43,21.68A8,8,0,0,1,244.8,150.4ZM190.92,212a8,8,0,1,1-13.84,8,57,57,0,0,0-98.16,0,8,8,0,1,1-13.84-8,72.06,72.06,0,0,1,33.74-29.92,48,48,0,1,1,58.36,0A72.06,72.06,0,0,1,190.92,212ZM128,176a32,32,0,1,0-32-32A32,32,0,0,0,128,176ZM72,120a8,8,0,0,0-8-8A24,24,0,1,1,87.24,82a8,8,0,1,0,15.5-4A40,40,0,1,0,37,117.51,67.94,67.94,0,0,0,9.6,139.19a8,8,0,1,0,12.8,9.61A51.6,51.6,0,0,1,64,128,8,8,0,0,0,72,120Z"
                        ></path>
                      </svg>
                    </div>
                    <p class="text-[#0e161b] text-sm font-medium leading-normal">
                       <a class="text-[#0e141b] text-sm font-medium leading-normal" href="/admin/demographics">Patient Demographics</a>
                    </p>
                  </div>
                  <div class="flex items-center gap-3 px-3 py-2">
                    <div class="text-[#0e161b]" data-icon="Calendar" data-size="24px" data-weight="regular">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                        <path
                          d="M208,32H184V24a8,8,0,0,0-16,0v8H88V24a8,8,0,0,0-16,0v8H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32ZM72,48v8a8,8,0,0,0,16,0V48h80v8a8,8,0,0,0,16,0V48h24V80H48V48ZM208,208H48V96H208V208Zm-96-88v64a8,8,0,0,1-16,0V132.94l-4.42,2.22a8,8,0,0,1-7.16-14.32l16-8A8,8,0,0,1,112,120Zm59.16,30.45L152,176h16a8,8,0,0,1,0,16H136a8,8,0,0,1-6.4-12.8l28.78-38.37A8,8,0,1,0,145.07,132a8,8,0,1,1-13.85-8A24,24,0,0,1,176,136,23.76,23.76,0,0,1,171.16,150.45Z"
                        ></path>
                      </svg>
                    </div>
                    <p class="text-[#0e161b] text-sm font-medium leading-normal">
                        <a class="text-[#0e141b] text-sm font-medium leading-normal" href="/inventory/analytics">Inventory Analytics</a>
                    </p>
                  </div>
                  <div class="flex items-center gap-3 px-3 py-2">
                    <div class="text-[#0e161b]" data-icon="CurrencyDollar" data-size="24px" data-weight="regular">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                        <path
                          d="M152,120H136V56h8a32,32,0,0,1,32,32,8,8,0,0,0,16,0,48.05,48.05,0,0,0-48-48h-8V24a8,8,0,0,0-16,0V40h-8a48,48,0,0,0,0,96h8v64H104a32,32,0,0,1-32-32,8,8,0,0,0-16,0,48.05,48.05,0,0,0,48,48h16v16a8,8,0,0,0,16,0V216h16a48,48,0,0,0,0-96Zm-40,0a32,32,0,0,1,0-64h8v64Zm40,80H136V136h16a32,32,0,0,1,0,64Z"
                        ></path>
                      </svg>
                    </div>
                    <p class="text-[#0e161b] text-sm font-medium leading-normal">
                        <a class="text-[#0e141b] text-sm font-medium leading-normal" href="/invoice/analytics">Invoice Analytics</a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
            <div class="flex flex-wrap justify-between gap-3 p-4">
              <div class="flex min-w-72 flex-col gap-3">
                <p class="text-[#0e161b] tracking-light text-[32px] font-bold leading-tight">Staff Management</p>
                <p class="text-[#4e7a97] text-sm font-normal leading-normal">Manage staff information, schedules, and roles within the hospital.</p>
              </div>
            </div>
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
                    placeholder="Search staff by name or role"
                    class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#0e161b] focus:outline-0 focus:ring-0 border-none bg-[#e7eef3] focus:border-none h-full placeholder:text-[#4e7a97] px-4 rounded-l-none border-l-0 pl-2 text-base font-normal leading-normal"
                    value=""
                  />
                </div>
              </label>
            </div>
            <div class="px-4 py-3 @container">
              <div class="flex overflow-hidden rounded-lg border border-[#d0dee7] bg-slate-50">
                <table class="flex-1">
                  <thead>
                    <tr class="bg-slate-50">
                      <th class="table-5e20ea4d-86e5-41ec-bf4e-29294ee3e8dd-column-120 px-4 py-3 text-left text-[#0e161b] w-[400px] text-sm font-medium leading-normal">Name</th>
                      <th class="table-5e20ea4d-86e5-41ec-bf4e-29294ee3e8dd-column-240 px-4 py-3 text-left text-[#0e161b] w-[400px] text-sm font-medium leading-normal">Role</th>
                      <th class="table-5e20ea4d-86e5-41ec-bf4e-29294ee3e8dd-column-360 px-4 py-3 text-left text-[#0e161b] w-[400px] text-sm font-medium leading-normal">
                        Department
                      </th>
                      <th class="table-5e20ea4d-86e5-41ec-bf4e-29294ee3e8dd-column-480 px-4 py-3 text-left text-[#0e161b] w-[400px] text-sm font-medium leading-normal">
                        Schedule
                      </th>
                      <th class="table-5e20ea4d-86e5-41ec-bf4e-29294ee3e8dd-column-600 px-4 py-3 text-left text-[#0e161b] w-60 text-sm font-medium leading-normal">Status</th>
                      <th class="table-5e20ea4d-86e5-41ec-bf4e-29294ee3e8dd-column-720 px-4 py-3 text-left text-[#0e161b] w-60 text-[#4e7a97] text-sm font-medium leading-normal">
                        Actions
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="border-t border-t-[#d0dee7]">
                      <td class="table-5e20ea4d-86e5-41ec-bf4e-29294ee3e8dd-column-120 h-[72px] px-4 py-2 w-[400px] text-[#0e161b] text-sm font-normal leading-normal">
                        Dr. Emily Carter
                      </td>
                      <td class="table-5e20ea4d-86e5-41ec-bf4e-29294ee3e8dd-column-240 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal">
                        Cardiologist
                      </td>
                      <td class="table-5e20ea4d-86e5-41ec-bf4e-29294ee3e8dd-column-360 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal">
                        Cardiology
                      </td>
                      <td class="table-5e20ea4d-86e5-41ec-bf4e-29294ee3e8dd-column-480 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal">
                        Mon-Fri, 9am-5pm
                      </td>
                      <td class="table-5e20ea4d-86e5-41ec-bf4e-29294ee3e8dd-column-600 h-[72px] px-4 py-2 w-60 text-sm font-normal leading-normal">
                        <button
                          class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-8 px-4 bg-[#e7eef3] text-[#0e161b] text-sm font-medium leading-normal w-full"
                        >
                          <span class="truncate">Active</span>
                        </button>
                      </td>
                      <td class="table-5e20ea4d-86e5-41ec-bf4e-29294ee3e8dd-column-720 h-[72px] px-4 py-2 w-60 text-[#4e7a97] text-sm font-bold leading-normal tracking-[0.015em]">
                        View Details
                      </td>
                    </tr>
                    <tr class="border-t border-t-[#d0dee7]">
                      <td class="table-5e20ea4d-86e5-41ec-bf4e-29294ee3e8dd-column-120 h-[72px] px-4 py-2 w-[400px] text-[#0e161b] text-sm font-normal leading-normal">
                        Dr. David Lee
                      </td>
                      <td class="table-5e20ea4d-86e5-41ec-bf4e-29294ee3e8dd-column-240 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal">
                        Neurologist
                      </td>
                      <td class="table-5e20ea4d-86e5-41ec-bf4e-29294ee3e8dd-column-360 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal">
                        Neurology
                      </td>
                      <td class="table-5e20ea4d-86e5-41ec-bf4e-29294ee3e8dd-column-480 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal">
                        Tue-Sat, 10am-6pm
                      </td>
                      <td class="table-5e20ea4d-86e5-41ec-bf4e-29294ee3e8dd-column-600 h-[72px] px-4 py-2 w-60 text-sm font-normal leading-normal">
                        <button
                          class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-8 px-4 bg-[#e7eef3] text-[#0e161b] text-sm font-medium leading-normal w-full"
                        >
                          <span class="truncate">Active</span>
                        </button>
                      </td>
                      <td class="table-5e20ea4d-86e5-41ec-bf4e-29294ee3e8dd-column-720 h-[72px] px-4 py-2 w-60 text-[#4e7a97] text-sm font-bold leading-normal tracking-[0.015em]">
                        View Details
                      </td>
                    </tr>
                    <tr class="border-t border-t-[#d0dee7]">
                      <td class="table-5e20ea4d-86e5-41ec-bf4e-29294ee3e8dd-column-120 h-[72px] px-4 py-2 w-[400px] text-[#0e161b] text-sm font-normal leading-normal">
                        Nurse Sarah Jones
                      </td>
                      <td class="table-5e20ea4d-86e5-41ec-bf4e-29294ee3e8dd-column-240 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal">
                        Registered Nurse
                      </td>
                      <td class="table-5e20ea4d-86e5-41ec-bf4e-29294ee3e8dd-column-360 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal">
                        General Medicine
                      </td>
                      <td class="table-5e20ea4d-86e5-41ec-bf4e-29294ee3e8dd-column-480 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal">
                        Mon-Fri, 8am-4pm
                      </td>
                      <td class="table-5e20ea4d-86e5-41ec-bf4e-29294ee3e8dd-column-600 h-[72px] px-4 py-2 w-60 text-sm font-normal leading-normal">
                        <button
                          class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-8 px-4 bg-[#e7eef3] text-[#0e161b] text-sm font-medium leading-normal w-full"
                        >
                          <span class="truncate">Active</span>
                        </button>
                      </td>
                      <td class="table-5e20ea4d-86e5-41ec-bf4e-29294ee3e8dd-column-720 h-[72px] px-4 py-2 w-60 text-[#4e7a97] text-sm font-bold leading-normal tracking-[0.015em]">
                        View Details
                      </td>
                    </tr>
                    <tr class="border-t border-t-[#d0dee7]">
                      <td class="table-5e20ea4d-86e5-41ec-bf4e-29294ee3e8dd-column-120 h-[72px] px-4 py-2 w-[400px] text-[#0e161b] text-sm font-normal leading-normal">
                        Admin Michael Brown
                      </td>
                      <td class="table-5e20ea4d-86e5-41ec-bf4e-29294ee3e8dd-column-240 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal">
                        Administrator
                      </td>
                      <td class="table-5e20ea4d-86e5-41ec-bf4e-29294ee3e8dd-column-360 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal">
                        Administration
                      </td>
                      <td class="table-5e20ea4d-86e5-41ec-bf4e-29294ee3e8dd-column-480 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal">
                        Mon-Fri, 9am-5pm
                      </td>
                      <td class="table-5e20ea4d-86e5-41ec-bf4e-29294ee3e8dd-column-600 h-[72px] px-4 py-2 w-60 text-sm font-normal leading-normal">
                        <button
                          class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-8 px-4 bg-[#e7eef3] text-[#0e161b] text-sm font-medium leading-normal w-full"
                        >
                          <span class="truncate">Active</span>
                        </button>
                      </td>
                      <td class="table-5e20ea4d-86e5-41ec-bf4e-29294ee3e8dd-column-720 h-[72px] px-4 py-2 w-60 text-[#4e7a97] text-sm font-bold leading-normal tracking-[0.015em]">
                        View Details
                      </td>
                    </tr>
                    <tr class="border-t border-t-[#d0dee7]">
                      <td class="table-5e20ea4d-86e5-41ec-bf4e-29294ee3e8dd-column-120 h-[72px] px-4 py-2 w-[400px] text-[#0e161b] text-sm font-normal leading-normal">
                        Dr. Olivia Green
                      </td>
                      <td class="table-5e20ea4d-86e5-41ec-bf4e-29294ee3e8dd-column-240 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal">
                        Pediatrician
                      </td>
                      <td class="table-5e20ea4d-86e5-41ec-bf4e-29294ee3e8dd-column-360 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal">
                        Pediatrics
                      </td>
                      <td class="table-5e20ea4d-86e5-41ec-bf4e-29294ee3e8dd-column-480 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal">
                        Mon-Fri, 9am-5pm
                      </td>
                      <td class="table-5e20ea4d-86e5-41ec-bf4e-29294ee3e8dd-column-600 h-[72px] px-4 py-2 w-60 text-sm font-normal leading-normal">
                        <button
                          class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-8 px-4 bg-[#e7eef3] text-[#0e161b] text-sm font-medium leading-normal w-full"
                        >
                          <span class="truncate">Active</span>
                        </button>
                      </td>
                      <td class="table-5e20ea4d-86e5-41ec-bf4e-29294ee3e8dd-column-720 h-[72px] px-4 py-2 w-60 text-[#4e7a97] text-sm font-bold leading-normal tracking-[0.015em]">
                        View Details
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <style>
                          @container(max-width:120px){.table-5e20ea4d-86e5-41ec-bf4e-29294ee3e8dd-column-120{display: none;}}
                @container(max-width:240px){.table-5e20ea4d-86e5-41ec-bf4e-29294ee3e8dd-column-240{display: none;}}
                @container(max-width:360px){.table-5e20ea4d-86e5-41ec-bf4e-29294ee3e8dd-column-360{display: none;}}
                @container(max-width:480px){.table-5e20ea4d-86e5-41ec-bf4e-29294ee3e8dd-column-480{display: none;}}
                @container(max-width:600px){.table-5e20ea4d-86e5-41ec-bf4e-29294ee3e8dd-column-600{display: none;}}
                @container(max-width:720px){.table-5e20ea4d-86e5-41ec-bf4e-29294ee3e8dd-column-720{display: none;}}
              </style>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
