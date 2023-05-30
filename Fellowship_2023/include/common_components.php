<?php

    function echoHeader($title){
        echo "
            <html>
                <head>
                    <link rel='stylesheet' type='text/css' href='style.css'>
                </head>
                <body>
                    <h1 class='title'>$title</h1>
                    <div class='navbar'>
                        <a href='index.php'>Home</a>
                        <a href='register.php'>Register</a>
                        <a href='contact.php'>Contact</a>
                    </div>
        ";
    }

    function echoFooter(){
        echo "
                </body>
            </html>
        ";
    }