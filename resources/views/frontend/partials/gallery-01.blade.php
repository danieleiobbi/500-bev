<section id="x-gallery-01" class="pt-8">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 col-xl-6 mx-auto gs_reveal">
                <h1 class="secondary font-italic font-light border-bottom">{!! _i("LITTLE DETAILS") !!}</h1>
                <h1 class="ml-5 secondary font-italic font-weight-bold">{!! _i("MAKE BIG THINGS HAPPEN") !!}</h1>
                <p>
                    {!! _i("True to its roots and to 500’s iconic style, the new electric 500 is more beautiful than ever thanks to a new cleaner, more refined design and subtle lines, with the 500 logo moved to the front to reaffirm its unmistakable personality. Wider and longer than ever before, it has an even greater on-road presence.") !!}
                </p>
			</div>
        </div>
    </div>

    <div class="container-fluid x-gallery pt-8 d-none d-sm-block">
        <div class='d-flex align-items-center justify-content-center'>
            <div class='demo-wrapper'>
                <section class='section-gallery'>
                    <ul class='wrapper'>
                        <li>
                            <img height='600' src='{{ asset('images/gallery-01/01.jpg') }}' width='851'>
                        </li>
                        <li>
                            <img height='600' src='{{ asset('images/gallery-01/02.jpg') }}' width='851'>
                        </li>
                        <li>
                            <img height='600' src='{{ asset('images/gallery-01/03.jpg') }}' width='851'>
                        </li>
                    </ul>
                </section>
                <section class='section-gallery'>
                    <ul class='wrapper'>
                        <li>
                            <img height='600' src='{{ asset('images/gallery-01/04.jpg') }}' width='851'>
                        </li>
                        <li>
                            <img height='600' src='{{ asset('images/gallery-01/05.jpg') }}' width='851'>
                        </li>
                        <li>
                            <img height='600' src='{{ asset('images/gallery-01/06.jpg') }}' width='851'>
                        </li>
                    </ul>
                </section>
                <section class='section-gallery'>
                    <ul class='wrapper'>
                        <li>
                            <img height='600' src='{{ asset('images/gallery-01/09.jpg') }}' width='851'>
                        </li>
                        <li>
                            <img height='600' src='{{ asset('images/gallery-01/08.jpg') }}' width='851'>
                        </li>
                        <li>
                            <img height='600' src='{{ asset('images/gallery-01/07.jpg') }}' width='851'>
                        </li>
                    </ul>
                </section>
            </div>
        </div>
    </div>

    <div class="container gallery-carousel d-block d-sm-none">
        <div class="row">
            <div class="col">
                <div id="gallery-carousel-01"  class="carousel slide pt-5" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('images/gallery-01/01.jpg') }}" class="d-block w-100" alt="">
                            <div class="carousel-caption"></div>
                        </div>

                        <div class="carousel-item">
                            <img src="{{ asset('images/gallery-01/02.jpg') }}" class="d-block w-100" alt="">
                            <div class="carousel-caption"></div>
                        </div>

                        <div class="carousel-item">
                            <img src="{{ asset('images/gallery-01/03.jpg') }}" class="d-block w-100" alt="">
                            <div class="carousel-caption"></div>
                        </div>

                        <div class="carousel-item">
                            <img src="{{ asset('images/gallery-01/04.jpg') }}" class="d-block w-100" alt="">
                            <div class="carousel-caption"></div>
                        </div>

                        <div class="carousel-item">
                            <img src="{{ asset('images/gallery-01/05.jpg') }}" class="d-block w-100" alt="">
                            <div class="carousel-caption"></div>
                        </div>

                        <div class="carousel-item">
                            <img src="{{ asset('images/gallery-01/06.jpg') }}" class="d-block w-100" alt="">
                            <div class="carousel-caption"></div>
                        </div>

                        <div class="carousel-item">
                            <img src="{{ asset('images/gallery-01/09.jpg') }}" class="d-block w-100" alt="">
                            <div class="carousel-caption"></div>
                        </div>

                        <div class="carousel-item">
                            <img src="{{ asset('images/gallery-01/08.jpg') }}" class="d-block w-100" alt="">
                            <div class="carousel-caption"></div>
                        </div>

                        <div class="carousel-item">
                            <img src="{{ asset('images/gallery-01/07.jpg') }}" class="d-block w-100" alt="">
                            <div class="carousel-caption"></div>
                        </div>
                    </div>
                    <ol class="carousel-indicators">
                        <li data-target="#gallery-carousel-01" data-slide-to="0" class="active"></li>
                        <li data-target="#gallery-carousel-01" data-slide-to="1"></li>
                        <li data-target="#gallery-carousel-01" data-slide-to="2"></li>
                        <li data-target="#gallery-carousel-01" data-slide-to="3"></li>
                        <li data-target="#gallery-carousel-01" data-slide-to="4"></li>
                        <li data-target="#gallery-carousel-01" data-slide-to="5"></li>
                        <li data-target="#gallery-carousel-01" data-slide-to="6"></li>
                        <li data-target="#gallery-carousel-01" data-slide-to="7"></li>
                        <li data-target="#gallery-carousel-01" data-slide-to="8"></li>
                    </ol>
                    <div class="carousel-control py-3 d-flex flex-row justify-content-between align-items-center">
                        <a class="carousel-control-prev" href="#gallery-carousel-01" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#gallery-carousel-01" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>