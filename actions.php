<?php

include("components/database.php");

$status = false;

if(isset($_POST) && isset($_POST['action'])) {

    if(isset($_POST['action']) && $_POST['action'] == 'add-post') {

        $insert_query = "INSERT INTO posts (`title`, `short_text`, `text`, `category_id`) VALUES (?, ?, ?, ?)";

        $myDatabase->prepare($insert_query)->execute([
            $_POST['title'],
            $_POST['short_text'],
            $_POST['text'],
            $_POST['category_id'],
            ]);

        header("Location: add.php" );
    } else if(isset($_POST['action']) && $_POST['action'] == 'add-comment'){

        $insert_query = "INSERT INTO comments (post_id, text) VALUES (?, ?)";

        $myDatabase->prepare($insert_query)->execute([$_POST['post_id'], $_POST['comment']]);

        header("Location: article.php?id=".$_POST['post_id'] );
    } else if(isset($_POST['action']) && $_POST['action'] == 'add-category'){

        $insert_query = "INSERT INTO categories (`name`) VALUES (?)";

        $myDatabase->prepare($insert_query)->execute([$_POST['name']]);

        header("Location: categories.php" );
    }
}