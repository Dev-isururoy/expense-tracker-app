<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expense Tracker - Edit Expense</title>
    <!-- Add your CSS links  -->
</head>
<body>
    <h1>Edit Expense</h1>
    <form action="/expenses/update/<?= $expense->id ?>" method="POST">
        <!-- CSRF Token -->
        <input type="hidden" name="_token" value="<?= csrf_token() ?>">
        <!-- Hidden field to send PUT request -->
        <input type="hidden" name="_method" value="PUT">
        
        <!-- Description Field -->
        <div>
            <label for="description">Description:</label><br>
            <input type="text" id="description" name="description" value="<?= $expense->description ?>">
        </div>

        <!-- Amount Field -->
        <div>
            <label for="amount">Amount:</label><br>
            <input type="text" id="amount" name="amount" value="<?= $expense->amount ?>">
        </div>

        <!-- Add more fields -->

        <button type="submit">Update Expense</button>
    </form>
</body>
</html>
