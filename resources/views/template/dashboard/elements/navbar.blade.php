<div class="l-navbar" id="nav-bar">
    <nav class="nav-main">
        <div>
            <a href="#" class="nav_logo">
                {{-- <i class='bx bx-layer nav_logo-icon'></i> --}}
                <img src="assets/images/Resources Logo/Logo1.png" alt="" width="20px">
                <span class="nav_logo-name">Rony Boutique</span>
            </a>

            <div class="nav_list">
                <a href="#" class="nav_link @yield("usuarios")">
                    <i class='bx bx-user nav_icon'></i>
                    <span class="nav_name">Usuarios</span>
                </a>
                <a href="#" class="nav_link @yield("boutique")">
                    <i class='bx bxs-t-shirt nav_icon'></i>
                    <span class="nav_name">Boutique</span>
                </a>
                <a href="#" class="nav_link @yield("ventas")">
                    <i class='bx bx-money-withdraw nav_icon'></i>
                    <span class="nav_name">Ventas</span>
                </a>
                {{-- <a href="#" class="nav_link">
                    <i class='bx bx-bookmark nav_icon'></i>
                    <span class="nav_name">Bookmark</span>
                </a>
                <a href="#" class="nav_link">
                    <i class='bx bx-folder nav_icon'></i>
                    <span class="nav_name">Files</span>
                </a>
                <a href="#" class="nav_link">
                    <i class='bx bx-bar-chart-alt-2 nav_icon'></i>
                    <span class="nav_name">Stats</span>
                </a> --}}
            </div>
        </div>
        <a href="#" class="nav_link">
            <i class='bx bx-log-out nav_icon'></i>
            <span class="nav_name">Cerrar Sesión</span>
        </a>
    </nav>
</div>