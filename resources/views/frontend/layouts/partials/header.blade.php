<nav class="navbar fixed-top">
    <a class="navbar-brand" href="{{ env('APP_URL').request()->get('segment')}}">
        <img class="img-fluid" src="{{ asset('images/logos/logo.png') }}" alt="">
    </a>

    <button id="hamburger" class="navbar-toggler collapsed hamburger" type="button" data-toggle="_collapse"
        data-target="#MyNavbar" aria-controls="MyNavbar" aria-expanded="false" aria-label="Toggle navigation">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </button>

    <div id="MyNavbar" class="navbar-collapse">
        <ul id="menu-menu-principale" class="navbar-nav">
            <li class="nav-item mb-5 social-container">
                <a class="mr-3 mr-lg-5" href="//www.facebook.com/sharer/sharer.php?u=https:{{ env('APP_URL').request()->get('segment')}}"
                    target="_blank">
                    <i class="mbri-icon icon-social-facebook"></i> {!! _i("SHARE") !!}
                </a>
                <a class="mr-3 mr-lg-5" href="//www.twitter.com/share?text={{ urlencode(env('MODEL_NAME')) }}&url={{ urlencode(env('APP_URL').request()->get('segment')) }}" target="_blank">
                    <i class="mbri-icon icon-social-twitter"></i>
                    {!! _i("TWEET") !!}
                </a>
                <a href="//api.whatsapp.com/send?phone=&text=%20https:{{ urlencode(env('APP_URL').request()->get('segment')) }}" target="_blank">
                    <i class="mbri-icon icon-social-wa"></i>
                    {!! _i("SHARE") !!}
                </a>
            </li>

            <li class="nav-item">
                <h3>
                    <a href="{{ env('APP_URL').request()->get('segment')}}" class="nav-link active">
                        {!! _i("HOME") !!}</a>
                </h3>
            </li>

            @php $href = (request()->is(request()->get('home-segment'))) ? '' : env('APP_URL'); @endphp

            <li class="nav-item">
                <h3><a href="{{ $href }}#DESIGN" class="nav-link">{!! _i("DESIGN") !!}</a>
            </li>
            <li class="nav-item">
                <h3><a href="{{ $href }}#ELECTRIC-FEATURES" class="nav-link">{!! _i("ELECTRIC FEATURES") !!}</a>
            </li>
            <li class="nav-item">
                <h3><a href="{{ $href }}#SAFETY" class="nav-link">{!! _i("SAFETY") !!}</a>
            </li>
            <li class="nav-item">
                <h3><a href="{{ $href }}#CONNECTIVITY" class="nav-link">{!! _i("CONNECTIVITY") !!}</a>
            </li>
            <li class="nav-item">
                <h3><a href="{{ $href }}#TRIM" class="nav-link">{!! _i("TRIM") !!}</a>
            </li>
        </ul>
    </div>
</nav>