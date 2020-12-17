<?php

include("components/database.php");

$status = false;

if(isset($_POST) && isset($_POST['action'])) {
    if(isset($_POST['action']) && $_POST['action'] == 'add-post') {
            $insert_query = "INSERT INTO posts ('title', 'short_text', 'text') VALUES (?, ?, ?)";
            $myDatabase->prepare($insert_query)->execute([
               $_POST['title'], 
               $_POST['text'],
               $_POST['short_text']
            ]);
            header('location: /posts/add.php');

    } else if(isset($_POST['action']) && $_POST['action'] == 'add-comment') {
        $insert_query = "INSERT INTO posts ('post_id', 'text') VALUES (?, ?)";
            $myDatabase->prepare($insert_query)->execute([
               $_POST['post_id'], 
               $_POST['comment']
            ]);
            header('location: /posts/article.php?id='.$_POST['post_id']);

    }

}
?>