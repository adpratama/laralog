<div class="container-fluid">
    <a href="index.html" class="css-logo">
        <!-- <img src=" {{ asset('landing-page/img/logo_laravel.svg') }} " alt="" width="35px" height="35px">         -->

        <a href="index.html" class="css-logo">LaraLog<span>.</span></a>
        <!-- <iconify-icon icon="mdi:laravel"></iconify-icon> -->
    </a>
    <a href="#" class="css-burger-menu visible-xs"><i>Menu</i></a>
    <div class="mobile-menu-overlay"></div>
    <nav role="navigation" class="css-nav hidden-xs">
        <ul class="css-main-nav">
            <li class="active"><a href="index.html">Home</a></li>
            <li>
                <a href="#about" class="css-scroll-down js-next">About Us</a>
            </li>
            <li>
                <a href="#gallery" class="css-scroll-down js-next">Gallery</a>
            </li>
            <li>
                <a href="#programs" class="css-scroll-down js-next">Services</a>
            </li>
            <li>
                <a href="#contact" class="css-scroll-down js-next">Contact</a>
            </li>
        </ul>
        <ul class="css-header-social hidden-xs">
            <li>
                <a href="#">
                    <iconify-icon icon="fa:twitter-square"></iconify-icon>
                </a>
            </li>
            <li>
                <a href="https://www.facebook.com/Sobat-Selamat-114279171286523/" target="_blank">
                    <iconify-icon icon="fa-brands:facebook"></iconify-icon>
                </a>
            </li>
            <li>
                <a href="https://www.instagram.com/sobat_selamat/" target="_blank">
                    <iconify-icon icon="fa:instagram"></iconify-icon>
                </a>
            </li>

            @if (Route::has('login'))

            <li>
                @auth
                <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline" alt="Dashboard">
                    <iconify-icon icon="majesticons:door-enter-line">Dashboard</iconify-icon>
                </a>
                @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}"
                    class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif
                @endauth
            </li>
            @endif
        </ul>
        <ul class="css-main-nav">

        </ul>
        <div class="extra-text visible-xs">
            <a href="#" class="css-burger-menu"><i>Menu</i></a>
            <h5>Connect With Me</h5>
            <ul class="social-buttons">
                <li>
                    <a href="#">
                        <iconify-icon icon="fa:twitter-square"></iconify-icon>
                    </a>
                </li>
                <li>
                    <a href="https://www.facebook.com/Sobat-Selamat-114279171286523/" target="_blank">
                        <iconify-icon icon="fa-brands:facebook"></iconify-icon>
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/sobat_selamat/" target="_blank">
                        <iconify-icon icon="fa:instagram"></iconify-icon>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</div>
