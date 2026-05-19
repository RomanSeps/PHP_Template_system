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
        <h1>Problem Tracker</h1>
        <nav>
            <button class="nav-button" onclick="location.href='?currentPage=home'"><?= $page["home"] ?></button>
            <button class="nav-button" onclick="location.href='?currentPage=about'"><?= $page["about"] ?></button>
            <button class="nav-button" onclick="location.href='?currentPage=view_problem'"><?= $page["view_problems"] ?></button>
        </nav>
    </header>
    <hr>

    <main>
        <!-- Welcome Message -->
        <section>
            <h2><?= $page["welcome_message"] ?></h2>
            <p><?= $page["description"] ?></p>
            <form>
                <input type="text" name="title" placeholder="Enter problem title" required>
                <textarea name="description" placeholder="Describe the problem" required></textarea>

                <button class="crt">Create new problem</button>
            </form>
        </section>
    </main>


    <footer>
        <p>&copy; 2024 Problem Tracker. All rights reserved.</p>
    </footer>
    
</body>
</html>
