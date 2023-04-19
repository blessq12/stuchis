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
                                    <a href="" style="max-height: 600px">
                                        <img src="{{ asset('/assets/images/banner-1.jpg') }}" alt="В поддержку семей и участников СВО">
                                    </a>
                                </div>
                                <!-- End Post Thumbnail  -->
                                <!-- Start Post Content  -->
                                <div class="post-content">
                                    <div class="post-cat">
                                        <div class="post-cat-list">
                                            <a class="hover-flip-item-wrapper" href="">
                                                <span class="hover-flip-item" style="font-size:16px!important;">
                                                    <span data-text="В поддержку семей и участников СВО">В поддержку семей и участников СВО</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <h2 class="title">
                                        <a href="">
                                            Мы запускаем акцию и предоставляем скидку на все наши услуги в период её проведения
                                        </a>
                                    </h2>
                                    <!-- Post Meta  -->
                                    <div class="post-meta-wrapper with-button">
                                        <div class="read-more-button cerchio">
                                            <a class="axil-button button-rounded hover-flip-item-wrapper" href="">
                                                <span class="hover-flip-item" >
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
                                    <a href="" style="max-height: 600px">
                                        <img src="{{ asset('/assets/images/banner-2.jpg') }}" alt="Стирка и чистка ковров">
                                    </a>
                                </div>
                                <!-- End Post Thumbnail  -->
                                <!-- Start Post Content  -->
                                <div class="post-content">
                                    <div class="post-cat">
                                        <div class="post-cat-list">
                                            <a class="hover-flip-item-wrapper" href="">
                                                <span class="hover-flip-item" style="font-size:16px!important;">
                                                    <span data-text="фывфыв">фывфыв</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <h2 class="title">
                                        <a href="">
                                            Полный цикл улуг по химчистке мягкой мебели и предметов инттерьера
                                        </a>
                                    </h2>

                                    <!-- Post Meta  -->
                                    <div class="post-meta-wrapper with-button">
                                        <div class="read-more-button cerchio">
                                            <a class="axil-button button-rounded hover-flip-item-wrapper" href="">
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
    {{-- info block area --}}
    <div class="axil-section-gap bg-color-grey position-relative info-block-gap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="info-block" style="
                        border-left:15px solid #3858F6;
                        border-radius:10px;
                        min-height:100px;
                        padding: 10px 30px;
                        ">
                        <h2>Здоровье и домашняя чистка ковров</h2>
                        <p>
                            Николас Бакалар опубликовал в 2003 году научное исследование, в котором он утверждал, что  <b>вирус</b> гриппа, также известный как «желудочный грипп», <b>может жить в течение месяца и больше на грязном ковре в доме.</b>
                            Это еще одна причина, почему <b>вы должны следить за чистотой ковровых покрытий.</b>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end info block area --}}
    <!-- Start Featured Area  -->
    <div class="axil-featured-post axil-section-gap bg-color-grey">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2 class="title">Кому будут полезны наши услуги</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                {{-- Start Single Post --}}
                <div class="col-lg-4 col-xl-4 col-md-6 col-12 mt--30">
                    <div class="block-to-whom">
                        <div class="content">
                            <h3>Семьям с маленькими детьми</h3>
                            <p>
                                Пыль - это серьезный провокатор появления у детей аллергии, даже если её не было
                            </p>
                        </div>
                        <div class="img" style="background: url('{{ asset('/assets/images/to-whom-1.jpg') }}')"></div>
                    </div>
                </div>
                {{-- /Start Single Post --}}
                {{-- Start Single Post --}}
                <div class="col-lg-4 col-xl-4 col-md-6 col-12 mt--30">
                    <div class="block-to-whom">
                        <div class="content">
                            <h3>Для тех у кого дома есть лучший друг</h3>
                            <p>
                                Помимо хороших эмоций, наши питомцы оставляют много шерсти и прочего на полу
                            </p>
                        </div>
                        <div class="img" style="background: url('{{ asset('/assets/images/to-whom-2.jpg') }}')"></div>
                    </div>
                </div>
                {{-- /Start Single Post --}}
                {{-- Start Single Post --}}
                <div class="col-lg-4 col-xl-4 col-md-6 col-12 mt--30">
                    <div class="block-to-whom">
                        <div class="content">
                            <h3>Тем, кто любит и заботится о родителях</h3>
                            <p>
                                Родители оберегали нас, когда мы были маленькими, сейчас наше время проявить заботу
                            </p>
                        </div>
                        <div class="img" style="background: url('{{ asset('/assets/images/to-whom-3.jpg') }}')"></div>
                    </div>
                </div>
                {{-- /Start Single Post --}}
                {{-- Start Single Post --}}
                <div class="col-lg-4 col-xl-4 col-md-6 col-12 mt--30">
                    <div class="block-to-whom">
                        <div class="content">
                            <h3>У кого только закончился ремонт</h3>
                            <p>
                                Бесконечно много пыли в процессе ремонта поднимается в воздух и оседает
                            </p>
                        </div>
                        <div class="img" style="background: url('{{ asset('/assets/images/to-whom-4.jpg') }}')"></div>
                    </div>
                </div>
                {{-- /Start Single Post --}}
                {{-- Start Single Post --}}
                <div class="col-lg-4 col-xl-4 col-md-6 col-12 mt--30">
                    <div class="block-to-whom">
                        <div class="content">
                            <h3>Кто совсем недавно переехал</h3>
                            <p>
                                Мало кто захочет после перетаскивания вещей начинать новую жизнь в пыли прошлого
                            </p>
                        </div>
                        <div class="img" style="background: url('{{ asset('/assets/images/to-whom-5.jpg') }}')"></div>
                    </div>
                </div>
                {{-- /Start Single Post --}}
                {{-- Start Single Post --}}
                <div class="col-lg-4 col-xl-4 col-md-6 col-12 mt--30">
                    <div class="block-to-whom">
                        <div class="content">
                            <h3>Для тех, кому не безразлично его здоровье</h3>
                            <p>
                                Мы так привыкли к быту в вещах, что перестали воспринимать реальность угроз здоровью
                            </p>
                        </div>
                        <div class="img" style="background: url('{{ asset('/assets/images/to-whom-6.jpg') }}')"></div>
                    </div>
                </div>
                {{-- /Start Single Post --}}
            </div>
        </div>
    </div>
    <!-- End Featured Area  -->

    <!-- Start Tab Area  -->
    <div class="axil-tab-area axil-section-gap bg-color-white cta-gap" style="background: url('{{ asset('/assets/images/cta-gap-background.jpg') }}')">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-9 col-md-9 col-12">
                    <div class="section-title">
                        <h2 class="title">Не упустите возможность получить скидку <b>10%</b></h2>
                        <p style="max-width: 60%">Мы ценим наших клиентов и поэтому при заказе через сайт впервые вы получаете бесплатную консультацию, выезд для замера, а также мы берем на себя всю логистику от вашей двери и обратно!</p>
                    </div>
                </div>
                <div class="col-12 col-md-3 col-lg-3 text-left text-md-center text-lg-center">
                    <a href="javacsript:void(0)"
                       class="axil-button button-rounded hover-flip-item-wrapper cta-button"
                       onclick="alert('button pressed cta')"
                       >
                       <span>
                            Получить скидку!
                       </span>
                    </a>
                </div>
            </div>
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