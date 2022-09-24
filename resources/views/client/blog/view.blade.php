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
    <x-client.common.breadcrumbs name="Blog"/>

    <div class="articles">
        <div class="articles__container">
            <h1 class="articles__title">
                Блог
            </h1>
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
            <ul class="articles__pagination">
                <li class="articles__list">
                    <a href="#" class="articles__link active">1</a>
                </li>
                <li class="articles__list">
                    <a href="#" class="articles__link">2</a>
                </li>
                <li class="articles__list">
                    <a href="#" class="articles__link">3</a>
                </li>
                <li class="articles__list">
                    <a href="#" class="articles__link">...</a>
                </li>
                <li class="articles__list">
                    <a href="#" class="articles__link">27</a>
                </li>
            </ul>
        </div>
    </div>
</x-client.layouts.app>
