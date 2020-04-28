<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>PHP</title>
  </head>
  <body class="container bg-dark text-danger">
    <div class="jumbotron display-4 my-4 py-4">
    <?php
    //Domo for PHP String functions
    echo 'PHP String functions -', '<br>';

    //Find out string length
    echo 'strlen ->', '<br>';
    echo strlen("Web&UX"), '<br>'; //without space
    echo strlen("Web & UX"), '<br>', '<br>'; // with space

    //Find out string reverse
    echo 'strrev ->', '<br>';
    echo strrev("Vandy"), '<br>', '<br>';

    //Search for the text and returns its position occurence (String position)
    echo 'strpos ->', '<br>';
    echo strpos("hey! I am here.", "here"), '<br>'; //I noticed that Output counting spaces as well but w3school doesn't.
    echo strpos("hey! I am here.", "Here"), '<br>'; // No output as Here not found with capital H.

    //Replace string with another.
    echo 'str_replace ->', '<br>';
    echo str_replace("UP education", "Yoobee", "Hello UP education"), '<br>', '<br>';

    //join(separator, inputay)
    echo 'join() ->', '<br>';
    echo 'join() is alias of implode(),it returns string from the elements of an input.', '<br>', '<br>';
    echo 'syntax - join(separator, input) ', '<br>', '<br>';
    $array_name = array('She','is','simply','amazing','programmer.');
    $join_string = join(" ", $array_name);
    echo $join_string;

    echo '<br>', '<br>';

    //Domo for PHP Number functions
    echo 'PHP Number functions -', '<br>';

    //Check if the type of a variable is integer

    echo 'PHP has following functions to check if the type of a variable is integer -<br>', '<ul> <li>is_int()</li>
    <li>is_integer() [alias of is_int()]</li>
    <li>is_long()</li> </ul>';

      //Domo for is_int()
    echo '<h2 class="display-4  mt-5 text-success"> is_int() -> </h2>', '<br>';
    $x = 1000;
    var_dump(is_int($x));

    echo "<br>";

    $y = 30.45;
    var_dump(is_int($y));

    //Domo for is_long()
    echo '<h2 class="display-4  mt-5 text-success"> is_long() -> </h2>', '<br>';
    $x = 1000;
    var_dump(is_long($x));

    echo "<br>";

    $y = 30.45;
    var_dump(is_long($y));

    //Check if the type of a variable is Float
    echo '<h2 class="display-4  mt-5 text-success"> is_float() -> </h2>', '<br>';
    $x = 25.63;
    var_dump(is_float($x));

    echo "<br>";

    $x = 63;
    var_dump(is_float($x));

    //Check if a numeric value is finite or infinite
    echo '<h2 class="display-4  mt-5 text-success"> Finite or Infinite -> </h2>', '<br>';
    $x = 3.6e5936;
    var_dump($x);

    echo "<br>";

    $x = 30;
    var_dump($x);

    //Check if a value is not a number
    echo '<h2 class="display-4  mt-5 text-success"> PHP NaN -> </h2>', '<br>';
    $x = acos(10);
    var_dump($x);

    //PHP Casting Strings and Floats to Integers
    echo '<h2 class="display-4  mt-5 text-success"> Cast float to integer -> </h2>', '<br>';
    $x = 56.78;
    $castingInt = (int)$x;
    echo $castingInt;

    echo '<h2 class="display-4  mt-5 text-success"> Cast string to integer -> </h2>', '<br>';
    $x = "45";
    $castingInt = (int)$x;
    echo $castingInt;

    ?>
    </div>
  </body>
</html>
