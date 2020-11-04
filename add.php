<?php include("components/header.php") ?> 

<section id="form-section">
    <div class="container">
        <div class="content">
            <h1>Insert Book</h1>
            <form id="books" action="actions.php" method="POST">
                <input type="hidden" value="add-book" name="action">
                <div>
                    <label>Book's Name</label>
                    <input type="text" name="book-name" placeholder = "Enter Book's Name" value="<?= $bookname ?>" >
                </div>
                <div>
                    <label>Author</label>
                    <input type="text" name="author" placeholder = "Enter Book's Author" value="<?= $author ?>">
                </div>
                <div>
                    <label>Release date</label>
                    <input type="number" name="release-date" placeholder = "Enter Book's release date" value="<?= $releasedate ?>">
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