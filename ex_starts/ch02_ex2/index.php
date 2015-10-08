<?php 
    //set default value of variables for initial page load
    if (!isset($investment)) { $investment = ''; } 
    if (!isset($interest_rate)) { $interest_rate = ''; } 
    if (!isset($years)) { $years = ''; } 
    $error_message = "The 3 fields are required";
?> 
<!DOCTYPE html>
<html>
<head>
    <title>Future Value Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>
    <main>
    <h1>Future Value Calculator</h1>


<p class="error"><?php echo htmlspecialchars($error_message); ?></p>
<!--
    <?php if (!empty($error_message)) { ?>
        <p class="error"><?php echo htmlspecialchars($error_message); ?></p>
    <?php } ?>
-->

    <form action="" method="post">
        <div id="data">
            <label>Investment Amount:</label>
            <input type="text" name="investment">
            <br>

            <label>Yearly Interest Rate:</label>
            <input type="text" name="interest_rate">
            <br>

            <label>Number of Years:</label>
            <input type="text" name="years"
            <br>
        </div>

        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Calculate"><br>
        </div>
    </form>  
    </main>

    <?php
    if ($error_message != 'The 3 fields are required') {
        include 'display_results.php'; 
    }
    ?>
<br>

    <?php 
        echo 'This calculation was done on '.date('m/d/Y');
    ?>
</body>
</html>
