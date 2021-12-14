<?php 

include('condb.php');

$member_id = $_GET['member_id'];


$sql="UPDATE member SET 
member_status=1
WHERE member_id=$member_id
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
				text: "อนุมัติสำเร็จ",
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