@extends('components.front')
@section('content')
    <!-- Start Banner Area  -->
    <x-banner 
        btitle='Ковры и ковровые покрытия' 
        bdescription='За год ковер накапливает около 3 кг пыли! Поэтому не забывайте, что помимо регулярной чистки вакуумным пылесосом, необходимо раз в год подвергать изделие химической чистке
        в условиях профессионалов.' 
        bimage='/assets/images/banner-kovri.jpg'
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
                            <h3>The Professional Publishing Platform</h3>
                            <p>Aenean consectetur massa quis sem volutpat, a condimentum tortor pretium. Cras id ligula consequat, sagittis nulla at, sollicitudin lorem. Orci varius natoque penatibus et magnis dis parturient montes.</p>
                            <p> Cras id ligula consequat, sagittis nulla at, sollicitudin lorem. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus eleifend, dolor vel condimentum imperdiet.</p>
                            <p>In a professional context it often happens that private or corporate clients corder a publication to be made and presented with the actual content still not being ready. Think of a news blog that’s filled with content hourly on the day of going live. However, reviewers tend to be distracted by comprehensible content, say, a random text copied from a newspaper or the internet. The are likely to focus on the text, disregarding the layout and its elements.</p>
                            <h3>Our Growing News Network</h3>
                            <p>Cicero famously orated against his political opponent Lucius Sergius Catilina. Occasionally the first Oration against Catiline is taken for type specimens: Quo usque tandem abutere, Catilina, patientia nostra? Quam diu etiam furor iste tuus nos eludet? (How long, O Catiline, will you abuse our patience? And for how long will that madness of yours mock us?)</p>
                            <p>Most text editors like MS Word or Lotus Notes generate random lorem text when needed, either as pre-installed module or plug-in to be added. Word selection or sequence don’t necessarily match the original, which is intended to add variety. </p>
                            <h3>The Professional Publishing Platform</h3>
                            <p>Cicero famously orated against his political opponent Lucius Sergius Catilina. Occasionally the first Oration against Catiline is taken for type specimens: Quo usque tandem abutere, Catilina, patientia nostra? Quam diu etiam furor iste tuus nos eludet? (How long, O Catiline, will you abuse our patience? And for how long will that madness of yours mock us?)</p>
                            <p>Most text editors like MS Word or Lotus Notes generate random lorem text when needed, either as pre-installed module or plug-in to be added. Word selection or sequence don’t necessarily match the original, which is intended to add variety.</p>
                        </div>
                    </div>
                    <!-- End About Area  -->
                </div>
                <div class="col-lg-4 col-xl-4 mt_md--40 mt_sm--40">
                    <!-- Start Sidebar Area  -->
                    <div class="sidebar-inner">

                        {{-- calc widget --}}
                        <x-single-widget stitle='Узнайте предварительную стоимость'>
                            <form id='side_calc'>
                                <input type="hidden" name="square_cost" value="150">
                                <div class="form-group">
                                    <label for="lenght">Длина ковра:</label>
                                    <input name="lenght" type="number" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="width">Ширина ковра:</label>
                                    <input name="width" type="number" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="carpet_type">Тип ковра:</label>
                                    <select name="carpet_type" id="" class="form-control" style="border-radius: 44px">
                                        <option value="">Синтетика</option>
                                        <option value="">Шегги</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="carpet_height">Высота ворса:</label>
                                    <select name="carpet_height" id="" class="form-control" style="border-radius: 44px">
                                        <option value="">до 10 мм</option>
                                        <option value="">Более 10 мм</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="axil-button button-rounded hover-flip-item-wrapper text-center"> Рассчет</button>
                                </div>
                            </form>
                        </x-single-widget>
                        {{-- /calc widget --}}

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

    <!-- Start Instagram Area  -->
    <div class="axil-instagram-area axil-section-gap bg-color-grey">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2 class="title">Instagram</h2>
                    </div>
                </div>
            </div>
            <div class="row mt--30">
                <div class="col-lg-12">
                    <ul class="instagram-post-list">
                        <li class="single-post">
                            <a href="#">
                                <img src="assets/images/small-images/instagram-md-01.jpg" alt="Instagram Images">
                                <span class="instagram-button"><i class="fab fa-instagram"></i></span>
                            </a>
                        </li>
                        <li class="single-post">
                            <a href="#">
                                <img src="assets/images/small-images/instagram-md-02.jpg" alt="Instagram Images">
                                <span class="instagram-button"><i class="fab fa-instagram"></i></span>
                            </a>
                        </li>
                        <li class="single-post">
                            <a href="#">
                                <img src="assets/images/small-images/instagram-md-03.jpg" alt="Instagram Images">
                                <span class="instagram-button"><i class="fab fa-instagram"></i></span>
                            </a>
                        </li>
                        <li class="single-post">
                            <a href="#">
                                <img src="assets/images/small-images/instagram-md-04.jpg" alt="Instagram Images">
                                <span class="instagram-button"><i class="fab fa-instagram"></i></span>
                            </a>
                        </li>
                        <li class="single-post">
                            <a href="#">
                                <img src="assets/images/small-images/instagram-md-05.jpg" alt="Instagram Images">
                                <span class="instagram-button"><i class="fab fa-instagram"></i></span>
                            </a>
                        </li>
                        <li class="single-post">
                            <a href="#">
                                <img src="assets/images/small-images/instagram-md-06.jpg" alt="Instagram Images">
                                <span class="instagram-button"><i class="fab fa-instagram"></i></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Instagram Area  -->
@endsection