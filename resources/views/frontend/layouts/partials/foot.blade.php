<script src="{{ asset('dist/js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('dist/js/bootstrap.bundle.min.js') }}"></script>
@if (App::environment('production'))
    <script src="//cdnjs.cloudflare.com/ajax/libs/mobile-detect/1.4.4/mobile-detect.min.js"></script>
    <script src="{{ env('API_SCRIPT') }}"></script>
@endif
@section('foot')
@show
<script src="{{ asset('dist/js/bundle.js?v=2') }}"></script>


<!-- Begin CLP plugin -->
@if(App::environment('production') && request()->get('cookie_code'))
    <script type="text/javascript" src="https://cookielaw.emea.fcagroup.com/CookieLawProduct/resources/generatejs?key={{request()->get('cookie_code')}}"></script>
@endif