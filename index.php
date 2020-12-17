<?php 
    include("components/header.php");

    $perPage = 4;
    $currentPage = isset($_GET['page']) ? $_GET['page'] : 1 ;

    $count_query = $myDatabase->prepare("SELECT COUNT(*) as cnt FROM posts");
    $count_query->execute();
    $total_cnt = $count_query->fetchColumn(); //18

    $paging = ceil($total_cnt / $perPage);

    $offset = $perPage * ($currentPage - 1);

    $query = "SELECT p.*, c.name as category_name
                FROM posts p
          INNER JOIN categories c ON p.category_id = c.id
               LIMIT ".$perPage." OFFSET ".$offset;

    $posts = $myDatabase->prepare($query);
    $posts->execute();

?>  

<section id="posts">
    <div class="container">
        <div class="post-list">
            <?php while($row = $posts->fetch()) {?>
                <div class="post-item">
                    <div class="content">
                        <h2><?= $row['id'] .' '. $row['title'] ?></h2>
                        <span style="margin-bottom: 10px;display:inline-block"><?= $row['category_name'] ?></span>
                        <p><?= $row['short_text'] ?></p>
                        <a href="article.php?id=<?= $row['id'] ?>">Read More</a>
                    </div>
                </div>
            <?php } ?>

            <div class="page-container">
                <div class="pagination">
                    <?php for ($i=1; $i <= $paging; $i++) { 
                        ?>
                            <a href="<?= '?page='.$i ?>" class="<?= $currentPage == $i ? 'active' : ''?>"><?= $i ?></a>
                        <?php
                    }?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include("components/footer.php") ?>