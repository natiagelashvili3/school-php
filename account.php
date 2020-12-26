<?php 
    include("components/header.php");

    $query = "SELECT * FROM users WHERE id = ".$_SESSION['user_id'];
    $user = $myDatabase->prepare($query);
    $user->execute();
    
    $user = $user->fetch();
?>  

<section id="posts">
    <div class="container">
        <div class="">
            <table>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                </tr>
                <tr>
                    <th><?= $user['id'] ?></th>
                    <th><?= $user['username'] ?></th>
                </tr>
            </table>
        </div>
    </div>
</section>

<?php include("components/footer.php") ?>