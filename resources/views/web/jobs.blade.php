@section('title', $title ?? env('APP_NAME'))
@section('description', $description ?? 'Сервис проверки и анализа российских юридических лиц и предпринимателей')

@push('css')
    <link rel="stylesheet" href="/assets/css_web/page_jobs.css?v={{time()}}" />
    <link rel="stylesheet" href="/assets/css_web/main.css?v={{time()}}" />
@endpush

@section('advantages', 'jobs-page')

<x-layout>
    <section class="main-section info-page-bg-alt">
        <div class="container">
            <div class="main-section__wrap wrapped-both">
                <h1>Работа в Rusprofile</h1>
                <p>Мы верим, что сплоченный и эффективный коллектив является основой успеха любого проекта. Если вы хотите расти и заниматься интересными задачами, не нуждаетесь в бюрократии и цените эффективную коммуникацию - добро пожаловать в команду!</p>
                <div class="img-holder">
                    <img src="/storage/images_web/image8.jpg" class="lazyload" height="331" alt="Работа в Rusprofile"> 
                    <img src="/storage/images_web/image6.jpg" class="lazyload" height="331" alt="Работа в Rusprofile">
                    <img src="/storage/images_web/image7.jpg" class="lazyload" height="331" alt="Работа в Rusprofile">
                    <img src="/storage/images_web/IMG_8585.jpg" class="lazyload" height="331" alt="Работа в Rusprofile">
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container has-padding-l jobs-block">
            <h2 class="page-title-h2" id="jobs-5">Продуктовая команда</h2>
            <ul class="unstyled">
                <li> <a class="btn btn-plate" href="https://hh.ru/vacancy/86551066?hhtmFrom=employer_vacancies" rel="nofollow" target="_blank" data-label="МОСКВА / REMOTE"> Chief Product Officer <i class="ico" data-ico="outside-link"> <svg><use xlink:href="storage/images_web/icons.svg#outside-link"></use></svg> </i> </a> </li>
            </ul>
            <div class="seporated-block">
                <img src="/storage/images_web/mail.svg" class="ico lazyload" alt="">
                <p> Если вы хотите работать с нами, отправьте письмо с рассказом о себе и резюме на электронную почту <a href="mailto:talents@rusprofile.ru">talents@rusprofile.ru</a> </p>
            </div>
        </div>
    </section>
    <section class="info-page-bg-alt">
        <div class="container has-padding-l jobs-features">
            <h2 class="page-title-h2">Почему у нас интересно работать?</h2>
            <ul class="unstyled fs18">
                <li class="cols-two">
                    <div class="circle"> <img src="/storage/images_web/1.svg" class="ico lazyload" alt=""> </div>
                    <div class="text">
                        <h3 class="page-title-h4">Решаем масштабные задачи</h3>
                        <p>Мы создаем по-настоящему полезный продукт. Ресурс ежедневно используют 700 000 клиентов.</p>
                    </div>
                </li>
                <li class="cols-two">
                    <div class="circle"> <img src="/storage/images_web/2.svg" class="ico lazyload" alt=""> </div>
                    <div class="text">
                        <h3 class="page-title-h4">Сервис Rusprofile находится на стыке продуктов для бизнеса и потребителей</h3>
                        <p> Мы работаем как с частными лицами, так и с компаниями. Но даже в рамках одной компании сотрудники обращаются к сервису с разными задачами и сценариями. Поэтому работа у нас охватывает оба направления — как <strong>b2b так и b2c</strong>. </p>
                    </div>
                </li>
                <li class="cols-two">
                    <div class="circle"> <img src="/storage/images_web/3.svg" class="ico lazyload" alt=""> </div>
                    <div class="text">
                        <h3 class="page-title-h4">Большая часть задач уникальны и не имеют готовых решений</h3>
                        <p>Сервис собирает открытые данные, а команда делает все для актуальности сведений и удобства пользователей. Работа с открытыми данными специфична, поэтому неординарные задачи — неотъемлемая часть наших будней.</p>
                    </div>
                </li>
                <li class="cols-two">
                    <div class="circle"> <img src="/storage/images_web/4.svg" class="ico lazyload" alt=""> </div>
                    <div class="text">
                        <h3 class="page-title-h4">Вызовы сформировали команду сильных инженеров</h3>
                        <p>Задачи разработки уникальны: мы работаем с большими объемами данных из множества официальных источников. Решать их нам помогает фундаментальное понимание разработки и гибкое мышление. Нам важно, что все разработчики глубоко понимают, как исполняется код, который они пишут и могут сделать все правильно. А прикладные знания позволяют нам оптимизировать некоторые процессы, не пожертвовав ни чистотой кода, ни интересами бизнеса.</p>
                    </div>
                </li>
                <li class="cols-two">
                    <div class="circle"> <img src="/storage/images_web/5.svg" class="ico lazyload" alt=""> </div>
                    <div class="text">
                        <h3 class="page-title-h4">Продуктовая команда появилась недавно, но уже показала отличные результаты</h3>
                        <p>Результаты работы продуктовой команды мы измеряем пользой для бизнеса. Она определяется двумя критериями: степенью комфорта работы с сервисом для пользователей и достижением финансовых целей компании.</p>
                    </div>
                </li>
            </ul>
            <div class="text-align-c"> <a href="/about" class="has-arr">Читать больше о проекте<span class="arr"></span></a> </div>
        </div>
    </section>
    <section>
        <div class="container has-padding-l we-can-do-block fs18">
            <h2 class="page-title-h2">Что мы можем вам дать?</h2>
            <ul class="cols-two unstyled">
                <li> <img src="/storage/images_web/team 1.svg" class="ico lazyload" alt="">
                    <p> У нас небольшая команда без бюрократии и фаундеры, которые ценят мнение каждого. Любой из нас может высказаться и не сомневаться, что его услышат. </p>
                </li>
                <li> <img src="/storage/images_web/money 1.svg" class="ico lazyload" alt="">
                    <p> Соцпакета с массажем и фитнесом нет, но есть честные зарплаты и квартальные премии. </p>
                </li>
                <li> <img src="/storage/images_web/marketing 1.svg" class="ico lazyload" alt="">
                    <p> Комфортный офис в Москва-Сити и частичная удаленка. </p>
                </li>
                <li> <img src="/storage/images_web/analysis 1.svg" class="ico lazyload" alt="">
                    <p> Продуктовая культура находится на этапе становления, и вы можете стать частью этого процесса. </p>
                </li>
                <li> <img src="/storage/images_web/time-management 1.svg" class="ico lazyload" alt="">
                    <p> У нас лаконичные процессы и короткие циклы разработки. Благодаря этому мы оперативно получаем обратную связь от пользователей и быстрее разрабатываем продукт. </p>
                </li>
                <li> <img src="/storage/images_web/new 1.svg" class="ico lazyload" alt="">
                    <p> Сейчас идеальный момент для новых продуктовых кейсов: неограниченное число экспериментов с продуктом, большая аудитория, много неизведанных сегментов пользователей и идей для развития. </p>
                </li>
            </ul>
            <!--div class="text-align-c"> <a href="/team" class="has-arr">Читать больше о команде<span class="arr"></span></a> </div-->
        </div>
    </section>
    <section class="info-page-bg-alt">
        <div class="container has-padding-l faq-block-container">
            <h2 class="page-title-h2">Вопросы и ответы</h2>
            <p class="fs18"> Мы собрали несколько распространенных вопросов и подготовили ответы. Рассказать другие подробности будем рады на личном интервью. </p>
            <div class="gasket">
                <div class="faq-block open">
                    <div class="faq-question"> Сколько людей работает в Rusprofile?
                        <button type="button"></button>
                    </div>
                    <div class="faq-answer"> В Rusprofile 30 сотрудников. Из них 20 — инженеры и продуктовая команда. Узнать больше можно на странице "<a href="/team">Команда</a>". </div>
                </div>
                <div class="faq-block">
                    <div class="faq-question"> Rusprofile развивается на собственные средства или на инвестиционные?
                        <button type="button"></button>
                    </div>
                    <div class="faq-answer">
                        <p> У нас классический SaaS продукт, поэтому основные наши статьи расходов — команда и маркетинг. Сейчас мы пополняем команду новыми талантами, но все еще оставляем ее лаконичной. Выручки достаточно на обе статьи затрат, поэтому инвестиции мы пока не привлекаем. </p>
                    </div>
                </div>
                <div class="faq-block">
                    <div class="faq-question"> Кто основал Rusprofile?
                        <button type="button"></button>
                    </div>
                    <div class="faq-answer">
                        <p> Проект создали выпускники ВМК МГУ — Илья Мошин и Дмитрий Стрелков. Они запускали разные бизнесы, прежде чем сфокусировались на Rusprofile. </p>
                        <p> Подробнее об основателях можно почитать на странице "<a href="/team">Команда</a>". </p>
                    </div>
                </div>
                <div class="faq-block">
                    <div class="faq-question"> Сколько лет компании и как она развивалась?
                        <button type="button"></button>
                    </div>
                    <div class="faq-answer">
                        <p> Rusprofile создали в 2013 году, а в 2016 проект уже собирал аудиторию 300 000 посетителей в день. </p>
                        <p> В 2016 основатели сформировали команду разработки, с которой стали актуализировать данные и расширять возможности сервиса. </p>
                        <p> К 2019 году они вывели компанию на выручку в 40 млн рублей, а в середине 2020 года изменили бизнес-модель с рекламной на подписную. </p>
                        <p> Судя по показателям 2021 года, перемены оказались успешными: выручка за первую половину года превысила выручку за весь 2020 год и составила 91 млн, а команда выросла в три раза. </p>
                        <p> Подробнее о развитии компании - на странице "<a href="/about">ОРпроекте</a>". </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>