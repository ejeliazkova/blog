<?php
    function getComments($postId){
        $comments = dbQuery(
            "SELECT *
            FROM comment
            WHERE postId = $postId
            AND dateArchived is NULL"
        )->fetchAll();
        return $comments;
    }

    function insertComment($postId, $content){
        // Hard-coding the userId for now
        // if we don't 
        $now = date("Y-m-d h:i:s");
        dbQuery(
            "INSERT INTO comment(userId, content, datePosted, postId)
            VALUES(:userId, :content, :datePosted, :postId)",
            [
                'userId' => 1,
                'content' => $content,
                'datePosted' => $now,
                'postId' => $postId
            ]
        );
    }

    function deleteComment($commentId){
        // or you can use CURRENT_TIMESTAMP but
        // I'm using a built-in php function instead
        $now = date("Y-m-d h:i:s");
        dbQuery(
            "UPDATE comment
            SET dateArchived = :dateArchived
            WHERE commentId = :commentId",
            [
                'dateArchived' => $now,
                'commentId' => $commentId
            ]
        );
    }