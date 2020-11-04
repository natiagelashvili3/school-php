<?php

include("components/database.php");

$status = false;

if(isset($_POST) && isset($_POST['action'])) {

    $bookname = isset($_POST["book-name"]) ? $_POST["book-name"] : null;
    $author = isset($_POST["author"]) ? $_POST["author"] : null;
    $releasedate = isset($_POST["release-date"]) ? $_POST["release-date"] : null;

    if($_POST['action'] == 'add-book') {
        // Adding Books
        if ($bookname && $author && $releasedate) {
            // Insert Query
            $insert_query = "INSERT INTO books (`book_name`, `author`, `release_date`) VALUES (?, ?, ?)";
            $myDatabase->prepare($insert_query)->execute([$bookname, $author, $releasedate]);
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