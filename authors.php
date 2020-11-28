<?php 
    include("components/header.php");
?>  

<?php
     
    $query = "SELECT * FROM authors";

    $authors = $myDatabase->prepare($query);
    $authors->execute();

?>

<section id="list-section">
    <div class="container">
        <div class="content">

            <div class="filters">
                <form action="actions.php" method="post">
                    <input type="hidden" value="add-author" name="action">
                    <div class="form-group">
                        <input type="text" placeholder="Author Name" name="name">
                    </div>
                    <button type="submit">Add</button>
                </form>
            </div>

            <table id="book-list">
                <thead>
                    <tr>
                        <td>Id</td>
                        <td>Name</td>
                        <td>Actions</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($row = $authors->fetch()) {
                        ?>
                        <tr>
                            <td><?= $row["id"]?></td>
                            <td><?= $row["name"]?></td>
                            <td>
                                <!-- <a href="edit.php?id=<?= $row["id"] ?>" class="action-btn btn-edit">
                                    Edit
                                </a> -->
                                <!-- <button onclick="confirmDelete(this, <?= $row['id'] ?>)">Delete</button> -->
                            </td>
                        </tr>

                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</section>

<?php include("components/footer.php") ?>