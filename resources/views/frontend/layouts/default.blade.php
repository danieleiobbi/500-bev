<!doctype html>
<html lang="@yield('language', 'EN')">

<head>
    @include('frontend.layouts.partials.head')
    @show
</head>

<body data-params='{
        "ip":"{{ request()->header('x-forwarded-for') }}",
        "app_url":"{{ request()->get('app_url') }}",
        "origin":"{{ request()->get('origin') }}",
        "source":"{{ request()->get('source') }}",
        "source_url":"{{ request()->fullUrl() }}",
        "brand_id":"{{ request()->get('brand_id') }}",
        "model":"{{ request()->get('model') }}",
        "market_code":"{{ request()->get('market_code') }}",
        "language_code":"{{ request()->get('language_code') }}",
        "page":"{{ $data['page'] }}",
        "API_URL":"{{ env('API_URL') }}"
    }'>
    <div id="preloader"><img src="{{ asset('images/svg/tail-spin.svg') }}" width="50" alt=""></div>
    <div class="drawer-veil" id="drawer-veil"></div>
    <main role="main">
        <!-- Header area -->
        @include('frontend.layouts.partials.header')

        <!-- Main content -->
        @yield('content')

        <!-- Footer area -->
        
        @include('frontend.layouts.partials.footer')
        @include('frontend.layouts.partials.foot')
    </main>
</body>

</html>