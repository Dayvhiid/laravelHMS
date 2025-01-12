<style>
  .W-sidebar{
    height: 60vh;
  }
  ul li{
    margin-bottom: 10vh;
  }
  /* General styles */
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  color: #333; /* Adjust text color for better contrast */
}

h1 {
  font-size: 2rem;
  margin-bottom: 1rem;
  text-align: center;
}

table {
  width: 100%; /* Ensure table fills container */
  border-collapse: collapse;
}

th, td {
  padding: 0.5rem 1rem;
  border: 1px solid #ddd;
  text-align: left; /* Align content to the left */
}

th {
  background-color: #f2f2f2;
  font-weight: bold;
}

/* Navigation bar styles (using Bootstrap classes) */
.navbar-brand {
  font-weight: bold;
  color: #007bff; /* Brand color */
}

.nav-link {
  color: #333; /* Adjust link color for better contrast */
  margin-right: 1rem; /* Add some spacing between links */
}

.nav-link:hover {
  color: #007bff; /* Highlight on hover */
}

/* Appointments table styling */
.appointments {
  padding: 1rem;
  border: 1px solid #ddd;
  border-radius: 4px;
  margin-top: 2rem; /* Add some margin for better separation */
}

.btn-primary {
  background-color: #007bff; /* Primary button color */
  border-color: #007bff;
  color: white;
}

.btn-primary:hover {
  background-color: #0069d9; /* Adjust hover color slightly darker */
  border-color: #0069d9;
}
.complaint-text {
  width: 200px; /* Adjust as needed */
  overflow: hidden;
 
  text-overflow: ellipsis;

  white-space: nowrap;
}



@import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;800&display=swap');

:root {
  --primary-red: hsl(1, 90%, 64%);
  --primary-blue: hsl(219, 85%, 26%);

  --neutral-white: hsl(0, 0%, 100%);
  --neutral-very-light-grayish-blue: hsl(210, 60%, 98%);
  --neutral-light-grayish-blue-1: hsl(211, 68%, 94%);
  --neutral-light-grayish-blue-2: hsl(205, 33%, 90%);
  --neutral-dark-grayish-blue: hsl(219, 12%, 42%);
  --neutral-very-dark-blue: hsl(224, 21%, 14%);
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-size: 16px;
  color: var(--neutral-very-dark-blue);
}

.container {
  width: 1440px;
  margin: 0px auto;
  background: white;
  border: 1px solid var(--neutral-very-light-grayish-blue);
}

.attribution {
  margin: 50px auto 5px;
}

.app {
  width: 700px;
  margin: 50px auto;
  background: var(--neutral-white);
  border-radius: 20px;
  padding: 15px 25px;
}

.app .header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  height: 50px;
}

.header h2 {
  font-size: 20px;
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 10px;
}

.header h2 .title {
  font-size: 20px;
}

.header h2 .unread-notification-number {
  text-align: center;
  background: var(--primary-blue);
  color: var(--neutral-white);
  width: 25px;
  height: 20px;
  font-size: 14px;
  border-radius: 5px;
}

.header p {
  color: var(--neutral-dark-grayish-blue);
  cursor: pointer;
}

.header p:hover {
  color: var(--primary-blue);
}

.app .body {
  margin-top: 15px;
}

.body .notification {
  background: var(--neutral-very-light-grayish-blue);
  display: flex;
  justify-content: space-between;
  align-items: center;
  gap: 20px;
  padding: 15px;
  border-radius: 10px;
  cursor: pointer;
  transition: all .3s ease-in-out;
  margin: 10px 0px;
}

.body .notification:hover {
  background: var(--neutral-light-grayish-blue-1);
}

.notification-click {
  animation: notification-click .5s ease-in-out forwards;
}

@keyframes notification-click {
  0% {
    background: var(--neutral-light-grayish-blue-1);
  }

  50% {
    background: var(--neutral-light-grayish-blue-2);
  }

  100% {
    background: none;
  }
}

.notification .avatar {
  width: 8%;
}

.notification .avatar img {
  width: 100%;
}

.notification .text {
  width: 92%;
}

.text .text-top p {
  color: var(--neutral-dark-grayish-blue);
}

.text .text-top p .profil-name {
  font-weight: 800;
}

.text .text-top p b {
  color: var(--neutral-dark-grayish-blue);
  display: inline-block;
}

.text .text-top p .unread-dot {
  display: inline-block;
  width: 10px;
  height: 10px;
  margin: 0px 0px 1px 7px;
  border-radius: 50%;
  background: var(--primary-red);
}

.text .text-bottom {
  color: rgba(94, 103, 120, .5);
}

.text .text-top p .b-blue {
  color: var(--primary-blue);
}

.notification.readed {
  background: none;
}

.notification.private-message .avatar {
  align-self: start;
}

.notification.private-message .avatar {
  align-self: start;
}

.notification.readed .text-bottom p {
  color: var(--neutral-dark-grayish-blue);
  padding: 20px;
  border: 1px solid var(--neutral-light-grayish-blue-2);
  margin-top: 10px;
}

.notification.readed .text p b {
  display: inline;
}

.notification.picture .avatar {
  width: 8%;
}

.notification.picture .text {
  width: 84%;
}

.notification.picture .commented-picture {
  width: 8%;
}

.notification.picture .commented-picture img {
  width: 100%;
}

/* responsive */
@media screen and (max-width: 375px) {
  * {
    font-size: 14px;
  }

  .container {
    width: 375px;
  }

  .app {
    width: 375px;
    margin: 0 auto;
    padding: 15px 15px;
  }

  .notification .avatar {
    width: 15%;
  }

  .notification .text {
    width: 85%;
  }

  .notification.readed .text-bottom p {
    font-size: 13px;
  }

  .notification.picture .avatar {
    width: 15%;
  }

  .notification.picture .text {
    width: 70%;
  }

  .notification.picture .commented-picture {
    width: 15%;
  }
}


/* Responsiveness */
@media (max-width: 768px) {
  .navbar-nav {
    flex-direction: column; /* Stack links vertically on smaller screens */
    align-items: center;
    margin-top: 1rem; /* Add some top margin for better layout */
  }

  .nav-link {
    margin-right: 0; /* Remove horizontal spacing on smaller screens */
  }

  table {
    font-size: 0.8rem; /* Adjust font size for better readability */
  }

  h1 {
    font-size: 1.5rem; /* Adjust heading size for smaller screens */
  }
}

</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylsheet" href="css/doctorsIndex.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Doctors</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link" href="{{route('pages.register')}}">Home</a>
              <a class="nav-link" href="{{route('search.treatment')}}">Search Treatment</a>
              <a class="nav-link" href="{{route('search.vitals')}}">Search Vitals</a>
              <a class="nav-link" href="{{ route('doctors.vitals')}}">Vitals</a>
              <a class="nav-link" href="{{route('doctors.treatment')}}">Treatment Plan</a>
              <a class="nav-link" href="{{route('calender')}}">Patient Management</a>
              <a class="nav-link" href="{{route('images.search')}}">Case Files</a>
            </div>
          </div>
        </div>
      </nav>
           
        <div class="appointments">
          <h1>Booking Appointment</h1>
          <table>
            <tr>
              <th>Name</th>
              <th>Date</th>
              <th>Time</th>
              <th>Compaints</th>
              <th>Confirm appointment status</th>
              {{-- <th>Confirm appointment status</th> --}}
              </tr>
            @forelse ($appointments as $appointment)
              <tr>
                <td>{{ $appointment->name }}</td>
                <td>{{ $appointment->date }}</td>
                <td>{{ $appointment->time }}</td>            
                  <td data-bs-toggle="tooltip" data-bs-placement="top" title="{{ $appointment->complaints }}">
                    {{ $appointment->complaints  }} </td>
                <td>
                  <a href="{{route('sms.page', ['sms' => $appointment])}}">Send Sms</a>
                </td>
                {{-- <td>
                  <a href="{{route('newSMS', ['sms' => $appointment])}}">Send Sms 2</a>
                </td> --}}
                {{-- <td> <a href="{{route('frame.edit', ['frames' => $frame])}}">Edit</a></td> --}}
                </tr>
            @empty
              <tr><td colspan="4">No appointments found.</td></tr>
            @endforelse
          </table>
        </div>
      <!DOCTYPE html>
<html lang="en">

{{--  --}}

  <!-- Feel free to remove these styles or customise in your own stylesheet ?? -->
  <style>
    .attribution {
      font-size: 11px;
      text-align: center;
    }

    .attribution a {
      color: hsl(228, 45%, 44%);
    }
  </style>

<body>
  <div class="container">
    <div class="app">
      <div class="header">
        <h2><span class="title">Notifications</span> <span class="unread-notification-number">3</span></h2>
      </div>
      <div class="body">
        @foreach ($notifications as $notification)
<div class="notification {{ $notification->status === 'unread' ? 'unreaded' : '' }}">
    <div class="avatar">
        <img src="{{ asset($notification->avatar) }}" alt="User Avatar">
    </div>
    <div class="text">
        <div class="text-top">
            <p>
                <span class="profil-name">{{ $notification->patient_name }}</span> 
                {{ $notification->message }}  <br>
                 <b>Patient ID<b> : {{ $notification->pid }}
                @if ($notification->status === 'unread')
                <span class="unread-dot"></span>
                @endif
            </p>
        </div>
        <div class="text-bottom">{{ $notification->created_at->diffForHumans() }}</div>

    </div>
</div>
@endforeach

        {{-- <div class="notification unreaded">
          <div class="avatar"><img src="assets/images/avatar-mark-webber.webp"></div>
          <div class="text">
            <div class="text-top">
              <p><span class="profil-name">Mark Webber</span> reacted to your recent post <b>My first tournament
                  today!</b><span class="unread-dot"></span></p>
            </div>
            <div class="text-bottom"> 1m ago</div>
          </div>
        </div> --}}
        {{-- <div class="notification unreaded">
          <div class="avatar"><img src="assets/images/avatar-angela-gray.webp"></div>
          <div class="text">
            <div class="text-top">
              <p><span class="profil-name">Angela Gray</span> followed you<span class="unread-dot"></span></p>
            </div>
            <div class="text-bottom"> 5m ago</div>
          </div>
        </div> --}}
        {{-- <div class="notification unreaded">
          <div class="avatar"><img src="assets/images/avatar-jacob-thompson.webp"></div>
          <div class="text">
            <div class="text-top">
              <p><span class="profil-name">Jacob Thompson</span> has joined your group <b class="b-blue">Chess
                  Club</b><span class="unread-dot"></span></p>
            </div>
            <div class="text-bottom"> 1 day ago</div>
          </div>
        </div>
        <div class="notification readed private-message">
          <div class="avatar"><img src="assets/images/avatar-rizky-hasanuddin.webp"></div>
          <div class="text">
            <div class="text-top">
              <p><span class="profil-name">Rizky Hasanuddin</span> sent you a private message</p>
            </div>
            <div class="text-bottom"> 5 days ago
              <p> Hello, thanks for setting up the Chess Club. I've been a member for a few weeks now and
                I'm already having lots of fun and improving my game.</p>
            </div>
          </div>
        </div>
        <div class="notification readed picture">
          <div class="avatar"><img src="assets/images/avatar-kimberly-smith.webp"></div>
          <div class="text">
            <div class="text-top">
              <p><span class="profil-name">Kimberly Smith</span> commented on your picture</p>
            </div>
            <div class="text-bottom"> 1 week ago</div>
          </div>
          <div class="commented-picture">
            <img src="assets/images/image-chess.webp">
          </div>
        </div>
        <div class="notification readed">
          <div class="avatar"><img src="assets/images/avatar-nathan-peterson.webp"></div>
          <div class="text">
            <div class="text-top">
              <p><span class="profil-name">Nathan Peterson</span> reacted to your recent post <b>5 end-game strategies to increase your win rate</b></p>
            </div>
            <div class="text-bottom">  2 weeks ago</div>
          </div>
        </div>
        <div class="notification readed">
          <div class="avatar"><img src="assets/images/avatar-anna-kim.webp"></div>
          <div class="text">
            <div class="text-top">
              <p><span class="profil-name">Anna Kim </span>left the group<b class="b-blue"> Chess Club</b></p>
            </div>
            <div class="text-bottom">   2 weeks ago</div>
          </div>
        </div>
      </div>
    </div> --}}

    {{-- <div class="attribution">
      Challenge by <a href="https://www.frontendmentor.io?ref=challenge" target="_blank">Frontend Mentor</a>.
      Coded by <a href="https://www.frontendmentor.io/profile/vonjytahina" target="_blank">Vonjy Tahina CHAN</a>.
    </div> --}}
  </div>
  <script src="script.js"></script>
</body>

</html>

      <script>
        function reloadPage() {
    setInterval(function() {
        location.reload(); // Reload the current page
    }, 120000); // 120000 ms = 2 minutes
}

// Call the function to start reloading
reloadPage();

      </script>
      
</body>
</html>