{{--<style>--}}
{{--    .btn-main {--}}
{{--        width: 126px;--}}
{{--        height: 40px;--}}
{{--        border-radius: 20px;--}}
{{--        border: solid 1px #fbb040;--}}
{{--        color: black;--}}
{{--    }--}}
{{--    .btn-main:hover {--}}
{{--        background-color: #fbb040;--}}
{{--        color: white;--}}
{{--    }--}}
{{--    .nav-ds:hover{--}}
{{--        color: #fbb040 !important;--}}
{{--    }--}}

{{--</style>--}}
{{--<div class="bg-light" style="font-family:Kanit,serif !important">--}}
{{--    <!-- Fixed navbar -->--}}
{{--    <div class="container bg-light">--}}
{{--        <nav class="navbar navbar-expand-lg navbar-light bg-light">--}}
{{--            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--                <span class="navbar-toggler-icon"></span>--}}
{{--            </button>--}}
{{--            <a class="navbar-brand" href="/" style="font-size: 28px"><img src="https://uppic.cc/d/5Coh" style="width: 55px;height: 55px;"></a>--}}

{{--            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">--}}


{{--                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link nav-ds" href="/" style="color: #aaa">หน้าหลัก</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link nav-ds" href="/teamwork" style="color: #aaa">หาทีม</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link nav-ds" href="/findwork" style="color: #aaa">ตามหางาน</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link nav-ds" href="#" style="color: #aaa">งานประกวด</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link nav-ds" href="#" style="color: #aaa">บทความ</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link nav-ds" href="#" style="color: #aaa">ติดต่อเรา</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}

{{--                <ul class="nav navbar-nav navbar-right">--}}
{{--                    <!-- Authentication Links -->--}}
{{--                    @if (Auth::guest())--}}
{{--    --}}{{--                    <button><li class="mr-3"><a href="{{ route('login') }}">Login</a></li></button>--}}
{{--    --}}{{--                    <li class="mr-3"><a href="{{ route('register') }}">Register</a></li>--}}
{{--                        <button class="btn-main" style="margin-right: 15px;" "><a href="{{ route('login') }}" style="text-decoration: none;color: black">Login</a></button>--}}
{{--                        <button class="btn-main"><a href="{{ route('register') }}" style="text-decoration: none;color: black">Register</a></button>--}}

{{--                    @else--}}
{{--                        <li class="dropdown" style="margin-right: 20px;">--}}
{{--                           <span>User: </span> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="text-decoration: none;color: #fbb040">--}}
{{--                                {{ Auth::user()->name }} <span class="caret" ></span>--}}
{{--                            </a>--}}


{{--                            <ul class="dropdown-menu" role="menu" style="padding: 10px;">--}}
{{--                                <li style="text-decoration: none;">--}}
{{--                                    <a href="{{ route('logout') }}"--}}
{{--                                       style="text-decoration: none;color: black"--}}
{{--                                       onclick="event.preventDefault();--}}
{{--                                        document.getElementById('logout-form').submit();">--}}
{{--                                        Logout--}}
{{--                                    </a>--}}

{{--                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--                                        {{ csrf_field() }}--}}
{{--                                    </form>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                    @endif--}}
{{--                </ul>--}}
{{--    --}}{{--            <form class="form-inline my-2 my-lg-0">--}}
{{--    --}}{{--                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">--}}
{{--    --}}{{--                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>--}}
{{--    --}}{{--            </form>--}}
{{--            </div>--}}

{{--        </nav>--}}
{{--    </div>--}}

{{--</div>--}}


<nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding: 20px 0 20px 0;">
    <a class="navbar-brand" href="/"><img src="https://uppic.cc/d/5Coh"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- navbar -->
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item" style="padding: 0 32px 0 30px;">
                <a class="nav-link" href="/">หน้าหลัก</a>
            </li>
            <li class="nav-item" style="padding-right: 32px;">
                <a class="nav-link" href="/findTeam">หาทีม</a>
            </li>
            <li class="nav-item" style="padding-right: 32px;">
                <a class="nav-link" href="#">รวมคนทำงาน</a>
            </li>
            <li class="nav-item" style="padding-right: 32px;">
                <a class="nav-link disabled" href="contest.html">งานประกวด</a>
            </li>
            <li class="nav-item" style="padding-right: 32px;">
                <a class="nav-link disabled" href="#">บทความ</a>
            </li>
            <li class="nav-item" style="padding-right: 32px;">
                <a class="nav-link disabled" href="#">ติดต่อเรา</a>
            </li>
        </ul>

        <div class="box-buttonRegister" style="padding-right: 18px; font-family: Kanit;">
            <a href="#"><button style="width: 126px; height: 45px; border-radius: 23px; background-color: #fbb040; color: #ffffff;" type="button" class="btn btn-outline-warning">สมัครสมาชิก</button></a>
        </div>
        <a href="#"><button style="width: 126px; height: 45px; border-radius: 23px; font-color: #ffffff; border: solid 2px #fbb040; font-family: Kanit;" type="button" class="btn btn-outline-warning">เข้าสู่ระบบ</button></a>
    </div>
</nav>
