<nav class="navbar fixed-top">
    <a class="navbar-brand" href="{{ env('APP_URL').request()->get('segment')}}">
        <img class="img-fluid" src="{{ asset('images/svg/logo-w.svg') }}" alt="">
    </a>

    <button id="hamburger" class="navbar-toggler collapsed hamburger" type="button" data-toggle="_collapse"
        data-target="#MyNavbar" aria-controls="MyNavbar" aria-expanded="false" aria-label="Toggle navigation">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </button>

    <div id="MyNavbar" class="navbar-collapse collapse">
        <ul id="menu-menu-principale" class="navbar-nav">
            <li class="nav-item mb-5">
                <a class="mr-5" href="//www.facebook.com/sharer/sharer.php?u=https:{{ env('APP_URL').request()->get('segment')}}"
                    target="_blank">
                    <i class="mbri-icon icon-social-facebook"></i> {!! _i("SHARE") !!}
                </a>
                <a class="mr-5" href="//www.twitter.com/share?text={{ urlencode(env('MODEL_NAME')) }}&url={{ urlencode(env('APP_URL').request()->get('segment')) }}" target="_blank">
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
                <h3><a href="{{ $href }}#" class="nav-link">{!! _i("LOREM IPSUM") !!}</a>
            </li>
            <li class="nav-item">
                <h3><a href="{{ $href }}#" class="nav-link">{!! _i("LOREM IPSUM") !!}</a>
            </li>
            <li>
                <!-- split dropdown -->
                <div class="btn-group">
                    <a id="link-dropdown-toggle-split" href="{{ $href }}#RANGE">{!! _i("RANGE") !!}</a>
                    <a class="dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only"></span>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ env('APP_URL').request()->get('segment').'trim/A' }}">{!! _i("A") !!}</a>
                        <a class="dropdown-item" href="{{ env('APP_URL').request()->get('segment').'trim/B' }}">{!! _i("B") !!}</a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</nav>