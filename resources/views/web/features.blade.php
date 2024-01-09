@section('title', $title ?? env('APP_NAME'))
@section('description', $description ?? 'Сервис проверки и анализа российских юридических лиц и предпринимателей')

@push('css')
    <link rel="stylesheet" href="/assets/css_web/page_features.css?v={{time()}}" />
    <link rel="stylesheet" href="/assets/css_web/main.css?v={{time()}}" />
@endpush

@section('advantages', 'features-page advantages-two')

<x-layout>
    <section class="main-section info-page-bg-alt lazyload">
        <div class="container centered-wrp">
            <div class="main-section__wrap_features">
                <h1>Все возможности сервиса Rusprofile</h1>
                <p class="main-section-subtitle strong">Ключевые данные о любой организации</p>
                <nav class="sections-nav">
                    <ul>
                        <li><a href="#advantages-stability">Экспресс-анализ надежности</a></li>
                        <li><a href="#advantages-story">История изменений</a></li>
                        <li><a href="#advantages-registers">Специальные реестры</a></li>
                        <li><a href="#advantages-changes">Отслеживание изменений</a></li>
                        <li><a href="#advantages-features-connections">Связи и аффилированность</a></li>
                        <li><a href="#advantages-arb">Арбитражные дела</a></li>
                        <li><a href="#advantages-fssp">Исполнительные производства</a></li>
                        <li><a href="#advantages-company">Доступ для компаний</a></li>
                        <li><a href="#advantages-failure">Банкротства</a></li>
                        <li><a href="#advantages-features-gos">Участие в госзакупках</a></li>
                        <li><a href="#advantages-features-finances">Финансовое состояние</a></li>
                        <li><a href="#advantages-official">Ежедневное обновление данных</a></li>
                        <li><a href="#advantages-features-license">Действующие лицензии</a></li>
                        <li><a href="#advantages-features-checks">Плановые и внеплановые проверки</a></li>
                        <li><a href="#advantages-features-contacts">Контакты</a></li>
                        <li><a href="#advantages-adv_search">Подбор контрагентов</a></li>
                        <li><a href="#advantages-features-accounting">Бухгалтерская отчётность</a></li>
                        <li><a href="#advantages-features-egrul">Выписки из ЕГ?&nbsp;ЮЛ</a></li>
                        <li><a href="#advantages-features-geo">Филиалы и представительства</a></li>
                        <li><a href="#features-bottom-block">Профессиональный доступ</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
    <section class="advantages text-l advantages-stability active" id="advantages-stability">
        <div class="container centered-wrp">
            <div class="advantages-wrp">
                <div class="advantages-title">
                    <div class="page-title">Экспресс-анализ надежности</div>
                </div>
                <div class="advantages-body">
                    <div class="cards">
                        <div class="card-one lazyload"></div>
                        <div class="card-two lazyload"></div>
                    </div>
                    <p class="strong">Автоматическая проверка компании по более чем 50 факторам риска.</p>
                    <p>Показывает степень надежности контрагента: низкая, средняя и высокая. Сервис выявляет зоны риска и даёт рекомендации для безопасного сотрудничества. Особенно полезен для быстрой проверки большого количества контрагентов.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="advantages text-r advantages-story" id="advantages-story">
        <div class="container centered-wrp">
            <div class="advantages-wrp">
                <div class="advantages-title">
                    <div class="page-title">История изменений</div>
                </div>
                <div class="advantages-body">
                    <div class="cards">
                        <div class="card-one lazyload"></div>
                    </div>
                    <p class="strong">Перечень ключевых фактов деятельности организации в прошлом.</p>
                    <p>Содержит данные из реестра налоговой, системы госзакупок, картотеки судов, банка исполнительных производств и других баз. Самая востребованная информация — о предыдущих адресах, прежних руководителях и собственниках компании, изменениях уставного капитала и долей в нем.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="advantages text-l advantages-registers" id="advantages-registers">
        <div class="container centered-wrp">
            <div class="advantages-wrp">
                <div class="advantages-title">
                    <div class="page-title">Специальные реестры</div>
                </div>
                <div class="advantages-body">
                    <div class="cards">
                        <div class="card-one lazyload"></div>
                        <div class="card-two lazyload"></div>
                    </div>
                    <p class="strong"> Отметки о компании в специальных реестрах — показатель повышенных рисков взаимодействия с контрагентом. </p>
                    <p> К ним относятся сведения из реестров дисквалифицированных лиц и недобросовестных поставщиков, а также информация о недостоверности данных. Если такие отметки есть, рекомендуется провести более тщательную проверку. </p>
                </div>
            </div>
        </div>
    </section>
    <section class="advantages advantages-simple search-one lazyload info-page-bg-alt text-c" id="advantages-changes">
        <div class="container">
            <div class="advantages-wrp">
                <div class="advantages-title">
                    <div class="page-title-h1">Отслеживание изменений</div>
                </div>
                <div class="advantages-body">
                    <p> Выберите любую организацию, чтобы своевременно узнавать о важных <span class="nowrap">обновлениях у нее.</span> </p>
                    <p> Вы первыми получите сведения о новом руководителе, изменении долей учредителей, смене адреса компании, получении новой лицензии и о других событиях. </p>
                    <div class="main-search">
                        <div class="main-search-wrap">
                            <form id="search-form-multiple-1" action="/search" class="main-search-form index-search-form search-form-multiple" method="GET" onsubmit="return (this.elements.namedItem('query').value.trim().length > 2)">
                                <div class="input-holder">
                                    <input name="query" class="index-search-input" type="text" placeholder="Искать по названию, адресу, руководителю, учредителям, ОГРН и ИНН" data-prefix="Поиск" maxlength="100" autocomplete="off">
                                    <button type="submit" class="search-btn waves-effect waves-light"> <i class="ico" data-ico="search"> <svg><use xlink:href="/storage/images_web/icons.svg#search"></use></svg> </i> </button> <span class="finded-count"></span> </div>
                                <input type="hidden" class="search_inactive" name="search_inactive" value="0"> </form>
                            <div class="search-drop"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="illustrate-l"></div>
        <div class="illustrate-r"></div>
    </section>
    <section class="advantages text-r advantages-features-connections" id="advantages-features-connections">
        <div class="container centered-wrp">
            <div class="advantages-wrp">
                <div class="advantages-title">
                    <div class="page-title">Связи и аффилированность</div>
                </div>
                <div class="advantages-body">
                    <div class="cards">
                        <div class="card-one lazyload"></div>
                        <div class="card-two lazyload"></div>
                    </div>
                    <p class="strong"> Обучение связей позволит получить более полное представление о деятельности организации. </p>
                    <p> Можно узнать об аффилированности с “однодневками” и выявить сложные цепочки контрагентов. Также это поможет предупредить некоторые налоговые риски. Доступны актуальные сведения и история изменений. </p>
                </div>
            </div>
        </div>
    </section>
    <section class="advantages text-l advantages-arb" id="advantages-arb">
        <div class="container centered-wrp">
            <div class="advantages-wrp">
                <div class="advantages-title">
                    <div class="page-title">Арбитражные дела</div>
                </div>
                <div class="advantages-body">
                    <div class="cards">
                        <div class="card-one lazyload"></div>
                        <div class="card-two lazyload"></div>
                    </div>
                    <p class="strong"> Анализ арбитражных споров позволит больше узнать об отношениях компании с ее контрагентами или госорганами. </p>
                    <p> Обратите особое внимание на дела, где организация является ответчиком, а сумма исковых требований велика. Поражение в таких процессах может негативно сказаться на деятельности компании и ее способности выполнять обязательства. </p>
                </div>
            </div>
        </div>
    </section>
    <section class="advantages text-r advantages-fssp" id="advantages-fssp">
        <div class="container centered-wrp">
            <div class="advantages-wrp">
                <div class="advantages-title">
                    <div class="page-title">Исполнительные производства</div>
                </div>
                <div class="advantages-body">
                    <div class="cards">
                        <div class="card-one lazyload"></div>
                        <div class="card-two lazyload"></div>
                    </div>
                    <p class="strong"> Данные о задолженностях, а также требованиях неимущественного характера, которые переданы на исполнение судебным приставам. </p>
                    <p> Большие долги или аресты имущества могут существенно влиять на деятельность организации и ее устойчивость. Тогда такие факты говорят о ненадежности компании. </p>
                </div>
            </div>
        </div>
    </section>
    <section class="advantages advantages-simple subscribe-block lazyload info-page-bg-alt text-c" id="advantages-company">
        <div class="container">
            <div class="advantages-wrp">
                <div class="advantages-title">
                    <div class="page-title-h1">Доступ для компании</div>
                </div>
                <div class="advantages-body">
                    <p> Удобное подключение для компаний с доступом для нескольких сотрудников. </p>
                    <p> Управлять учетными записями легко: добавляйте новые и отключайте неактуальные доступы в личном кабинете. Корпоративным доступом уже пользуются более 50 тысяч организаций. </p>
                    <div class="companies-img"> <img data-srcset="/images/features-page/responsive/Frame427.png 1x, /images/features-page/responsive/Frame427@2x.png 2x, /images/features-page/responsive/Frame427@3x.png 3x, /images/features-page/responsive/Frame427@4x.png 4x" data-origin="/images/features-page/responsive/Frame427.png" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" class="lazyload hide-sub-mobile" alt=""> <img data-srcset="/images/features-page/responsive/Group482.png 1x, /images/features-page/responsive/Group482@2x.png 2x, /images/features-page/responsive/Group482@3x.png 3x, /images/features-page/responsive/Group482@4x.png 4x" data-origin="/images/features-page/responsive/Group482.png" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" class="lazyload show-sub-mobile" alt=""> </div> <a href="/subscribe?show_jur=true" class="btn btn-green-big">Подключить свою организацию</a> </div>
            </div>
        </div>
    </section>
    <section class="advantages text-l advantages-failure" id="advantages-failure">
        <div class="container centered-wrp">
            <div class="advantages-wrp">
                <div class="advantages-title">
                    <div class="page-title">Банкротства</div>
                </div>
                <div class="advantages-body">
                    <div class="cards">
                        <div class="card-one lazyload card-one-sec"></div>
                        <div class="card-one lazyload"></div>
                        <div class="card-two lazyload"></div>
                    </div>
                    <p class="strong"> Уведомления о процедуре банкротства помогут вам первыми узнать о проблемах контрагента. </p>
                    <p> Сервис Rusprofile содержит сведения о судебных актах о возбуждении банкротного дела, введении наблюдения, внешнего управления, открытия и завершения конкурсного производства, банкротства компании и других событиях. </p>
                </div>
            </div>
        </div>
    </section>
    <section class="advantages text-r advantages-features-gos" id="advantages-features-gos">
        <div class="container centered-wrp">
            <div class="advantages-wrp">
                <div class="advantages-title">
                    <div class="page-title">Участие в госзакупках</div>
                </div>
                <div class="advantages-body">
                    <div class="cards">
                        <div class="card-one lazyload"></div>
                        <div class="card-two lazyload"></div>
                    </div>
                    <p class="strong"> Перечни поставщиков и покупателей, а также сведения о заключенных с ними контрактах. </p>
                    <p> Сведения позволят выявить направления сбыта и получить информацию об организациях-конкурентах, участвующих в закупках по законам 223-ФЗ, 44-ФЗ и 94-ФЗ. </p>
                </div>
            </div>
        </div>
    </section>
    <section class="advantages text-l advantages-features-finances" id="advantages-features-finances">
        <div class="container centered-wrp">
            <div class="advantages-wrp">
                <div class="advantages-title">
                    <div class="page-title">Финансовое состояние</div>
                </div>
                <div class="advantages-body">
                    <div class="cards">
                        <div class="card-one lazyload"></div>
                        <div class="card-two lazyload"></div>
                    </div>
                    <p class="strong"> Оцените финансовую устойчивость, рентабельность и ликвидность контрагента. </p>
                    <p> Сведения о выручке, прибыли и иных показателях бухотчетности. Сервис поможет узнать о налоговых спецрежимах, долгах перед бюджетом и уплаченных налогах компании. Особое преимущество - данные финанализа, рассчитанные автоматически. Например, коэффициенты финансовой устойчивости и соотношения заемного и собственного капитала. </p>
                </div>
            </div>
        </div>
    </section>
    <section class="advantages advantages-simple advantages-official info-page-bg-alt text-c" id="advantages-official">
        <div class="advantages-official-first lazyload">
            <div class="container">
                <div class="advantages-title">
                    <div class="page-title-h1">Ежедневное обновление данных</div>
                </div>
                <div class="advantages-body">
                    <p> Найдите нужную организацию, чтобы получить о ней максимум информации. </p>
                    <p> Самые актуальные сведения обо всех юридических лицах и индивидуальных предпринимателях в ?&nbsp;Ф. Мы ежедневно обновляем информацию в сервисе по всем источникам данных. </p>
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
                    <div class="main-search">
                        <div class="main-search-wrap">
                            <form id="search-form-multiple-2" action="/search" class="main-search-form index-search-form search-form-multiple" method="GET" >
                                <div class="input-holder">
                                    <input name="query" class="index-search-input" type="text" placeholder="Искать по названию, адресу, руководителю, учредителям, ОГРН" data-prefix="Поиск" maxlength="100" autocomplete="off">
                                    <button type="submit" class="search-btn waves-effect waves-light"> <i class="ico" data-ico="search"> <svg><use xlink:href="storage/images_web/icons.svg#search"></use></svg> </i> </button> <span class="finded-count"></span> </div>
                                <input type="hidden" class="search_inactive" name="search_inactive" value="0"> </form>
                            <div class="search-drop"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="illustrate-hero illustrate-hero-official-l lazyload" data-bg="/images/illustrations/block-official.png"></div>
            <div class="illustrate-hero illustrate-hero-official-r lazyload" data-bg="/images/illustrations/plant_2.png"></div>
        </div>
    </section>
    <section class="advantages text-r advantages-features-license" id="advantages-features-license">
        <div class="container centered-wrp">
            <div class="advantages-wrp">
                <div class="advantages-title">
                    <div class="page-title">Действующие лицензии</div>
                </div>
                <div class="advantages-body">
                    <div class="cards">
                        <div class="card-one lazyload"></div>
                        <div class="card-two lazyload"></div>
                    </div>
                    <p class="strong"> Для некоторых видов деятельности нужна лицензия. Перед началом сотрудничества в таких сферах убедитесь, что она есть у контрагента. </p>
                    <p> Кроме того, наличие любой лицензии у организации является дополнительным подтверждением надежности: для ее получения необходимо пройти комплексную проверку. </p>
                </div>
            </div>
        </div>
    </section>
    <section class="advantages text-l advantages-features-checks" id="advantages-features-checks">
        <div class="container centered-wrp">
            <div class="advantages-wrp">
                <div class="advantages-title">
                    <div class="page-title">Плановые и внеплановые проверки</div>
                </div>
                <div class="advantages-body">
                    <div class="cards">
                        <div class="card-one lazyload"></div>
                        <div class="card-two lazyload"></div>
                    </div>
                    <p class="strong"> Сведения о проверках компании государственными ведомствами. </p>
                    <p> Обратите внимание на внеплановые проверки: часто они являются следствием проблем управленческого характера. ?&nbsp;езультаты проведенных проверок помогут узнать больше о качестве проработки определенных сфер деятельности организации. </p>
                </div>
            </div>
        </div>
    </section>
    <section class="advantages text-r advantages-features-contacts" id="advantages-features-contacts">
        <div class="container centered-wrp">
            <div class="advantages-wrp">
                <div class="advantages-title">
                    <div class="page-title">Контакты</div>
                </div>
                <div class="advantages-body">
                    <div class="cards">
                        <div class="card-one lazyload"></div>
                        <div class="card-two lazyload"></div>
                    </div>
                    <p class="strong"> Связывайтесь с потенциальными партнерами и?&nbsp;клиентами. </p>
                    <p> На страницах организаций представлены их телефоны, электронные адреса и сайты. Все контакты получены из открытых источников и не являются персональными данными. </p>
                </div>
            </div>
        </div>
    </section>
    <section class="advantages advantages-simple advantages-adv_search info-page-bg-alt text-c" id="advantages-adv_search">
        <div class="container">
            <div class="advantages-title">
                <div class="page-title-h1">Найдите клиентов для вашего бизнеса</div>
            </div>
            <div class="advantages-body">
                <p> Выберите компании по собственным критериям. </p>
                <p> Получите их контактные данные и другие сведения из официальных источников. </p> <a href="/search-advanced" rel="nofollow" class="btn btn-green-big" data-goal="features-advanced_search">Подобрать контрагентов</a> </div>
        </div>
        <div class="hero-img-bottom hero-img-bottom-l lazyload" data-bg="/images/illustrations/calendar-left.png"></div>
        <div class="hero-img-bottom hero-img-bottom-r lazyload" data-bg="/images/illustrations/illustrate-kb-mouse.jpg"></div>
    </section>
    <section class="advantages text-l advantages-features-accounting" id="advantages-features-accounting">
        <div class="container centered-wrp">
            <div class="advantages-wrp">
                <div class="advantages-title">
                    <div class="page-title">Бухгалтерская отчетность</div>
                </div>
                <div class="advantages-body">
                    <div class="cards">
                        <div class="card-one lazyload"></div>
                    </div>
                    <p class="strong"> Данные отчетности, которую компания представила в налоговую инспекцию. </p>
                    <p> Бухгалтерский баланс, отчеты о финансовых результатах,об изменении капитала, о движении денежных средств и о целевом использовании средств. Сведения об активах, финансовых обязательствах, доходах и расходах, движении денежных средств и другие показатели позволят оценить платежеспособность компании. </p>
                </div>
            </div>
        </div>
    </section>
    <section class="advantages text-r advantages-features-egrul" id="advantages-features-egrul">
        <div class="container centered-wrp">
            <div class="advantages-wrp">
                <div class="advantages-title">
                    <div class="page-title">Выписки из ЕГ?&nbsp;ЮЛ</div>
                </div>
                <div class="advantages-body">
                    <div class="cards">
                        <div class="card-one lazyload"></div>
                    </div>
                    <p class="strong"> Информация о компании или с из единого госреестра юрлиц или индивидуальных предпринимателей ФНС. </p>
                    <p> Данные доступны как для просмотра на странице сервиса, так и для скачивания в виде pdf-файла. Файл является аналогом выписки из ЕГРЮЛ или ЕГРН с официального сайта налоговой. </p>
                </div>
            </div>
        </div>
    </section>
    <section class="advantages text-l advantages-features-geo" id="advantages-features-geo">
        <div class="container centered-wrp">
            <div class="advantages-wrp">
                <div class="advantages-title">
                    <div class="page-title">Филиалы и представительства</div>
                </div>
                <div class="advantages-body">
                    <div class="cards">
                        <div class="card-one lazyload"></div>
                        <div class="card-two lazyload"></div>
                    </div>
                    <p class="strong"> Адреса и названия отделений организации. </p>
                    <p> Быстрый поиск ближайшего к вам отделения компании по всей ?&nbsp;оссии и за рубежом. Как в виде списка, так и на карте, с удобной визуализацией. </p>
                </div>
            </div>
        </div>
    </section>
    <section class="advantages advantages-simple features-bottom-block info-page-bg-alt text-c" id="features-bottom-block">
        <div class="container">
            <div class="advantages-title">
                <div class="page-title-h1">Отключение рекламы</div>
            </div>
            <div class="advantages-body">
                <p> Сосредоточьтесь на важной информации: пользуйтесь сервисом без сторонней рекламы. Отключение рекламных блоков происходит автоматически при оплате профессионального доступа. </p> <a href="/subscribe" class="btn btn-green-big">Отключить рекламу</a> </div>
        </div>
    </section>
</x-layout>