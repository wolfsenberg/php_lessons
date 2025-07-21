<!--LESSON 1 INTRODUCTION-->

<?php
    echo"<b>LESSON 1 - INTRODUCTION</b><br><br>";
    echo"I like pizza <br>";
    echo"It's really good";
    // This is a comment
    /* This
       is
       a
       multiline
       comment
    */   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <button>order pizza</button>
</body>
</html>

<br><br>

<!--LESSON 2 VARIABLES AND DATA TYPE-->

<?php
    echo"<b>LESSON 2 - VARIABLES AND DATE TYPE</b><br><br>";
    //strings
    $name ="Geinel";
    $food ="pizza";
    $email="geineldungao012@gmail.com";

    //integers
    $age = 21;
    $users = 2;
    $quantity = 4;

    //floats
    $gpa = 1.2;
    $price =  5.99;
    $tax_rate = 5.1;

    //booleans
    $emplyoyed = true;
    $online = true;
    $for_sale = true;

    $total = null;


    echo"Hello {$name} <br>";
    echo"You like {$food} <br>";
    echo"Your email is {$email} <br>";

    echo"You are {$age} years old. <br>";
    echo"There are {$users} users online. <br>";
    echo"You would like to buy {$quantity} items <br>";

    echo"Your gpa is: {$gpa} <br>";
    echo"Your pizza is \${$price}. <br>";
    echo"The sales tax rate is: {$tax_rate}% <br>";

    echo"Online Status: {$online}<br><br>";

    echo"You have ordered {$quantity}x {$food}s <br>";
    $total = $quantity * $price;
    echo"Your total is \${$total} <br> <br>";
?>

<!--LESSON 3 ARITHMETIC-->

<?php
    echo"<b>LESSON 3 - ARITHMETIC</b><br><br>";
    //Arithmetic operators
    // + - * / ** %

    echo"<i>Arithmetic Operators</i><br>";

    $x = 10;
    $y = 2;
    $z = null;

    $z = $x + $y;
    echo"The sum of $x and $y is <b>$z</b> <br>";

    $z = $x - $y;
    echo"The difference of $x and $y is <b>$z</b> <br>";

    $z = $x * $y;
    echo"The product of $x and $y is <b>$z</b> <br>";

    $z = $x / $y;
    echo"The quotient of $x and $y is <b>$z</b> <br>";

    $z = $x ** $y;
    echo"$x to the power of $y is <b>$z</b> <br>";

    $z = $x % $y;
    echo"The remainder of $x and $y is <b>$z</b> <br><br>"; 

    //Increment/decrement operators
    //++, --
    echo"<i>Increment and Decrement Operator</i><br>";
    $counter = 0;
    
    $counter++;
    echo"For the increment <b>$counter</b> <br>";

    $counter2 = 0;

    $counter2--;
    echo"For the decrement <b>$counter2</b><br><br>";

    //Operator Precedence
    //()
    //**
    //* / %
    //+ -

    echo"<i>Operator Precedence</i><br>";
    $total = 1 + 2 - 3 * 4 / 5 ** 6;
    echo"This is the total: <b> $total </b><br>";

    $total_breakdown = 3 - 0.000768;
    echo"This is the total <i>(test)</i>: <b>$total_breakdown</b> <br> <br>"; 
?>

<!--LESSON 4 $_GET AND $_POST-->
<?php
    echo"<b>LESSON 4 - GET AND POST</b><br><br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
    <label>username:</label><br>
    <input type ="text" name ="username"><br>
    <label>password:</label><br>
    <input type ="password" name ="password"><br><br>
    <input type="submit" value="Log In">
    </form>
</body>
</html>

<?php
    //$_GET, $_POST 

    //$_GET 
    //echo "{$_GET ["username"]} <br>";
    //echo "{$_GET ["password"]} <br>";


    //$_POST 
    echo "{$_POST ["username"]} <br>";
    echo "{$_POST ["password"]} <br>";

    //$_GET = Data us appended to the url
    //        NOT SECURE
    //        char limit
    //        Bookmark is possible w/ values
    //        GET requests can be cached
    //        Better for a search page

    //$_POST = Data is packed inside the body of the HTTP request
    //         MORE SECURE
    //         No data limit
    //         Cannot bookmark
    //         GET requests are not cached
    //         Better for submitting credentials 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>quantity: </label><br>
        <input type="text" name="quantity"> <br> <br>
        <input type="submit" value="total">
    </form>
</body>
</html>

<?php
    $item = "pizza";
    $price = 5.99;
    $quantity = $_POST["quantity"];
    $total = null;

    $total = $quantity * $price;


    echo"You have ordered {$quantity}x {$item}/s <br>";
    echo"Your total is <b>\${$total}</b> <br> <br>";
?>

<!--LESSON 5 MATH FUNCTIONS-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p><b>LESSON 5 -MATH FUNCTIONS</b></p>
    <form action ="index.php" method="post">
    <label>x:</label>
    <input type="text" name="x"> <br> <br>
    <label>y:</label>
    <input type="text" name="y"> <br> <br>
    <label>z:</label>
    <input type="text" name="z"> <br> <br>
    <input type="submit" value="total">
    </form>
</body>
</html>

<?php
    $x = $_POST["x"];
    $y = $_POST["y"];
    $z = $_POST["z"];
    $total = null;

    //always positive - $total = abs($x);

    //round - $total = round($x);
    //always round up - $total = ceil($x);
    //always round down -$total = floor($x);

    //squareroot - $total = sqrt($x);
    //power - $total = pow($x, $y);

    //max function - $total = max($x, $y, $z);
    //min function - $total = min($x, $y, $z);

    //pi function - $total = pi();

    //random function - $total = rand();
    //random fucntion with range - $total = rand(1, 7);


    echo"<b>$total</b>";
    //echo"<b>$x</b>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action ="index.php" method="post">
        <label>radius:</label>
        <input type="text" name="radius"> <br> <br>
        <input type="submit" value="calculate">
    </form> 
</body>
</html>

<?php
    $radius = $_POST["radius"];
    $circumference = null;
    $area = null;
    $volume = null;

    $circumference = 2 * pi() * $radius;
    $circumference = round ($circumference, 2);

    $area = pi () * pow($radius, 2);
    $area = round ($area, 2); 

    $volume = 4/3 * pi() * pow($radius, 3);
    $volume = round ($volume, 2);

    echo"Circumference = <b>{$circumference} cm </b> <br>";
    echo"Area = <b>{$area} cm² </b> <br>";
    echo"Volume = <b>{$volume} cm³ </b> <br><br>";
?>

<!--LESSON 6 IF STATEMENTS-->
<?php
    echo"<b>LESSON 6 - IF STATEMENTS</b><br><br>";
    // if statement = if some condition is true, do something
    //                if condition is false, don't do it

    $age = 100;

    if($age >= 100){
        echo"<i>You are too old to enter this site</i><br><br>";
    }
    elseif ($age >= 18){
        echo"<i>You may enter this site.</i><br><br>";
    }

    elseif($age <= 0){
        echo"<i>That wasn't a valid age.</i><br><br>";
    }

    else{
        echo"<i>You must be 18+ to enter.</i><br><br>";
    }
?>

<?php
    $adult = true;
    
     if($adult){
        echo"<i>You may enter this site</i>";
     }

     else{
        echo"<i>You must be an adult to enter</i>";
     }
?>

<?php
    $hours = 50;
    $rate = 15;
    $weekly_pay = null;

    if($hours <=0){
        $weekly_pay = 0;
    }

    elseif ($hours <=40){
        $weekly_pay = $hours * $rate;
    }
    else{
        $weekly_pay = ($rate * 40) + (($hours - 40) * ($rate * 1.5));
    }
    echo"<br><br><b>You made \${$weekly_pay} this week</b><br><br>";

?>

<!--LESSON 7 LOGICAL OPERATORS-->
<?php
    echo"<b>LESSON 7 - LOGICAL OPERATORS</b><br><br>";

    // Logical operators = combine conditional statements 
    // if (condition1 && condition2)


    // && = True if both conditions are true (AND)
    // || = True if at least one condition is true (OR)
    //  ! = True if false. False if true. (NOT)
    
    $temp = 15;

    if($temp >= 0 && $temp <= 30){ //&&
        echo"The weather is good.<br><br>";
    }
    else{
        echo"The weather is bad.<br><br>";
    }
?>

<?php
    $temp = 25;

    if($temp < 0 || $temp > 30){ //
        echo"The weather is bad.<br><br>";
    }
    else{
        echo"The weather is good.<br><br>";
    }
?>

<?php
    $temp = 15;
    $cloudy = false;

    if($temp < 0 || $temp > 30){ //
        echo"The weather is bad.<br>";
    }
    else{
        echo"The weather is good.<br>";
    }

    if(!$cloudy){
        echo"It's sunny.<br><br>";
    }
    else{
        echo"It's cloudy.<br><br>";
    }
?>

<?php
    $age = 20;
    $citizen = true;

    if($age >= 18 && $citizen){
        echo"You can vote.<br><br>";
    }
    else{
        echo"You cannot vote.<br><br>";
    }
?>

<!--binaliktad-->

<?php
    $age = 20;
    $citizen = true;

    if(!$age >= 18 && !$citizen){
        echo"You cannot vote.<br><br>";
    }
    else{
        echo"You can vote.<br><br>";
    }
?>

 <?php
    $child = true;
    $senior = false;
    $ticket = null;

    if($child || $senior){
        $ticket = 10;
    }
    else{
        $ticket = 15;
    }

    echo"The ticket price is <b>\${$ticket}</b><br><br>";
 ?>

 <!--LESSON 8 SWITCHES-->

 <?php
    echo"<b>LESSON 8 - SWITCHES</b><br><br>";

    //switch = replacement to using many elseif statements
    //         more efficient, less code to write

    $grade = "C";

    //no switch
    /*
    if($grade == "A"){
        echo"You did great";
    }
    elseif($grade == "B"){
        echo"You did good";
    }
    elseif($grade == "C"){
        echo"You did okay";
    }
    elseif($grade == "D"){
        echo"You did poorly";
    }
    elseif($grade == "F"){
        echo"You failed";
    }
    else{
        echo"$grade is not a valid grade";
    }
    */

    //yes switch

    switch($grade){
        case "A": 
            echo"You did great<br><br>";
            break;
        case "B": 
            echo"You did good<br><br>";
            break;
        case "C": 
            echo"You did okay<br><br>";
            break;
        case "D": 
            echo"You did poorly<br><br>";
            break;
        case "F": 
            echo"You failed<br><br>";
            break;
        default:
            echo"{$grade} is not valid<br><br>";
    }
?>

<?php
    $date = date("l");
    
    switch($date){
        case "Monday";
            echo"<b>I hate Mondays</b><br><br>";
            break;
        case "Tuesday";
            echo"<b>It is Taco Tuesday!</b><br><br>";
            break;
        case "Wednesday";
            echo"<b>The work week is half over!</b><br><br>";
            break;
        case "Thursday";
            echo"<b>It's almost the weekend!</b><br><br>";
            break;
        case "Friday";
            echo"<b>The weekend is here!</b><br><br>";
            break;
        case "Saturday";
            echo"<b>Time to party!</b><br><br>";
            break;
        case "Sunday";
            echo"<b>Time to relax</b><br><br>";
            break;
        default:
            echo"<b>{$date} is not a day</b><br><br>";
    }
?>

 <!--LESSON 9 FOR LOOPS-->

 <?php
    echo"<b>LESSON 9 - FOR LOOPS</b><br><br>";

    // for loop = repeat some code a certain # of times

    // index; condition ; increment/decrement
    for($i = 1; $i <=10 ; $i++){
        echo"$i <br>";
    }

?>
<br>
<?php
    //incremented by 2

    for($i = 2; $i <=10 ; $i+=2){
        echo"$i <br>";
    }
?>
<br>

<?php
    //decremented by 2

    for($i = 10; $i > 0 ; $i-=2){
        echo"$i <br>";
    }
?>
<br><br>

<!--INCREMENT-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>Enter a number to count to:</label>
        <input type="text" name ="counter"><br>
        <input type="submit" value="start">
    </form>
</body>
</html>

<?php
    $counter = $_POST["counter"];

    for($i = 1; $i <= $counter; $i++)
        echo $i .  "<br>";
?>
<br>
<!--DECREMENT-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>Enter a number to count down from:</label>
        <input type="text" name ="counter"><br>
        <input type="submit" value="start">
    </form>
</body>
</html>

<?php
    $counter = $_POST["counter"];

    for($i = $counter; $i > 0 ; $i--)
        echo $i .  "<br>";
?>
<br>

 <!--LESSON 10 WHILE LOOPS-->

 <?php
    echo"<b>LESSON 10 - WHILE LOOPS</b><br><br>";

    //while loop = do some code infinitely while some
    //             condition remains true

    $counter =0;

    while($counter <10){
        $counter++;
        echo $counter . "<br>";
    }
?>
<br>

<!--INFINITE LOOP CODE-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="submit" name="stop" value="stop">
    </form>
</body>
</html>


<?php
/*
    $seconds = 0;
    $running = true;

    while($running){

        if(isset($_POST["stop"])){
            $running = false;
        }
        else{
            //wait 1 second
            $seconds++;
            echo $seconds . "<br>";
        }
    }
*/        
?>
