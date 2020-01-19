@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">

    <image style="height:250px;width:100%;object-fit:cover;background-size: cover;background-position: center;" src="https://uppic.cc/d/5BXR"></image>
{{--    align-content-center--}}
    <div class="container">
        <div class="row">

            <div class="col-12" style="width: 358px;height: 76px;">
                <h2 style="margin-top: 40px;font-family:Kanit,serif !important;font-size: 24px;font-weight: 600;font-stretch:normal;font-style: normal;line-height: 1.52;letter-spacing: normal;color: #000000;">
                    คุณกำลังมองหา</h2>
            </div>

            <div class="col-12">
                <div class="container my-4">

                    <!--Carousel Wrapper-->
                    <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

                        <!--Controls-->
                    {{--            <div class="controls-top">--}}
                    {{--                <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left"></i></a>--}}
                    {{--                <a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right"></i></a>--}}
                    {{--            </div>--}}
                    <!--/.Controls-->

                        <!--Indicators-->
                        <ol class="carousel-indicators">
                            <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
                            <li data-target="#multi-item-example" data-slide-to="1"></li>
                            <li data-target="#multi-item-example" data-slide-to="2"></li>
                        </ol>
                        <!--/.Indicators-->



                        <!--Slides-->
                        <div class="carousel-inner" role="listbox">
                            <!--First slide-->

                            <div class="carousel-item active">

                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="mb-2">
                                            <div class="text-center m-auto" style="width:120px;height:120px;border-radius: 15px;border: solid 2px #fbb040;margin: 10px;">
                                                <img class="card-img-top m-auto" src="https://uppic.cc/d/5BcR"
                                                     alt="Card image cap" style="width: 70%;margin-top: 15px !important;">
                                            </div>
                                            <div class="card-body" style="text-align: center">
                                                <p class="card-text">ช่างภาพ</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 clearfix d-none d-md-block">
                                        <div class="mb-2">
                                            <div class="text-center m-auto" style="width:120px;height:120px;border-radius: 15px;border: solid 2px #ff88b0;margin: 10px;">
                                                <img class="card-img-top m-auto" src="https://uppic.cc/d/5Bc4"
                                                     alt="Card image cap" style="width: 70%;margin-top: 15px !important;">
                                            </div>
                                            <div class="card-body" style="text-align: center">
                                                <p class="card-text">ช่างแต่งหน้า</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 clearfix d-none d-md-block">
                                        <div class="mb-2">
                                            <div class="text-center m-auto" style="width:120px;height:120px;border-radius: 15px;border: solid 2px #5dd3ff;margin: 10px;">
                                                <img class="card-img-top" src="https://uppic.cc/d/5Bct"
                                                     alt="Card image cap" style="width: 70%;margin-top: 15px !important;">
                                            </div>

                                            <div class="card-body" style="text-align: center">
                                                <p class="card-text">ผู้ช่วยผู้กำกับ</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 clearfix d-none d-md-block">
                                        <div class="mb-2">
                                            <div class="text-center m-auto" style="width:120px;height:120px;border-radius: 15px;border: solid 2px #8b48f7;margin: 10px;">
                                                <img class="card-img-top" src="https://uppic.cc/d/5BcZ"
                                                     alt="Card image cap" style="width: 70%;margin-top: 15px !important;">
                                            </div>

                                            <div class="card-body" style="text-align: center">
                                                <p class="card-text">เขียนบท</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!--/.First slide-->

                            <!--Second slide-->
                            <div class="carousel-item">

                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="mb-2">
                                            <div class="text-center m-auto" style="width:120px;height:120px;border-radius: 15px;border: solid 2px #5493f7;margin: 10px;text-align: center">
                                                <img class="card-img-top m-auto" src="https://uppic.cc/d/5BcN"
                                                     alt="Card image cap" style="width: 70%;margin-top: 15px !important;">
                                            </div>

                                            <div class="card-body" style="text-align: center">
                                                <p class="card-text">ตัดต่อ</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 clearfix d-none d-md-block">
                                        <div class="mb-2">
                                            <div class="text-center m-auto" style="width:120px;height:120px;border-radius: 15px;border: solid 2px #ff7c5d;margin: 10px;text-align: center">
                                                <img class="card-img-top m-auto" src="https://uppic.cc/d/5BcQ"
                                                     alt="Card image cap" style="width: 70%;margin-top: 15px !important;">
                                            </div>

                                            <div class="card-body" style="text-align: center">
                                                <p class="card-text">เบื้องหลัง</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 clearfix d-none d-md-block">
                                        <div class="mb-2">
                                            <div class="text-center m-auto" style="width:120px;height:120px;border-radius: 15px;border: solid 2px #5dd3ff;margin: 10px;text-align: center">
                                                <img class="card-img-top" src="https://uppic.cc/d/5BcS"
                                                     alt="Card image cap" style="width: 70%;margin-top: 15px !important;">
                                            </div>

                                            <div class="card-body" style="text-align: center">
                                                <p class="card-text">ผู้กำกับ</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 clearfix d-none d-md-block">
                                        <div class="mb-2">
                                            <div class="text-center m-auto" style="width:120px;height:120px;border-radius: 15px;border: solid 2px #24c140;margin: 10px;text-align: center">
                                                <img class="card-img-top" src="https://uppic.cc/d/5Bcs"
                                                     alt="Card image cap" style="width: 70%;margin-top: 15px !important;">
                                            </div>

                                            <div class="card-body" style="text-align: center">
                                                <p class="card-text">ควบคุมแสง</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!--/.Second slide-->

                        </div>
                        <!--/.Slides-->

                    </div>
                    <!--/.Carousel Wrapper-->


                </div>
            </div>

        </div>
    </div>

    <br>


@endsection
