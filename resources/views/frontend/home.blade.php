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
        <source srcset="{{ asset('images/500-02-m.jpg') }}" media="(max-width: 1024px)">
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
            <div class="col-12 col-lg-6 mx-auto text-center">
                <h2 class="white font-italic mb-5"><span class="font-weight-bold">{!! _i("CONFIGURE NOW") !!}</span> <span class="font-light">{!! _i("YOUR NEW 500")!!}</span></h2>
                <a class="btn btn-primary btn-cta border"  href="{!! _i("#").'?source=brochure' !!}" target="_blank">
                    <i class="mbri-icon icon-carconfigurator l-icon"></i><span>{!! _i("CAR CONFIGURATOR") !!}</span></a>
			</div>
        </div>
    </div>
</section>

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
                        <p class="font-weight-bold">{!! _i("COMBINED CYCLE WLTP* UP TO") !!}</p>
                        <p class="big primary">{!! _i("320Km") !!}</p>
                    </div>
                    <div class="col-12 col-lg-6">
                        <p class="font-weight-bold">{!! _i("URBAN CYCLE UP TO") !!}</p>
                        <p class="big primary">{!! _i("460Km") !!}</p>
                    </div>
                    <div class="col-12">{!! _i("* data under approval") !!}</div>
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
                    <img class="img-fluid mr-3 mr-lg-5 icons" src="{{ asset('images/icons/500-02.svg') }}" alt="">
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
                    <img class="img-fluid mr-3 mr-lg-5 icons" src="{{ asset('images/icons/500-04.svg') }}" alt="">
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
                    <div class="col-12 col-xl-8 white">
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
                                <h4 class="primary font-weight-bold">{!! _i("LOREM IPSUM") !!}</h4>
                                <p>{!! _i("Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem aliquam corporis voluptatem, laborum illum voluptates! Facere eum nisi fuga voluptatibus, perferendis dicta tempore magni aliquam. Dicta placeat nesciunt autem consequatur.") !!}</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/500-07b.jpg') }}" class="d-block w-100" alt="">
                            <div class="carousel-caption text-left">
                                <h4 class="primary font-weight-bold">{!! _i("IT LOOKS LIKE A DREAM, BUT IT IS AN APP.") !!}</h4>
                                <p>{!! _i("Buying a car, driving many more: My Dream Garage is the service that allows access to all FCA Group models, choosing the most suitable one for every occasion. Start imagining the future of mobility: while you wait for the new 500, download the app and configure your Dream Garage with the models you would like to try. Sometimes dreams come true, especially  if there’s the new 500 in your future.") !!}</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/500-07c.jpg') }}" class="d-block w-100" alt="">
                            <div class="carousel-caption text-left">
                                <h4 class="primary font-weight-bold">{!! _i("LOREM IPSUM") !!}</h4>
                                <p>{!! _i("Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias tempora quae, accusamus repellat quibusdam voluptates nemo maiores aut architecto voluptatem debitis repudiandae sit expedita. Error sapiente nostrum similique repudiandae dolorum.") !!}</p>
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
                            <img src="{{ asset('images/500-07e.jpg') }}" class="d-block w-100" alt="">
                            <div class="carousel-caption text-left">
                                <h4 class="primary font-weight-bold">{!! _i("LOREM IPSUM") !!}</h4>
                                <p>{!! _i("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque excepturi ducimus officiis quas quae magni cupiditate, laborum molestiae, corrupti perspiciatis recusandae. Incidunt optio cum officia molestiae esse beatae, doloribus provident.") !!}</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/500-07f.jpg') }}" class="d-block w-100" alt="">
                            <div class="carousel-caption text-left">
                                <h4 class="primary font-weight-bold">{!! _i("LOREM IPSUM") !!}</h4>
                                <p>{!! _i("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque excepturi ducimus officiis quas quae magni cupiditate, laborum molestiae, corrupti perspiciatis recusandae. Incidunt optio cum officia molestiae esse beatae, doloribus provident.") !!}</p>
                            </div>
                        </div>
                    </div>
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-01" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-01" data-slide-to="1"></li>
                        <li data-target="#carousel-01" data-slide-to="2"></li>
                        <li data-target="#carousel-01" data-slide-to="3"></li>
                        <li data-target="#carousel-01" data-slide-to="4"></li>
                        <li data-target="#carousel-01" data-slide-to="5"></li>
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
                <a class="btn btn-primary btn-cta border"  href="{!! _i("#").'?source=brochure' !!}" target="_blank">
                    <i class="mbri-icon icon-test-drive l-icon"></i><span>{!! _i("TEST DRIVE") !!}</span></a>
			</div>
        </div>
    </div>
</section>

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
    <div class="row">
        <div class="container manual-video-controls">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 col-xl-8 text-center mb-5 d-flex justify-content-around">
                    <img class="icons rounded-circle active" src="{{ asset('images/safety/icons/500-01-adaptive-cruise-control.svg') }}" alt="" data-params='<?php echo json_encode(['title' => _i("INTELLIGENT ADAPTIVE CRUISE CONTROL"), 'description' => _i("Set the speed and enjoy the ride, new 500 will keep the safe distanceand the speed under control for you."), 'video' => asset("images/safety/01-intelligent-adaptive-cruise-control.mp4")], JSON_HEX_APOS) ?>'>
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
                    <p class="description white">{!! _i("Set the speed and enjoy the ride, new 500 will keep the safe distanceand the speed under control for you.") !!}</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="home-13" class="bg-dark">
    <div class="container">
        <div class="manual-video-controls pt-5">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 col-xl-8 text-center mb-5 d-flex justify-content-around">
                    <img class="icons rounded-circle active" src="{{ asset('images/safety/icons/500-06-autonomous-emergency-brake.svg') }}" alt="" data-params='<?php echo json_encode(['title' => _i("AUTONOMOUS EMERGENCY BRAKING"), 'description' => _i("New 500 will brake automatically to avoid possible collision with car, pedestrian or cyclist."), 'video' => asset("images/safety/06-autonomous-brake.mp4")], JSON_HEX_APOS) ?>'>
                    <img class="icons rounded-circle" src="{{ asset('images/safety/icons/500-07-rear-view-parking-camera.svg') }}" alt="" data-params='<?php echo json_encode(['title' => _i("REAR VIEW PARKING CAMERA"), 'description' => _i("The camera will transmit a high-resolution image of wathever is behind you, helping while parking or during your maneuvers."), 'video' => asset("images/safety/07-rear-view.mp4")], JSON_HEX_APOS); ?>'>
                    <img class="icons rounded-circle" src="{{ asset('images/safety/icons/500-08-360-drone-view.svg') }}" alt="" data-params='<?php echo json_encode(['title' => _i("360° DRONE VIEW"), 'description' => _i("11 sensors will guarantee a 360° view of the car to detect any kind of obstacles around you and alerting about object proximity."), 'video' => asset("images/safety/08-360-drone-view.mp4")], JSON_HEX_APOS); ?>'>
                    <img class="icons rounded-circle" src="{{ asset('images/safety/icons/500-09-emergency-call.svg') }}" alt="" data-params='<?php echo json_encode(['title' => _i("EMERGENCY CALL"), 'description' => _i("In case of emergencies the new 500 «la Prima» will help by making a call that transmits the location and status of the vehicle."), 'video' => asset("images/safety/09-emergency-call.mp4")], JSON_HEX_APOS); ?>'>
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
                <p>{!! _i("Enjoy the best connection, both on board and when you are away from the car. Thanks to the new <strong>Fiat</strong> app and the <strong>Uconnect™ Services</strong>, you can control your new 500 «la Prima» whenever you want and wherever you are.") !!}</p>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-12 col-lg-10 col-xl-8 mx-auto text-center">
                <div id="accordion-connectivity" class="accordion">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h3 class="mb-0">
                                <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#MY-E-CHARGE" aria-expanded="true" aria-controls="collapseOne">
                                    {!! _i("MY E-CHARGE") !!}
                                </a>
                            </h3>
                        </div>

                        <div id="MY-E-CHARGE" class="collapse" aria-labelledby="headingOne" data-parent="#accordion-connectivity">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-12 col-lg-6 text-left">
                                        {!! _i("Enter a world of services to find the nearest public charging station and access charging modes, payments and history. And remotely manage your private Wallbox from home.") !!}
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
                                    {!! _i("MY ASSISTANT") !!}
                                </a>
                            </h3>
                        </div>

                        <div id="MY-ASSISTANT" class="collapse" aria-labelledby="headingOne" data-parent="#accordion-connectivity">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-12 col-lg-6 text-left">
                                        {!! _i("It takes care of you wherever you go,providing you with serviceslike emergency call and roadside assistance.") !!}
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
                                    {!! _i("MY REMOTE") !!}
                                </a>
                            </h3>
                        </div>

                        <div id="MY-REMOTE" class="collapse" aria-labelledby="headingOne" data-parent="#accordion-connectivity">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-12 col-lg-6 text-left">
                                        {!! _i("Locate and manage your new 500 «la Prima» remotely. You can lock it, unlock it, start charging and set the pre-conditioning.") !!}
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
                                    {!! _i("MY CAR") !!}
                                </a>
                            </h3>
                        </div>

                        <div id="MY-CAR" class="collapse" aria-labelledby="headingOne" data-parent="#accordion-connectivity">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-12 col-lg-6 text-left">
                                        {!! _i("You want to know what’s going on under the hood? With My Car you have all the information: battery level, tyre pressure, mileage, maintenance, at your fingertips") !!}
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
                                    {!! _i("MY NAVIGATION") !!}
                                </a>
                            </h3>
                        </div>

                        <div id="MY-NAVIGATION" class="collapse" aria-labelledby="headingOne" data-parent="#accordion-connectivity">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-12 col-lg-6 text-left">
                                        {!! _i("Reaching your destination has never been easier. With one touch, find charging stations, share your route and access maps and information in real time. Your maps will be ever updated “over the air” to guarantee you the best routes at all times.") !!}
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
                                    {!! _i("MY WI-FI") !!}
                                </a>
                            </h3>
                        </div>

                        <div id="MY-WI-FI" class="collapse" aria-labelledby="headingOne" data-parent="#accordion-connectivity">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-12 col-lg-6 text-left">
                                        {!! _i("Feel as comfortable and connected as at home. Your car becomes a WI-FI hotspot where you can connect up to 8 devices. You will also have Alexa to answer any of your requests.") !!}
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
                                    {!! _i("MY ALERT") !!}
                                </a>
                            </h3>
                        </div>

                        <div id="MY-ALERT" class="collapse" aria-labelledby="headingOne" data-parent="#accordion-connectivity">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-12 col-lg-6 text-left">
                                        {!! _i("Always keep your new 500 «la Prima» under control. My Alert warns you of any suspected theft attempt and, if confirmed, it allows you to locate the car.") !!}
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

<section class="panel-static panel-07">
    <div class="caption panel-07">
        <h1 class="white font-italic font-light border-bottom">{!! _i("DIFFERENT VERSIONS") !!}</h1>
        <h1 class="ml-5 white font-italic font-weight-bold">{!! _i("ALL UNIQUE") !!}</h1>
        <p class="white small bottom">
            {!! _i("The new electric 500 comes just the way you want it: available in Hatchback, Convertible and 3+1 versions and with different trims to choose from. All you have to do is find the one that suits you best.") !!}
        </p>
    </div>
    <img class="img-fluid" src="{{ asset('images/500-10.jpg') }}">
</section>

<section id="api-cards">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-4 col-xl-3 gs_reveal gs_reveal_fromRight">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/action.png') }}">
                    <div class="card-body">
                        <h4 class="card-title text-center font-weight-bold mb-3">{!! _i("HATCHBACK ONLY") !!}</h4>
                        <ul>
                            <li>{!! _i("15” Steel Wheel _Halogen headlamps + LED DRL _Manual climate control") !!}</li>
                            <li>{!! _i("Electric Parking Brake") !!}</li>
                            <li>{!! _i("Entry-Keyless go") !!}</li>
                            <li>{!! _i("TFT 7” Color Display") !!}</li>
                            <li>{!! _i("Smartphone Cradle ") !!}</li>
                            <li>{!! _i("Attention Assist") !!}</li>
                            <li>{!! _i("Autonomous Emergency Braking") !!}</li>
                            <li>{!! _i("Lane Control") !!}</li>
                            <li>{!! _i("Traffic Sign Recognition") !!}</li>
                            <li>{!! _i("E-call _Fast charge 50 kW _Mode 2 cable (3 kW) _180 km (WLTP)") !!}</li>
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
                            <li>{!! _i("15” Styled Wheel ") !!}</li>
                            <li>{!! _i("Radio 7” touchscreen ") !!}</li>
                            <li>{!! _i("CarPlay/Android Auto™") !!}</li>
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
            <div class="col-12 col-lg-4 col-xl-3 api-card gs_reveal gs_reveal_fromLeft">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/icon.png') }}">
                    <div class="card-body">
                        <h4 class="card-title text-center font-weight-bold mb-3">{!! _i("HATCHBACK • CABRIO • 3+1") !!}</h4>
                        <p class="font-weight-bold card-text">{!! _i("In addition to Action contents:") !!}</p>
                        <ul>
                            <li>{!! _i("16” Alloy Wheel") !!}</li>
                            <li>{!! _i("All Power Windows") !!}</li>
                            <li>{!! _i("Passive Entry + Wearable Key") !!}</li>
                            <li>{!! _i("Automatic climate control") !!}</li>
                            <li>{!! _i("Radio 10,25” NAV") !!}</li>
                            <li>{!! _i("Traffic Sign Information ") !!}</li>
                            <li>{!! _i("Rain Sensor") !!}</li>
                            <li>{!! _i("Fast charge 85 kW") !!}</li>
                            <li>{!! _i("Mode 2 cable (3 kW)") !!}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="pt-8 gs_reveal">
    <div class="container mb-5">
        <div class="row">
            <div class="col-12 col-lg-8 col-xl-6 mx-auto">
                <h1 class="secondary font-italic font-light border-bottom">{!! _i("TO EACH HIS OWN") !!}</h1>
                <h1 class="secondary ml-5 mb-5 font-italic font-weight-bold">{!! _i("FORM OF PERFECTION") !!}</h1>
                <p>{!! _i("The new electric 500 comes just the way you want it: available in Hatchback, Convertible and 3+1 versions and with different trims to choose from. All you have to do is find the one that suits you best.") !!}</p>
            </div>
        </div>
    </div>
</section>

<section id="OPENING-EDITION" class="bg-secondary">
    <div class="container-fluid p-0 gs_reveal gs_reveal_fromLeft">
        <div class="row no-gutters">
            <div class="col-12">
                <img class="img-fluid" src="{{ asset('images/500-11.jpg') }}">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto py-5">
                <div class="row white">
                    <div class="col-12">
                        <h2 class="font-italic font-weight-bold mb-0">{!! _i("LA PRIMA") !!}</h2>
                        <h3 class="font-italic mb-3 pb-2 border-bottom">{!! _i("OPENING EDITION") !!}</h3>
                        <p class="font-weight-bold">{!! _i("In addition to Action contents:") !!}</p>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul>
                            <li>{!! _i("17” Alloy Wheel _LED Headlamps") !!}</li>
                            <li>{!! _i("Chromed side mouldings") !!}</li>
                            <li>{!! _i("Dedicated plate (not numbered)") !!}</li>
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
                            <li>{!! _i("Wireless charger") !!}</li>
                            <li>{!! _i("360° Drone view & Rear view parking Camera") !!}</li>
                            <li>{!! _i("Urban Blind Spot") !!}</li>
                            <li>{!! _i("Fast charge 85 kW") !!}</li>
                            <li>{!! _i("Mode 3 cable (11 kW)") !!}</li>
                            <li>{!! _i("320 km (WLTP)") !!}</li>
                            <li>{!! _i("Second side door (3+1 version only)") !!}</li>
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
                <h2 id="CONFIGURATOR__colorName" class="secondary font-italic font-weight-bold border-bottom w-fc mx-auto">{!! _i("RUGIADA GREEN") !!}</h2>
            </div>
        </div>
    </div>
</section>


@include('frontend.partials.cta')

@endsection

@section('foot')
@parent
{{-- Agguingere eventuali plugin non importabili con npm --}}
@endsection