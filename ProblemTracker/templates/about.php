<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page["title"] ?></title>
    <link rel="stylesheet" href="/problemtracker/CSS/style.css">
</head>
<body>
    <header>
        <h1>About</h1>
        <nav>
            <button class="nav-button" onclick="location.href='?currentPage=home'"><?= $page["home"] ?></button>
            <button class="nav-button" onclick="location.href='?currentPage=about'"><?= $page["about"] ?></button>
            <button class="nav-button" onclick="location.href='?currentPage=view_problem'"><?= $page["view_problems"] ?></button>
        </nav>
    </header>

    <main>
        <section>
            <h2>About Problem Tracker</h2>
            <p>Problem Tracker is a web application designed to help users track and manage their problems efficiently. It allows users to create, view, and manage their problems in an organized manner.</p>
            <p>Our goal is to provide a simple and effective solution for problem management, helping users stay organized and focused on finding solutions.</p>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Problem Tracker. All rights reserved.</p>
    </footer>
    
</body>
</html>