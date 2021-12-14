<?php
use UI\Controls\Button;
error_reporting( error_reporting() & ~E_NOTICE );
include('condb.php');  


$query = "SELECT * FROM member " or die("Error:" . mysqli_error($conn));
$result = mysqli_query($conn, $query);

$i=1;

	
?>

<table class="table table-bordered table-striped datatable  border" align="center">
    <thead>
        <tr class="info">
            <center><strong><p>รายงานการสมัครสมาชิกรายปี</p></strong></center>
            <th scope="col">#</th>
            <th class="text-nowrap"scope="col">ปี</th>
            <th class="text-nowrap"scope="col">จำนวนการสมาชิก</th>
            <th scope="col">ประเภทสมาชิก</th>
            
        </tr>
    </thead>
    <?php while($row_p = mysqli_fetch_array($result)) { ?>
    <tr>
        <th scope="row"><?php echo $i++ ?></th>
        <td><?php echo $row_p['']; ?></td>
        <td><?php echo $row_p['']; ?></td>
        <td style="font-size:14px"><?php echo $row_p['']; ?></td>
        <td><?php echo $row_p['']; ?></td>
        <!-- <td>
            <?php 
            $lv = $row_p['Owner_status']; 
            if($lv=="1"){
                echo "<button class='btn btn-sm btn-success'>อนุมัติ</button>"; 
            }
            elseif($lv=="0"){
                echo "<button class='btn btn-sm btn-warning'>รอนุมัติ</button>"; 
            }
            elseif($lv==""){
                echo "<button class='btn btn-sm btn-warning'>รอนุมัติ</button>"; 
            }
            ?>
            
        </td> -->
      

        <td>
            <!-- <div class="d-flex">
                <a href="report_user_db.php?member_id=<?php echo $row_p['member_id']; ?>"
                class="btn btn-warning btn-flat" onclick="return confirm('ต้องการแก้ไขไหม?')">แก้ไข</a>
                <a href="lock_db.php?member_id=<?php echo $row_p['member_id']; ?>"
                class="btn btn-danger btn-flat" onclick="return confirm('ต้องการ LOCK?')">ลบ</a>
            </div> -->
        </td>
    </tr>
    <?php }  ?>


</table>