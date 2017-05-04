            <div class="menu_section">
                <a href="{{ url('general') }}" ><h3>General</h3></a>
                <ul class="nav side-menu">

                    {{-- <li><a href="{{ url('home') }}"><i class="fa fa-home"></i> Home</a></li>
                    <li><a href="{{ url('product') }}"><i class="fa fa-home"></i> Inventory</a></li>
                    <li><a href="{{ url('purchase') }}"><i class="fa fa-home"></i> Purchase</a></li>
                    <li><a href="{{ url('order') }}"><i class="fa fa-home"></i> Order</a></li>
                    <li><a href="{{ url('service') }}"><i class="fa fa-home"></i> Service</a></li>
                    <li><a href="{{ url('transaction') }}"><i class="fa fa-home"></i> Transaction</a></li>
                    <li><a href="{{ url('income') }}"><i class="fa fa-home"></i> Income</a></li>
                    <li><a href="{{ url('outcome') }}"><i class="fa fa-home"></i> Outcome</a></li> --}}

                    <li><a><i class="fa fa-home"></i> General Menu <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ url('home') }}">Home</a></li>
                            <li><a href="{{ url('inventory') }}">Inventory</a></li>
                            <li><a href="{{ url('purchase/create') }}">Purchase</a></li>
                            <li><a href="{{ url('order/create') }}">Order</a></li>
                            <li><a href="{{ url('service/create') }}">Service</a></li>
                            <li><a href="{{ url('transaction/create') }}">Transaction</a></li>
                            <li><a href="{{ url('income') }}">Income</a></li>
                            <li><a href="{{ url('outcome') }}">Outcome</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="menu_section">
                <a href="{{ url('master') }}" ><h3>Master</h3></a>
                <ul class="nav side-menu">
                    {{-- <li><a href="{{ url('location') }}"><i class="fa fa-home"></i> Location</a></li>
                    <li><a href="{{ url('product') }}"><i class="fa fa-home"></i> Product</a></li>
                    <li><a href="{{ url('category') }}"><i class="fa fa-home"></i> Category</a></li>
                    <li><a href="{{ url('customer') }}"><i class="fa fa-home"></i> Customers</a></li>
                    <li><a href="{{ url('supplier') }}"><i class="fa fa-home"></i> Suppliers</a></li> --}}

                     <li><a><i class="fa fa-user-md"></i> Master Menu <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ url('location') }}">Location</a></li>
                            <li><a href="{{ url('product') }}">Product</a></li>
                            <li><a href="{{ url('category') }}">Category</a></li>
                            <li><a href="{{ url('customer') }}">Customers</a></li>
                            <li><a href="{{ url('supplier') }}">Suppliers</a></li>
                            <li><a href="{{ url('user') }}">Employee</a></li>
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
                            <li><a href="{{ url('') }}">Report Inventory</a></li>
                            <li><a href="{{ url('purchase') }}">Report Purchase</a></li>
                            <li><a href="{{ url('order') }}">Report Order</a></li>
                            <li><a href="{{ url('service') }}">Report Service</a></li>
                            <li><a href="{{ url('transaction') }}">Report Transaction</a></li>
                            <li><a href="{{ url('') }}">Report Keuangan Bulanan</a></li>
                            <li><a href="{{ url('') }}">Report Biaya Teknisi</a></li>
                        </ul>
                    </li>
                </ul>
            </div>