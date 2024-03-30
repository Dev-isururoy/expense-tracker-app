<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Add your CSS links    -->
</head>
<body>
    <header>
        <!-- Add header content  -->
        <?php include 'partials/header.php'; ?>
    </header>
    
    <main>
        <!-- Content section, to be filled by child views -->
        @yield('content')
    </main>

    <footer>
        <!-- Add footer content  -->
        <?php include 'partials/footer.php'; ?>
    </footer>
</body>
</html>
