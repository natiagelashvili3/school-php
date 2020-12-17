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

<section id="article">
    <div class="container">
        <div class="post-artcile">
            <h1><?= $book_data['title'] ?></h1>
            <span style="margin-bottom: 10px;display:inline-block">Category title</span>
            <p>
                <?= $book_data['text'] ?>    
            </p>
        </div>

        <div class="comment-container">

            <h2>Comments</h2>

            <ul class="comments-list">
                <?php while($row = $comments->fetch()){?>
                    <li>
                        <?php $date = $row['date']; ?> 
                        <span><?= date("d M Y H:i", strtotime($date)) ?></span>
                        <p>
                            <?= $row['text'] ?>
                        </p>
                    </li>
                <?php } ?>
            </ul>

            <div>Leave Comment</div>
            <form action="actions.php" method="post">
                <input type="hidden" name="action" value="add-comment">
                <input type="hidden" name="post_id" value="<?= $book_data['id'] ?>">
                <textarea name="comment"></textarea>
                <button> Add Comment </button>
            </form>
        </div>
    </div>
</section>

<?php include("components/footer.php") ?>