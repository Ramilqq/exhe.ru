@section('title', $title ?? env('APP_NAME'))
@section('description', $description ?? 'Сервис проверки и анализа российских юридических лиц и предпринимателей')

<x-layout>
    <section class="main-section info-page-bg-alt">
        <div class="container">
            <div class="main-section__wrap">
                <h1>Rusprofile — сервис проверки и анализа контрагентов</h1>
                <p class="main-section-subtitle"> Мы создали Rusprofile, чтобы все ключевые данные о российских организациях можно было найти на одном сайте </p>
                <ul class="grid-row unstyled">
                    <li class="col-6"> <i class="ico ico-xl" data-ico="office_building"> <svg><use xlink:href="storage/images_web/icons.svg#office_building"></use></svg> </i> <strong class="big-title">10 млн</strong>
                        <p>?&nbsp;оссийских юридических?&nbsp;лиц</p>
                    </li>
                    <li class="col-6"> <i class="ico ico-xl" data-ico="businessman"> <svg><use xlink:href="storage/images_web/icons.svg#businessman"></use></svg> </i> <strong class="big-title">16 млн</strong>
                        <p>Индивидуальных предпринимателей</p>
                    </li>
                </ul>
                <div class="illustrate-hero lazyload"></div>
            </div>
        </div>
    </section>
    <section class="first-text-block">
        <div class="container has-padding">
            <div class="img-cols-block cols-centered">
                <h2 class="page-title-h3 no-margin-top">Непрерывно собираем актуальную информацию из открытых официальных источников. Показываем все сведения о юридических лицах в структурированном виде.</h2>
                <div class="img-cols-block-img img-cols-block-img-no-margin img-fader"> <img data-srcset="/storage/images_web/about/responsive/features.png 1x, /storage/images_web/about/responsive/features@2x.png 2x, /storage/images_web/about/responsive/features@3x.png 3x, /storage/images_web/about/responsive/features@4x.png 4x" data-origin="/storage/images_web/about/responsive/features.png" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" class="lazyload hide-sub-mobile" height="355" alt="Наша задача — искать и предоставлять самые актуальные данные и давать возможности их легко анализировать и делать выводы."> <img data-srcset="/storage/images_web/about/responsive/features_mobile.png 1x, /storage/images_web/about/responsive/features_mobile@2x.png 2x, /storage/images_web/about/responsive/features_mobile@3x.png 3x, /storage/images_web/about/responsive/features_mobile@4x.png 4x" data-origin="/storage/images_web/about/responsive/features_mobile.png" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" class="lazyload show-sub-mobile" height="304" alt="Наша задача — искать и предоставлять самые актуальные данные и давать возможности их легко анализировать и делать выводы."> </div>
                <a href="/sources" class="has-arr">Источники данных<span class="arr"></span></a> </div>
        </div>
    </section>
    <section class="text-block info-page-bg-alt about-info-block">
        <div class="container has-padding-l">
            <div class="text-align-c">
                <h2 class="page-title-h2">Приносим пользу</h2>
                <p>Помогаем пользователям выбирать контрагентов и принимать взвешенные решения о сотрудничестве.</p>
                <p>Сервисом пользуются менеджеры по продажам и закупкам, юристы, бухгалтеры, финансисты, специалисты по безопасности, руководители и собственники компаний.</p> <img data-srcset="/storage/images_web/about/responsive/clients.png 1x, /storage/images_web/about/responsive/clients@2x.png 2x, /storage/images_web/about/responsive/clients@3x.png 3x, /storage/images_web/about/responsive/clients@4x.png 4x" data-origin="/storage/images_web/about/responsive/clients.png" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" class="lazyload hide-sub-mobile" height="138" alt="Rusprofile повышает прозрачность деятельности компании, существенно сокращает время на анализ и принятие решения о сотрудничестве и сохраняет деньги бизнесу."> <img data-srcset="/storage/images_web/about/responsive/clients-mobile.png 1x, /storage/images_web/about/responsive/clients-mobile@2x.png 2x, /storage/images_web/about/responsive/clients-mobile@3x.png 3x, /storage/images_web/about/responsive/clients-mobile@4x.png 4x" data-origin="/storage/images_web/about/responsive/clients-mobile.png" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" class="lazyload show-sub-mobile" height="85" alt="Rusprofile повышает прозрачность деятельности компании, существенно сокращает время на анализ и принятие решения о сотрудничестве и сохраняет деньги бизнесу."> </div>
        </div>
    </section>
    <section class="info-page-bg-alt">
        <div class="container">
            <div class="cols-two box-white comment-master"> <img data-srcset="/storage/images_web/about/responsive/viktor.jpg 1x, /storage/images_web/about/responsive/viktor@2x.jpg 2x, /storage/images_web/about/responsive/viktor@3x.jpg 3x, /storage/images_web/about/responsive/viktor@4x.jpg 4x" data-origin="/storage/images_web/about/responsive/viktor.jpg" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" class="lazyload box-img" alt="Виктор, коммерческий директор">
                <div class="comment-text-block fs24">
                    <div class="tag">Фармацевтическая компания</div>
                    <blockquote class="quoted">
                        <p> Направление моей работы — продажи, поэтому я ежедневно работаю с контрагентами. Так как клиенты платят за товар после его получения, их способность исполнять финансовые обязательства по договору для нас имеет большое значение. Я детально изучаю контрагента с помощью Rusprofile, проверяю его платежеспособность и выношу свой вердикт: быть сделке или нет. </p>
                    </blockquote>
                    <div class="text-align-r description">- Виктор, коммерческий директор</div>
                </div>
            </div>
            <div class="cols-two seporate-cols">
                <div class="comment-text-block">
                    <div class="tag">Строительно-производственная компания</div>
                    <blockquote class="quoted">
                        <p class="faded-text js-show-faded-text"> Мы обеспечиваем строительными материалами большое количество объектов. Поэтому у нас много поставщиков. Однажды мы не проверили компанию и столкнулись с обманом: не получили товар и не смогли вернуть предоплату. Поэтому решили, что каждую компанию нужно проверять и оценивать. Когда стоимость контракта с поставщиком превышает определенную сумму, я сразу же проверяю компанию через Rusprofile. Максимум за полчаса я узнаю почти все про своего потенциального поставщика. </p>
                    </blockquote>
                    <div class="author flex"> <img class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" data-origin="/storage/images_web/about/author_1.jpg" data-src="/storage/images_web/about/author_1.jpg" alt="Алла" width="48" height="48">
                        <div class="author-name"> Алла
                            <div class="description">Начальник отдела снабжения</div>
                        </div>
                    </div>
                </div>
                <div class="comment-text-block">
                    <div class="tag">Компания по производству упаковочного оборудования</div>
                    <blockquote class="quoted">
                        <p class="faded-text js-show-faded-text"> Мы известны в ?&nbsp;оссии, но в некоторых регионах о нас знают мало или не знают совсем. Возможности и времени регулярно летать на Дальний Восток или во Владикавказ, чтобы знакомиться с потенциальными клиентами, у меня нет. Поэтому я использую Rusprofile — по коду ОКВЭД нахожу в регионе все предприятия, отбираю компании, которые потенциально смогут позволить наше оборудование. Смотрю на их выручку, наличие долгов и судебных дел. Это здорово экономит время: я не трачу время на нецелевых клиентов, которые не смогут приобрести наш продукт. </p>
                    </blockquote>
                    <div class="author flex"> <img class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" data-origin="/storage/images_web/about/author_2.jpg" data-src="/storage/images_web/about/author_2.jpg" alt="Алексей" width="48" height="48">
                        <div class="author-name"> Алексей
                            <div class="description">Менеджер по продажам</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container has-padding-l">
            <div class="cols-two comment-alt">
                <div class="left-part">
                    <div class="page-title"> Rusprofile помогает </div>
                    <div class="author flex"> <img class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" data-origin="/storage/images_web/about/lida.png" data-src="/storage/images_web/about/lida.png" alt="Лидия" width="48" height="48">
                        <div class="author-name"> Лидия Козлова,
                            <div class="description"> инженер службы поддержки сервиса Rusprofile </div>
                        </div>
                    </div>
                </div>
                <div class="right-part text-block fs24">
                    <blockquote class="quoted">
                        <p class="faded-text js-show-faded-text"> В Rusprofile каждый день приходит много обращений и писем. Одно из них запомнилось особенно. Научный сотрудник Нижегородского государственного педагогического института им. К.Минина написал, что работает над статьей о российских эргонимах, производных от имён древнерусских языческих божеств. Эргонимы — это названия различных деловых объединений — организаций, учреждений. На сайте Rusprofile он нашел множество коммерческих фирм и иных организаций, чьи названия являются производными от названий божеств. Например, по запросу «Сварог» он нашел 544 юрлица, а по запросу «Велес» – целых 4276. Так как такой большой объем данных сложно обработать вручную, он попросил о содействии нашего IT-специалиста, который помог бы собрать статистику. Его интересовало : распределение результатов по хронологии возникновения таких организаций, географическое распределение, связь названия организации и вида деятельности. Мы помогли с этим запросом и предоставили необходимые данные. Автор опубликовал статью и поблагодарил нас за содействие. </p>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>
    <section class="info-page-bg-alt advanteges-cols text-block">
        <div class="container has-padding-l">
            <div class="text-align-c">
                <h2 class="page-title-h2 no-margin-top">Наши приоритеты</h2>
                <ul class="cols-three">
                    <li> <img data-srcset="/storage/images_web/about/responsive/card_1.png 1x, /storage/images_web/about/responsive/card_1@2x.png 2x, /storage/images_web/about/responsive/card_1@3x.png 3x, /storage/images_web/about/responsive/card_1@4x.png 4x" data-origin="/storage/images_web/about/responsive/card_1.png" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" class="lazyload" height="306" width="306" alt="Качество данных">
                        <div class="title">Качество данных</div>
                        <p>Надежность, достоверность, актуальность и полнота сведений. Используем специальные технические решения для работы с open data</p>
                    </li>
                    <li> <img data-srcset="/storage/images_web/about/responsive/card_2.png 1x, /storage/images_web/about/responsive/card_2@2x.png 2x, /storage/images_web/about/responsive/card_2@3x.png 3x, /storage/images_web/about/responsive/card_2@4x.png 4x" data-origin="/storage/images_web/about/responsive/card_2.png" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" class="lazyload" height="306" width="306" alt="Удобство интерфейса">
                        <div class="title">Удобство интерфейса</div>
                        <p>Понятный интерфейс и четкая структура помогают анализировать представленные данные и делать выводы быстрее</p>
                    </li>
                    <li> <img data-srcset="/storage/images_web/about/responsive/card_3.png 1x, /storage/images_web/about/responsive/card_3@2x.png 2x, /storage/images_web/about/responsive/card_3@3x.png 3x, /storage/images_web/about/responsive/card_3@4x.png 4x" data-origin="/storage/images_web/about/responsive/card_3.png" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" class="lazyload" height="306" width="306" alt="Количество задач">
                        <div class="title">Количество задач</div>
                        <p>Количество задач, которые пользователи могут решить с помощью сервиса, постоянно растет</p>
                    </li>
                </ul> <a href="/jobs" class="has-arr">Присоединиться к команде<span class="arr"></span></a> </div>
        </div>
    </section>
    <section>
        <div class="container has-padding-l about-team-block text-block">
            <h2 class="page-title-h2">Команда Rusprofile</h2>
            <div class="img-cols-block cols-centered">
                <div class="img-cols-block-img"> <img data-srcset="/storage/images_web/about/responsive/team.jpg 1x, /storage/images_web/about/responsive/team@2x.jpg 2x, /storage/images_web/about/responsive/team@3x.jpg 3x, /storage/images_web/about/responsive/team@4x.jpg 4x" data-origin="/storage/images_web/about/responsive/team.jpg" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" class="lazyload" height="283" alt="Команда Rusprofile"> </div>
                <ul class="unstyled about-features-list text">
                    <li> <i class="ico ico-s" data-ico="star"> <svg><use xlink:href="storage/images_web/icons_1.svg#star"></use></svg> </i> Основатели <strong>Илья Мошин</strong> и <strong>Дмитрий Стрелков</strong>, выпускники факультета вычислительной математики и кибернетики МГУ </li>
                    <li> <i class="ico ico-s" data-ico="star"> <svg><use xlink:href="storage/images_web/icons_1.svg#star"></use></svg> </i> Инженеры с фундаментальным пониманием разработки </li>
                    <li> <i class="ico ico-s" data-ico="star"> <svg><use xlink:href="storage/images_web/icons_1.svg#star"></use></svg> </i> Профессиональная продуктовая команда: продакт-менеджеры, дизайнер, редактор </li>
                    <li> <i class="ico ico-s" data-ico="star"> <svg><use xlink:href="storage/images_web/icons_1.svg#star"></use></svg> </i> Квалифицированная поддержка пользователей: инженер технической поддержки и менеджер по работе с корпоративными клиентами </li>
                </ul> <a href="/team" class="has-arr">Больше про команду<span class="arr"></span></a> </div>
        </div>
    </section>
    <section class="section-news info-page-bg-alt">
        <div class="container has-padding">
            <h3 class="page-title page-title-h3">Мы в прессе</h3>
            <div class="section-news-wrapper">
                <div class="section-news-slider">
                    <div class="section-news-items">
                        <div class="white-box">
                            <a href="https://rb.ru/story/startupwed-rusprofile/" rel="nofollow" target="_blank" class="section-news-title">«В запуск мы вложили только наше время». Кейс Rusprofile: с нуля до 200 млн рублей годового оборота за пять лет <i class="ico" data-ico="outside-link"> <svg><use xlink:href="storage/images_web/icons_1.svg#outside-link"></use></svg> </i>
                            </a>
                            <div class="section-news-bottom">
                                <time datetime="2021-09-08 19:24:00">08 сентября 2021 • Статья в СМИ </time>
                                <div> <img src="storage/images_web/fab51aa3d4d7c3d405d01f680ddf7964.jpg" alt="«В запуск мы вложили только наше время». Кейс Rusprofile: с нуля до 200 млн рублей годового оборота за пять лет"> </div>
                            </div>
                        </div>
                        <div class="white-box">
                            <a href="https://vc.ru/marketing/298312-keys-rusprofile-kak-segmentirovat-auditoriyu-v-servise-s-700-000-poseshcheniy-v-den" rel="nofollow" target="_blank" class="section-news-title">Кейс Rusprofile: как сегментировать аудиторию в сервисе с 700 000 посещений в день <i class="ico" data-ico="outside-link"> <svg><use xlink:href="storage/images_web/icons_1.svg#outside-link"></use></svg> </i>
                            </a>
                            <div class="section-news-bottom">
                                <time datetime="2021-09-29 19:46:00">29 сентября 2021 • Статья в СМИ </time>
                                <div> <img src="storage/images_web/0ee1ca44a88038adb82acf40628cb078.jpg" alt="Кейс Rusprofile: как сегментировать аудиторию в сервисе с 700 000 посещений в день"> </div>
                            </div>
                        </div>
                        <div class="white-box">
                            <a href="https://vc.ru/hr/237212-zachem-razdelyat-produktovuyu-komandu-na-core-i-growth-orgstruktura-dlya-rusprofile" rel="nofollow" target="_blank" class="section-news-title">Зачем разделять продуктовую команду на Core и Growth: оргструктура для Rusprofile <i class="ico" data-ico="outside-link"> <svg><use xlink:href="storage/images_web/icons_1.svg#outside-link"></use></svg> </i>
                            </a>
                            <div class="section-news-bottom">
                                <time datetime="2021-04-22 19:47:00">22 апреля 2021 • Статья в СМИ </time>
                                <div> <img src="storage/images_web/2432f4887556f81aee54dd941f63139d.jpg" alt="Зачем разделять продуктовую команду на Core и Growth: оргструктура для Rusprofile"> </div>
                            </div>
                        </div>
                        <div class="white-box">
                            <a href="https://hightech.fm/2019/09/30/open-bigdata" rel="nofollow" target="_blank" class="section-news-title">От проверки контрагентов до предсказания преступлений: почему открытые данные приносят пользу и как это происходит в ?&nbsp;оссии <i class="ico" data-ico="outside-link"> <svg><use xlink:href="storage/images_web/icons_1.svg#outside-link"></use></svg> </i>
                            </a>
                            <div class="section-news-bottom">
                                <time datetime="2021-09-30 19:47:00">30 сентября 2021 • Статья в СМИ </time>
                                <div> <img src="storage/images_web/2b9a45235c889d042c1ad43b3eb6cbc9.jpg" alt="От проверки контрагентов до предсказания преступлений: почему открытые данные приносят пользу и как это происходит в ?&nbsp;оссии"> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="try-block"> <a href="/articles" class="relative">Все материалы<span class="arr"></span></a> </div>
        </div>
    </section>
</x-layout>