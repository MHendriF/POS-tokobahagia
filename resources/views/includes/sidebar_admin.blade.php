            <div class="menu_section">
                <a href="{{ url('general') }}" ><h3>General</h3></a>
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-home"></i> General Menu <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ url('home') }}">Home</a></li>
                            <li><a href="{{ url('inventory') }}">Inventory</a></li>
                            <li><a href="{{ url('location') }}">Location</a></li>
                            <li><a href="{{ url('shipping') }}">Shipping</a></li>
                            <li><a href="{{ url('customer') }}">Customers</a></li>
                            <li><a href="{{ url('technician') }}">Technician</a></li>
                            <li><a href="{{ url('category') }}">Category</a></li>
                            
                            {{-- <li><a href="{{ url('income') }}">Income</a></li>
                            <li><a href="{{ url('outcome') }}">Outcome</a></li> --}}
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="menu_section">
                <a href="{{ url('master') }}" ><h3>Master</h3></a>
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-user-md"></i> Master Menu <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ url('purchase/create') }}">Purchase</a></li>
                            <li><a href="{{ url('order/create') }}">Order</a></li>
                            <li><a href="{{ url('location/create') }}">Add Location</a></li>
                            <li><a href="{{ url('inventory/create') }}">Add Inventory</a></li>
                            <li><a href="{{ url('category/create') }}">Add Category</a></li>
                            <li><a href="{{ url('customer/create') }}">Add Customers</a></li>
                            <li><a href="{{ url('supplier/create') }}">Add Suppliers</a></li>
                            <li><a href="{{ url('user/create') }}">Add Employee</a></li>
                            <li><a href="{{ url('service/create') }}">Add Service</a></li>
                           {{--  <li><a href="{{ url('transaction/create') }}">Transaction</a></li> --}}

                        </ul>
                    </li>
                </ul>
            </div>
            <div class="menu_section">
                <a href="{{ url('report') }}" ><h3>Report</h3></a>
                <ul class="nav side-menu">
                    <li>
                        <a><i class="fa fa-table"></i> Report Menu <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ url('inventory') }}">Report Inventory</a></li>
                            <li><a href="{{ url('purchase') }}">Report Purchase</a></li>
                            <li><a href="{{ url('order') }}">Report Order</a></li>
                            <li><a href="{{ url('service') }}">Report Service</a></li>
                            <li><a href="{{ url('transaction') }}">Report Transaction</a></li>
                            <li><a href="{{ url('finance') }}">Report Keuangan Bulanan</a></li>
                            <li><a href="{{ url('') }}">Report Biaya Teknisi</a></li>
                        </ul>
                    </li>
                </ul>
            </div>