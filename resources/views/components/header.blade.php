<header class="site-header section form-inline">
        <span class="col"></span>
        <a href="{{route('main-page')}}" class="text-black">
            <h1 class="logo col-auto">FullStack</h1>
        </a>
    @if(Auth::user())
        <div class="col row justify-content-end">
            <a class="col-auto text-black form-inline" href="{{ route('profile-page') }}">
                <img class="avatar" src="../{{Auth::user()->picture_url}}">
                <h2 class="ml-2 mb-0 font-size-0">{{Auth::user()->nickname}}</h2>
            </a>
        </div>
    @else
        <div class="col row justify-content-end">
            <a class="col-auto" href="{{route('auth-page')}}">
                <i class="fas fa-3x fa-user-alt text-black"></i>
            </a>
        </div>
    @endif
</header>
