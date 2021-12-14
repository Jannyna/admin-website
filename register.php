<link rel="stylesheet" href="css/style.css">
<title>หน้าแรก</title>
<section class="content">
<body>
<div class="container">
      <form class="form-1" action="register_db.php" method="post">
        <h1>สมัครสมาชิกเจ้าของร้าน</h1>
       

        <label for="text">ชื่อจริง</label>
        <input type="text" name="Owner_name" id="" required/>  
        <label for="text">นามสกุล</label>
        <input type="text" name="Owner_lastname" id="" required />
        <label for="text">เบอร์โทร</label>
        <input type="text" name="Owner_mobile" id="" required />
        <label for="text">ชื่อผู้ใช้</label>
        <input type="text" name="Owner_username" id="email" required />
        <label for="text">รหัสผ่าน</label>
        <input type="text" name="Owner_password" id="password" required /> 

        <button type="submit">สมัครสมาชิก</button>
        <input type="hidden" name="Owner_id" value="<?php echo  $Owner_id;  ?>">
        <input type="hidden" name="Owner_status" value="<?php echo  $Owner_status;  ?>">
        <center> <a href="loginowner.php" class="btn btn-primary btn-sm btn-flat">เจ้าของร้าน</a></center>   
      </div>
      </form>
    </div>


</body>
</html>
