<?php

// echo "<pre>";
//     print_r($_POST);
//     echo "</pre>";
//     exit;

session_start();
        if(isset($_POST['admin_user'])){
                  include("condb.php");

                  $admin_user = $_POST['admin_user'];
                  $admin_pass = $_POST['admin_pass'];
                //   $admin_pass = "e10adc3949ba59abbe56e057f20f883e";

                  $sql="SELECT * FROM admin
                  WHERE  admin_user='".$admin_user."' AND admin_pass='".$admin_pass."' ";
                  $result = mysqli_query($conn,$sql);
                  

                  echo '
                  <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
                  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
                  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
                  ';
                //   echo md5($admin_pass);

                  if(mysqli_num_rows($result) == 1){
                      $row = mysqli_fetch_array($result);
                      $_SESSION["admin_id"] = $row["admin_id"];
                      $_SESSION["admin_user"] = $row["admin_user"];
                      $_SESSION['admin_status'] = $row["admin_status"];
                      if($_SESSION["admin_status"] =="admin"){
                        echo '
                        <script>
                        setTimeout(function() {
                        swal({
                                title: "Login Success",
                                text: "สำเร็จ",
                                type: "success",
                                // imageUrl: "https://vistapointe.net/images/hostel-3.jpg",
                                // imageWidth: 2000,
                                // imageHeight: 400,
                            }, function() {
                            window.location = "admin/index.php";
                        });
                        }, 50);
                    </script>
                    ';
            
                  }else{
                    echo '
                    <script>
                        setTimeout(function() {
                        swal({
                                title: "Login error!!!! !!",
                                text: "อีเมล หรือ รหัสผ่าน ไม่ถูกต้อง ",
                                type: "warning"
                            }, function() {
                            window.location = "login.php";
                        });
                        }, 100);
                    </script>
                    ';
 
                  }
 
        }
    }
?>