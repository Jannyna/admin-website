<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="../assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">HOMECARE</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['admin_user'] ; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
  
          <li class="nav-item">
            <a href="service.php" class="nav-link">
             <i class="far fa-circle nav-icon"></i>
              <p>จัดการข้อมูลบริการ
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="payment.php" class="nav-link">
             <i class="far fa-circle nav-icon"></i>
              <p>จัดการสถานะการชำระเงิน
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="promotion.php" class="nav-link">
             <i class="far fa-circle nav-icon"></i>
              <p>จัดการข้อมูลโปรโมชั่น
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="user_manage.php" class="nav-link">
             <i class="far fa-circle nav-icon"></i>
              <p>ตรวจสอบข้อมูลบัญชีผู้ใช้บริการ
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="partner.php" class="nav-link">
             <i class="far fa-circle nav-icon"></i>
              <p>ตรวจสอบข้อมูลบัญชีผู้ให้บริการ
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="report_member.php" class="nav-link">
             <i class="far fa-circle nav-icon"></i>
              <p>รายงานการสมัครสมาชิก
              </p>
              <br>
              &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<p>ของผู้ใช้บริการรายเดือน</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="report_member_year.php" class="nav-link">
             <i class="far fa-circle nav-icon"></i>
              <p>รายงานการสมัครสมาชิก
              </p>
              <br>
              &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<p>ของผู้ใช้บริการรายปี</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="report_user.php" class="nav-link">
             <i class="far fa-circle nav-icon"></i>
              <p>รายงานปัญหาของผู้ใช้บริการ
              </p> 
              <br>
                 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<p>บัญชีผู้ใช้งาน</p>
            </a>
          </li>

          <li class="nav-item mt-4">
            <a href="logout.php" class="nav-link">
            <i class="fas fa-sign-out-alt nav-icon"></i>
              <p>ออกจากระบบ</p>
            </a>
          </li>


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>