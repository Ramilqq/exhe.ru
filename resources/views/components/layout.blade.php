<!DOCTYPE html>
<html lang="ru">

<head>
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <link rel="icon" href="favicon.ico">
    <link rel="icon" href="storage/images_web/favicon.png" type="image/png">

    <meta property="og:title" content="@yield('title')">
    <meta property="og:description" content="@yield('description')">
    <meta property="og:url" content="{{env('APP_URL')}}">
    <meta property="og:image" content="/build/assets/logo-head-8D_71raa.svg">

    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body class="index-page advantage-alt info-page">
    <div id="wrapper">
        <header class="head static-pages">
            <div class="head__content relative flex container">
                <div class="head__left-part">
                    <div class="btn btn-rounded head__menu-trigger" id="js-menu-trigger">
                        <div class="burg"></div>
                    </div>
                    <div class="head__logo"><a href="/">{{env('APP_NAME')}}</a></div>
                </div>
                <div class="head__menu" id="js-head-menu">
                    <div class="links">
                        <a href="/features" data-gb-track="header_menu,features,old">Возможности</a>
                        <a href="/subscribe" data-gb-track="header_menu,tariffs,old">Тарифы</a>
                        <a href="/about" data-gb-track="header_menu,about,old">О проекте</a>
                        <a href="/jobs" class="showOnlyIn-head" data-gb-track="header_menu,jobs,old">Работа</a>
                    </div>
                </div>
                <div class="head__search only-mobile empty">
                    <button type="button" class="head__search-opener btn-rounded hidden searchIco" id="js-head__search-opener"></button>
                    <form id="searchform" action="/search" class="search" method="GET" onsubmit="return (this.elements.namedItem('query').value.trim().length > 2)">
                        <input name="query" class="search__input" type="text" placeholder="скать по названию, адресу, руководителю, учредителям, ОГ&nbsp;Н и НН" maxlength="100" autocomplete="off">
                        <input type="hidden" class="search_inactive" name="search_inactive" value="0">
                        <button type="button" class="head__search__close" id="js-head__search__close"></button>
                        <button type="submit" class="head__search__submit searchIco"></button>
                        <span class="finded-count"></span> </form>
                    <div class="search-drop"></div>
                    <a href="/search-advanced" class="advanced-search-btn-external advanced-search-btn" rel="nofollow" data-goal-param="interactions, header-advanced_search" data-new=""> <i class="ico" data-ico="settings"> <svg><use xlink:href="storage/images_web/icons_1.svg#settings"></use></svg> </i> &nbsp;асширенный поиск <i class="ico" data-ico="next_chevron"> <svg><use xlink:href="storage/images_web/icons_1.svg"></use></svg> </i> </a>
                </div>
                <div class="head__user" id="js-head-user">
                    <div class="btn btn-rounded" id="menu-personal-trigger"> <i class="ico ico-m" data-ico="user_new"> <svg><use xlink:href="storage/images_web/icons_1.svg#user_new"></use></svg> </i>
                        <span class="btn-text"> Личный кабинет </span>
                    </div>
                </div>
            </div>
        </header>

        {{ $slot }}

        <footer class="footer lazyload">
            <div class="container">
                <div class="footer-inner">
                    <a href="/" class="footer-logo" title="Rusprofile.ru - информация о российских юридических лицах и предпринимателях">
                        <span class="text">Rusprofile.ru - информация о российских юридических лицах и предпринимателях</span>
                    </a>
                    <nav>
                        <span><a href="/about" data-footer-layer="about">О проекте</a></span>
                        <span><a href="/sources" data-footer-layer="sources">сточники данных</a></span>
                        <span><a href="/team" data-footer-layer="team">Команда</a></span>
                        <span><a href="/jobs" data-footer-layer="jobs" data-notice="1">Вакансии</a></span>
                        <span><a href="/smi" data-footer-layer="forMassMedia">Доступ для СМ</a></span>
                        <span><a href="/egrul-fns" data-footer-layer="egrul-fns">Выписка из ЕГ&nbsp;ЮЛ</a></span>
                    </nav>
                    <div class="footer-bottom">
                        <div class="footer-bottom-part">
                            <div class="footer-bottom-part__item">
                                <a href="https://sk.ru/" target="_blank" rel="nofollow" class="footer-partner"></a>
                                <a href="https://reestr.digital.gov.ru/reestr/1393422/" target="_blank" rel="nofollow" class="footer-partner rpo"></a>
                            </div>
                            <span class="copy"> Rusprofile.ru © 2013-2023 </span>
                        </div>
                        <nav>
                            <span style="order: 1;"><a href="/support/rules.html" class="tablet-wrap">Пользовательское соглашение</a></span>
                            <span style="order: 3;"><a href="/support/terms.html">Основания размещения информации</a></span>
                            <span style="order: 2;"><a href="/support/privacy.html" class="tablet-wrap">Политика конфиденциальности</a></span>
                            <span style="order: 4;"><a href="https://baturin.ru?rp" rel="nofollow" target="_blank">Дизайн B-G</a> © 2018</span>
                            <span style="order: 6;"><a href="/articles/podborka-statej-o-proverke-kontragentov">Полезные статьи</a></span>
                            <span style="order: 5;"><a href="/support/contact" data-open-mw-support="" data-after-sbm="feedback_click">Обратная связь</a></span>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="illustrate-hero illustrate-hero-footer-l"></div>
            <div class="illustrate-hero illustrate-hero-footer-r"></div>
        </footer>
    </div>
</body>
</html>