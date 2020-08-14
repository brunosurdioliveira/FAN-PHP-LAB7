<!-- 
    Name: Bruno Surdi Oliveira
    Date: July 2020
    Purpose: week 10 Lab - This lab will introduce you to the Date and time function, unix timestamps, cookies and sessions.
-->

<pre style="text-align: center;">
<?php
/**
* Follow the instructions below, filling in the missing information and observing the output
* to learn the functions.
* Please take an extra few minutes to play with the values and observe the output
* break the code, fix it and learn the boundaries of using these functions
*/

// Look in documentation at https://www.php.net/manual/en/function.date.php to assist with the below
echo 'Today is ' . date("l") . "\n"; //output the current day in the format "Friday"
echo 'Today is ' . date("l M j, Y") . "\n"; //look up how I got this

//4 marks
echo 'Today is ' . date("D F j") . " in the year " . date("Y") . "\n\n"; //output "Today is Fri March 27 in the year 2020"

echo "<hr>"; //some spacing

//Work with the unix timestamp https://www.php.net/manual/en/function.time.php
echo "Unix time right now is: " . time() . "\n"; //refresh your browser to watch this value update
echo "The time right now is: " . date("H:m:s", time()) . "\n";

// 3 marks
echo "The time in 2 hours from now is: " . date("H:m:s", time() + ( 2 * 60 * 60)) . "\n";//check the php manual

echo "<hr>"; //some spacing

// Generate a unix timestamp https://www.php.net/manual/en/function.mktime.php
echo "Unix time for 6pm UTC March 25,2020 is: " . mktime(18,0,0,3,25,2020), "\n";

//fill in missing values and check against https://www.unixtimestamp.com/index.php to verify answer

// 6 marks
echo "Unix time for 3am UTC December 25,2021 is: " . mktime(3,0,0,12,25,2021), "\n\n";  

echo "<hr>"; //some spacing

//Notice you can use commas in PHP to output a list of items
//REview the following, change some of these values, reload and observe output
//verify outputs against https://www.unixtimestamp.com/index.php
echo strtotime("now"), "\n";
echo strtotime("10 September 2000"), "\n";
echo strtotime("+1 day"), "\n";
echo strtotime("+1 week"), "\n";
echo strtotime("+1 week 2 days 4 hours 2 seconds"), "\n";
echo strtotime("next Thursday"), "\n";
echo strtotime("last Monday"), "\n\n";

//Try any 2 strings and verify your results are working
//2 marks
echo "Bruno Surdi strtotime tests\n";
echo strtotime("first day of last month"), "\n";
echo strtotime("midnight first day of last year"), "\n\n";

echo "<hr>"; //some spacing

// isset() https://www.php.net/manual/en/function.isset.php and unset() https://www.php.net/manual/en/function.unset.php
$my_Array['my_key'] = "Got something";
$b = 0;

echo 'val of $my_Array["my_key"] is:';
var_dump($my_Array['my_key']);
echo "\nval of b is:";
var_dump($b);
echo "\n\n";

//WRONG
if($b){
  echo 'WRONG:b is set';
}else{
  echo 'WRONG:b is NOT set:';
  var_dump($b);
}

//CORRECT way to verify a variable is declared, ALWAYS use isset() to check if a var has been declared
if(isset($b)){
  echo 'CORRECT:b is set:';
  var_dump($b);
}else{
  echo 'CORRECT:b is NOT set:';
  var_dump($b);
}

//now we can destroy $b and see what we get
unset($b);
if(isset($b)){
  echo 'CORRECT:b is set:';
  var_dump($b);
}else{
  echo 'CORRECT:b is NOT set:';
  var_dump($b);
}

echo "<hr>"; //some spacing
//Change $a to the value zero and do an if/else statement to output the value of $a
// 5 marks
$a = 0;
if (isset($a)) {
  echo 'CORRECT:a is set:';
  var_dump($a);
} else{
  echo 'CORRECT: a is not set:';
  var_dump($a);
}

echo "<hr>"; //some spacing

//How to use setcookie() https://www.php.net/manual/en/function.setcookie.php
echo 'contents of $_COOKIE' . "\n";
var_dump($_COOKIE);
//set a cookie with an expiration of now + 3600 seconds = 1 hour
// setcookie("ryan_cookie","value of ryan cookie", time() + 3600); //uncomment this line, and refresh
echo 'contents of $_COOKIE after' . "\n";
var_dump($_COOKIE);
//now comment out the setcookie() 3 lines above and relaod... you are seeing the cookie from the browser

// to REMOVE a cookie, setcookie() with a time parameter set to the past
// setcookie('ryan_cookie', "", time() - 3600); //UNCOMMENT and refresh

// set your own cookie to expire in 3 days (3 marks)
// setcookie("brunosurdi_cookie", "value of bruno surdi cookie", time() + 259200); // 259200 seconds in 3 days

// delete your cookie (3 marks)
// setcookie('brunosurdi_cookie', "", time() - 259200);

echo "SESSION<hr>"; //some spacing

//Very similar to cookies you can set session variables and delete them
//  docs are here session_start() https://www.php.net/manual/en/function.session-start
session_start(); //uncomment, session_start() IS MANDATORY to do any sessions stuff !!!!
echo 'SESSION dump contains:';
var_dump($_SESSION);

echo 'The session ID is:' . session_id(); // refresh.. this does not change, it is unique and almost impossible to guess

//store something in our session using $_SESSION['your_key'] = "your val"; (2 marks)
$_SESSION['my_dog_name'] = 'Mia';

?>
</pre>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Week10 Lab</title>
    <style>
    h2 {
      text-align: center;
      background: aquamarine;
    }
    </style>
  </head>
  <body>
    <h2>Now go check to see if we can retreive our sessions variable in the <a href="week10_Bruno_sessiontest.php">next page</a></h2>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
