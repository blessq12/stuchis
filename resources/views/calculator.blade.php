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
                                  <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Мягкая мебель</button>
                                </li>
                              </ul>
                              <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="py-5">
                                        <form action="#" id="carpet-form">
                                            <div class="row">
                                                <div class="col-12 col-md-6 col-lg-6">
                                                    <div class="form-group">
                                                        <label for="">Введите длину:</label>
                                                        <input step="any" name="lenght" type="number" placeholder="Длина в метрах, пример ( 1.2 )" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6 col-lg-6">
                                                    <div class="form-group">
                                                        <label for="">Введите ширину:</label>
                                                        <input step="any" name="width" type="number" class="form-control" placeholder="Ширина в метрах, пример ( 1.5 )">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="">Выберите тип ковра</label>
                                                        <select name="" id="" class="form-control" style="border-radius: 47px">
                                                            <option value="">Вискоза</option>
                                                            <option value="">Шегги</option>
                                                            <option value="">Option 3</option>
                                                            <option value="">Option 4</option>
                                                            <option value="">Option 5</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="">Выберите тип ковра</label>
                                                        <select name="" id="" class="form-control" style="border-radius: 47px">
                                                            <option value="">2-5 мм</option>
                                                            <option value="">5-7 мм</option>
                                                            <option value="">7-10 мм</option>
                                                            <option value="">свыше 10 мм</option>
                                                            <option value="">Option 5</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="d-block d-md-flex d-lg-flex justify-content-start btn-group">
                                                        <button type="submit" class="axil-button button-rounded hover-flip-item-wrapper mb-3">Отправить данные</button>
                                                        <button type="reset" class="axil-button button-rounded hover-flip-item-wrapper">Очистить форму</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="py-5">
                                        <form action="#">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="">Введите длину</label>
                                                        <input name='' type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="">Введите длину</label>
                                                        <input name='' type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="">Выберите тип ковра</label>
                                                        <select name="" id="" class="form-control" style="border-radius: 47px">
                                                            <option value="">Option 1</option>
                                                            <option value="">Option 2</option>
                                                            <option value="">Option 3</option>
                                                            <option value="">Option 4</option>
                                                            <option value="">Option 5</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="">Выберите тип ковра</label>
                                                        <select name="" id="" class="form-control" style="border-radius: 47px">
                                                            <option value="">Option 1</option>
                                                            <option value="">Option 2</option>
                                                            <option value="">Option 3</option>
                                                            <option value="">Option 4</option>
                                                            <option value="">Option 5</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                              </div>    
                        </div>
                    </div>
                    <!-- End About Area  -->
                </div>
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