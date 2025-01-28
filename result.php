<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $diners = $_POST['diners'];
        $total_cost = $_POST['total_cost'];
        $tip_percentage = $_POST['tip_percentage'];
        
        $tip_amount = ($total_cost * $tip_percentage) / 100;
        $total_with_tip = $total_cost + $tip_amount;
        $amount_per_person = $total_with_tip / $diners;
            
    ?>
    <div class="flex-container">
        <div class="left-col">
            <h2>Each Diner's Total</h2>
        </div>

        <div class="right-col-result">
            <p>Bill Total: $<?php echo number_format($total_cost,2);?></p>
            <p>Tip: $<?php echo number_format($tip_amount, 2) . " (".$tip_percentage."%)";?></p>
            <p>Total Owed: $<?php echo number_format($total_with_tip, 2)?></p>
            <p class="total">Splitting the Bill equally, each of the <?php echo $diners ?> diners owes $<?php echo number_format($amount_per_person,2)?> which covers their share of the bill and tip.</p>
            <a href='index.php' class='reset'>Calculate a new meal?</a>
        </div>
    </div>
</body>
</html>