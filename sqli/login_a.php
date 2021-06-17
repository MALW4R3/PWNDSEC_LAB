<?php 
session_start();
        if(isset($_REQUEST['admin_user'])){
        //connection
                  include("condb.php");
        //รับค่า user & password
                  $admin_user = $_POST['admin_user'];
                  $admin_pass = $_POST['admin_pass'];
        //query 
                  $sql="SELECT * FROM tbl_admin Where admin_user='".$admin_user."' and admin_pass='".$admin_pass."' ";

                  $result = mysqli_query($conn,$sql);

                
                  if(mysqli_num_rows($result)==1){

                      $row = mysqli_fetch_array($result);

                      $_SESSION["UserID"] = $row["admin_id"];
                      $_SESSION["User"] = $row["admin_name"];
                      // $_SESSION["Userlevel"] = $row["Userlevel"];

                      if($_SESSION["UserID"]!=''){ //ถ้าเป็น admin ให้กระโดดไปหน้า admin_page.php


                        Header("Location: backend/index.php");

                      }

                      // if ($_SESSION["Userlevel"]=="M"){  //ถ้าเป็น member ให้กระโดดไปหน้า user_page.php

                      //   Header("Location: user_page.php");

                      // }

                  }else{
                    echo "<script>";
                        echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";

                  }

        }else{


             Header("Location: form.php"); //user & password incorrect back to login again

        }
?>