<html>
  <head>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link
      rel="stylesheet"
      as="style"
      onload="this.rel='stylesheet'"
      href="https://fonts.googleapis.com/css2?display=swap&amp;family=Inter%3Awght%40400%3B500%3B700%3B900&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900"
    />

    <title>Telemedicine</title>
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
              <a class="text-[#0e161b] text-sm font-medium leading-normal" href="{{route('telemed.list')}}">Room List</a>
              <a class="text-[#0e161b] text-sm font-medium leading-normal" href="#">Telemed Chat</a>
            </div>
            <div
              class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10"
              style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBFjarNaTn4SeQm2u_CUTFdQtK4Wf0iitTG83GNajl3OrPXoQtv9vhJKmPWT81UQWPcEeq1st6CK3iSSpSk8NP6X-vO45bqtB67Ed18Y2WpvZvA6SnY-5u0NW9VKkkX_ni_s_qXhFEPII4LwXST5mUemXU7H1rLmfldnJSAOYDRm-zTGy98OeDQGXle8R1U2dSZ6IuDCsi4CYLe8KL73NhMv5_ZfwaysYWCTi5fkGhNIsU3jvC_ojZBkEVjLv4m0fy4-8sav5bAyi4");'
            ></div>
          </div>
        </header>
        <div class="px-40 flex flex-1 justify-center py-5">
          <div class="layout-content-container flex flex-col w-[512px] max-w-[512px] py-5 max-w-[960px] flex-1">
            <div class="flex flex-wrap justify-between gap-3 p-4">
              <p class="text-[#0e161b] tracking-light text-[32px] font-bold leading-tight min-w-72">Create Telemedicine Room</p>
            </div>
            <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
              <label class="flex flex-col min-w-40 flex-1">
                <p class="text-[#0e161b] text-base font-medium leading-normal pb-2">Doctor Name</p>
                <input
                  id="doctor-name-input"
                  placeholder="Dr. Emily Carter"
                  class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#0e161b] focus:outline-0 focus:ring-0 border border-[#d0dee7] bg-slate-50 focus:border-[#d0dee7] h-14 placeholder:text-[#4e7a97] p-[15px] text-base font-normal leading-normal"
                  value=""
                />
              </label>
            </div>
            <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
              <label class="flex flex-col min-w-40 flex-1">
                <p class="text-[#0e161b] text-base font-medium leading-normal pb-2">Room Code</p>
                <input
                  id="room-code-input"
                  placeholder="Enter Room Code"
                  class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#0e161b] focus:outline-0 focus:ring-0 border border-[#d0dee7] bg-slate-50 focus:border-[#d0dee7] h-14 placeholder:text-[#4e7a97] p-[15px] text-base font-normal leading-normal"
                  value=""
                />
              </label>
            </div>
            <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
              <label class="flex flex-col min-w-40 flex-1">
                <p class="text-[#0e161b] text-base font-medium leading-normal pb-2">Room Title</p>
                <input
                  id="room-title-input"
                  placeholder="Enter Room Title"
                  class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#0e161b] focus:outline-0 focus:ring-0 border border-[#d0dee7] bg-slate-50 focus:border-[#d0dee7] h-14 placeholder:text-[#4e7a97] p-[15px] text-base font-normal leading-normal"
                  value=""
                />
              </label>
            </div>
            <div class="flex px-4 py-3 justify-end">
          <button
            id="create-room-btn"
            type="button"
            class="inline-flex items-center gap-2 rounded-md bg-[#1993e5] px-4 py-2 text-xs font-semibold text-white shadow-sm hover:bg-[#137abd] focus:outline-none focus:ring-2 focus:ring-[#1993e5] focus:ring-offset-2 transition-colors duration-200">
            <span class="material-icons text-sm">sms</span>
            Create Telemedicine Room
          </button>
            
          <!-- Room Card Container (hidden by default) -->
          <div id="room-card-container" class="my-6"></div>

          <script>

          document.getElementById('create-room-btn').addEventListener('click', async function() {
            const btn = this;
            btn.disabled = true;
            btn.textContent = 'Creating...';
            try {
              // Get values from the input fields
              let doctorName = document.getElementById('doctor-name-input').value.trim();
              let roomCode = document.getElementById('room-code-input').value.trim();
              let title = document.getElementById('room-title-input').value.trim();
              if (!doctorName || !roomCode || !title) {
                alert('Please fill in all fields.');
                btn.disabled = false;
                btn.textContent = 'Create Telemedicine Room';
                return;
              }
              const response = await fetch('https://hms-telemedicine-api.onrender.com/api/rooms/create', {
                method: 'POST',
                headers: {
                  'Content-Type': 'application/json'
                },
                body: JSON.stringify({ code: roomCode, title: title, createdBy: doctorName })
              });
              if (!response.ok) {
                const err = await response.json();
                throw new Error(err.error || 'Failed to create room');
              }
              const data = await response.json();
              const room = data.room;
              // Build the card HTML
              const cardHtml = `
              <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="rounded-lg border border-gray-200 bg-white shadow-md p-6 hover:shadow-lg transition-shadow duration-200">
                  <div class="flex items-start gap-4">
                    <div class="size-16 rounded-full bg-center bg-no-repeat bg-cover border border-gray-200 shadow-sm flex-shrink-0"
                      style='background-image: url("https://cdn-icons-png.flaticon.com/512/3062/3062634.png");'>
                    </div>
                    <div class="flex-grow">
                      <p class="text-xs font-medium text-[#1993e5] mb-1">Telemedicine Room</p>
                      <h3 class="text-lg font-semibold text-slate-800 mb-1">
                        ${room.title || ''}
                      </h3>
                      <div class="flex items-center gap-1">
                        <p class="text-xs text-slate-500" id="room-code">${room.code}</p>
                        <button onclick="copyRoomCode(this, '${room.code}')"
                          class="text-gray-400 hover:text-gray-600 focus:outline-none transition-colors duration-200"
                          title="Copy Room Code">
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3" />
                          </svg>
                        </button>
                      </div>
                      <p class="text-xs text-slate-500 mt-2">Created: ${new Date(room.createdAt).toLocaleString()}</p>
                    </div>
                  </div>
                </div>
              </div>
              `;
              document.getElementById('room-card-container').innerHTML = cardHtml;
            } catch (err) {
              alert('Failed to create room: ' + err.message);
            } finally {
              btn.disabled = false;
              btn.textContent = 'Create Telemedicine Room';
            }
          });

          function copyRoomCode(buttonElement, code) {
            navigator.clipboard.writeText(code).then(function() {
              const icon = buttonElement.querySelector('svg');
              icon.style.stroke = '#10B981'; // Green color
              setTimeout(() => {
                icon.style.stroke = '';
              }, 1000);
            }).catch(function(err) {
              console.error('Could not copy text: ', err);
            });
          }
          </script>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
