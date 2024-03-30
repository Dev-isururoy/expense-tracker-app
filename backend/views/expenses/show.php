<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expense Tracker - Show Expense</title>
    <!-- Add your CSS links -->
</head>
<body>
    <h1>Expense Details</h1>
    <p><strong>Description:</strong> <?= $expense->description ?></p>
    <p><strong>Amount:</strong> <?= $expense->amount ?></p>
    <!-- Display more details   -->
    <a href="/expenses">Back to Expenses</a>
</body>
</html>
