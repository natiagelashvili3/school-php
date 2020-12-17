<?php 
    include("components/header.php");
    
    if(isset($_GET) && isset($_GET['id']) && $_GET['id']){
        $query = "SELECT * FROM posts WHERE id = ".$_GET['id'];
        $book = $myDatabase->prepare($query);
        $book->execute();
        $book_data = $book->fetch();

        $comments_query = "SELECT * FROM comments WHERE post_id = ".$_GET['id'];
        $comments = $myDatabase->prepare($comments_query);
        $comments->execute();
    }

?>  

<section id="articles">
    <div class="container">
        <div class="post-article">
            <h1><?= $book_data['title'] ?></h1>
            <p> <?= $book_data['text'] ?></p>
            
        </div>
        <div class="comment-container">
            <h1>Comments</h1>
            <ul class="comment-list">
                <?php while($row = $comments->fetch()) {?>
                <li>
                    <?php $date = $row['date']; ?>
                    <span><?= date("d M Y", strtotime($date))?></span>
                    <p><?= $row['text']?></p>
                </li>
                <?php }?>
            </ul>
            <h4>Leave Comment</h4>
            <form action="actions.php" method="post">
                <input type="hidden" name="action" value="add-comment">
                <input type="hidden" name="post_id" value="<?= $book_data['id']?>">
                <div><textarea name="comment"></textarea></div> 
                <button>Add Comment</button>
            </form>
            
        </div>
    </div>
</section>

<?php include("components/footer.php") ?>