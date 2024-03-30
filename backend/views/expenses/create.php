<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expense Tracker - Add New Expense</title>
    <!-- Add your CSS links or stylesheets here -->
</head>
<body>
    <h1>Add New Expense</h1>
    <form action="/expenses/store" method="POST">
        <!-- CSRF Token -->
        <input type="hidden" name="_token" value="<?= csrf_token() ?>">
        
        <!-- Description Field -->
        <div>
            <label for="description">Description:</label><br>
            <input type="text" id="description" name="description">
        </div>

        <!-- Amount Field -->
        <div>
            <label for="amount">Amount:</label><br>
            <input type="text" id="amount" name="amount">
        </div>

        <!-- Add more fields as needed -->

        <button type="submit">Add Expense</button>
    </form>
</body>
</html>
