 <!-- Brand Logo -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
 <a href="#" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>
    <?php 
      if(isset($_SESSION["adminname"])){
        echo "<button onclick='dangxuat()' id='dx'>Dang xuat</button>";
      }
    ?>
    <script>
      function dangxuat(){
        $.post("../Admin/admin/ajax.php",{action: "logout"},function(result){
            alert("dang xuat thanh cong");
            window.location.href="./Login_admin.php"; 
        });
      }
    </script>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Luong Nhan Kiet</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Trang chu</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Quan ly
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item" id="nav-item">
                <a href="index3.php?action=quanlysanpham" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Quan ly san pham</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index3.php?action=quanlydonhang" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Quan ly don hang</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index3.php?action=quanlytaikhoan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Quan ly tai khoan</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Thong ke
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index3.php?action=sanphambanchay" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>San pham ban chay the thoi gian</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index3.php?action=doanhthu" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Doanh thu 1 loai sp/ tat ca sp</p>
                </a>
              </li>
            </ul>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    </aside>