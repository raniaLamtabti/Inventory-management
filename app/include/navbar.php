

<nav class="navbar">
    <ul class="navbar-nav">
        <li class="nav-link">
            <a href="../other/dashboard.php" class="<?php if ($active == 'dashboard') echo "navLinkActive"; ?>">
                <svg class="icon">
                    <use href="../../../../public/assets/icones/svg_icones.svg#dashboard" />
                </svg>
                <p class="link">Dashboard</p>
            </a>
        </li>
        <li class="nav-link">
            <a href="../product/ProductsList.php" class="<?php if ($active == 'product') echo "navLinkActive"; ?>">
                <svg class="icon">
                    <use href="../../../../public/assets/icones/svg_icones.svg#box" />
                </svg>
                <p class="link">Products</p>
            </a>
        </li>
        <li class="nav-link">
            <a href="../store/StoresList.php"  class="<?php if ($active == 'store') echo "navLinkActive"; ?>">
                <svg class="icon">
                    <use href="../../../../public/assets/icones/svg_icones.svg#store" />
                </svg>
                <p class="link">Stores</p>
            </a>
        </li>
        <li class="nav-link">
            <a href="categories.html"  class="<?php if ($active == 'category') echo "navLinkActive"; ?>">
                <svg xmlns="http://www.w3.org/2000/svg" id="cat" viewBox="0 0 314 313" class="icon">
                    <g id="Layer_2" data-name="Layer 2">
                        <g id="Layer_1-2" data-name="Layer 1">
                        <path d="M165,164H286.3A27.7,27.7,0,0,1,314,191.7V285.3A27.7,27.7,0,0,1,286.3,313H192.7A27.7,27.7,0,0,1,165,285.3V164A0,0,0,0,1,165,164Z"/>
                        <path d="M27.7,164H121.3A27.7,27.7,0,0,1,149,191.7V285.3A27.7,27.7,0,0,1,121.3,313H0a0,0,0,0,1,0,0V191.7A27.7,27.7,0,0,1,27.7,164Z" transform="translate(149 477) rotate(-180)"/>
                        <path d="M192.7,0H286.3A27.7,27.7,0,0,1,314,27.7V121.3A27.7,27.7,0,0,1,286.3,149H165a0,0,0,0,1,0,0V27.7A27.7,27.7,0,0,1,192.7,0Z"/>
                        <path d="M0,0H121.3A27.7,27.7,0,0,1,149,27.7V121.3A27.7,27.7,0,0,1,121.3,149H27.7A27.7,27.7,0,0,1,0,121.3V0A0,0,0,0,1,0,0Z" transform="translate(149 149) rotate(180)"/>
                        </g>
                    </g>
                    </svg>
                <p class="link">Categories</p>
            </a>
        </li>
        <li class="nav-link logOut">
            <a href="login.html">
                <svg class="icon">
                    <use href="../../../public/assets/icones/svg_icones.svg#sign-out" />
                </svg>
                <p class="smallLinks">Logout</p>
            </a>
        </li>
    </ul>
</nav>