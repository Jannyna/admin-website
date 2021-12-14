<?php
error_reporting( error_reporting() & ~E_NOTICE );
include('condb.php');  

$service_id = $_SESSION['service_id'];

$query = "SELECT s.*,sc.*  FROM service_category as s 
INNER JOIN service as sc ON s.service_id= sc.service_id
WHERE sc.service_id='$service_id'
ORDER BY s.service_category_id DESC" or die("Error:" . mysqli_error($conn));
$results = mysqli_query($conn, $query);

$i=1;

?>

<table class="table table-bordered table-striped datatable  border" align="center">
    <thead>
        <tr class="info">
            <th scope="col">#</th>
            <th class="text-nowrap"scope="col">รหัสบริการ</th>
            <th class="text-nowrap"scope="col">รหัสประเภทบริการ</th>
            <th scope="col">ชื่อการบริการ</th>
            <th scope="col">รายละเอียด</th>
            <th scope="col">รูปภาพ</th>
            <th scope="col">จัดการ</th>
        </tr>
    </thead>
    <br>
    <!-- <?php while($row_p = mysqli_fetch_array($results)) { ?>
    <tr>
        <th scope="row"><?php echo $i++ ?></th>
        <td><?php echo $row_p['service_name']; ?></td>
        <td><?php echo $row_p['service_category_name']; ?></td>
        <td style="font-size:14px"><?php echo $row_p['service_detail']; ?></td>
        <td><?php echo $row_p['service_pic']; ?></td> -->
        <td>
            <div class="d-flex">
                <a href="service.php?act=edit&service_id=<?php echo $row_p['service']; ?>"
                    class="btn btn-warning btn-flat">แก้ไข</a><a
                    href="service.php?act=del&service_id=<?php echo $row_p['service']; ?>"
                    class="btn btn-danger btn-flat" onclick="return confirm('ต้องการลบไหม?')">ลบ</a>
            </div>
        </td>
    </tr>

    <!-- <?php }  ?> -->

</table>