<?php

$service_id = $_SESSION['service_id'];

?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form action="service_add_db.php" method="POST" enctype="multipart/form-data">
                <div class="card">
                    <div class="card-header" style="background-color: # !important;">
                    เพิ่มข้อมูลการบริการ
                    </div>
                    <div class="card-body">
                    
                        <div class="mb-3">
                            <label for="" class="form-label">รหัสการบริการ</label>
                            <input type="text" name="service_id" id="" value=""
                                class="form-control" required />
                        </div>

                        <div class="dropdown" class="form-control" name="service_category_id">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
                                รหัสประเภทบริการ
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">1</a></li>
                            <li><a class="dropdown-item" href="#">2</a></li>
                            <li><a class="dropdown-item" href="#">3</a></li>
                        </ul> 
                        </div>
                        
                        <br>
                        <div class="mb-3">
                            <label for="" class="form-label">ชื่อบริการ</label>
                            <input type="text" name="service_name" id="" value=""
                                class="form-control" required />
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">รายละเอียด</label>
                            <textarea name="service_detail" id="" value=""
                                class="form-control" class="form-control" required id="" cols="30" rows="10" ></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">รูปภาพ</label>
                            <input name="service_pic" class="form-control" type="file" id="formFile" value="Upload"
                                multiple required /> 
                        </div>

                        <!-- <div class="mb-3">
                            <label for="" class="form-label">รหัสประเภทบริการ</label>
                            <input type="text" name="service_category_id" id="" value=""
                                class="form-control" required />
                        </div> -->
                        
                    <input type="hidden" name="service_id" value="<?php echo $service_id; ?>">
                        <center><button type="submit" class="btn btn-success  btn-flat col-2">บันทึก</button></center>
                    </div>

                </div>
        </div>
        </form>
    </div>
    <div class="col-md-2">
		</div>
</div>