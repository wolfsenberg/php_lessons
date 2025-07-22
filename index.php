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
<br>

 <!--LESSON 11 ARRAYS-->

 <?php
    echo"<b>LESSON 11 - ARRAYS</b><br><br>";

    //array = "variable" whcih can hold more than one value at a time

    $foods = array("apple", "orange", "banana", "coconut");

    /*
    echo $foods[0] . "<br>";
    echo $foods[1] . "<br>";
    echo $foods[2] . "<br>";
    echo $foods[3] . "<br><br>";
    */

    //change in array
    //$foods[0] = "pineapple";

    //array push (add)
    //array_push($foods, "pinapple", "kiwi");

    //array_pop (remove last)
    //array_pop($foods);

    //array_shift (remove first)
    //array_shift($foods);

    //array_reverse (reverse)
    /*
    $reversed_foods = array_reverse($foods);
    
    foreach($reversed_foods as $food){
        echo $food . "<br>";
    }
    echo"<br>";
    */

    //count
    echo count($foods) . "<br><br>";


    //for each loop

    foreach($foods as $food){
        echo $food . "<br>";
    }
    echo"<br>";
?>

 <!--LESSON 12 ASSOCIATIVE ARRAYS-->

 <?php
    echo"<b>LESSON 12 - ASSOCIATIVE ARRAYS</b><br><br>";

    //associative array = an array made of key=>value pairs

    //countries => capitals
    //id => username
    //item => price

    $capitals = array("USA"=>"Washington D.C.", 
                      "Japan"=>"Tokyo", 
                      "South Korea"=>"Seoul", 
                      "India"=>"New Delhi");
    
    //update key value pair
    //$capitals["USA"] = "Las Vegas";

    //add new key value pair
    //$capitals["China"] = "Beijing";

    //remove last
    //array_pop($capitals);

    //remove first
    //array_shift($capitals);

    //echo $capitals["Japan"];

    /*all keys
    $keys = array_keys($capitals);

    foreach($keys as $key){
        echo"{$key} <br>";
    }
    echo"<br>";
    */

    /*values
    $values = array_values($capitals);

    foreach($values as $value){
        echo"{$value} <br>";
    }
    echo"<br>";
    */

    /*array flip
    $capitals = array_flip($capitals);

    foreach($capitals as $key=>$value){
        echo"{$key} = {$value} <br>";
    }
    echo"<br>";
    */

    //reverse order
    //$capitals = array_reverse($capitals);
    
    //count
    //echo count($capitals); 
    //echo"<br><br>";

    foreach($capitals as $key=>$value){
        echo"{$key} = {$value} <br>";
    }
    echo"<br><br>";
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
        <label>Enter a country</label><br>
        <input type ="text" name="country"><br>
        <input type="submit">
    </form>
</body>
</html>

<?php
    $capitals = array("USA"=>"Washington D.C.", 
                      "Japan"=>"Tokyo", 
                      "South Korea"=>"Seoul", 
                      "India"=>"New Delhi");

    $capital = $capitals[ $_POST["country"]];
    
    echo"The capital is <b>{$capital}</b>";
    echo"<br><br>";
?>

 <!--LESSON 13 isset() and empty()-->

 <?php
    echo"<b>LESSON 13 - ISSET() and EMPTY()</b><br><br>";

    //isset() = Returns TRUE if a variable is declared and not null
    //empty() = Returns TRUE if a variable is not declared, false, null, ""

    $username = "wolfgang";

    if(isset($username)){
        echo"This variable is set.";
    }
    else{
        echo"This variable is NOT set.";
    }

    echo"<br><br>";

    if(empty($username)){
        echo"This variable is empty.";
    }
    else{
        echo"This variable is NOT empty.";
    }

    echo"<br><br>";
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
        <label>username: </label>
        <input type ="text" name ="username"> <br>
        <label>password: </label>
        <input type ="password" name ="password"> <br>
        <input type="submit" name="login" value="Log In">
    </form>
</body>
</html>

<?php
    
    //remove the comment tags if you want to test this
    //foreach($_POST as $key=>$value){
    //    echo"{$key} = {$value} <br>";
    //}


    if(isset($_POST["login"])){
        
        $username = $_POST["username"];
        $password = $_POST["password"];

        if(empty($username)){
            echo"<b>Username is missing</b><br>";
        }
        elseif(empty($password)){
            echo"<b>Password is missing</b><br>";
        }
        else{
            echo"<b>Hello {$username}</b><br><br>";
        }
    }
?>

 <!--LESSON 14 RADIO BUTTONS-->

<?php
    echo"<b>LESSON 14 - RADIO BUTTONS</b><br><br>";
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
        <input type="radio" name="credit_card" value="Visa">
        Visa<br>
        <input type="radio" name="credit_card" value="Mastercard">
        Mastercard<br>
        <input type="radio" name="credit_card" value="American Express">
        American Express<br><br>
        <input type="submit" name="confirm" value="confirm">
    </form>
</body>
</html>

<?php
    if(isset($_POST["confirm"])){

        $credit_card = null;
        
        //MORE EFFICIENT (SWITCH)
        if(isset($_POST["credit_card"])){
            $credit_card = $_POST["credit_card"];
        }

        switch($credit_card){
            case "Visa":
                echo"You selected Visa<br><br>";
                break;
            case "Mastercard":
                echo"You selected Mastercard<br><br>";
                break;
            case "American Express":
                echo"You selected American Express<br><br>";
                break;
            default:
                echo"Please make a selection<br><br>";
        }

        /* LESS EFFICIENT
        if($credit_card == "Visa"){
            echo"You selected Visa";
        }
        elseif($credit_card == "Mastercard"){
            echo"You selected Mastercard";
        }
        elseif($credit_card == "American Express"){
            echo"You selected American Express";
        }
        else{
            echo"Please make a selection";
        }
        */

        //-------------------------------------------//

        /*
        if(isset($_POST["credit_card"])){
            $credit_card = $_POST["credit_card"];
            echo $credit_card;
        }
        else{
            echo"Please make a selection";
        }
        */

        //$credit_card = $_POST["credit_card"];
        //echo $credit_card;
    } 
?>

 <!--LESSON 15 CHECKBOXES-->

<?php
    echo"<b>LESSON 15 - CHECKBOXES</b><br><br>";
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
        <input type ="checkbox" name="pizza" value="Pizza">
        Pizza<br>
        <input type ="checkbox" name="hamburger" value="Hamburger">
        Hamburger<br>
        <input type ="checkbox" name="hotdog" value="Hotdog">
        Hotdog<br>
        <input type ="checkbox" name="taco" value="Taco">
        Taco<br><br>
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php
    
    if(isset($_POST["submit"])){

        if(isset($_POST["pizza"])){
            echo"You like pizza!<br><br>";
        }
        if(isset($_POST["hamburger"])){
            echo"You like hamburger!<br><br>";
        }
        if(isset($_POST["hotdog"])){
            echo"You like hotdog!<br><br>";
        }
        if(isset($_POST["taco"])){
            echo"You like taco!<br><br>";
        }
        if(empty($_POST["pizza"])){
            echo"You DON'T like pizza!<br><br>";
        }
        if(empty($_POST["hamburger"])){
            echo"You DON'T like hamburger!<br><br>";
        }
        if(empty($_POST["hotdog"])){
            echo"You DON'T like hotdog!<br><br>";
        }
        if(empty($_POST["taco"])){
            echo"You DON'T like taco!<br><br>";
        }
    }
?> 

<!--arrayed-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type ="checkbox" name="foods[]" value="Pizza">
        Pizza<br>
        <input type ="checkbox" name="foods[]" value="Hamburger">
        Hamburger<br>
        <input type ="checkbox" name="foods[]" value="Hotdog">
        Hotdog<br>
        <input type ="checkbox" name="foods[]" value="Taco">
        Taco<br><br>
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php
    
    if(isset($_POST["submit"])){

       $foods = $_POST["foods"];

       foreach($foods as $food){
            echo $food . "<br><br>";
       }
    }
?> 

 <!--LESSON 16 FUNCTIONS-->

<?php
    echo"<b>LESSON 16 - FUNCTIONS</b><br><br>";
    
    //function = write some code once, reuse when you need it
    //           type () after function name is invoke
    //           ex. add() subtract() multiply() divide()

    /*
    function happy_birthday(){
        echo"Happy Birthday dear you! <br>";
        echo"Happy Birthday to you! <br>";
        echo"Happy Birthday dear you! <br>";
        echo"You are x years old! <br>";
    }

    happy_birthday();
    happy_birthday();
    happy_birthday();
    */

    function happy_birthday($first_name, $age){
        echo"Happy Birthday {$first_name}! <br>";
        echo"Happy Birthday to you! <br>";
        echo"Happy Birthday {$first_name}! <br>";
        echo"You are {$age} years old! <br><br>";

    }

    happy_birthday("Spongebob", 30);
    happy_birthday("Patrick", 35);
    happy_birthday("Squidward", 45);
?>

<?php
    function is_even($number){
        return $number % 2;
        
    }

    echo is_even(10);
    echo"<br><br>";    
?>

<?php
    function hypotenuse(float $a, float $b){
        $c = sqrt($a ** 2 + $b ** 2);
        return $c;
    }

    echo hypotenuse(4, 5) . "<br><br>";
?>

<!--LESSON 17 STRING FUNCTIONS-->

<?php
    echo"<b>LESSON 17 - STRING FUNCTIONS</b><br><br>";

    $username = array("Wolfgang", "D.", "Heisenberg");
    //$username = "Wolfgang D. Heisenberg";
    $phone = "123-456-7890";

    //lowercase 
    //$username = strtolower($username);

    //uppercase
    //$username = strtoupper($username);

    //trim
    //$username = trim($username);

    //pad
    //$username = str_pad($username, 20, "0");

    //replace
    //$phone = str_replace("-", "", $phone);

    //reverse
    //$username = strrev($username);

    //shuffle
    //$username = str_shuffle($username);

    //compare
    //$equals  = strcmp($username, "Wolfgang Heisenberg");

    //string length
    //$count = strlen($phone);

    //position
    //$index = strpos($username, " " );

    //substring
    //$firstname = substr($username, 0, 8);
    //$lastname = substr($username, 9);

    /*
    //explode
    $fullname = explode(" ", $username);

    foreach($fullname as $name){
        echo $name . "<br>";
    }
    */

    //implode
     $username = implode(" ", $username);

    echo $username . "<br><br>";
   

    //echo $username . "<br><br>";
    //echo $phone . "<br><br>";
    //echo $equals . "<br><br>";
    //echo $count. "<br><br>";
    //echo $index . "<br><br>";
    //echo $firstname . "<br><br>";
    //echo $lastname . "<br><br>";
?>

<!--LESSON 18 SANITIZE/VALIDATE INPUT-->

<?php
    echo"<b>LESSON 18 - SANITIZE/VALIDATE INPUT</b><br><br>";
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
        username: <br>
        <input type="text" name="username"><br><br>
        age: <br>
        <input type="text" name="age"><br><br>
        email: <br>
        <input type="text" name="email"><br><br>
        <input type="submit" name="login" value="login"><br>
    </form>
</body>
</html>

<?php
    /*SANITIZE
    if(isset($_POST["login"])){

        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);

        $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);

        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
        
        echo "Hello {$username} <br><br>";
        echo "You are {$age} years old <br><br>";
        echo "Your email is: {$email} <br><br>";
    }
    */

    if(isset($_POST["login"])){

        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);

        $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);

        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

        echo "Hello {$username} <br><br>";

        if(empty($age)){

            echo"That number wasn't valid<br><br>";
        }
        else{
            echo"You are $age years old<br><br>";
        }

        if(empty($email)){
            echo"That email wasn't valid<br><br>";
        }
        else{
            echo"Your email is: {$email}<br><br>";
        }
    }
?>

<!--LESSON 19 INCLUDE()-->

<?php
    echo"<b>LESSON 19 - INCLUDE()</b><br><br>";

    // include() = Copies the content of a file (php/html/text)
    //             and includes it in your php file.
    //             Sections of our website become reusable
    //             Changes only need to be made in one place

    include("header.html");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    This is the Home page <br>
    Stuff about your Home page can go here <br>
</body>
</html>

<?php
    include("footer.html");
?>

<!--LESSON 20 COOKIE-->

<?php
    echo"<br>";
    echo"<b>LESSON 20 - COOKIE</b><br><br>";

    // cookie = Information about a user stored in a user's web-browser
    //          targeted advertisements, browsing preferences, and
    //          other non-sensitive data

    
?>