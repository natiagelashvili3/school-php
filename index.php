<?php 
    include("components/header.php");

    $perPage = 4;
    $currentPage = isset($_GET['page']) ? $_GET['page'] : 1 ;

    $count_query = $myDatabase->prepare("SELECT COUNT(*) as cnt FROM posts");
    $count_query->execute();
    $total_cnt = $count_query->fetchColumn(); //18

    $paging = ceil($total_cnt / $perPage);

    $offset = $perPage * ($currentPage - 1);

    $query = "SELECT p.*, c.name as category_name, u.username, u.id as user_id
                FROM posts p
          INNER JOIN categories c ON p.category_id = c.id
          INNER JOIN users u ON p.user_id = u.id 
            ORDER BY p.id DESC
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
                        <h2>
                            <?= $row['title'] ?> 
                            <?php if(isset($_SESSION) && isset($_SESSION['user_id']) && $_SESSION['user_id'] == $row['user_id']): ?>
                                <a href="">Edit</a>
                            <?php endif; ?>
                        </h2>
                        <span class="post-cat"><?= $row['category_name'] ?></span>
                        <span class="post-cat"><?= 'Author: '.$row['username'] ?></span>
                        <p><?= $row['short_text'] ?></p>
                        <a class="link" href="article.php?id=<?= $row['id'] ?>">Read More</a>
                    </div>
                </div>
            <?php } ?>

            <?php
                $start = max(1, $currentPage-2);
                $end = min($paging, $currentPage+2);         
            ?>

            <div class="page-container">
                <div class="pagination">
                    <?php for ($i=$start; $i <= $end; $i++) { 
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