@extends('layout')

@section('title', 'Авторизация')

@section('page-content')
    <section class="main">
        <div class="section" id="promo">
            <form class="frame bg-dark-main rounded-xl" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="half">
                    <div class="quarter align-items-start">
                        <h2 class="bg-bronze font-size-1wh rounded-l banner">
                            дэб дэб.. авторизация.. дэб дэб
                        </h2>
                    </div>
                    <div class="quarter">
                        <a class="rounded-xl transition text-button" href="{{ route('reg-page') }}">
                            <span class="montserrat-bold text-uppercase">Регистрация</span>
                        </a>
                    </div>
                </div>

                <div class="half flex-column">
                    <div class="quarter flex-column justify-content-around">
                        <div class="form-inline justify-content-around d-flex flex-column col-auto">
                            <label for="email" class="bg-second-dark rounded-xl p-3 m-0 montserrat-bold form-inline justify-content-around">
                                <i class="fas fa-at fa-lg col-2"></i>
                                <input id="email" name="email" type="email" placeholder="e-mail" class="col bg-transparent border-0 text-bronze">
                            </label>
                        </div>

                        <div class="form-inline justify-content-around d-flex flex-column col-auto">
                            <label for="password" class="bg-second-dark rounded-xl p-3 m-0 montserrat-bold form-inline justify-content-around">
                                <i class="fas fa-lock fa-lg col-2"></i>
                                <input id="password" name="password" type="password" placeholder="пароль" class="col bg-transparent border-0 text-bronze">
                            </label>
                        </div>
                    </div>

                    <div class="quarter">
                        <button type="submit" class="bg-second-dark rounded-xl bronze-animation transition text-button text-center" href="{{ route('auth') }}">
                            <span class="montserrat-bold text-uppercase">Вход</span>
                        </button>
                    </div>

                </div>
            </form>
        </div>
    </section>

@endsection


