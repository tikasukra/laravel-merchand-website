 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background: #4e7e83">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
    <img src="{{ asset('dist/img/store.png') }}" alt="AdminLTE Logo" class="brand-image"
           style="opacity: .8">
      <span class="brand-text font-weight-light"><b>GetMerch( )</b></span>
    </a>

    <br>
    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="{{ route('home') }}" class="nav-link">
                <svg class="bi bi-window" width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M14 2H2a1 1 0 00-1 1v10a1 1 0 001 1h12a1 1 0 001-1V3a1 1 0 00-1-1zM2 1a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V3a2 2 0 00-2-2H2z" clip-rule="evenodd"/>
                    <path fill-rule="evenodd" d="M15 6H1V5h14v1z" clip-rule="evenodd"/>
                    <path d="M3 3.5a.5.5 0 11-1 0 .5.5 0 011 0zm1.5 0a.5.5 0 11-1 0 .5.5 0 011 0zm1.5 0a.5.5 0 11-1 0 .5.5 0 011 0z"/>
                  </svg>
              <p style="padding-left:10px">
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
          <a href="{{ route('store.index') }}" class="nav-link">
              <svg class="bi bi-house-door" width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M7.646 1.146a.5.5 0 01.708 0l6 6a.5.5 0 01.146.354v7a.5.5 0 01-.5.5H9.5a.5.5 0 01-.5-.5v-4H7v4a.5.5 0 01-.5.5H2a.5.5 0 01-.5-.5v-7a.5.5 0 01.146-.354l6-6zM2.5 7.707V14H6v-4a.5.5 0 01.5-.5h3a.5.5 0 01.5.5v4h3.5V7.707L8 2.207l-5.5 5.5z" clip-rule="evenodd"/>
                <path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 01.5-.5h1a.5.5 0 01.5.5z" clip-rule="evenodd"/>
              </svg>
                <p style="padding-left:10px">
                Kelola Toko
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
          <a href="{{ route('product.index') }}" class="nav-link">
            <svg class="bi bi-bag" width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M14 5H2v9a1 1 0 001 1h10a1 1 0 001-1V5zM1 4v10a2 2 0 002 2h10a2 2 0 002-2V4H1z" clip-rule="evenodd"/>
              <path d="M8 1.5A2.5 2.5 0 005.5 4h-1a3.5 3.5 0 117 0h-1A2.5 2.5 0 008 1.5z"/>
            </svg>
              <p style="padding-left:10px">
                Kelola Produk
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="{{ route('kategori.index') }}" class="nav-link">
              <svg class="bi bi-plus-square" width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M8 3.5a.5.5 0 01.5.5v4a.5.5 0 01-.5.5H4a.5.5 0 010-1h3.5V4a.5.5 0 01.5-.5z" clip-rule="evenodd"/>
                <path fill-rule="evenodd" d="M7.5 8a.5.5 0 01.5-.5h4a.5.5 0 010 1H8.5V12a.5.5 0 01-1 0V8z" clip-rule="evenodd"/>
                <path fill-rule="evenodd" d="M14 1H2a1 1 0 00-1 1v12a1 1 0 001 1h12a1 1 0 001-1V2a1 1 0 00-1-1zM2 0a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V2a2 2 0 00-2-2H2z" clip-rule="evenodd"/>
              </svg>
                <p style="padding-left:10px">
                Kelola Kategori
              </p>
            </a>
          </li>

          <hr><hr>

      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
            <img src="{{ asset('dist/img/user.png') }}" style="width: 30px" class="img-circle elevation-2" alt="User Image">
          <p style="padding-left:10px">
            {{ auth()->user()->name }}
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
          <a href="{{ route('users.index') }}" class="nav-link">
              <i class="fa fa-user nav-icon"></i>
              <p>Profile</p>
            </a>
          </li>
          <li class="nav-item">
          <a href="{{ route('logout') }}" class="nav-link">
            <svg class="bi bi-box-arrow-in-left nav-icon" width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="#c4352d" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M7.854 11.354a.5.5 0 000-.708L5.207 8l2.647-2.646a.5.5 0 10-.708-.708l-3 3a.5.5 0 000 .708l3 3a.5.5 0 00.708 0z" clip-rule="evenodd"/>
                <path fill-rule="evenodd" d="M15 8a.5.5 0 00-.5-.5h-9a.5.5 0 000 1h9A.5.5 0 0015 8z" clip-rule="evenodd"/>
                <path fill-rule="evenodd" d="M2.5 14.5A1.5 1.5 0 011 13V3a1.5 1.5 0 011.5-1.5h8A1.5 1.5 0 0112 3v1.5a.5.5 0 01-1 0V3a.5.5 0 00-.5-.5h-8A.5.5 0 002 3v10a.5.5 0 00.5.5h8a.5.5 0 00.5-.5v-1.5a.5.5 0 011 0V13a1.5 1.5 0 01-1.5 1.5h-8z" clip-rule="evenodd"/>
              </svg>
          <p style="padding-left:10px; color:#c4352d">
            Logout
          </p>
        </a>
          </li>
        </ul>
      </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>