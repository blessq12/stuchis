<!-- Start Header -->
<header class="header axil-header  header-light header-sticky ">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-3 col-12">
                <div class="logo">
                    <a href="{{ route('main.index') }}" class="mb-4 mb-md-0 mb-lg-0 d-flex align-items-center justify-content-center justify-content-md-start justify-content-lg-start">
                        <img class="logo" src="/assets/images/logo.svg" alt="{{ env('APP_NAME') }}">
                        <div class="d-block px-3 text-uppercase logo-text">
                            <span class="d-block" style="
                                color:#1c1c1c;
                                font-family: inherit;
                                font-weight:800;
                                line-height:20px;
                                font-size:16px;
                                text-align:left;
                                ">
                                Студия<br>
                                Чистоты
                            </span>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-xl-6 d-none d-xl-block">
                <div class="mainmenu-wrapper">
                    <nav class="mainmenu-nav">
                        <!-- Start Mainmanu Nav -->
                        <ul class="mainmenu">
                            <li class="vertical-nav-item">
                                <a href="{{ route('main.index') }}">Главная</a>
                            </li>
                            <li class="menu-item-has-children megamenu-wrapper"><a href="javascript:void(0)">Услуги</a>
                                <ul class="megamenu-sub-menu">
                                    <li class="megamenu-item">
                                        <!-- Start Verticle Nav  -->
                                        <div class="axil-vertical-nav">
                                            <ul class="vertical-nav-menu">
                                                <li class="vertical-nav-item active">
                                                    <a class="hover-flip-item-wrapper" href="#tab1">
                                                        <span class="hover-flip-item">
                                                            <span data-text="Ковры и ковровые покрытия">Ковры и ковровые покрытия</span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="vertical-nav-item">
                                                    <a class="hover-flip-item-wrapper" href="#tab2">
                                                        <span class="hover-flip-item">
                                                            <span data-text="Мягкая мебель и игрушки">Мягкая мебель и игрушки</span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="vertical-nav-item">
                                                    <a class="hover-flip-item-wrapper" href="#tab3">
                                                        <span class="hover-flip-item">
                                                            <span data-text="Калькулятор стоимости">Калькулятор стоимости</span>
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- Start Verticle Nav  -->

                                        <!-- Start Verticle Menu  -->
                                        <div class="axil-vertical-nav-content">
                                            <!-- Start One Item  -->
                                            <div class="axil-vertical-inner tab-content" id="tab1" style="display: block;">
                                                <div class="axil-vertical-single">
                                                    <div class="row">

                                                        <!-- Start Post List  -->
                                                        <div class="col-lg-12">
                                                            <div class="row align-items-center">
                                                                <div class="col-6">
                                                                    <a href="{{ route('main.kovri') }}">
                                                                        <img class="rounded" src="{{ asset('/assets/images/mnu-kovri.jpg') }}" alt="Стирка ковров и ковровых покрытий">
                                                                    </a>
                                                                </div>
                                                                <div class="col-6">
                                                                    <h4>Стирка ковров и ковровых покрытий</h4>
                                                                    <p class="">
                                                                        Полный цикл услуг по стирке и чистке ковров и ковровых покрытий. Удаление сложных и стойких загрязнений, антибактериальная обработка. 
                                                                        Работы проводим как с выездом на адрес, так и с вывозом в цех.
                                                                    </p>
                                                                    <a href="{{ route('main.kovri') }}" class="axil-button button-rounded hover-flip-item-wrapper">Подробнее об услуге</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Post List  -->

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End One Item  -->

                                            <!-- Start One Item  -->
                                            <div class="axil-vertical-inner tab-content" id="tab2">
                                                <div class="axil-vertical-single">
                                                    <div class="row">

                                                        <div class="col-lg-12">
                                                            <div class="row align-items-center">
                                                                <div class="col-6">
                                                                    <a href="{{ route('main.mebel') }}">
                                                                        <img class="rounded" src="{{ asset('/assets/images/mnu-mebel.jpg') }}" alt="Химчистка мягкой мебели и предметов интерьера">
                                                                    </a>
                                                                </div>
                                                                <div class="col-6">
                                                                    <h4>Химчистка мягкой мебели и предметов интерьера</h4>
                                                                    <p class="">
                                                                        Полный цикл услуг по химчистке и чистке мягкой мебели и не только. Удаление сложных и стойких загрязнений, антибактериальная обработка. 
                                                                        Как правило, работы проводим по адресу клиента.
                                                                    </p>
                                                                    <a href="{{ route('main.mebel') }}" class="axil-button button-rounded hover-flip-item-wrapper">Подробнее об услуге</a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End One Item  -->

                                            <!-- Start One Item  -->
                                            <div class="axil-vertical-inner tab-content" id="tab3">
                                                <div class="axil-vertical-single">
                                                    <div class="row">

                                                        <div class="col-lg-12">
                                                            <div class="row align-items-center">
                                                                <div class="col-6">
                                                                    <a href="{{ route('main.calculator') }}">
                                                                        <img class="rounded" src="{{ asset('/assets/images/calc-menu.jpg') }}" alt="Рассчитать предварительную стоимость стало проще!">
                                                                    </a>
                                                                </div>
                                                                <div class="col-6">
                                                                    <h4>Рассчитать предварительную стоимость стало проще!</h4>
                                                                    <p class="">
                                                                        Для подсчета предварительной стоимости на наши услуги - воспользуйтесь нашим онлайн калькулятором.

                                                                    </p>
                                                                    <a href="{{ route('main.calculator') }}" class="axil-button button-rounded hover-flip-item-wrapper">Перейти к рассчету</a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End One Item  -->

                                        </div>
                                        <!-- End Verticle Menu  -->
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#">Контакты</a></li>
                        </ul>
                        <!-- End Mainmanu Nav -->
                    </nav>
                </div>
            </div>

            <div class="col-xl-3 col-lg-8 col-md-8 col-sm-9 col-12">
                <div class="header-search text-end d-flex align-items-center">
                    <form class="header-search-form d-sm-block d-none">
                        <div class="axil-search form-group">
                            <button type="submit" class="search-button"><i class="fal fa-search"></i></button>
                            <input type="text" class="form-control" placeholder="Поиск">
                        </div>
                    </form>
                    <div class="mobile-search-wrapper d-sm-none d-block">
                        <button class="search-button-toggle"><i class="fal fa-search"></i></button>
                        <form class="header-search-form">
                            <div class="axil-search form-group">
                                <button type="submit" class="search-button"><i class="fal fa-search"></i></button>
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                        </form>
                    </div>
                    <ul class="metabar-block">
                        <li class="icon"><a href="#"><i class="fas fa-bookmark"></i></a></li>
                        <li class="icon"><a href="#"><i class="fas fa-bell"></i></a></li>
                        <li><a href="#"><img src="assets/images/others/author.png" alt="Author Images"></a></li>
                    </ul>
                    <!-- Start Hamburger Menu  -->
                    <div class="hamburger-menu d-block d-xl-none">
                        <div class="hamburger-inner">
                            <div class="icon"><i class="fal fa-bars"></i></div>
                        </div>
                    </div>
                    <!-- End Hamburger Menu  -->
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Start Header -->

<!-- Start Mobile Menu Area  -->
<div class="popup-mobilemenu-area">
    <div class="inner">
        <div class="mobile-menu-top">
            <div class="logo">
                <a href="index.html">
                    <img class="dark-logo" src="assets/images/logo/logo-black.png" alt="Logo Images">
                    <img class="light-logo" src="assets/images/logo/logo-white2.png" alt="Logo Images">
                </a>
            </div>
            <div class="mobile-close">
                <div class="icon">
                    <i class="fal fa-times"></i>
                </div>
            </div>
        </div>
        <ul class="mainmenu">
            <li class="menu-item-has-children"><a href="#">Home</a>
                <ul class="axil-submenu">
                    <li><a href="index.html">Home Default</a></li>
                    <li><a href="home-creative-blog.html">Home Creative Blog</a></li>
                    <li><a href="home-seo-blog.html">Home Seo Blog</a></li>
                    <li><a href="home-tech-blog.html">Home Tech Blog</a></li>
                    <li><a href="home-lifestyle-blog.html">Home Lifestyle Blog</a></li>
                </ul>
            </li>
            <li class="menu-item-has-children"><a href="#">Categories</a>
                <ul class="axil-submenu">
                    <li><a href="post-details.html">Accessibility</a></li>
                    <li><a href="post-details.html">Android Dev</a></li>
                    <li><a href="post-details.html">Accessibility</a></li>
                    <li><a href="post-details.html">Android Dev</a></li>
                </ul>
            </li>
            <li class="menu-item-has-children"><a href="#">Post Format</a>
                <ul class="axil-submenu">
                    <li><a href="post-format-standard.html">Post Format Standard</a></li>
                    <li><a href="post-format-video.html">Post Format Video</a></li>
                    <li><a href="post-format-gallery.html">Post Format Gallery</a></li>
                    <li><a href="post-format-text.html">Post Format Text Only</a></li>
                    <li><a href="post-layout-1.html">Post Layout One</a></li>
                    <li><a href="post-layout-2.html">Post Layout Two</a></li>
                    <li><a href="post-layout-3.html">Post Layout Three</a></li>
                    <li><a href="post-layout-4.html">Post Layout Four</a></li>
                    <li><a href="post-layout-5.html">Post Layout Five</a></li>
                </ul>
            </li>
            <li class="menu-item-has-children"><a href="#">Pages</a>
                <ul class="axil-submenu">
                    <li><a href="post-list.html">Post List</a></li>
                    <li><a href="archive.html">Post Archive</a></li>
                    <li><a href="author.html">Author Page</a></li>
                    <li><a href="about.html">About Page</a></li>
                    <li><a href="maintenance.html">Maintenance</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                </ul>
            </li>
            <li><a href="404.html">404 Page</a></li>
            <li><a href="contact.html">Contact Us</a></li>
        </ul>
        <div class="buy-now-btn">
            <a href="#">Buy Now <span class="badge">$15</span></a>
        </div>
    </div>
</div>
<!-- End Mobile Menu Area  -->