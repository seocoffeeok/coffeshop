<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @unless(app()->environment('production'))
        <meta name="robots" content="noindex"/>
    @endif

    @stack('meta')

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <x-client.layouts.favicon/>

    <x-client.head.inline-scripts />

    <x-client.head.analytics />

    @stack('head-scripts')
</head>
<body x-data="app">
@stack('body-top')

<div class="wrapper">

    <x-client.layouts.header/>

    <main class="page">
        {{ $slot }}
    </main>

    <x-client.layouts.footer/>

    <x-client.common.arrow-up/>

    <x-client.common.popups/>
</div>

<script src="{{ asset('js/app.js') }}" defer></script>
<script src="{{ asset('js/maps.js') }}" defer></script>
<script src="{{ asset('js/navmenu.js') }}" defer></script>

@stack('footer-scripts')
</body>
</html>
