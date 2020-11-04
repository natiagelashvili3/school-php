<?php include("components/header.php") ?>  

<?php

if($_POST['action'] == 'edit-book') {
   
    $update_query = "UPDATE books 
                        SET book_name = :book_name, author = :author, release_date = :release_date
                    WHERE id = :id";
    $stm = $myDatabase->prepare($update_query);
    $stm->execute([
        'id' => $_POST['id'],
        'book_name' => $_POST['book-name'],
        'author' => $_POST['author'],
        'release_date' => $_POST['release-date']
    ]);
                    
} 

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
            <form id="books" action="" method="POST">
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
                <?php if(!$bookname || !$author || !$releasedate): ?>
                    <div class="error">
                        Please fill in all fields
                    </div>
                <?php endif; ?>
                <button>Submit</button>
            </form>
        </div>
    </div>

</section>


<?php include("components/footer.php") ?>  