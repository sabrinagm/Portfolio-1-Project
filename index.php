<!--Sabrina Garay Portfolio 1 Project-->

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
            }
            if ($_POST["mathOperation"] == "-") {
                $mathAnswer = $_POST["firstNumber"] - $_POST["secondNumber"];
            }
            if ($_POST["mathOperation"] == "x") {
                $mathAnswer = $_POST["firstNumber"] * $_POST["secondNumber"];
            }
            if ($_POST["mathOperation"] == "÷") {
                $mathAnswer = $_POST["firstNumber"] / $_POST["secondNumber"];
            }
        }

        //Echoes if input is an invalid number or if there is an empty field
        else {
            echo("Please make sure you have entered two valid numbers.");
        }
    }

?>

<html>
    <head>
        <title>Calculator Portfolio 1</title>
        <link rel="stylesheet" href="style.css">
    <head>
    <body>
        <h1>Enter two numbers to calculate below...</h1>

        <form action="index.php" method="POST">
            <!--First Number Input Box-->
            <label for="firstNumber"></label>
            <input type="text" id="firstNumber" name="firstNumber" placeholder="Enter a number!" class="inputBox"><br>

            <!--Second Number Input Box-->
            <label for="secondNumber"></label>
            <input type="text" id="secondNumber" name="secondNumber" placeholder="Enter a number!" class="inputBox"><br>

            <!--Results Box-->
            <br><input name="mathAnswer" value="<?php echo($mathAnswer); ?>" readonly placeholder="Your result is..." id="answerBox"><br>

            <!--Calculator Operators-->
            <input type="submit" name="mathOperation" value="+" class="operationButtons">
            <input type="submit" name="mathOperation" value="-" class="operationButtons">
            <input type="submit" name="mathOperation" value="x" class="operationButtons">
            <input type="submit" name="mathOperation" value="÷" class="operationButtons">
    <body>
