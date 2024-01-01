@section('title', $title ?? env('APP_NAME'))
@section('description', $description ?? 'Сервис проверки и анализа российских юридических лиц и предпринимателей')

<x-layout>
    <section class="main-section info-page-bg-alt" id="main-section">
        <div class="container">
            <div class="main-section__wrap">
                <h1>Быстрая и удобная проверка
                    <span>контрагентов</span></h1>
                <div class="flex">
                    <p class="strong main-section-subtitle"> Помогаем быстро и эффективно оценить надежность&nbsp;контрагента: защитите&nbsp;бизнес от&nbsp;штрафов,&nbsp;доначислений налогов и&nbsp;недобросовестных партнеров </p>
                    <p> Каждый день более <strong>700&nbsp;000</strong>&nbsp;человек принимают бизнес-решения на&nbsp;основе данных Rusprofile </p>
                </div>
            </div>
        </div>
        <div class="illustrate-hero illustrate-hero-l lazyload" data-bg="/storage/images_web/index-page/top_left.png"></div>
        <div class="illustrate-hero illustrate-hero-r lazyload" data-bg="/storage/images_web/illustrations/nb.png"></div>
    </section>
    <div class="nav_rail">
        <nav id="navbar" class="js-sticky">
            <a href="#main-section" class="quetip queimg list-group-item" data-quetip="Поиск по названию, адресу, ФО, ОГ&nbsp;Н или НН партнера"> <i class="ico" data-ico="lens"> <svg><use xlink:href="storage/images_web/icons_1.svg#lens"></use></svg> </i> </a>
            <a href="#advantages-rating" class="quetip queimg list-group-item" data-quetip="Оценка контрагентов"> <i class="ico" data-ico="rate"> <svg><use xlink:href="storage/images_web/features-list.svg#rate"></use></svg> </i> </a>
            <a href="#advantages-scales" class="quetip queimg list-group-item" data-quetip="Судебные процессы и долги"> <i class="ico" data-ico="scales"> <svg><use xlink:href="storage/images_web/features-list.svg#scales"></use></svg> </i> </a>
            <a href="#advantages-connections" class="quetip queimg list-group-item" data-quetip="Связи между компаниями"> <i class="ico" data-ico="links"> <svg><use xlink:href="storage/images_web/features-list.svg#links"></use></svg> </i> </a>
            <a href="#advantages-sources" class="quetip queimg list-group-item" data-quetip="Госзакупки"> <i class="ico" data-ico="portfolio"> <svg><use xlink:href="storage/images_web/features-list.svg#portfolio"></use></svg> </i> </a>
            <a href="#advantages-onlooking" class="quetip queimg list-group-item" data-quetip="Отслеживание изменений"> <i class="ico" data-ico="ding"> <svg><use xlink:href="storage/images_web/icons.svg#ding"></use></svg> </i> </a>
            <a href="#advantages-search-clients" class="quetip queimg list-group-item" data-quetip="Подбор контрагентов"> <i class="ico" data-ico="select_counterparties-outline"> <svg><use xlink:href="storage/images_web/icons.svg#select_counterparties-outline"></use></svg> </i> </a>
        </nav>
    </div>
    <section class="main-search btn-outside gradient-block">
        <div class="container">
            <div class="main-search-wrap">
                <form id="indexsearchform" action="/search" class="main-search-form index-search-form" method="GET" onsubmit="return (this.elements.namedItem('query').value.trim().length > 2)">
                    <div class="input-holder"> <i class="ico" data-ico="search"> <svg><use xlink:href="storage/images_web/icons_1.svg#search"></use></svg> </i>
                        <input name="query" class="index-search-input" type="text" placeholder="скать по названию, адресу, руководителю, учредителям, ОГ&nbsp;Н и НН" data-prefix="Поиск" maxlength="100" autocomplete="off">
                        <span class="finded-count"></span> </div>
                    <input type="hidden" class="search_inactive" name="search_inactive" value="0">
                    <button type="submit" class="search-btn waves-effect waves-light">
                        <span>Найти</span> <i class="ico" data-ico="search"> <svg><use xlink:href="storage/images_web/icons_1.svg#search"></use></svg> </i>
                    </button>
                    <x-form.button>123</x-form.button>
                </form>
                <div class="search-drop"></div>
            </div>
            <div class="main-search-counterparties">
                <a href="/search-advanced" rel="nofollow" class="btn counterparties-btn" data-goal-param="interactions, main-advanced_search">
                    <span>&nbsp;асширенный поиск</span> </a>
            </div>
        </div>
    </section>
    <section class="nav-titles info-page-bg-alt">
        <div class="container">
            <ul class="menu-list cols-6">
                <li>
                    <a href="#advantages-rating" class="menu-item"> <i class="ico ico-xl" data-ico="rate"> <svg><use xlink:href="storage/images_web/features-list.svg#rate"></use></svg> </i>
                        <span> Оценка <br>контрагентов </span> </a>
                </li>
                <li>
                    <a href="#advantages-scales" class="menu-item"> <i class="ico ico-xl" data-ico="scales"> <svg><use xlink:href="storage/images_web/features-list.svg#scales"></use></svg> </i>
                        <span> Судебные <br> процессы и долги </span> </a>
                </li>
                <li>
                    <a href="#advantages-connections" class="menu-item"> <i class="ico ico-xl" data-ico="links"> <svg><use xlink:href="storage/images_web/features-list.svg#links"></use></svg> </i>
                        <span> Связи между компаниями </span> </a>
                </li>
                <li>
                    <a href="#advantages-sources" class="menu-item"> <i class="ico ico-xl" data-ico="portfolio"> <svg><use xlink:href="storage/images_web/features-list.svg#portfolio"></use></svg> </i>
                        <span> Госзакупки </span> </a>
                </li>
                <li>
                    <a href="#advantages-onlooking" class="menu-item"> <i class="ico ico-xl" data-ico="ding"> <svg><use xlink:href="storage/images_web/icons.svg#ding"></use></svg> </i>
                        <span> Отслеживание изменений </span> </a>
                </li>
                <li>
                    <a href="#advantages-search-clients" class="menu-item"> <i class="ico ico-xl" data-ico="select_counterparties-outline"> <svg><use xlink:href="storage/images_web/icons.svg#select_counterparties-outline"></use></svg> </i>
                        <span> Подбор <br>контрагентов </span> </a>
                </li>
            </ul>
        </div>
    </section>
    <section class="advantages text-r advantages-rating" id="advantages-rating">
        <div class="container centered-wrp">
            <div class="advantages-wrp">
                <div class="advantages-title"> <i class="ico" data-ico="rate"> <svg><use xlink:href="storage/images_web/features-list.svg#rate"></use></svg> </i>
                    <div class="page-title">Удобная оценка
                        <span>контрагентов</span></div>
                </div>
                <div class="advantages-body pad-t-more">
                    <div class="cards">
                        <div class="card-one lazyload"></div>
                        <div class="card-two lazyload"></div>
                    </div>
                    <ul>
                        <li>Все ключевые сведения на одной странице</li>
                        <li>Подробный рейтинг надежности компании</li>
                        <li>38 источников данных, подробные сведения по каждому</li>
                        <li>Ежедневное обновление информации</li>
                        <li>Маркеры риска по данным ФНС</li>
                        <li>Банкротства из ЕФ&nbsp;СБ</li>
                        <li>Финансовое положение компании</li>
                        <li>стория изменений</li>
                        <li>Контактные данные юрлиц</li>
                    </ul>
                    <a href="/features" class="advantages-link">Возможности сервиса
                        <span class="arr"></span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="advantages text-l advantages-scales info-page-bg-alt" id="advantages-scales">
        <div class="container centered-wrp">
            <div class="advantages-wrp">
                <div class="advantages-title"> <i class="ico" data-ico="scales"> <svg><use xlink:href="storage/images_web/features-list.svg#scales"></use></svg> </i>
                    <div class="page-title">Анализируйте судебные процессы и задолженности</div>
                </div>
                <div class="advantages-body">
                    <div class="cards">
                        <div class="card-one lazyload"></div>
                        <div class="card-two lazyload"></div>
                    </div>
                    <ul>
                        <li>Все текущие и завершенные дела с участием компании</li>
                        <li>Почему, с кем и на какие суммы судится</li>
                        <li>&nbsp;езультаты арбитражных процессов</li>
                        <li>сполнительные производства в отношении компании</li>
                        <li>Причины, суммы и статус требований</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="illustrate-hero illustrate-hero-middle lazyload" data-bg="/storage/images_web/index-page/illustrate-middle.png"></div>
    </section>
    <section class="advantages text-r advantages-connections" id="advantages-connections">
        <div class="container centered-wrp">
            <div class="advantages-wrp">
                <div class="advantages-title"> <i class="ico" data-ico="links"> <svg><use xlink:href="storage/images_web/features-list.svg#links"></use></svg> </i>
                    <div class="page-title">Проверяйте связи
                        <br> между компаниями</div>
                </div>
                <div class="advantages-body">
                    <div class="cards">
                        <div class="card-one lazyload"></div>
                        <div class="card-two lazyload"></div>
                    </div>
                    <ul>
                        <li>меет ли контрагент отношение к вашим конкурентам</li>
                        <li>Создавались ли дочерние организации, и&nbsp;каково их финансовое положение</li>
                        <li>Заметны ли признаки подготовки компании к банкротству</li>
                        <li>меются ли признаки оптимизации налогов</li>
                        <li>Есть ли за учредителем шлейф проблемных юридических лиц</li>
                    </ul>
                    <a href="/subscribe" class="advantages-link">Тарифы на полный доступ
                        <span class="arr"></span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="advantages text-l advantages-sources info-page-bg-alt" id="advantages-sources">
        <div class="container centered-wrp">
            <div class="advantages-wrp">
                <div class="advantages-title"> <i class="ico" data-ico="portfolio"> <svg><use xlink:href="storage/images_web/features-list.svg#portfolio"></use></svg> </i>
                    <div class="page-title">спользуйте данные о&nbsp;госзакупках</div>
                </div>
                <div class="advantages-body">
                    <div class="cards">
                        <div class="card-one lazyload"></div>
                        <div class="card-two lazyload"></div>
                    </div>
                    <ul>
                        <li>Какие у вас могут быть конкуренты по тендеру, и на каких условиях они ранее участвовали в госзакупках</li>
                        <li>Присутствует ли контрагент в реестре недобросовестных поставщиков</li>
                        <li>Был ли у поставщика опыт в исполнении госконтрактов</li>
                        <li>Есть ли признаки сговора участников закупок</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="advantages text-r advantages-onlooking" id="advantages-onlooking">
        <div class="container centered-wrp">
            <div class="advantages-wrp">
                <div class="advantages-title"> <i class="ico ico-l" data-ico="ding"> <svg><use xlink:href="storage/images_web/icons.svg#ding"></use></svg> </i>
                    <div class="page-title">Автоматизируйте наблюдение
                        <br>за контрагентами</div>
                </div>
                <div class="advantages-body">
                    <div class="cards">
                        <div class="card-one lazyload"></div>
                        <div class="card-two lazyload"></div>
                    </div>
                    <ul>
                        <li>Узнавайте о значимых событиях в интересных вам компаниях</li>
                        <li>Получайте уведомления по электронной почте</li>
                        <li>Полная история обновлений в личном кабинете</li>
                        <li>Отслеживайте все изменения или только самые важные</li>
                    </ul>
                    <a href="#" id="js-open-auth" class="advantages-link">Попробовать бесплатно
                        <span class="arr"></span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="advantages text-l advantages-search-clients info-page-bg-alt" id="advantages-search-clients">
        <div class="container centered-wrp">
            <div class="advantages-wrp">
                <div class="advantages-title"> <i class="ico ico-l" data-ico="select_counterparties-outline"> <svg><use xlink:href="storage/images_web/icons.svg#select_counterparties-outline"></use></svg> </i>
                    <div class="page-title">Найдите клиентов для вашего
                        <br>бизнеса</div>
                </div>
                <div class="advantages-body">
                    <div class="cards">
                        <div class="card-one lazyload"></div>
                        <div class="card-two lazyload"></div>
                    </div>
                    <div class="subheader">Получите список подходящих вам компаний по:</div>
                    <ul>
                        <li>региону</li>
                        <li>основному и дополнительному видам деятельности</li>
                        <li>объему выручки</li>
                        <li>участию в госзакупках</li>
                        <li>наличию контактных данных</li>
                        <li>организационно-правовой форме</li>
                        <li>другим значимым для вас критериям</li>
                    </ul>
                    <a href="/search-advanced" rel="nofollow" class="advantages-link" data-goal-param="interactions, main-advanced_search">&nbsp;асширенный поиск
                        <span class="arr"></span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="advantages advantages-official info-page-bg-alt" id="advantages-official">
        <div class="advantages-official-first">
            <div class="container">
                <div class="advantages-title"> <i class="ico ico-l" data-ico="curt"> <svg><use xlink:href="storage/images_web/icons.svg#curt"></use></svg> </i>
                    <div class="page-title-h2">Официальная информация</div>
                </div>
                <ul class="menu-list cols-7 advantages-official-items">
                    <li>
                        <div class="advantages-official-items-logo" data-item="4"></div> ФНС </li>
                    <li>
                        <div class="advantages-official-items-logo" data-item="3"></div> Верховный
                        <br> суд </li>
                    <li>
                        <div class="advantages-official-items-logo" data-item="5"></div> Федеральное казначейство </li>
                    <li>
                        <div class="advantages-official-items-logo" data-item="6"></div> ФССП </li>
                    <li>
                        <div class="advantages-official-items-logo" data-item="2"></div> ФАС </li>
                    <li>
                        <div class="advantages-official-items-logo" data-item="1"></div> Генеральная прокуратура </li>
                    <li>
                        <div class="advantages-official-items-logo" data-item="0"></div> ФСГС </li>
                </ul>
                <div class="page-title-h4">Обновляются ежедневно:</div>
                <ul class="menu-list cols-3 advantages-official-updates">
                    <li> <strong>Арбитражные дела</strong>
                        <span>Верховный суд</span> </li>
                    <li> <strong>Недобросовестные поставщики</strong>
                        <span>ФАС</span> </li>
                    <li> <strong>Проверки</strong>
                        <span>Генеральная прокуратура</span> </li>
                    <li> <strong>Государственные и муниципальные организации</strong>
                        <span>Федеральное казначейство</span> </li>
                    <li> <strong>Открытые и завершенные исполнительные производства</strong>
                        <span>ФССП</span> </li>
                    <li> <strong>Госзакупки
                            <span class="nowrap">по 223, 44 и 94&nbsp;ФЗ</span>
                        </strong>
                        <span>Федеральное казначейство</span> </li>
                    <li> <strong>Связи между организациями</strong>
                        <span>ЕГ&nbsp;ЮЛ, ЕГ&nbsp;П</span> </li>
                    <li> <strong>Основные сведения по ЮЛ и П</strong>
                        <span>ЕГ&nbsp;ЮЛ, ЕГ&nbsp;П</span> </li>
                    <li> <strong>Банкротства</strong>
                        <span>ЕФ&nbsp;СБ</span> </li>
                </ul>
            </div>
            <div class="illustrate-hero illustrate-hero-official-l lazyload" data-bg="/storage/images_web/illustrations/block-official.png"></div>
            <div class="illustrate-hero illustrate-hero-official-r lazyload" data-bg="/storage/images_web/illustrations/block-official.png"></div>
        </div>
        <div class="advantages-official-second">
            <div class="container">
                <div class="page-title-h4">Обновляются по мере появления изменений:</div>
                <ul class="menu-list cols-3 advantages-official-updates">
                    <li> <strong>Дисквалифицированные лица, Массовые адреса</strong>
                        <span>Специальные реестры ФНС</span> </li>
                    <li> <strong>Открытые и завершенные исполнительные производства</strong>
                        <span>Специальные реестры ФНС</span> </li>
                    <li> <strong>&nbsp;еестр малых и средних предприятий</strong>
                        <span>Специальные реестры ФНС</span> </li>
                    <li> <strong>Численность сотрудников организаций</strong>
                        <span>Специальные реестры ФНС</span> </li>
                    <li> <strong>Специальные
                            <span class="nowrap">налоговые режимы</span>
                        </strong>
                        <span>Специальные реестры ФНС</span> </li>
                    <li> <strong>Уплаченные налоги и взносы, недоимки и задолженности</strong>
                        <span>Специальные реестры ФНС</span> </li>
                    <li> <strong>Доходы и расходы организаций</strong>
                        <span>Специальные реестры ФНС</span> </li>
                    <li> <strong>Бухгалтерская отчетность</strong>
                        <span>ФНС, &nbsp;осстат</span> </li>
                    <li> <strong>Лицензии</strong>
                        <span>ФНС, профильные ведомства</span> </li>
                </ul>
                <div class="try-block">
                    <a href="/sources" class="relative">сточники данных
                        <span class="arr"></span>
                    </a>
                </div>
            </div>
            <div class="illustrate-hero illustrate-hero-official-b lazyload" data-bg="/storage/images_web/illustrations/block-official.png"></div>
        </div>
    </section>
    <section class="section-users">
        <div class="container has-padding">
            <div class="cols-two">
                <div class="page-title page-title-h3"> Rusprofile используют
                    <br>для&nbsp;проверки контрагентов более&nbsp;200&nbsp;тысяч
                    <br> организаций </div>
                <div class="section-users-img"> <img data-srcset="/storage/images_web/index-page/responsive/companyLogo.png 1x, /storage/images_web/index-page/responsive/companyLogo@2x.png 2x, /storage/images_web/index-page/responsive/companyLogo@3x.png 3x, /storage/images_web/index-page/responsive/companyLogo@4x.png 4x" data-origin="/storage/images_web/index-page/responsive/companyLogo.png" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" class="lazyload" height="358" width="531" alt="Rusprofile используют для&nbsp;проверки контрагентов более&nbsp;200&nbsp;тысяч организаций"> </div>
            </div>
        </div>
    </section>
    <section class="section-team section-text">
        <div class="container has-padding-l text-block">
            <div class="page-title page-title-h3">Вакансии в Rusprofile</div>
            <div class="img-cols-block img-half-size cols-centered">
                <div class="img-cols-block-img tablet-img-top"> <img data-srcset="/storage/images_web/page_team/responsive/image51.jpg 1x, /storage/images_web/page_team/responsive/image51@2x.jpg 2x, /storage/images_web/page_team/responsive/image51@3x.jpg 3x, /storage/images_web/page_team/responsive/image51@4x.jpg 4x" data-origin="/storage/images_web/page_team/responsive/image51.jpg" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" class="lazyload" height="348" alt="&nbsp;абота в команде Rusprofile"> </div>
                <div class="text">
                    <p> У нас небольшая команда без бюрократии и основатели, которые ценят мнение каждого. Комфортный офис в Москва-Сити и частичная удаленка. А ещё — честные зарплаты и премии. </p>
                    <p>Мы всегда в поиске талантливых специалистов.</p>
                </div>
                <ul class="unstyled">
                    <li> <a href="/jobs#jobs-8" class="btn-white-two">Команда разработки</a> </li>
                    <li> <a href="/jobs#jobs-5" class="btn-white-two">Продуктовая команда</a> </li>
                </ul>
            </div>
        </div>
    </section>
    <div class="relative info-page-bg-alt">
        <section class="gradient-block try-block">
            <div class="try-block-title">Профессиональный доступ к Rusprofile — максимум возможностей</div> <a href="/subscribe" class="btn btn-green-big">Подключить</a>
            <div class="illustrate-hero lazyload" data-bg="/storage/images_web/illustrations/illustrate-footer_clear.png"></div>
        </section>
        <section class="has-padding section-capability">
            <div class="illustrate-hero illustrate-hero-bottom lazyload" data-bg="/storage/images_web/illustrations/illustrate-footer_clear.png"></div>
            <div class="container">
                <div class="capability-columns">
                    <div class="capability-col">
                        <div class="capability-col-item subs-box">
                            <div class="capability-item__header">Найти организацию по виду деятельности ОКВЭД</div>
                            <div class="capability-item__expand okved-expand">
                                <div class="okved-toggler">
                                    <span class="okved-tab active">&nbsp;убрикатор</span> /
                                    <span class="okved-tab fakelink">Популярные</span> </div>
                                <div class="okved-tabbody active">
                                    <table class="okved-table">
                                        <tbody>
                                            <tr>
                                                <th>код
                                                    <br>оквэд</th>
                                                <th>вид
                                                    <br>деятельности</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="num">01</span></td>
                                                <td><a href="/codes/10000">&nbsp;астениеводство и животноводство, охота и предоставление соответствующих услуг в этих областях</a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="num">02</span></td>
                                                <td><a href="/codes/20000">Лесоводство и лесозаготовки</a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="num">03</span></td>
                                                <td><a href="/codes/30000">&nbsp;ыболовство и рыбоводство</a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="num">05</span></td>
                                                <td><a href="/codes/50000">Добыча угля</a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="num">06</span></td>
                                                <td><a href="/codes/60000">Добыча нефти и природного газа</a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="num">07</span></td>
                                                <td><a href="/codes/70000">Добыча металлических руд</a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="num">08</span></td>
                                                <td><a href="/codes/80000">Добыча прочих полезных ископаемых</a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="num">09</span></td>
                                                <td><a href="/codes/90000">Предоставление услуг в области добычи полезных ископаемых</a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="num">10</span></td>
                                                <td><a href="/codes/100000">Производство пищевых продуктов</a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="num">11</span></td>
                                                <td><a href="/codes/110000">Производство напитков</a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="num">12</span></td>
                                                <td><a href="/codes/120000">Производство табачных изделий</a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="num">13</span></td>
                                                <td><a href="/codes/130000">Производство текстильных изделий</a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="num">14</span></td>
                                                <td><a href="/codes/140000">Производство одежды</a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="num">15</span></td>
                                                <td><a href="/codes/150000">Производство кожи и изделий из кожи</a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="num">16</span></td>
                                                <td><a href="/codes/160000">Обработка древесины и производство изделий из дерева и пробки, кроме мебели, производство изделий из соломки и материалов для плетения</a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="num">17</span></td>
                                                <td><a href="/codes/170000">Производство бумаги и бумажных изделий</a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="num">18</span></td>
                                                <td><a href="/codes/180000">Деятельность полиграфическая и копирование носителей информации</a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="num">19</span></td>
                                                <td><a href="/codes/190000">Производство кокса и нефтепродуктов</a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="num">20</span></td>
                                                <td><a href="/codes/200000">Производство химических веществ и химических продуктов</a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="num">21</span></td>
                                                <td><a href="/codes/210000">Производство лекарственных средств и материалов, применяемых в медицинских целях и ветеринарии</a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="num">22</span></td>
                                                <td><a href="/codes/220000">Производство резиновых и пластмассовых изделий</a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="num">23</span></td>
                                                <td><a href="/codes/230000">Производство прочей неметаллической минеральной продукции</a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="num">24</span></td>
                                                <td><a href="/codes/240000">Производство металлургическое</a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="num">25</span></td>
                                                <td><a href="/codes/250000">Производство готовых металлических изделий, кроме машин и оборудования</a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="num">26</span></td>
                                                <td><a href="/codes/260000">Производство компьютеров, электронных и оптических изделий</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">27</span></td>
                                                <td><a href="/codes/270000">Производство электрического оборудования</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">28</span></td>
                                                <td><a href="/codes/280000">Производство машин и оборудования, не включенных в другие группировки</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">29</span></td>
                                                <td><a href="/codes/290000">Производство автотранспортных средств, прицепов и полуприцепов</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">30</span></td>
                                                <td><a href="/codes/300000">Производство прочих транспортных средств и оборудования</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">31</span></td>
                                                <td><a href="/codes/310000">Производство мебели</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">32</span></td>
                                                <td><a href="/codes/320000">Производство прочих готовых изделий</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">33</span></td>
                                                <td><a href="/codes/330000">&nbsp;емонт и монтаж машин и оборудования</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">35</span></td>
                                                <td><a href="/codes/350000">Обеспечение электрической энергией, газом и паром; кондиционирование воздуха</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">36</span></td>
                                                <td><a href="/codes/360000">Забор, очистка и распределение воды</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">37</span></td>
                                                <td><a href="/codes/370000">Сбор и обработка сточных вод</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">38</span></td>
                                                <td><a href="/codes/380000">Сбор, обработка и утилизация отходов; обработка вторичного сырья</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">39</span></td>
                                                <td><a href="/codes/390000">Предоставление услуг в области ликвидации последствий загрязнений и прочих услуг, связанных с удалением отходов</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">41</span></td>
                                                <td><a href="/codes/410000">Строительство зданий</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">42</span></td>
                                                <td><a href="/codes/420000">Строительство инженерных сооружений</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">43</span></td>
                                                <td><a href="/codes/430000">&nbsp;аботы строительные специализированные</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">45</span></td>
                                                <td><a href="/codes/450000">Торговля оптовая и розничная автотранспортными средствами и мотоциклами и их ремонт</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">46</span></td>
                                                <td><a href="/codes/460000">Торговля оптовая, кроме оптовой торговли автотранспортными средствами и мотоциклами</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">47</span></td>
                                                <td><a href="/codes/470000">Торговля розничная, кроме торговли автотранспортными средствами и мотоциклами</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">49</span></td>
                                                <td><a href="/codes/490000">Деятельность сухопутного и трубопроводного транспорта</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">50</span></td>
                                                <td><a href="/codes/500000">Деятельность водного транспорта</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">51</span></td>
                                                <td><a href="/codes/510000">Деятельность воздушного и космического транспорта</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">52</span></td>
                                                <td><a href="/codes/520000">Складское хозяйство и вспомогательная транспортная деятельность</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">53</span></td>
                                                <td><a href="/codes/530000">Деятельность почтовой связи и курьерская деятельность</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">55</span></td>
                                                <td><a href="/codes/550000">Деятельность по предоставлению мест для временного проживания</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">56</span></td>
                                                <td><a href="/codes/560000">Деятельность по предоставлению продуктов питания и напитков</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">58</span></td>
                                                <td><a href="/codes/580000">Деятельность издательская</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">59</span></td>
                                                <td><a href="/codes/590000">Производство кинофильмов, видеофильмов и телевизионных программ, издание звукозаписей и нот</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">60</span></td>
                                                <td><a href="/codes/600000">Деятельность в области телевизионного и радиовещания</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">61</span></td>
                                                <td><a href="/codes/610000">Деятельность в сфере телекоммуникаций</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">62</span></td>
                                                <td><a href="/codes/620000">&nbsp;азработка компьютерного программного обеспечения, консультационные услуги в данной области и другие сопутствующие услуги</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">63</span></td>
                                                <td><a href="/codes/630000">Деятельность в области информационных технологий</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">64</span></td>
                                                <td><a href="/codes/640000">Деятельность по предоставлению финансовых услуг, кроме услуг по страхованию и пенсионному обеспечению</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">65</span></td>
                                                <td><a href="/codes/650000">Страхование, перестрахование, деятельность негосударственных пенсионных фондов, кроме обязательного социального обеспечения</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">66</span></td>
                                                <td><a href="/codes/660000">Деятельность вспомогательная в сфере финансовых услуг и страхования</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">68</span></td>
                                                <td><a href="/codes/680000">Операции с недвижимым имуществом</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">69</span></td>
                                                <td><a href="/codes/690000">Деятельность в области права и бухгалтерского учета</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">70</span></td>
                                                <td><a href="/codes/700000">Деятельность головных офисов; консультирование по вопросам управления</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">71</span></td>
                                                <td><a href="/codes/710000">Деятельность в области архитектуры и инженерно-технического проектирования; технических испытаний, исследований и анализа</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">72</span></td>
                                                <td><a href="/codes/720000">Научные исследования и разработки</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">73</span></td>
                                                <td><a href="/codes/730000">Деятельность рекламная и исследование конъюнктуры рынка</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">74</span></td>
                                                <td><a href="/codes/740000">Деятельность профессиональная научная и техническая прочая</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">75</span></td>
                                                <td><a href="/codes/750000">Деятельность ветеринарная</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">77</span></td>
                                                <td><a href="/codes/770000">Аренда и лизинг</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">78</span></td>
                                                <td><a href="/codes/780000">Деятельность по трудоустройству и подбору персонала</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">79</span></td>
                                                <td><a href="/codes/790000">Деятельность туристических агентств и прочих организаций, предоставляющих услуги в сфере туризма</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">80</span></td>
                                                <td><a href="/codes/800000">Деятельность по обеспечению безопасности и проведению расследований</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">81</span></td>
                                                <td><a href="/codes/810000">Деятельность по обслуживанию зданий и территорий</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">82</span></td>
                                                <td><a href="/codes/820000">Деятельность административно-хозяйственная, вспомогательная деятельность по обеспечению функционирования организации, деятельность по предоставлению прочих вспомогательных услуг для бизнеса</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">84</span></td>
                                                <td><a href="/codes/840000">Деятельность органов государственного управления по обеспечению военной безопасности, обязательному социальному обеспечению</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">85</span></td>
                                                <td><a href="/codes/850000">Образование</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">86</span></td>
                                                <td><a href="/codes/860000">Деятельность в области здравоохранения</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">87</span></td>
                                                <td><a href="/codes/870000">Деятельность по уходу с обеспечением проживания</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">88</span></td>
                                                <td><a href="/codes/880000">Предоставление социальных услуг без обеспечения проживания</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">90</span></td>
                                                <td><a href="/codes/900000">Деятельность творческая, деятельность в области искусства и организации развлечений</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">91</span></td>
                                                <td><a href="/codes/910000">Деятельность библиотек, архивов, музеев и прочих объектов культуры</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">92</span></td>
                                                <td><a href="/codes/920000">Деятельность по организации и проведению азартных игр и заключению пари, по организации и проведению лотерей</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">93</span></td>
                                                <td><a href="/codes/930000">Деятельность в области спорта, отдыха и развлечений</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">94</span></td>
                                                <td><a href="/codes/940000">Деятельность общественных и прочих некоммерческих организаций</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">95</span></td>
                                                <td><a href="/codes/950000">&nbsp;емонт компьютеров, предметов личного потребления и хозяйственно-бытового назначения</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">96</span></td>
                                                <td><a href="/codes/960000">Деятельность по предоставлению прочих персональных услуг</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">97</span></td>
                                                <td><a href="/codes/970000">Деятельность домашних хозяйств с наемными работниками</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">98</span></td>
                                                <td><a href="/codes/980000">Деятельность недифференцированная частных домашних хозяйств по производству товаров и предоставлению услуг для собственного потребления</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">99</span></td>
                                                <td><a href="/codes/990000">Деятельность экстерриториальных организаций и органов</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="section__more-link antispoiler">
                                        <span class="fakelink">Показать все</span> </div>
                                </div>
                                <div class="okved-tabbody">
                                    <table class="okved-table">
                                        <tbody>
                                            <tr>
                                                <th>код
                                                    <br>оквэд</th>
                                                <th>вид
                                                    <br>деятельности</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="num">46.9</span></td>
                                                <td><a href="/codes/469000">Торговля оптовая неспециализированная</a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="num">41.2</span></td>
                                                <td><a href="/codes/412000">Строительство жилых и нежилых зданий</a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="num">52.29</span></td>
                                                <td><a href="/codes/522900">Деятельность вспомогательная прочая, связанная с перевозками</a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="num">43.99</span></td>
                                                <td><a href="/codes/439900">&nbsp;аботы строительные специализированные прочие, не включенные в другие группировки</a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="num">46.73</span></td>
                                                <td><a href="/codes/467300">Торговля оптовая лесоматериалами, строительными материалами и санитарно-техническим оборудованием</a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="num">82.99</span></td>
                                                <td><a href="/codes/829900">Деятельность по предоставлению прочих вспомогательных услуг для бизнеса, не включенная в другие группировки</a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="num">43.21</span></td>
                                                <td><a href="/codes/432100">Производство электромонтажных работ</a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="num">52.1</span></td>
                                                <td><a href="/codes/521000">Деятельность по складированию и хранению</a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="num">43.29</span></td>
                                                <td><a href="/codes/432900">Производство прочих строительно-монтажных работ</a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="num">43.39</span></td>
                                                <td><a href="/codes/433900">Производство прочих отделочных и завершающих работ</a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="num">73.11</span></td>
                                                <td><a href="/codes/731100">Деятельность рекламных агентств</a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="num">43.31</span></td>
                                                <td><a href="/codes/433100">Производство штукатурных работ</a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="num">43.22</span></td>
                                                <td><a href="/codes/432200">Производство санитарно-технических работ, монтаж отопительных систем и систем кондиционирования воздуха</a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="num">70.22</span></td>
                                                <td><a href="/codes/702200">Консультирование по вопросам коммерческой деятельности и управления</a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="num">43.33</span></td>
                                                <td><a href="/codes/433300">&nbsp;аботы по устройству покрытий полов и облицовке стен</a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="num">43.32</span></td>
                                                <td><a href="/codes/433200">&nbsp;аботы столярные и плотничные</a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="num">43.91</span></td>
                                                <td><a href="/codes/439100">Производство кровельных работ</a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="num">52.24</span></td>
                                                <td><a href="/codes/522400">Транспортная обработка грузов</a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="num">68.2</span></td>
                                                <td><a href="/codes/682000">Аренда и управление собственным или арендованным недвижимым имуществом</a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="num">43.34</span></td>
                                                <td><a href="/codes/433400">Производство малярных и стекольных работ</a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="num">49.41</span></td>
                                                <td><a href="/codes/494100">Деятельность автомобильного грузового транспорта</a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="num">43.11</span></td>
                                                <td><a href="/codes/431100">&nbsp;азборка и снос зданий</a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="num">47.19</span></td>
                                                <td><a href="/codes/471900">Торговля розничная прочая в неспециализированных магазинах</a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="num">49.4</span></td>
                                                <td><a href="/codes/494000">Деятельность автомобильного грузового транспорта и услуги по перевозкам</a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="num">43.12</span></td>
                                                <td><a href="/codes/431200">Подготовка строительной площадки</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">45.2</span></td>
                                                <td><a href="/codes/452000">Техническое обслуживание и ремонт автотранспортных средств</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">46.49</span></td>
                                                <td><a href="/codes/464900">Торговля оптовая прочими бытовыми товарами</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">47.9</span></td>
                                                <td><a href="/codes/479000">Торговля розничная вне магазинов, палаток, рынков</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">69.1</span></td>
                                                <td><a href="/codes/691000">Деятельность в области права</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">56.1</span></td>
                                                <td><a href="/codes/561000">Деятельность ресторанов и услуги по доставке продуктов питания</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">42.99</span></td>
                                                <td><a href="/codes/429900">Строительство прочих инженерных сооружений, не включенных в другие группировки</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">46.69</span></td>
                                                <td><a href="/codes/466900">Торговля оптовая прочими машинами и оборудованием</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">47.11</span></td>
                                                <td><a href="/codes/471100">Торговля розничная преимущественно пищевыми продуктами, включая напитки, и табачными изделиями в неспециализированных магазинах</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">46.19</span></td>
                                                <td><a href="/codes/461900">Деятельность агентов по оптовой торговле универсальным ассортиментом товаров</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">43.12.3</span></td>
                                                <td><a href="/codes/431230">Производство земляных работ</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">46.4</span></td>
                                                <td><a href="/codes/464000">Торговля оптовая непродовольственными потребительскими товарами</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">46.73.6</span></td>
                                                <td><a href="/codes/467360">Торговля оптовая прочими строительными материалами и изделиями</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">46.74</span></td>
                                                <td><a href="/codes/467400">Торговля оптовая скобяными изделиями, водопроводным и отопительным оборудованием и принадлежностями</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">68.1</span></td>
                                                <td><a href="/codes/681000">Покупка и продажа собственного недвижимого имущества</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">43.3</span></td>
                                                <td><a href="/codes/433000">&nbsp;аботы строительные отделочные</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">56.10.1</span></td>
                                                <td><a href="/codes/561010">Деятельность ресторанов и кафе с полным ресторанным обслуживанием, кафетериев, ресторанов быстрого питания и самообслуживания</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">43.99.1</span></td>
                                                <td><a href="/codes/439910">&nbsp;аботы гидроизоляционные</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">62.09</span></td>
                                                <td><a href="/codes/620900">Деятельность, связанная с использованием вычислительной техники и информационных технологий, прочая</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">62.02</span></td>
                                                <td><a href="/codes/620200">Деятельность консультативная и работы в области компьютерных технологий</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">46.71</span></td>
                                                <td><a href="/codes/467100">Торговля оптовая твердым, жидким и газообразным топливом и подобными продуктами</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">42.11</span></td>
                                                <td><a href="/codes/421100">Строительство автомобильных дорог и автомагистралей</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">82.92</span></td>
                                                <td><a href="/codes/829200">Деятельность по упаковыванию товаров</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">69.2</span></td>
                                                <td><a href="/codes/692000">Деятельность по оказанию услуг в области бухгалтерского учета, по проведению финансового аудита, по налоговому консультированию</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">42.21</span></td>
                                                <td><a href="/codes/422100">Строительство инженерных коммуникаций для водоснабжения и водоотведения, газоснабжения</a></td>
                                            </tr>
                                            <tr class="spoiler overhidden">
                                                <td>
                                                    <span class="num">43.2</span></td>
                                                <td><a href="/codes/432000">Производство электромонтажных, санитарно-технических и прочих строительно-монтажных работ</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="section__more-link antispoiler">
                                        <span class="fakelink">Показать все</span> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="capability-col">
                        <div class="capability-col-item subs-box">
                            <div class="capability-item__header">Найти предпринимателя по алфавитному указателю</div>
                            <div class="capability-item__expand">
                                <ul class="letter-list">
                                    <li> <a href="/ip/ААБ">А</a> </li>
                                    <li> <a href="/ip/БАА">Б</a> </li>
                                    <li> <a href="/ip/ВАА">В</a> </li>
                                    <li> <a href="/ip/ГАА">Г</a> </li>
                                    <li> <a href="/ip/ДАА">Д</a> </li>
                                    <li> <a href="/ip/ЕБА">Е</a> </li>
                                    <li> <a href="/ip/ЁВА">Ё</a> </li>
                                    <li> <a href="/ip/ЖАА">Ж</a> </li>
                                    <li> <a href="/ip/ЗАА">З</a> </li>
                                    <li> <a href="/ip/АГ"></a> </li>
                                    <li> <a href="/ip/ЙАВ">Й</a> </li>
                                    <li> <a href="/ip/КАА">К</a> </li>
                                    <li> <a href="/ip/ЛАА">Л</a> </li>
                                    <li> <a href="/ip/МАА">М</a> </li>
                                    <li> <a href="/ip/НАА">Н</a> </li>
                                    <li> <a href="/ip/ОАМ">О</a> </li>
                                    <li> <a href="/ip/ПАА">П</a> </li>
                                    <li> <a href="/ip/&nbsp;АА">&nbsp;</a> </li>
                                    <li> <a href="/ip/САА">С</a> </li>
                                    <li> <a href="/ip/ТАА">Т</a> </li>
                                    <li> <a href="/ip/УАД">У</a> </li>
                                    <li> <a href="/ip/ФАА">Ф</a> </li>
                                    <li> <a href="/ip/ХАА">Х</a> </li>
                                    <li> <a href="/ip/ЦАА">Ц</a> </li>
                                    <li> <a href="/ip/ЧАА">Ч</a> </li>
                                    <li> <a href="/ip/ШАА">Ш</a> </li>
                                    <li> <a href="/ip/ЩАБ">Щ</a> </li>
                                    <li> Ъ </li>
                                    <li> <a href="/ip/ЫБ&nbsp;">Ы</a> </li>
                                    <li> Ь </li>
                                    <li> <a href="/ip/ЭАН">Э</a> </li>
                                    <li> <a href="/ip/ЮАД">Ю</a> </li>
                                    <li> <a href="/ip/ЯАК">Я</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="capability-col">
                        <div class="capability-col-item subs-box">
                            <div class="capability-item__header">Найти физическое лицо по алфавитному указателю</div>
                            <div class="capability-item__expand">
                                <ul class="letter-list">
                                    <li> <a href="/person/ААБ">А</a> </li>
                                    <li> <a href="/person/БАА">Б</a> </li>
                                    <li> <a href="/person/ВАА">В</a> </li>
                                    <li> <a href="/person/ГАА">Г</a> </li>
                                    <li> <a href="/person/ДАА">Д</a> </li>
                                    <li> <a href="/person/ЕБА">Е</a> </li>
                                    <li> <a href="/person/ЁВЫ">Ё</a> </li>
                                    <li> <a href="/person/ЖАА">Ж</a> </li>
                                    <li> <a href="/person/ЗАА">З</a> </li>
                                    <li> <a href="/person/АБ"></a> </li>
                                    <li> <a href="/person/ЙАВ">Й</a> </li>
                                    <li> <a href="/person/КАА">К</a> </li>
                                    <li> <a href="/person/ЛАА">Л</a> </li>
                                    <li> <a href="/person/МАА">М</a> </li>
                                    <li> <a href="/person/НАА">Н</a> </li>
                                    <li> <a href="/person/ОАМ">О</a> </li>
                                    <li> <a href="/person/ПАА">П</a> </li>
                                    <li> <a href="/person/&nbsp;АА">&nbsp;</a> </li>
                                    <li> <a href="/person/САА">С</a> </li>
                                    <li> <a href="/person/ТАА">Т</a> </li>
                                    <li> <a href="/person/УАГ">У</a> </li>
                                    <li> <a href="/person/ФАА">Ф</a> </li>
                                    <li> <a href="/person/ХАА">Х</a> </li>
                                    <li> <a href="/person/ЦАА">Ц</a> </li>
                                    <li> <a href="/person/ЧАА">Ч</a> </li>
                                    <li> <a href="/person/ШАА">Ш</a> </li>
                                    <li> <a href="/person/ЩАА">Щ</a> </li>
                                    <li> Ъ </li>
                                    <li> <a href="/person/ЫБЫ">Ы</a> </li>
                                    <li> Ь </li>
                                    <li> <a href="/person/ЭАН">Э</a> </li>
                                    <li> <a href="/person/ЮАД">Ю</a> </li>
                                    <li> <a href="/person/ЯАЗ">Я</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="capability-col datetimes">
                        <div class="capability-col-item subs-box">
                            <div class="capability-item__header">Найти организацию по дате присвоения ОГ&nbsp;Н</div>
                            <div class="capability-item__expand">
                                <ul class="letter-list">
                                    <li><a href="/date/2022-12-30">2022</a></li>
                                    <li><a href="/date/2021-12-30">2021</a></li>
                                    <li><a href="/date/2020-12-30">2020</a></li>
                                    <li><a href="/date/2019-12-30">2019</a></li>
                                    <li><a href="/date/2018-12-29">2018</a></li>
                                    <li><a href="/date/2017-12-30">2017</a></li>
                                    <li><a href="/date/2016-12-30">2016</a></li>
                                    <li><a href="/date/2015-12-30">2015</a></li>
                                    <li><a href="/date/2014-12-30">2014</a></li>
                                    <li><a href="/date/2013-12-30">2013</a></li>
                                    <li><a href="/date/2012-12-29">2012</a></li>
                                    <li><a href="/date/2011-12-30">2011</a></li>
                                    <li><a href="/date/2010-12-30">2010</a></li>
                                    <li><a href="/date/2009-12-30">2009</a></li>
                                    <li><a href="/date/2008-12-30">2008</a></li>
                                    <li><a href="/date/2007-12-30">2007</a></li>
                                    <li><a href="/date/2006-12-30">2006</a></li>
                                    <li><a href="/date/2005-12-30">2005</a></li>
                                    <li><a href="/date/2004-12-30">2004</a></li>
                                    <li><a href="/date/2003-12-30">2003</a></li>
                                    <li><a href="/date/2002-12-30">2002</a></li>
                                </ul>
                                <ul class="letter-list months">
                                    <li><a href="/date/2023-11-30">Ноябрь 2023</a></li>
                                    <li><a href="/date/2023-10-30">Октябрь 2023</a></li>
                                    <li><a href="/date/2023-09-30">Сентябрь 2023</a></li>
                                    <li><a href="/date/2023-08-30">Август 2023</a></li>
                                    <li><a href="/date/2023-07-30">юль 2023</a></li>
                                    <li><a href="/date/2023-06-30">юнь 2023</a></li>
                                    <li><a href="/date/2023-05-30">Май 2023</a></li>
                                    <li><a href="/date/2023-04-29">Апрель 2023</a></li>
                                    <li><a href="/date/2023-03-30">Март 2023</a></li>
                                    <li><a href="/date/2023-02-28">Февраль 2023</a></li>
                                    <li><a href="/date/2023-01-30">Январь 2023</a></li>
                                    <li><a href="/date/2022-12-30">Декабрь 2022</a></li>
                                </ul>
                                <ul class="letter-list days">
                                    <li> <a href="/date/2023-12-29">29.12</a> </li>
                                    <li> <a href="/date/2023-12-28">28.12</a> </li>
                                    <li> <a href="/date/2023-12-27">27.12</a> </li>
                                    <li> <a href="/date/2023-12-26">26.12</a> </li>
                                    <li> <a href="/date/2023-12-25">25.12</a> </li>
                                    <li> <a href="/date/2023-12-24">24.12</a> </li>
                                    <li> <a href="/date/2023-12-23">23.12</a> </li>
                                    <li> <a href="/date/2023-12-22">22.12</a> </li>
                                    <li> <a href="/date/2023-12-21">21.12</a> </li>
                                    <li> <a href="/date/2023-12-20">20.12</a> </li>
                                    <li> <a href="/date/2023-12-19">19.12</a> </li>
                                    <li> <a href="/date/2023-12-18">18.12</a> </li>
                                    <li> <a href="/date/2023-12-17">17.12</a> </li>
                                    <li> <a href="/date/2023-12-16">16.12</a> </li>
                                    <li> <a href="/date/2023-12-15">15.12</a> </li>
                                    <li> <a href="/date/2023-12-14">14.12</a> </li>
                                    <li> <a href="/date/2023-12-13">13.12</a> </li>
                                    <li> <a href="/date/2023-12-12">12.12</a> </li>
                                    <li> <a href="/date/2023-12-11">11.12</a> </li>
                                    <li> <a href="/date/2023-12-10">10.12</a> </li>
                                    <li> <a href="/date/2023-12-09">09.12</a> </li>
                                    <li> <a href="/date/2023-12-08">08.12</a> </li>
                                    <li> <a href="/date/2023-12-07">07.12</a> </li>
                                    <li> <a href="/date/2023-12-06">06.12</a> </li>
                                    <li> <a href="/date/2023-12-05">05.12</a> </li>
                                    <li> <a href="/date/2023-12-04">04.12</a> </li>
                                    <li> <a href="/date/2023-12-03">03.12</a> </li>
                                    <li> <a href="/date/2023-12-02">02.12</a> </li>
                                    <li> <a href="/date/2023-12-01">01.12</a> </li>
                                    <li> <a href="/date/2023-11-30">30.11</a> </li>
                                </ul>
                                <p>
                                    <span class="nowdate">29 декабря 2023</span> Зарегистрировано организаций:
                                    <span>324</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="capability-col datetimes">
                        <div class="capability-col-item subs-box">
                            <div class="capability-item__header">Найти индивидуального предпринимателя по дате присвоения ОГ&nbsp;НП</div>
                            <div class="capability-item__expand">
                                <ul class="letter-list">
                                    <li><a href="/date-ip/2022-12-30">2022</a></li>
                                    <li><a href="/date-ip/2021-12-30">2021</a></li>
                                    <li><a href="/date-ip/2020-12-30">2020</a></li>
                                    <li><a href="/date-ip/2019-12-30">2019</a></li>
                                    <li><a href="/date-ip/2018-12-29">2018</a></li>
                                    <li><a href="/date-ip/2017-12-29">2017</a></li>
                                    <li><a href="/date-ip/2016-12-30">2016</a></li>
                                    <li><a href="/date-ip/2015-12-30">2015</a></li>
                                    <li><a href="/date-ip/2014-12-30">2014</a></li>
                                    <li><a href="/date-ip/2013-12-30">2013</a></li>
                                    <li><a href="/date-ip/2012-12-29">2012</a></li>
                                    <li><a href="/date-ip/2011-12-30">2011</a></li>
                                    <li><a href="/date-ip/2010-12-30">2010</a></li>
                                    <li><a href="/date-ip/2009-12-30">2009</a></li>
                                    <li><a href="/date-ip/2008-12-30">2008</a></li>
                                    <li><a href="/date-ip/2007-12-30">2007</a></li>
                                    <li><a href="/date-ip/2006-12-30">2006</a></li>
                                    <li><a href="/date-ip/2005-12-30">2005</a></li>
                                    <li><a href="/date-ip/2004-12-30">2004</a></li>
                                    <li><a href="/date-ip/2003-12-23">2003</a></li>
                                    <li><a href="/date-ip/2002-08-19">2002</a></li>
                                </ul>
                                <ul class="letter-list months">
                                    <li><a href="/date-ip/2023-11-30">Ноябрь 2023</a></li>
                                    <li><a href="/date-ip/2023-10-30">Октябрь 2023</a></li>
                                    <li><a href="/date-ip/2023-09-30">Сентябрь 2023</a></li>
                                    <li><a href="/date-ip/2023-08-30">Август 2023</a></li>
                                    <li><a href="/date-ip/2023-07-30">юль 2023</a></li>
                                    <li><a href="/date-ip/2023-06-30">юнь 2023</a></li>
                                    <li><a href="/date-ip/2023-05-30">Май 2023</a></li>
                                    <li><a href="/date-ip/2023-04-29">Апрель 2023</a></li>
                                    <li><a href="/date-ip/2023-03-30">Март 2023</a></li>
                                    <li><a href="/date-ip/2023-02-28">Февраль 2023</a></li>
                                    <li><a href="/date-ip/2023-01-30">Январь 2023</a></li>
                                    <li><a href="/date-ip/2022-12-30">Декабрь 2022</a></li>
                                </ul>
                                <ul class="letter-list days">
                                    <li> <a href="/date-ip/2023-12-29">29.12</a> </li>
                                    <li> <a href="/date-ip/2023-12-28">28.12</a> </li>
                                    <li> <a href="/date-ip/2023-12-27">27.12</a> </li>
                                    <li> <a href="/date-ip/2023-12-26">26.12</a> </li>
                                    <li> <a href="/date-ip/2023-12-25">25.12</a> </li>
                                    <li> <a href="/date-ip/2023-12-24">24.12</a> </li>
                                    <li> <a href="/date-ip/2023-12-23">23.12</a> </li>
                                    <li> <a href="/date-ip/2023-12-22">22.12</a> </li>
                                    <li> <a href="/date-ip/2023-12-21">21.12</a> </li>
                                    <li> <a href="/date-ip/2023-12-20">20.12</a> </li>
                                    <li> <a href="/date-ip/2023-12-19">19.12</a> </li>
                                    <li> <a href="/date-ip/2023-12-18">18.12</a> </li>
                                    <li> <a href="/date-ip/2023-12-17">17.12</a> </li>
                                    <li> <a href="/date-ip/2023-12-16">16.12</a> </li>
                                    <li> <a href="/date-ip/2023-12-15">15.12</a> </li>
                                    <li> <a href="/date-ip/2023-12-14">14.12</a> </li>
                                    <li> <a href="/date-ip/2023-12-13">13.12</a> </li>
                                    <li> <a href="/date-ip/2023-12-12">12.12</a> </li>
                                    <li> <a href="/date-ip/2023-12-11">11.12</a> </li>
                                    <li> <a href="/date-ip/2023-12-10">10.12</a> </li>
                                    <li> <a href="/date-ip/2023-12-09">09.12</a> </li>
                                    <li> <a href="/date-ip/2023-12-08">08.12</a> </li>
                                    <li> <a href="/date-ip/2023-12-07">07.12</a> </li>
                                    <li> <a href="/date-ip/2023-12-06">06.12</a> </li>
                                    <li> <a href="/date-ip/2023-12-05">05.12</a> </li>
                                    <li> <a href="/date-ip/2023-12-04">04.12</a> </li>
                                    <li> <a href="/date-ip/2023-12-03">03.12</a> </li>
                                    <li> <a href="/date-ip/2023-12-02">02.12</a> </li>
                                    <li> <a href="/date-ip/2023-12-01">01.12</a> </li>
                                    <li> <a href="/date-ip/2023-11-30">30.11</a> </li>
                                </ul>
                                <p>
                                    <span class="nowdate">29 декабря 2023</span> Зарегистрировано индивидуальных предпринимателей:
                                    <span>763</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-layout>