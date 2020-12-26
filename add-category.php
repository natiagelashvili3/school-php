<?php include("components/header.php");
    if(!isset($_SESSION['user_id'])){
        header('Location: index.php');
    }
?> 


<section id="form-section">
    <div class="container">
        <div class="content">
            <h1>Add Category</h1>
            <form id="books" action="actions.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" value="add-category" name="action">
                <div>
                    <label>Name</label>
                    <input type="text" name="name">
                </div>
                <button>Add</button>
            </form>
        </div>
    </div>

</section>
<?php include("components/footer.php") ?>