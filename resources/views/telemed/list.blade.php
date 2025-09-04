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

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  </head>
  <body>
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
            <h2 class="text-[#0e161b] text-lg font-bold leading-tight tracking-[-0.015em]">HealthConnect</h2>
          </div>
          <div class="flex flex-1 justify-end gap-8">
            <div class="flex items-center gap-9">
              <a class="text-[#0e161b] text-sm font-medium leading-normal" href="#">Create Telemed Room</a>
              <a class="text-[#0e161b] text-sm font-medium leading-normal" href="#">Telemed Chat</a>
            </div>
            <div
              class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10"
              style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBDV5jgbWqkcQvUQ2s6HCATWcai4Cr91Fj-trXKGJBSz4O5KOiZwspzmo6ykH5igmQbv6RnlDe0_DA3FPC5_xjXJFu9TsneGIy5GB-idnaQ5yLYly8QZFPwjC7ED49NGI7Bhc08iY7rCppuHDZtrFHh8zMjUqcCWr5PkQ0rDfb_8IM6uZtfeRSggv5wDIKmb2mm4VuQfcH9V5-OWZyEumLAhCYMsHs-H-Nk3Axd39DZSV-C98nD3wYAjjth4-noGV4uVp2Ros77b5g");'
            ></div>
          </div>
        </header>
        <div class="px-40 flex flex-1 justify-center py-5">
          <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
            <div class="flex flex-wrap justify-between gap-3 p-4">
              <p class="text-[#0e161b] tracking-light text-[32px] font-bold leading-tight min-w-72">Available Telemedicine Rooms</p>
            </div>
            <div class="px-4 py-3 @container">
              <div class="flex overflow-hidden rounded-lg border border-[#d0dee7] bg-slate-50">
                <table class="flex-1">
                  <thead>
                    <tr class="bg-slate-50">
                      <th class="table-4d5b6bd6-3a3c-4230-87dd-7f88d62ca642-column-120 px-4 py-3 text-left text-[#0e161b] w-[400px] text-sm font-medium leading-normal">
                        Room Title
                      </th>
                      <th class="table-4d5b6bd6-3a3c-4230-87dd-7f88d62ca642-column-240 px-4 py-3 text-left text-[#0e161b] w-[400px] text-sm font-medium leading-normal">
                        Room Code
                      </th>
                      <th class="table-4d5b6bd6-3a3c-4230-87dd-7f88d62ca642-column-360 px-4 py-3 text-left text-[#0e161b] w-[400px] text-sm font-medium leading-normal">
                        Doctor Name
                      </th>
                      <th class="table-4d5b6bd6-3a3c-4230-87dd-7f88d62ca642-column-480 px-4 py-3 text-left text-[#0e161b] w-60 text-[#4e7a97] text-sm font-medium leading-normal">
                        Action
                      </th>
                    </tr>
                  </thead>
                  <tbody id="rooms-table-body">
                    <!-- Populated by JS -->
                  </tbody>
                </table>
              </div>
              <script>
                let roomsData = [];
                let currentPage = 1;
                const pageSize = 10;

                function renderRoomsTable(page) {
                  const tbody = document.getElementById('rooms-table-body');
                  const start = (page - 1) * pageSize;
                  const end = start + pageSize;
                  const pageRooms = roomsData.slice(start, end);
                  tbody.innerHTML = pageRooms.map(room => `
                    <tr class="border-t border-t-[#d0dee7]">
                      <td class="table-4d5b6bd6-3a3c-4230-87dd-7f88d62ca642-column-120 h-[72px] px-4 py-2 w-[400px] text-[#0e161b] text-sm font-normal leading-normal">${room.title || ''}</td>
                      <td class="table-4d5b6bd6-3a3c-4230-87dd-7f88d62ca642-column-240 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal">${room.code || ''}</td>
                      <td class="table-4d5b6bd6-3a3c-4230-87dd-7f88d62ca642-column-360 h-[72px] px-4 py-2 w-[400px] text-[#4e7a97] text-sm font-normal leading-normal">${room.createdBy || ''}</td>
                      <td class="table-4d5b6bd6-3a3c-4230-87dd-7f88d62ca642-column-480 h-[72px] px-4 py-2 w-60 text-[#4e7a97] text-sm font-bold leading-normal tracking-[0.015em]">Join</td>
                    </tr>
                  `).join('');
                  renderPagination();
                }

                function renderPagination() {
                  const paginationContainer = document.getElementById('rooms-pagination');
                  if (!paginationContainer) return;
                  const totalPages = Math.ceil(roomsData.length / pageSize);
                  let html = '';
                  if (totalPages > 1) {
                    html += `<nav class="flex gap-2 justify-center mt-4">`;
                    html += `<button class="px-3 py-1 rounded ${currentPage === 1 ? 'bg-gray-200' : 'bg-[#1993e5] text-white'}" ${currentPage === 1 ? 'disabled' : ''} onclick="window.changeRoomsPage(${currentPage - 1})">Prev</button>`;
                    for (let i = 1; i <= totalPages; i++) {
                      html += `<button class="px-3 py-1 rounded ${currentPage === i ? 'bg-[#1993e5] text-white' : 'bg-gray-100'}" onclick="window.changeRoomsPage(${i})">${i}</button>`;
                    }
                    html += `<button class="px-3 py-1 rounded ${currentPage === totalPages ? 'bg-gray-200' : 'bg-[#1993e5] text-white'}" ${currentPage === totalPages ? 'disabled' : ''} onclick="window.changeRoomsPage(${currentPage + 1})">Next</button>`;
                    html += `</nav>`;
                  }
                  paginationContainer.innerHTML = html;
                }

                window.changeRoomsPage = function(page) {
                  const totalPages = Math.ceil(roomsData.length / pageSize);
                  if (page < 1 || page > totalPages) return;
                  currentPage = page;
                  renderRoomsTable(currentPage);
                }

                async function fetchRooms() {
                  try {
                    const response = await fetch('https://hms-telemedicine-api.onrender.com/api/rooms/list');
                    if (!response.ok) throw new Error('Failed to fetch rooms');
                    const data = await response.json();
                    roomsData = data.rooms || [];
                    renderRoomsTable(currentPage);
                  } catch (err) {
                    document.getElementById('rooms-table-body').innerHTML = `<tr><td colspan="4" class="text-center text-red-500">Failed to load rooms</td></tr>`;
                  }
                }
                fetchRooms();
              </script>
              <div id="rooms-pagination"></div>
              <style>
                @container(max-width:120px){.table-4d5b6bd6-3a3c-4230-87dd-7f88d62ca642-column-120{display: none;}}
                @container(max-width:240px){.table-4d5b6bd6-3a3c-4230-87dd-7f88d62ca642-column-240{display: none;}}
                @container(max-width:360px){.table-4d5b6bd6-3a3c-4230-87dd-7f88d62ca642-column-360{display: none;}}
                @container(max-width:480px){.table-4d5b6bd6-3a3c-4230-87dd-7f88d62ca642-column-480{display: none;}}
              </style>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
