@extends('layout')

@section('title', 'Главная')

@section('page-content')
<main class="main form-inline justify-content-around">
    <x-navside></x-navside>
    @if (Auth::user()->role == 0)
        <div class="frame bg-dark-main rounded-xl row justify-content-around">
            <div class="half flex-column">
                <div class="quarter align-items-start">
                    <h2 class="bg-bronze font-size-1wh rounded-l banner">
                       {{ Auth::user()->about }}
                    </h2>
                </div>
                <div class="quarter flex-column">
                    <h2 class='font-size-0 text-bronze mb-4'>
                        Библиотека
                    </h2>
                    <div class="px-0 mx-0 form-inline justify-content-between hide-sb rounded-l frame-list-quarter">
                        <div class="row promo_card-quarter rounded-l justify-content-center">
                            <a href="#" class=" col-auto text-gray rounded-l  mb-4 form-inline d-flex" style="background: url('../images/ph.jpg') no-repeat center">
                                <h5 class="mb-0 align-middle">Game-name</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="half align-content-start">
                <div class="quarter">
                    <div class="time-holder">
                        <div class="time-item" style="border: 3px solid #d4874a;">
                            Актив
                        </div>
                        <span class="text-bronze">:</span>
                        <div class="time-item">
                            17:00
                        </div>
                        <span class="text-bronze">-</span>
                        <div class="time-item">
                            4:00
                        </div>
                    </div>
                </div>
                <div class="quarter bg-bronze rounded-l"></div>
            </div>
        </div>
        @endif

        @if (Auth::user()->role == 1)
        <div class="frame bg-dark-main rounded-xl row justify-content-around">
            <div class="half">
                <div class="quarter">
                    <a href="#" class="bg-second-dark-active rounded-l quarter-button ">
                        управление жалобами
                    </a>
                </div>
                <div class="quarter">
                    <a href="#" class="bg-second-dark-active rounded-l quarter-button">
                        игровые проекты
                    </a>
                </div>
            </div>

            <div class="half">
                <div class="quarter">
                    <a href="#" class="bg-second-dark-active rounded-l quarter-button">
                        настройки
                    </a>
                </div>
                <div class="quarter">
                    <a href="#" class="bg-second-dark-active rounded-l quarter-button">
                        администраторы
                    </a>
                </div>
            </div>
        </div>
        @endif
    <div class="side bg-dark-main"></div>
</main>

@endsection
