            <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                    <li>
                        <a href="{{ url('/home') }}">
                            <i class="fa fa-home"></i> Home
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/gaji') }}">
                            <i class="fa fa-money"></i> Gaji
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/transfer_barang') }}">
                            <i class="fa fa-shopping-cart"></i> Transfer Barang
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/expense') }}">
                            <i class="fa fa-flash"></i> Expense 
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/pengeluaran') }}">
                            <i class="fa fa-line-chart"></i> Pengeluaran 
                        </a>
                    </li>
                    <li><a><i class="fa fa-edit"></i> Data <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ url('') }}">Account</a></li>
                            <li><a href="{{ url('') }}">Product</a></li>
                            <li><a href="{{ url('') }}">Order</a></li>
                            <li><a href="{{ url('') }}">Shipping</a></li>
                            <li><a href="{{ url('') }}">Purchace Order</a></li>
                            <li><a href="{{ url('') }}">Supplier</a></li>
                            <li><a href="{{ url('') }}">Sevices</a></li>
                            <li><a href="{{ url('') }}">Technician</a></li>

                        </ul>
                    </li>
                </ul>
            </div>
            <div class="menu_section">
                <h3>Report</h3>
                <ul class="nav side-menu">
                    <li>
                        <a><i class="fa fa-table"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li>
                                <a href="#">Harian</a>
                                <li>
                                    <a>Level One<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li class="sub_menu">
                                            <a href="#">Harian</a>
                                        </li>
                                        <li>
                                            <a href="#">Bulanan</a>
                                        </li>
                                        <li>
                                            <a href="#">Tahunan</a>
                                        </li>
                                    </ul>
                                </li>
                            <li>
                                <a href="#">Tahunan</a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>