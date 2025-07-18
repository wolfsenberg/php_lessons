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
    echo"Volume = <b>{$volume} cm³ </b> <br>";
?>

<!--LESSON 6 IF STATEMENTS-->

