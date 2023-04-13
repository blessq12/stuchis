@extends('components.front')
@section('content')
    <!-- Start Banner Area  -->
    <x-banner 
        btitle='Рассчитайте стоимость работ онлайн' 
        bdescription='Воспользуйтесь нашим калькуляттором, чтобы рассчитать стоимость работ' 
        bimage='https://www.prorabneva.ru/storage/post_content/October2021/uBCzhCMJOQ2gLDNplzUw.jpg'
    />
    <!-- End Banner Area  -->

    <!-- Start Post List Wrapper  -->
    <div class="axil-post-list-area axil-section-gap bg-color-white">
        <div class="container">
            <div class="row">
                {{-- carpet calculator --}}
                <div class="col-lg-8 col-xl-8">
                    <!-- Start About Area  -->
                    <div class="axil-about-us">
                        <div class="inner">
                            <h3>Воспользуйтесь нашим калькулятором</h3>
                            <ul class="nav nav-tabs calc-tab justify-content-center justify-content-lg-start" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Ковры и покрытия</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Химчистка</button>
                                </li>
                              </ul>
                              <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="py-5">
                                        <x-carpet-calculator/>
                                    </div>
                                </div>
                                <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="py-5">
                                        <x-dry-cleaning-calculator/>
                                    </div>
                                </div>
                              </div>    
                        </div>
                    </div>
                    <!-- End About Area  -->
                </div>
                {{-- dry cleaning calculator --}}
                <div class="col-lg-4 col-xl-4 mt_md--40 mt_sm--40">
                    <!-- Start Sidebar Area  -->
                    <div class="sidebar-inner">

                        {{-- contact widget --}}
                        <x-single-widget stitle='Контактная информация'>
                            <ul class="social-icon md-size justify-content-center">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-slack"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </x-single-widget>
                        {{-- /contact widget --}}
                    </div>
                    <!-- End Sidebar Area  -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Post List Wrapper  -->

    
@endsection