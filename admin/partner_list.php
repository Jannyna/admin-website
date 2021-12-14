<?php
use UI\Controls\Button;
error_reporting( error_reporting() & ~E_NOTICE );
include('condb.php');  


$query = "SELECT * FROM partner " or die("Error:" . mysqli_error($conn));
$results = mysqli_query($conn, $query);

$i=1;

	
?>

<table class="table table-bordered table-striped datatable  border" align="center">
    <thead>
        <tr class="info">
            <!-- <th scope="col">#</th> -->
            <th class="text-nowrap"scope="col">รหัสผู้ให้บริการ</th>
            <th class="text-nowrap"scope="col">ชื่อ-นามสกุล</th>
            <th scope="col">อีเมล</th>
            <th scope="col">รหัสผ่าน</th>
            <th scope="col">วัน เดือน ปีเกิด</th>
            <th scope="col">เพศ</th>
            <th scope="col">เบอร์โทรศัพท์</th>
            <th scope="col">รูปโปรไฟล์</th>
            <th scope="col">สมาชิก(1 เดือน, 3 เดือน)</th>
            <th scope="col">สถานะ(รอยืนยัน, ยืนยันแล้ว)</th>
            <th scope="col">แนบหลักฐาน</th>
        </tr>
    </thead>
    <?php while($row_p = mysqli_fetch_array($results)) { ?>
    <tr>
        <th scope="row"><?php echo $i++ ?></th>
        <td><?php echo $row_p['partner_name']; ?></td>
        <td><?php echo $row_p['partner_email']; ?></td>
        <td style="font-size:14px"><?php echo $row_p['partner_pass']; ?></td>
        <td><?php echo $row_p['partner_birth']; ?></td>
        <td><?php echo $row_p['partner_sex']; ?></td>
        <td><?php echo $row_p['partner_phone']; ?></td>
        <td><?php echo $row_p['partner_profile']; ?></td>
        <td><?php echo $row_p['partner_member']; ?></td>
        <td><?php echo $row_p['partner_status']; ?></td>
        <td><?php echo $row_p['partner_attach']; ?></td>
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
      

        <!-- <td>
            <div class="d-flex">
                <a href="confirm_db.php?Owner_id=<?php echo $row_p['Owner_id']; ?>"
                class="btn btn-success btn-flat" onclick="return confirm('ต้องการอนุมัติไหม?')">อนุมัติ</a>
                <a href="lock_db.php?Owner_id=<?php echo $row_p['Owner_id']; ?>"
                class="btn btn-danger btn-flat" onclick="return confirm('ต้องการ LOCK?')">ไม่อนุมัติ</a>
            </div>
        </td> -->
    </tr>


    <?php }  ?>


</table>