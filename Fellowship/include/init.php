<?php
    date_default_timezone_set('America/Chicago');
    session_start();

    include('include/connect.php');
    include('include/db_query.php'); //this should happen right after connect.php (config) so other functions have access to the database
    include('include/common_components.php'); // my file combines functions for common html and for blog posts -> should be separated into common_components.php and posts.php
    include('include/comment.php');
    include('include/posts.php');
    include('include/user.php');
    include('include/helper_functions.php');