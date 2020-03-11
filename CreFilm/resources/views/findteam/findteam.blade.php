@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

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

				<div class="col-md-3 boxListCheckPosition">
					<div class="boxFindTeamsSearch">
						<div class="card-img-overlayy">
						  	<h4 class="text-center" style="font-size: 18px; font-weight: bold; padding-top: 10px; color: #000000;">ตัวกรอง</h4>
						  	<!-- <br> = เว้นบรรทัด -->
						  	<!-- line -->
						  	<hr style="border: solid 0.5px #fbb040; width: 90%">
						    <h5 class="text-left" style="font-size: 16px; color: #000000; font-weight: bold; padding-left: 20px;">เลือกตำแหน่งจากที่สนใจ</h5>
						</div>

						<div class="input-group">
							  <select class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon">
								    <option selected>ค้นหาอาชีพที่ท่านสนใจ</option>
								    <option value="1">ผู้กำกับนักแสดง</option>
								    <option value="2">ผู้กำกับฝ่ายศิลป์</option>
								    <option value="3">ผู้กำกับภาพ</option>
								    <option value="3">ผู้กำกับเสียง</option>
								    <option value="3">ผู้ช่วยผู้กำกับ</option>
								    <option value="3">ผู้กำกับ</option>
								    <option value="3">ผู้ดูแลอุปกรณ์ประกอบฉาก</option>
								    <option value="3">ผู้ดูแลไมค์บูม</option>
								    <option value="3">ผู้ตัดต่อลำดับภาพ</option>
								    <option value="3">ผู้บันทึกเสียงและมิกซ์เสียง</option>
								    <option value="3">ผู้ปรับแต่งสี</option>
								    <option value="3">ผู้ปรับโฟกัสระยะถ่าย</option>
								    <option value="3">ผู้ออกแบบเครื่องแต่งกาย</option>
								    <option value="3">ผู้แต่งหน้าและทำผม</option>
								    <option value="3">ผู้ควบคุมแสง</option>
								    <option value="3">ช่างภาพเบื้องหลัง</option>
								    <option value="3">ผู้เขียนบท</option>
								    <option value="3">ผู้อำนวยการสร้าง</option>
								    <option value="3">นักแสดงหญิง</option>
								    <option value="3">นักแสดงชาย</option>
								    <option value="3">ผู้จัดหาสถานที่ถ่ายทำ</option>
                              </select>

							  <div class="input-group-append">
							    <button class="btn btn-outline-secondary" type="button">ค้นหา</button>
                              </div>
                              {{-- @foreach ($positions as $row)

                                    <div class="box-checkListPosition">
                                        <label class="fillterCheck" style="font-size: 15px;">{{$row->position_name}}
                                            <input type="checkbox" multiple value="{{$row->id}}" name="search[]">
                                            <span class="checkmark" style="width: 20px; height: 20px; text-align: center;"></span>
                                        </label>
                                    </div>


                                @endforeach --}}
						</div>

						<div class="row">

							<div class="col-md-12 col-6 box-moneylow">
								<h5 class="text-left">เลือกรายได้ขั้นต่ำ</h5>
								<select class="custom-select" style="width: 230px;border-radius: 18px;background-color: #f4f4f4;color: #d0d0d0;border: none;">
                                    <option selected>เลือกรายได้ขั้นต่ำ</option>
                                    <option value="300">300</option>
                                    <option value="400">400</option>
                                    <option value="500">500</option>
                                    <option value="600">600</option>
                                    <option value="700">700</option>
                                    <option value="800">800</option>
                                    <option value="900">900</option>
                                    <option value="1000">1,000</option>
                                    <option value="2000">2,000</option>
                                    <option value="3000">3,000</option>
                                    <option value="4000">4,000</option>
                                    <option value="5000">5,000</option>
                                    <option value="10000">10,000</option>
                                    <option value="15000">15,000</option>
                                    <option value="20000">20,000</option>
                                    <option value="25000">25,000</option>
                                    <option value="30000">30,000</option>
                                </select>
							</div><!-- box-moneylow -->

							<div class="col-md-12 col-6 box-moneyhight">
								<h5 class="text-left">เลือกรายได้ขั้นสูงสุด</h5>
								<select class="custom-select" style="width: 230px;border-radius: 18px;background-color: #f4f4f4;color: #d0d0d0;border: none;">
                                    <option selected>เลือกรายได้ขั้นสูงสุด</option>
                                    <option value="300">300</option>
                                    <option value="400">400</option>
                                    <option value="500">500</option>
                                    <option value="600">600</option>
                                    <option value="700">700</option>
                                    <option value="800">800</option>
                                    <option value="900">900</option>
                                    <option value="1000">1,000</option>
                                    <option value="2000">2,000</option>
                                    <option value="3000">3,000</option>
                                    <option value="4000">4,000</option>
                                    <option value="5000">5,000</option>
                                    <option value="10000">10,000</option>
                                    <option value="15000">15,000</option>
                                    <option value="20000">20,000</option>
                                    <option value="25000">25,000</option>
                                    <option value="30000">30,000</option>
                                </select>
							</div><!-- box-moneyhight -->
						</div><!-- row -->

						<div class="box-selectposition">
							<a href="#"><input class="btn btn-primary" type="submit" value="กรอง"></a>
						</div><!-- box-selectposition -->

				  	</div><!-- card -->
				</div><!-- col-md-10 -->

			<div class="col-md-9 boxTeams">
                <div class="row">

                    @foreach($post_teams as $post_team)
                        <br>

                        <div class="col-md-6 col-12 mb-3">
                            <div class="boxTeamsText">
                                <div class="box-teammer" style="">
                                    <div class="card" style="border: none;box-shadow: 0 -0.5px 10px 0 rgba(96, 96, 96, 0.16);">
                                        <div class="box-imgCoverTeamBig">
{{--                                            <div class="box-joinNum">--}}
{{--                                                <!-- <div class="box-textUpImg01"> -->--}}
{{--                                                    <p class="text-center">ผู้ขอเข้าร่วม</p>--}}
{{--                                                <!-- </div> -->--}}
{{--                                                <div class="box-textUpImg02">--}}
{{--                                                    <p class="text-center">-</p>--}}
{{--                                                </div>--}}
{{--                                                    @foreach ($result_postisions as $item)--}}
{{--                                                        <div class="box-textUpImg03">--}}
{{--                                                            <p class="text-center">/ {{$persons[$item->id]}}</p>--}}
{{--                                                        </div>--}}
{{--                                                    @endforeach--}}
{{--                                            </div><!-- box-joinNum -->--}}
                                            <img class="card-img-top" src="/uploads/covers_team/{{$post_team->img_head}}" alt="Card image cap">
                                        </div><!-- box-imgCover -->
                                        <div class="card-body boxTeamsFindPage">
                                            <div class="boxImgCoverTeams">
                                                <a href="/profile/{id}"><img src="/uploads/image/profile_01.jpg" alt="..." class="rounded-circle" style="width:50px;height:50px;"></a>
                                            </div>
                                            <div class="box-team">
                                                <div class="mediaCardTeam-body">
                                                    <a href="/findteam/detail/{{$post_team->id}}" style="text-decoration:none;color: black;"><h4 style="white-space: nowrap; width: 300px;overflow: hidden;text-overflow: ellipsis;">&#9679; {{$post_team->name}}</h2></a>
                                                        <a href="/profile/{id}" style="text-decoration:none;"><h5 class="mt-0" style="color: #939393;">โดย: {{$post_team->user_name}}</h5></a>
                                                        <div class="row text-center">
                                                            <!-- <div class="bb"> -->
                                                                <p style="color: #939393; font-size: 14px; font-weight: lighter; padding-left: 15px; ">สถานะ: <code style="color: #39b54a; font-family: Kanit; font-size: 14px;"> {{$post_team->status}}</code></p>
                                                                {{-- <p class="offset-md-3" style="color: #939393; font-size: 14px; font-weight: lighter; ">| ฿500 - 5,000 บาท</p> --}}
                                                            <!-- </div> -->
                                                        </div><!-- row -->
                                                </div><!-- media-body -->
                                                <div class="row">
                                                    <div class="col-md-8 offset-md-3">
                                                        <div class="box-tag-position">
                                                            {{-- <a href="#"><button type="button" class="btn btn text-center">โฟกัส</button></a> --}}
                                                        </div><!-- box-tag-position -->

                                                    </div>
                                                    <div class="col-md-12" >
                                                        <div class="box-btnViewDetailTeam d-none d-md-block" style="padding-top:50px;text-align: center;">
                                                            <a href="/findteam/detail/{{$post_team->id}}" class="btn btn-primary">รายละเอียด</a>
                                                        </div>
                                                        <div class="box-btnViewDetailTeamm d-md-none">
                                                            <a href="/findteam/detail/{{$post_team->id}}" class="btn btn-primary" style="background-color: #fbb040 !important;border: none;float: right"><i class="fas fa-chevron-right"></i></a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div><!-- box-team -->
                                        </div><!-- card-body -->

                                    </div><!-- card -->
                                </div><!-- box-teammer -->
                            </div>
                        </div><!-- col-6 -->
                    @endforeach


                    {{-- <div class="col-12">
                    	<div class="col-md-3 offset-md-4 boxNextPageView">
							<nav aria-label="...">
								<ul class="pagination">
								    <li class="page-item disabled">
								      <a class="page-link" href="findTeam.html" tabindex="-1" style="color: #000000;">Previous</a>
								    </li>

								    <li class="page-item active" style="background-color: #fbb040;"><a class="page-link" href="findTeam.html" style="color: #ffffff; background-color: #fbb040; border: none;">1</a></li>

								    <li class="page-item">
								      <a class="page-link" href="findTeamSecond.html" style="color: #939393;">2 <span class="sr-only" style="color: #939393;">(current)</span></a>
								    </li>

								    <li class="page-item" style="color: #939393;"><a class="page-link" href="findTeamThird.html" style="color: #939393;">3</a></li>

								    <li class="page-item">
								      <a class="page-link" href="#" style="color: #000000;">Next</a>
								    </li>
								</ul>
							</nav>

						</div><!-- col-md-3 offset-md-5 -->
                    </div> --}}

                </div><!-- row -->
            </div><!-- col-9 -->


		</div><!-- row -->


	</div><!-- container -->

@endsection
