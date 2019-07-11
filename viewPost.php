 <?php
    include('config/init.php');

    $result = getAllProfiles();
    //var_dump($result);


   $profile = getProfile($_GET["profileId"]);
    
   echoHeader("".$profile['name'], "".$profile['occupation']);
?> 

