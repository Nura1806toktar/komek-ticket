@extends('layouts.app')

@section('content')


    <div class="day-filter">
        <div class="container">
            <div class="day-filter__list">

                <button class="day active">Сегодня</button>
                <button class="day">Завтра</button>
                <button class="day">Воскресенье, 10 сент.</button>
                <button class="day">Понедельник, 11 сент.</button>
                <button class="day">Вторник, 12 сент.</button>
                <button class="day">Среда, 13 сент.</button>

            </div>
        </div>
    </div>

    <section class="movies">
        <div class="container">

            <div class="movies__grid">
                @include('components.movie-card')
                {{--@include('components.movie-card')
                @include('components.movie-card')
                @include('components.movie-card')
                @include('components.movie-card')
                @include('components.movie-card')--}}
            </div>

        </div>
    </section>



@endsection
