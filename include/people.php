<?php

//get one row of info (profile)
function getProfile($profileId){
    $result = dbQuery('
    SELECT *
    FROM profiles
    Where profileId = :profileId
    ', array(
        'profileId' => $profileId
    )) ->fetch();
    return $result;
}

//get all info (profiles)
function getAllProfiles(){
    $result = dbQuery('
        SELECT *
        FROM profiles
    ')->fetchAll();
    return $result;
}

//insert a new profile
function insertProfile($name, $occupation, $school, $username, $password){
    dbQuery(
        'INSERT INTO profiles(name, occupation, school, username, password)
        VALUES(:name, :occupation, :school, :username, :password)',
        [
            'name' => $_REQUEST['name'],
            'occupation' => $_REQUEST['occupation'],
            'school' => $_REQUEST['school'],
            'username' => $_REQUEST['username'],
            'password' => $_REQUEST['password']
        ]
        );
}

?>
