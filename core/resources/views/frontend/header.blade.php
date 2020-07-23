<header class="header-section">
    <div class="header-area">
        <div class="logo">
            <a href="#0"><img src="{{asset($settings->img)}}" alt="logo"></a>
        </div>
        <ul class="menu">
            <li>
                <a href="{{route('index')}}">Home</a>

            </li>
            <li>
                <a href="{{route('speaker')}}">Speaker</a>

            </li>

            <li>
                <a href="{{route('Schedule')}}">Schedule</a>

            </li>
            <li>
                <a href="{{route('Blog')}}">Blog</a>

            </li>
            <li>
                <a href="{{route('Sponsor')}}">Sponsor</a>

            </li>
            <li>
                <a href="{{route('Contact')}}">Contact</a>
            </li>
            <li>
                <a href="{{route('Ticket')}}" class="header-button">buy ticket</a>
            </li>
        </ul>
        <div class="header-bar d-lg-none">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</header>
