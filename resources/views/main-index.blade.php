@extends('components.front')

@section('content')
    <!-- Start Banner Area -->
    <h1 class="d-none">Стирка ковров и ковровых покрытий</h1>
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
                                    <img src="{{ asset('/assets/images/banner-1.jpg') }}" alt="В поддержку семей и участников СВО">
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
                                        Мы предоставляем скидку 10% на стирку ковров и ковровых покрытий
                                    </h2>
                                    <!-- Post Meta  -->
                                    <div class="post-meta-wrapper with-button">
                                        <div class="read-more-button cerchio">
                                            <a class="axil-button button-rounded hover-flip-item-wrapper" href="">
                                                <span class="hover-flip-item" >
                                                    <span data-text="Заказать сейчас">Заказать сейчас</span>
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
    <div class="axil-section-gap bg-color-grey position-relative info-block-gap" style="padding-bottom: 0!important;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="info-block" style="
                        border-left:5px solid #3858F6;
                        border-radius:10px;
                        min-height:100px;
                        padding: 10px 20px;
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
                        <h2 class="title mb-3">Не упустите возможность получить скидку <b>10%</b></h2>
                        <p>Мы ценим наших клиентов и поэтому <b>при заказе через сайт</b> впервые вы получаете <b>бесплатную консультацию</b>, выезд для замера, а также <b>мы берем на себя всю логистику</b> от вашей двери и обратно!</p>
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
    {{-- how we do section --}}
    <div class="axil-tab-area axil-section-gap bg-color-grey cta-gap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2 class="mb-3">Работаем только на результат, без оправданий</h2>
                        <p>
                            Мы учли все боли наших клиентов и поэтому <b>разработали собственную систему чистки</b>, которая способна устранить <b>до 99% любых сложных загрязнений и запахов</b>.
                            В нашей работе используется только проверенная опытом химия и <b>мы не скрываем того, как происходит процесс чистки</b>.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row video-block">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="how-we-do-block">
                        <span>1.</span>
                        <span class="ticket text-uppercase">Видео замедлено</span>
                        <div class="video" style="background: url('{{ asset('/assets/images/dust_remover.gif') }}')"></div>
                        <div class="content p-4">
                            <h4 class="mb-3">Выбивание пыли на станке</h4>
                            <p>
                                Это грубое выбивание, <b>таким способом удаляется до 3,5 кг. пыли, песка, мусора и грунта</b>, которые не в силах поднять бытовой пылесос.
                                Станок <b>не только выбивает, но и вычесывает</b> ворс от волос, шерсти и прочей мелочи(<b>иглы, булавки, рыбные кости и пр</b>).
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="how-we-do-block">
                        <span>2.</span>
                        <div class="video" style="background: url('{{ asset('/assets/images/rotor.gif') }}')"></div>
                        <div class="content p-4">
                            <h4 class="mb-3">Чистка роторной машиной</h4>
                            <p>
                                Чтобы максимально <b>эффективно удалить</b> все загрязнения <b>из глубины ковра</b> используется этот метод, а также очищается ворс ковра <b>по всей длине</b>.
                                Так достигается глубокая очистка - это <b>помогает поднять слежавшийся</b> ворс, например, от "ножек" дивана
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="how-we-do-block">
                        <span>3.</span>
                        <div class="video" style="background: url('{{ asset('/assets/images/centrifuge.gif') }}')"></div>
                        <div class="content p-4">
                            <h4 class="mb-3">Отжим в промышленной центрифуге</h4>
                            <p>
                                Во время отжима из изделия <b>удаляется до 95% влаги</b> ,это достигается путём вращения барабана <b>до 1200 оборотов в минуту</b>. 
                                При таком влагоудалении исключается образование желтых танинных пятен ,а так же в разы <b>ускоряет процесс сушки</b>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="how-we-do-block">
                        <span>4.</span>
                        <div class="video" style="background: url('{{ asset('/assets/images/drying.gif') }}')"></div>
                        <div class="content p-4">
                            <h4 class="mb-3">Сушильная камера</h4>
                            <p>
                                Сушка происходит <b>в полностью герметичной камере, внутри которой поддерживается определенная влажность и температура</b>. 
                                <b>Ковер высыхает от 4 до 18 часов</b>, в зависимости от материала. 
                                Исключается начало процесса загнивания(появления неприятного запаха).
                                После полного высыхания камера <b>заполняется озоном для полного обеззараживания и устранения посторонних запахов</b> в ковровых изделиях.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12 col-md-6 col-lg-6">
                    <h4>После прохождения полного цикла стирки</h4>
                    <p class="m-0">
                        Ковры отправляются на последнюю, немаловажную стадию - финишную обработку. 
                        В первую очередь она нужна для контроля качества, но помимо этого :
                    </p>
                    <ul class="list-unstyled mark">
                        <li>контрольного поднятия ворса</li>
                        <li>сбора остатков пыли после сушки </li>
                        <li>вычесывания старого выцветшего ворса на шерстянных , акриловых и вискозных коврах</li>
                        <li>отсутствие неприятных запахов</li>
                        <li>отсутвие посторонних предметов</li>
                    </ul>
                    <div class="contact-items mb-3">
                        <a 
                            href="http://wa.me/79883440855?text='Задайте свой вопрос напрямую нам!'" 
                            target="_blank" 
                            class="axil-button button-rounded hover-flip-item-wrapper wa">
                            
                            WhatsApp
                        </a>
                        <a 
                            href="tel:+79883440855" 
                            class="axil-button button-rounded hover-flip-item-wrapper">
                            Позвонить
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="finish-image" style="background: url('{{ asset('/assets/images/final.gif') }}')"></div>
                </div>
            </div>
        </div>
    </div>
    {{-- end how we do section --}}
    {{-- info block area --}}
    <div class="axil-section-gap bg-color-grey position-relative info-block-gap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="info-block" style="
                        border-left:5px solid #3858F6;
                        border-radius:10px;
                        min-height:100px;
                        padding: 10px 20px;
                        ">
                        <h2>Интересные факты про пыль в помещениях</h2>
                        <p>
                            <b>Воздух в помещении</b>, как правило, содержит примерно вдвое больше пыли, чем воздух снаружи.
                            А это приблизительно <b>миллион микроскопических частиц</b> в кубическом сантиметре воздуха.
                            Около <b>2000 пылевых клещей могут счастливо проживать в 30 граммах пыли</b>, скопившейся на вашем ковре.
                            С человека осыпается <b>около 1,5 миллионов чешуек кожи в час</b>, большинство из них упадет на ваш ковер.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end info block area --}}

    {{-- calculator block --}}
    <div class="axil-section-gap bg-color-white position-relative info-block-gap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title mb-5">
                        <h2 class="m-0">Оставьте заявку сейчас, указав всю необходимую информацию</h2>
                        <p>Чтобы узнать стоимость услуги - предлагаем пройти небольшой опрос ниже</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="quiz">
                        @csrf
                        <div class="tab" data-step="0">
                                <div class="header">
                                    <h4 class="m-0">Выберите какой у вас тип ковра:</h4>
                                    <p>Выберите подходящий тип ковра(коврового покрытия)</p>
                                </div>
                                <div class="content">
                                    <ul class="list-unstyled">
                                        <li>
                                            <div class="item" data-attr="carpet-type" data-value="Безворсовый">
                                                <div class="image" style="background: url('{{ asset('/assets/images/carpets/bezvors.jpg') }}')"></div>
                                                <div class="name">Безворсовый</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item" data-attr="carpet-type" data-value="Ковролин">
                                                <div class="image" style="background: url('{{ asset('/assets/images/carpets/kovrolin.jpg') }}')"></div>
                                                <div class="name">Ковролин</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item" data-attr="carpet-type" data-value="Синтетика">
                                                <div class="image" style="background: url('{{ asset('/assets/images/carpets/sintetika.jpg') }}')"></div>
                                                <div class="name">Синтетика</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item" data-attr="carpet-type" data-value="Вискоза">
                                                <div class="image" style="background: url('{{ asset('/assets/images/carpets/viskoza.jpg') }}')"></div>
                                                <div class="name">Вискоза</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item" data-attr="carpet-type" data-value="Акрил">
                                                <div class="image" style="background: url('{{ asset('/assets/images/carpets/akril.jpg') }}')"></div>
                                                <div class="name">Акрил</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item" data-attr="carpet-type" data-value="Бамбук">
                                                <div class="image" style="background: url('{{ asset('/assets/images/carpets/bambuk.jpg') }}')"></div>
                                                <div class="name">Бамбук</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item" data-attr="carpet-type" data-value="Шелк">
                                                <div class="image" style="background: url('{{ asset('/assets/images/carpets/shelk.jpg') }}')"></div>
                                                <div class="name">Шелк</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item" data-attr="carpet-type" data-value="Шерсть">
                                                <div class="image" style="background: url('{{ asset('/assets/images/carpets/sherst.jpg') }}')"></div>
                                                <div class="name">Шерсть</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item" data-attr="carpet-type" data-value="Шегги">
                                                <div class="image" style="background: url('{{ asset('/assets/images/carpets/shaggy.jpg') }}')"></div>
                                                <div class="name">Шегги</div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                        </div>
                        <div class="tab" data-step="1">
                            <div class="header">
                                <h4 class="m-0">Выбыерите высоту ворса:</h4>
                                <p>Различают три подвида: высоковорсный (от 5 мм), средневорсовый (3-5 мм), и коротковорсный (2-3 мм).</p>
                            </div>
                            <div class="content">
                                <ul class="list-unstyled">
                                    <li>
                                        <div class="item" data-attr="carpet-height" data-value="Безворсовый">
                                            <div class="image" style="background: url('{{ asset('/assets/images/carpets/short.jpg') }}')"></div>
                                            <div class="name">Безворсовый(0-0.2 см)</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item" data-attr="carpet-height" data-value="Средний">
                                            <div class="image" style="background: url('{{ asset('/assets/images/carpets/medium.jpg') }}')"></div>
                                            <div class="name">Средний(0,5-2 см)</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item" data-attr="carpet-height" data-value="Высокий">
                                            <div class="image" style="background: url('{{ asset('/assets/images/carpets/long.jpg') }}')"></div>
                                            <div class="name">Высокий(2-5 см)</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab" data-step="2">
                            <div class="header">
                                <h4 class="m-0">Укажите дополнительные загрязнения, если такие имеются:</h4>
                                <p>Это поможет сделать расчет стоимости чистки точнее</p>
                            </div>
                            <div class="content">
                                <div class="check-group">
                                    <div class="check-item">
                                        <input type="checkbox" data-attr="Затоптанность" id="q">
                                        <label for="q">Затоптанность (следы от мебели)</label>
                                    </div>
                                    <div class="check-item">
                                        <input type="checkbox" data-attr="запахи" id="w">
                                        <label for="w">Неприятные запахи</label>
                                    </div>
                                    <div class="check-item">
                                        <input type="checkbox" data-attr="Моча" name="" id="e">
                                        <label for="e">Моча животных</label>
                                    </div>
                                    <div class="check-item">
                                        <input type="checkbox" data-attr="ЧС" name="" id="r">
                                        <label for="r">После ЧС (потоп, пожар и пр.)</label>
                                    </div>
                                </div>
                
                            </div>
                        </div>
                        <div class="tab" data-step="3">
                            <div class="header">
                                <h4 class="m-0">Данные отправлены, остался последний этап</h4>
                                <p>Укажите имя и номер телефона, чтобы наш менеджер смог с вами связаться</p>
                            </div>
                            <div class="content">
                                <div class="quiz-contact">
                                    <div class="form-group contact-group">
                                        <label for="">Введите имя</label>
                                        <input type="text" class="form-control" name="name" required>
                                    </div>
                                    <div class="form-group contact-group">
                                        <label for="">Введите номер телефона</label>
                                        <input type="text" class="form-control" name="phone" placeholder="+7(XXX)XXX-XX-XX" required>
                                    </div>
                                </div>
                                <div class="thanx  d-none d-flex justify-content-center align-items-center">
                                    <div class="text-center">
                                        <h3>Спасибо, что выбрали нас!</h3>
                                        <p>Совсем скоро наш менеджер свяжется с вами для уточнения деталей</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="navigation d-flex justify-content-start align-items-center">
                            <button class="prev-button w-auto axil-button button-rounded hover-flip-item-wrapper d-none">Назад</button>
                            <button class="next-button w-auto axil-button button-rounded hover-flip-item-wrapper d-none">Продолжить</button>
                            <button class="submit w-auto d-none axil-button button-rounded hover-flip-item-wrapper" style="background:#D93E40;border:none;">Получить рассчет</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end calculator block --}}

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
    {{-- contact --}}
    <div class="axil-categories-list axil-section-gap bg-color-grey">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title mb-5">
                                <h2 class="m-0">Контактная информация</h2>
                                <p>Все способы для связи с нами в одном месте</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                        <div class="row mb-0 mb-md-3 mb-lg-3">
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="contact-item">
                                    <div class="icon">
                                        <img src="{{ asset('/assets/images/address-icon.png') }}" class="rounded" alt="">
                                    </div>
                                    <div class="content">
                                        <h4>Адрес:</h4>
                                        <a href="">пос. Пятихатки, ул.Дачная, 7</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="contact-item">
                                    <div class="icon">
                                        <img src="{{ asset('/assets/images/phone-icon.png') }}" class="rounded" alt="">
                                    </div>
                                    <div class="content">
                                        <h4>Телефон:</h4>
                                        <a href="tel:+7(988)344-08-55">+7(988)344-08-55</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="contact-item">
                                    <div class="icon">
                                        <img src="{{ asset('/assets/images/email-address-icon.png') }}" class="rounded" alt="">
                                    </div>
                                    <div class="content">
                                        <h4>Email адрес:</h4>
                                        <a href="mailto:stuchis@yandex.ru">stuchis@yandex.ru</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="contact-item">
                                    <div class="icon">
                                        <img src="{{ asset('/assets/images/social-icon.png') }}" class="rounded" alt="">
                                    </div>
                                    <div class="content">
                                        <h4>Мессенджеры:</h4>
                                        <div class="d-flex justify-content-around align-items-center">
                                            <a href="http://wa.me/79883440855" class="social-with-icon">
                                                <img src="{{ asset('/assets/images/wa-icon.png') }}" alt="">
                                                WhatsApp
                                            </a>
                                            <a href="http://t.me/Tsarevich22" class="social-with-icon">
                                                <img src="{{ asset('/assets/images/telegram-icon.png') }}" alt="">
                                                Telegram
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6 mt-5 mt-md-0 mt-lg-0">
                    <div class="map" style="background: url('{{ asset('/assets/maps/map.jpg') }}')"></div>
                </div>
            </div>
        </div>
    </div>
    {{-- end contact --}}
@endsection
