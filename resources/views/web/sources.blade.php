
@section('title', $title ?? env('APP_NAME'))
@section('description', $description ?? 'Сервис проверки и анализа российских юридических лиц и предпринимателей')

@push('css')
    <link rel="stylesheet" href="/assets/css_web/page_sources.css?v={{time()}}" />
    <link rel="stylesheet" href="/assets/css_web/main.css?v={{time()}}" />
@endpush

@section('advantages', 'sources-page advantages-two')

<x-layout>
    <section class="main-section info-page-bg-alt">
        <div class="container">
            <div class="main-section__wrap">
                <h1>Информация из надежных источников</h1>
                <p class="main-section-subtitle"> Точные данные об организациях и современные технологии их обработки.
                    <br> У нас есть самое главное для того, чтобы вы принимали правильные решения. </p>
                <ul class="cols-three">
                    <li> <i class="ico" data-ico="feature-aproved"> <svg><use xlink:href="/storage/images_web/icons_souces.svg#feature-aproved"></use></svg> </i> <strong>Достоверная</strong>
                        <p>Получаем материалы из госреестров. Показываем компактно и без искажений.</p>
                    </li>
                    <li> <i class="ico" data-ico="feature-actual"> <svg><use xlink:href="/storage/images_web/icons_souces.svg#feature-actual"></use></svg> </i> <strong>Актуальная</strong>
                        <p>Обновляем сведения 24 часа в сутки. Сервис регулярно проверяет официальные базы данных.</p>
                    </li>
                    <li> <i class="ico" data-ico="feature-calendar"> <svg><use xlink:href="/storage/images_web/icons_souces.svg#feature-calendar"></use></svg> </i> <strong>Историческая</strong>
                        <p>Даем доступ к архивным сведениям. Изучите прошлое ваших контрагентов.</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="illustrate-hero lazyload" style="background-image: url(/storage/images_web/illustration_hero.png);"></div>
    </section>
    <section class="text-block gradient-bg">
        <div class="container">
            <h2 class="page-title-h2">Как нам это удается</h2>
            <p>Мы обрабатываем 38 официальных баз данных. Надежность информации обеспечивают государственные органы, которые ведут реестры. Сервис только структурирует ее и показывает в неизменном виде.</p>
        </div>
    </section>
    <section class="advantages active gradient-bg" data-first="true">
        <div class="container">
            <div class="advantages-wrp">
                <div class="advantages-title"> <img src="/storage/images_web/1.png" class="lazyload" width="80" height="80" alt="Федеральная налоговая служба">
                    <div class="page-title">Федеральная налоговая служба России</div>
                </div>
                <div class="advantages-body">
                    <div class="cols-two advantages-body-item">
                        <div>
                            <div class="advantages-body-title">Источники</div>
                            <div class="advantages-body-sub-title">ЕГРЮЛ и ЕГРИП</div>
                        </div>
                        <div>
                            <div class="advantages-body-title">Сведения</div>
                            <ul>
                                <li>Наименование</li>
                                <li>ОГРН и ИНН</li>
                                <li>Уставный капитал</li>
                                <li>Дата регистрации</li>
                                <li> Учредители и их доли <span class="show-more-trigger has-triangle" data-toggle-target="show-more-sources">Ещё</span> </li>
                                <li class="hidden" data-toggle-name="show-more-sources">Связи</li>
                                <li class="hidden" data-toggle-name="show-more-sources">Лицензии</li>
                                <li class="hidden" data-toggle-name="show-more-sources">Руководитель или управляющая организация</li>
                                <li class="hidden" data-toggle-name="show-more-sources">Адрес</li>
                                <li class="hidden" data-toggle-name="show-more-sources">Банкротство</li>
                                <li class="hidden" data-toggle-name="show-more-sources">Действующая, реорганизация, ликвидация, ликвидированная</li>
                                <li class="hidden" data-toggle-name="show-more-sources">ОКВЭД</li>
                                <li class="hidden" data-toggle-name="show-more-sources">Держатель реестра акционеров</li>
                                <li class="hidden" data-toggle-name="show-more-sources">Другие данные</li>
                            </ul>
                        </div>
                    </div>
                    <div class="cols-two advantages-body-item">
                        <div>
                            <div class="advantages-body-sub-title">Государственный информационный ресурс бухгалтерской отчетности</div>
                        </div>
                        <div>
                            <ul>
                                <li>Данные бухотчетности</li>
                                <li>Финансовое положение</li>
                            </ul>
                        </div>
                    </div>
                    <div class="cols-two advantages-body-item">
                        <div>
                            <div class="advantages-body-sub-title">Сведения о блокировке счетов</div>
                        </div>
                        <div>
                            <ul>
                                <li>Блокировка (приостановление) счетов</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="advantages gradient-bg">
        <div class="container">
            <div class="advantages-wrp">
                <div class="advantages-title"> <img src="/storage/images_web/2.png" class="lazyload" width="80" height="84" alt="Федеральная налоговая служба">
                    <div class="page-title">Верховный суд РФ</div>
                </div>
                <div class="advantages-body">
                    <div class="cols-two advantages-body-item">
                        <div>
                            <div class="advantages-body-title">Источник</div>
                            <div class="advantages-body-sub-title">Картотека арбитражных дел</div>
                        </div>
                        <div>
                            <div class="advantages-body-title">Сведения</div>
                            <ul>
                                <li>Участие в спорах</li>
                                <li>Требования по искам</li>
                                <li>Судебные решения</li>
                                <li>Дела о банкротстве</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="advantages gradient-bg">
        <div class="container">
            <div class="advantages-wrp">
                <div class="advantages-title"> <img src="/storage/images_web/3.png" class="lazyload" width="80" height="87" alt="Федеральная служба судебных приставов России">
                    <div class="page-title">Федеральная служба судебных приставов России</div>
                </div>
                <div class="advantages-body">
                    <div class="cols-two advantages-body-item">
                        <div>
                            <div class="advantages-body-title">Источник</div>
                            <div class="advantages-body-sub-title">Банк данных исполнительных производств</div>
                        </div>
                        <div>
                            <div class="advantages-body-title">Сведения</div>
                            <ul>
                                <li>Долги и штрафы</li>
                                <li>Аресты имущества</li>
                                <li>Обязательство передать имущество</li>
                                <li>Обязанности совершить действия</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="advantages gradient-bg">
        <div class="container">
            <div class="advantages-wrp">
                <div class="advantages-title"> <img src="/storage/images_web/4.png" class="lazyload" width="80" height="89" alt="Федеральное казначейство ">
                    <div class="page-title">Федеральное казначейство </div>
                </div>
                <div class="advantages-body">
                    <div class="cols-two advantages-body-item">
                        <div>
                            <div class="advantages-body-title">Источник</div>
                            <div class="advantages-body-sub-title">Единая информационная система вРсфере закупок </div>
                        </div>
                        <div>
                            <div class="advantages-body-title">Сведения</div>
                            <ul>
                                <li>Заключенные госконтракты</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="advantages gradient-bg">
        <div class="container">
            <div class="advantages-wrp">
                <div class="advantages-title"> <img src="/storage/images_web/6.png" class="lazyload" width="80" height="87" alt="Федеральная служба по техническому и экспортному контролю ">
                    <div class="page-title">Профильные лицензирующие ведомства </div>
                </div>
                <div class="advantages-body">
                    <div class="cols-two advantages-body-item">
                        <div>
                            <div class="advantages-body-title">Источник</div>
                            <div class="advantages-body-sub-title">Сведения о лицензиях</div>
                        </div>
                        <div>
                            <div class="advantages-body-title">Сведения</div>
                            <ul>
                                <li>Кем и когда выданы лицензии, какие, их действительность</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="advantages gradient-bg">
        <div class="container">
            <div class="advantages-wrp">
                <div class="advantages-title"> <img src="/storage/images_web/5.png" class="lazyload" width="80" height="88" alt="Министерство экономического развития ">
                    <div class="page-title">Министерство экономического развития </div>
                </div>
                <div class="advantages-body">
                    <div class="cols-two advantages-body-item">
                        <div>
                            <div class="advantages-body-title">Источник</div>
                            <div class="advantages-body-sub-title">Федресурс (Единый федеральный реестр сведений о банкротстве) </div>
                        </div>
                        <div>
                            <div class="advantages-body-title">Сведения</div>
                            <ul>
                                <li>Сведения о банкротстве</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="advantages final-block-parent gradient-bg">
        <div class="container">
            <div class="advantages-wrp text-align-c">
                <div class="final-block"> <span class="a-pseudo js-show-container relative" data-show-container="sources-all">Полный перечень источников<span class="arr"></span></span>
                    <p class="description"> Ознакомиться с правовыми основаниями использования и публикации указанных данных вы можете в разделе <a href="/support/terms.html">Правовые основания</a>. </p>
                </div>
            </div>
        </div>
    </section>
    <div class="hidden" id="sources-all">
        <div class="modal-pop-wrp">
            <div class="modal-pop-body">
                <div class="modal-pop-header modal-pop-inner">Полный перечень источников</div>
                <button type="button" class="modal-close modal-pop-close">x</button>
                <ul class="modal-pop unstyled" data-name="okopf">
                    <li> <strong>ФНС России</strong>
                        <ol>
                            <li>Единый государственный реестр юридических лиц (ЕГРЮЛ)</li>
                            <li>Единый государственный реестр индивидуальных предпринимателей (ЕГРИП)</li>
                            <li>Реестр дисквалифицированных лиц</li>
                            <li>Государственный информационный ресурс бухгалтерской отчетности ФНС РФ</li>
                            <li>Единый реестр субъектов малого и среднего предпринимательства</li>
                            <li>Сведения о среднесписочной численности работников организации</li>
                            <li>Сведения о специальных налоговых режимах, применяемых налогоплательщиками</li>
                            <li>Сведения о суммах доходов и расходов по данным бухгалтерской (финансовой) отчетности организации за календарный год</li>
                            <li>Сведения об уплаченных организацией в календарном году налогов и сборов</li>
                            <li>Сведения о суммах недоимки и задолженности по пеням и штрафам</li>
                            <li>Система информирования банков о приостановлении (блокировке) расчетных счетов)</li>
                            <li>Сведения о налоговых правонарушениях и мерах ответственности за их совершение</li>
                            <li>Сведения о юридических лицах, имеющих задолженность по уплате налогов или не представляющих налоговую отчетность более года</li>
                            <li>Реестр обеспечительных мер ФНС РФ</li>
                        </ol>
                    </li>
                    <li> <strong>Росстат (Федеральная служба государственной статистики)</strong>
                        <ol style="counter-reset: li 14">
                            <li>Статистический регистр Росстата</li>
                            <li>Реестр бухгалтерской отчетности (сведения до 2018 года; с 2018 года - данные в сервисе из информационного ресурса БО ФНС России, п. 6)</li>
                        </ol>
                    </li>
                    <li> <strong>Верховный суд РФ</strong>
                        <ol style="counter-reset: li 16">
                            <li>Картотека арбитражных дел</li>
                        </ol>
                    </li>
                    <li> <strong>ФССП РФ (Федеральная служба судебных приставов)</strong>
                        <ol style="counter-reset: li 17">
                            <li>Банк данных исполнительных производств (в отношении организаций)</li>
                        </ol>
                    </li>
                    <li> <strong>Генеральная прокуратура РФ</strong>
                        <ol style="counter-reset: li 18">
                            <li>Единый реестр проверок</li>
                        </ol>
                    </li>
                    <li> <strong>Федеральное казначейство (Казначейство России)</strong>
                        <ol style="counter-reset: li 19">
                            <li>Единая информационная система в сфере закупок</li>
                        </ol>
                    </li>
                    <li> <strong>Минэкономразвития России/ФНС России</strong>
                        <ol style="counter-reset: li 20">
                            <li>Сведения о банкротстве из Федресурса (Единый федеральный реестр сведений о банкротстве), включая ЕФРСБ</li>
                            <li>Сведения о существенных фактах из Федресурса</li>
                        </ol>
                    </li>
                    <li> <strong>ФАС России(Федеральная антимонопольная служба)</strong>
                        <ol style="counter-reset: li 22">
                            <li>Реестр недобросовестных поставщиков</li>
                        </ol>
                    </li>
                    <li> <strong>Профильные лицензирующие ведомства</strong>
                        <ol style="counter-reset: li 23">
                            <li>Реестр лицензий Росалкогольрегулирования</li>
                            <li>Реестр лицензий Роспотребнадзора</li>
                            <li>Реестр лицензий Росприроднадзора</li>
                            <li>Портал открытых данных Росздравнадзора</li>
                            <li>Реестр лицензий Рособрнадзора</li>
                            <li>Реестр лицензий Роскомнадзора</li>
                            <li>Портал открытых данных Ростехнадзора</li>
                            <li>Портал открытых данных ФСТЭК (Федеральной службы по техническому и экспортному контролю) по технической защите конфиденциальной информации </li>
                            <li>Портал открытых данных ФСТЭК (Федеральной службы по техническому и экспортному контролю) по разработке и производству средств защиты конфиденциальной информации </li>
                        </ol>
                    </li>
                    <li> <strong>Федеральное казначейство</strong>
                        <ol style="counter-reset: li 32">
                            <li>Официальный сайт ГМУ (Официальный сайт для размещения информации о государственных (муниципальных) учреждениях)</li>
                            <li>Единая информационная система в сфере госзакупок</li>
                        </ol>
                    </li>
                    <li> <strong>Технические (вспомогательные) источники (Минэкономразвития России/ЦБ РФ)</strong>
                        <ol style="counter-reset: li 34">
                            <li>Реестр российской системы и плана нумерации Россвязи</li>
                            <li>Классификатор БИК ЦБ РФ</li>
                            <li>Классификаторы адресов ФИАС, КЛАДР</li>
                            <li>Классификаторы ОКВЭД</li>
                        </ol>
                    </li>
                </ul>
            </div>
        </div>
        <div class="loading-overlay modal-pop-close"></div>
    </div>
    <section class="advantages advantages-simple sources-hero-bottom has-bg info-page-bg-alt text-c">
        <div class="container">
            <div class="hero-img-bottom hero-img-bottom-l lazyload" style="background-image: url(/storage/images_web/calendar-left.png);"></div>
            <div class="hero-img-bottom hero-img-bottom-r lazyload" style="background-image: url(/storage/images_web/illustrate-kb-mouse.jpg);"></div>
            <div class="advantages-wrp">
                <div class="page-title-h1">Публикуем сведения от компаний</div>
                <p> Любая организация может рассказать о себе на своей странице в сервисе.РНапример, указать актуальные контакты, загрузить свежую отчетность, лицензии и благодарственные письма клиентов. </p>
                <p> Данные из официальных реестров остаются неизменными, это гарантирует объективность информации. </p> <a href="/business" class="btn btn-green-big" data-goal="article_claiming_cta">Рассказать о своей компании</a> </div>
        </div>
    </section>
</x-layout>