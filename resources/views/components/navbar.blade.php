<div class="container-fluid"> <!--begin::Start Navbar Links-->
    <ul class="navbar-nav">
        <li class="nav-item"> <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button"> <i class="bi bi-list"></i> </a> </li>
        
    </ul> <!--end::Start Navbar Links--> <!--begin::End Navbar Links-->
    <ul class="navbar-nav ms-auto"> <!--begin::Navbar Search-->
        <li class="nav-item"> <a class="nav-link" data-widget="navbar-search" href="#" role="button"> <i class="bi bi-search"></i> </a> </li> <!--end::Navbar Search--> <!--begin::Messages Dropdown Menu-->
        <li class="nav-item dropdown"> <a class="nav-link" data-bs-toggle="dropdown" href="#"> <i class="bi bi-chat-text"></i> <span class="navbar-badge badge text-bg-danger">3</span> </a>
            <div class="icon"> <a href="#" class="dropdown-item"> <!--begin::Message-->
                    
            </div>
        </li> <!--end::Messages Dropdown Menu--> <!--begin::Notifications Dropdown Menu-->
        <li class="nav-item dropdown"> <a class="nav-link" data-bs-toggle="dropdown" href="#"> <i class="bi bi-bell-fill"></i> <span class="navbar-badge badge text-bg-warning">15</span> </a>
            
        </li> <!--end::Notifications Dropdown Menu--> <!--begin::Fullscreen Toggle-->
        <li class="nav-item"> <a class="nav-link" href="#" data-lte-toggle="fullscreen"> <i data-lte-icon="maximize" class="bi bi-arrows-fullscreen"></i> <i data-lte-icon="minimize" class="bi bi-fullscreen-exit" style="display: none;"></i> </a> </li> <!--end::Fullscreen Toggle--> <!--begin::User Menu Dropdown-->
        <li class="nav-item dropdown user-menu"> <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">  <span class="d-none d-md-inline">Admin</span> </a>
            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end"> <!--begin::User Image-->
                 <!--end::User Image--> <!--begin::Menu Body-->
                <li class="user-body"> <!--begin::Row-->
                    
                </li> <!--end::Menu Body--> <!--begin::Menu Footer-->
                <li class="user-footer"> <a href="{{ url('profile.edit') }}" class="btn btn-default btn-flat">Profile</a> <a href="/" class="btn btn-default btn-flat float-end">Sign out</a> </li> <!--end::Menu Footer-->
            </ul>
        </li> <!--end::User Menu Dropdown-->
    </ul> <!--end::End Navbar Links-->
</div>