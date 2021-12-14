<link rel="stylesheet" href="css/style.css">
<title>หน้าแรก</title>
<section class="content">
<div class="container">
      <form class="form-1" action="checklogin_o.php" method="post">
        <h1>เข้าสู่ระบบเจ้าของร้าน</h1>
        <label for="">ชื่อผู้ใช้</label>
        <input type="text" name="Owner_username" id="email" required />
        <label for="password">รหัสผ่าน</label>
        <input type="password" name="Owner_password" id="password" required />
        <button type="submit">เข้าสู่ระบบ</button>
        <center><a href="register.php" class="btn btn-primary btn-sm btn-flat">สมัครสมาชิก</a>
                <a href="login.php" class="btn btn-primary btn-sm btn-flat">ผู้ดูแลระบบ</a></center>
        </div>
      </form>
    </div>


</body>

</html>