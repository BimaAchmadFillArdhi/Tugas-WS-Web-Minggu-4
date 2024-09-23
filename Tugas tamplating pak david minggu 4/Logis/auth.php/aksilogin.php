<?php
    include ("koneksi.php");

    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if (empty($username) || empty($password)) {
            echo "<script>alert('Please fill in all fields.');</script>";
            return;        
        }

        $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($koneksi, $sql);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['username']=$row['username'];
            echo "<script>alert('Login Successful');</script>";
            header("Location: main.php");
        } else {
            echo "<script>alert('Username not found. Please register first.');</script>";
        }
    }

?>
