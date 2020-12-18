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
  

<section id="x-gallery-01" class="pt-8">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 mx-auto">
                <h1 class="secondary font-italic font-light border-bottom">{!! _i("LITTLE DETAILS") !!}</h1>
                <h1 class="ml-5 secondary font-italic font-weight-bold">{!! _i("MAKE BIG THINGS HAPPEN") !!}</h1>
                <p>
                    {!! _i("The new 500 helps to see the road with different eyes, thanks to new LED headlights, but also the world too. Just as 500 has always done. The first generation gave people mobility and freedom; the second generation transformed city cars into fashionable cars; the third has an even more ambitious goal: a better future for all. Including our planet.") !!}
                </p>
			</div>
        </div>
    </div>

    
    <div class="container-fluid x-gallery">
        <div class='loader df aic jcc'>
          <div class='demo-wrapper'>
            <section class='section-gallery'>
              <ul class='wrapper'>
                <li>
                  <img height='874' src='https://source.unsplash.com/random/1240x874?sig=138' width='1240'>
                </li>
                <li>
                  <img height='874' src='https://source.unsplash.com/random/1240x874?sig=97' width='1240'>
                </li>
                <li>
                  <img height='874' src='https://source.unsplash.com/random/1240x874?sig=68' width='1240'>
                </li>
              </ul>
            </section>
            <section class='section-gallery'>
              <ul class='wrapper'>
                <li>
                  <img height='874' src='https://source.unsplash.com/random/1240x874?sig=77' width='1240'>
                </li>
                <li>
                  <img height='874' src='https://source.unsplash.com/random/1240x874?sig=206' width='1240'>
                </li>
                <li>
                  <img height='874' src='https://source.unsplash.com/random/1240x874?sig=193' width='1240'>
                </li>
                <li>
                  <img height='874' src='https://source.unsplash.com/random/1240x874?sig=125' width='1240'>
                </li>
              </ul>
            </section>
            <section class='section-gallery'>
              <ul class='wrapper'>
                <li>
                  <img height='874' src='https://source.unsplash.com/random/1240x874?sig=40' width='1240'>
                </li>
                <li>
                  <img height='874' src='https://source.unsplash.com/random/1240x874?sig=1' width='1240'>
                </li>
                <li>
                  <img height='874' src='https://source.unsplash.com/random/1240x874?sig=98' width='1240'>
                </li>
              </ul>
            </section>
            <section class='section-gallery'>
              <ul class='wrapper'>
                <li>
                  <img height='874' src='https://source.unsplash.com/random/1240x874?sig=182' width='1240'>
                </li>
                <li>
                  <img height='874' src='https://source.unsplash.com/random/1240x874?sig=122' width='1240'>
                </li>
                <li>
                  <img height='874' src='https://source.unsplash.com/random/1240x874?sig=117' width='1240'>
                </li>
                <li>
                  <img height='874' src='https://source.unsplash.com/random/1240x874?sig=62' width='1240'>
                </li>
              </ul>
            </section>
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