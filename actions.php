<?php

include("components/database.php");

$status = false;

if(isset($_POST) && isset($_POST['action'])) {

    $bookname = isset($_POST["book-name"]) ? $_POST["book-name"] : null;
    $author = isset($_POST["author"]) ? $_POST["author"] : null;
    $releasedate = isset($_POST["release-date"]) ? $_POST["release-date"] : null;

    if($_POST['action'] == 'add-book') {

        $sourceName = '';

        // UPLOAD FILE ON SERVER
        if (isset($_FILES) && !empty($_FILES)) {

            if (!file_exists('uploads/')) {
                mkdir('uploads/');
            }

            $tmp_name = $_FILES['source']['tmp_name'];
            $name = $_FILES['source']['name']; // alizi.txt
            $extension = pathinfo($name)['extension'];
            $filename = pathinfo($name)['filename'];

            $sourceName = $filename . '-' . time() . '.' . $extension;
            $destination = 'uploads/' . $sourceName;

            move_uploaded_file($tmp_name, $destination); 

        }

        // Adding Books
        if ($bookname && $author && $releasedate) {
            // Insert Query
            $insert_query = "INSERT INTO books (`book_name`, `author`, `release_date`, `source`) 
                             VALUES (?, ?, ?, ?)";
            $myDatabase->prepare($insert_query)
            ->execute([$bookname, $author, $releasedate, $sourceName]);

            header("Location: /" );
        }

    } else if($_POST['action'] == 'edit-book') {
        // Edit Books
        if (isset($_POST['id']) && $bookname && $author && $releasedate) {
            // Update Query
            $update_query = "UPDATE books 
                                SET book_name = :book_name, author = :author, release_date = :release_date
                              WHERE id = :id";
            $stm = $myDatabase->prepare($update_query);
            $stm->execute([
                'id' => $_POST['id'],
                'book_name' => $bookname,
                'author' => $author,
                'release_date' => $releasedate
            ]);

            header("Location: /edit.php?id=".$_POST['id'] );
                            
        }
    } else if(isset($_POST['action']) && $_POST['action'] == 'delete-book') {
        if ($_POST['id']) {
            $query = "DELETE FROM books WHERE id = :id";
            $stm = $myDatabase->prepare($query);
            $stm->execute([
                'id' => $_POST['id']
            ]);       
            
            $status = true;
            echo $status;
        }
    } 
}