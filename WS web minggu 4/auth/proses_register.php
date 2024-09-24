<?php
    include ("koneksi.php");

    if (isset($_POST['registrasi'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirm_password = $_POST['konfirm_password'];

        if (empty($username) || empty($password) || empty($confirm_password)) {
            echo "<script>alert('Please fill in all fields.');</script>";
            return;        
        }

        if ($password !== $confirm_password) {
            echo "<script>alert('Password Berbeda.');</script>";
            return;
        }

        $sql = "INSERT INTO user (username, password) VALUES ('$username', '$password')";
        $query = mysqli_query($koneksi, $sql);

        if ($query) {
            // echo "<<script>alert('Registrasi berhasil!');</script>>";
            header("Location: hasil_login.php");
        } else {
            echo "Error: " . mysqli_error($koneksi);
        }
    }

?>
