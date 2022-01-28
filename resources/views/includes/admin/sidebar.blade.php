  <!-- Sidebar -->
  <ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center sidebar-heading" href="{{route('dashboard')}}">
        <img src="{{url('frontend/image/Delta Store.png')}}" alt="" style="width: 170px">
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{route('dashboard')}}">
            <i class="fas fa-laptop"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        <i class="fas fa-shopping-cart"></i>
        Barang
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item ">
        <a class="nav-link" href="{{route('products.index')}}">
            <i class="fas fa-bars"></i>
            <span>Lihat Barang</span></a>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item ">
        <a class="nav-link" href="{{route('products.create')}}">
            <i class="fas fa-plus"></i>
            <span>Tambah Barang</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        <i class="fas fa-photo-video"></i>
        Foto Barang
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item ">
        <a class="nav-link" href="{{route('product_galleries.index')}}">
            <i class="fas fa-bars"></i>
            <span>Lihat Photo Barang</span></a>
    </li>

    <li class="nav-item ">
        <a class="nav-link" href="{{route('product_galleries.create')}}">
            <i class="fas fa-plus"></i>
            <span>Tambah Foto Barang</span></a>
    </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

    <div class="sidebar-heading">
        <i class="fas fa-money-check"></i>
        Transaksi
    </div>

    <li class="nav-item ">
        <a class="nav-link" href="{{route('transactions.index')}}">
            <i class="fas fa-bars"></i>
            <span>Lihat Transaksi Product</span></a>
    </li>



  



</ul>
<!-- End of Sidebar -->