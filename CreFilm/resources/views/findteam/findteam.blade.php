@extends('layouts.app')
@section('content')

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav" style="font-family: Kanit; padding-right: 153px;">
            <li class="nav-item" style="padding: 0 32px 0 30px;">
                <a class="nav-link" href="index.html">หน้าหลัก</a>
            </li>
            <li class="nav-item active" style="padding-right: 32px;">
                <a class="nav-link" href="#">หาทีม <span class="sr-only">(current)</span></a>
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

        <div class="box-buttonRegister" style="padding-right: 18px;">
            <a href="#"><button style="width: 126px; height: 45px; border-radius: 23px; background-color: #fbb040; color: #ffffff;" type="button" class="btn btn-outline-warning">สมัครสมาชิก</button></a>
        </div>
        <a href="#"><button style="width: 126px; height: 45px; border-radius: 23px; font-color: #ffffff; border: solid 2px #fbb040;" type="button" class="btn btn-outline-warning">เข้าสู่ระบบ</button></a>
    </div>
    </nav>


    <div class="container" style="font-family: Kanit;">
        <div class="row">

            <div class="col-6">
                <div class="box-headPage">
                    <p class="text-left">หาทีม</p>
                </div>
            </div><!-- col 1 -->

            <div class="col-6">
                <div class="box-buttonCreatTeam">
                    <a href="/createTeam"><button class="buttonCreatTeam" type="button">สร้างทีม</button></a>
                </div>
            </div><!-- col -->

        </div><!-- row -->

        <div class="row">
            <div class="col-8">

                <div class="col-md-12">

                    @if(!empty($post_teams))
                        @foreach($post_teams as $post_team)

                            <div class="box-teammer">
                                <div class="card" style="border: none;">
                                    <div class="box-imgCoverTeamBig">
                                        <div class="box-joinNum">
                                            <div class="box-textUpImg01">
                                                <p class="text-center">ผู้ขอเข้าร่วม</p>
                                            </div>
                                            <div class="box-textUpImg02">
                                                <p class="text-center">8</p>
                                            </div>
                                            <div class="box-textUpImg03">
                                                <p class="text-center">/4</p>
                                            </div>
                                        </div><!-- box-joinNum -->
                                        <div class="box-headTeamName">
                                            <a href="#"><h3>&#9679; {{$post_teams->name}}</h2></a>
                                        </div><!-- box-headTeamName -->
                                        <img class="card-img-top" src="image/coverbig_team_01.jpg" alt="Card image cap">
                                    </div><!-- box-imgCover -->
                                    <div class="card-body" style="width: 100%; height: 110px; box-shadow: 0 -0.5px 10px 0 rgba(96, 96, 96, 0.16); border-radius: 15px; margin-top: -100px; background-color: #ffffff; ">
                                        <a href="#"><img src="image/profile_01.jpg" alt="..." class="rounded-circle" style="width: 60px; height: 60px; margin-top: -40px; border: 4px solid #ffffff;"></a>
                                        <div class="box-team">
                                            <div class="mediaCardTeam-body">
                                                <a href="#"><h5 class="mt-0">user_id</h5></a>
                                                <div class="row">
                                                <p style="color: #939393; font-size: 14px; font-weight: lighter; padding-left: 15px;">สถานะ: <code style="color: #39b54a; font-family: Kanit; font-size: 14px;">{{$post_teams->status}}</code></p>
                                                    <p class="offset-md-4" style="color: #939393; font-size: 14px; font-weight: lighter; "></p>
                                                </div><!-- row -->
                                            </div><!-- media-body -->

                                            <div class="box-tag-position">
                                                <button type="button" class="btn text-center">position</button>
                                                <div class="box-btnViewDetailTeam">
                                                    <a href="#" class="btn btn-primary">รายละเอียด</a>
                                                </div>
                                            </div><!-- box-tag-position -->
                                        </div><!-- box-team -->
                                    </div><!-- card-body -->

                                </div><!-- card -->
                            </div><!-- box-teammer -->

                            <div class="col-md-3 offset-md-4 boxNextPageView">
                                    <nav aria-label="...">
                                        <ul class="pagination">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="/findTeam" tabindex="-1" style="color: #000000;">Previous</a>
                                            </li>
                
                                            <li class="page-item active" style="background-color: #fbb040;"><a class="page-link" href="/findTeam" style="color: #ffffff; background-color: #fbb040; border: none;">1</a></li>
                
                                            <li class="page-item">
                                                <a class="page-link" href="/findTeamSecond" style="color: #939393;">2 <span class="sr-only" style="color: #939393;">(current)</span></a>
                                            </li>
                
                                            <li class="page-item" style="color: #939393;"><a class="page-link" href="/findTeamThird" style="color: #939393;">3</a></li>
                
                                            <li class="page-item">
                                                <a class="page-link" href="#" style="color: #000000;">Next</a>
                                            </li>
                                        </ul>
                                    </nav>
                
                                </div><!-- col-md-3 offset-md-5 -->

                        @endforeach

                    @else
                        <div class="text-center">
                            <p> No Team</p>
                        </div>
                        <div class="text-center">
                            <p style="color: #d0d0d0"> - โปรดสร้างทีมของคุณ -</p>
                        </div>
                    @endif

                </div><!-- col-md-12 -->


                

            </div><!-- col -->

            <div class="col-4">
                <div class="col-md-10 boxListCheckPosition">
                    <form role="form" action="{{action('FindteamController@show')}}" method="post">
                        {{csrf_field()}}
                        <div class="card bg-white text-white" style="width: 280px; padding-bottom: 20px; border-radius: 15px; border: 2px solid #fbb040; box-shadow: 0 0 10px 0 rgba(96, 96, 96, 0.16);">

                            <div class="card-img-overlayy">
                                <h4 class="text-center" style="font-size: 18px; font-weight: bold; padding-top: 10px; color: #000000;">ตัวกรอง</h4>
                                <!-- <br> = เว้นบรรทัด -->
                                <!-- line -->
                                <hr style="border: solid 0.5px #fbb040; width: 90%">
                                <h5 class="text-left" style="font-size: 16px; color: #000000; font-weight: bold; padding-left: 20px;">เลือกตำแหน่งจากที่สนใจ</h5>
                            </div>


                            <div class="box-checkboxx">
                                <form action="/search" method="get">
                                @foreach ($positions as $row)

                                    <div class="box-checkListPosition">
                                        <label class="fillterCheck" style="font-size: 15px;">{{$row->position_name}}
                                            <input type="checkbox" multiple value="{{$row->id}}" name="search[]">
                                            <span class="checkmark" style="width: 20px; height: 20px; text-align: center;"></span>
                                        </label>
                                    </div>


                                @endforeach
                                <button type="submit" >search</button>
                            </form>
                            </div><!-- box-checkboxx -->


                            <div class="box-moneylow" style="width:250px;">
                                <h5 class="text-left">เลือกรายได้ขั้นต่ำ</h5>
                                <select class="custom-select" style="border-radius: 18px;background-color: #f4f4f4;color: #d0d0d0;border: none;">
                                    <option selected>Choose...</option>
                                    <option value="300">300</option>
                                    <option value="400">400</option>
                                    <option value="500">500</option>
                                    <option value="600">600</option>
                                    <option value="700">700</option>
                                    <option value="800">800</option>
                                    <option value="900">900</option>
                                    <option value="1,000">1,000</option>
                                    <option value="2,000">2,000</option>
                                    <option value="3,000">3,000</option>
                                    <option value="4,000">4,000</option>
                                    <option value="5,000">5,000</option>
                                    <option value="10,000">10,000</option>
                                    <option value="15,000">15,000</option>
                                    <option value="20,000">20,000</option>
                                    <option value="25,000">25,000</option>
                                    <option value="30,000">30,000</option>
                                </select>
                            </div>

                            <div class="box-moneylow" style="width:250px;">
                                <h5 class="text-left">เลือกรายได้สูงสุด</h5>
                                <select class="custom-select" style="border-radius: 18px;background-color: #f4f4f4;color: #d0d0d0;border: none;">
                                    <option selected>Choose...</option>
                                    <option value="300">300</option>
                                    <option value="400">400</option>
                                    <option value="500">500</option>
                                    <option value="600">600</option>
                                    <option value="700">700</option>
                                    <option value="800">800</option>
                                    <option value="900">900</option>
                                    <option value="1,000">1,000</option>
                                    <option value="2,000">2,000</option>
                                    <option value="3,000">3,000</option>
                                    <option value="4,000">4,000</option>
                                    <option value="5,000">5,000</option>
                                    <option value="10,000">10,000</option>
                                    <option value="15,000">15,000</option>
                                    <option value="20,000">20,000</option>
                                    <option value="25,000">25,000</option>
                                    <option value="30,000">30,000</option>
                                </select>

                                <div class="box-selectposition">
                                    <input class="btn btn-primary" type="submit" value="กรอง">
                                </div><!-- box-selectposition -->


                            </div>





                        </div><!-- card -->
                    </form>
                </div><!-- col-md-10 -->
            </div><!-- col-4 -->

        </div><!-- row -->


    </div><!-- container -->

@endsection
