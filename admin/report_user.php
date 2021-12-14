<?php 
$menu = "member";


?>
<title>รายงานปัญหาของผู้ใช้บริการบัญชีผู้ใช้งาน</title>



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
        <div class="col-md-12" style="margin-top: 10px">
        <?php
       
       include('report_user_list.php');
        
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