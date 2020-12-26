<?php 
    include("components/header.php");  

    if(isset($_SESSION) && isset($_SESSION['user_id'])){
        header('Location: index.php');
    }

    if(isset($_POST) && isset($_POST['action']) && $_POST['action'] == 'login') {
        $username = isset($_POST['username']) ? $_POST['username'] : null; 
        $password = isset($_POST['password']) ? $_POST['password'] : null;
        $errors = [];

        if(!$username) {
            array_push($errors, "Invalid Username");
        } 

        if(!$password) {
            array_push($errors, "Invalid Password");
        } 

        if(count($errors) == 0) {
            $query = "SELECT * 
                        FROM users 
                       WHERE username = '".$username."' AND password = '".md5($password)."'";

            $user = $myDatabase->prepare($query);
            $user->execute();
            $user = $user->fetch();

            if(!$user) {
                array_push($errors, "User doesnt exists");
            } else {
                $_SESSION['user_id'] = $user['id'];
                header('Location: index.php');
            }
        }

    }
?> 

<section id="form-section">
    <div class="container">
        <div class="content">
            <h1>Login</h1>
            <form id="login" action="" method="POST" enctype="multipart/form-data">
                <input type="hidden" value="login" name="action">
                <div>
                    <label>Username</label>
                    <input type="text" name="username">
                </div>
                <div>
                    <label>Password</label>
                    <input type="password" name="password">
                </div>
                <div class="error">
                    <?= implode(', ', $errors) ?>
                </div>
                <button>Login</button>
                <div class="register-href">
                    <a href="registration.php">Register Now</a>
                </div>
            </form>
        </div>
    </div>

</section>
<?php include("components/footer.php") ?>