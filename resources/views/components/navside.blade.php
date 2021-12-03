<div class="side bg-dark-main">
    <div class="nav-crate">
        <div class="nav-button-container">
            <a class="nav-button bg-second-dark-active rounded-l" href="{{route('profile-page')}}">
                <i class="bar_icon fas fa-3x fa-user-alt rounded-circle"></i>
            </a>
        </div>

        <div class="nav-button-container">
            <a class="nav-button bg-second-dark-active rounded-l" href="{{route('teams-search-page')}}">
                <i class="bar_icon fas fa-3x fa-users rounded-circle"></i>
            </a>
        </div>

        <div class="nav-button-container">
            <a class="nav-button bg-second-dark-active rounded-l" href="{{route('teams-search-page')}}">
                <i class="bar_icon fas fa-3x fa-user-friends rounded-circle"></i>
            </a>
        </div>

        <div class="nav-button-container">
            <a class="nav-button bg-second-dark-active rounded-l" href="{{route('teams-search-page')}}">
                <i class="bar_icon fas fa-3x fa-comments rounded-circle"></i>
            </a>
        </div>

        <div class="nav-button-container">
            <a class="nav-button bg-second-dark-active rounded-l" href="{{route('debug')}}">
                <i class="bar_icon fas fa-3x fa-hammer rounded-circle"></i>
            </a>
        </div>
        @if (Request::url() === 'http://fullstack/profile')
        <div class="nav-button-container">
            <a class="nav-button bg-second-dark-active rounded-l" href="{{route('logout')}}">
                <i class="bar_icon fas fa-3x fa-sign-out-alt rounded-circle"></i>
            </a>
        </div>
        @endif
    </div>
</div>
