<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HealthConnect - Telemedicine Chat</title>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link rel="stylesheet" as="style" onload="this.rel='stylesheet'" href="https://fonts.googleapis.com/css2?display=swap&family=Inter%3Awght%40400%3B500%3B700%3B900&family=Noto+Sans%3Awght%40400%3B500%3B700%3B900" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script src="https://cdn.socket.io/4.7.2/socket.io.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-peer@9.11.1/simplepeer.min.js"></script>
    <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64," />
</head>
<body>
    <div class="relative flex size-full min-h-screen flex-col bg-slate-50 group/design-root overflow-x-hidden" style='font-family: Inter, "Noto Sans", sans-serif;'>
        <div class="layout-container flex h-full grow flex-col">
            <header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-b-[#e7eef3] px-10 py-3">
                <div class="flex items-center gap-4 text-[#0e161b]">
                    <div class="size-4">
                        <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M39.475 21.6262C40.358 21.4363 40.6863 21.5589 40.7581 21.5934C40.7876 21.655 40.8547 21.857 40.8082 22.3336C40.7408 23.0255 40.4502 24.0046 39.8572 25.2301C38.6799 27.6631 36.5085 30.6631 33.5858 33.5858C30.6631 36.5085 27.6632 38.6799 25.2301 39.8572C24.0046 40.4502 23.0255 40.7407 22.3336 40.8082C21.8571 40.8547 21.6551 40.7875 21.5934 40.7581C21.5589 40.6863 21.4363 40.358 21.6262 39.475C21.8562 38.4054 22.4689 36.9657 23.5038 35.2817C24.7575 33.2417 26.5497 30.9744 28.7621 28.762C30.9744 26.5497 33.2417 24.7574 35.2817 23.5037C36.9657 22.4689 38.4054 21.8562 39.475 21.6262ZM4.41189 29.2403L18.7597 43.5881C19.8813 44.7097 21.4027 44.9179 22.7217 44.7893C24.0585 44.659 25.5148 44.1631 26.9723 43.4579C29.9052 42.0387 33.2618 39.5667 36.4142 36.4142C39.5667 33.2618 42.0387 29.9052 43.4579 26.9723C44.1631 25.5148 44.659 24.0585 44.7893 22.7217C44.9179 21.4027 44.7097 19.8813 43.5881 18.7597L29.2403 4.41187C27.8527 3.02428 25.8765 3.02573 24.2861 3.36776C22.6081 3.72863 20.7334 4.58419 18.8396 5.74801C16.4978 7.18716 13.9881 9.18353 11.5858 11.5858C9.18354 13.988 7.18717 16.4978 5.74802 18.8396C4.58421 20.7334 3.72865 22.6081 3.36778 24.2861C3.02574 25.8765 3.02429 27.8527 4.41189 29.2403Z" fill="currentColor"></path>
                        </svg>
                    </div>
                    <h2 class="text-[#0e161b] text-lg font-bold leading-tight tracking-[-0.015em]" id="header-title">HealthConnect</h2>
                </div>
            </header>
            <div class="px-10 flex flex-1 justify-center py-5">
                <div class="layout-content-container flex flex-col max-w-[960px] flex-1" id="chat-section">
                    <div class="flex items-center justify-between px-4 py-3">
                        <h3 id="room-name" class="text-[#0e161b] text-lg font-bold leading-tight tracking-[-0.015em]">Room: </h3>
                        <button id="leave-btn" class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-[#e7eef3] text-[#0e161b] text-sm font-bold leading-normal tracking-[0.015em]">
                            <span class="truncate">Leave</span>
                        </button>
                    </div>
                    <div class="flex gap-2 px-4 py-2">
                        <button id="start-call-btn" class="flex min-w-[84px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-green-600 hover:bg-green-700 text-white text-sm font-bold leading-normal flex-1">
                            <span class="truncate">📞 Start Video Call</span>
                        </button>
                        <button id="end-call-btn" class="hidden flex min-w-[84px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-red-600 hover:bg-red-700 text-white text-sm font-bold leading-normal flex-1">
                            <span class="truncate">📞 End Call</span>
                        </button>
                    </div>
                    <div id="video-section" class="hidden px-4 py-3">
                        <div class="flex gap-4 mb-4">
                            <div class="flex-1">
                                <p class="text-sm text-[#4e7a97] mb-2">You</p>
                                <video id="local-video" autoplay muted playsinline class="w-full rounded-lg bg-gray-200 aspect-video"></video>
                            </div>
                            <div class="flex-1">
                                <p class="text-sm text-[#4e7a97] mb-2">Remote</p>
                                <video id="remote-video" autoplay playsinline class="w-full rounded-lg bg-gray-200 aspect-video"></video>
                            </div>
                        </div>
                    </div>
                    <div class="flex-1 px-4 py-3">
                        <div id="messages" class="flex flex-col gap-3 bg-slate-50 rounded-lg p-4 overflow-y-auto h-96 border border-[#e7eef3]">
                        </div>
                    </div>
                    <div class="flex items-center px-4 py-3 gap-3">
                        <label class="flex flex-col min-w-40 h-12 flex-1">
                            <div class="flex w-full flex-1 items-stretch rounded-lg h-full">
                                <input id="message-input" placeholder="Type a message" class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#0e161b] focus:outline-0 focus:ring-0 border-none bg-[#e7eef3] focus:border-none h-full placeholder:text-[#4e7a97] px-4 rounded-r-none border-r-0 pr-2 text-base font-normal leading-normal" value="" />
                                <div class="flex border-none bg-[#e7eef3] items-center justify-center pr-4 rounded-r-lg border-l-0">
                                    <div class="flex items-center gap-4 justify-end">
                                        <div class="flex items-center gap-1">
                                            <button id="upload-btn" class="flex items-center justify-center p-1.5">
                                                <div class="text-[#4e7a97]">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                                                        <path d="M208,56H180.28L166.65,35.56A8,8,0,0,0,160,32H96a8,8,0,0,0-6.65,3.56L75.71,56H48A24,24,0,0,0,24,80V192a24,24,0,0,0,24,24H208a24,24,0,0,0,24-24V80A24,24,0,0,0,208,56Zm8,136a8,8,0,0,1-8,8H48a8,8,0,0,1-8-8V80a8,8,0,0,1,8-8H80a8,8,0,0,0,6.66-3.56L100.28,48h55.43l13.63,20.44A8,8,0,0,0,176,72h32a8,8,0,0,1,8,8ZM128,88a44,44,0,1,0,44,44A44.05,44.05,0,0,0,128,88Zm0,72a28,28,0,1,1,28-28A28,28,0,0,1,128,160Z"></path>
                                                    </svg>
                                                </div>
                                            </button>
                                        </div>
                                        <button id="send-btn" class="min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-8 px-4 bg-[#1994e6] text-slate-50 text-sm font-medium leading-normal">
                                            <span class="truncate">Send</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </label>
                        <input id="image-input" type="file" accept="image/*" class="hidden">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        // Get query params
        function getQueryParam(name) {
            const urlParams = new URLSearchParams(window.location.search);
            return urlParams.get(name);
        }
        const doctor = getQueryParam('doctor');
        const roomCode = getQueryParam('room');
        // Initialize Socket.IO connection
        const socket = io('https://hms-telemedicine-api.onrender.com/');
        // DOM Elements
        const roomName = document.getElementById('room-name');
        const messagesDiv = document.getElementById('messages');
        const messageInput = document.getElementById('message-input');
        const sendBtn = document.getElementById('send-btn');
        const leaveBtn = document.getElementById('leave-btn');
        // Set room name
        roomName.textContent = `Room: ${roomCode}`;
        // Video call and image upload variables
        let peer, localStream;
        // Fetch previous messages before listening for new ones
        fetch(`https://hms-telemedicine-api.onrender.com/api/messages/${roomCode}?limit=100`)
            .then(res => res.json())
            .then(result => {
                if (result.data && Array.isArray(result.data)) {
                    messagesDiv.innerHTML = '';
                    result.data.forEach(msg => displayMessage(msg));
                }
            })
            .catch(err => {
                console.error('Failed to fetch messages:', err);
            });
        // Join room automatically
        socket.emit('join-room', {
            roomCode: roomCode,
            displayName: doctor
        });
        // Send message
        sendBtn.addEventListener('click', sendMessage);
        messageInput.addEventListener('keypress', (e) => {
            if (e.key === 'Enter') sendMessage();
        });
        function sendMessage() {
            const message = messageInput.value.trim();
            if (!message) return;
            socket.emit('send-message', {
                roomCode: roomCode,
                content: message,
                sender: doctor,
                type: 'text'
            });
            messageInput.value = '';
        }
        // Image upload functionality
        const uploadBtn = document.getElementById('upload-btn');
        const imageInput = document.getElementById('image-input');
        uploadBtn.addEventListener('click', () => imageInput.click());
        imageInput.addEventListener('change', async (e) => {
            const file = e.target.files[0];
            if (!file) return;
            // Create loading preview
            const previewData = {
                sender: doctor,
                type: 'image',
                content: URL.createObjectURL(file)
            };
            const previewDiv = document.createElement('div');
            previewDiv.className = 'flex items-end gap-3 justify-end';
            previewDiv.innerHTML = `
                <div class="flex flex-1 flex-col gap-1 items-end">
                    <p class="text-[#4e7a97] text-[13px] font-normal leading-normal max-w-[360px] text-right">${doctor}</p>
                    <div class="text-base font-normal leading-normal flex max-w-[360px] rounded-lg px-4 py-3 bg-[#1994e6] text-slate-50 relative">
                        <img src="${previewData.content}" class="max-w-full rounded-lg opacity-50">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-6 h-6 border-2 border-white border-t-transparent rounded-full animate-spin"></div>
                        </div>
                    </div>
                </div>
            `;
            messagesDiv.appendChild(previewDiv);
            messagesDiv.scrollTop = messagesDiv.scrollHeight;
            // Upload image
            const formData = new FormData();
            formData.append('image', file);
            formData.append('room', roomCode);
            formData.append('username', doctor);
            try {
                const response = await fetch('https://hms-telemedicine-api.onrender.com/api/upload/image', {
                    method: 'POST',
                    body: formData
                });
                const data = await response.json();
                // Remove loading state and update image
                const img = previewDiv.querySelector('img');
                const loader = previewDiv.querySelector('.absolute');
                img.classList.remove('opacity-50');
                img.src = data.url;
                loader.remove();
                // Send message to socket
                socket.emit('send-message', {
                    roomCode: roomCode,
                    content: data.url,
                    sender: doctor,
                    type: 'image'
                });
            } catch (error) {
                console.error('Image upload failed:', error);
                // Update preview to show error
                const loader = previewDiv.querySelector('.absolute');
                loader.innerHTML = `<span class="text-white text-xs">Failed</span>`;
            }
        });
        // Display messages
        socket.on('new-message', (data) => {
            displayMessage(data);
        });
        function displayMessage(data) {
            const messageDiv = document.createElement('div');
            const isOwnMessage = data.sender === doctor;
            messageDiv.className = isOwnMessage ? 'flex items-end gap-3 justify-end' : 'flex items-end gap-3';
            messageDiv.innerHTML = isOwnMessage ?
                `<div class="flex flex-1 flex-col gap-1 items-end">
                    <p class="text-[#4e7a97] text-[13px] font-normal leading-normal max-w-[360px] text-right">${data.sender}</p>
                    <div class="text-base font-normal leading-normal flex max-w-[360px] rounded-lg px-4 py-3 bg-[#1994e6] text-slate-50">${data.type === 'text' ? data.content : `<img src='${data.content}' class='max-w-full rounded-lg'>`}</div>
                </div>` :
                `<div class="flex flex-1 flex-col gap-1 items-start">
                    <p class="text-[#4e7a97] text-[13px] font-normal leading-normal max-w-[360px]">${data.sender}</p>
                    <div class="text-base font-normal leading-normal flex max-w-[360px] rounded-lg px-4 py-3 bg-[#e7eef3] text-[#0e161b]">${data.type === 'text' ? data.content : `<img src='${data.content}' class='max-w-full rounded-lg'>`}</div>
                </div>`;
            messagesDiv.appendChild(messageDiv);
            messagesDiv.scrollTop = messagesDiv.scrollHeight;
        }
        // Video call functionality
        const startCallBtn = document.getElementById('start-call-btn');
        const endCallBtn = document.getElementById('end-call-btn');
        const videoSection = document.getElementById('video-section');
        const localVideo = document.getElementById('local-video');
        const remoteVideo = document.getElementById('remote-video');
        startCallBtn.addEventListener('click', async () => {
            try {
                localStream = await navigator.mediaDevices.getUserMedia({ video: true, audio: true });
                localVideo.srcObject = localStream;
                videoSection.classList.remove('hidden');
                startCallBtn.classList.add('hidden');
                endCallBtn.classList.remove('hidden');
                peer = new SimplePeer({ initiator: true, trickle: false, stream: localStream });
                peer.on('signal', (signal) => {
                    socket.emit('signal', { roomCode: roomCode, signal });
                });
                peer.on('stream', (remoteStream) => {
                    remoteVideo.srcObject = remoteStream;
                });
                peer.on('error', (err) => { console.error('Peer connection error:', err); });
            } catch (error) {
                console.error('Failed to get user media:', error);
                alert('Failed to access camera/microphone. Please check permissions.');
            }
        });
        socket.on('signal', ({ from, signal }) => {
            if (peer) {
                try { peer.signal(signal); } catch (error) { console.error('Error handling signal:', error); }
            }
        });
        socket.on('incoming-call', async ({ from }) => {
            if (!localStream) {
                try {
                    localStream = await navigator.mediaDevices.getUserMedia({ video: true, audio: true });
                    localVideo.srcObject = localStream;
                } catch (error) { console.error('Failed to get user media:', error); return; }
            }
            videoSection.classList.remove('hidden');
            startCallBtn.classList.add('hidden');
            endCallBtn.classList.remove('hidden');
            peer = new SimplePeer({ initiator: false, trickle: false, stream: localStream });
            peer.on('signal', (signal) => {
                socket.emit('signal', { roomCode: roomCode, signal, to: from });
            });
            peer.on('stream', (remoteStream) => {
                remoteVideo.srcObject = remoteStream;
            });
            peer.on('error', (err) => { console.error('Peer connection error:', err); });
        });
        endCallBtn.addEventListener('click', () => { endCall(); });
        function endCall() {
            if (peer) { peer.destroy(); peer = null; }
            if (localStream) { localStream.getTracks().forEach(track => track.stop()); localStream = null; }
            localVideo.srcObject = null;
            remoteVideo.srcObject = null;
            videoSection.classList.add('hidden');
            startCallBtn.classList.remove('hidden');
            endCallBtn.classList.add('hidden');
            socket.emit('call-ended', { roomCode: roomCode });
        }
        socket.on('call-ended', () => { endCall(); });
        socket.on('user-disconnected', (userId) => { if (peer) { endCall(); } });
        // Leave room
        leaveBtn.addEventListener('click', () => {
            socket.emit('leave-room', { roomCode: roomCode });
            window.location.href = '/telemed/list';
        });
    </script>
</body>
</html>
