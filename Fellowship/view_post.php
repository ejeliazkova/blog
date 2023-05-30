<?php
    include('include/init.php');

    $errors = [];

    if(isset($_REQUEST['comment'])){
        // Don't insert the comment until you validate the form

        if($_REQUEST['comment'] == ''){
            $errors['comment'] = 'Required';
        }

        if(sizeof($errors) === 0){
            insertComment($_REQUEST['postId'], $_REQUEST['comment']);
            header("Location: view_post.php?postId=".$_REQUEST['postId']."");
            exit;
        }
    }

    if(isset($_REQUEST['delete'])){
        deleteComment($_REQUEST['commentId']);
    }
    if(isset($_REQUEST['postId'])){
        $postId = $_REQUEST['postId'];
    } else {
        die("no post id found please go back to the the home page: <a href='index.php'>Home</a>");
    }
    
    $post = getPost($postId);
    $comments = getComments($postId);

    echoHeader($post['title']);
    echo"<div style='color: yellowgreen;font-size: 25px; display: flex; justify-content: center; margin: 40px;'>".$post['body']."</div>";

?>
        <div class="commentsWrapper">
            <div class="commentsHeader">Comments</div>
            <div>
                <form action="" method="post">
                    Add a comment:<input type="text" name="comment"></input>
                    <input type="submit"/>
                </form>
            </div>
            <div class="commentsBody">
                <?php
                    if(isset($errors['comment'])){
                        echo"<div style='color: red;'>REQUIRED!</div>";
                    }
                    foreach($comments as $index => $comment){
                        $commentId = $comment['commentId'];
                        echo"
                            <div class='comment'>
                                <div>".$comment['content']."</div>
                                <div>@".getUser($comment['userId'])['username']."</div>
                                <div>".$comment['datePosted']."</div>
                                <form action='' method='post'>
                                    <input type='submit' name='delete' value='delete'></input>
                                    <input type='hidden' name='commentId' value=$commentId></input>
                                </form>
                            </div>
                        ";
                    }
                ?>
            </div>
        </div>
    </body>
</html>