<?php
    echo '
    <input type = "checkbox" id = "HamburgerMenuBar">
    <div>
        <!--This is the company logo. The logo is designed by Viet Hoang Pham.-->
        <a href = "index.php"><img src = "./images/Logo_name.png" alt = "Company Logo"> </a>
        <label for = "HamburgerMenuBar">
            <span class = "content">\'</span>
            <span class = "Line TopLine"></span>
            <span class = "Line MiddleLine"></span>
            <span class = "Line BottomLine"></span>
        </label>
    </div>
    <nav id = "UserNavigationBar">
        <ul>
        <!--class:active indicate the website the user currently visits -->';
                $request_uri = $_SERVER['REQUEST_URI'];
                
                if($request_uri == '/assign2/index.php'){
        echo        '<li><a href = "index.php" id = "active">Home</a></li>';
                } else {
        echo        '<li><a href = "index.php">Home</a></li>';
                }
                if($request_uri == '/assign2/jobs.php'){
        echo        '<li><a href = "jobs.php" id = "active">Jobs</a></li>';
                } else {
        echo        '<li><a href = "jobs.php">Jobs</a></li>';                
                }
                if($request_uri == '/assign2/apply.php'){
        echo        '<li><a href = "apply.php" id = "active">Apply</a></li>';
                } else {
        echo        '<li><a href = "apply.php">Apply</a></li>';
                }
                if($request_uri == '/assign2/about.php'){
        echo        '<li><a href = "about.php" id = "active">About</a></li>';
                } else {
        echo        '<li><a href = "about.php">About</a></li>';            
                }
                if($request_uri == '/assign2/enhancements.php'){
        echo        '<li><a href = "enhancements.php" id = "active">Enhancements</a></li>';
                } else { 
        echo        '<li><a href = "enhancements.php">Enhancements</a></li>';
                }
        echo    '<li><a href = "mailto:104506968@student.swin.edu.au">Contact</a></li>
                <li id = "loginandregister"><a href = "login.php">Login/Register</a></li>
        </ul>
    </nav>';
?>