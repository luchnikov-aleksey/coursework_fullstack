@extends('layout')

@section('title', 'Регистрация')

@section('page-content')
    <section class="main">
        <div class="section" id="promo">
            <form class="frame bg-dark-main rounded-xl" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="half">
                    <div class="quarter align-items-start">
                        <h2 class="bg-bronze font-size-1wh rounded-l banner">
                                Пару маленьких жашков для становления частью семьи
                            <br>
                            <span class="font-size-1"></span>
                        </h2>
                    </div>
                    <div class="quarter">
                        <button class="bg-second-dark rounded-xl bronze-animation transition text-button text-center border-0" style="outline: none" type="submit">
                            <span class="montserrat-bold text-uppercase">Регистрация</span>
                        </button>
                    </div>
                </div>

                <div class="half align-content-around">
                    <div class="form-inline justify-content-around d-flex flex-column w-auto">
                        <label for="nickname" class="bg-second-dark rounded-xl p-3 m-0 montserrat-bold form-inline justify-content-around">
                            <i class="fas fa-headset fa-lg col-2"></i>
                            <input id="nickname" name="nickname" type="text" placeholder="никнейм" class="col bg-transparent border-0 text-bronze" required>
                        </label>
                    </div>
                    <div class="form-inline justify-content-around d-flex flex-column">
                        <label for="email" class="bg-second-dark rounded-xl p-3 m-0 montserrat-bold form-inline justify-content-around">
                            <i class="fas fa-at fa-lg col-2"></i>
                            <input id="email" name="email" type="email" placeholder="e-mail" class="col bg-transparent border-0 text-bronze " required>
                        </label>
                    </div>

                    <div class="form-inline justify-content-around d-flex flex-column">
                        <label for="password" class="bg-second-dark rounded-xl p-3 m-0 montserrat-bold form-inline justify-content-around">
                            <i class="fas fa-lock fa-lg col-2"></i>
                            <input id="password" name="password" type="password" placeholder="пароль" class="col bg-transparent border-0 text-bronze" required>
                        </label>
                    </div>
                    <div class="form-inline justify-content-around d-flex flex-column">
                        <label for="password" class="bg-second-dark rounded-xl p-3 m-0 montserrat-bold form-inline justify-content-around">
                            <i class="fas fa-lock fa-lg col-2"></i>
                            <input id="password" name="password_confirmation" type="password" placeholder="подтвердите пароль" class="col bg-transparent border-0 text-bronze" required>
                        </label>
                    </div>
                </div>
            </form>
        </div>
    </section>

@endsection


