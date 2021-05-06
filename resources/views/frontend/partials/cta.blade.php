@if (session()->get('source') !== request()->get('source_iLinkEco'))
<section id="cta" class="d-flex align-items-center">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="font-italic white"><span class="font-weight-bold">{!! _i("DISCOVER NOW") !!}</span> <span class="font-light">{!! _i("YOUR NEW 500") !!}</span></h2>
            </div>
        </div>
        <div class="row text-center justify-content-center mb-lg-3">
            <div class="col-12 col-lg-6 text-lg-right mb-3 mb-lg-0 gs_reveal gs_reveal_fromLeft">
                <a class="btn btn-primary btn-cta border" data-params='{"cta":"Car Configurator"}' href="{!! _i("//www.fiat.it/car-configurator/").'?source=brochure' !!}" target="_blank">
                    <i class="mbri-icon icon-carconfigurator l-icon"></i><span>{!! _i("Car Configurator") !!}</span></a>
            </div>
            <div class="col-12 col-lg-6 text-lg-left  mb-3 mb-lg-0 gs_reveal gs_reveal_fromRight">
                <a class="btn btn-primary btn-cta border" data-params='{"cta":"Get a Quote"}' href="{!! _i("//www.fiat.it/preventivo-auto").'?source=brochure' !!}" target="_blank">
                    <i class="mbri-icon icon-quotation l-icon"></i><span>{!! _i("Get a Quote") !!}</span></a>
            </div>
        </div>
        <div class="row text-center justify-content-center">
            <div class="col-12 col-lg-6 text-lg-right mb-3 mb-lg-0 gs_reveal gs_reveal_fromLeft">
                <a class="btn btn-primary btn-cta border" data-params='{"cta":"Test Drive"}' href="{!! _i("//www.fiat.it/test-drive").'?source=brochure' !!}" target="_blank">
                    <i class="mbri-icon icon-test-drive l-icon"></i><span>{!! _i("Test Drive") !!}</span></a>
            </div>
            <div class="col-12 col-lg-6 text-lg-left gs_reveal gs_reveal_fromRight">
                <a class="btn btn-primary btn-cta border" data-params='{"cta":"Dealer Locator"}' href="{!! _i("//www.fiat.com/where-we-are").'?source=brochure' !!}" target="_blank">
                    <i class="mbri-icon icon-dealerlocator l-icon"></i><span>{!! _i("Dealer Locator") !!}</span></a>
            </div>
        </div>
    </div>
</section>
@endif