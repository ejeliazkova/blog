<?php

    function echoHeader($pageTitle, $h1){ 
        echo "
            <html>
                <head>
                    <title>".$pageTitle."</title>
                    <link rel='stylesheet' type='text/css' href='stylin.css'>
                </head>
                <body>
                    
                    <div class='Menu'>
                        <div class='navbar'>
                            <a href='hello.php'>Home</a>
                            <a href='about.php'>About</a>
                            <a href='projects.php'>Projects</a>
                            <a href='travel.php'>Travel</a>
                            <a href='contact.php'>Contact</a>
                        </div>
                    </div>
                <h1>".$h1."</h1>
                        
                    <div class='dropMenu'>
                        <a href= 'dropLink'>Menu</a>
                            <div class='dropDownContent'>
                                <a href='hello.php'>Home</a>
                                <a href='about.php'>About</a>
                                <a href='projects.php'>Projects</a>
                                <a href='travel.php'>Travel</a>
                                <a href='contact.php'>Contact</a>
                            </div>
                    </div>
                </body>
            ";
    }
?>