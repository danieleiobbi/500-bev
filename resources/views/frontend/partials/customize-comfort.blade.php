<div id="target-comfort" class="collapse pt-5">
    <div class="row">
        @if (LaravelGettext::getLocale() !== 'es_ES')
        <div class="col-12 col-lg-6 d-flex align-items-start mb-5">
            <img class="mr-3" src="{{ asset('images/icons/pack04.svg') }}">
            <div>
                <p class="font-weight-bold secondary">{!! _i("WINTER PACK Action (opt 3RF)") !!}</p>
                <ul class="pl-3">
                    <li>{!! _i("Radio 7” (07W), CarPlay/Android Auto™ (8EW)") !!}</li>
                    <li>{!! _i("Wireless Mobile Charger (RFX)") !!}</li>
                    <li>{!! _i("Telematic Box Module (RTK), DAB (RS9)") !!}</li>
                    <li>{!! _i("1° row full functioning with USB (0SU)") !!}</li>
                    <li>{!! _i("1st row Heated seats (452)") !!}</li>
                    <li>{!! _i("Heated windshield (253)") !!}</li>
                    <li>{!! _i("Electrical side mirrors with defrost (041)") !!}</li>
                </ul>
            </div>
        </div>
        <div class="col-12 col-lg-6 last">
            <p class="font-weight-bold secondary">{!! _i("WINTER PACK (opt 6R7)") !!}</p>
            <ul class="pl-3">
                <li>{!! _i("1st row Heated seats (452)") !!}</li>
                <li>{!! _i("Heated windshield (253)") !!}</li>
            </ul>
        </div>
        <div class="col-12 divider mb-5">
            {!! _i("AVAILABLE ON: ACTION • PASSION • ICON") !!}
        </div>
        @endif

        <div class="col-12 d-flex align-items-start mb-5">
            <img class="mr-3" src="{{ asset('images/icons/pack05.svg') }}">
            <div>
                <p class="font-weight-bold secondary">{!! _i("COMFORT SEATS PACK (opt 3RJ)") !!}</p>
                <ul class="pl-3">
                    <li>{!! _i("1st Row Adjustable Seats 6 ways (JTM) • Center Armrest (132)") !!}</li>
                    <li>{!! _i("Close central console (467)") !!}</li>
                </ul>
            </div>
        </div>
        <div class="col-12 divider mb-5">
            {!! _i("AVAILABLE ON: ACTION • PASSION • ICON") !!}
        </div>


        <div class="col-12 col-lg-6 d-flex align-items-start mb-5">
            <img class="mr-3" src="{{ asset('images/icons/pack06.svg') }}">
            <div>
                <p class="font-weight-bold secondary">{!! _i("CONVENIENCE PACK HB (opt 3RN)") !!}</p>
                <ul class="pl-3">
                    <li>{!! _i("Automatic climate control (140)") !!}</li>
                    <li>{!! _i("All Power windows up/down, open/close via remote control (038)") !!}</li>
                    <li>{!! _i("Passive Entry + Wearable key (9Z0)") !!}</li>
                </ul>
            </div>
        </div>
        <div class="col-12 col-lg-6 last">
            <p class="font-weight-bold secondary">{!! _i("CONVENIENCE PACK CABRIO (opt 3RO)") !!}</p>
            <ul class="pl-3">
                <li>{!! _i("Automatic climate control (140)") !!}</li>
                <li>{!! _i("All Power windows up/down, open/close via remote control (038)") !!}</li>
                <li>{!! _i("Passive Entry + Wearable key (9Z0)") !!}</li>
                <li>{!! _i("Roof open/close via remote control (GWB)") !!}</li>
            </ul>
        </div>
        <div class="col-12 divider mb-5">
            {!! _i("AVAILABLE ON: PASSION") !!}
        </div>
    </div>
</div>