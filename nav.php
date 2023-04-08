<!DOCTYPE html>
<style>
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
        font-size: 17px;
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
    
    /* h2{
        margin-left: 15px;
        font-family: "Garamond", serif;
    } */

    a {
        text-decoration:none;
    }

</style>
<html>
    <head>
        <meta charset="utf-8">
        <title>Public Health and Healthcare Access</title>
        <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
        <h1>Public Health and Healthcare Access</h1>
    </head>
    <body>
        <?php
            $page = explode('.', basename($_SERVER['PHP_SELF']))[0]; 
            // echo $page;
        ?>
        <div class="topnav">            
            <a <?php if ($page == "access") { echo "class='active'";} ?> href="access.php">Healthcare Access</a>
            <a <?php if ($page == "current") { echo "class='active'";} ?> href="current.php">Current Issues</a>
            <a <?php if ($page == "healthcare") { echo "class='active'";} ?> href="healthcare.php">Healthcare</a>
            <a <?php if ($page == "mental") { echo "class='active'";} ?> href="mental.php">Mental Health</a>            
            <a <?php if ($page == "literacy") { echo "class='active'";} ?> href="literacy.php">Health Literacy</a>
            <a <?php if ($page == "home") { echo "class='active'";} ?> href="home.php">Home</a>
        </div>
    </body>
</html>