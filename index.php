<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP LOOPS ACTIVITY</title>
</head>
<body>
    <!--NUMBER 1-->
    <?php
    echo "Activity 1: Number Counter"; 
    echo "<br>";

    $counter = 2;

    while ($counter <=20) {
    echo $counter." ";
    $counter+=2;
    }
    ?>   
    
    <br><br>

    <!--NUMBER 2-->
    <!--
    echo "Activity 2: Password Validator\n";
    echo "<br>";
    $password = "password123";
    $input = "";

    do {
        echo "Please enter the password: ";
        $input = trim(fgets(STDIN));

        if ($input !== $password) {
            echo "Incorrect password.\n";
        }
    }
    while ($input == $password);
        echo "Access Granted.\n"
    -->

    <br><br>

    <!--NUMBER 3-->
    <?php
    echo "Activity 3: Multiplication Table";
    echo "<br>";

    $mult = 7;

    for ($i = 1; $i <=10; $i++) {
        $result = $mult * $i;
        echo "$mult x $i = $result";
        echo "<br>";
    }
    ?>

    <br><br>

    <!--NUMBER 4-->
    <?php
    echo "Activity 4: Loop Control with break and continue";
    echo "<br>";

    for ($i = 1; $i <= 10; $i++) {
        if ($i == 5) {
            continue;
        }
        if ($i == 9) {
            break;
        }
        echo "$i ";
    }
    ?>

    <br><br>

    <!--NUMBER 5-->
    <?php
    echo "Activity 5: Sum of Numbers";
    echo "<br>";

    $counter = 1;
    $sum = 0;

    while ($counter < 101) {
        $sum += $counter;
        $counter++;
    }
    echo "The sum of numbers from 1 to 100 is: " .$sum;
    ?>

    <br><br>

    <!--NUMBER 6-->
    <?php
    echo "Activity 6: Array Iteration with foreach";
    ?>
    <ol>
    <?php
    $fav_movies =  array("Flipped", "Dinner in America", "Mean Girls", "Spirited Away", "10 Things I Hate About You");

    foreach ($fav_movies as $movie) {
        echo "<li>" .$movie ."</li>";
    }
    ?>
    </ol>

    <br><br>
    
    <!--NUMBER 7-->
    <?php
    echo "Activity 7: Key-Value Pairs with foreach";
    echo "<br>";

    $student = array(
        "Name" => "Alice",
        "Age" => 20,
        "Grade" => "A",
        "City" => "Baguio"
    );
    foreach ($student as $key => $value) {
        echo "$key: $value";
        echo "<br>";
    }
    ?>

    <br><br>

    <!--NUMBER 8-->
    <?php
     echo "Activity 8: Factorial Calculator";
     echo "<br>";

     $number = 5;
    $factorial = 1;

    for ($i = $number; $i > 1; $i--) {
        $factorial *= $i;
    }
    echo "Factorial of $number is: $factorial\n";
    ?>

    <br><br>

    <!--NUMBER 9-->
    <?php
     echo "Activity 9: FizzBuzz Challenge";
     echo "<br>";

     for ($i = 1; $i <= 50; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo "FizzBuzz ";
        }
        elseif ($i % 3 == 0) {
            echo "Fizz ";
        }
        elseif ($i % 5 == 0) {
            echo "Buzz ";
        }
        else {
            echo "$i ";
        }
    }
    ?>

    <br><br>

    <!--NUMBER 10-->
    <?php
     echo "Activity 10: Prime Number Checker";
     echo "<br>";

     function isPrime($number) {
        if ($number < 2) {
            return false;
        }
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                return false;
            }
        }
        return true;
    }
    $number = 17;
    
    if (isPrime($number)) {
        echo "$number is a prime number. ";
    } else {
        echo "$number is not a prime number. ";
    }
    ?>

    <br><br>

    <?php
    echo "Activity 11: Fibonacci Sequence";
    echo "<br>";

    $first = 0;
    $second = 1;
    $count = 10;

    $fibonacci = array($first, $second);

    while (count($fibonacci) < $count) {
        $next = $first + $second;
        $fibonacci[] = $next;
        $first = $second;
        $second = $next;
    }
    echo implode(" ", $fibonacci) . "\n";
    ?>

    <br><br>

    <!--NUMBER 12-->
    <?php
     echo "Activity 12: Reverse a String";
     echo "<br>";

     $inputString = "Hello";
    $reversedString = "";

    for ($i = strlen($inputString) - 1; $i >= 0; $i--) {
        $reversedString .= $inputString[$i];
    }
    echo "Input: \"$inputString\"";
    echo "<br>";
    echo "Output: \"$reversedString\"";
     ?>

</body>
</html>