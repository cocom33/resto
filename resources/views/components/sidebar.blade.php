<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="/dashboard">My Dashboard</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown">
                <a href="/dashboard" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">Menu</li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"
                    data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Product</span></a>
                <ul class="dropdown-menu">
                    <li class="">
                        <a class="nav-link" href="{{ route('product.index') }}">List Products</a>
                    </li>
                    <li class="">
                        <a class="nav-link" href="{{ route('product.create') }}">Create Products</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"
                    data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Category</span></a>
                <ul class="dropdown-menu">
                    <li class="">
                        <a class="nav-link" href="{{ route('category.index') }}">List Category</a>
                    </li>
                    <li class="">
                        <a class="nav-link" href="{{ route('category.create') }}">Create Category</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"
                    data-toggle="dropdown"><i class="fas fa-columns"></i> <span>User</span></a>
                <ul class="dropdown-menu">
                    <li class="">
                        <a class="nav-link" href="{{ route('user.index') }}">List User</a>
                    </li>
                    <li class="">
                        <a class="nav-link" href="{{ route('user.create') }}">Create User</a>
                    </li>
                </ul>
            </li>
        </ul>
    </aside>
</div>
