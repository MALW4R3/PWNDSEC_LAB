<?php 
    session_start();
    include('server.php');
    
    
    $mes1="<script>
    Swal.fire('Oops...', 'กรุณาใส่ email', 'error')
    </script>";

    $mes2="<script>
    Swal.fire('Oops...', 'กรุณาใส่ username', 'error')
    </script>";

    $mes3="<script>
    Swal.fire('Oops...', 'กรุณาใส่ password', 'error')
    </script>";

    $mes4="<script>
    Swal.fire('Oops...', 'กรุณาใส่ password ให้ตรงกัน', 'error')
    </script>";

    $messuc="<font face='kanit'><script>Swal.fire(
        'SUCCESS!',
        'สมัครสมาชิกสำเร็จ!',
        'success'
      )</script>";
      
    $errors = array();

    if (isset($_POST['reg_user'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
        $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);

        if (empty($username)) {
            array_push($errors, "$mes2");
            $_SESSION['error'] = "$mes2";
        }
        if (empty($email)) {
            array_push($errors, "$mes1");
            $_SESSION['error'] = "$mes1";
        }
        if (empty($password_1)) {
            array_push($errors, "$mes3");
            $_SESSION['error'] = "$mes3";
        }
        if ($password_1 != $password_2) {
            array_push($errors, "$mes4");
            $_SESSION['error'] = "$mes4";
        }

        $user_check_query = "SELECT * FROM users WHERE username = '$username' OR email = '$email' LIMIT 1";
        $query = mysqli_query($conn, $user_check_query);
        $result = mysqli_fetch_assoc($query);

        if ($result) { // if user exists
            if ($result['username'] === $username) {
                array_push($errors, "Username already exists");
            }
            if ($result['email'] === $email) {
                array_push($errors, "Email already exists");
            }
        }

        if (count($errors) == 0) {
            $password = md5($password_1);

            $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
            mysqli_query($conn, $sql);

            $_SESSION['username'] = $username;
            $_SESSION['success'] = "$messuc";
            header('location: login.php');
        } else {
            header("location: register.php");
        }
    }

?>
