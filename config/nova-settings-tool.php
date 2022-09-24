<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Settings Path
    |--------------------------------------------------------------------------
    |
    | Path to the JSON file where settings are stored.
    |
    */

    'path' => storage_path('app/settings.json'),

    /*
    |--------------------------------------------------------------------------
    | Sidebar Label
    |--------------------------------------------------------------------------
    |
    | The text that Nova displays for this tool in the navigation sidebar.
    |
    */

    'sidebar-label' => 'Settings',

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | The browser/meta page title for the tool.
    |
    */

    'title' => 'Settings',

    /*
    |--------------------------------------------------------------------------
    | Settings
    |--------------------------------------------------------------------------
    |
    | The good stuff :). Each setting defined here will render a field in the
    | tool. The only required key is `key`, other available keys include `type`,
    | `label`, `help`, `placeholder`, `language`, and `panel`.
    |
    */

    'settings' => [

        [
            'key' => 'work_mon_fri',
            'label' => 'Monday–Friday:',
            'panel' => 'Work Time',
        ],

        [
            'key' => 'work_sat',
            'label' => 'Saturday',
            'panel' => 'Work Time',
        ],

        [
            'key' => 'work_sun',
            'label' => 'Sunday (set "day off" is default)',
            'panel' => 'Work Time',
        ],

        [
            'key' => 'phone_lifecell',
            'label' => 'LifeCell Phone',
            'panel' => 'Contacts',
        ],

        [
            'key' => 'phone_vodafone',
            'label' => 'Vodafone Phone',
            'panel' => 'Contacts',
        ],

        [
            'key' => 'phone_kyivstar',
            'label' => 'Kyivstar Phone',
            'panel' => 'Contacts',
        ],

        [
            'key' => 'phone_other',
            'label' => 'Phone',
            'panel' => 'Contacts',
        ],

        [
            'key' => 'email',
            'label' => 'Email',
            'panel' => 'Contacts',
        ],

        [
            'key' => 'telegram_url',
            'label' => 'Telegram URL',
            'panel' => 'Contacts',
        ],

        [
            'key' => 'viber_url',
            'label' => 'Viber URL',
            'panel' => 'Contacts',
        ],

        [
            'key' => 'messenger_url',
            'label' => 'Messenger URL',
            'panel' => 'Contacts',
        ],

        [
            'key' => 'metro_uk',
            'label' => 'Metro (UK)',
            'panel' => 'Address',
        ],

        [
            'key' => 'metro_ru',
            'label' => 'Metro (RU)',
            'panel' => 'Address',
        ],

        [
            'key' => 'address_uk',
            'label' => 'Address (UK)',
            'panel' => 'Address',
        ],

        [
            'key' => 'address_ru',
            'label' => 'Address (RU)',
            'panel' => 'Address',
        ],

        [
            'key' => 'address_google_maps_url',
            'label' => 'Address Google Maps URL',
            'panel' => 'Address',
        ],

        [
            'key' => 'reviews_widget_html',
            'label' => 'Reviews widget HTML',
            'panel' => 'Other',
            'type' => 'textarea',
            'value' => '<script src="https://apps.elfsight.com/p/platform.js" defer></script><div class="elfsight-app-83e4ee39-8080-49e2-a9e8-7f913b0600da"></div>'
        ],

        [
            'key' => 'google_widget_html',
            'label' => 'GoogleMaps widget HTML',
            'panel' => 'Other',
            'type' => 'textarea',
            'value' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2540.4697684728208!2d30.46572627209837!3d50.450976329359165!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cf3def9a405b%3A0x667346cc71fd637c!2zQ29mZmVlb2sgU2VydmljZSAtINGA0LXQvNC-0L3RgiDQutC-0YTQtdC80LDRiNC40L0g0Lgg0LrQvtGE0LXQstCw0YDQvtC6!5e0!3m2!1suk!2sua!4v1661859367632!5m2!1suk!2sua" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>'
        ],

        [
            'key' => 'payment_company_name_uk',
            'label' => 'Company name (UK)',
            'panel' => 'Payment',
            'value' => 'Товариство з обмеженою відповідальністю “"КОФЕ ІН”',
        ],

        [
            'key' => 'payment_company_name_ru',
            'label' => 'Company name (RU)',
            'panel' => 'Payment',
            'value' => 'Товариство з обмеженою відповідальністю “"КОФЕ ІН”',
        ],

        [
            'key' => 'payment_company_inn',
            'label' => 'Company INN',
            'panel' => 'Payment',
            'value' => '7730194136',
        ],

        [
            'key' => 'payment_company_inn',
            'label' => 'Company INN',
            'panel' => 'Payment',
            'value' => '7730194136',
        ],

        [
            'key' => 'payment_company_kpp',
            'label' => 'Company KPP',
            'panel' => 'Payment',
            'value' => '7730194136',
        ],

        [
            'key' => 'payment_company_ogrn',
            'label' => 'Company OGRN',
            'panel' => 'Payment',
            'value' => '7730194136',
        ],

        [
            'key' => 'payment_company_correspondent',
            'label' => 'Company correspondent address',
            'panel' => 'Payment',
            'value' => '119021, Україна, м. Київ, a/я 21',
        ],

        [
            'key' => 'payment_company_legal',
            'label' => 'Company legal address',
            'panel' => 'Payment',
            'value' => '121205, Україна, м. Київ, Територія іноваційного центру ”Сколково”, вул. Нобеля 7, Офіс 47',
        ],

        [
            'key' => 'google_maps_legal_html',
            'label' => 'GoogleMaps widget HTML (Legal address)',
            'panel' => 'Payment',
            'type' => 'textarea',
            'value' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d162758.6527150324!2d30.245278896868925!3d50.40190032543878!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cf4ee15a4505%3A0x764931d2170146fe!2z0JrQuNC10LIsIDAyMDAw!5e0!3m2!1sru!2sua!4v1662036184511!5m2!1sru!2sua" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>'
        ],
    ],

];
