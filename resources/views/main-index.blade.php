@extends('components.front')

@section('content')
    <!-- Start Banner Area -->
    <h1 class="d-none">Home Default Blog</h1>
    <div class="slider-area bg-color-grey">
        <div class="axil-slide slider-style-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="slider-activation axil-slick-arrow">
                            {{-- Single slider --}}
                            <div class="content-block">
                                <!-- Start Post Thumbnail  -->
                                <div class="post-thumbnail">
                                    <a href="{{ route('main.kovri') }}" style="max-height: 600px">
                                        <img src="{{ asset('/assets/images/banner-1.jpg') }}" alt="Чистка и стирка ковров">
                                    </a>
                                </div>
                                <!-- End Post Thumbnail  -->
                                <!-- Start Post Content  -->
                                <div class="post-content">
                                    <div class="post-cat">
                                        <div class="post-cat-list">
                                            <a class="hover-flip-item-wrapper" href="{{ route('main.kovri') }}">
                                                <span class="hover-flip-item">
                                                    <span data-text="Чистка и стирка ковров">Чистка и стирка ковров</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <h2 class="title">
                                        <a href="{{ route('main.kovri') }}">
                                            Полный цикл услуг по стирке ковров и покровых покрытий
                                        </a>
                                    </h2>
                                    <!-- Post Meta  -->
                                    <div class="post-meta-wrapper with-button">
                                        <div class="read-more-button cerchio">
                                            <a class="axil-button button-rounded hover-flip-item-wrapper" href="{{ route('main.kovri') }}">
                                                <span class="hover-flip-item">
                                                    <span data-text="Подробнее">Подробнее</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Post Content  -->
                            </div>
                            {{-- /Single slider --}}
                            {{-- Single slider --}}
                            <div class="content-block">
                                <!-- Start Post Thumbnail  -->
                                <div class="post-thumbnail">
                                    <a href="{{ route('main.mebel') }}" style="max-height: 600px">
                                        <img src="{{ asset('/assets/images/banner-2.jpg') }}" alt="Химчистка мягкой мебели">
                                    </a>
                                </div>
                                <!-- End Post Thumbnail  -->
                                <!-- Start Post Content  -->
                                <div class="post-content">
                                    <div class="post-cat">
                                        <div class="post-cat-list">
                                            <a class="hover-flip-item-wrapper" href="{{ route('main.mebel') }}">
                                                <span class="hover-flip-item">
                                                    <span data-text="Химчистка мягкой мебели и пр.">Химчистка мягкой мебели и пр.</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <h2 class="title">
                                        <a href="{{ route('main.mebel') }}">
                                            Полный цикл улуг по химчистке мягкой мебели и предметов инттерьера
                                        </a>
                                    </h2>

                                    <!-- Post Meta  -->
                                    <div class="post-meta-wrapper with-button">
                                        <div class="read-more-button cerchio">
                                            <a class="axil-button button-rounded hover-flip-item-wrapper" href="{{ route('main.mebel') }}">
                                                <span class="hover-flip-item">
                                                    <span data-text="Подробнее">Подробнее</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Post Content  -->
                            </div>
                            {{-- /Single slider --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner Area -->

    <!-- Start Featured Area  -->
    <div class="axil-featured-post axil-section-gap bg-color-grey">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2 class="title">Посмотритте полный перечень наших услуг</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                {{-- Start Single Post --}}
                <div class="col-lg-6 col-xl-6 col-md-12 col-12 mt--30">
                    <div class="content-block content-direction-column axil-control is-active post-horizontal thumb-border-rounded">
                        <div class="post-content">
                            <div class="post-cat">
                                <div class="post-cat-list">
                                    <a class="hover-flip-item-wrapper" href="{{ route('main.kovri') }}">
                                        <span class="hover-flip-item">
                                            <span data-text="Ковры и ковровые покрытия">Ковры и ковровые покрытия</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <h4 class="title">
                                <a href="{{ route('main.kovri') }}">
                                    Пречень услуг, цены и дополнительные услуги
                                </a>
                            </h4>
                        </div>
                        <div class="post-thumbnail">
                            <a href="{{ route('main.kovri') }}">
                                <img src="{{ asset('/assets/images/kovri.jpg') }}" alt="Ковры и ковровые покрытия">
                            </a>
                        </div>
                    </div>
                </div>
                {{-- /Start Single Post --}}
                {{-- Start Single Post --}}
                <div class="col-lg-6 col-xl-6 col-md-12 col-12 mt--30">
                    <div class="content-block content-direction-column axil-control is-active post-horizontal thumb-border-rounded">
                        <div class="post-content">
                            <div class="post-cat">
                                <div class="post-cat-list">
                                    <a class="hover-flip-item-wrapper" href="{{ route('main.mebel') }}">
                                        <span class="hover-flip-item">
                                            <span data-text="Мебель и предметы интерьера">Мебель и предметы интерьера</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <h4 class="title">
                                <a href="{{ route('main.mebel') }}">
                                    Мягкая мебель, предметы интерьера, мягкие игрушки и пр.
                                </a>
                            </h4>
                        </div>
                        <div class="post-thumbnail">
                            <a href="{{ route('main.mebel') }}">
                                <img src="{{ asset('/assets/images/sofa.jpg') }}" alt="Мягкая мебель и предметы интерьера">
                            </a>
                        </div>
                    </div>
                </div>
                {{-- /Start Single Post --}}
            </div>
        </div>
    </div>
    <!-- End Featured Area  -->

    <!-- Start Tab Area  -->
    <div class="axil-tab-area axil-section-gap bg-color-white">
        <div class="wrapper">
            <x-fast-links/>
        </div>
    </div>
    <!-- End Tab Area  -->

    <!-- Start Categories List  -->
    <div class="axil-categories-list axil-section-gap bg-color-grey">
        <div class="container">
            <div class="row align-items-center mb--30">
                <div class="col-lg-8 col-md-8 col-sm-8 col-12">
                    <div class="section-title">
                        <h2 class="title">Коротко о том, почему выбирают нас</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Start List Wrapper  -->
                    <div class="list-categories d-flex flex-wrap">

                        <!-- Start Single Category  -->
                        <div class="single-cat">
                            <div class="inner">
                                <a href="#">
                                    <div class="thumbnail">
                                        <img src="{{ asset('/assets/images/thumbs/1.jpg') }}" alt="Качество выполнения">
                                    </div>
                                    <div class="content">
                                        <h5 class="title">Качество выполнения</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- End Single Category  -->

                        <!-- Start Single Category  -->
                        <div class="single-cat">
                            <div class="inner">
                                <a href="#">
                                    <div class="thumbnail">
                                        <img src="{{ asset('/assets/images/thumbs/2.jpg') }}" alt="Современное оборудование">
                                    </div>
                                    <div class="content">
                                        <h5 class="title">Современное оборудование</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- End Single Category  -->

                        <!-- Start Single Category  -->
                        <div class="single-cat">
                            <div class="inner">
                                <a href="#">
                                    <div class="thumbnail">
                                        <img src="{{ asset('/assets/images/thumbs/3.jpg') }}" alt="Бесплатный вывоз/доставка">
                                    </div>
                                    <div class="content">
                                        <h5 class="title">Бесплатный вывоз/доставка</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- End Single Category  -->

                        <!-- Start Single Category  -->
                        <div class="single-cat">
                            <div class="inner">
                                <a href="#">
                                    <div class="thumbnail">
                                        <img src="{{ asset('/assets/images/thumbs/4.jpg') }}" alt="Глубока чистка изделий">
                                    </div>
                                    <div class="content">
                                        <h5 class="title">Глубока чистка изделий</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- End Single Category  -->

                        <!-- Start Single Category  -->
                        <div class="single-cat">
                            <div class="inner">
                                <a href="#">
                                    <div class="thumbnail">
                                        <img src="{{ asset('/assets/images/thumbs/5.jpg') }}" alt="Безопасная сделка">
                                    </div>
                                    <div class="content">
                                        <h5 class="title">Безопасная сделка</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- End Single Category  -->

                        <!-- Start Single Category  -->
                        <div class="single-cat">
                            <div class="inner">
                                <a href="#">
                                    <div class="thumbnail">
                                        <img src="{{ asset('/assets/images/thumbs/6.jpg') }}" alt="Безопасная сделка">
                                    </div>
                                    <div class="content">
                                        <h5 class="title">Любые загрязнения</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- End Single Category  -->

                    </div>
                    <!-- Start List Wrapper  -->
                </div>
            </div>
        </div>
    </div>
    <!-- Start Categories List  -->

@endsection