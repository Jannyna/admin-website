<?php 
//  echo "<pre>";
//  print_r($_POST);
// echo "</pre>";
// exit;

include('condb.php');

$Owner_name = $_POST['Owner_name'];
$Owner_lastname = $_POST['Owner_lastname'];
$Owner_mobile = $_POST['Owner_mobile'];
$Owner_username = $_POST['Owner_username'];
$Owner_password = $_POST['Owner_password'];
// $Owner_id = $_POST['Owner_id'];
// $Owner_status = $_POST['Owner_status'];


$sql_addregis ="INSERT INTO owner (Owner_name,Owner_lastname,Owner_mobile,Owner_username,Owner_password) VALUES ('$Owner_name','$Owner_lastname','$Owner_mobile','$Owner_username','$Owner_password')";

$result_addregis = mysqli_query($conn,$sql_addregis)or die ("Error in query: $sql_addregis " . mysqli_error($conn));

// $sql_regis="UPDATE owner SET 

// Owner_status=0
// Owner_id = '$Owner_id',
// WHERE Owner_id=$Owner_id 
// ";
// $result_regis=mysqli_query($conn,$sql_regis);

echo '
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
	';		
	if($result_addregis){
		echo '
		<script>
		   setTimeout(function() {
			swal({
				title: "สำเร็จ",
				text: "สมัครสมาชิกสำเร็จ",
				type: "success"
			}, function() {
				window.location = "loginowner.php";
			});
		}, 100);
	</script>
	';
}
// if($result_regis){
//     echo '
//     <script>
//        setTimeout(function() {
//         swal({
//             title: "สำเร็จ",
//             text: "สมัครสมาชิกสำเร็จ",
//             type: "success"
//         }, function() {
//             window.location = "loginowner.php";
//         });
//     }, 100);
// </script>
// ';
// }
    
// else{
// echo "<script type='text/javascript'>";
// echo "alert('ไม่สำเร็จ');";
// echo "window.location = 'loginowner.php' ";
// echo "</script>";
// }

?>
