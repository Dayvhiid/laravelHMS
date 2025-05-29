<html>
  <head>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link
      rel="stylesheet"
      as="style"
      onload="this.rel='stylesheet'"
      href="https://fonts.googleapis.com/css2?display=swap&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900&amp;family=Work+Sans%3Awght%40400%3B500%3B700%3B900"
    />

    <title>Galileo Design</title>
    <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64," />

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  </head>
  <body>
    <div class="relative flex size-full min-h-screen flex-col bg-white group/design-root overflow-x-hidden" style='font-family: "Work Sans", "Noto Sans", sans-serif;'>
      <div class="layout-container flex h-full grow flex-col">
        <header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-b-[#f0f2f4] px-10 py-3">
          <div class="flex items-center gap-4 text-[#111418]">
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
            <h2 class="text-[#111418] text-lg font-bold leading-tight tracking-[-0.015em]">HealthcarePlus</h2>
          </div>
          <div class="flex flex-1 justify-end gap-8">
            <div class="flex items-center gap-9">
              <a class="text-[#111418] text-sm font-medium leading-normal" href="#">Dashboard</a>
              <a class="text-[#111418] text-sm font-medium leading-normal" href="#">Patients</a>
              <a class="text-[#111418] text-sm font-medium leading-normal" href="#">Scheduling</a>
              <a class="text-[#111418] text-sm font-medium leading-normal" href="#">Billing</a>
              <a class="text-[#111418] text-sm font-medium leading-normal" href="#">Reports</a>
            </div>
            <button
              class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-10 px-4 bg-[#1980e6] text-white text-sm font-bold leading-normal tracking-[0.015em]"
            >
              <span class="truncate">New</span>
            </button>
            <div
              class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10"
              style='background-image: url("https://cdn.usegalileo.ai/sdxl10/e0948fed-cbe8-4335-bc02-1077cae2f976.png");'
            ></div>
          </div>
        </header>
        <div class="px-40 flex flex-1 justify-center py-5">
          <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
            <div class="flex flex-wrap justify-between gap-3 p-4">
              <div class="flex min-w-72 flex-col gap-3">
                <p class="text-[#111418] tracking-light text-[32px] font-bold leading-tight">Inventory</p>
                <p class="text-[#637588] text-sm font-normal leading-normal">Manage your inventory</p>
              </div>
            </div>
            <div class="pb-3">
              <div class="flex border-b border-[#dce0e5] px-4 gap-8">
                <a class="flex flex-col items-center justify-center border-b-[3px] border-b-[#111418] text-[#111418] pb-[13px] pt-4" href="#">
                  <p class="text-[#111418] text-sm font-bold leading-normal tracking-[0.015em]">Overview</p>
                </a>
                <a class="flex flex-col items-center justify-center border-b-[3px] border-b-transparent text-[#637588] pb-[13px] pt-4" href="#">
                  <p class="text-[#637588] text-sm font-bold leading-normal tracking-[0.015em]">Frames</p>
                </a>
                <a class="flex flex-col items-center justify-center border-b-[3px] border-b-transparent text-[#637588] pb-[13px] pt-4" href="#">
                  <p class="text-[#637588] text-sm font-bold leading-normal tracking-[0.015em]">Lenses</p>
                </a>
                <a class="flex flex-col items-center justify-center border-b-[3px] border-b-transparent text-[#637588] pb-[13px] pt-4" href="#">
                  <p class="text-[#637588] text-sm font-bold leading-normal tracking-[0.015em]">Sunglasses</p>
                </a>
              </div>
            </div>
            <div class="flex flex-wrap gap-4 px-4 py-6">
              <div class="flex min-w-72 flex-1 flex-col gap-2 rounded-xl border border-[#dce0e5] p-6">
                <p class="text-[#111418] text-base font-medium leading-normal">Total Quantity by Type</p>
                <div class="grid min-h-[180px] gap-x-4 gap-y-6 grid-cols-[auto_1fr] items-center py-3">
                  <p class="text-[#637588] text-[13px] font-bold leading-normal tracking-[0.015em]">Drugs</p>
                  <div class="h-full flex-1"><div class="border-[#637588] bg-[#f0f2f4] border-r-2 h-full" style="width: 70%;"></div></div>
                  <p class="text-[#637588] text-[13px] font-bold leading-normal tracking-[0.015em]">Frames</p>
                  <div class="h-full flex-1"><div class="border-[#637588] bg-[#f0f2f4] border-r-2 h-full" style="width: 60%;"></div></div>
                  <p class="text-[#637588] text-[13px] font-bold leading-normal tracking-[0.015em]">Lenses</p>
                  <div class="h-full flex-1"><div class="border-[#637588] bg-[#f0f2f4] border-r-2 h-full" style="width: 20%;"></div></div>
                </div>
              </div>
              <div class="flex min-w-72 flex-1 flex-col gap-2 rounded-xl border border-[#dce0e5] p-6">
                <p class="text-[#111418] text-base font-medium leading-normal">Total Value by Type</p>
                <div class="grid min-h-[180px] grid-flow-col gap-6 grid-rows-[1fr_auto] items-end justify-items-center px-3">
                  <div class="border-[#637588] bg-[#f0f2f4] border-t-2 w-full" style="height: 10%;"></div>
                  <p class="text-[#637588] text-[13px] font-bold leading-normal tracking-[0.015em]">$2,000</p>
                  <div class="border-[#637588] bg-[#f0f2f4] border-t-2 w-full" style="height: 20%;"></div>
                  <p class="text-[#637588] text-[13px] font-bold leading-normal tracking-[0.015em]">$1,500</p>
                  <div class="border-[#637588] bg-[#f0f2f4] border-t-2 w-full" style="height: 40%;"></div>
                  <p class="text-[#637588] text-[13px] font-bold leading-normal tracking-[0.015em]">$500</p>
                </div>
              </div>
            </div>
            <div class="flex flex-wrap gap-4 px-4 py-6">
              <div class="flex min-w-72 flex-1 flex-col gap-2 rounded-xl border border-[#dce0e5] p-6">
                <p class="text-[#111418] text-base font-medium leading-normal">Stock Level Trend</p>
                <div class="flex min-h-[180px] flex-1 flex-col gap-8 py-4">
                  <svg width="100%" height="148" viewBox="-3 0 478 150" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                    <path
                      d="M0 109C18.1538 109 18.1538 21 36.3077 21C54.4615 21 54.4615 41 72.6154 41C90.7692 41 90.7692 93 108.923 93C127.077 93 127.077 33 145.231 33C163.385 33 163.385 101 181.538 101C199.692 101 199.692 61 217.846 61C236 61 236 45 254.154 45C272.308 45 272.308 121 290.462 121C308.615 121 308.615 149 326.769 149C344.923 149 344.923 1 363.077 1C381.231 1 381.231 81 399.385 81C417.538 81 417.538 129 435.692 129C453.846 129 453.846 25 472 25V149H326.769H0V109Z"
                      fill="url(#paint0_linear_1131_5935)"
                    ></path>
                    <path
                      d="M0 109C18.1538 109 18.1538 21 36.3077 21C54.4615 21 54.4615 41 72.6154 41C90.7692 41 90.7692 93 108.923 93C127.077 93 127.077 33 145.231 33C163.385 33 163.385 101 181.538 101C199.692 101 199.692 61 217.846 61C236 61 236 45 254.154 45C272.308 45 272.308 121 290.462 121C308.615 121 308.615 149 326.769 149C344.923 149 344.923 1 363.077 1C381.231 1 381.231 81 399.385 81C417.538 81 417.538 129 435.692 129C453.846 129 453.846 25 472 25"
                      stroke="#637588"
                      stroke-width="3"
                      stroke-linecap="round"
                    ></path>
                    <defs>
                      <linearGradient id="paint0_linear_1131_5935" x1="236" y1="1" x2="236" y2="149" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#f0f2f4"></stop>
                        <stop offset="1" stop-color="#f0f2f4" stop-opacity="0"></stop>
                      </linearGradient>
                    </defs>
                  </svg>
                  <div class="flex justify-around">
                    <p class="text-[#637588] text-[13px] font-bold leading-normal tracking-[0.015em]">Jan</p>
                    <p class="text-[#637588] text-[13px] font-bold leading-normal tracking-[0.015em]">Feb</p>
                    <p class="text-[#637588] text-[13px] font-bold leading-normal tracking-[0.015em]">Mar</p>
                    <p class="text-[#637588] text-[13px] font-bold leading-normal tracking-[0.015em]">Apr</p>
                    <p class="text-[#637588] text-[13px] font-bold leading-normal tracking-[0.015em]">May</p>
                    <p class="text-[#637588] text-[13px] font-bold leading-normal tracking-[0.015em]">Jun</p>
                    <p class="text-[#637588] text-[13px] font-bold leading-normal tracking-[0.015em]">Jul</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
