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
    $fav_movies =  array("Flipped", "Dinner in America", "Mean Girls", "Spirited Away", "10 Reasons Why I Hate You");

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
    ?>


</body>
</html>