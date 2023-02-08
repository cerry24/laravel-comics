@extends('layouts.app')

@section('main-content')
    <section id="jumbotron">
        <img src="{{ Vite::asset('resources/assets/img/jumbotron.jpg') }}" alt="" class="w-100">
    </section>

    <section id="cards" class="position-relative bg-dark pt-5 pb-5">
        <div class="container">
            <div class="current position-absolute bg-primary text-white text-uppercase fw-bold">current series</div>

            <div class="row">
                @foreach ($comics as $comic)
                <div class="col-2 gy-5">
                    <article class="ms_card">
                        <div class="img">
                            <a href="">
                                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }} image" class="img-fluid">
                            </a>
                        </div>

                        <span class="text-light text-uppercase">{{ $comic['series'] }}</span>
                    </article>
                </div>
                @endforeach
            </div>

            <div class="row justify-content-center">
                <div class="col-2">
                    <span class="btn-load-more bg-primary text-uppercase fw-bold">
                        <a href="#" class=" text-white">load more</a>
                    </span>
                </div>
            </div>
        </div>
    </section>
@endsection