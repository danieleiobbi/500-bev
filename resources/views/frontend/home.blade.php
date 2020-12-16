@extends('frontend.layouts.default')

@section('content')

<section id="home" class="d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto text-center">
                {!! _i("Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga sint excepturi in veniam reprehenderit perspiciatis, nulla assumenda optio est eius minima, similique autem repellat cumque provident aperiam quae, ratione tempore.") !!}
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