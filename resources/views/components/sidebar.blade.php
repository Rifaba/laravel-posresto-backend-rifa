<div class="main-sidebar sidebar-style-2">
    <id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Pizzeria</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">PZ</a>
        </div>
        <ul class="sidebar-menu">

            <li class="nav-item dropdown">
                <a href="#"
                    class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li class='{{ Request::is('dashboard-general-dashboard') ? 'active' : '' }}'>
                        <a class="nav-link"
                            href="{{ url('dashboard-general-dashboard') }}">General Dashboard</a>
                    </li>

                </ul>
                <ul class="dropdown-menu">
                    <li class=''>
                        <a class="nav-link" href="{{ route('users.index') }}">Users</a>
                    </li>

                </ul>
                <ul class="dropdown-menu">
                    <li class=''>
                        <a class="nav-link" href="{{ route('products.index') }}">Products</a>
                    </li>

                </ul>


            </li>
        </ul>



</div>
