<?php include("components/header.php") ?> 

<?php 

$query = "SELECT * FROM authors";

$authors = $myDatabase->prepare($query);
$authors->execute();

?>

<section id="form-section">
    <div class="container">
        <div class="content">
            <h1>Insert Book</h1>
            <form id="books" action="actions.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" value="add-book" name="action">
                <div>
                    <label>Book's Name</label>
                    <input type="text" name="book-name" placeholder="Enter Book's Name">
                </div>
                <div>
                    <label>Author</label>
                    <select name="author_id" id="">
                        <?php
                            while($row = $authors->fetch()) {
                            ?>
                            <option value="<?= $row['id'] ?>"><?= $row['name'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div>
                    <label>Release date</label>
                    <input type="number" name="release-date" placeholder="Enter Book's release date">
                </div>
                <div>
                    <label>Book Source</label>
                    <input type="file" name="source">
                </div>
                <button>Submit</button>
            </form>
        </div>
    </div>

</section>
<?php include("components/footer.php") ?>