<?php
    include('../config/connection.php');
    session_start();
    $error = '';

    if(isset($_POST["login"])){
        if(!empty($_POST["username"]) || !empty($_POST["password"])) {
            # Get username and password from user
            $username = $_POST["username"];
            $password = $_POST["password"];

            # Write MySql Query
            $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
            # Get the query result
            $result = mysqli_query($con, $query);
            $row = mysqli_fetch_assoc($result);

            # If username exist in database, save to the session and redirect to profile.php
            if(mysqli_num_rows($result) == 1) {
                if($row["type"] == 'admin') {
                    $_SESSION["username"] = $username;
                    $_SESSION["type"] = $row["type"];
                    $_SESSION["id"] = $row["id_user"];
                    header("Location: ../admin-paket.php");
                } else {
                    $_SESSION["username"] = $username;
                    $_SESSION["type"] = $row["type"];
                    $_SESSION["id"] = $row["id_user"];
                    header("Location: ../index.php");
                }
            } else {
                $error = urlencode("Username atau password salah!");
                header("Location: ../login.php?pesan=$error");

                // echo "<script>alert('Anda Gagal Login, Username atau password salah'); </script>";
                // echo "<script>Location=login.php';</script>";
                // header("Location:login.php");
            }

            # Close connection to database
            mysqli_close($con);

        } else {
            $error = urlencode("Username atau password kosong!");
            header("Location: ../login.php?pesan=$error");

            // echo "<script>alert('Username atau password kosong!'); </script>";
            // echo "<script>Location=login.php';</script>";
            // header("Location:login.php");
            
        }
    }
?>