<!DOCTYPE html>

<html>

<head>
    <style>
        .nav-header {
            padding-top: 30px;
            padding-bottom: 30px;
            font-weight: bold;
            font-family: 'Times New Roman', Times, serif;
        }

        .nav-subheader {
            font-weight: bold;
            padding-bottom: 30px;
            font-family: 'Times New Roman', Times, serif;
        }

        a {
            text-decoration: none;
        }

        /* Background color for top navigation */
        .topnav {
            background-color: #4b7777;
            overflow: hidden;
        }

        /* Link inside navigation bar */
        .topnav a {
            float: right;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            font-size: 20px;
            font-family: 'Times New Roman', Times, serif;
        }

        /* Color of links when hover */
        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        /* Style current selecting link */
        .topnav a.active {
            background-color: #80cccc;
            color: white;
        }
    </style>

    <meta charset="utf-8">
    <title>Public Health and Healthcare Access</title>
    <link rel="icon" href="/images/favicon.jpg">
    <h1 class="nav-header">
        <center>Public Health and Healthcare Access</center>
    </h1>
    <h4 class="nav-subheader">
        <center><i>Better Healthcare, Better Tomorrow</i></center>
    </h4>
</head>

<body>
    <?php
    $page = explode('.', basename($_SERVER['PHP_SELF']))[0];
    // echo $page;
    ?>
    <div class="topnav">
        <a <?php if ($page == "access") {
            echo "class='active'";
        } ?> href="access.php">Healthcare Access</a>
        <a <?php if ($page == "current") {
            echo "class='active'";
        } ?> href="current.php">Current Issues</a>
        <a <?php if ($page == "healthcare") {
            echo "class='active'";
        } ?> href="healthcare.php">Healthcare</a>
        <a <?php if ($page == "mental") {
            echo "class='active'";
        } ?> href="mental.php">Mental Health</a>
        <a <?php if ($page == "literacy") {
            echo "class='active'";
        } ?> href="literacy.php">Health Literacy</a>
        <a <?php if ($page == "index") {
            echo "class='active'";
        } ?> href="index.php">Home</a>
    </div>
</body>

</html>