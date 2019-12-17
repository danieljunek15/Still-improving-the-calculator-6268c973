<?php
session_start();
?>

<DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styles.css">
<title>DE BIT machienen!</title>

</head>
<body>

<h1 id="PaginaTittleColor">EPIC BOB Calculator</h1>

    <form method="post">
    <div class="RekenInputEen">
    <input type="number" name="RekenInputEen" placeholder="Number one pleas" >
    </div>
    <br>
    <div class="RekenInputTwee">
    <input type="number" name="RekenInputTwee" placeholder="Number two pleas" >
    </div>
    <br>
    <div>
    <input type="submit" name="Submit" value="+">
    <input type="submit" name="Submit" value="-">
    <input type="submit" name="Submit" value="*">
    <input type="submit" name="Submit" value="/">
    <input type="submit" name="Submit" value="%">
    </div>

    <?php
    if(isset($_POST["Submit"])){
        switch($_POST["Submit"]){
            case "+";
                $Output = $_POST["RekenInputEen"] + $_POST["RekenInputTwee"];
                break;
            case "-";
                $Output = $_POST["RekenInputEen"] - $_POST["RekenInputTwee"];
                break;
            case "*";
                $Output = $_POST["RekenInputEen"] * $_POST["RekenInputTwee"];
                break;       
            case "/";
                $Output = $_POST["RekenInputEen"] / $_POST["RekenInputTwee"];
                break;
            case "%";
                $Output = $_POST["RekenInputEen"] % $_POST["RekenInputTwee"];
                break;
        }
    }
    if(isset($Output)){
        ?>
        <h2 id="AntwoordKleur"> BOB hier heb je je antwoordt :<?php echo $Output ?></h2>
    <?php
    }
    ?>
    
    </form>
</body>
</html>