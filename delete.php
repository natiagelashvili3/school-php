<?php include("components/database.php") ?>  

<?php

    $status = false;

    if(isset($_POST['action']) && $_POST['action'] == 'delete-book') {
        if ($_POST['id']) {
            $query = "DELETE FROM books WHERE id = :id";
            $stm = $myDatabase->prepare($query);
            $stm->execute([
                'id' => $_POST['id']
            ]);       
            
            $status = true;
        }
    }   

    echo $status;

?>