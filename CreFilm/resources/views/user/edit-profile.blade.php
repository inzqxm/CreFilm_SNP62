@extends('layouts.app')
@section('content')

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

        <form action="/profile/{{$user->id}}" method="post" enctype="multipart/form-data">
        <div class="row">

                {{ csrf_field() }}

            <div class="col-md-12">
                <div class="col-12">
                    <h5>username : </h5>
                    <input type="text" id="name" name="name" placeholder="username" value="{{Auth::user()->name}}" style="width:100%;height: 50px;background-color: #f4f4f4;box-sizing: border-box;font-family: Kanit;border: none;padding: 20px;color: #000000;border-radius: 15px;font-size: 18px;" />
                </div>
                <br>
                <div class="col-12">
                    <h5>เกี่ยวกับฉัน</h5>
                    <input type="text" name="about" placeholder="กรอกรายละเอียดเกี่ยวกับฉัน" style="width:100%;background-color: #f4f4f4;box-sizing: border-box;font-family: Kanit;border: none;padding: 20px;color: #000000;border-radius: 15px;font-size: 18px;" value="{{Auth::user()->about}}" rows="5">
                </div>

            </div>
            <br><br>
            <div class="col-12 mt-4">
                <div class="text-center">
                    <button class="btn btn-lg col-3" type="submit" style="background-color: #fbb040;color: #fff;border-radius: 25px;">บันทึกข้อมูล</button>
                </div>

            </div>


        </div><!-- row -->


        </form>





    </div><!-- container -->

@endsection
