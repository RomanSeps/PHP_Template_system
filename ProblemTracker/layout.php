<?php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page["title"] ?></title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>

    <header>
        <h1><?= $page["title"] ?></h1>
        <nav>
            <button class="nav-button" onclick="location.href='?currentPage=home'"><?= $page["home"] ?></button>
            <button class="nav-button" onclick="location.href='?currentPage=about'"><?= $page["about"] ?></button>
            <button class="nav-button" onclick="location.href='?currentPage=view_problem'"><?= $page["view_problems"] ?></button>
        </nav>
    </header>

    <hr>

    <main>
        <!-- Main content will be included here based on the current page -->
        <?php include $content; ?>
    </main>

    <footer>
        <p>&copy; 2024 Problem Tracker. All rights reserved.</p>
    </footer>
    
</body>
</html>