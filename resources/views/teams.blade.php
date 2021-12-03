@extends('layout')

@section('title', 'Команды')

@section('page-content')
<main class="main form-inline justify-content-around">
    <x-navside></x-navside>
        <div class="frame bg-dark-main rounded-xl row justify-content-around">
            <div class="half flex-column">
                <div class="quarter align-items-start">
                    <h2 class="bg-bronze font-size-1wh rounded-l banner">
                        Страничка с командами
                    </h2>
                </div>
                <div class="quarter">
                    <a class="search-button rounded-l bronze-animation ">
                        <i class="fas fa-2x fa-search align-baseline p-4"></i>
                    </a>
                </div>
            </div>

            <div class="half align-content-start">
                <div class="px-0 mx-0 form-inline justify-content-between hide-sb rounded-l frame-list">
                    <div class="row promo_card rounded-l justify-content-center">
                        <a href="#" class=" col-auto text-gray rounded-l  mb-4 form-inline d-flex" style="background: url('../images/ph.jpg') no-repeat center">
                            <h5 class="mb-0 align-middle">Game-name</h5>
                        </a>
                    </div>
                    <div class=" row promo_card rounded-l justify-content-center">
                        <a href="#" class=" col-auto text-gray rounded-l  mb-4 form-inline d-flex" style="background: url('../images/ph.jpg') no-repeat center">
                            <h5 class="mb-0 align-middle">Game-name</h5>
                        </a>
                    </div>
                    <div class=" row promo_card rounded-l justify-content-center">
                        <a href="#" class=" col-auto text-gray rounded-l  mb-4 form-inline d-flex" style="background: url('../images/ph.jpg') no-repeat center">
                            <h5 class="mb-0 align-middle">Game-name</h5>
                        </a>
                    </div>
                    <div class=" row promo_card rounded-l justify-content-center">
                        <a href="#" class=" col-auto text-gray rounded-l  mb-4 form-inline d-flex" style="background: url('../images/ph.jpg') no-repeat center">
                            <h5 class="mb-0 align-middle">Game-name</h5>
                        </a>
                    </div>
                    <div class="row promo_card rounded-l justify-content-center">
                        <a href="#" class=" col-auto text-gray rounded-l  mb-4 form-inline d-flex" style="background: url('../images/ph.jpg') no-repeat center">
                            <h5 class="mb-0 align-middle">Game-name</h5>
                        </a>
                    </div>
                    <div class="row promo_card rounded-l justify-content-center">
                        <a href="#" class=" col-auto text-gray rounded-l  mb-4 form-inline d-flex" style="background: url('../images/ph.jpg') no-repeat center">
                            <h5 class="mb-0 align-middle">Game-name</h5>
                        </a>
                    </div>
                    <div class="row promo_card rounded-l justify-content-center">
                        <a href="#" class=" col-auto text-gray rounded-l  mb-4 form-inline d-flex" style="background: url('../images/ph.jpg') no-repeat center">
                            <h5 class="mb-0 align-middle">Game-name</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    <div class="side bg-dark-main"></div>
</main>

@endsection
