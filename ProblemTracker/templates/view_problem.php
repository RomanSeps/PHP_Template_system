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
        <h1>View Problem</h1>
        <nav>
            <button class="nav-button" onclick="location.href='?currentPage=home'"><?= $page["home"] ?></button>
            <button class="nav-button" onclick="location.href='?currentPage=about'"><?= $page["about"] ?></button>
            <button class="nav-button" onclick="location.href='?currentPage=view_problem'"><?= $page["view_problems"] ?></button>
        </nav>
    </header>

    <hr>

    <main>
        <!-- Main content will be included here based on the current page -->
        <h2><?= $page["problem_list"] ?></h2>
        <p><?= $page["description"] ?></p>
        <div class="problems-list">
            <!-- Example problem item -->
            <div class="problem-item">
                <h3>Example Problem Title</h3>
                <p>This is a description of the example problem. It provides details about the issue and any relevant information.</p>
                <button class="view-button">View Details</button>
            </div>
            <!-- More problem items can be added here -->
        </div>
    </main>

    <footer>
        <p>&copy; 2024 Problem Tracker. All rights reserved.</p>
    </footer>
    
</body>
</html>