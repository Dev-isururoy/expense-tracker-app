<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expense Tracker - Expenses</title>
    <!-- Add your CSS links -->
</head>
<body>
    <h1>Expense Tracker - Expenses</h1>
    <a href="/expenses/create">Add New Expense</a>
    
    <table border="1">
        <thead>
            <tr>
                <th>Description</th>
                <th>Amount</th>
                <!-- Add more table headers as needed -->
            </tr>
        </thead>
        <tbody>
            <?php foreach ($expenses as $expense): ?>
                <tr>
                    <td><?= $expense->description ?></td>
                    <td><?= $expense->amount ?></td>
                    <!-- Display more fields as needed -->
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
