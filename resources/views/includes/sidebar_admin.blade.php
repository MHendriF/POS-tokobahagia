            <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                    <li>
                        <a href="{{ url('/home') }}">
                            <i class="fa fa-home"></i> Home
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/salary') }}">
                            <i class="fa fa-money"></i> Gaji Pegawai
                        </a>
                    </li>
                    {{-- <li>
                        <a href="{{ url('/transfer_barang') }}">
                            <i class="fa fa-shopping-cart"></i> Transfer Barang
                        </a>
                    </li> --}}
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
                            <li><a href="{{ url('user') }}">User account</a></li>
                            <li><a href="{{ url('product') }}">Product</a></li>
                            <li><a href="{{ url('location') }}">Location</a></li>
                            <li><a href="{{ url('shipping') }}">Shipping</a></li>
                            <li><a href="{{ url('category') }}">Category</a></li>
                            <li><a href="{{ url('supplier') }}">Supplier</a></li>
                            <li><a href="{{ url('technician') }}">Technician</a></li>
                            <li><a href="{{ url('transaction') }}">Transaction</a></li>
                           {{--  <li><a href="{{ url('purchase') }}">Purchase Order</a></li> --}}
                            <li>
                                <a>Services<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li class="sub_menu">
                                        <a href="{{ url('service') }}">Service</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('service_item') }}">Service Item</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('service_status') }}">Service Status</a>
                                    </li>
                                </ul>
                            </li>
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
                            <li><a href="{{ url('') }}">Gaji Pegawai</a></li>
                            <li><a href="{{ url('') }}">Pemasukan</a></li>
                            <li><a href="{{ url('') }}">Pengeluaran</a></li>
                            <li><a href="{{ url('') }}">Biaya Expense</a></li>
                        </ul>
                    </li>

                </ul>
            </div>