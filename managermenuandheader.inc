<?php
    echo '<nav>
        <a href = "dashboard.php"><img src = "./images/Logo_name.png" alt = "Company Logo"> </a>
        <h1>Manager</h1>
        <ul>
            <!--class:active indicate the website the user currently visits -->';
            $request_uri = $_SERVER['REQUEST_URI'];
            if($request_uri == '/assign2/dashboard.php'){
                echo '<li><a href = "dashboard.php" id = "active"><span class = "menuicon"><i class = "fa fa-home"></i></span>Dashboard</a></li>';
            } else {
                echo '<li><a href = "dashboard.php"><span class = "menuicon"><i class = "fa fa-home"></i></span>Dashboard</a></li>';
            }
            if($request_uri == '/assign2/manage.php'){
                echo '<li><a href = "manage.php" id = "active"><span class = "menuicon"><i class = "fa fa-tasks"></i></span>Management</a></li>';
            } else {
                echo '<li><a href = "manage.php"><span class = "menuicon"><i class = "fa fa-tasks"></i></span>Management</a></li>';
            }
            if($request_uri == '/assign2/jobslist.php'){
                echo '<li><a href = "jobslist.php" id = "active"><span class = "menuicon"><i class = "fa fa-server"></i></span>Jobs List</a></li>';
            } else {
                echo '<li><a href = "jobslist.php"><span class = "menuicon"><i class = "fa fa-server"></i></span>Jobs List</a></li>';
            }
        echo '</ul>
        <form method = "POST" action = "" id = "logoutForm">
            <button type = "submit" name = "logout">Logout</button>
        </form>
    </nav>
    <header>
        <p>Welcome <span id = "username">' . $currentName . '!</span></p>
        <form method = "POST" action = "" id = "logoutForm">
            <button type = "submit" name = "logout"><span class = "menuicon"><i class = "fa fa-sign-out"></i></span>Logout</button>
        </form>
    </header>';
?>