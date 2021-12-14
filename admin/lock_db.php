<?php 

include('condb.php');

$Owner_id = $_GET['Owner_id'];


$sql="UPDATE owner SET 
Owner_status=0
WHERE Owner_id=$Owner_id 
";
$result=mysqli_query($conn,$sql);

echo '
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
	';		
	if($result){
		echo '
		<script>
		   setTimeout(function() {
			swal({
				title: "สำเร็จ",
				text: "LOCK สำเร็จ",
				type: "success"
			}, function() {
				window.location = "confirm.php";
			});
		}, 100);
	</script>
	';
}
else{
echo "<script type='text/javascript'>";
echo "alert('ไม่สำเร็จ');";
echo "window.location = 'confirm.php' ";
echo "</script>";
}

?>