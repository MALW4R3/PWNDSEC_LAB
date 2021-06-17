<?php 

    session_start();
    include('server.php');
    include('head.php');

    $meserror="<script>
    Swal.fire('Oops...', 'username หรือ password ไม่ถูกต้อง', 'error')
    </script>";

    $messuc="<script>Swal.fire(
        'SUCCESS!',
        'เข้าสู่ระบบสำเร็จ!',
        'success'
      )</script>";

    $errors = array();

    if (isset($_POST['login_user'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        if (empty($username)) {
            array_push($errors, "Username is required");
        }

        if (empty($password)) {
            array_push($errors, "Password is required");
        }

        if (count($errors) == 0) {
            $password = md5($password);
            $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password' ";
            $result = mysqli_query($conn, $query);
            $count=mysqli_num_rows($result);
            if($count>0){
		$row=mysqli_fetch_assoc($result);
		$_SESSION['UID']=$row['id'];
		$time=time()+100;
        $res=mysqli_query($conn,"update users set last_login=$time where id=".$_SESSION['UID']);
            }

            if (mysqli_num_rows($result) == 1) {
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "$messuc";
                header("location: index.php");
            } else {
                array_push($errors, "$meserror");
                $_SESSION['error'] = "$meserror";
                header("location: login.php");
            }
        } else {
            array_push($errors, "$meserror");
            $_SESSION['error'] = "$meserror";
            header("location: login.php");
        }
    }

?>
</font>
</html>