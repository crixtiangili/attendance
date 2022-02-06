<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>


<!-- Start Of Container -->

<div class="container">
    <h1 class="text1">Attendance</h1>

    <h2 class="clock"></h2>


    <div class="form">
        <form>
            <!-- Name of the student -->
            <input type="text" id="place" placeholder="Enter The Student Name">

            <!-- subject taking by the student -->
            <select class="sel1">
                <option>PHP BEGINNER CLASS</option>
                <option>PYTHON BEGINNER CLASS</option>
                <option>MOBILE APP BEGINNER CLASS</option>
            </select>
        </form>
    </div>

    <div class="sel">
        <!-- attendance of the student -->
        <select class="sel2">
            <option class="ty">ATTENDED</option>
            <option>DID NOT ATTEND</option>
        </select>
    </div>

    <div class="btn">
        <!-- submit button -->
        <button type="button" class="btn1">Submit</button>
    </div>
    
</div>




<!-- End Of Container -->
    
<!-- Jquery link -->
<script src="js/jquery.js"></script>

<!-- javascript -->
<script src="js/script.js"></script>
</body>
</html>