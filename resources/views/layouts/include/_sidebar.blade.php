<aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="{{ url('/dashboard') }}"><i class
                            ="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>
                    @if(auth()->user()->role == 'admin')
                        <li class="menu-title">User</li><!-- /.menu-title -->
                        <li class="">
                            <a href="{{ url('/user')}}"> <i class="menu-icon fa fa-list"></i>Lihat User</a>
                            <li class="menu-item-has-children dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-plus"></i>Add User</a>
                                <ul class="sub-menu children dropdown-menu">
                                <li><i class="fa fa-user"></i><a href="{{ url('/user/create')}}">Admin</a></li>
                                    <!-- <li><i class="fa fa-user"></i><a href="{{ url('/user/create/customer')}}">Customer</a></li>
                                    <li><i class="fa fa-user"></i><a href="{{ url('/user/create/pedagang')}}">Pedagang</a></li> -->
                                </ul>
                            </li>
                        </li>
                        <li class="menu-title">Tabel Aktor</li><!-- /.menu-title -->
                            <li class="menu-item-has-children dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>Customer</a>
                                <ul class="sub-menu children dropdown-menu">
                                    <li><i class="fa fa-list"></i><a href="">Lihat Customer</a></li>
                                    <li><i class="fa fa-plus"></i><a href="">Tambah Customer</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>Pedagang</a>
                                <ul class="sub-menu children dropdown-menu">
                                    <li><i class="fa fa-list"></i><a href="">Lihat Pedagang</a></li>
                                    <li><i class="fa fa-plus"></i><a href="">Tambah Pedagang</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>Petani</a>
                                <ul class="sub-menu children dropdown-menu">
                                    <li><i class="fa fa-list"></i><a href="">Lihat Petani</a></li>
                                    <li><i class="fa fa-plus"></i><a href="">Tambah Petani</a></li>
                                </ul>
                            </li>
                    @endif
                    <li class="menu-title">Fitur</li><!-- /.menu-title -->
                    <li class="menu-icon"><img src="{{ asset('images/hope-market.png') }}" width="50px" alt="Hope Market">Hope Market</li><!-- /.menu-title -->
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Product</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="fa fa-list"></i><a href="">Lihat Product</a></li>
                                <li><i class="fa fa-plus"></i><a href="">Tambah Product</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Kategori Product</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="fa fa-list"></i><a href="{{url('/category')}}">Lihat Kategori</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Foto Product</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="fa fa-list"></i><a href="">Lihat Foto Product</a></li>
                                <li><i class="fa fa-plus"></i><a href="">Tambah Foto Product</a></li>
                            </ul>
                        </li>
                        <li class="menu-icon"><img src="{{ asset('images/hope-invest.png') }}" width="50px" alt="Hope Invest">Hope Invest</li><!-- /.menu-title -->
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Invest</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="fa fa-list"></i><a href="">Lihat Inves</a></li>
                                <li><i class="fa fa-plus"></i><a href="">Tambah Inves</a></li>
                            </ul>
                        </li>
                        <li class="menu-icon"><img src="{{ asset('images/edhope.png') }}" width="50px" alt="Hope Invest">EdHope</li><!-- /.menu-title -->
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Video Edukasi</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="fa fa-list"></i><a href="">Lihat Video</a></li>
                                <li><i class="fa fa-plus"></i><a href="">Tambah Video</a></li>
                            </ul>
                        </li>
                    <li class="menu-title">Transaksi</li><!-- /.menu-title -->
                    <li class="">
                        <a href="#"> <i class="menu-icon fa fa-list"></i>Lihat Transaksi</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>