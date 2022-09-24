@push('meta')
    @php($page = pages()->article())

    <x-client.head.meta
        :title="$page->meta_title ?? ''"
        :description="$page->meta_description ?? ''"
        :snippet="$page->snippet ?? ''"
        :url="route('home')"
    />
@endpush

<x-client.layouts.app>
    <x-client.common.breadcrumbs name="Article"/>

    <div class="article">
        <div class="article__container">
            <h1 class="article__title">
                Догляд за зерновою кавомашиною
            </h1>
            <div class="article__header">
                <div class="article__items">
                    22 травня 2022
                </div>
                <div class="article__items">
                    <div class="articles__avatar">
                        <picture>
                            <source srcset="img/masters/avatar.webp" type="image/webp"><img src="img/masters/avatar.png"
                                                                                            alt="Іванов Іван Іванович">
                        </picture>
                    </div>
                    <p class="articles__name">Іванов Іван Іванович</p>
                </div>
            </div>
            <div class="article__image">
                <picture>
                    <source srcset="img/main/bar.webp" type="image/webp"><img src="img/main/bar.jpg" alt="Бар">
                </picture>
            </div>
            <div class="article__wrapper">
                <p class="article__text">
                    Забезпечити довговічність кавомашини, яка готує смачну каву без сторонніх присмаків - основний
                    аргумент для того, щоб виробляти своєчасний догляд за автоматичної зерновий кавоваркою. <br><br>
                    Головний ворог будь-якої побутової техніки, яка контактує з водою - це накип. Щоб необхідність
                    очищення накипу кавомашини виникала якомога рідше, слід бути уважними при виборі води для
                    приготування кави. Ми рекомендуємо використовувати бутильовану воду з низьким показником загальної
                    мінералізації.<br><br>
                    Також, зернову кавоварку варто очищати від твердих і рідких відходів, залишків розчинних
                    інгредієнтів, протирати поверхні. Трохи про те як почистити кавоварку ми розповімо в цій статті.
                </p>
                <h3 class="article__title-3">
                    Чистка зернової кавомашини від накипу
                </h3>
                <p class="article__text">
                    Видалення накипу з бойлера та інших вузлів зерновий кавомашини вважається технічно складною
                    процедурою, яка повинна проводитися фахівцем з технічного обслуговування кавових автоматів
                    згідно з інструкцією по експлуатації конкретної моделі кавомашини. <br>
                    Універсального алгоритму, як і чим очистити накип в кавомашині не існує. Все залежить від
                    комплектації обладнання. Для зернових кавоварок, які є в асортименті Siba.cafe, можна виділити такі
                    основні етапи очищення:
                </p>
                <ul class="article__list content__list">
                    <li class="content__item">в резервуар з водою заливається або засипається засіб для декальцінаціі;
                    </li>
                    <li class="content__item">під носик роздачі поміщається контейнер з об'ємом в 1-2 літри;</li>
                    <li class="content__item">активується режим очищення;</li>
                    <li class="content__item">заливається чиста вода;</li>
                    <li class="content__item">здійснюється кілька циклів промивки, щоб видалити залишки миючого засобу.
                    </li>
                    <li class="content__item">Після завершення процедури очищення, першу порцію кави рекомендується
                        вилити.</li>
                </ul>
                <p class="article__text">
                    Зернова кавоварка оснащена автоматичною системою для промивання міксерів, варильного блоку і
                    контурів для молока. Запускати таку промивку слід відразу після установки, а також після кожної
                    перерви в використанні кавомашини, навіть якщо він становить менше двох днів. Така промивка
                    здійснюється не тільки з метою очищення накипу в кавомашині, але і з метою загальної дезінфекції.
                    <br>
                    Крім автоматичної, слід проводити повну ручну промивку окремих вузлів зерновий кавомашини.
                </p>
                <div class="article__wrapper-image">
                    <picture>
                        <source srcset="img/masters/kofe-03.webp" type="image/webp"><img src="img/masters/kofe-03.png"
                                                                                         alt="Кава">
                    </picture>
                </div>
                <h3 class="article__title-3">
                    Як вибрати правильний декальцінатор для чистки?
                </h3>
                <p class="article__text">
                    Для декальцінаціі кавоварок можна використовувати такі фірмові види засобів від накипу: сухі
                    порошки, таблетки, рідкі засоби. При виборі, чим краще очистити кавоварку від накипу, потрібно
                    пам'ятати, що не так важливо, буде це засіб, який рекомендує виробник конкретної моделі кавоварки
                    або інше оригінальний засіб. Головне, уважно ознайомтеся з інструкцією і простежте, щоб
                    декальцінатор підходив для чищення автоматичних кавоварок.
                </p>
                <h3 class="article__title-3">
                    Правильна чистка молочної системи кавомашини
                </h3>
                <p class="article__text">
                    Механізм приготування напоїв з молоком влаштований таким чином, що після кожної видачі молока,
                    відбувається автоматичне ополіскування носиків роздачі. Така часткова очищення кавомашини не
                    скасовує необхідність регулярного зняття основних деталей молочної системи кавоварки з метою
                    дезінфекції та промивання молочних контурів. <br><br>
                    Для деяких моделей автоматичних кавоварок, також важливо знати як чистити капучинатор. Для цього
                    трубку капучинатора слід опустити в миючий розчин і запустити програму промивання. По закінченню
                    очищення, трубку вставити в ємність з чистою водою і активувати полоскання.
                </p>
                <div class="article__social">
                    <span class="article__share">Share:</span>
                    <a href="" class="article__link _icon-facebook"></a>
                    <a href="" class="article__link _icon-twitter"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="articles">
        <div class="articles__container">
            <h2 class="articles__title">
                Схожі статті
            </h2>
            <div class="articles__wrapper-1">
                <a href="" class="articles__slide">
                    <div class="articles__image-ibg">
                        <picture>
                            <source srcset="img/masters/kofemashina.webp" type="image/webp"><img
                                src="img/masters/kofemashina.png" alt="Кавомашина">
                        </picture>
                    </div>
                    <div class="articles__content">
								<span class="articles__title-secondary">
									Догляд за зерновою кавомашиною
								</span>
                        <p class="articles__text">
                            Современное кофейное решение для офиса, компактное и не требующее обслуживания выездным
                            мастером.Современное кофейное...
                            Современное кофейное решение для офиса, компактное и не требующее обслуживания выездным
                            мастером.Современное кофейное...

                        </p>
                        <div class="articles__footer">
                            <div class="articles__items">
                                <div class="articles__avatar">
                                    <picture>
                                        <source srcset="img/masters/avatar.webp" type="image/webp"><img
                                            src="img/masters/avatar.png" alt="Іванов Іван Іванович">
                                    </picture>
                                </div>
                                <p class="articles__name">Іванов Іван Іванович</p>
                            </div>
                            <p class="articles__items">22 травня 2022</p>
                            <p class="articles__items">3 хв</p>
                        </div>
                    </div>
                </a>
                <a href="" class="articles__slide">
                    <div class="articles__image-ibg">
                        <picture>
                            <source srcset="img/masters/kofe-01.webp" type="image/webp"><img
                                src="img/masters/kofe-01.png" alt="Кава">
                        </picture>
                    </div>
                    <div class="articles__content">
								<span class="articles__title-secondary">
									Догляд за зерновою кавомашиною
								</span>
                        <p class="articles__text">
                            Современное кофейное решение для офиса, компактное и не требующее обслуживания выездным
                            мастером.Современное кофейное...
                        </p>
                        <div class="articles__footer">
                            <div class="articles__items">
                                <div class="articles__avatar _icon-user">
                                    <!-- <img src="" alt="Іванов Іван Іванович" title="Іванов Іван Іванович"> -->
                                </div>
                                <p class="articles__name">Іванов Іван</p>
                            </div>
                            <p class="articles__items">22 травня 2022</p>
                            <!-- <p class="articles__items">3 хв</p> -->
                        </div>
                    </div>
                </a>
                <a href="" class="articles__slide">
                    <div class="articles__image-ibg">
                        <picture>
                            <source srcset="img/masters/kofe-02.webp" type="image/webp"><img
                                src="img/masters/kofe-02.png" alt="Кава">
                        </picture>
                    </div>
                    <div class="articles__content">
								<span class="articles__title-secondary">
									Догляд за зерновою кавомашиною
								</span>
                        <p class="articles__text">
                            Современное кофейное решение для офиса, компактное и не требующее обслуживания выездным
                            мастером.Современное кофейное...
                        </p>
                        <div class="articles__footer">
                            <div class="articles__items">
                                <div class="articles__avatar _icon-user">
                                    <!-- <img src="" alt="Іванов Іван Іванович" title="Іванов Іван Іванович"> -->
                                </div>
                                <p class="articles__name">Іванов Іван</p>
                            </div>
                            <p class="articles__items">22 травня 2022</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</x-client.layouts.app>
