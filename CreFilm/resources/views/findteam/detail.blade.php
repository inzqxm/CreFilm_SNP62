@extends('layouts.app')
@section('content')

    @foreach ($post_teams as $post_team)

        <div class="container" style="font-family: Kanit;">
            <div class="row">

                <div class="col" style="padding-top: 70px">
                    <a href="/findteam"><i style="font-size: 20px; color: #000000; cursor: pointer;" class='fas'>&#xf060; ย้อนกลับ</i></a>
                </div>

                <div class="col">
                    <div class="boxHeadPageRight">
                        <h1 class="text-right">รายละเอียดทีม</h1>
                    </div>
                </div><!-- col 1 -->

            </div><!-- row -->


            <div class="row">
                <div class="col-md-3">
                    <div class="boxProfileLeft">
                        <div class="boxImgDetailProfile text-center">
                            <img src="/uploads/image/profile_01.jpg" alt="..." class="rounded-circle">
                            <h4>{{$post_team->user_name}}</h4>
                            <p>ความสามารถ :</p>
                            <div class="boxImgIconForProfile">
{{--                                <img src="/uploads/image/Icon_profile.png">--}}
                            </div>
                            <div class="boxBtnViewProfile">
                                <a href="/profile/{{$post_team->user_id}}" class="btn btn-primary">ดูโปรไฟล์</a>
                            </div>


                        </div>

                    </div>
                </div><!-- col-3 -->

                <div class="col-md-9" style="width: 100%; height: 315px;">
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
                                <h4>วันที่เริ่มงาน/จบงาน :</h4>
                                <p>{{$post_team->start_date}} - {{$post_team->end_date}}</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="boxTextDateTeam03">
                                <h4>รายได้/วัน</h4>
{{--                                <p>500 - 5,000 บาท</p>--}}
                            </div>
                        </div>

                    </div><!-- row -->
                </div><!-- col-9 -->


            </div><!-- row -->


            <div class="row" style="padding: 40px 0 0 0;">
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
                <!-- <div class="boxLine">
                    <hr style="border: solid 0.5px #e2e2e2; width: 100%;">
                </div> -->
            </div><!-- row -->

            <br><br>


            <div class="row">
                <div class="col-md-3">
                    <!--                 <div class="boxCardPosition text-center">

                                    </div> -->
{{--                    @foreach($positions as $position)--}}
                    <img src="/uploads/image/{{$post_team->pre_position_name}}" style="width: 100%; height: 230px;" class="boxCardPosition text-center">
                    <div class="boxInCardPositionn text-center" >
                        <h3>{{$post_team->pre_position_name}}</h3>
                        <h5></h5>
                    </div>

                    <div class="row text-center">
                        <div class="col-6 boxTextLRInbox">
                            <p>ผู้ขอเข้าร่วม</p>
                            <h6>3</h6>
                        </div>
                        <div class="col-6 boxTextLRInbox">
                            <p style="font-size: 13px; color: #939393;">ต้องการ</p>
                            <h6 style="font-size: 18px; color: #000000;">2</h6>
                        </div>
                    </div><!-- row -->
                    <a href="#">
                        <button style="width: 100%; height: 40px; border-radius: 30px; background-color: #fbb040;  font-size: 18px; color: #ffffff; font-weight: bold; border: none; cursor: pointer;">เข้าร่วม</button>
                    </a>
{{--                        @endforeach--}}

                </div><!-- col-md-3 -->

                <div class="col-md-3">
                    <!--                 <div class="boxCardPosition text-center">

                                    </div> -->
                    {{--                    @foreach($positions as $position)--}}
                    <img src="/uploads/image/{{$post_team->pro_position_name}}" style="width: 100%; height: 230px;" class="boxCardPosition text-center">
                    <div class="boxInCardPositionn text-center" >
                        <h3>{{$post_team->pro_position_name}}</h3>
                        <h5></h5>
                    </div>

                    <div class="row text-center">
                        <div class="col-6 boxTextLRInbox">
                            <p>ผู้ขอเข้าร่วม</p>
                            <h6>3</h6>
                        </div>
                        <div class="col-6 boxTextLRInbox">
                            <p style="font-size: 13px; color: #939393;">ต้องการ</p>
                            <h6 style="font-size: 18px; color: #000000;">2</h6>
                        </div>
                    </div><!-- row -->
                    <a href="#">
                        <button style="width: 100%; height: 40px; border-radius: 30px; background-color: #fbb040;  font-size: 18px; color: #ffffff; font-weight: bold; border: none; cursor: pointer;">เข้าร่วม</button>
                    </a>
                    {{--                        @endforeach--}}

                </div><!-- col-md-3 -->

                <div class="col-md-3">
                    <!--                 <div class="boxCardPosition text-center">

                                    </div> -->
                    {{--                    @foreach($positions as $position)--}}
                    <img src="/uploads/image/{{$post_team->post_position_name}}" style="width: 100%; height: 230px;" class="boxCardPosition text-center">
                    <div class="boxInCardPositionn text-center" >
                        <h3>{{$post_team->post_position_name}}</h3>
                        <h5></h5>
                    </div>

                    <div class="row text-center">
                        <div class="col-6 boxTextLRInbox">
                            <p>ผู้ขอเข้าร่วม</p>
                            <h6>3</h6>
                        </div>
                        <div class="col-6 boxTextLRInbox">
                            <p style="font-size: 13px; color: #939393;">ต้องการ</p>
                            <h6 style="font-size: 18px; color: #000000;">2</h6>
                        </div>
                    </div><!-- row -->
                    <a href="#">
                        <button style="width: 100%; height: 40px; border-radius: 30px; background-color: #fbb040;  font-size: 18px; color: #ffffff; font-weight: bold; border: none; cursor: pointer;">เข้าร่วม</button>
                    </a>
                    {{--                        @endforeach--}}

                </div><!-- col-md-3 -->



            </div><!-- row -->



        </div><!-- container -->

    @endforeach

@endsection
