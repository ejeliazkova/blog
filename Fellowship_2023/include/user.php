<?php

    function getUser($userId){
        $user = dbQuery("
            SELECT *
            FROM user
            WHERE
            userId = $userId
        ")->fetch();

        return $user;
    }