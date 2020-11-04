<?php 
    include("components/header.php");
    include("action.php");
?>  

<?php    


    $query = "SELECT * FROM books";
    $students = $myDatabase->prepare($query);
    $students->execute();


?>

<section id="list-section">
    <div class="container">
        <div class="content">
            <table id="book-list">
                <thead>
                    <tr>
                        <td>Id</td>
                        <td>Book's Name</td>
                        <td>Author</td>
                        <td>Release Date</td> 
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