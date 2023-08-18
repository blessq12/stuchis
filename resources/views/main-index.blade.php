@extends('components.front')

@section('content')
    <h1 class="d-none">{{ $company->name }}</h1>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="hero-banner">
                    <div class="image">
                        <img src="/assets/images/banner-1.jpg" alt="">
                    </div>
                    <div class="content">
                        <div class="subtitle">В поддержку семей и участников СВО</div>
                        <div class="title">Мы предоставляем скидку 10% на стирку ковров и ковровых покрытий</div>
                        <div class="cta">
                            <a class="button-primary" href="tel:{{ $company->phone }}">Заказать стирку ковра</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="section pb-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="info-block">
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
    
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Кому будут полезны наши услуги</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
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
                <div class="col-lg-4 col-md-6 col-12">
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
                <div class="col-lg-4 col-md-6 col-12">
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
                <div class="col-lg-4 col-md-6 col-12">
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
                <div class="col-lg-4 col-md-6 col-12">
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
                <div class="col-lg-4 col-md-6 col-12">
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
            </div>
        </div>
    </div>

    <div class="section cta-section" style="background: url('{{ asset('/assets/images/cta-gap-background.jpg') }}')">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-9 col-md-8 col-12">
                    <div class="section-title">
                        <h2>Не упустите возможность получить скидку <b>10%</b></h2>
                        <p>Мы ценим наших клиентов и поэтому <b>при заказе через сайт</b> впервые вы получаете <b>бесплатную консультацию</b>, выезд для замера, а также <b>мы берем на себя всю логистику</b> от вашей двери и обратно!</p>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-3 text-left text-md-center text-lg-center">
                    <a href="{{ $company->wa_link }}" class="button-primary cta">
                       <span>Получить скидку!</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="section pb-0">
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
                        <div class="content">
                            <h4>Выбивание пыли на станке</h4>
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
                        <div class="content">
                            <h4>Чистка роторной машиной</h4>
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
                        <div class="content">
                            <h4 >Отжим в промышленной центрифуге</h4>
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
                        <div class="content">
                            <h4>Сушильная камера</h4>
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
                    <div class="section-title">
                        <h2>После прохождения полного цикла стирки</h2>
                        <p>
                            Ковры отправляются на последнюю, немаловажную стадию - финишную обработку. 
                            В первую очередь она нужна для контроля качества, но помимо этого :
                        </p>
                    </div>
                    <ul class="check-after-clean">
                        <li>контрольного поднятия ворса</li>
                        <li>сбора остатков пыли после сушки </li>
                        <li>вычесывания старого выцветшего ворса на шерстянных , акриловых и вискозных коврах</li>
                        <li>отсутствие неприятных запахов</li>
                        <li>отсутвие посторонних предметов</li>
                    </ul>
                    <div class="contact-items">
                        <a href="{{ $company->wa_link }}" target="_blank" aria-label="">
                            WhatsApp
                        </a>
                        <a href="tel:{{ $company->phone }}" aria-label="">
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
    <div class="section pb-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Оставьте заявку сейчас, указав всю необходимую информацию</h2>
                        <p>Чтобы узнать стоимость услуги - предлагаем пройти небольшой опрос ниже</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div id="calc"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="section pb-0">
        <div class="container">
            <div class="row align-items-center mb--30">
                <div class="col-lg-8 col-md-8 col-sm-8 col-12">
                    <div class="section-title">
                        <h2 class="title">Коротко о том, почему выбирают нас</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="single-item" style="background:url('/assets/images/thumbs/1.jpg')">
                        <span>Качество выполнения</span>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="single-item" style="background:url('/assets/images/thumbs/2.jpg')">
                        <span>Современное оборудование</span>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="single-item" style="background:url('/assets/images/thumbs/3.jpg')">
                        <span>Бесплатный вывоз/доставка</span>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="single-item" style="background:url('/assets/images/thumbs/4.jpg')">
                        <span>Глубокая чистка изделий</span>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="single-item" style="background:url('/assets/images/thumbs/5.jpg')">
                        <span>Безопасная сделка</span>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="single-item" style="background:url('/assets/images/thumbs/6.jpg')">
                        <span>Любые загрязнения</span>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <div class="section">
        <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h2 >Контактная информация</h2>
                            <p>Все способы для связи с нами в одном месте</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <ul class="contact-items-list">
                            <li>
                                <div class="contact-item">
                                    <div class="image" style="background: url('/assets/images/address-icon.png')"></div>
                                    <div class="content">
                                        <h5>Адрес:</h5>
                                        <a href="https://yandex.ru/maps/?ll=37.318871%2C44.981158&mode=routes&rtext=~44.980364%2C37.316976&rtt=auto&ruri=~&z=16">{{ $company->address }}</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="contact-item">
                                    <div class="image" style="background: url('/assets/images/phone-icon.png')"></div>
                                    <div class="content">
                                        <h5>Телефон</h5>
                                        <a href="tel:{{ $company->phone }}">{{ $company->phone }}</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="contact-item">
                                    <div class="image" style="background: url('/assets/images/email-address-icon.png')"></div>
                                    <div class="content">
                                        <h5>Email адрес</h5>
                                        <a href="mailto:{{ $company->address }}">{{ $company->email_address }}</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="contact-item">
                                    <div class="image" style="background: url('/assets/images/social-icon.png')"></div>
                                    <div class="content">
                                        <h5>Мессенджеры</h5>
                                        <div class="social">
                                            <a href="{{ $company->wa_link }}" class="social-item">WhatsApp</a>
                                            <a href="{{ $company->tg_link }}" class="social-item">Telegram</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="map-section">
                            <img src="/assets/maps/map.jpg" alt="Map">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
