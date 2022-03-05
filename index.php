<?php 
    //Variable for calculator result
    $mathAnswer = "";

    //Checks if there are numbers in both inputs
    if( isset($_POST["firstNumber"]) && isset($_POST["secondNumber"]) ){

        //Checks if entries in both inputs are valid numbers
        if ( is_numeric($_POST["firstNumber"]) && is_numeric($_POST["secondNumber"]) ){
            
            //Selects what operation to carry out and echoes result
            if ($_POST["mathOperation"] == "+") {
                $mathAnswer = $_POST["firstNumber"] + $_POST["secondNumber"];
                echo($mathAnswer);
            }
            if ($_POST["mathOperation"] == "-") {
                $mathAnswer = $_POST["firstNumber"] - $_POST["secondNumber"];
                echo($mathAnswer);
            }
            if ($_POST["mathOperation"] == "x") {
                $mathAnswer = $_POST["firstNumber"] * $_POST["secondNumber"];
                echo($mathAnswer);
            }
            if ($_POST["mathOperation"] == "/") {
                $mathAnswer = $_POST["firstNumber"] / $_POST["secondNumber"];
                echo($mathAnswer);
            }
        }

        //Echoes if input is an invalid number
        else {
            echo("Please enter a valid number.")
        }
    }

    //Echoes if one of the input fields is empty
    else {
        echo("Please make sure to enter a number in both fields.")
    };

?>

<html>
    <head>
        <title>Basic Calculator</title>
    <head>
    <body>
        <h1>Basic Calculator</h1>

        <form action="index.php" method="POST">
            <!--First Number Input Box-->
            <label for="firstNumber">First Number:</label>
            <input type="text" id="firstNumber" name="firstNumber" placeholder="Enter a number!"><br>

            <!--Second Number Input Box-->
            <label for="secondNumber">Second Number:</label>
            <input type="text" id="secondNumber" name="secondNumber" placeholder="Enter a number!"><br>

            <!--Calculator Operators-->
            <input type="submit" name="mathOperation" value="+">
            <input type="submit" name="mathOperation" value="-">
            <input type="submit" name="mathOperation" value="x">
            <input type="submit" name="mathOperation" value="/">
    <body>
