<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/home" class="brand-link">
        <i class="fas fa-cut ml-3"></i>
        <span class="brand-text" style="font-family: fantasy">R y G</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <span style="color: white">{{ auth()->user()->role->role_name}}</span>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                @if (auth()->user()->role_id == 1)
                <li class="nav-item">
                    <a href="{{route('indexusers')}}" class="nav-link">
                        <i class="fa fa-users"></i>
                        <p> Usuarios</p>
                    </a>
                </li>
                @endif
                <li class="nav-item">
                    <a href="{{route('indexregistry')}}" class="nav-link">
                        <i class="fa fa-archive"></i>
                        <p> Registros</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
