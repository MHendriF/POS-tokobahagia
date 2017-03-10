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
                            <i class="fa fa-shopping-cart"></i>Inventory
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/order') }}">
                            <i class="fa fa-shopping-cart"></i>Order
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('purchase_order') }}">
                            <i class="fa fa-table"></i>Purchase Order
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/transaction') }}">
                            <i class="fa fa-credit-card"></i>Transaksi
                        </a>
                    </li>
                    <li>
                        <a><i class="fa fa-table"></i> Services <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li>
                                <a href="{{ url('/service') }}">Service</a>
                            </li>
                            <li>
                                <a href="{{ url('/service_item') }}">Service Item</a>
                            </li>
                            <li>
                                <a href="{{ url('/service_status') }}">Service Status</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="menu_section">
                <h3>Report</h3>
                <ul class="nav side-menu">
                    {{-- <li>
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
                    <li>
                        <a><i class="fa fa-table"></i> Purchase Order <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li>
                                <a href="{{ url('purchase_order') }}">Purchase</a>
                            </li>
                            <li>
                                <a href="{{ url('') }}">Purchase List</a>
                            </li>
                            <li>
                                <a href="{{ url('') }}">Purchase Detail List</a>
                            </li>
                        </ul>
                    </li> --}}
                </ul>
            </div>