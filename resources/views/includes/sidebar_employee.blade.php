            <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                    <li>
                        <a href="{{ url('/home') }}">
                            <i class="fa fa-home"></i>Home
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/barang') }}">
                            <i class="fa fa-shopping-cart"></i>Barang
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/order') }}">
                            <i class="fa fa-shopping-cart"></i>Order
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/transaksi') }}">
                            <i class="fa fa-credit-card"></i>Transaksi
                        </a>
                    </li>
                </ul>
            </div>
            <div class="menu_section">
                <h3>Report</h3>
                <ul class="nav side-menu">
                    <li>
                        <a><i class="fa fa-table"></i> Order <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li>
                                <a href="{{ url('/orderv2') }}">Order V2</a>
                            </li>
                            <li>
                                <a href="{{ url('/order_list') }}">Order List</a>
                            </li>
                            <li>
                                <a href="{{ url('/order_detail_list') }}">Order Detail List</a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>