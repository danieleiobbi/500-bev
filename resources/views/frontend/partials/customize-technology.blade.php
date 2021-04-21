<div id="target-technology" class="collapse active pt-5">
    <div class="row">

        <div class="col-12 d-flex align-items-start mb-5">
            <img class="mr-3" src="{{ asset('images/icons/pack01.svg') }}">
            <div>
                <p class="font-weight-bold secondary">{!! _i("RADIO PACK (opt 3RD)") !!}</p>
                <ul class="pl-3">
                    <li>{!! _i("Radio 7” (07W)") !!}</li>
                    <li>{!! _i("CarPlay/Android Auto™ (8EW)") !!}</li>
                    @if(LaravelGettext::getLocale() !== 'it___IT')
                    <li>{!! _i("Wireless Mobile Charger (RFX)") !!}</li>
                    @endif
                    <li>{!! _i("Uconnect™ Services (RTK)") !!}</li>
                    <li>{!! _i("DAB (RS9)") !!}</li>
                    <li>{!! _i("1° rowfull functioning with USB (0SU)") !!}</li>
                </ul>
            </div>
        </div>
        <div class="col-12 divider mb-5">
            {!! _i("AVAILABLE ON: ACTION") !!}
        </div>

        <div class="col-12 d-flex align-items-start mb-5">
            <img class="mr-3" src="{{ asset('images/icons/pack02.svg') }}">
            <div>
                <p class="font-weight-bold secondary">{!! _i("EYE PARK PACK (opt 3RI)") !!}</p>
                <ul class="pl-3">
                    <li>{!! _i("360° Drone View (XAH)") !!}</li>
                    <li>{!! _i("Urban Blind Spot (XAN)") !!}</li>
                    <li>{!! _i("Rearview Parking Camera (9YN)") !!}</li>
                    <li>{!! _i("Electrical side mirrors with defrost (041)") !!}</li>
                    <li>{!! _i("6 speakers (RCG)") !!}</li>
                </ul>
            </div>
        </div>
        <div class="col-12 divider mb-5">
            {!! _i("AVAILABLE ON: PASSION • ICON") !!}
        </div>

        <div class="col-12 col-lg-6 d-flex align-items-start mb-5">
            <img class="mr-3" src="{{ asset('images/icons/pack03.svg') }}">
            <div>
                <p class="font-weight-bold secondary">{!! _i("FIAT CO-DRIVER PACK Passion (opt 2N5)") !!}</p>
                <ul class="pl-3">
                    <li>{!! _i("Fiat Co-Driver (Autonomous Driving L2) (NH1)") !!}</li>
                    <li>{!! _i("360° Drone View (XAH)") !!}</li>
                    <li>{!! _i("Urban Blind Spot (XAN)") !!}</li>
                    <li>{!! _i("Rearview Parking Camera (9YN)") !!}</li>
                    @if(LaravelGettext::getLocale() === 'fr_CH')
                    <li>Lecture des panneaux de signalisation (0XR)</li>
                    @endif
                    <li>{!! _i("Traffic sign information (0XR)") !!}</li>
                    <li>{!! _i("Radio 10,25” NAV (9YT) + 6 speakers (RCG)") !!}</li>
                    <li>{!! _i("Electrical side mirrors with defrost (041)") !!}</li>
                    <li>{!! _i("Steering wheel soft touch (318)") !!}</li>
                    @if(LaravelGettext::getLocale() === 'it_CH' || LaravelGettext::getLocale() === 'fr_CH')
                        <li>Traffic Jam Assist (9YZ)</li>
                    @endif
                </ul>
            </div>
        </div>
        <div class="col-12 col-lg-6 last">
            <p class="font-weight-bold secondary">{!! _i("FIAT CO-DRIVER PACK Icon (opt 2N6)") !!}</p>
            <ul class="pl-3">
                <li>{!! _i("Fiat Co-Driver (Autonomous Driving L2) (NH1)") !!}</li>
                <li>{!! _i("360° Drone View (XAH)") !!}</li>
                <li>{!! _i("Urban Blind Spot (XAN)") !!}</li>
                <li>{!! _i("Rearview Parking Camera (9YN)") !!}</li>
                <li>{!! _i("6 speakers (RCG)") !!}</li>
                @if(LaravelGettext::getLocale() !== 'it___IT')
                <li>{!! _i("Electrical side mirrors with defrost (041)") !!}</li>
                @endif
                @if(LaravelGettext::getLocale() === 'it_CH' || LaravelGettext::getLocale() === 'fr_CH')
                <li>Traffic Jam Assist (9YZ)</li>
                @endif
            </ul>
        </div>
        <div class="col-12 divider mb-5">
            {!! _i("AVAILABLE ON: PASSION • ICON") !!}
        </div>
        
    </div>
</div>