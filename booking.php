<?php include "script/database.php";


?>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/booking.css">

    <link rel="icon" href="img/ferrylogo.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />    
<link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
<script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.7.1.min.js"></script>
    <title>Booking | Binangkas</title>
</head>
<body>
    <?php include "script/header.php";?>
    <section class="main-body">
        <div class="caption">
        <h2>Sailing to New Horizons!</h2><br>

        </div>
        <div class="input-body" id="input-body">
    <div class="booking-form" id="booking-form">
        <form>
        

            <label for="origin">Origin:</label>
            <select id="origin" name="origin">
                <option value="origin1">Origin 1</option>
                <option value="origin2">Origin 2</option>
            </select>

            <label for="destination">Destination:</label>
            <select id="destination" name="destination">
                <option value="destination1">Destination 1</option>
                <option value="destination2">Destination 2</option>
            </select>

            <label for="date">Date of Travel:</label>
            <input type="date" id="date" name="date">
            <div class="trip-title">
                <label for="trip-type">Trip Type:</label>

                </div>
            <div class="trip">
                    <label for="trip-type">Roundtrip</label>
                    <input type="checkbox" id="trip-type" name="trip-type">
                    <label for="trip-type">One Way</label>
                    <input type="checkbox" id="trip-type" name="trip-type">
                </div>
                   
            <label for="passenger-count">Number of Passengers:</label>
            <input type="number" id="passenger-count" name="passenger-count" min="1" required>
          

            <button type="submit" id="submit-btn">Book Now</button>
        </form>
    </div>
</div>


    </section>
    <?php include "script/footer.php";?>
    <script src="js/header.js"></script>
    <script src="js/booking.js"></script>

</body>
</html>