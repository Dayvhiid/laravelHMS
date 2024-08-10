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
      
</body>
</html>