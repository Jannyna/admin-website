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
            <!-- <th scope="col">#</th> -->
            <th class="text-nowrap"scope="col">รหัสสมาชิก</th>
            <th class="text-nowrap"scope="col">ชื่อ-นามสกุล</th>
            <th scope="col">อีเมล</th>
            <th scope="col">รหัสผ่าน</th>
            <th scope="col">วัน เดือน ปีเกิด</th>
            <th scope="col">เพศ</th>
            <th scope="col">เบอร์โทรศัพท์</th>
            <th scope="col">รูปโปรไฟล์</th>
        </tr>
    </thead>
    <?php while($row_p = mysqli_fetch_array($result)) { ?>
    <tr>
        <th scope="row"><?php echo $i++ ?></th>
        <td><?php echo $row_p['member_name']; ?></td>
        <td><?php echo $row_p['member_email']; ?></td>
        <td style="font-size:14px"><?php echo $row_p['member_pass']; ?></td>
        <td><?php echo $row_p['member_birth']; ?></td>
        <td><?php echo $row_p['member_sex']; ?></td>
        <td><?php echo $row_p['member_phone']; ?></td>
        <td><?php echo $row_p['member_profile']; ?></td>
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