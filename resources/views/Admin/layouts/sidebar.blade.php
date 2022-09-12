<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a style="  text-decoration:none" href="{{route('admin_index')}}" class="brand-link">
        <img src="{{asset('Backend/dist/img/AdminLTELogo.png')}}" alt="Admin Panel Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span  class="brand-text font-weight-light">Admin Panel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item ">
                    <a href="{{route('admin_index')}}" class="nav-link  {{request()->RouteIs('admin_index') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Esasy Sahypa

                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('categories.index')}}" class="nav-link {{request()->RouteIs('categories.*') ? 'active' : ''}}">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Kategorýalar

                        </p>
                    </a>
                </li>
             
                <li class="nav-item  ">
                    <a href="#" class="nav-link "  >
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Postlar
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>


                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('news.index')}}" class="nav-link {{request()->RouteIs('news.*') ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Habarlar</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('makalalar.index')}}" class="nav-link {{request()->RouteIs('makalalar.*') ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Makalalar</p>
                            </a>
                        </li>
                    </ul>
                </li>

                   
                <li class="nav-item  ">
                    <a href="#" class="nav-link "  >
                        <i class="nav-icon fas fa-info-circle"></i>
                        <p>
                            Information
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('about.index')}}" class="nav-link {{request()->RouteIs('about.*') ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Biz Barada</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('contact.index')}}" class="nav-link {{request()->RouteIs('contact.*') ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Contact</p>
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
