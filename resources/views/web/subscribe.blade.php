@section('title', $title ?? env('APP_NAME'))
@section('description', $description ?? 'Сервис проверки и анализа российских юридических лиц и предпринимателей')

@push('css')
    <link rel="stylesheet" href="/assets/css_web/page_subscribe.css?v={{time()}}" />
    <link rel="stylesheet" href="/assets/css_web/main.css?v={{time()}}" />
@endpush

@section('advantages', 'subs subsvar')

<x-layout>
    <div id="main">
        <div class="wide-container">
            <div class="subscribe-tariffs">
                <h1 class="subs-header">Тарифы</h1>
                <p class="subs-description"> Получите доступ к достоверной информации о компаниях, предпринимателях и физлицах ?;Ф. Сведения?;поступают из 38 официальных источников и обновляются ежедневно </p>
                <div id="js-subscribe-tariff" class="subscribe-tariff">
                    <div class="subscribe-tariffs__block">
                        <div class="subscribe-box">
                            <p class="subscribe-box__title">Профессиональный доступ</p>
                            <div class="subscribe-box__prices">
                                <div class="subscribe-box__item">
                                    <div class="subscribe-box__price"> <span class="subscribe-box__price-description">от</span>355 ₽<span class="subscribe-box__price-description">/мес</span>
                                    </div>
                                </div>
                            </div>
                            <div class="subscribe-box__info">
                                <ul class="subscribe-box__list">
                                    <li>Ежедневное обновление данных о компаниях</li>
                                    <li>Выявление сложных цепочек связей контрагентов</li>
                                    <li>Проверка сведений о руководителях и учредителях</li>
                                    <li>Оценка финансовых показателей</li>
                                    <li>Данные о физлицах из ЕГ?;ЮЛ, ЕГ?;ИП</li>
                                </ul>
                                <button class="subscribe-box__btn">Выбрать</button>
                            </div>
                        </div>
                        <div class="subscribe-box">
                            <p class="subscribe-box__title">Профессиональный доступ <span class="nowrap">+ расширенная</span> проверка физлиц</p>
                            <div class="subscribe-box__prices">
                                <div class="subscribe-box__item">
                                    <div class="subscribe-box__price"> <span class="subscribe-box__price-description">от</span>1?;800 ₽<span class="subscribe-box__price-description">/мес</span>
                                    </div>
                                </div>
                            </div>
                            <div class="subscribe-box__info">
                                <ul class="subscribe-box__list">
                                    <li>Все возможности профессионального доступа</li>
                                    <li>10 отчётов с расширенными сведениями о физлицах в?;месяц</li>
                                </ul> <a href="/subscribe-plus" class="subscribe-box__btn--more" rel="nofollow">Подробнее о тарифе и?;отчётах</a>
                                <button class="subscribe-box__btn">Выбрать</button>
                            </div>
                        </div>
                    </div>
                    <p class="descr"> Нажимая кнопку, я соглашаюсь с публичной <a href="/support/subscribe-offer.html" target="_blank">офертой</a> и <a href="/support/privacy.html" target="_blank">условиями обработки персональных данных</a> </p>
                </div>

            </div>
            <div class="block-demo subs-box margin-top-l">
                <div class="block-demo__image">
                    <svg width="100%" height="100%" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">\n' +
                        <g clip-path="url(#phone_1234)">
                            <path d="M34.8526 12.9784V20.4803H57.3583V12.9784H34.8526ZM50.9682 48.602L41.4187 42.2338C39.1988 40.7558 36.2116 41.0506 34.3215 42.9389L31.8086 45.4499C30.3342 45.2375 26.8287 44.3602 23.2334 40.7649C19.6382 37.1696 18.7609 33.6641 18.5484 32.1897L21.0594 29.6768C22.9478 27.7885 23.2445 24.8032 21.7627 22.5779L15.3963 13.0303C14.4567 11.6218 12.9531 10.7189 11.2681 10.5523C9.58301 10.3875 7.93284 10.9771 6.73692 12.1732L2.75704 16.1512C0.861563 18.0468 -0.138439 20.6366 0.0154747 23.2575C0.3158 28.3601 2.52648 38.6257 13.9496 50.0489C25.3746 61.472 35.6385 63.6827 40.741 63.983C43.3073 64.1434 45.9275 63.163 47.8454 61.2412L51.8253 57.2613C53.0212 56.0654 53.6129 54.4133 53.4462 52.7302C53.2796 51.0452 52.3767 49.5416 50.9682 48.602Z" fill="#346DF1"></path>\n' +
                            <path d="M47.1214 0C37.819 0 30.2422 7.5394 30.2422 16.8793C30.2422 19.7676 30.9923 22.5808 32.4176 25.0938L30.3546 31.283C30.1295 31.9582 30.3171 32.7084 30.8047 33.196C31.3615 33.6967 32.0536 33.9112 32.7177 33.6461L38.9069 31.583C41.4199 33.0083 44.2332 33.7586 47.1214 33.7586C56.4613 33.7586 64.0007 26.1816 64.0007 16.8794C64.0007 7.5394 56.4613 0 47.1214 0V0ZM39.6195 18.7547C38.6067 18.7547 37.7441 17.8921 37.7441 16.8793C37.7441 15.8291 38.6067 15.0038 39.6195 15.0038C40.6697 15.0038 41.495 15.8291 41.495 16.8793C41.495 17.8921 40.6697 18.7547 39.6195 18.7547ZM47.1214 18.7547C46.1086 18.7547 45.246 17.8921 45.246 16.8793C45.246 15.8291 46.1086 15.0038 47.1214 15.0038C48.1716 15.0038 48.9969 15.8291 48.9969 16.8793C48.9969 17.8921 48.1716 18.7547 47.1214 18.7547ZM54.6233 18.7547C53.6105 18.7547 52.7479 17.8921 52.7479 16.8793C52.7479 15.8291 53.6105 15.0038 54.6233 15.0038C55.6735 15.0038 56.4988 15.8291 56.4988 16.8793C56.4988 17.8921 55.6735 18.7547 54.6233 18.7547Z" fill="#D3EAFF"></path>\n' + </g>
                        <defs>
                            <clipPath id="phone_1234">
                                <rect width="64" height="64" fill="white"></rect>
                            </clipPath>
                        </defs>
                    </svg>
                </div>
                <div class="block-demo__content">
                    <div class="block-demo__title">Хотите узнать о возможностях Rusprofile для организаций?
                    </div>
                    <div class="block-demo__text">Оставьте заявку и мы покажем, как сервис поможет решать ваши задачи.
                    </div>
                </div>
                <div class="block-demo__btn btn btn-big" data-goal-param="feedback_ask_q_tariff" data-gb="ask_q_board" data-open-mw-support="">Задать вопрос
                </div>
            </div>
            <div class="gasket" id="capabilities">
                <div class="subs-header subs-header-two">Возможности сервиса
                </div>
                <ul class="features-list cols-5">
                    <li class="feature-block linked">
                        <a href="/features" class="link text subscribe_features"> <i class="ico ico-xl" data-ico="rate"> <svg><use xlink:href="storage/images_web/features-list.svg#rate"></use></svg> </i> <span> Оценка <br>контрагентов </span> </a>
                    </li>
                    <li class="feature-block linked">
                        <a href="/features" class="link text subscribe_features"> <i class="ico ico-xl" data-ico="scales"> <svg><use xlink:href="storage/images_web/features-list.svg#scales"></use></svg> </i> <span> Судебные <br> процессы?;и?;долги </span> </a>
                    </li>
                    <li class="feature-block linked">
                        <a href="/features" class="link text subscribe_features"> <i class="ico ico-xl" data-ico="links"> <svg><use xlink:href="storage/images_web/features-list.svg#links"></use></svg> </i> <span> Связи между <br> компаниями </span> </a>
                    </li>
                    <li class="feature-block linked">
                        <a href="/features" class="link text subscribe_features"> <i class="ico ico-xl" data-ico="portfolio"> <svg><use xlink:href="storage/images_web/features-list.svg#portfolio"></use></svg> </i> <span> Госзакупки <br> ?; </span> </a>
                    </li>
                    <li class="feature-block linked all">
                        <a href="/features" class="link subscribe_features"> <i class="ico ico-xl" data-ico="arrow_right"> <svg><use xlink:href="storage/images_web/features-list.svg#arrow_right"></use></svg> </i> <span> Все <br> возможности </span> </a>
                    </li>
                    <li class="feature-block linked mobile">
                        <a href="/features" class="link subscribe_features"> <span>Все возможности</span> <i class="ico ico-s" data-ico="arrow_right"> <svg><use xlink:href="storage/images_web/features-list.svg#arrow_right"></use></svg> </i> </a>
                    </li>
                </ul>
            </div>
            <div class="gasket" id="FAQ">
                <div class="subs-header subs-header-two">Часто задаваемые вопросы
                </div>
                <div class="faq-block open">
                    <div class="faq-question">На скольких устройствах я могу использовать доступ?
                        <button type="button"></button>
                    </div>
                    <div class="faq-answer">Каждый пользователь имеет личную учетную запись. Использовать ее?;можно на?;любом своем устройстве: персональном компьютере, планшете или смартфоне. Но?;одновременное использование возможно только на?;одном из?;них.
                        <br>
                        <br>Как только вы?;зайдете под своим логином на?;новом устройстве, на?;предыдущем автоматически произойдет выход из?;учетной записи. Переключаться между гаджетами можно смело: все данные в?;учетной записи сохраняются.
                    </div>
                </div>
                <div class="faq-block">
                    <div class="faq-question">В сумму оплаты входит НДС?
                        <button type="button"></button>
                    </div>
                    <div class="faq-answer">Мы?;работаем на?;общей системе налогообложения (ОСНО). Но?;при этом мы?;являемся резидентами Сколково и?;используем льготы по?;НДС (п.?;1?;ст.?;145.1 Налогового кодекса ?;Ф). Именно поэтому наши услуги НДС не?;облагаются.
                    </div>
                </div>
                <div class="faq-block">
                    <div class="faq-question">Вы предоставляете закрывающие документы? Как и когда?
                        <button type="button"></button>
                    </div>
                    <div class="faq-answer">Да, закрывающие документы оформляются для юридических лиц и?;индивидуальных предпринимателей, которые оплачивали доступ по?;счету. Скачать электронные копии документов и?;запросить оригиналы можно в?;личном кабинете в?;разделе Подписка &gt; <a href="https://www.rusprofile.ru/personal/pro_access?menu=payments" target="_blank">Счета и?;Акты</a>.
                        <br>
                        <br>Оригиналы отправляются по?;ЭДО или Почтой ?;оссии в?;течение 10?;рабочих дней после подключения опции в?;личном кабинете.
                    </div>
                </div>
                <div class="faq-block">
                    <div class="faq-question">Как работает автоматическое продление услуги?
                        <button type="button"></button>
                    </div>
                    <div class="faq-answer">Списание платежа за?;следующий период происходит автоматически.
                        <br>
                        <br>Подключается автосписание в?;момент первой оплаты сервиса. Вы?;можете в?;любой момент отключить автопродление в?;личном кабинете в?;разделе Подписка &gt; Настройки подписки &gt; <a href="https://www.rusprofile.ru/personal/pro_access" target="_blank">Отключить автопродление</a>.
                        <br>
                        <br>Если после отключения вы?;захотите снова воспользоваться сервисом, выберите подходящий тариф и?;<a href="https://www.rusprofile.ru/subscribe" target="_blank">оплатите доступ</a> на?;новый период.
                    </div>
                </div>
                <div class="faq-block">
                    <div class="faq-question">Как организован доступ для нескольких сотрудников?
                        <button type="button"></button>
                    </div>
                    <div class="faq-answer">Владельцем подписки может быть частное или юридическое лицо. Он?;оплачивает необходимое количество лицензий?;— по?;числу пользователей.
                        <br>
                        <br>После поступления денежных средств на?;наш счет владелец подписки получает доступ на?;указанный при регистрации e-mail, который является логином для входа в?;личный кабинет, и?;может выдавать доступы в?;разделе Пользователи. Для этого нужно нажать кнопку «Добавить пользователя» и?;ввести e-mail того, кому предоставляется доступ.
                        <br>
                        <br>Добавленный пользователь получает письмо, из?;которого может зайти в?;личный кабинет и?;установить пароль для своей учетной записи. Логином является e-mail пользователя.
                        <br>
                        <br>Владелец может управлять доступом пользователей в?;личном кабинете во?;вкладке Подписка &gt; Пользователи, а?;именно:
                        <ul>
                            <li>предоставлять доступ;</li>
                            <li>деактивировать доступ одного пользователя (например, уволившегося сотрудника) и?;предоставлять освободившийся доступ другому пользователю (например, новому сотруднику);</li>
                            <li>отслеживать активность пользователей в?;сервисе по?;их?;учетным записям.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <section class="relink">
                <div class="title">Другие сервисы Rusprofile
                </div>
                <div class="fs16 relink__cols">
                    <a href="/business" class="relink-item" data-interaction="relink-click-business"> <img src="/storage/images_web/relink-presentation.svg" width="80px" class="ico ico-xxl lazyload" alt=""> <span> <span class="big link">Сервис Бизнес</span> Подтвердите надежность
                        <br>вашей компании </span>
                    </a>
                    <a href="/client-search-offer" class="relink-item" data-interaction="relink-click-search"> <img src="/storage/images_web/relink-contact.svg" width="80px" class="ico ico-xxl lazyload" alt=""> <span> <span class="big link">Поиск клиентов</span> Получите выгрузку b2b-клиентов <span class="nowrap">с контактами</span> </span>
                    </a>
                </div>
            </section>
        </div>
    </div>
    <div id="feedback-bbl-wrap">
        <a href="/support/contact" id="feedback-bbl" data-open-mw-support="" class="feedback-bbl min hidden" data-after-sbm="feedback_ask_q_tariff"> <span class="ico ico-m"> <svg width="24" height="26" viewBox="0 0 24 26" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M21 0.990784H3C1.3125 0.990784 0 2.35016 0 3.99078V17.4908C0 19.1783 1.3125 20.4908 3 20.4908H7.5V24.4283C7.5 24.897 8.01562 25.1783 8.39062 24.897L14.25 20.4908H21C22.6406 20.4908 24 19.1783 24 17.4908V3.99078C24 2.35016 22.6406 0.990784 21 0.990784ZM13.5 13.3658C13.5 13.6002 13.3125 13.7408 13.125 13.7408H6.375C6.14062 13.7408 6 13.6002 6 13.3658V12.6158C6 12.4283 6.14062 12.2408 6.375 12.2408H13.125C13.3125 12.2408 13.5 12.4283 13.5 12.6158V13.3658ZM18 8.86578C18 9.10016 17.8125 9.24078 17.625 9.24078H6.375C6.14062 9.24078 6 9.10016 6 8.86578V8.11578C6 7.92828 6.14062 7.74078 6.375 7.74078H17.625C17.8125 7.74078 18 7.92828 18 8.11578V8.86578Z" fill="white"></path> </svg> </span> </a>

    </div>
</x-layout>