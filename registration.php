<?php 
    include("components/header.php");

    if(isset($_SESSION) && isset($_SESSION['user_id'])){
        header('Location: index.php');
    }

    if(isset($_POST) && isset($_POST['action']) && $_POST['action'] == 'registration') {
        $username = isset($_POST['username']) ? $_POST['username'] : null; 
        $password = isset($_POST['password']) ? $_POST['password'] : null;
        $errors = [];
        $success = '';

        if(!$username) {
            array_push($errors, "Invalid Username");
        } 

        if(!$password) {
            array_push($errors, "Invalid Password");
        } 

        if(count($errors) == 0) {
            // 1. checking SELECT user by username
            $query = "SELECT * FROM users WHERE username = '".$username."'";
            $user = $myDatabase->prepare($query);
            $user->execute();

            $user = $user->fetch();

            if($user) {
                array_push($errors, "Username already exists");
            } else {
                // 1.1 INSERT into users
                $query = "INSERT INTO users 
                                  SET username = '".$username."', password = '".md5($password)."' ";

                $user = $myDatabase->prepare($query);
                $user->execute();
                $success = "Account was created";
            }

        }

    }

?>  

<section id="form-section">
    <div class="container">
        <div class="content">
            <h1>Registration</h1>
            <form id="login" action="" method="POST">
                <input type="hidden" value="registration" name="action">
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
                <?php if($success): ?>
                    <div class="success">
                        <?= $success ?>
                    </div>
                <?php endif;?>
                <button>Register</button>
                <div class="register-href">
                    <a href="login.php">Login Now</a>
                </div>
            </form>
        </div>
    </div>

</section>
<?php include("components/footer.php") ?>