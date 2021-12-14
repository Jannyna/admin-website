<?php 

// echo "<pre>";
// 	print_r($_POST);
// 	echo "</pre>";
// 	exit;

session_start();
        if(isset($_POST['Owner_username'])){
                  include("condb.php");

                  $Owner_username = $_POST['Owner_username'];
                  $Owner_password = $_POST['Owner_password'];

                  $sql="SELECT * FROM owner
                  WHERE  Owner_username='".$Owner_username."' 
                  AND  Owner_password='".$Owner_password."' ";
                  $result = mysqli_query($conn,$sql);
                

                  echo '
                  <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
                  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
                  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
                  ';

                  if(mysqli_num_rows($result)==1){
                      $row = mysqli_fetch_array($result);
                      $_SESSION["Owner_id"] = $row["Owner_id"];
                      $_SESSION["Owner_name"] = $row["Owner_name"];
                      $_SESSION["Owner_lastname"] = $row["Owner_lastname"];
                      $_SESSION["Owner_mobile"] = $row["Owner_mobile"];
                      $_SESSION['Owner_status'] = $row["Owner_status"];
                      if($_SESSION["Owner_status"] =="1"){ 
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
                            window.location = "owner/index.php";
                        });
                        }, 50);
                    </script>
                    '; }
                    if($_SESSION["Owner_status"] =="0"){ 
                        echo '
                        <script>
                        setTimeout(function() {
                        swal({
                                title: "รออนุมัติ",
                                text: "รอแอดมินอนุมัติ",
                                type: "warning",
                                // imageUrl: "https://vistapointe.net/images/hostel-3.jpg",
                                // imageWidth: 2000,
                                // imageHeight: 400,
                            }, function() {
                            window.location = "loginowner.php";
                        });
                        }, 50);
                    </script>
                    '; 
                    }
                    if($_SESSION["Owner_status"] ==""){ 
                        echo '
                        <script>
                        setTimeout(function() {
                        swal({
                                title: "รออนุมัติ",
                                text: "รอแอดมินอนุมัติ",
                                type: "warning",
                                // imageUrl: "https://vistapointe.net/images/hostel-3.jpg",
                                // imageWidth: 2000,
                                // imageHeight: 400,
                            }, function() {
                            window.location = "loginowner.php";
                        });
                        }, 50);
                    </script>
                    '; }  
                  }else{
                    echo '
                    <script>
                        setTimeout(function() {
                        swal({
                                title: "Login error!!!! !!",
                                text: "ชื่อผู้ใช้ หรือ รหัสผ่าน ไม่ถูกต้อง ",
                                type: "warning"
                            }, function() {
                            window.location = "loginowner.php";
                        });
                        }, 100);
                    </script>
                    ';
 
                  }
        }
?>