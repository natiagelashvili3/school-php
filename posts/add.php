<?php include("components/header.php") ?> 

<?php 

$query = "SELECT * FROM posts";

$post = $myDatabase->prepare($query);
$post->execute();

?>

<section id="form-section">
    <div class="container">
        <div class="content">
            <h1>Add Post</h1>
            <form id="books" action="actions.php" method="POST">
                <input type="hidden" value="add-post" name="action">
                <div>
                    <label>Title</label>
                    <input type="text" name="title">
                </div>
                <div>
                    <label>Short text</label>
                    <input type="text" name="short_text">
                </div>
                <div class="add-text">
                    <label>Text</label>
                    <input type="textarea" name="text">
                </div>
                <button>Add</button>
            </form>
        </div>
    </div>

</section>
<?php include("components/footer.php") ?>