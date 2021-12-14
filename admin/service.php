<?php 
$menu = "service";



?>
<title>จัดการข้อมูลบริการ</title>



<?php include("header.php"); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">

    <div class="container">
        <div class="row">
            <?php 
  error_reporting( error_reporting() & ~E_NOTICE );
  $act = (isset($_GET['act']) ? $_GET['act'] : '');
    if($act=="add"){
      echo '';
    }else if($act=="edit"){
        echo '';  
    }else if($act=="del"){
    echo '';  
    }
    else{?>
    <a href="service.php?act=add" class="btn btn-primary btn-flat">เพิ่มการบริการ</a>
    <?php } 
   ?>
        <div class="col-md-12" style="margin-top: 10px">
        <?php
        $act = (isset($_GET['act']) ? $_GET['act'] : '');
        if($act=='add'){
        include('service_add.php');
        }else if($act=='edit'){
        include("service_edit.php");
        }else if($act=='del'){
        include("service_delete.php");
        }else{
        include('service_list.php');
        }
        ?>
        </div>
    </div>
</div>

</section>
<!-- /.content -->

<?php include('footer.php'); ?>

<script>
$(function() {
    $(".datatable").DataTable();
    // $('#example2').DataTable({
    //   "paging": true,
    //   "lengthChange": false,
    //   "searching": false,
    //   "ordering": true,
    //   "info": true,
    //   "autoWidth": false,
    // http://fordev22.com/
    // });
});
</script>