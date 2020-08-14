<!-- 
    Name: Bruno Surdi Oliveira
    Date: July 2020
    Purpose: week 10 Lab - This lab will introduce you to the Date and time function, unix timestamps, cookies and sessions.
-->

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Week 10 Lab</title>

    <style>
    body {
        text-align: center;
        background: url("https://i.pinimg.com/originals/2a/21/aa/2a21aaf645133d516caef7c719e3b98a.jpg");
    }

    h1 {
        font-family: 'Permanent Marker', cursive;
        font-size: xxx-large;
    }

    .card {
        left: 100px;
    }
    
    </style>
  </head>
  <body><br>
    <h1>Session</h1>

    <?php
        //Check our session output
        //start the session ( 1 mark )
        session_start();
        // echo session_id(); // Session ID
        // print_r($_SESSION); // Checking the session array

        //output a user friendly message for your value (2 marks)
        ?>

        <!-- Card to output -->
        <div class="card" style="width: 18rem;">
            <img src="https://instagram.fyzd1-2.fna.fbcdn.net/v/t51.2885-15/e35/p1080x1080/72326347_434530794099993_5995677945653555451_n.jpg?_nc_ht=instagram.fyzd1-2.fna.fbcdn.net&_nc_cat=109&_nc_ohc=GrGk29HRnVYAX8zEgWA&oh=9c07da7246f26f922e41f436bc37a467&oe=5F42C55B" class="card-img-top" alt="Mia - dog">
            <div class="card-body">
                    <h5 class="card-title">What is the value in my session?</h5>
                    <p class="card-text">The value in my session is <?php print_r($_SESSION['my_dog_name']) ?>. Mia is my dog, you can check her instagram account clicking in the button below</p>
                    <a href="https://www.instagram.com/miacanadense/" class="btn btn-primary">Go to Mia's profile</a>
            </div>
        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>

