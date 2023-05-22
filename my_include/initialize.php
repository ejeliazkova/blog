<?php
    ini_set('display errors', 1);
    include_once('connect.php'); 
    
    echo "<br/> hey me!";
    
    function getAllJobs(){
        $posts = dbQuery("
            SELECT *
            FROM jobs
        ")->fetchAll();
 
        return $posts;  
    }

    // echo "<br/> and you!";
    
    getAllJobs();
    
    // var_dump("lalalala");
    // var_dump(getAllJobs());