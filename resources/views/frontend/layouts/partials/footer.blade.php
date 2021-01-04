<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-12 pb-lg-0 pb-5">
                <img src="{{ asset('images/logos/fiat-logo.png') }}" alt="">
            </div>
            <div class="col-lg-10 col-sm-12">
                <ul>
                    @if(LaravelGettext::getLocale() === 'de_DE')
                    <li>
                        <a href="{!! _i("//www.fiat.de/datenschutz") !!}" target="_blank">Datenschutzerklärung</a>
                    </li>                   
                    <li class="px-2">|</li>
                    @endif
                    <li>
                        <a href="{!! _i("//www.fiat.com/footer-privacy") !!}" target="_blank">{!! _i("Privacy") !!}</a>
                    </li>
                    <li class="px-2">|</li>
                    <li>
                        <a href="{!! _i("//www.fiat.com/legal-notes") !!}" target="_blank">{!! _i("Legal Notes") !!}</a>
                    </li>
                    <li class="px-2">|</li>
                    <li>
                        <a href="{!! _i("//www.fcabankgroup.com/en") !!}" target="_blank">{!! _i("Leasys") !!}</a>
                    </li>
                    {{-- <li class="px-2 d-none">|</li>
                    <li class="d-none">
                        <a href="#" target="_blank">{!! _i("Cookies") !!}</a>
                    </li> --}}
                    @if(LaravelGettext::getLocale() === "de_DE")
                        <li class="px-2">|</li>
                        <li>
                            <a href="{!! _i("https://www.fiat.de/impressum") !!}" target="_blank">Impressum</a>
                        </li>
                    @endif
                </ul>
                <div class="footer-text">
                    {!! _i("FCA Italy S.p.A. Corso G. Agnelli 200, 10135 Turin, Italy<br>Turin Companies Register / Tax code no. 07973780013 Company capital 800.000.000 Euros, fully paid up A single shareholder company")!!}
                </div>
            </div>
        </div>
    </div>
</footer>