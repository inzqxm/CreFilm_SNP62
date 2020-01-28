<nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding: 20px 0 20px 0;">
    <a class="navbar-brand" href="/"><img src="https://uppic.cc/d/5Coh"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- navbar -->
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav col-10">
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



        <ul class="nav navbar-nav navbar-right col-2">

            <!-- Authentication Links -->
            @if (Auth::guest())
                <div class="box-buttonRegister" style="padding-right: 18px; font-family: Kanit;">
                    <a href="{{ route('register') }}"><button style="width: 126px; height: 45px; border-radius: 23px; background-color: #fbb040; color: #ffffff;" type="button" class="btn btn-outline-warning">สมัครสมาชิก</button></a>
                </div>

                <a href="{{ route('login') }}"><button style="width: 126px; height: 45px; border-radius: 23px; font-color: #ffffff; border: solid 2px #fbb040; font-family: Kanit;" type="button" class="btn btn-outline-warning">เข้าสู่ระบบ</button></a>
            @else
                <li class="dropdown" style="margin-right: 20px;">
                    <span>User:</span> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"> </span>
                    </a>


                    <ul class="dropdown-menu" role="menu">
                        <li>
                            @if( Auth::user()->name == 'admin')
                                <a href="/create" style="margin-right: 10px;color: #888888">Create</a>
                                <br>
                            @endif
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"
                                style="text-align: right">
                                ออกจากระบบ
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            @endif
        </ul>
    </div>
</nav>
