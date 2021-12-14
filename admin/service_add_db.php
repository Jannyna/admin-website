<?php 
//  echo "<pre>";
//  print_r($_POST);
// echo "</pre>";
// exit;

include('condb.php');

// $service_id = $_POST['service_id'];
$service_name = $_POST['service_name'];
$service_detail = $_POST['service_detail'];
$service_pic = $_POST['service_pic'];
$service_category_id = $_POST['service_category_id'];

$sql_add ="INSERT INTO service (service_name,service_detail,service_pic,service_category_id) VALUES ('$service_name','$service_detail','$service_pic','$service_category_id')";

$result_add = mysqli_query($conn,$sql_add)or die ("Error in query: $sql_add " . mysqli_error($conn));


echo '
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
	';		
	if($result_add){
		echo '
		<script>
		   setTimeout(function() {
			swal({
				title: "สำเร็จ",
				text: "เพิ่มข้อมูลสำเร็จ",
				type: "success"
			}, function() {
				window.location = "repair.php";
			});
		}, 100);
	</script>
	';
}
else{
echo "<script type='text/javascript'>";
echo "alert('ไม่สำเร็จ');";
echo "window.location = 'repair.php' ";
echo "</script>";
}

?>
