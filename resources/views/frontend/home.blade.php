@extends('frontend.layouts.default')

@section('content')

<section id="cover" class="panel">
    <video class="video img-fluid" muted>
        <source src='{{ asset('videos/cover.mp4') }}' type='video/mp4'>
    </video>
</section>
  
<section class="panel">
    <picture>
        <source srcset="{{ asset('images/500-01-m.jpg') }}" media="(max-width: 1024px)">
        <img src="{{ asset('images/500-01.jpg') }}">
    </picture>
    <div class="caption panel-01">
        <h4 class="primary font-weight-bold">{!! _i("THE NEW FIAT 500 ALL ELECTRIC") !!}</h4>
        <h1 class="white font-italic font-light border-bottom">{!! _i("WELCOME BACK") !!}</h1>
        <h1 class="ml-5 white font-italic font-weight-bold">{!! _i("FUTURE") !!}</h1>
    </div>
    <div class="caption bottom white small panel-01">
        {!! _i("Welcome to the new electric 500 and a completely new type of mobility: more advanced, technological and sustainable, yet above all simple and pleasant for the user, in full Fiat style. It inspires people to change by transforming duty into beauty, improving not just the world’s present but its future too.") !!}
    </div>
</section>

<section class="panel">
    <picture>
        {{-- <source srcset="{{ asset('images/500-02-m-576.jpg') }}" media="(max-width: 576px)"> --}}
        <source srcset="{{ asset('images/500-02-m-576.jpg') }}" media="(max-width: 1024px)">
        <img  src="{{ asset('images/500-02.jpg') }}">
    </picture>
    <div class="caption panel-02">
        <h1 class="white font-italic font-light border-bottom">{!! _i("A NEW LOOK") !!}</h1>
        <h1 class="ml-5 white font-italic font-weight-bold">{!! _i("AT TOMORROW") !!}</h1>
        <p class="white small bottom">
            {!! _i("The new 500 helps to see the road with different eyes, thanks to new LED headlights, but also the world too. Just as 500 has always done. The first generation gave people mobility and freedom; the second generation transformed city cars into fashionable cars; the third has an even more ambitious goal: a better future for all. Including our planet.") !!}
        </p>
    </div>
</section>

<section class="panel">
    <picture>
        <source srcset="{{ asset('images/500-03-m.jpg') }}" media="(max-width: 1024px)">
        <img src="{{ asset('images/500-03.jpg') }}">
    </picture>
</section>

<div id="DESIGN"></div>
@include('frontend.partials.gallery-01')

<section id="MORE-ROOM" class="pt-8">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 col-xl-6 mx-auto gs_reveal">
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
                <picture>
                    <source srcset="{{ asset('images/500-04-m.jpg') }}" media="(max-width: 1024px)">
                    <img class="img-fluid" src="{{ asset('images/500-04.jpg') }}">
                </picture>
            </div>
        </div>
    </div>
</section>

@include('frontend.partials.gallery-02')

<section class="cta-container configurator bg-secondary">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 mx-auto text-center">
                <h3 class="white font-italic mb-3">{!! _i("“Today, it’s time for 500 to inspire change, again. To commit to an <strong>higher purpose.</strong>”") !!}</h3>
                <p class="white mb-5">{!! _i("Olivier François – President Fiat Brand Global") !!}</p>
                @if(LaravelGettext::getLocale() === 'de_DE')
                    <button class="btn btn-primary btn-video btn-cta border" data-video="{{ asset('videos/500-laprima-Leonardo-Di-Caprio-de_DE.mp4') }}">{!! _i("PLAY THE VIDEO") !!}</button>
                @else 
                    <button class="btn btn-primary btn-video btn-cta border" data-video="{{ asset('videos/500-laprima-Leonardo-Di-Caprio.mp4') }}">{!! _i("PLAY THE VIDEO") !!}</button>
                @endif
			</div>
        </div>
    </div>
</section>

<div id="ELECTRIC-FEATURES"></div>
<section class="panel">
    <picture>
        <source srcset="{{ asset('images/500-05-m.jpg') }}" media="(max-width: 1024px)">
        <img class="img-fluid" src="{{ asset('images/500-05.jpg') }}">
    </picture>
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
                <div class="mb-5">
                    <div class="d-flex flex-row align-items-center mb-5">
                        <img class="img-fluid mr-3 mr-lg-5 icons" src="{{ asset('images/icons/500-01.svg') }}" alt="">
                        <h2 class="font-weight-bold">{!! _i("CRAFTED<br>FOR THE CITY") !!}</h2>
                    </div>
                    <p>{!! _i("Enjoy the ride with peace of mind, thanks to 320 km on a combined cycle (WLTP)*.") !!}</p>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <p class="font-weight-bold">{!! _i("COMBINED CYCLE WLTP UP TO") !!}</p>
                        <p class="big primary">{!! _i("320Km") !!}</p>
                    </div>
                    <div class="col-12 col-lg-6">
                        <p class="font-weight-bold">{!! _i("URBAN CYCLE UP TO") !!}</p>
                        <p class="big primary">{!! _i("460Km") !!}</p>
                    </div>
                    <div class="col-12 justify-content-start small">
                        {!! _i("* The electricity consumption value is defined based on official tests, in conformity with the provisions of the EU Regulations in force at the time of homologation. In particular, the indicated values are calculated based on the WLTP test procedure. The electricity consumption values are only indicated for the purpose of comparing the vehicle data. The electricity consumption homologation values may not be representative of the effective electricity consumption values, which depend on many factors related, for example, to driving style, route, weather and road conditions and to vehicle condition, use and equipment. The electricity consumption values specified in this document refer to the versions of the vehicle with the highest and lowest values. These values may change depending on the selected equipment and/or tyre dimensions. The indicated electricity consumption values are not definitive and may evolve if the production cycle is modified. In any case, the official electricity consumption values of the purchased vehicle will be provided with its accompanying documents. If the electricity consumption values are required to calculate the taxes and duties due for the vehicle, please refer to the applicable law in force.") !!}
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-5 p-0 p-md-5 gs_reveal gs_reveal_fromRight">
                <img class="img-fluid p-5" src="{{ asset('images/electricFeatures/01-range-km-desktop.png') }}" alt="">
            </div>
        </div>


        <div class="row justify-content-center align-items-center flex-column-reverse flex-lg-row">
            <div class="col-12 col-lg-5 p-0 p-md-5 gs_reveal gs_reveal_fromLeft">
                <img class="img-fluid p-5" src="{{ asset('images/electricFeatures/02-sherpa-mode.gif') }}" alt="">
            </div>
            <div class="col-12 col-lg-5 gs_reveal pr-xl-5">
                <div class="d-flex flex-row align-items-center mb-5">
                    <img class="img-fluid mr-3 mr-lg-5 icons" src="{{ asset('images/icons/500-04.svg') }}" alt="">
                    <h2 class="font-weight-bold">{!! _i("SHERPA MODE") !!}</h2>
                </div>
                <p>{!! _i("This intelligent driving mode saves energy by optimizing battery charge, air conditioning, speed and acceleration. It gives you more range, getting you to your destination.") !!}</p>
            </div>
        </div>

        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-lg-5 gs_reveal">
                <div class="d-flex flex-row align-items-center mb-5">
                    <img class="img-fluid mr-3 mr-lg-5 icons" src="{{ asset('images/icons/500-03.svg') }}" alt="">
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
                    <img class="img-fluid mr-3 mr-lg-5 icons" src="{{ asset('images/icons/500-02.svg') }}" alt="">
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
                    <img class="img-fluid mr-3 mr-lg-5 icons" src="{{ asset('images/icons/500-05.svg') }}" alt="">
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
                    <img class="img-fluid mr-3 mr-lg-5 icons" src="{{ asset('images/icons/500-06.svg') }}" alt="">
                    <h3 class="font-weight-bold">{!! _i("MODE 3 CABLE") !!}</h3>
                </div>
                <p>{!! _i("Use the Mode 3 Cable to charge your new 500 at a public station or at home with your EasyWallbox.") !!}</p>
            </div>
        </div>
    </div>
</section>

<section id="SOUND" class="mb-5">
    <div class="container">
        <div class="row align-items-center flex-column-reverse flex-lg-row">
            <div class="col-12 col-lg-6">
                <picture>
                    <source srcset="{{ asset('images/500-06-m.jpg') }}" media="(max-width: 1024px)">
                    <img class="img-fluid" src="{{ asset('images/500-06.jpg') }}">
                </picture>
            </div>
            <div class="col-12 col-lg-6 gs_reveal gs_reveal_fromLeft mb-5 mb-lg-0 ">
                <div class="row mb-5">
                    <div class="col-12 white">
                        <h1 class="font-italic font-light border-bottom">{!! _i("PURE") !!}</h1>
                        <h1 class="ml-5 font-italic font-weight-bold">{!! _i("PLEASURE") !!}</h1>
                        <p>
                            {!! _i("We choose to overcome all electric limits by offering top-of-the-segment range and quick, easy to use charging solutions to let you enjoy a sustainable and beautiful lifestyle. Starting with its characteristic sound: as creative as the Italian spirit. It’s more than just a sound, it’s a true accompanying music, in ignition, shutdown and on the move.") !!}
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 secondary mb-5">{!! _i("Only an electric 500 could make a sound like this: unique, just like her.") !!}</div>
                    <div class="col-12 col-md-6 mb-3 d-flex align-items-center justify-content-start">
                        <audio id="audio-italian-creative-spirit">
                            <source src="{{ asset('audio/RRP avas sound SYN 3+RRP rota and Flavio SHORTEN.wav') }}" type="audio/mpeg">
                        </audio>
                        <img class="sound-icon mr-3" data-target="audio-italian-creative-spirit" src="{{ asset('images/svg/sound-icon.svg') }}" alt="">
                        <p class="font-weight-bold secondary small m-0">{!! _i("LISTEN TO THE<br>ITALIAN CREATIVE SPIRIT") !!}</p>
                    </div>
                    <div class="col-12 col-md-6 mb-3 d-flex align-items-center justify-content-start">
                        <audio id="audio-other-cars">
                            <source src="{{ asset('audio/COREA.mp3') }}" type="audio/mpeg">
                        </audio>
                        <img class="sound-icon mr-3" data-target="audio-other-cars" src="{{ asset('images/svg/sound-icon.svg') }}" alt="">
                        <p class="font-weight-bold secondary small m-0">{!! _i("LISTEN TO THE SOUND<br>OF OTHER CARS") !!}</p>
                    </div>
                    <div class="col-12 col-md-6 mb-3 d-flex align-items-center justify-content-start">
                        <audio id="audio-power-on">
                            <source src="{{ asset('audio/500_key_on.wav') }}" type="audio/mpeg">
                        </audio>
                        <img class="sound-icon mr-3" data-target="audio-power-on" src="{{ asset('images/svg/sound-icon.svg') }}" alt="">
                        <p class="font-weight-bold secondary small m-0">{!! _i("POWER ON") !!}</p>
                    </div>
                    <div class="col-12 col-md-6 mb-3 d-flex align-items-center justify-content-start">
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

<section id="home-carousel">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 col-xl-4 mx-auto">
                <div id="carousel-01"  class="carousel slide mb-5" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('images/500-07a.jpg') }}" class="d-block w-100" alt="">
                            <div class="carousel-caption text-left">
                                <h4 class="primary font-weight-bold">{!! _i("10.25” INFOTAINMENT SYSTEM WITH NAVIGATION") !!}</h4>
                                <p>{!! _i("Listen to music, navigate and connect your devices. Smartphone-like interface on a 10,25” touch screen, fast Bluetooth connection, compatible with wireless projection systems: the ultimate infotainment experience.") !!}</p>
                            </div>
                        </div>
                        @if(LaravelGettext::getLocale() !== 'it_CH' && LaravelGettext::getLocale() !== 'fr_CH' && LaravelGettext::getLocale() !== 'de_CH')
                        <div class="carousel-item">
                            <img src="{{ asset('images/500-07b.jpg') }}" class="d-block w-100" alt="">
                            <div class="carousel-caption text-left">
                                <h4 class="primary font-weight-bold">{!! _i("IT LOOKS LIKE A DREAM, BUT IT IS AN APP.") !!}</h4>
                                <p>{!! _i("Buying a car, driving many more: My Dream Garage is the service that allows access to all FCA Group models, choosing the most suitable one for every occasion. Start imagining the future of mobility: while you wait for the new 500, download the app and configure your Dream Garage with the models you would like to try. Sometimes dreams come true, especially  if there’s the new 500 in your future.") !!}</p>
                            </div>
                        </div>
                        @endif
                        <div class="carousel-item">
                            <img src="{{ asset('images/500-07c.jpg') }}" class="d-block w-100" alt="">
                            <div class="carousel-caption text-left">
                                <h4 class="primary font-weight-bold">{!! _i("AN EXCLUSIVE WALLBOX") !!}</h4>
                                <p>{!! _i("The optional easyWallbox has been designed exclusively for FCA to create your personal charging point at home. All set with the “Plug & Play” technology which requires no professional installation and a Bluetooth connection, for settings and checking operating parameters.") !!}</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/500-07d.jpg') }}" class="d-block w-100" alt="">
                            <div class="carousel-caption text-left">
                                <h4 class="primary font-weight-bold">{!! _i("MY E-CHARGE") !!}</h4>
                                <p>{!! _i("Enter a world of services to find the nearest public charging station and access chargingmodes, payments and history. You can also remotely manage your private EasyWallbox from home.") !!}</p>
                                <h4 class="primary font-weight-bold">{!! _i("RFID CARD") !!}</h4>
                                <p>{!! _i("RFID card jointly with My Easy Charge app provides access to more than 170.000 charging points in 21 countries in Europe.") !!}</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/500-07f.jpg') }}" class="d-block w-100" alt="">
                            <div class="carousel-caption text-left">
                                <h4 class="primary font-weight-bold">{!! _i("ICONIC SIGNATURE") !!}</h4>
                                <p>{!! _i("A dedicated logo with the 500 classic badge enriches the great-looking steering wheel, reshaped to recall the essential style of the two-spoke ’57 Fiat 500.") !!}</p>
                            </div>
                        </div>
                    </div>
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-01" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-01" data-slide-to="1"></li>
                        <li data-target="#carousel-01" data-slide-to="2"></li>
                        <li data-target="#carousel-01" data-slide-to="3"></li>
                        @if(LaravelGettext::getLocale() !== 'it_CH' && LaravelGettext::getLocale() !== 'fr_CH')
                        <li data-target="#carousel-01" data-slide-to="4"></li>
                        @endif
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta-container configurator bg-secondary">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 mx-auto text-center">
                <h2 class="white font-italic mb-5"><span class="font-weight-bold">{!! _i("DRIVE NOW") !!}</span> <span class="font-light">{!! _i("YOUR NEW 500")!!}</span></h2>
                <a class="btn btn-primary btn-cta border" data-params='{"cta":"Test Drive"}' href="{!! _i("//www.fiat.it/test-drive").'?source=brochure' !!}" target="_blank">
                    <i class="mbri-icon icon-test-drive l-icon"></i><span>{!! _i("TEST DRIVE") !!}</span></a>
			</div>
        </div>
    </div>
</section>

<div id="SAFETY"></div>
<section class="panel">
    <picture>
        <source srcset="{{ asset('images/500-08-m.jpg') }}" media="(max-width: 1024px)">
        <img class="img-fluid" src="{{ asset('images/500-08.jpg') }}">
    </picture>
    <div class="caption panel-05">
        <h1 class="white font-italic font-light border-bottom">{!! _i("THE BEST TECHNOLOGY") !!}</h1>
        <h1 class="ml-5 white font-italic font-weight-bold">{!! _i("FOR A BETTER LIFE") !!}</h1>
        <p class="white small bottom">
            {!! _i("The first city car equipped with Level 2 Autonomous Driving. The new 500 is able to accelerate, maintain a safe distance, keep you on track, read traffic signs and remind you of speed limits, in total autonomy, like a real co-driver.") !!}
        </p>
    </div>
</section>

<section id="home-12" class="bg-dark pt-8">
    <div class="container manual-video-controls">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10 col-xl-8 text-center mb-5 d-flex justify-content-around wrap-icons">
                <img class="icons rounded-circle active" src="{{ asset('images/safety/icons/500-01-adaptive-cruise-control.svg') }}" alt="" data-params='<?php echo json_encode(['title' => _i("INTELLIGENT ADAPTIVE CRUISE CONTROL"), 'description' => _i("Set the speed and enjoy the ride, new 500 will keep the safe distance and the speed under control for you."), 'video' => asset("images/safety/01-intelligent-adaptive-cruise-control.mp4")], JSON_HEX_APOS) ?>'>
                <img class="icons rounded-circle" src="{{ asset('images/safety/icons/500-02-lane-centering.svg') }}" alt="" data-params='<?php echo json_encode(['title' => _i("LANE CENTERING"), 'description' => _i("Just a button to stay always in the middle of the road. This innovative system that will keep you on the track."), 'video' => asset("images/safety/02-lane-centering.mp4")], JSON_HEX_APOS); ?>'>
                <img class="icons rounded-circle" src="{{ asset('images/safety/icons/500-03-urban-blind-spot.svg') }}" alt="" data-params='<?php echo json_encode(['title' => _i("URBAN BLIND SPOT"), 'description' => _i("Thanks to an ultrasonic sensor you will be alerted when there is something on the side and rear."), 'video' => asset("images/safety/03-urban-blind spot.mp4")], JSON_HEX_APOS); ?>'>
                <img class="icons rounded-circle" src="{{ asset('images/safety/icons/500-04-attention-assist.svg') }}" alt="" data-params='<?php echo json_encode(['title' => _i("ATTENTION ASSIST"), 'description' => _i("When you are tired the car will detect it and suggest a coffe break."), 'video' => asset("images/safety/04-attention-assist.mp4")], JSON_HEX_APOS); ?>'>
                <img class="icons rounded-circle" src="{{ asset('images/safety/icons/500-05-lane-control.svg') }}" alt="" data-params='<?php echo json_encode(['title' => _i("LANE CONTROL"), 'description' => _i("Prevent the risk of unintendend white lines crossing to stay always on the track."), 'video' => asset("images/safety/05-lane-control.mp4")], JSON_HEX_APOS); ?>'>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-lg-5 col-xl-4 text-center">
                <div class="video-wrapper p-5 mb-5 mb-lg-0">
                    <video class="w-100 videos" muted loop poster="{{ asset('images/safety/01-intelligent-adaptive-cruise-control.jpg') }}">
                        <source src="" type='video/mp4'>
                    </video>
                </div>
            </div>
            <div class="col-12 col-lg-5 col-xl-4 p-lg-5">
                <p class="primary mb-3 font-weight-bold title">{!! _i("INTELLIGENT ADAPTIVE CRUISE CONTROL") !!}</p>
                <p class="description white">{!! _i("Set the speed and enjoy the ride, new 500 will keep the safe distance and the speed under control for you.") !!}</p>
            </div>
        </div>
    </div>
</section>

<section id="home-13" class="bg-dark">
    <div class="container">
        <div class="manual-video-controls pt-5">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 col-xl-8 text-center mb-5 d-flex justify-content-around wrap-icons">
                    <img class="icons rounded-circle active" src="{{ asset('images/safety/icons/500-06-autonomous-emergency-brake.svg') }}" alt="" data-params='<?php echo json_encode(['title' => _i("AUTONOMOUS EMERGENCY BRAKING"), 'description' => _i("New 500 will brake automatically to avoid possible collision with car, pedestrian or cyclist."), 'video' => asset("images/safety/06-autonomous-brake.mp4")], JSON_HEX_APOS) ?>'>
                    <img class="icons rounded-circle" src="{{ asset('images/safety/icons/500-07-rear-view-parking-camera.svg') }}" alt="" data-params='<?php echo json_encode(['title' => _i("REAR VIEW PARKING CAMERA"), 'description' => _i("The camera will transmit a high-resolution image of whatever is behind you, helping while parking or during your maneuvers."), 'video' => asset("images/safety/07-rear-view.mp4")], JSON_HEX_APOS); ?>'>
                    <img class="icons rounded-circle" src="{{ asset('images/safety/icons/500-08-360-drone-view.svg') }}" alt="" data-params='<?php echo json_encode(['title' => _i("360° DRONE VIEW"), 'description' => _i("11 sensors will guarantee a 360° view of the car to detect any kind of obstacles around you and alerting about object proximity."), 'video' => asset("images/safety/08-360-drone-view.mp4")], JSON_HEX_APOS); ?>'>
                    <img class="icons rounded-circle" src="{{ asset('images/safety/icons/500-09-emergency-call.svg') }}" alt="" data-params='<?php echo json_encode(['title' => _i("EMERGENCY CALL"), 'description' => _i("In case of emergencies the new 500 will help by making a call that transmits the location and status of the vehicle."), 'video' => asset("images/safety/09-emergency-call.mp4")], JSON_HEX_APOS); ?>'>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-lg-5 col-xl-4 text-center">
                    <div class="video-wrapper p-5 mb-5 mb-lg-0">
                        <video class="w-100 videos" muted loop poster="{{ asset('images/safety/06-autonomous-brake.jpg') }}">
                            <source src="" type='video/mp4'>
                        </video>
                    </div>
                </div>
                <div class="col-12 col-lg-5 col-xl-4 p-lg-5">
                    <p class="primary mb-3 font-weight-bold title">{!! _i("AUTONOMOUS EMERGENCY BRAKING") !!}</p>
                    <p class="description white">{!! _i("New 500 will brake automatically to avoid possible collision with car, pedestrian or cyclist.") !!}</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta-container configurator bg-secondary">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 mx-auto text-center">
                <h2 class="white font-italic mb-5"><span class="font-weight-bold">{!! _i("CONFIGURE NOW") !!}</span> <span class="font-light">{!! _i("YOUR NEW 500")!!}</span></h2>
                <a class="btn btn-primary btn-cta border" data-params='{"cta":"Car Configurator"}' href="{!! _i("//www.fiat.it/car-configurator/").'?source=brochure' !!}" target="_blank">
                    {!! _i("CAR CONFIGURATOR") !!}</a>
			</div>
        </div>
    </div>
</section>

<div id="CONNECTIVITY"></div>
<section class="panel">
    <picture>
        <source srcset="{{ asset('images/500-09-m.jpg') }}" media="(max-width: 1024px)">
        <img class="img-fluid" src="{{ asset('images/500-09.jpg') }}">
    </picture>
    <div class="caption panel-06">
        <h1 class="white font-italic font-light border-bottom">{!! _i("CONNECTED") !!}</h1>
        <h1 class="ml-5 white font-italic font-weight-bold">{!! _i("TO YOUR WORLD") !!}</h1>
        <p class="white small bottom">
            {!! _i("The “Cinerama” infotainment system is completely new, projecting you into the future. With a fast, intuitive and easy-to-use 10.25” screen, you can access new content and advanced features, like wireless Apple CarPlay and Android Auto™. Thanks to Ultra-fast Bluetooth®, you will be connected to your devices in less than 5 seconds. Plus, you can enjoy the new 7” cluster, wireless mobile phone charging system and radio with built-in navigation.") !!}
        </p>
    </div>
</section>

<section id="CONNECTIVITY" class="bg-dark pt-8 pb-5">
    <div class="container white">
        <div class="row">
            <div class="col-12 col-lg-10 col-xl-8 mx-auto text-center mb-5">
                <img class="img-fluid logo" src="{{ asset('images/500-logo-e.png') }}" alt="">
            </div>
            <div class="col-12 col-lg-10 col-xl-8 mx-auto text-center mb-5">
                <h2 class="font-weight-bold primary mb-5"><span class="font-italic font-light">{!! _i("YOUR NEW 500") !!}</span> <span class="font-italic font-weight-bold">{!! _i("IN YOUR SMARTPHONE") !!}</span></h2>
                <p>{!! _i("Enjoy the best connection, both on board and when you’re away from the car. Thanks to the new Fiat app that’s more than just an application, it’s an advanced ecosystem of applications that, together with Uconnect™ Services, enables you to access a world of possibilities and control your new electric 500, whenever you want and wherever you are.") !!}</p>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-12 col-lg-10 col-xl-8 mx-auto text-center">
                <div id="accordion-connectivity" class="accordion">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h3 class="mb-0">
                                <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#MY-E-CHARGE" aria-expanded="true" aria-controls="collapseOne">
                                    {!! _i("MANAGE YOUR RECHARGE: MY E-CHARGE") !!}
                                </a>
                            </h3>
                        </div>

                        <div id="MY-E-CHARGE" class="collapse" aria-labelledby="headingOne" data-parent="#accordion-connectivity">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-12 col-lg-6 text-left">
                                        {!! _i("A world of services for the management of the electric charge. Find public charging stations nearby and access features for charging, payments and track charging history. At home you can quickly access your private Wallbox and, thanks to the remote management, get the most out of your connected Wallbox.") !!}
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <img class="img-fluid" src="{{ asset('images/connectivity/03-my-echarge.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h3 class="mb-0">
                                <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#MY-ASSISTANT" aria-expanded="true" aria-controls="collapseOne">
                                    {!! _i("24/7 PERSONAL ROAD ASSISTANCE: MY ASSISTANT") !!}
                                </a>
                            </h3>
                        </div>

                        <div id="MY-ASSISTANT" class="collapse" aria-labelledby="headingOne" data-parent="#accordion-connectivity">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-12 col-lg-6 text-left">
                                        {!! _i("Emergency calls through a ceiling light, to contact a dedicated assistant or to request roadside assistance, directly from the vehicle’s, touchscreen or through the FIAT app.") !!}
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <img class="img-fluid" src="{{ asset('images/connectivity/04-my-assistant.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h3 class="mb-0">
                                <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#MY-REMOTE" aria-expanded="true" aria-controls="collapseOne">
                                    {!! _i("SEAMLESS REMOTE CONTROL: MY REMOTE") !!}
                                </a>
                            </h3>
                        </div>

                        <div id="MY-REMOTE" class="collapse" aria-labelledby="headingOne" data-parent="#accordion-connectivity">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-12 col-lg-6 text-left">
                                        {!! _i("Locate the position of the car directly from your smartphone. Lock and unlock the doors and check the charging level and schedule the Air Conditioning and the vehicle charging. Alexa integration.") !!}
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <img class="img-fluid" src="{{ asset('images/connectivity/05-my-remote.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h3 class="mb-0">
                                <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#MY-CAR" aria-expanded="true" aria-controls="collapseOne">
                                    {!! _i("REAL TIME CAR CHECK: MY CAR") !!}
                                </a>
                            </h3>
                        </div>

                        <div id="MY-CAR" class="collapse" aria-labelledby="headingOne" data-parent="#accordion-connectivity">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-12 col-lg-6 text-left">
                                        {!! _i("Real time information about the status of your car.") !!}
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <img class="img-fluid" src="{{ asset('images/connectivity/06-my-car.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h3 class="mb-0">
                                <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#MY-NAVIGATION" aria-expanded="true" aria-controls="collapseOne">
                                    {!! _i("ALL-NEW CONNECTED NAVIGATION: MY NAVIGATION") !!}
                                </a>
                            </h3>
                        </div>

                        <div id="MY-NAVIGATION" class="collapse" aria-labelledby="headingOne" data-parent="#accordion-connectivity">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-12 col-lg-6 text-left">
                                        {!! _i("Share the destination from your app and your vehicle. The display shows your destination, with live traffic, weather updates, speed cameras notifications and point of charge. Your maps are always updated “over the air” with a seamless frictionless experience.") !!}
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <img class="img-fluid" src="{{ asset('images/connectivity/07-my-navigation.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h3 class="mb-0">
                                <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#MY-WI-FI" aria-expanded="true" aria-controls="collapseOne">
                                    {!! _i("MOBILE INTERNET: MY WI-FI") !!}
                                </a>
                            </h3>
                        </div>

                        <div id="MY-WI-FI" class="collapse" aria-labelledby="headingOne" data-parent="#accordion-connectivity">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-12 col-lg-6 text-left">
                                        {!! _i("Connect up to 8 devices and access your Amazon Alexa Voice Assistant onboard.") !!}
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <img class="img-fluid" src="{{ asset('images/connectivity/08-my-wifi.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h3 class="mb-0">
                                <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#MY-ALERT" aria-expanded="true" aria-controls="collapseOne">
                                    {!! _i("STOLEN VEHICLE TRACKING: MY ALERT") !!}
                                </a>
                            </h3>
                        </div>

                        <div id="MY-ALERT" class="collapse" aria-labelledby="headingOne" data-parent="#accordion-connectivity">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-12 col-lg-6 text-left">
                                        {!! _i("In case of theft you will be put in contact with an operator and your car will be tracked to help the police to rescue it.") !!}
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <img class="img-fluid" src="{{ asset('images/connectivity/09-my-alert.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row py-5">
            <div class="col-12 d-flex align-items-center justify-content-center btn-wrap">
                <a href="{!! _i("//apps.apple.com/it/app/fiat-goe-live/id1523452215") !!}" target="_blank" class="btn btn-primary mr-5">{!! _i("DOWNLOAD THE FIAT IOS APP") !!}</a>
                <a href="{!! _i("//play.google.com/store/apps/details?id=com.fca.goelive.fiat") !!}" target="_blank" class="btn btn-primary">{!! _i("DOWNLOAD THE FIAT ANDROID APP") !!}</a>
            </div>
        </div>
    </div>
</section>

<div id="TRIM"></div>
<section class="panel-static panel-07">
    <div class="caption panel-07">
        <h1 class="white font-italic font-light border-bottom">{!! _i("DIFFERENT VERSIONS") !!}</h1>
        <h1 class="ml-5 white font-italic font-weight-bold">{!! _i("ALL UNIQUE") !!}</h1>
        <p class="white small bottom">
            {!! _i("The new electric 500 comes just the way you want it: available in Hatchback, Convertible and 3+1 versions and with different trims to choose from. All you have to do is find the one that suits you best.") !!}
        </p>
    </div>
    <picture>
        <source srcset="{{ asset('images/500-10-m.jpg') }}" media="(max-width: 1024px)">
        <img class="img-fluid" src="{{ asset('images/500-10.jpg') }}">
    </picture>
</section>

<section id="api-cards">
    <div class="container">
        <div class="row justify-content-center">
            @if (LaravelGettext::getLocale() === 'fr_FR')
            <div class="col-12 col-lg-3 gs_reveal">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/action_fr_FR.png') }}">
                    <div class="card-body">
                        <h4 class="card-title text-center font-weight-bold mb-3">{!! _i("HATCHBACK ONLY") !!}</h4>
                        <ul>
                            <li>{!! _i("15” Steel Wheel") !!}</li>
                            <li>{!! _i("Halogen headlamps + LED DRL") !!}</li>
                            <li>{!! _i("Manual A/C") !!}</li>
                            <li>{!! _i("Electric Parking Brake") !!}</li>
                            <li>{!! _i("Entry-Keyless go") !!}</li>
                            <li>{!! _i("TFT 7” Color Display") !!}</li>
                            <li>{!! _i("Smartphone Cradle") !!}</li>
                            <li>{!! _i("Fiat Link & Drive") !!}</li>
                            <li>{!! _i("Attention Assist") !!}</li>
                            <li>{!! _i("Autonomous Emergency Braking") !!}</li>
                            <li>{!! _i("Lane Control") !!}</li>
                            <li>{!! _i("Traffic Sign Recognition") !!}</li>
                            <li>{!! _i("E-call") !!}</li>
                            <li>{!! _i("Fast charge 50 kW") !!}</li>
                            <li>{!! _i("Mode 2 cable (3 kW))") !!}</li>
                            <li>{!! _i("185 km (WLTP)") !!}</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 api-card gs_reveal">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/passion_fr_FR.png') }}">
                    <div class="card-body">
                        <h4 class="card-title text-center font-weight-bold mb-3">{!! _i("HATCHBACK • CABRIO • 3+1") !!}</h4>
                        <p class="font-weight-bold card-text">{!! _i("In addition to Action contents:") !!}</p>
                        <ul>
                            <li>{!! _i("15” Styled Wheel") !!}</li>
                            <li>{!! _i("Radio 7” touchscreen ") !!}</li>
                            <li>{!! _i("Wireless CarPlay/Android Auto™") !!}</li>
                            <li>{!! _i("Uconnect™ Services") !!}</li>
                            <li>{!! _i("Digital Audio Broadcast") !!}</li>
                            <li>{!! _i("Cruise Control") !!}</li>
                            <li>{!! _i("Fast charge 85 kW") !!}</li>
                            <li>{!! _i("Mode 2 cable (3 kW)") !!}</li>
                            <li>{!! _i("320 km (WLTP)") !!}</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 api-card gs_reveal">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/icon_fr_FR.png') }}">
                    <div class="card-body">
                        <h4 class="card-title text-center font-weight-bold mb-3">{!! _i("HATCHBACK • CABRIO • 3+1") !!}</h4>
                        <p class="font-weight-bold card-text">{!! _i("In addition to Passion contents:") !!}</p>
                        <ul>
                            <li>{!! _i("16” Alloy Wheel") !!}</li>
                            <li>{!! _i("Chromed DLO") !!}</li>
                            <li>{!! _i("Eco-leather Steering Wheel") !!}</li>
                            <li>{!! _i("All Power Windows") !!}</li>
                            <li>{!! _i("Passive Entry + Wearable Key") !!}</li>
                            <li>{!! _i("Automatic A/C") !!}</li>
                            <li>{!! _i("Radio 10,25” NAV") !!}</li>
                            <li>{!! _i("Traffic Sign Information ") !!}</li>
                            <li>{!! _i("Rain Sensor") !!}</li>
                            <li>{!! _i("Fast charge 85 kW") !!}</li>
                            <li>{!! _i("Mode 2 cable (3 kW)") !!}</li>
                            <li>{!! _i("320 km (WLTP)") !!}</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 gs_reveal">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/iconplus_fr_FR.png') }}">
                    <div class="card-body">
                        <h4 class="card-title text-center font-weight-bold mb-3">BERLINE • CABRIO • 3+1</h4>
                        <ul>
                            <li>Accoudoir central avec console fermée</li>
                            <li>Banquette fractionnable 50/50</li>
                            <li>Batterie 42 kWh</li>
                            <li>Chargeur à induction</li>
                            <li>Feux de route/croisement automatiques</li>
                            <li>Jantes alliage 17’’ bicolores</li>
                            <li>Projecteur full LED ‘Infinity’</li>
                            <li>Rétroviseur int. photochromatique</li>
                            <li>Toit vitré panoramique</li>
                            <li>Vitres arrière surteintées</li>
                        </ul>
                    </div>
                </div>
            </div>
            @else
            <div class="col-12 col-lg-4 col-xl-3 gs_reveal gs_reveal_fromRight">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/action.png') }}">
                    <div class="card-body">
                        <h4 class="card-title text-center font-weight-bold mb-3">{!! _i("HATCHBACK ONLY") !!}</h4>
                        <ul>
                            <li>{!! _i("15” Steel Wheel") !!}</li>
                            <li>{!! _i("Halogen headlamps + LED DRL") !!}</li>
                            <li>{!! _i("Manual A/C") !!}</li>
                            <li>{!! _i("Electric Parking Brake") !!}</li>
                            <li>{!! _i("Entry-Keyless go") !!}</li>
                            <li>{!! _i("TFT 7” Color Display") !!}</li>
                            <li>{!! _i("Smartphone Cradle") !!}</li>
                            @if (LaravelGettext::getLocale() !== 'it_IT')
                            <li>{!! _i("Fiat Link & Drive") !!}</li>
                            @endif
                            <li>{!! _i("Attention Assist") !!}</li>
                            <li>{!! _i("Autonomous Emergency Braking") !!}</li>
                            <li>{!! _i("Lane Control") !!}</li>
                            <li>{!! _i("Traffic Sign Recognition") !!}</li>
                            <li>{!! _i("E-call") !!}</li>
                            <li>{!! _i("Fast charge 50 kW") !!}</li>
                            <li>{!! _i("Mode 2 cable (3 kW))") !!}</li>
                            <li>{!! _i("185 km (WLTP)") !!}</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-xl-3 api-card gs_reveal">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/passion.png') }}">
                    <div class="card-body">
                        <h4 class="card-title text-center font-weight-bold mb-3">{!! _i("HATCHBACK • CABRIO • 3+1") !!}</h4>
                        <p class="font-weight-bold card-text">{!! _i("In addition to Action contents:") !!}</p>
                        <ul>
                            <li>{!! _i("15” Styled Wheel") !!}</li>
                            <li>{!! _i("Radio 7” touchscreen ") !!}</li>
                            <li>{!! _i("Wireless CarPlay/Android Auto™") !!}</li>
                            <li>{!! _i("Uconnect™ Services") !!}</li>
                            <li>{!! _i("Digital Audio Broadcast") !!}</li>
                            <li>{!! _i("Cruise Control") !!}</li>
                            <li>{!! _i("Fast charge 85 kW") !!}</li>
                            <li>{!! _i("Mode 2 cable (3 kW)") !!}</li>
                            <li>{!! _i("320 km (WLTP)") !!}</li>
                            @if (LaravelGettext::getLocale() === 'it_IT')
                            <li>Seconda porta laterale (solo versione 3+1)</li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-xl-3 api-card gs_reveal gs_reveal_fromLeft">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/icon.png') }}">
                    <div class="card-body">
                        <h4 class="card-title text-center font-weight-bold mb-3">{!! _i("HATCHBACK • CABRIO • 3+1") !!}</h4>
                        <p class="font-weight-bold card-text">{!! _i("In addition to Passion contents:") !!}</p>
                        <ul>
                            <li>{!! _i("16” Alloy Wheel") !!}</li>
                            @if (LaravelGettext::getLocale() !== 'it_IT' && LaravelGettext::getLocale() !== 'es_ES')
                            <li>{!! _i("Chromed DLO") !!}</li>
                            @endif
                            <li>{!! _i("Eco-leather Steering Wheel") !!}</li>
                            <li>{!! _i("All Power Windows") !!}</li>
                            @if (LaravelGettext::getLocale() === 'fr_CH')
                            <li>Capteurs de stationnement arrière</li>
                            <li>Chargeur sans fil</li>
                            @endif
                            <li>{!! _i("Passive Entry + Wearable Key") !!}</li>
                            <li>{!! _i("Automatic A/C") !!}</li>
                            <li>{!! _i("Radio 10,25” NAV") !!}</li>
                            <li>{!! _i("Traffic Sign Information ") !!}</li>
                            <li>{!! _i("Rain Sensor") !!}</li>
                            <li>{!! _i("Fast charge 85 kW") !!}</li>
                            <li>{!! _i("Mode 2 cable (3 kW)") !!}</li>
                            <li>{!! _i("320 km (WLTP)") !!}</li>
                        </ul>
                    </div>
                </div>
            </div>            
            @endif
        </div>
    </div>
</section>


<section class="pt-8 gs_reveal">
    <div class="container mb-5">
        <div class="row">
            <div class="col-12 col-lg-8 col-xl-6 mx-auto">
                <h1 class="secondary font-italic font-light border-bottom">{!! _i("TO EACH HIS OWN") !!}</h1>
                <h1 class="secondary ml-5 mb-5 font-italic font-weight-bold">{!! _i("FORM OF PERFECTION") !!}</h1>
                <p>{!! _i("The exclusive launch edition is available today in the Hatchback and Cabrio version, plus the 3+1 model: the new design that introduces an additional side door to facilitate access to the rear cabin. Three expressions of the versatility that represent the new 500 at its best.") !!}</p>
            </div>
        </div>
    </div>
</section>

<section id="OPENING-EDITION" class="bg-secondary">
    <div class="container-fluid p-0 gs_reveal gs_reveal_fromLeft">
        <div class="row no-gutters">
            <div class="col-12">
                <picture>
                    <source srcset="{{ asset('images/500-11-m.jpg') }}" media="(max-width: 1024px)">
                    <img class="img-fluid" src="{{ asset('images/500-11.jpg') }}">
                </picture>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8 mx-auto py-5">
                <div class="row white">
                    <div class="col-12">
                        <h2 class="font-italic font-weight-bold mb-0">{!! _i("LA PRIMA") !!}</h2>
                        <h3 class="font-italic mb-3 pb-2 border-bottom">{!! _i("OPENING EDITION") !!}</h3>
                        <h4 class="card-title font-weight-bold mb-3">{!! _i("HATCHBACK • CABRIO • 3+1") !!}</h4>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul>
                            <li>{!! _i("17” Alloy Wheel") !!}</li>
                            <li>{!! _i("LED Headlamps") !!}</li>
                            <li>{!! _i("Chromed side mouldings") !!}</li>
                            @if (LaravelGettext::getLocale() === 'fr_CH')
                            <li>Plaque spécifique (non numérotée)</li>
                            @endif
                            <li>{!! _i("Monogram Capote (Cabrio)/ Fixed sun roof (HB)") !!}</li>
                            <li>{!! _i("Eco-leather seats") !!}</li>
                            <li>{!! _i("50/50 rear bench") !!}</li>
                            <li>{!! _i("Central Armrest with close central console") !!}</li>
                            <li>{!! _i("Front & Rear floor mats") !!}</li>
                        </ul>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul>
                            <li>{!! _i("Fiat Co-Driver (Autonomous Driving L2)") !!}</li>
                            <li>{!! _i("Radio 10.25” NAV") !!}</li>
                            @if (LaravelGettext::getLocale() === 'it_IT')
                            <li>Retrocamera con griglie dinamiche</li>
                            @endif
                            <li>{!! _i("Automatic A/C") !!}</li>
                            <li>{!! _i("Wireless charger") !!}</li>
                            <li>{!! _i("360° Drone view & Rear view parking Camera") !!}</li>
                            <li>{!! _i("Urban Blind Spot") !!}</li>
                            <li>{!! _i("Fast charge 85 kW") !!}</li>
                            <li>{!! _i("Mode 3 cable (11 kW)") !!}</li>
                            <li>{!! _i("320 km (WLTP)") !!}</li>
                            @if (LaravelGettext::getLocale() !== 'it_IT' && LaravelGettext::getLocale() !== 'es_ES')
                            <li>{!! _i("Second side door (3+1 version only)") !!}</li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="CUSTOMIZE" class="pt-8 mb-5">
    <div class="container bg-light">
        <div class="col-12 col-xl-8 mx-auto pt-8">
            <h1 class="secondary font-italic font-light border-bottom w-fc">{!! _i("A MATTER") !!}</h1>
            <h1 class="secondary mb-5 font-italic font-weight-bold">{!! _i("OF STYLE") !!}</h1>
            <p class="mb-5">{!! _i("Customize your new 500 however you wish, with three different packages to choose from.") !!}</p>
            <div class="collapse-component">
                <div id="btns-container">
                    <button class="btn btn-link btn-custom active" type="button" data-target="target-technology">{!! _i("TECHNOLOGY") !!}</button>
                    <button class="btn btn-link btn-custom" type="button" data-target="target-comfort">{!! _i("COMFORT") !!}</button>
                    <button class="btn btn-link btn-custom" type="button" data-target="target-style">{!! _i("STYLE") !!}</button>
                </div>
                <div id="body-component">
                    @include('frontend.partials.customize-technology')
                    @include('frontend.partials.customize-comfort')
                    @include('frontend.partials.customize-style')
                </div>
            </div>
        </div>
    </div>
</section>

 <section id="CONFIGURATOR" class="pt-8" data-defaultModel="{{ $config['defaultModel'] }}" >
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-xl-4 primary mb-5">
                <div>
                    <h1 class="secondary font-italic font-light border-bottom w-fc">{!! _i("WHAT COLOUR") !!}</h1>
                    <h1 class="secondary mb-5 font-italic font-weight-bold">{!! _i("IS THE FUTURE") !!}</h1>
                </div>
            </div>
            <div class="col-12 col-xl-8 primary mb-5">
                <div id="models-selector" class="d-flex justify-content-center">
                    @foreach ($config['models'] as $modelCode => $model)
                        <div class="text-center mr-5">
                            <img 
                            class="img-fluid rounded-circle model mb-3 @php echo ($modelCode == 'hb') ? 'active' : null @endphp" 
                            data-modelCode="{{ $modelCode }}"
                            data-colorCode="{{ $model['default']['color']}}"
                            data-colorName="{{ $config['colors'][$model['default']['color']] }}"
                            src="{{ asset("images/configurator/".$modelCode."/thumb.jpg") }}" 
                            >
                            <h4 class="secondary font-weight-bold font-italic">{{ $model['modelName'] }}</h4>
                        </div>
                    @endforeach
                </div>
            </div>
            
            <div id="colors-selector" class="col-12 col-lg-3 mb-5 mb-lg-0">
                @foreach ($config['colors'] as $code => $color)
                    <div 
                        style="background-color: {{ $config['rgbCodes'][$code] }}" 
                        class="m-2 rounded-circle color color-{{ $code }}  @php echo ($code == $config['models'][$config['defaultModel']]['default']['color']) ? 'active' : null @endphp" 
                        data-colorCode="{{ $code }}"
                        data-colorName="{{ $config['colors'][$code]  }}">
                    </div>
                @endforeach
            </div>
            <div class="col-12 col-lg-9 mb-5">
                <div class="img-wrap">
                    @foreach ($config['models'] as $modelName => $model)
                        @foreach ($model['colors'] as $color)
                            <img 
                            class="img-fluid car-{{ $modelName }}-{{ $color }} @php echo ($modelName == 'hb' && $color == $model['default']['color']) ? 'active' : null @endphp" 
                            src="{{ asset("images/configurator/".$modelName."/".$color.".jpg") }}"
                            >
                        @endforeach
                    @endforeach
                </div>
            </div>

            <div class="col-12">
                <h2 id="CONFIGURATOR__colorName" class="secondary font-italic font-weight-bold border-bottom w-fc mx-auto">{!! _i("GLACIER BLUE") !!}</h2>
            </div>

            <div id="capote" class="col-12 text-center d-none">
                <p class="small text-muted">{!! _i("Choose between 4 different colors for the capote.") !!}</p>
                <div class="wrap-colors-capote">
                    <div>
                        <img src="{{ asset('images/capote/black.jpg') }}">
                        <p class="small text-muted">{!! _i("BLACK") !!}</p>
                    </div>
                    <div>
                        <img src="{{ asset('images/capote/blue.jpg') }}">
                        <p class="small text-muted">{!! _i("BLUE") !!}</p>
                    </div>
                    <div>
                        <img src="{{ asset('images/capote/grey.jpg') }}">
                        <p class="small text-muted">{!! _i("GREY") !!}</p>
                    </div>
                    <div>
                        <img src="{{ asset('images/capote/monogram.jpg') }}">
                        <p class="small text-muted">{!! _i("MONOGRAM") !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('frontend.partials.cta')
@include('frontend.partials.services')

@endsection

@section('foot')
@parent
{{-- Agguingere eventuali plugin non importabili con npm --}}
@endsection