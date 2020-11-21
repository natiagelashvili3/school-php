<?php 
    include("components/header.php");
?>  

<?php

    
    $orderBy = '';

    if(!empty($_GET) && isset($_GET['ord'])) {
        $orderValue = $_GET['ord'];
        $orderParameters = explode('-', $orderValue);
        
        if(count($orderParameters) == 2) {
            $fieldName = $orderParameters[0]; // id, book_name
            $fieldValue = $orderParameters[1]; // asc, desc

            if ( in_array($fieldName, ['id', 'book_name']) && in_array($fieldValue, ['asc', 'desc']) ) {
                $orderBy = " ORDER BY " . $fieldName . " " . $fieldValue;
            }            

        }

    }
    
    $query = "SELECT * FROM books".$orderBy;
    $students = $myDatabase->prepare($query);
    $students->execute();


?>

<section id="list-section">
    <div class="container">
        <div class="content">

            <div class="sort">
                <a href="?ord=id-asc">Order by ID ASC</a>
                <a href="?ord=id-desc">Order by ID DESC</a>
                <a href="?ord=book_name-asc">Order by Name ASC</a>
                <a href="?ord=book_name-desc">Order by Name DESC</a>
            </div>

            <table id="book-list">
                <thead>
                    <tr>
                        <td>Id</td>
                        <td>Book's Name</td>
                        <td>Author</td>
                        <td>Release Date</td>
                        <td>Source</td> 
                        <td>Actions</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($row = $students->fetch()) {
                        ?>
                        <tr>
                            <td><?= $row["id"]?></td>
                            <td><?= $row["book_name"]?></td>
                            <td><?= $row["author"]?></td>
                            <td><?= $row["release_date"]?></td>
                            <td>
                                <?php 
                                    if ($row["source"]) {
                                        if (file_exists('uploads/'.$row['source'])) {
                                            ?>
                                                <a target="_blank" href="uploads/<?= $row["source"] ?>"><?= $row["source"] ?></a>
                                            <?php
                                        }
                                    }
                                 ?>
                            </td>
                            <td>
                                <a href="edit.php?id=<?= $row["id"] ?>" class="action-btn btn-edit">
                                    Edit
                                </a>
                                <button onclick="confirmDelete(this, <?= $row['id'] ?>)">Delete</button>
                                <!-- <form action="" method="post" onsubmit="return confirmDelete()">
                                    <input type="hidden" value="delete-book" name="action">
                                    <input type="hidden" value="<?= $row["id"] ?>" name="id">
                                    <button type="submit">Delete</button>
                                </form> -->
                            </td>
                        </tr>

                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</section>

<?php include("components/footer.php") ?>