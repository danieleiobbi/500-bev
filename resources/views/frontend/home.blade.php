@extends('frontend.layouts.default')

@section('content')

<section id="cover" class="panel">
    <video class="video img-fluid" muted>
        <source src='{{ asset('videos/cover.mp4') }}' type='video/mp4'>
    </video>
</section>
  
<section class="panel">
    <img class="img-fluid" src="{{ asset('images/500-01.jpg') }}">
    <div class="caption panel-01">
        <h4 class="primary font-weight-bold">{!! _i("THE NEW FIAT 500 ALL ELECTRIC") !!}</h4>
        <h1 class="white font-italic font-light border-bottom">{!! _i("WELCOME BACK") !!}</h1>
        <h1 class="ml-5 white font-italic font-weight-bold">{!! _i("FUTURE") !!}</h1>
    </div>
    <div class="caption bottom white small panel-01">
        {!! _i("Welcome to the new electric 500 and a completely new type of mobility: more advanced, technological and sustainable, yet above all simple and pleasant for the user, in full Fiat style. It inspires people to change by transforming duty into beauty, improving not just the world’s present but its future too.") !!}
    </div>
</section>

<section class="panel panel-02">
    <img class="img-fluid" src="{{ asset('images/500-02.jpg') }}">
    <div class="caption panel-02">
        <h1 class="white font-italic font-light border-bottom">{!! _i("A NEW LOOK") !!}</h1>
        <h1 class="ml-5 white font-italic font-weight-bold">{!! _i("AT TOMORROW") !!}</h1>
        <p class="white small bottom">
            {!! _i("The new 500 helps to see the road with different eyes, thanks to new LED headlights, but also the world too. Just as 500 has always done. The first generation gave people mobility and freedom; the second generation transformed city cars into fashionable cars; the third has an even more ambitious goal: a better future for all. Including our planet.") !!}
        </p>
    </div>
</section>

<section class="panel">
    <img class="img-fluid" src="{{ asset('images/500-03.jpg') }}">
    <div class="caption panel-03">
        <h1 class="white font-italic font-light border-bottom">{!! _i("A NEW LOOK") !!}</h1>
        <h1 class="ml-5 white font-italic font-weight-bold">{!! _i("AT TOMORROW") !!}</h1>
        <p class="white small bottom">
            {!! _i("The new 500 helps to see the road with different eyes, thanks to new LED headlights, but also the world too. Just as 500 has always done. The first generation gave people mobility and freedom; the second generation transformed city cars into fashionable cars; the third has an even more ambitious goal: a better future for all. Including our planet.") !!}
        </p>
    </div>
</section>

@include('frontend.partials.gallery-01')

<section id="MORE-ROOM" class="pt-8">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 mx-auto gs_reveal">
                <h1 class="secondary font-italic font-light border-bottom">{!! _i("MORE ROOM") !!}</h1>
                <h1 class="ml-5 secondary font-italic font-weight-bold">{!! _i("FOR CONSCIOUSNESS") !!}</h1>
                <p>
                    {!! _i("Style meets comfort offering an exclusive driving experience. The interiors, with their clean design, simple lines and fewer buttons, are designed to amplify spaciousness, incorporating details inspired by nature and sustainability. Moreover, with the new front armrest allowing storage and the smartphone holder with wireless charging, everything will find its space.") !!}
                </p>
			</div>
        </div>
    </div>

    <div class="container-fluid px-0 pt-8">
        <div class="row no-gutters">
            <div class="col-12 gs_reveal gs_reveal_fromLeft">
                <img class="img-fluid"  src="{{ asset('images/500-04.jpg') }}">
            </div>
        </div>
    </div>
</section>

@include('frontend.partials.gallery-02')

<section class="cta-configurator bg-secondary">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 mx-auto text-center">
                <h2 class="white font-italic mb-5"><span class="font-weight-bold">{!! _i("CONFIGURE NOW") !!}</span> <span class="font-light">{!! _i("YOUR NEW 500")!!}</span></h2>
                <a class="btn btn-primary btn-cta border"  href="{!! _i("//www.alfaromeo.co.uk/configurator/").'?source=brochure' !!}" target="_blank">
                    <i class="mbri-icon icon-carconfigurator l-icon"></i><span>{!! _i("Car Configurator") !!}</span></a>
			</div>
        </div>
    </div>
</section>

<section class="panel">
    <img class="img-fluid" src="{{ asset('images/500-05.jpg') }}">
    <div class="caption panel-01">
        <h1 class="white font-italic font-light border-bottom">{!! _i("RECHARGE") !!}</h1>
        <h1 class="ml-5 white font-italic font-weight-bold">{!! _i("YOUR EMOTIONS") !!}</h1>
    </div>
    <div class="caption bottom white small panel-01">
        {!! _i("Preserve the planet, the lightness and the joy to life is part of our mission. To do so, the new 500 is built on a completely new platform 100% electric, designed for the next decade.") !!}
    </div>
</section>



<section id="home-11" class="bg-secondary">
    <div class="container white">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-lg-5 gs_reveal">
                <div class="d-flex flex-row align-items-center mb-5">
                    <img class="img-fluid mr-3 mr-lg-5 icons" src="{{ asset('images/electricFeatures/icons/500-01.svg') }}" alt="">
                    <h2 class="font-weight-bold">{!! _i("CRAFTED<br>FOR THE CITY") !!}</h2>
                </div>
                <p>{!! _i("Enjoy the ride with peace of mind, thanks to 320 km on a combined cycle (WLTP).") !!}</p>
            </div>
            <div class="col-12 col-lg-5 p-0 p-md-5 gs_reveal gs_reveal_fromRight">
                <img class="img-fluid p-5" src="{{ asset('images/electricFeatures/01-range-km-desktop.png') }}" alt="">
            </div>
        </div>

        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-lg-5 gs_reveal gs_reveal_fromLeft">
                <h3 class="font-weight-bold">{!! _i("COMBINED CYCLE WLTP UP TO") !!}</h3>
                <p class="big primary">{!! _i("320Km") !!}</p>
            </div>
            <div class="col-12 col-lg-5 gs_reveal gs_reveal_fromRight">
                <h3 class="font-weight-bold">{!! _i("URBAN CYCLE UP TO") !!}</h3>
                <p class="big primary">{!! _i("460Km") !!}</p>
            </div>
        </div>

        <div class="row justify-content-center align-items-center flex-column-reverse flex-lg-row">
            <div class="col-12 col-lg-5 p-0 p-md-5 gs_reveal gs_reveal_fromLeft">
                <img class="img-fluid p-5" src="{{ asset('images/electricFeatures/02-sherpa-mode.gif') }}" alt="">
            </div>
            <div class="col-12 col-lg-5 gs_reveal pr-xl-5">
                <div class="d-flex flex-row align-items-center mb-5">
                    <img class="img-fluid mr-3 mr-lg-5 icons" src="{{ asset('images/electricFeatures/icons/500-02.svg') }}" alt="">
                    <h2 class="font-weight-bold">{!! _i("SHERPA MODE") !!}</h2>
                </div>
                <p>{!! _i("This intelligent driving mode saves energy by optimizing battery charge, air conditioning, speed and acceleration. It gives you more range, getting you to your destination.") !!}</p>
            </div>
        </div>

        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-lg-5 gs_reveal">
                <div class="d-flex flex-row align-items-center mb-5">
                    <img class="img-fluid mr-3 mr-lg-5 icons" src="{{ asset('images/electricFeatures/icons/500-03.svg') }}" alt="">
                    <h2 class="font-weight-bold">{!! _i("ONE PEDAL<br>DRIVING") !!}</h2>
                </div>
                <p>{!! _i("With just one pedal you can accelerate and decelerate, thus recovering kinetic energy that helps recharge the battery. You will still be able to brake with the specific pedal to make driving as easy as possible.") !!}</p>
            </div>
            <div class="col-12 col-lg-5 p-0 p-md-5 gs_reveal gs_reveal_fromRight">
                <img class="img-fluid p-5" src="{{ asset('images/electricFeatures/03-one-pedal-driving.gif') }}" alt="">
            </div>
        </div>

        <div class="row justify-content-center align-items-center flex-column-reverse flex-lg-row">
            <div class="col-12 col-lg-5 p-0 p-md-5 gs_reveal gs_reveal_fromLeft">
                <img class="img-fluid" src="{{ asset('images/electricFeatures/04-fast-charging.png') }}" alt="">
            </div>
            <div class="col-12 col-lg-5 gs_reveal pr-xl-5">
                <div class="d-flex flex-row align-items-center mb-5">
                    <img class="img-fluid mr-3 mr-lg-5 icons" src="{{ asset('images/electricFeatures/icons/500-04.svg') }}" alt="">
                    <h3 class="font-weight-bold">{!! _i("FAST CHARGING UP TO 85 KW") !!}</h3>
                </div>
                <p>{!! _i("In just 5 minutes, the time for a coffee, you get 50 km of autonomy: a whole day in the city.") !!}</p>
            </div>
        </div>
        
        <div class="row justify-content-center align-items-center trigger-stagger mb-5">
            <div class="col-12 col-lg-3 text-center stagger">
                <div class="box-primary">
                    <p class="big pb-0">{!! _i("85 Kw") !!}</p>
                    <p class="font-weight-bold pb-5">{!! _i("FAST CHARGING") !!}</p>
                </div>
            </div>
            <div class="col-12 col-lg-3 text-center stagger">
                <div class="box-primary">
                    <p class="big pb-0">{!! _i("50km") !!}</p>
                    <p class="font-weight-bold pb-5">{!! _i("IN 5 MINUTES") !!}</p>
                </div>
            </div>
            <div class="col-12 col-lg-3 text-center stagger">
                <div class="box-primary">
                    <p class="big pb-0">{!! _i("0-80%") !!}</p>
                    <p class="font-weight-bold pb-5">{!! _i("IN 35 MINUTES") !!}</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-lg-5 gs_reveal pr-xl-5">
                <div class="d-flex flex-row align-items-center mb-5">
                    <img class="img-fluid mr-3 mr-lg-5 icons" src="{{ asset('images/electricFeatures/icons/500-05.svg') }}" alt="">
                    <h3 class="font-weight-bold">{!! _i("EASYWALLBOX") !!}</h3>
                </div>
                <p>{!! _i("Recharge the car easily and directly from home with the EasyWallbox: charging power of up to 3 kW without needs of a technician to install. If you want more power you can upgrade your home system up to 7 kW to charge a new 500 in half the time.") !!}</p>
            </div>
            <div class="col-12 col-lg-5 p-0 p-md-5 gs_reveal gs_reveal_fromRight">
                <img class="img-fluid" src="{{ asset('images/electricFeatures/05-wallbox.png') }}" alt="">
            </div>
        </div>

        <div class="row justify-content-center align-items-center flex-column-reverse flex-lg-row">
            <div class="col-12 col-lg-5 p-0 p-md-5 gs_reveal gs_reveal_fromLeft">
                <img class="img-fluid" src="{{ asset('images/electricFeatures/06-mode3cable.png') }}" alt="">
            </div>
            <div class="col-12 col-lg-5 gs_reveal pr-xl-5">
                <div class="d-flex flex-row align-items-center mb-5">
                    <img class="img-fluid mr-3 mr-lg-5 icons" src="{{ asset('images/electricFeatures/icons/500-06.svg') }}" alt="">
                    <h3 class="font-weight-bold">{!! _i("MODE 3 CABLE") !!}</h3>
                </div>
                <p>{!! _i("Use the Mode 3 Cable to charge your new 500 at a public station or at home with your EasyWallbox.") !!}</p>
            </div>
        </div>
    </div>
</section>


<section id="SOUND">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6">
                <img class="img-fluid" src="{{ asset('images/500-06.jpg') }}" alt="">
            </div>
            <div class="col-12 col-lg-6 gs_reveal gs_reveal_fromLeft">
                <div class="row mb-5">
                    <div class="col-8 white">
                        <h1 class="font-italic font-light border-bottom">{!! _i("PURE") !!}</h1>
                        <h1 class="ml-5 font-italic font-weight-bold">{!! _i("PLEASURE") !!}</h1>
                        <p>
                            {!! _i("We choose to overcome all electric limits by offering top-of-the-segment range and quick, easy to use charging solutions to let you enjoy a sustainable and beautiful lifestyle. Starting with its characteristic sound: as creative as the Italian spirit. It’s more than just a sound, it’s a true accompanying music, in ignition, shutdown and on the move.") !!}
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 secondary mb-5">{!! _i("Only an electric 500 could make a sound like this: unique, just like her.") !!}</div>
                    <div class="col-12 col-lg-6 mb-3 d-flex align-items-center justify-content-start">
                        <audio id="audio-italian-creative-spirit">
                            <source src="{{ asset('audio/RRP avas sound SYN 3+RRP rota and Flavio SHORTEN.wav') }}" type="audio/mpeg">
                        </audio>
                        <img class="sound-icon mr-3" data-target="audio-italian-creative-spirit" src="{{ asset('images/svg/sound-icon.svg') }}" alt="">
                        <p class="font-weight-bold secondary small m-0">{!! _i("LISTEN TO THE<br>ITALIAN CREATIVE SPIRIT") !!}</p>
                    </div>
                    <div class="col-12 col-lg-6 mb-3 d-flex align-items-center justify-content-start">
                        <audio id="audio-other-cars">
                            <source src="{{ asset('audio/COREA.mp3') }}" type="audio/mpeg">
                        </audio>
                        <img class="sound-icon mr-3" data-target="audio-other-cars" src="{{ asset('images/svg/sound-icon.svg') }}" alt="">
                        <p class="font-weight-bold secondary small m-0">{!! _i("LISTEN TO THE SOUND<br>OF OTHER CARS") !!}</p>
                    </div>
                    <div class="col-12 col-lg-6 mb-3 d-flex align-items-center justify-content-start">
                        <audio id="audio-power-on">
                            <source src="{{ asset('audio/500_key_on.wav') }}" type="audio/mpeg">
                        </audio>
                        <img class="sound-icon mr-3" data-target="audio-power-on" src="{{ asset('images/svg/sound-icon.svg') }}" alt="">
                        <p class="font-weight-bold secondary small m-0">{!! _i("POWER ON") !!}</p>
                    </div>
                    <div class="col-12 col-lg-6 mb-3 d-flex align-items-center justify-content-start">
                        <audio id="audio-shutdown">
                            <source src="{{ asset('audio/500_key_off.wav') }}" type="audio/mpeg">
                        </audio>
                        <img class="sound-icon mr-3" data-target="audio-shutdown" src="{{ asset('images/svg/sound-icon.svg') }}" alt="">
                        <p class="font-weight-bold secondary small m-0">{!! _i("SHUTDOWN") !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>







<section id="DUMMY" class="d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto text-center">
                {!! _i("Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga sint excepturi in veniam reprehenderit perspiciatis, nulla assumenda optio est eius minima, similique autem repellat cumque provident aperiam quae, ratione tempore.") !!}
            </div>
        </div>
    </div>
</section>


@endsection

@section('foot')
@parent
{{-- Agguingere eventuali plugin non importabili con npm --}}
@endsection