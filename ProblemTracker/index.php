<?php
$page = [

    "title" => "Problem Tracker",
    "home" => "Home",
    "about" => "About",
    "view_problems" => "View Problems",
    "welcome_message" => "Welcome to the Problem Tracker!",
    "problem_list" => "Here are your current problems:",
    "description" => "Track and manage your problems efficiently."
];

$currentPage = $_GET["currentPage"] ?? "home";

$allowedPages = ["home", "about", "view_problem"];

if (!in_array($currentPage, $allowedPages)) {
    $currentPage = "home";
}

$content = "templates/$currentPage.php";

include "templates/$currentPage.php";