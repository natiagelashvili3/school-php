<?php 
    include("components/header.php");

    if(!isset($_SESSION['user_id'])){
        header('Location: index.php');
    }
    
    $query = "SELECT * FROM categories";
    $categories = $myDatabase->prepare($query);
    $categories->execute();
 
?> 


<section id="form-section">
    <div class="container">
        <div class="content">
            <h1>Add Post</h1>
            <form id="books" action="actions.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" value="add-post" name="action">
                <input type="hidden" name="user_id" value="<?= $_SESSION['user_id'] ?>">
                <div>
                    <label>Title</label>
                    <input type="text" name="title">
                </div>
                <div>
                    <label>Short Text</label>
                    <input type="text" name="short_text">
                </div>
                <div>
                    <label>Category</label>
                    <select name="category_id" id="">
                        <?php while($row = $categories->fetch()) {?>
                            <option value="<?= $row['id'] ?>"><?= $row['name'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div>
                    <label>Text</label>
                    <textarea name="text"></textarea>
                </div>
                <button>Add</button>
            </form>
        </div>
    </div>

</section>
<?php include("components/footer.php") ?>