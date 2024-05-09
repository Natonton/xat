<?php
    session_start();
    include 'conn.php';
    include_once 'includes/functions.php';
    if(isset($_POST['admin-login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $token = filter_input(INPUT_POST, 'login-token', FILTER_SANITIZE_STRING);

        if (!$token || $token !== $_SESSION['token']) {
            // return 405 http status code
            header($_SERVER['SERVER_PROTOCOL'] . ' 405 Method Not Allowed');
            exit;
        } else {
            $query = login($username, $password);
            if($query > 0){
                $_SESSION['email'] = $username;
                ?>
                    <script>
                        alert("Success");
                        window.location.href = "dashboard.php";
                    </script>
                <?php
            }
            else{
                ?>
                    <script>
                        alert("Failed");
                        window.location.href = "index.php";
                    </script>
                <?php
            }
        }

    }
?>