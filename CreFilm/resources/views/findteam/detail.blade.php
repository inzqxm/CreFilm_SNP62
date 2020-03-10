@extends('layouts.app')
@section('content')





    <div class="container" style="font-family: Kanit;">
		<div class="row">

            <div class="col-md-2 col-6 textBTNBackPage" style="margin-top:80px;">
                <a href="/findteam" style="color:#aaa;"><i class='fas'>&#xf060; ย้อนกลับ</i></a>
            </div>

            <div class="col">
                <div class="boxHeadPageRight">
                    <h1 class="text-right">รายละเอียดทีม</h1>
                </div>
            </div><!-- col 1 -->

        </div><!-- row -->


        <div class="row">
            <div class="col-md-3 col-sm-12">
                <div class="boxProfileLeft">
                    <div class="boxImgDetailProfile text-center">
                        <a href="/profile/{id}">
                            <img src="/uploads/image/profile_01.jpg" alt="..." class="rounded-circle">
                        </a>
                    <h4>{{$post_team->user_name}}</h4>
                        {{-- <p>ความสามารถ :</p>
                        <div class="boxPositionForProfile">
                            <!-- <img src="image/Icon_profile.png"> -->
                            <a href="#"><button>ช่างภาพ</button></a>
                            <a href="#"><button>อีก 3</button></a>
                        </div> --}}
                        <div class="boxBtnViewProfile">
                            {{-- <a href="/profile/{id}"> --}}
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">ดูโปรไฟล์</button>
                            {{-- </a> --}}
                        </div>

                        <!-- Button to Open the Modal -->


                          <!-- The Modal -->
                          <div class="modal fade" id="myModal">
                            <div class="modal-dialog modal-lg" >
                              <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                  <h4 class="modal-title">Profile</h4>
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                  <div class="row">
                                        <div class="col-md-3">
                                            <div class="boxImgProfilePopup">
                                                <img src="/uploads/image/profile_01.jpg" class="rounded-circle ">
                                            </div>

                                        </div>

                                        <div class="col-9">
                                            <div class="boxDetailProfilePopup text-left">
                                                <h3>{{$post_team->user_name}}</h3>
                                            </div>
                                            <div class="boxDetailProfile02Popup text-left">
                                                <p style="font-size: 14px; color: #9a9a9a;">สิ่งที่เคยทำ :</p>
                                                <div class="row" style="margin-top: -10px;">
                                                    <div class="col-3">
                                                        <h5 style="font-size: 20px; color: #fbb040; display: inline;">2 </h5><p style="display: inline; font-size: 18px; color: #000000;"> ทีม</p>
                                                    </div>
                                                    <div class="col-3">
                                                        <h5 style="font-size: 20px; color: #fbb040; display: inline;">3 </h5><p style="display: inline; font-size: 18px; color: #000000;"> บทความ</p>
                                                    </div>
                                                    <div class="col-3">
                                                        <h5 style="font-size: 20px; color: #fbb040; display: inline;">6 </h5><p style="display: inline; font-size: 18px; color: #000000;"> ผลงาน</p>
                                                    </div>
                                                </div><!-- row -->
                                            </div>

                                            <div class="boxDetailProfile02Popup text-left">
                                                <p>ความสามารถ :</p>
                                                <div class="boxPositionProfilePopup text-left">
                                                    <a href="#"><button style="width: 79px;">ช่างภาพ</button></a>
                                                    <a href="#"><button style="width: 128px;">ช่างภาพเบื้องหลัง</button></a>
                                                    <a href="#"><button style="width: 92px;">ตัดต่อวิดีโอ</button></a>
                                                    <a href="#"><button style="width: 71px;">ผู้กำกับ</button></a>
                                                </div>
                                            </div>

                                        </div><!-- col-9 -->

                                    </div><!-- row -->

                                    <div class="row">
                                            <div class="col-md-3">
                                                <div class="boxContactProfilePopup text-center">
                                                    <a href="profileUser.html"><button><i class="fas fa-user"></i> ข้อมูลติดต่อหลัก</button></a>
                                                </div>
                                            </div>

                                            <div class="col-md-9">
                                                <div class="boxAboutProfilePopup text-left">
                                                    <div class="boxDetailAboutProfilePopup text-left" style="    padding: 10px 25px 10px 15px;">
                                                        <h5 style="font-size: 14px; color: #939393;">เกี่ยวกับฉัน</h5>
                                                        <!-- <br> -->
                                                        <p style="font-size: 14px; color: #000000;">&#9679; รางวัลรองชนะเลิศอันดับ 1 งานประกวดภาพยนตร์สั้น “Cat Radio” ประกาศผลหนังสั้น“GPX presents Cat Film 3 เอาเพลงมาทำเป็นหนัง” ปี 2019 </p>
                                                    </div>
                                                </div>
                                            </div>

                                    </div><!-- row -->

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="boxTabsMenuPopup">
                                                <div class="tab">
                                                    <button class="tablinks" onclick="openCity(event, 'Portfolio')"><u>ผลงาน</u></button>
                                                    <button class="tablinks" onclick="openCity(event, 'PostTeam')">เคยโพสต์</button>
                                                    <button class="tablinks" onclick="openCity(event, 'JoinTeam')">เคยเข้าร่วม</button>
                                                    <button class="tablinks" onclick="openCity(event, 'ContestPort')">ทีมประกวด</button>
                                                    <button class="tablinks" onclick="openCity(event, 'ArticlePort')">บทความ</button>
                                                    <hr>
                                                </div><!-- tab -->

                                                        <div id="Portfolio" class="tabcontent">
                                                            <div class="row">
                                                                <div class="col-md-4 col-12" style="padding-bottom: 30px;">
                                                                    <div class="boxVideoPortPopup">
                                                                        <div class="boxVideoBGPopup">
                                                                            <div class="embed-responsive embed-responsive-16by9">
                                                                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/euTBs82tP3k" allowfullscreen></iframe>
                                                                            </div>
                                                                        </div>
                                                                        <a href="#"><h3 style="font-size: 12px; color: #000000;">ทิ้งแต่เก็บ - The TOYS Ost.ภาพยนตร์ฮาวทูทิ้ง..ทิ้งอย่างไรไม่ให้เหลือเธอ [Official MV]</h3></a>
                                                                        <hr>
                                                                        <p style="float: left;"><i class="fas fa-eye"></i> 4,000 view</p>
                                                                        <a href="#"><button style="width: 68px; height: 24px; border-radius: 12px; background-color: #f5f5f5; font-size: 13px; color: #939393; border: none;">ช่างภาพ</button></a>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-4" style="padding-bottom: 30px;">
                                                                    <div class="boxVideoPortPopup">
                                                                        <div class="boxVideoBGPopup">
                                                                            <div class="embed-responsive embed-responsive-16by9">
                                                                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/rDm-kB8xmbE" allowfullscreen></iframe>
                                                                            </div>
                                                                        </div>
                                                                        <a href="#"><h3 style="font-size: 12px; color: #000000;">หนังสั้นประกอบเพลง “สบายดีหรือ” - NUM KALA「Short Film」</h3></a>
                                                                        <hr>
                                                                        <p style="float: left;"><i class="fas fa-eye"></i> 2,200 view</p>
                                                                        <a href="#"><button style="width: 64px; height: 24px; border-radius: 12px; background-color: #f5f5f5; font-size: 13px; color: #939393; border: none;">ผู้กำกับ</button></a>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-4" style="padding-bottom: 30px;">
                                                                    <div class="boxVideoPortPopup">
                                                                        <div class="boxVideoBGPopup">
                                                                            <div class="embed-responsive embed-responsive-16by9">
                                                                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/wrbzAsqinlo" allowfullscreen></iframe>
                                                                            </div>
                                                                        </div>
                                                                        <a href="#"><h3 style="font-size: 12px; color: #000000;">หนังสั้นประกอบเพลง “ ยังคง ” - POTATO「Short Film」</h3></a>
                                                                        <hr>
                                                                        <p style="float: left;"><i class="fas fa-eye"></i> 3,000 view</p>
                                                                        <a href="#"><button style="width: 64px; height: 24px; border-radius: 12px; background-color: #f5f5f5; font-size: 13px; color: #939393; border: none;">ผู้กำกับ</button></a>
                                                                    </div>
                                                                </div>


                                                                <div class="col-md-4" style="padding-bottom: 30px;">
                                                                    <div class="boxVideoPortPopup">
                                                                        <div class="boxVideoBGPopup">
                                                                            <video width="100%" height="198" controls>
                                                                                <source src="video/Future_is_Now30.mp4" type="video/mp4">
                                                                            </video>
                                                                        </div>
                                                                        <a href="#"><h3 style="font-size: 12px; color: #000000;">Future is Now : คู่มือจีบสาวของผู้ชายวัย 30+</h3></a>
                                                                        <hr>
                                                                        <p style="float: left;"><i class="fas fa-eye"></i> 3,300 view</p>
                                                                        <a href="#"><button style="width: 68px; height: 24px; border-radius: 12px; background-color: #f5f5f5; font-size: 13px; color: #939393; border: none;">ช่างภาพ</button></a>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-4" style="padding-bottom: 30px;">
                                                                    <div class="boxVideoPortPopup">
                                                                        <div class="boxVideoBGPopup">
                                                                            <div class="embed-responsive embed-responsive-16by9">
                                                                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/uNxPcuGcVZU" allowfullscreen></iframe>
                                                                            </div>
                                                                        </div>
                                                                        <a href="#"><h3 style="font-size: 12px; color: #000000;">Move On - eBay Thailand</h3></a>
                                                                        <hr>
                                                                        <p style="float: left;"><i class="fas fa-eye"></i> 1,100 view</p>
                                                                        <a href="#"><button style="width: 116px; height: 24px; border-radius: 12px; background-color: #f5f5f5; font-size: 13px; color: #939393; border: none;">ช่างภาพเบื้องหลัง</button></a>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-4" style="padding-bottom: 30px;">
                                                                    <div class="boxVideoPortPopup">
                                                                        <div class="boxVideoBGPopup">
                                                                            <div class="embed-responsive embed-responsive-16by9">
                                                                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/xwFBpvU0vN8" allowfullscreen></iframe>
                                                                            </div>
                                                                        </div>
                                                                        <a href="#"><h3 style="font-size: 12px; color: #000000;">FOCUS แบบว่ารักเธอ [Unblurred Version]</h3></a>
                                                                        <hr>
                                                                        <p style="float: left;"><i class="fas fa-eye"></i> 200 view</p>
                                                                        <a href="#"><button style="width: 64px; height: 24px; border-radius: 12px; background-color: #f5f5f5; font-size: 13px; color: #939393; border: none;">ผู้กำกับ</button></a>
                                                                    </div>
                                                                </div>

                                                            </div><!-- row -->

                                                        </div><!-- Tab 01 -->
                                            </div><!-- boxTabsMenu -->
                                        </div>
                                    </div><!-- row -->

                                    <div class="row">

                                        <div class="col-12">
                                            <div class="col-md-3 offset-md-4 boxNextPageView">
                                                <nav aria-label="...">
                                                    <ul class="pagination">
                                                        <li class="page-item disabled">
                                                            <a class="page-link" href="findTeam.html" tabindex="-1" style="color: #000000;">Previous</a>
                                                        </li>

                                                        <li class="page-item active" style="background-color: #fbb040;">
                                                            <a class="page-link" href="findTeam.html" style="color: #ffffff; background-color: #fbb040; border: none;">1</a>
                                                        </li>

                                                        <li class="page-item">
                                                            <a class="page-link" href="findTeamSecond.html" style="color: #939393;">2 <span class="sr-only" style="color: #939393;">(current)</span>
                                                            </a>
                                                        </li>

                                                        <li class="page-item" style="color: #939393;">
                                                            <a class="page-link" href="findTeamThird.html" style="color: #939393;">3</a>
                                                        </li>

                                                        <li class="page-item">
                                                            <a class="page-link" href="#" style="color: #000000;">Next</a>
                                                        </li>
                                                    </ul>
                                                </nav>
                                            </div><!-- col-md-3 offset-md-5 -->
                                        </div>

                                    </div><!-- row -->

                                </div>

                                <!-- Modal footer -->
                                <!-- <div class="modal-footer">
                                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div> -->

                              </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div><!-- col-3 -->

            <div class="col-md-9 boxDetailTeamHead">
                <div class="row">
                    <div class="col-12" style="padding-bottom: 25px;">
                        <div class="boxTextHeadTeam">
                            <h1>{{$post_team->name}}</h1>
                        </div>
                    </div>

                    <div class="col-12" style="padding-bottom: 25px;">
                        <div class="boxTextDetailTeam02">
                            <h4>รายละเอียดงานโดยรวม :</h4>
                            <p>{{$post_team->detail}}</p>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="boxTextDateTeam03">
                            <h4>วันที่เริ่ม/จบงาน :</h4>
                            <p>{{$post_team->start_date}} - {{$post_team->end_date}}</p>
                        </div>
                    </div>
                    {{-- <div class="col-6">
                        <div class="boxTextDateTeam03">
                            <h4>รายได้/วัน</h4>
                            <p>500 - 5,000 บาท</p>
                        </div>
                    </div> --}}

                </div><!-- row -->
            </div><!-- col-9 -->


        </div><!-- row -->


        <div class="row boxRowPositionHead" style="margin-top: 20px;">
            <div class="col-md-6">
                <div class="boxHeadPositionLeft">
                    <h4>ตำแหน่งที่ตามหา</h4>
                </div>
            </div><!-- col-md-2 -->
            <div class="col-md-6">
                <div class="boxHeadPositionRight text-right">
                    <h4>วันที่โพสต์ : {{$post_team->created_at}}</h4>
                </div>
            </div><!-- col-md-2 -->
            <div class="col-12 boxLine">
                <hr>
            </div>
        </div><!-- row -->


        <div class="row">
            @if(!empty($result_postisions))
                @foreach ($result_postisions as $item)
                <div class="col-md-3 col-6">
                    <div class="boxImgPositionInDetail col-12" style="width: 100%; height: 165px;">
                        <img src="/uploads/image/positionCameraMan_in_Team_01.jpg" style="width: 100%; height: auto;" class="boxCardPosition text-center">
                    </div>
                    <div class="boxInCardPositionn text-center col-12" style="float:left;">
                        <h3>{{$item->position_name}}</h3>
                    <h5>
                        <em>
                            @if(isset($prices[$item->id]))
                                {!! $prices[$item->id] !!}
                            @else
                                -
                            @endif
                        </em>
                    </h5>
                    </div>

                    <div class="row boxNumberJoinDetailTeam text-center col-12" style="float:left;">
                                <div class="col-6 boxTextLRInbox">
                                    <p>ผู้ขอเข้าร่วม</p>
                                    <h6>-</h6>
                                </div>
                                <div class="col-6 boxTextLRInbox">
                                    <p>ต้องการ</p>
                                    <h6>{!! $persons[$item->id] !!}</h6>
                                </div>
                    </div><!-- row -->
                    <div class="boxBTNJoinInTeam">
                        <form action="">
                            <button class="btn btn-lg col-12" type="submit" style="background-color: #fbb040;color: #fff;border-radius: 25px;float:left">เข้าร่วม</button>
                        </form>
                    </div>
                </div><!-- col-md-3 -->
                @endforeach
            @endif


        </div><!-- row -->



	</div><!-- container -->


@endsection
