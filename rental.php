<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="Content-Security-Policy" content="
  default-src 'self';
  img-src 'self' data: https:;
  style-src 'self' https: 'unsafe-inline';
  font-src 'self' https:;
  script-src 'self' 'unsafe-inline';
">
<meta http-equiv="X-Frame-Options" content="DENY">
<meta http-equiv="X-Content-Type-Options" content="nosniff">

  <title>ASHWAGRID - Car Rental Booking  </title>
  <link rel="stylesheet" href="mobility.css">   
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
  <header>
    <div class="logo">
      <img src="images/ashwa.png" alt="ASHWAGRID Logo">
      <select class="dropdown"  id="redirectDropdown" onchange="redirectPage()">
        <option value="" selected disabled hidden>Choose Service</option>
        <option value="mobility.php">MOBILITY</option>
        <option value="manpower.php">MANPOWER</option>
      </select>
    </div>
    <script>
  function redirectPage() {
    var dropdown = document.getElementById("redirectDropdown");
    var selectedValue = dropdown.value;

    if (selectedValue) {
      window.location.href = selectedValue;
    }
  }

   document.addEventListener('DOMContentLoaded', () => {
    const toggle = document.getElementById('servicesToggle');
    const menu = document.getElementById('servicesMenu');

    toggle.addEventListener('click', function (e) {
      e.preventDefault();
      menu.classList.toggle('show');
    });

    // Close dropdown if clicking outside
    document.addEventListener('click', function (e) {
      if (!toggle.contains(e.target) && !menu.contains(e.target)) {
        menu.classList.remove('show');
      }
    });
  });

 
function validateCorporateForm() {
  const phone = document.querySelector('input[name="phone"]').value.trim();
  const phonePattern = /^[0-9]{10}$/;

  if (!phonePattern.test(phone)) {
    alert("Please enter a valid 10-digit phone number.");
    return false;
  }

  return true; // allow submission
}


</script>

    <!-- NAVIGATION BAR  -->
     <nav>
      <ul>
        <li><a href="mobility.php" >Home</a></li>
        <li><a href="aboutus.php" >About Us</a></li>
      <li class="dropdown1">
  <a class="active">Services</a>
 <ul class="dropdown-menu1" id="servicesMenu">
  <li class="dropdown-arrow1"></li>
  <li><a href="corporate.php">Corporate Contact</a></li>
  <li><a href="rental.php">Car Rental Booking</a></li>
  <li><a href="uber.php">Uber Services</a></li>
</ul>
</li>
  <li><a href="Inventory.php">Inventor Page </a></li>
      </ul>
    </nav>
  </header>


<section class="rental">
    <div class="rental-text">
      <h1>Your Ride, Your Rules.</h1>
      <p> Select from our fleet of reliable, AC-equipped cars — <br>
      tailored for comfort, affordability, and smooth travel. <br>
       Whether you need a solo ride or a group travel option, <br>
        we have the right car for you. Just fill in your travel <br>
        details, and we'll show you the price before you <br>
        confirm </p>
</div>
</section>
 <div class="welcome-section">
    <h2>Welcome To AshwaGrid Mobility Service</h2>
    <p>
      Budget trips, Daily errands, City rides, Business travel, Comfortable intercity travel, Family/group trips,
      Mumbai Darshan <br>
       ALL-IN-ONE Solution is AshwaGrid...!
    </p>
  </div>
<div class="booking-form-section">
  <h3>Book Your Ride Here!</h3>
  <form method="post" action="submit.php" id="rideForm">
    <div class="row">
      <div>
        <label>Pickup Location</label>
        <input class="rental1" type="text" name="pickup1" required />
      </div>
      <div>
        <label>Pickup Location</label>
        <input class="rental1" type="text" name="pickup2" required />
      </div>
    </div>

    <div class="row">
      <div>
        <label>Date</label>
        <input class="rental1" type="date" name="date1" required />
      </div>
      <div>
        <label>Time</label>
        <input class="rental1" type="time" name="time1" required />
      </div>
      <div>
        <label>Date</label>
        <input class="rental1" type="date" name="date2" required />
      </div>
      <div>
        <label>Time</label>
        <input class="rental1" type="time" name="time2" required />
      </div>
    </div>

    <div class="row">
      <div>
        <label>Select Car</label>
        <select class="rental1" name="car">
          <option>Sedan</option>
          <option>SUV</option>
          <option>Mini</option>
          <option>Luxury</option>
        </select>
      </div>
      <div>
        <label>Number of People</label>
        <input class="rental1" type="number" name="people" required />
      </div>
      <div>
        <label>Number of Cars Needed</label>
        <input class="rental1" type="number" name="cars" required />
      </div>
    </div>

    <button type="submit" class="rental1">Continue ➜</button>
  </form>
</div>

  <!-- script.js line 32 ************************************************* -->
   <script src="script.js"></script>
</body>
</html>
