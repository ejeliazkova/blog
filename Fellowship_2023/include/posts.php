<?php
    // function getAllPosts_initial(){
    //     $posts = [
    //         1 => [
    //             'postId' => 1,
    //             'title' => 'About Me',
    //             'body' => 'I love rollerblading'
    //         ],
    //         2 => [
    //             'postId' => 2,
    //             'title' => 'Register',
    //             'body' => 'Register here and get started today'
    //         ],
    //         3 => [
    //             'postId' => 3,
    //             'title' => 'Contact',
    //             'body' => 'Contact me at eva.jeliazkova@gmail.com'
    //         ]
    //     ];
    //     return $posts;
    // }

    // function getPost_initial($postId){
    //     $posts = getAllPosts_initial();
    //     return $posts[$postId];
    // }


    function getAllPosts(){
        $posts = dbQuery("
            SELECT *
            FROM post
            ORDER BY datePublished DESC
        ")->fetchAll();
        
        return $posts;
    }

    
    function getPost($postId){
        $post = dbQuery("
            SELECT *
            FROM post
            WHERE postId = $postId
        ")->fetch();
        
        return $post;
    }