@extends('layouts.app')
@section('content')

{{--    {{Auth::user()->name}}--}}
<div class="container" style="font-family: Kanit;">
    <div class="row">

        <!-- <div class="col" style="padding-top: 70px">
            <a href="findTeam.html"><i style="font-size: 20px; color: #000000; cursor: pointer;" class='fas'>&#xf060; ย้อนกลับ</i></a>
        </div> -->

        <div class="col">
            <div class="boxHeadPageRight">
                <h1 class="text-right">ข้อมูลโปรไฟล์</h1>
            </div>
        </div><!-- col 1 -->

    </div><!-- row -->


    <div class="row">
        <div class="col-3">
            <div class="boxImgProfile">
                <img src="image/profile_01.jpg" class="rounded-circle">
            </div>
        </div>

        <div class="col-9">
            <div class="boxDetailProfile">
                <h3>{{Auth::user()->name}}</h3>
            </div>
            <div class="boxDetailProfile02">
                <p>สิ่งที่เคยทำ :</p>
                <div class="row" style="margin-top: -10px;">
                    <div class="col-2">
                        <h5>- </h5><p style="display: inline; font-size: 18px;"> ทีม</p>
                    </div>
                    <div class="col-2">
                        <h5>- </h5><p style="display: inline; font-size: 18px;"> บทความ</p>
                    </div>
                    <div class="col-2">
                        <h5>- </h5><p style="display: inline; font-size: 18px;"> ผลงาน</p>
                    </div>
                </div><!-- row -->
            </div>

            <div class="boxDetailProfile02">
                <p>ความสามารถ :</p>
                <div class="boxPositionProfile">
{{--                    <a href="#"><button style="font-size: 13px; color: #fbb040; width: 79px; height: 30px; border-radius: 15px; box-shadow: 0 0 15px 0 rgba(0, 0, 0, 0.08); background-color: #ffffff; border: none; cursor: pointer;">ช่างภาพ</button></a>--}}
{{--                    <a href="#"><button style="font-size: 13px; color: #fbb040; width: 128px; height: 30px; border-radius: 15px; box-shadow: 0 0 15px 0 rgba(0, 0, 0, 0.08); background-color: #ffffff; border: none; cursor: pointer;">ช่างภาพเบื้องหลัง</button></a>--}}
{{--                    <a href="#"><button style="font-size: 13px; color: #fbb040; width: 92px; height: 30px; border-radius: 15px; box-shadow: 0 0 15px 0 rgba(0, 0, 0, 0.08); background-color: #ffffff; border: none; cursor: pointer;">ตัดต่อวิดีโอ</button></a>--}}
{{--                    <a href="#"><button style="font-size: 13px; color: #fbb040; width: 71px; height: 30px; border-radius: 15px; box-shadow: 0 0 15px 0 rgba(0, 0, 0, 0.08); background-color: #ffffff; border: none; cursor: pointer;">ผู้กำกับ</button></a>--}}
                </div>
            </div>

        </div><!-- col-9 -->

    </div><!-- row -->


    <div class="row">
        <div class="col-md-3">
            <div class="boxContactProfile text-center">
                <a href="#"><button>แก้ไขข้อมูลส่วนตัว</button></a>
                <p>{{Auth::user()->email}}</p>
            </div>
        </div>

        <div class="col-md-9">
            <div class="boxAboutProfile">
                <div class="boxDetailAboutProfile">
                    <h5>เกี่ยวกับฉัน</h5>
                    <p>&#9679; รางวัลรองชนะเลิศอันดับ 1 งานประกวดภาพยนตร์สั้น “Cat Radio” ประกาศผลหนังสั้น“GPX presents Cat Film 3 เอาเพลงมาทำเป็นหนัง” ปี 2019 </p>
                </div>
            </div>
        </div>

    </div><!-- row -->


    <div class="row">
        <div class="col-md-12">
            <div class="boxTabsMenu">
                <div class="tab">
                    <button class="tablinks" onclick="openCity(event, 'Tokyo')"><u>ผลงาน</u></button>
                    <button class="tablinks" onclick="openCity(event, 'London')">ทีมประกวด</button>
                    <button class="tablinks" onclick="openCity(event, 'Paris')">บทความ</button>
                    <button class="tablinks" onclick="openCity(event, 'test')">เคยโพสต์</button>
                    <button class="tablinks" onclick="openCity(event, 'testt')">เคยเข้าร่วม</button>
                    <button class="tablinks" onclick="openCity(event, 'team')">ทีม</button>
                    <hr>
                </div><!-- tab -->

                <div id="Tokyo" class="tabcontent">
                    <div class="row">
                        <div class="col-md-12">
                            <a href="#"><h6><i class="fas fa-pen"></i> แก้ไขผลงาน</h6></a>
                        </div>

{{--                        <div class="col-md-4" style="padding-bottom: 30px;">--}}
{{--                            <div class="boxVideoPort">--}}
{{--                                <div class="boxVideoBG"></div>--}}
{{--                                <a href="#"><h3>ทิ้งแต่เก็บ - The TOYS Ost.ภาพยนตร์ฮาวทูทิ้ง..ทิ้งอย่างไรไม่ให้เหลือเธอ [Official MV]</h3></a>--}}
{{--                                <hr>--}}
{{--                                <p><i class="fas fa-eye"></i> 4,000 view</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}



                    </div><!-- row -->

                </div><!-- Tab 01 -->


                <div id="London" class="tabcontent">
                    <div class="row">
                        <div class="col-12">
                            <h3>ทีมประกวด</h3>
                        </div>
{{--                        <div class="col-md-3" style="padding-top: 32.5px;">--}}

{{--                            <div class="col-md-12">--}}
{{--                                <div class="box-cardContestAll">--}}
{{--                                    <a href="#"><img src="image/contest_00.jpg" class="card-img-top" alt="..."></a>--}}
{{--                                    <div class="col-md-12">--}}
{{--                                        <div class="box-textDetailContest">--}}
{{--                                            <p>01 ตค. 62 - 31 ตค. 62</p>--}}
{{--                                            <a href="#"><h4 class="card-title">ประกวดคลิปหนังโฆษณา ภายใต้--}}
{{--                                                    แนวคิด “Game in real life”</h4></a>--}}
{{--                                            <h5 class="card-text">฿ 50,000 บาท</h5>--}}
{{--                                        </div><!-- box-textDetailContest -->--}}
{{--                                    </div><!-- col-md-12 -->--}}
{{--                                </div>--}}
{{--                            </div><!-- col-md-12 -->--}}
{{--                        </div><!-- col-3 -->--}}

{{--                        <div class="col-md-3" style="padding-top: 32.5px;">--}}
{{--                            <div class="col-md-12">--}}
{{--                                <div class="box-cardContestAll">--}}
{{--                                    <a href="#"><img src="image/contest_00.jpg" class="card-img-top" alt="..."></a>--}}
{{--                                    <div class="col-md-12">--}}
{{--                                        <div class="box-textDetailContest">--}}
{{--                                            <p>01 ตค. 62 - 31 ตค. 62</p>--}}
{{--                                            <a href="#"><h4 class="card-title">ประกวดคลิปหนังโฆษณา ภายใต้--}}
{{--                                                    แนวคิด “Game in real life”</h4></a>--}}
{{--                                            <h5 class="card-text">฿ 50,000 บาท</h5>--}}
{{--                                        </div><!-- box-textDetailContest -->--}}
{{--                                    </div><!-- col-md-12 -->--}}
{{--                                </div>--}}
{{--                            </div><!-- col-md-12 -->--}}
{{--                        </div><!-- col-3 -->--}}


                    </div><!-- row -->
                </div><!-- Tab 02 -->

                <div id="Paris" class="tabcontent">
                    <br>
                    <h3>บทความ</h3>
                    <p>- คุณไม่มีบทความ -</p>
                </div>

{{--                <div id="test" class="tabcontent">--}}
{{--                    <h3>ttt</h3>--}}
{{--                    <p>Tokyo is the capital of Japan.</p>--}}
{{--                </div>--}}

{{--                <div id="testt" class="tabcontent">--}}
{{--                    <h3>ttt</h3>--}}
{{--                    <p>Tokyo is the capital of Japan.</p>--}}
{{--                </div>--}}

                <div id="team" class="tabcontent">
                    <h3>ทีม</h3>
                    @foreach($post_teams as $post_team)
                                <div class="col-md-4 mb-4" style="float: left">
                                    <div class="box-imgCover">
                                        <img class="card-img-top" src="/uploads/covers_team/{{$post_team->img_head}}" alt="Card image cap" style="height: 200px;background-position: center;object-fit: cover;">
                                    </div>
                                    <div class="media position-relative">
                                        <img src="/upload/user/" class="rounded-circle" alt="...">
                                        <div class="media-body">
                                            <a href="#"><h5 class="mt-0">{{$post_team->name}}</h5></a>
                                            <div class="box-statusText">
                                                <p>Status: {{$post_team->status}}</p>
                                            </div>
                                            {{--                                        <div class="box-statusPosition">--}}
                                            {{--                                            <p>ต้องการ: 4 ตำแหน่ง</p>--}}
                                            {{--                                        </div>--}}
                                            <div class="box-buttonViewPage">
                                                <a href="/findTeam/detail/{{$post_team->id}}" class="stretched-link">รายละเอียด</a>
                                            </div>
                                        </div><!-- media-body -->
                                    </div><!-- media -->
                                </div><!-- col -->

                    @endforeach
                </div>
                <!-- </div> --><!-- row -->


            </div><!-- boxTabsMenu -->


        </div>
    </div><!-- row -->


{{--    <div class="boxBTNbackToTop">--}}
{{--        <button onclick="topFunction()" id="myBtn" title="Go to top" style="width: 40.2px; height: 40.2px; box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.16); background-color: #fbb040; color: #ffffff; border: none; border-radius: 50%; float: right; cursor: pointer;"><i class="fas fa-arrow-up"></i></button>--}}
{{--        <!-- <h6 style="float: right;">Back to Top</h6> -->--}}
{{--    </div>--}}




</div><!-- container -->


<script>
    // Tabs
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
    // Tabs
</script>

<script> // Back To Top
    //Get the button
    var mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }// Back To Top
</script>
@endsection
