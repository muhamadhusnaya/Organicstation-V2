<nav class="sidebar close">
    <header>
        <div class="image-text">
            <span class="image">
                <img src="{{ asset('img/Group 559.png') }}" alt="">
            </span>
            <div class="text header-text">
                <span class="shop">Shop</span>
                <span class="name">Organicstation</span>
            </div>
        </div>
        <i class='bx bx-chevron-right toggle'></i>
    </header>
    <div class="menu-bar">
        <div class="menu">
            <li class="search-box">
                <i class='bx bx-search icon'></i>
                <input type="search" placeholder="Search....">
            </li>
            <ul class="menu-links">
                <li class="nav-link">
                    <a href="{{ url ('admin/dashboard') }}">
                        <i class='bx bx-home-alt icon'></i>
                        <span class="text nav-text">Dashboard</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="{{ url ('admin/category') }}">
                        <i class='bx bx-category-alt icon'></i>
                        <span class="text nav-text">Category</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="{{ url ('admin/product') }}">
                        <i class='bx bx-food-menu icon'></i>
                        <span class="text nav-text">Product</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="{{ url ('admin/orders') }}">
                        <i class='bx bx-cart icon'></i>
                        <span class="text nav-text">Order</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="{{ url ('admin/notification') }}">
                        <i class='bx bx-bell icon'></i>
                        <span class="text nav-text">Notification</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="{{ url ('admin/role') }}">
                        <i class='bx bx-shield-alt-2 icon'></i>
                        <span class="text nav-text">Role</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="{{ url ('admin/setting') }}">
                        <i class='bx bx-cog icon'></i>
                        <span class="text nav-text">Setting</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="{{ url ('admin/users') }}">
                        <i class='bx bx-user icon'></i>
                        <span class="text nav-text">User</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="bottom-content">
            <li class="">
                <a href="">
                    <i class='bx bx-log-out icon'></i>
                    <span class="text nav-text">Logout</span>
                </a>
            </li>
            <li class="mode">
                <div class="moon-sun">
                    <i class='bx bx-moon icon moon'></i>
                    <i class='bx bx-sun icon sun'></i>
                </div>
                <span class="mode-text text">Dark Mode</span>
                <div class="toggle-switch">
                    <span class="switch"></span>
                </div>
            </li>
        </div>
    </div>
</nav>