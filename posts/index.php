<?php 
    include("components/header.php");

    
$query = "SELECT * FROM posts";

$posts = $myDatabase->prepare($query);
$posts->execute();
?>  

<section id="post">
    <div class="container">
        <div class="post-list">
            <?php while($row = $posts->fetch()) {
                ?>
            <div class="post-item">
                <div class="content">
                    <h1><?= $row['title']; ?></h1>
                    <p><?= $row['short_text']; ?></p>
                    <a href="/posts/article.php?id=<?= $row['id']?>">Read More</a>
                </div>
            </div>
            <?php } ?>
            
        </div>
    </div>
</section>

<?php include("components/footer.php") ?>