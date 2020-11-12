<?php include("components/header.php") ?>  

<?php

if(!isset($_GET) || !$_GET['id']) {
    echo "Error!";
    die();
}

$query = "SELECT * FROM books WHERE id = " . $_GET['id'];
$stm = $myDatabase->prepare($query);
$stm->execute();
$book = $stm->fetch();



?>

<section id="form-section">
    <div class="container">
        <div class="content">
            <h1>Insert Book</h1>
            <form id="books" action="actions.php" method="POST">
                <input type="hidden" value="edit-book" name="action">
                <input type="hidden" value="<?= $_GET['id'] ?>" name="id">
                <div>
                    <label>Book's Name</label>
                    <input type="text" name="book-name" placeholder = "Enter Book's Name" value="<?= $book['book_name'] ?>" >
                </div>
                <div>
                    <label>Author</label>
                    <input type="text" name="author" placeholder = "Enter Book's Author" value="<?= $book['author'] ?>">
                </div>
                <div>
                    <label>Release date</label>
                    <input type="number" name="release-date" placeholder = "Enter Book's release date" value="<?= $book['release_date'] ?>">
                </div>
                <button>Submit</button>
            </form>
        </div>
    </div>

</section>


<?php include("components/footer.php") ?>  