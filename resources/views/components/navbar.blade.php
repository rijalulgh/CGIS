<style>
    .header {
        --background-color: rgba(0, 0, 0, 1);
        --heading-color: #ffffff;
        color: var(--default-color);
        background-color: var(--background-color);
        padding: 20px 0;
        transition: all 0.5s;
        z-index: 997;
    }

    .header .logo {
        line-height: 1;
    }

    .header .logo img {
        max-height: 32px;
        margin-right: 8px;
    }

    .header .logo h1 {
        font-size: 30px;
        margin: 0;
        font-weight: 700;
        color: var(--heading-color);
    }

    .scrolled .header {
        box-shadow: 0px 0 18px rgba(0, 0, 0, 0.1);
    }

    /* Global Header on Scroll
------------------------------*/
    .scrolled .header {
        --background-color: rgba(42, 44, 57, 0.9);
    }
</style>
<header class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

        <a href="index.html" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1 class="sitename">Selecao</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="#hero" class="active">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#team">Team</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li class="dropdown"><a href="#"><span>Dropdown</span> <i
                            class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="#">Dropdown 1</a></li>
                        <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i
                                    class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="#">Deep Dropdown 1</a></li>
                                <li><a href="#">Deep Dropdown 2</a></li>
                                <li><a href="#">Deep Dropdown 3</a></li>
                                <li><a href="#">Deep Dropdown 4</a></li>
                                <li><a href="#">Deep Dropdown 5</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Dropdown 2</a></li>
                        <li><a href="#">Dropdown 3</a></li>
                        <li><a href="#">Dropdown 4</a></li>
                    </ul>
                </li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

    </div>
</header>