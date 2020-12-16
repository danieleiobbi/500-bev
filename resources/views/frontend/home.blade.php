@extends('frontend.layouts.default')

@section('content')

<section id="home" class="d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto text-center">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero soluta ab neque dicta, rerum, doloremque perspiciatis sed sint facere eum illo at numquam reprehenderit omnis cum saepe cumque iste iusto.
            </div>
        </div>
    </div>
</section>

<section id="DUMMY" class="d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto text-center">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero soluta ab neque dicta, rerum, doloremque perspiciatis sed sint facere eum illo at numquam reprehenderit omnis cum saepe cumque iste iusto.
            </div>
        </div>
    </div>
</section>

@endsection

@section('foot')
@parent
{{-- Agguingere eventuali plugin non importabili con npm --}}
@endsection