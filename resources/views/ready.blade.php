@extends('layout.app')
@section('content')

    @foreach($readies as $ready)
        <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp mt-4" data-wow-delay="0.5s">
            <div class="rounded overflow-hidden">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="public/Image/{{$ready->image}}" width="100px" alt="">
                </div>
                <div class="bg-light p-4">
                    <p class="text-primary fw-medium text-center mb-2">{{$ready->name}}</p>
                    <h5 class="lh-base mb-0">{{$ready->text}}</h5>
                </div>
            </div>
        </div>
    @endforeach

@endsection
