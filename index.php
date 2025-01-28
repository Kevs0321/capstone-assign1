<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipping Calculator</title>
    <link rel ="stylesheet" href="style.css">
</head>
<body>
<div class="flex-container">
    <div class="left-col">
        <h1>Tipping Calculator</h1>
        <p>Calculate your Tips easily!</p>
    </div>
        <form method="POST" action="result.php" class="right-col-index">
            <label for="diners">Number of Diners</label>
            <input type="number" id="diners" name="diners" min="2" placeholder="Minimum 2 people" required>

            <label for="total_cost">Total Cost of the Meal</label>
            <input type="number" id="total_cost" name="total_cost" step="0.01" min="1" placeholder="$0.00" required>

            <label for="tip_percentage">Tipping Percentage (Minimum 15%)</label>
            <input type="number" id="tip_percentage" name="tip_percentage" placeholder="15% and up" step="0.01" min="15" required>

            <button type="submit" class="submit-btn">Calculate</button>
        </form>
    </div>
</body>
</html>