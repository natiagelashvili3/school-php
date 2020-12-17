<?php 
    include("components/header.php");

    $query = "SELECT * FROM categories";
    $posts = $myDatabase->prepare($query);
    $posts->execute();

?>  

<section id="posts">
    <div class="container">
        <div class="">
            <table>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                </tr>
                <?php while($row = $posts->fetch()) {?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['name'] ?></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</section>

<?php include("components/footer.php") ?>