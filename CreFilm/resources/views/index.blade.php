@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">

{{--    <image style="height:250px;width:100%;object-fit:cover;background-size: cover;background-position: center;" src="https://uppic.cc/d/5BXR"></image>--}}
{{--    align-content-center--}}

    <!-- slide -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
{{--            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>--}}
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div style="height: 300px;"><img class="d-block w-100" src="https://uppic.cc/d/5BXR" alt="First slide" style="background-position: center"></div>
                <div class="carousel-caption d-none d-md-block">
                    <h1>เรามีกว่า 200 ทีม</h1>
                    <h1 class="testH1img">ที่รอให้คุณมาร่วมสร้างสรรค์ผลงานกับเรา</h1>
                    <div class="box-buttonBannerHead">
                        <a class="btnCreatTeam" href="/createTeam"><button>สรา้งทีม</button></a>
                        <a class="btnFindTeam" href="/findTeam"><button>หาทีมกับเรา</button></a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div style="height: 300px;"><img class="d-block w-100" src="https://uppic.cc/d/5BXR" alt="First slide" style="background-position: center"></div>
            </div>

{{--            <div class="carousel-item">--}}
{{--                <div style="height: 300px;"><img class="d-block w-100" src="https://uppic.cc/d/5BXR" alt="First slide" style="background-position: center"></div>--}}
{{--            </div>--}}

        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div><!-- slide -->


    <div class="box-under-slide">
        <p class="text-center">สังคมสำหรับผู้ที่รักการทำโปรดักชั่น และสายงานวิดีโอทุกประเภท</p>
    </div><!-- box-under-slide -->


    <div class="container">
        <div class="row">

            <div class="col">
                <div class="box-headTopic">
                    <p class="text-left">คุณกำลังมองหา</p>
                </div>
            </div><!-- col-sm 1 -->

        </div><!-- row -->



        <div class="row">
            <div class="col">
                <div class="card bg-dark text-white" style="width: 250px; height: 290px; border-radius: 15px; border: none;">

                    <div class="box-imgPosition">
                        <img class="align-self-start mr-3" src="image/BgCamera_01.jpg" alt="Generic placeholder image">
                    </div>
                    <div class="card-img-overlay">
                        <div class="box-detailInCard">
                            <p class="text-center">ต้องการ</p>
                            <img class="align-self-start mr-3" src="image/Icon_camera.png" alt="Generic placeholder image">
                        </div>
                        <h5 class="text-center">ช่างภาพ</h5>
                        <p class="text-center" style="font-size: 35px; margin-top: -13px; font-weight: bold;"><b>112 คน</b></p>
                    </div>
                </div><!-- card -->
            </div><!-- col 1 -->

            <div class="col">
                <div class="card bg-dark text-white" style="width: 250px; height: 290px; border-radius: 15px; border: none;">

                    <div class="box-imgPosition">
                        <img class="align-self-start mr-3" src="image/BgEditor_02.jpg" alt="Generic placeholder image">
                    </div>
                    <div class="card-img-overlay">
                        <div class="box-detailInCard">
                            <p class="text-center">ต้องการ</p>
                            <img class="align-self-start mr-3" src="image/Icon_editor.png" alt="Generic placeholder image">
                        </div>
                        <h5 class="text-center">ตัดต่อวิดีโอ</h5>
                        <p class="text-center" style="font-size: 35px; margin-top: -13px; font-weight: bold;"><b>98 คน</b></p>
                    </div>
                </div><!-- card -->
            </div><!-- col 1 -->

            <div class="col">
                <div class="card bg-dark text-white" style="width: 250px; height: 290px; border-radius: 15px; border: none;">
                    <div class="box-imgPosition">
                        <img class="align-self-start mr-3" src="image/BgScreenWriter_03.jpg" alt="Generic placeholder image">
                    </div>
                    <div class="card-img-overlay">
                        <div class="box-detailInCard">
                            <p class="text-center">ต้องการ</p>
                            <img class="align-self-start mr-3" src="image/Icon_screenwriter.png" alt="Generic placeholder image">
                        </div>
                        <h5 class="text-center">เขียนบท</h5>
                        <p class="text-center" style="font-size: 35px; margin-top: -13px; font-weight: bold;"><b>73 คน</b></p>
                    </div>
                </div><!-- card -->
            </div><!-- col 1 -->
            <div class="col">
                <div class="card bg-dark text-white" style="width: 250px; height: 290px; border-radius: 15px; border: none;">
                    <div class="box-imgPosition">
                        <img class="align-self-start mr-3" src="image/BgDirector_04.jpg" alt="Generic placeholder image">
                    </div>
                    <div class="card-img-overlay">
                        <div class="box-detailInCard">
                            <p class="text-center">ต้องการ</p>
                            <img class="align-self-start mr-3" src="image/Icon_director.png" alt="Generic placeholder image">
                        </div>
                        <h5 class="text-center">ผู้กำกับ</h5>
                        <p class="text-center" style="font-size: 35px; margin-top: -13px; font-weight: bold;"><b>61 คน</b></p>
                    </div>
                </div><!-- card -->
            </div><!-- col 1 -->

        </div><!-- row -->

        <div class="row">

            <div class="col">
                <p style="color: #000000; font-family: Kanit; font-size: 25px; font-weight: bold; padding: 50px 0 20px 0;" class="text-left">หาทีม</p>
            </div><!-- col-sm 1 -->

        </div><!-- row -->

        <div class="row">

            <div class="col">
                <div class="box-imgCover">
                    <img class="card-img-top" src="image/cover_team_01.jpg" alt="Card image cap">
                </div>
                <div class="media position-relative">
                    <img src="image/profile_01.jpg" class="rounded-circle" alt="...">
                    <div class="media-body">
                        <a href="#"><h5 class="mt-0">มาทำคลิปหนังโฆษณา
                                ภายใต้แนวคิด “Game in...</h5></a>
                        <div class="box-statusText">
                            <p>Status: ด่วน</p>
                        </div>
                        <div class="box-statusPosition">
                            <p>ต้องการ: 4 ตำแหน่ง</p>
                        </div>
                        <div class="box-buttonViewPage">
                            <a href="#" class="stretched-link">รายละเอียด</a>
                        </div>
                    </div><!-- media-body -->
                </div><!-- media -->
            </div><!-- col -->


            <div class="col">
                <div class="box-imgCover">
                    <img class="card-img-top" src="image/cover_team_02.jpg" alt="Card image cap" style="border-radius: 15px 15px 0 0;">
                </div><!-- box-imgCover -->
                <div class="media position-relative">
                    <img src="image/profile_02.jpg" class="rounded-circle" alt="...">
                    <div class="media-body">
                        <a href="#"><h5 class="mt-0">งานถ่าย MV เพลงใหม่ค่าย
                                White music</h5></a>
                        <div class="box-statusText2">
                            <p>Status: ไม่เก่งก็เข้าร่วมได้</p>
                        </div>
                        <div class="box-textStatus2" >
                            <p>ต้องการ: 8 ตำแหน่ง</p>
                        </div>
                        <div class="box-buttonViewPage">
                            <a href="#" class="stretched-link">รายละเอียด</a>
                        </div>
                    </div><!-- media-body -->
                </div><!-- media -->
            </div><!-- col -->


            <div class="col">
                <div class="box-imgCover">
                    <img class="card-img-top" src="image/cover_team_03.jpg" alt="Card image cap">
                </div>
                <div class="media position-relative">
                    <img src="image/profile_03.jpg" class="rounded-circle" alt="...">
                    <div class="media-body">
                        <a href="#"><h5 class="mt-0">งานหนังสั้นนักศึกษา ม.กรุงเทพ</h5></a>
                        <div class="box-statusText2">
                            <p>Status: ด่วนมาก</p>
                        </div>
                        <div class="box-textStatus2" >
                            <p>ต้องการ: 5 ตำแหน่ง</p>
                        </div>
                        <div class="box-buttonViewPage">
                            <a href="#" class="stretched-link">รายละเอียด</a>
                        </div>
                    </div>
                </div>
            </div><!-- col -->

        </div><!-- row -->


        <div class="row">
            <div class="col-12" style="padding: 30px 0 0 475px;">
                <div class="box-buttonViewAll">
                    <a href="findTeam.html"><button type="button" class="btn btn-outline-warning">ดูทีมเพิ่มเติม</button></a>
                </div>
            </div>
        </div><!-- row -->


        <div class="row">

            <div class="col">
                <p style="color: #000000; font-family: Kanit; font-size: 25px; font-weight: bold; padding: 50px 0 20px 0;" class="text-left">งานประกวดล่าสุด</p>
            </div><!-- col-sm 1 -->

        </div><!-- row -->


        <div class="row">

            <div class="col-6">
                <div class="mediaa position-relative">
                    <img src="image/contest_00.jpg" class="mr-3" alt="...">
                    <div class="box-detailCardContest">
                        <div class="media-bodyy">
                            <a href="#"><h5 class="mt-0">ประกวดคลิปหนังโฆษณา<br>
                                    ภายใต้แนวคิด<br>
                                    “Game in real life”</h5></a>
                            <div class="box-buttonHeadContest">
                                <a href="#" class="stretched-link"><button>รายละเอียด</button></a>
                            </div><!-- box-buttonHeadContest -->
                        </div>
                    </div><!-- box-detailCardContest -->
                </div><!-- mediaa -->
            </div><!-- col -->

            <div class="col-3" style="padding: 0 0 0 60px;">
                <div class="box-cardContest">
                    <img class="card-img-top" src="image/contest_01.jpg" alt="">
                    <div class="card-body">
                        <a href="#"><h5 class="card-title">ประกวดคลิปวิดีโอ “คนรุ่น
                                ใหม่ไร้ Food Waste ปีที่2”...</h5></a>
                        <div class="box-btnDetail text-center"><a href="#" class="btn btn-primary">รายละเอียด</a></div>
                    </div>
                </div><!-- box-cardContest -->
            </div><!-- col -->

            <div class="col-3" style="padding: 0 0 0 40px;">
                <div class="box-cardContest">
                    <img class="card-img-top" src="image/contest_02.jpg" alt="">
                    <div class="card-body">
                        <a href="#"><h5 class="card-title">ประกวด KRUNGSRI IMAX
                                Video Contest 2019</h5></a>
                        <div class="box-btnDetail text-center"><a href="#" class="btn btn-primary">รายละเอียด</a></div>

                    </div>
                </div>
            </div><!-- col -->

        </div><!-- row -->


        <div class="row">
            <div class="col-12" style="padding: 30px 0 0 475px;">
                <div class="box-buttonViewAll">
                    <a href="contest.html"><button type="button" class="btn btn-outline-warning">ดูงานประกวด</button></a>
                </div>
            </div>
        </div><!-- row -->


        <div class="row">

            <div class="col">
                <p style="color: #000000; font-family: Kanit; font-size: 25px; font-weight: bold; padding: 29px 0 20.5px 0;" class="text-left">บทความ</p>
            </div><!-- col-sm 1 -->

        </div><!-- row -->


        <div class="row">

            <div class="col-6">

                <div class="box-cardArticle bg-dark text-white">
                    <a href="#">
                        <img class="card-img" src="image/Article_01.jpg" alt="ต้องการ">
                        <div class="card-img-overlay">
                            <h5 class="text-right">7 พื้นฐาน<br>
                                สร้างวิดีโอคอนเทนต์ สำหรับมือใหม่<br>
                                ที่อยากทำVlog, Video Review</h5>
                        </div>
                    </a>
                </div><!-- card -->

            </div><!-- col 1 -->

            <div class="col-6">

                <div class="box-cardArticleSmall bg-dark text-white">
                    <a href="#">
                        <img class="card-img" src="image/Article_02.jpg" alt="ต้องการ">
                        <div class="card-img-overlay">
                            <h5 class="text-right">เทคนิคง่ายๆ จัดแสงในห้องในด้วยงบที่จำกัด</h5>
                        </div>
                    </a>
                </div><!-- card -->

                <div class="box-articleRight" style="padding-top: 18px;">
                    <div class="box-cardArticleSmallDown bg-dark text-white">
                        <a href="#">
                            <img class="card-img" src="image/Article_03.jpg" alt="ต้องการ">
                            <div class="card-img-overlay">
                                <h5 class="text-right">5 เทคนิคเปลี่ยนหนังบ้านๆ ให้เป็นหนังมือโปร</h5>
                            </div>
                        </a>
                    </div><!-- card -->
                </div><!-- box-articleRight -->

            </div><!-- col 1 -->

        </div><!-- row -->


        <div class="row">
            <div class="col-12" style="padding: 30px 0 50px 475px;">
                <div class="box-buttonViewAll">
                    <a href="contest.html"><button type="button" class="btn btn-outline-warning">บทความทั้งหมด</button></a>
                </div>
            </div>
        </div><!-- row -->


    </div><!-- container -->


@endsection
