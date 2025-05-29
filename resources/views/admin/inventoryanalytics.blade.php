<html>
  <head>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link
      rel="stylesheet"
      as="style"
      onload="this.rel='stylesheet'"
      href="https://fonts.googleapis.com/css2?display=swap&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900&amp;family=Work+Sans%3Awght%40400%3B500%3B700%3B900"
    />

    <title>Inventory Analytics</title>
    <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64," />

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  </head>
  <body>
    <div class="relative flex size-full min-h-screen flex-col bg-white group/design-root overflow-x-hidden" style='font-family: "Work Sans", "Noto Sans", sans-serif;'>
      <div class="layout-container flex h-full grow flex-col">
        <div class="gap-1 px-6 flex flex-1 justify-center py-5">
          <div class="layout-content-container flex flex-col w-80">
            <div class="flex h-full min-h-[700px] flex-col justify-between bg-white p-4">
              <div class="flex flex-col gap-4">
                <div class="flex flex-col gap-2">
                  <div class="flex items-center gap-3 px-3 py-2">
                    <div class="text-[#111418]" data-icon="Gauge" data-size="24px" data-weight="regular">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                        <path
                          d="M207.06,80.67A111.24,111.24,0,0,0,128,48h-.4C66.07,48.21,16,99,16,161.13V184a16,16,0,0,0,16,16H224a16,16,0,0,0,16-16V160A111.25,111.25,0,0,0,207.06,80.67ZM224,184H119.71l54.76-75.3a8,8,0,0,0-12.94-9.42L99.92,184H32V161.13c0-3.08.15-6.12.43-9.13H56a8,8,0,0,0,0-16H35.27c10.32-38.86,44-68.24,84.73-71.66V88a8,8,0,0,0,16,0V64.33A96.14,96.14,0,0,1,221,136H200a8,8,0,0,0,0,16h23.67c.21,2.65.33,5.31.33,8Z"
                        ></path>
                      </svg>
                    </div>
                    <p class="text-[#111418] text-sm font-medium leading-normal" >  
                         <a class="text-[#0e141b] text-sm font-medium leading-normal" href="/admin/dashboard">Dashboard</a>
                    </p>
                  </div>
                  <div class="flex items-center gap-3 px-3 py-2">
                    <div class="text-[#111418]" data-icon="Clock" data-size="24px" data-weight="regular">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                        <path
                          d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm64-88a8,8,0,0,1-8,8H128a8,8,0,0,1-8-8V72a8,8,0,0,1,16,0v48h48A8,8,0,0,1,192,128Z"
                        ></path>
                      </svg>
                    </div>
                    <p class="text-[#111418] text-sm font-medium leading-normal">
                       <a class="text-[#0e141b] text-sm font-medium leading-normal" href="/invoice/analytics">Invoice Analytics</a>
                    </p>
                  </div>
                  <div class="flex items-center gap-3 px-3 py-2">
                    <div class="text-[#111418]" data-icon="Users" data-size="24px" data-weight="regular">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                        <path
                          d="M117.25,157.92a60,60,0,1,0-66.5,0A95.83,95.83,0,0,0,3.53,195.63a8,8,0,1,0,13.4,8.74,80,80,0,0,1,134.14,0,8,8,0,0,0,13.4-8.74A95.83,95.83,0,0,0,117.25,157.92ZM40,108a44,44,0,1,1,44,44A44.05,44.05,0,0,1,40,108Zm210.14,98.7a8,8,0,0,1-11.07-2.33A79.83,79.83,0,0,0,172,168a8,8,0,0,1,0-16,44,44,0,1,0-16.34-84.87,8,8,0,1,1-5.94-14.85,60,60,0,0,1,55.53,105.64,95.83,95.83,0,0,1,47.22,37.71A8,8,0,0,1,250.14,206.7Z"
                        ></path>
                      </svg>
                    </div>
                    <p class="text-[#111418] text-sm font-medium leading-normal">
                      <a class="text-[#0e141b] text-sm font-medium leading-normal" href="/admin/demographics">Patient Demographics</a>
                    </p>
                  </div>
                  {{-- <div class="flex items-center gap-3 px-3 py-2">
                    <div class="text-[#111418]" data-icon="Calendar" data-size="24px" data-weight="regular">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                        <path
                          d="M208,32H184V24a8,8,0,0,0-16,0v8H88V24a8,8,0,0,0-16,0v8H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32ZM72,48v8a8,8,0,0,0,16,0V48h80v8a8,8,0,0,0,16,0V48h24V80H48V48ZM208,208H48V96H208V208Zm-96-88v64a8,8,0,0,1-16,0V132.94l-4.42,2.22a8,8,0,0,1-7.16-14.32l16-8A8,8,0,0,1,112,120Zm59.16,30.45L152,176h16a8,8,0,0,1,0,16H136a8,8,0,0,1-6.4-12.8l28.78-38.37A8,8,0,1,0,145.07,132a8,8,0,1,1-13.85-8A24,24,0,0,1,176,136,23.76,23.76,0,0,1,171.16,150.45Z"
                        ></path>
                      </svg>
                    </div>
                    <p class="text-[#111418] text-sm font-medium leading-normal">Calendar</p>
                  </div> --}}
                  <div class="flex items-center gap-3 px-3 py-2">
                    <div class="text-[#111418]" data-icon="CopySimple" data-size="24px" data-weight="regular">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                        <path
                          d="M184,64H40a8,8,0,0,0-8,8V216a8,8,0,0,0,8,8H184a8,8,0,0,0,8-8V72A8,8,0,0,0,184,64Zm-8,144H48V80H176ZM224,40V184a8,8,0,0,1-16,0V48H72a8,8,0,0,1,0-16H216A8,8,0,0,1,224,40Z"
                        ></path>
                      </svg>
                    </div>
                    <p class="text-[#111418] text-sm font-medium leading-normal">
                          <a class="text-[#0e141b] text-sm font-medium leading-normal" href="/admin/sraff">Staff Management</a>
                    </p>
                  </div>
                  {{-- <div class="flex items-center gap-3 px-3 py-2">
                    <div class="text-[#111418]" data-icon="CreditCard" data-size="24px" data-weight="regular">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                        <path
                          d="M224,48H32A16,16,0,0,0,16,64V192a16,16,0,0,0,16,16H224a16,16,0,0,0,16-16V64A16,16,0,0,0,224,48Zm0,16V88H32V64Zm0,128H32V104H224v88Zm-16-24a8,8,0,0,1-8,8H168a8,8,0,0,1,0-16h32A8,8,0,0,1,208,168Zm-64,0a8,8,0,0,1-8,8H120a8,8,0,0,1,0-16h16A8,8,0,0,1,144,168Z"
                        ></path>
                      </svg>
                    </div>
                    <p class="text-[#111418] text-sm font-medium leading-normal">Billing</p>
                  </div> --}}
                  <div class="flex items-center gap-3 px-3 py-2 rounded-xl bg-[#f0f2f4]">
                    <div class="text-[#111418]" data-icon="ChartBar" data-size="24px" data-weight="fill">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                        <path
                          d="M232,208a8,8,0,0,1-8,8H32a8,8,0,0,1,0-16h8V136a8,8,0,0,1,8-8H72a8,8,0,0,1,8,8v64H96V88a8,8,0,0,1,8-8h32a8,8,0,0,1,8,8V200h16V40a8,8,0,0,1,8-8h40a8,8,0,0,1,8,8V200h8A8,8,0,0,1,232,208Z"
                        ></path>
                      </svg>
                    </div>
                    <p class="text-[#111418] text-sm font-medium leading-normal">Analytics</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
            <div class="flex flex-wrap justify-between gap-3 p-4">
              <div class="flex min-w-72 flex-col gap-3">
                <p class="text-[#111418] tracking-light text-[32px] font-bold leading-tight">Analytics</p>
                <p class="text-[#637588] text-sm font-normal leading-normal">Track the health of your practice</p>
              </div>
            </div>
            <h2 class="text-[#111418] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Inventory</h2>
            <div class="flex flex-wrap gap-4 p-4">
              <div class="flex min-w-[158px] flex-1 flex-col gap-2 rounded-xl p-6 border border-[#dce0e5]">
                <p class="text-[#111418] text-base font-medium leading-normal">Total Items</p>
                <p class="text-[#111418] tracking-light text-2xl font-bold leading-tight">{{ number_format($summary['totals']['total']) }}</p>
                {{-- <p class="text-[#078838] text-base font-medium leading-normal">+5%</p> --}}
              </div>
              <div class="flex min-w-[158px] flex-1 flex-col gap-2 rounded-xl p-6 border border-[#dce0e5]">
                <p class="text-[#111418] text-base font-medium leading-normal">Total Value</p>
                <p class="text-[#111418] tracking-light text-2xl font-bold leading-tight"> ₦{{ number_format($summary['values']['total']) }} </p>
                {{-- <p class="text-[#078838] text-base font-medium leading-normal">+2.5%</p> --}}
              </div>
              <div class="flex min-w-[158px] flex-1 flex-col gap-2 rounded-xl p-6 border border-[#dce0e5]">
                <p class="text-[#111418] text-base font-medium leading-normal">Low Stock Items</p>
                <p class="text-[#111418] tracking-light text-2xl font-bold leading-tight"> {{$summary['lowStock']['total']}} </p>
             
              </div>
            </div>
            {{-- <h2 class="text-[#111418] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Inventory Value Over Time</h2>
            <div class="flex flex-wrap gap-4 px-4 py-6">
              <div class="flex min-w-72 flex-1 flex-col gap-2 rounded-xl border border-[#dce0e5] p-6">
                <p class="text-[#111418] text-base font-medium leading-normal">Inventory Value</p>
                <p class="text-[#111418] tracking-light text-[32px] font-bold leading-tight truncate">$36,000</p>
                <p class="text-[#637588] text-base font-normal leading-normal">Last 30 days</p>
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
                    <p class="text-[#637588] text-[13px] font-bold leading-normal tracking-[0.015em]">Jul 1</p>
                    <p class="text-[#637588] text-[13px] font-bold leading-normal tracking-[0.015em]">Jul 6</p>
                    <p class="text-[#637588] text-[13px] font-bold leading-normal tracking-[0.015em]">Jul 11</p>
                    <p class="text-[#637588] text-[13px] font-bold leading-normal tracking-[0.015em]">Jul 16</p>
                    <p class="text-[#637588] text-[13px] font-bold leading-normal tracking-[0.015em]">Jul 21</p>
                    <p class="text-[#637588] text-[13px] font-bold leading-normal tracking-[0.015em]">Jul 26</p>
                    <p class="text-[#637588] text-[13px] font-bold leading-normal tracking-[0.015em]">Jul 31</p>
                  </div>
                </div>
              </div>
            </div> --}}
            <h2 class="text-[#111418] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Inventory Value Over Time</h2>
<div class="flex flex-wrap gap-4 px-4 py-6">
  <div class="flex min-w-72 flex-1 flex-col gap-2 rounded-xl border border-[#dce0e5] p-6">
    <p class="text-[#111418] text-base font-medium leading-normal">Inventory Value</p>
    <p class="text-[#111418] tracking-light text-[32px] font-bold leading-tight truncate">
      {{-- ${{ number_format($summary['values']['drugs'] + $summary['values']['frames'] + $summary['values']['lenses']) }} --}}
      ₦{{ number_format($summary['values']['drugs'] + $summary['values']['frames'] + $summary['values']['lenses']) }}

    </p>
    <p class="text-[#637588] text-base font-normal leading-normal">Last 30 days</p>

    {{-- Chart --}}
    {{-- <div class="flex min-h-[180px] flex-1 flex-col gap-8 py-4"> --}}
        <div class="flex flex-1 flex-col gap-8 py-4" style="height: 180px;">
      <canvas id="inventoryChart" ></canvas>
      <div class="flex justify-around">
        @foreach($chart['labels'] as $label)
          <p class="text-[#637588] text-[13px] font-bold leading-normal tracking-[0.015em]">{{ $label }}</p>
        @endforeach
      </div>
    </div>
  </div>
</div>

{{-- Chart.js Script --}}
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  const ctx = document.getElementById('inventoryChart').getContext('2d');
  const inventoryChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: {!! json_encode($chart['labels']) !!},
      datasets: [{
        label: 'Inventory Value',
        data: {!! json_encode($chart['data']) !!},
        fill: true,
        backgroundColor: 'rgba(0, 123, 255, 0.1)',
        borderColor: '#007bff',
        tension: 0.4,
        pointRadius: 3,
        pointHoverRadius: 6
      }]
    },
    options: {
      responsive: true,
      maintainAspectRatio: true,
      scales: {
        y: {
          beginAtZero: true,
          ticks: {
            callback: value => '₦' + value.toLocaleString()
          }
        }
      }
    }
  });
</script>

            {{-- <h2 class="text-[#111418] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Low Stock Items</h2>
            <div class="px-4 py-3 @container">
              <div class="flex overflow-hidden rounded-xl border border-[#dce0e5] bg-white">
                <table class="flex-1">
                  <thead>
                    <tr class="bg-white">
                      <th class="table-6d6161d9-6794-4264-a1c1-6e2c98d6b0c4-column-120 px-4 py-3 text-left text-[#111418] w-[400px] text-sm font-medium leading-normal">Item</th>
                      <th class="table-6d6161d9-6794-4264-a1c1-6e2c98d6b0c4-column-240 px-4 py-3 text-left text-[#111418] w-[400px] text-sm font-medium leading-normal">
                        Location
                      </th>
                      <th class="table-6d6161d9-6794-4264-a1c1-6e2c98d6b0c4-column-360 px-4 py-3 text-left text-[#111418] w-[400px] text-sm font-medium leading-normal">
                        Quantity
                      </th>
                      <th class="table-6d6161d9-6794-4264-a1c1-6e2c98d6b0c4-column-480 px-4 py-3 text-left text-[#111418] w-[400px] text-sm font-medium leading-normal">Price</th>
                      <th class="table-6d6161d9-6794-4264-a1c1-6e2c98d6b0c4-column-600 px-4 py-3 text-left text-[#111418] w-[400px] text-sm font-medium leading-normal">Value</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="border-t border-t-[#dce0e5]">
                      <td class="table-6d6161d9-6794-4264-a1c1-6e2c98d6b0c4-column-120 h-[72px] px-4 py-2 w-[400px] text-[#111418] text-sm font-normal leading-normal">
                        Gauze Pads
                      </td>
                      <td class="table-6d6161d9-6794-4264-a1c1-6e2c98d6b0c4-column-240 h-[72px] px-4 py-2 w-[400px] text-[#637588] text-sm font-normal leading-normal">
                        Storage Room 1
                      </td>
                      <td class="table-6d6161d9-6794-4264-a1c1-6e2c98d6b0c4-column-360 h-[72px] px-4 py-2 w-[400px] text-[#637588] text-sm font-normal leading-normal">50</td>
                      <td class="table-6d6161d9-6794-4264-a1c1-6e2c98d6b0c4-column-480 h-[72px] px-4 py-2 w-[400px] text-[#637588] text-sm font-normal leading-normal">$20</td>
                      <td class="table-6d6161d9-6794-4264-a1c1-6e2c98d6b0c4-column-600 h-[72px] px-4 py-2 w-[400px] text-[#637588] text-sm font-normal leading-normal">$1,000</td>
                    </tr>
                    <tr class="border-t border-t-[#dce0e5]">
                      <td class="table-6d6161d9-6794-4264-a1c1-6e2c98d6b0c4-column-120 h-[72px] px-4 py-2 w-[400px] text-[#111418] text-sm font-normal leading-normal">
                        Antibacterial Wipes
                      </td>
                      <td class="table-6d6161d9-6794-4264-a1c1-6e2c98d6b0c4-column-240 h-[72px] px-4 py-2 w-[400px] text-[#637588] text-sm font-normal leading-normal">
                        Storage Room 2
                      </td>
                      <td class="table-6d6161d9-6794-4264-a1c1-6e2c98d6b0c4-column-360 h-[72px] px-4 py-2 w-[400px] text-[#637588] text-sm font-normal leading-normal">20</td>
                      <td class="table-6d6161d9-6794-4264-a1c1-6e2c98d6b0c4-column-480 h-[72px] px-4 py-2 w-[400px] text-[#637588] text-sm font-normal leading-normal">$15</td>
                      <td class="table-6d6161d9-6794-4264-a1c1-6e2c98d6b0c4-column-600 h-[72px] px-4 py-2 w-[400px] text-[#637588] text-sm font-normal leading-normal">$300</td>
                    </tr>
                    <tr class="border-t border-t-[#dce0e5]">
                      <td class="table-6d6161d9-6794-4264-a1c1-6e2c98d6b0c4-column-120 h-[72px] px-4 py-2 w-[400px] text-[#111418] text-sm font-normal leading-normal">
                        Alcohol Swabs
                      </td>
                      <td class="table-6d6161d9-6794-4264-a1c1-6e2c98d6b0c4-column-240 h-[72px] px-4 py-2 w-[400px] text-[#637588] text-sm font-normal leading-normal">
                        Storage Room 1
                      </td>
                      <td class="table-6d6161d9-6794-4264-a1c1-6e2c98d6b0c4-column-360 h-[72px] px-4 py-2 w-[400px] text-[#637588] text-sm font-normal leading-normal">80</td>
                      <td class="table-6d6161d9-6794-4264-a1c1-6e2c98d6b0c4-column-480 h-[72px] px-4 py-2 w-[400px] text-[#637588] text-sm font-normal leading-normal">$10</td>
                      <td class="table-6d6161d9-6794-4264-a1c1-6e2c98d6b0c4-column-600 h-[72px] px-4 py-2 w-[400px] text-[#637588] text-sm font-normal leading-normal">$800</td>
                    </tr>
                    <tr class="border-t border-t-[#dce0e5]">
                      <td class="table-6d6161d9-6794-4264-a1c1-6e2c98d6b0c4-column-120 h-[72px] px-4 py-2 w-[400px] text-[#111418] text-sm font-normal leading-normal">
                        Band-Aids
                      </td>
                      <td class="table-6d6161d9-6794-4264-a1c1-6e2c98d6b0c4-column-240 h-[72px] px-4 py-2 w-[400px] text-[#637588] text-sm font-normal leading-normal">
                        Storage Room 3
                      </td>
                      <td class="table-6d6161d9-6794-4264-a1c1-6e2c98d6b0c4-column-360 h-[72px] px-4 py-2 w-[400px] text-[#637588] text-sm font-normal leading-normal">40</td>
                      <td class="table-6d6161d9-6794-4264-a1c1-6e2c98d6b0c4-column-480 h-[72px] px-4 py-2 w-[400px] text-[#637588] text-sm font-normal leading-normal">$5</td>
                      <td class="table-6d6161d9-6794-4264-a1c1-6e2c98d6b0c4-column-600 h-[72px] px-4 py-2 w-[400px] text-[#637588] text-sm font-normal leading-normal">$200</td>
                    </tr>
                    <tr class="border-t border-t-[#dce0e5]">
                      <td class="table-6d6161d9-6794-4264-a1c1-6e2c98d6b0c4-column-120 h-[72px] px-4 py-2 w-[400px] text-[#111418] text-sm font-normal leading-normal">
                        Hydrogen Peroxide
                      </td>
                      <td class="table-6d6161d9-6794-4264-a1c1-6e2c98d6b0c4-column-240 h-[72px] px-4 py-2 w-[400px] text-[#637588] text-sm font-normal leading-normal">
                        Storage Room 2
                      </td>
                      <td class="table-6d6161d9-6794-4264-a1c1-6e2c98d6b0c4-column-360 h-[72px] px-4 py-2 w-[400px] text-[#637588] text-sm font-normal leading-normal">30</td>
                      <td class="table-6d6161d9-6794-4264-a1c1-6e2c98d6b0c4-column-480 h-[72px] px-4 py-2 w-[400px] text-[#637588] text-sm font-normal leading-normal">$25</td>
                      <td class="table-6d6161d9-6794-4264-a1c1-6e2c98d6b0c4-column-600 h-[72px] px-4 py-2 w-[400px] text-[#637588] text-sm font-normal leading-normal">$750</td>
                    </tr>
                  </tbody>
                </table>
              </div> --}}

            <h2 class="text-[#111418] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Low Stock Items (Total: {{ $summary['lowStock']['total'] }})</h2>
<div class="px-4 py-3 @container">
  <div class="flex overflow-hidden rounded-xl border border-[#dce0e5] bg-white">
    <table class="flex-1">
      <thead>
        <tr class="bg-white">
          <th class="px-4 py-3 text-left text-[#111418] w-[400px] text-sm font-medium leading-normal">Type</th>
          <th class="px-4 py-3 text-left text-[#111418] w-[400px] text-sm font-medium leading-normal">Item</th>
          <th class="px-4 py-3 text-left text-[#111418] w-[400px] text-sm font-medium leading-normal">Location</th>
          <th class="px-4 py-3 text-left text-[#111418] w-[400px] text-sm font-medium leading-normal">Quantity</th>
          <th class="px-4 py-3 text-left text-[#111418] w-[400px] text-sm font-medium leading-normal">Price</th>
          <th class="px-4 py-3 text-left text-[#111418] w-[400px] text-sm font-medium leading-normal">Value</th>
        </tr>
      </thead>
      <tbody>
        @php
            use App\Models\Drug;
            use App\Models\Frame;   
            use App\Models\Lens;
          
          // Get all low stock items from each category
          $lowStockItems = [
              'Drugs' => Drug::where('quantity', '<', $threshold)->get(),
              'Frames' => Frame::where('quantity', '<', $threshold)->get(),
              'Lenses' => Lens::where('quantity', '<', $threshold)->get()
          ];
        @endphp

        @foreach($lowStockItems as $type => $items)
          @foreach($items as $item)
            <tr class="border-t border-t-[#dce0e5]">
              <td class="h-[72px] px-4 py-2 w-[400px] text-[#111418] text-sm font-normal leading-normal">
                <span class="inline-flex items-center gap-1">
                  @if($type == 'Drugs')
                    💊
                  @elseif($type == 'Frames')
                    👓
                  @else
                    🔍
                  @endif
                  {{ $type }}
                </span>
              </td>
              <td class="h-[72px] px-4 py-2 w-[400px] text-[#111418] text-sm font-normal leading-normal">
                {{ $item->name }}
                @if($item->special_code)
                  <span class="text-[#637588] text-xs">({{ $item->special_code }})</span>
                @endif
              </td>
              <td class="h-[72px] px-4 py-2 w-[400px] text-[#637588] text-sm font-normal leading-normal">
                {{ $item->location ?? 'Main Storage' }}
              </td>
              <td class="h-[72px] px-4 py-2 w-[400px] text-red-600 text-sm font-semibold leading-normal">
                {{ $item->quantity }} <span class="text-xs">(low)</span>
              </td>
              <td class="h-[72px] px-4 py-2 w-[400px] text-[#637588] text-sm font-normal leading-normal">
                ₦{{ number_format($item->price, 2) }}
              </td>
              <td class="h-[72px] px-4 py-2 w-[400px] text-[#637588] text-sm font-normal leading-normal">
                ₦{{ number_format($item->price * $item->quantity, 2) }}
              </td>
            </tr>
          @endforeach
        @endforeach

        @if($summary['lowStock']['total'] == 0)
          <tr>
            <td colspan="6" class="h-[100px] text-center text-[#637588]">
              🎉 No low stock items! All inventory levels are good.
            </td>
          </tr>
        @endif
      </tbody>
    </table>
  </div>
</div>

              <style> 
                          @container(max-width:120px){.table-6d6161d9-6794-4264-a1c1-6e2c98d6b0c4-column-120{display: none;}}
                @container(max-width:240px){.table-6d6161d9-6794-4264-a1c1-6e2c98d6b0c4-column-240{display: none;}}
                @container(max-width:360px){.table-6d6161d9-6794-4264-a1c1-6e2c98d6b0c4-column-360{display: none;}}
                @container(max-width:480px){.table-6d6161d9-6794-4264-a1c1-6e2c98d6b0c4-column-480{display: none;}}
                @container(max-width:600px){.table-6d6161d9-6794-4264-a1c1-6e2c98d6b0c4-column-600{display: none;}}
              </style>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
<script>
    const chartData = {
        labels: ['Drugs', 'Frames', 'Lenses'],
        datasets: [{
            label: 'Total Value',
            data: [
                {{ $summary['values']['drugs'] }},
                {{ $summary['values']['frames'] }},
                {{ $summary['values']['lenses'] }}
            ],
            backgroundColor: ['#007bff', '#28a745', '#ffc107']
        }]
    };
</script>
