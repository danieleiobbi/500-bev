<section id="x-gallery-02" class="pt-8 mb-5">
    <div class="container-fluid x-gallery pt-8 d-none d-sm-block">
        <div class='d-flex align-items-center justify-content-center'>
            <div class='demo-wrapper'>
                <section class='section-gallery'>
                    <ul class='wrapper'>
                        <li>
                            <img height='874' src='{{ asset('images/gallery-02/01.jpg') }}' width='1240'>
                        </li>
                        <li>
                            <img height='874' src='{{ asset('images/gallery-02/02.jpg') }}' width='1240'>
                        </li>
                        <li>
                            <img height='874' src='{{ asset('images/gallery-02/03.jpg') }}' width='1240'>
                        </li>
                    </ul>
                </section>
                <section class='section-gallery'>
                    <ul class='wrapper'>
                        <li>
                            <img height='874' src='{{ asset('images/gallery-02/04.jpg') }}' width='1240'>
                        </li>
                        <li>
                            <img height='874' src='{{ asset('images/gallery-02/05.jpg') }}' width='1240'>
                        </li>
                        <li>
                            <img height='874' src='{{ asset('images/gallery-02/06.jpg') }}' width='1240'>
                        </li>
                    </ul>
                </section>
                <section class='section-gallery'>
                    <ul class='wrapper'>
                        <li>
                            <img height='874' src='{{ asset('images/gallery-02/01.jpg') }}' width='1240'>
                        </li>
                        <li>
                            <img height='874' src='{{ asset('images/gallery-02/07.jpg') }}' width='1240'>
                        </li>
                        <li>
                            <img height='874' src='{{ asset('images/gallery-02/08.jpg') }}' width='1240'>
                        </li>
                    </ul>
                </section>
            </div>
        </div>
    </div>

    <div class="container gallery-carousel d-block d-sm-none mb-5">
        <div class="row">
            <div class="col">
                <div id="gallery-carousel-02"  class="carousel slide pt-5" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('images/gallery-02/01.jpg') }}" class="d-block w-100" alt="">
                            <div class="carousel-caption"></div>
                        </div>

                        <div class="carousel-item">
                            <img src="{{ asset('images/gallery-02/02.jpg') }}" class="d-block w-100" alt="">
                            <div class="carousel-caption"></div>
                        </div>

                        <div class="carousel-item">
                            <img src="{{ asset('images/gallery-02/03.jpg') }}" class="d-block w-100" alt="">
                            <div class="carousel-caption"></div>
                        </div>

                        <div class="carousel-item">
                            <img src="{{ asset('images/gallery-02/04.jpg') }}" class="d-block w-100" alt="">
                            <div class="carousel-caption"></div>
                        </div>

                        <div class="carousel-item">
                            <img src="{{ asset('images/gallery-02/05.jpg') }}" class="d-block w-100" alt="">
                            <div class="carousel-caption"></div>
                        </div>

                        <div class="carousel-item">
                            <img src="{{ asset('images/gallery-02/06.jpg') }}" class="d-block w-100" alt="">
                            <div class="carousel-caption"></div>
                        </div>

                        <div class="carousel-item">
                            <img src="{{ asset('images/gallery-02/01.jpg') }}" class="d-block w-100" alt="">
                            <div class="carousel-caption"></div>
                        </div>

                        <div class="carousel-item">
                            <img src="{{ asset('images/gallery-02/07.jpg') }}" class="d-block w-100" alt="">
                            <div class="carousel-caption"></div>
                        </div>

                        <div class="carousel-item">
                            <img src="{{ asset('images/gallery-02/08.jpg') }}" class="d-block w-100" alt="">
                            <div class="carousel-caption"></div>
                        </div>
                    </div>
                    <ol class="carousel-indicators">
                        <li data-target="#gallery-carousel-02" data-slide-to="0" class="active"></li>
                        <li data-target="#gallery-carousel-02" data-slide-to="1"></li>
                        <li data-target="#gallery-carousel-02" data-slide-to="2"></li>
                        <li data-target="#gallery-carousel-02" data-slide-to="3"></li>
                        <li data-target="#gallery-carousel-02" data-slide-to="4"></li>
                        <li data-target="#gallery-carousel-02" data-slide-to="5"></li>
                        <li data-target="#gallery-carousel-02" data-slide-to="6"></li>
                        <li data-target="#gallery-carousel-02" data-slide-to="7"></li>
                        <li data-target="#gallery-carousel-02" data-slide-to="8"></li>
                    </ol>
                    <div class="carousel-control py-3 d-flex flex-row justify-content-between align-items-center">
                        <a class="carousel-control-prev" href="#gallery-carousel-02" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#gallery-carousel-02" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>