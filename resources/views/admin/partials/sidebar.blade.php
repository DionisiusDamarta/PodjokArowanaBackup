<!--====================================
——— LEFT SIDEBAR WITH FOOTER
=====================================-->
<aside class="left-sidebar bg-sidebar">
    <div id="sidebar" class="sidebar sidebar-with-footer">
        <!-- Aplication Brand -->
        <div class="app-brand">
            <a href="/index.html" title="Podjok Arowana">
                <svg class="brand-icon" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" width="30"
                    height="33" viewBox="0 0 30 33">
                    <g fill="none" fill-rule="evenodd">
                        <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z" />
                        <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                    </g>
                </svg>
                <span class="brand-name text-truncate">Podjok Arowana</span>
            </a>
        </div>
        <!-- begin sidebar scrollbar -->
        <div class="sidebar-scrollbar">
            <!-- sidebar menu -->
            <ul class="nav sidebar-inner" id="sidebar-menu">
                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                        data-target="#dashboard" aria-expanded="false" aria-controls="dashboard">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span class="nav-text">Dashboard</span>
                        <b class="caret"></b>
                    </a>
                </li>
                <li class="has-sub {{ ($currentAdminMenu == 'produk') ? 'active expand' : ''}}">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                        data-target="#components" aria-expanded="false" aria-controls="components">
                        <i class="mdi mdi-folder-multiple-outline"></i>
                        <span class="nav-text">Produk</span>
                        <b class="caret"></b>
                    </a>
                    <ul class="collapse {{ ($currentAdminMenu == 'produk') ? 'show' : ''}}" id="components"
                        data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li>
                                <a class="sidenav-item-link" href="{{ url('admin/products/create') }}">
                                    <span class="nav-text">Tambah Produk</span>
                                </a>
                            </li>

                            <li>
                                <a class="sidenav-item-link" href="{{ url('admin/products') }}">
                                    <span class="nav-text">Manage Produk</span>
                                </a>
                            </li>

                            <li>
                                <a class="sidenav-item-link" href="{{ url('admin/categories') }}">
                                    <span class="nav-text">Edit Kategori</span>
                                </a>
                            </li>
                        </div>
                    </ul>
                </li>

                <li class="has-sub {{ ($currentAdminMenu == 'transaksi') ? 'active expand' : ''}}">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#icons"
                        aria-expanded="false" aria-controls="icons">
                        <i class="mdi mdi-diamond-stone"></i>
                        <span class="nav-text">Transaksi</span>
                        <b class="caret"></b>
                    </a>
                    <ul class="collapse {{ ($currentAdminMenu == 'transaksi') ? 'show' : ''}}" id="icons"
                        data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li>
                                <a class="sidenav-item-link" href="{{ url('admin/transactions/create') }}">
                                    <span class="nav-text">Barang Masuk</span>
                                </a>
                            </li>

                            <li>
                                <a class="sidenav-item-link" href="{{ url('admin/kasir') }}">
                                    <span class="nav-text">Penjualan</span>
                                </a>
                            </li>
                        </div>
                    </ul>
                </li>

                <li class="has-sub {{ ($currentAdminMenu == 'laporan') ? 'active expand' : ''}}">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#forms"
                        aria-expanded="false" aria-controls="forms">
                        <i class="mdi mdi-email-mark-as-unread"></i>
                        <span class="nav-text">Laporan</span>
                        <b class="caret"></b>
                    </a>
                    <ul class="collapse {{ ($currentAdminMenu == 'laporan') ? 'show' : ''}}" id="forms"
                        data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li>
                                <a class="sidenav-item-link" href="{{ url('admin/transactions/') }}">
                                    <span class="nav-text">Riwayat Transaksi</span>
                                </a>
                            </li>

                            <li>
                                <a class="sidenav-item-link" href="{{ url('admin/transactions/input') }}">
                                    <span class="nav-text">Riwayat Input Barang</span>
                                </a>
                            </li>

                            <li>
                                <a class="sidenav-item-link" href="{{ url('admin/transactions/output') }}">
                                    <span class="nav-text">Riwayat Penjualan</span>
                                </a>
                            </li>

                            <li>
                                <a class="sidenav-item-link" href="{{url('admin/transactions/penjualan')}}">
                                    <span class="nav-text">Laporan Penjualan</span>
                                </a>
                            </li>

                            <li>
                                <a class="sidenav-item-link" href="{{url('admin/inventories/stok')}}">
                                    <span class="nav-text">Laporan Stock</span>
                                </a>
                            </li>
                        </div>
                    </ul>
                </li>
            </ul>
        </div>

        <div class="sidebar-footer">
            <hr class="separator mb-0" />
            <div class="sidebar-footer-content">
                <h6 class="text-uppercase">
                    Cpu Uses <span class="float-right">40%</span>
                </h6>
                <div class="progress progress-xs">
                    <div class="progress-bar active" style="width: 40%;" role="progressbar"></div>
                </div>
                <h6 class="text-uppercase">
                    Memory Uses <span class="float-right">65%</span>
                </h6>
                <div class="progress progress-xs">
                    <div class="progress-bar progress-bar-warning" style="width: 65%;" role="progressbar"></div>
                </div>
            </div>
        </div>
    </div>
</aside>