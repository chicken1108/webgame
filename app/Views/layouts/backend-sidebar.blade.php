<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{url('/')}}/public/images/thongtin/bkap.png" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>BKAP SHOP</p>
        <a href="http://localhost:8080/webgame/"><i class="fa fa-circle text-success" ></i> Online</a>
      </div>
    </div>
    <!-- search form -->
    
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li>
        <a href="{{route('backend.index')}}">
          <i class="fa fa-home"></i> <span>Trang chính</span>
        </a>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Sản phẩm</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{route('backend.product')}}"><i class="fa fa-circle-o"></i> Danh sách</a></li>
          <li><a href="{{route('backend.product-add')}}"><i class="fa fa-circle-o"></i> Thêm mới</a></li>
          <li><a href="{{route('backend.category')}}"><i class="fa fa-circle-o"></i> Danh mục</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Mã code/key</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{route('backend.code')}}"><i class="fa fa-circle-o"></i> Danh sách</a></li>
          <li><a href="{{route('backend.code-add')}}"><i class="fa fa-circle-o"></i> Thêm mới</a></li>        
        </ul>
      </li>
      
      <li>
        <a href="{{route('backend.banner')}}">
          <i class="fa fa-image"></i> <span>Banner</span>
        </a>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Tài khoản</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
         <ul class="treeview-menu">
          <li><a href="{{route('backend.user')}}"><i class="fa fa-user"></i> Quản trị</a></li>
          <li><a href="{{route('backend.customer')}}"><i class="fa fa-circle-o"></i> Khách hàng</a></li>
        </ul>
      </li>

        <li class="treeview">
        <a href="#">
          <i class="glyphicon glyphicon-shopping-cart"></i> <span>Thống kê</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{route('backend.transaction-history')}}"><i class="fa fa-circle-o"></i>Khách hàng nạp tiền</a></li>
          <li><a href="{{route('backend.product-sold')}}"><i class="fa fa-circle-o"></i>Sản phẩm đã bán</a></li>        
        </ul>
      </li>
      
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>