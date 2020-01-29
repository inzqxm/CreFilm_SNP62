@extends('layouts.app')
@section('content')

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.css" rel="stylesheet" id="bootstrap-css">

    <div class="container" style="font-family: Kanit;">
        <div class="row">

            <div class="col" style="padding-top: 70px">
                <a href="/findTeam"><i style="font-size: 20px; color: #000000; cursor: pointer;" class='fas'>&#xf060;  <span style="font-family:Kanit;">ย้อนกลับ</span></i></a>
            </div>

            <div class="col">
                <div class="boxHeadPageRight">
                    <h1 class="text-right">สร้างทีม</h1>
                </div>
            </div><!-- col 1 -->

        </div><!-- row -->


        <div class="stepwizard col-12">
            <div class="stepwizard-row setup-panel">
                <div class="stepwizard-step">
                    <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                    <h5 style="color: #6c757d">รายละเอียดของทีม</h5>
                </div>
                <div class="stepwizard-step">
                    <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                    <h5 style="color: #6c757d">Pre-Production</h5>
                </div>
                <div class="stepwizard-step">
                    <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                    <h5 style="color: #6c757d">Production</h5>
                </div>
                <div class="stepwizard-step">
                    <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
                    <h5 style="color: #6c757d">Post-Production</h5>
                </div>
                <div class="stepwizard-step">
                    <a href="#step-5" type="button" class="btn btn-default btn-circle" disabled="disabled">5</a>
                    <h5 style="color: #6c757d">ยืนยันรายละเอียดของทีม</h5>
                </div>
            </div>
        </div>

        <br>

        <form role="form" action="{{action('PositionController@store')}}" method="post">
            {{csrf_field()}}
<!-- {{--            -----------------------step1----------------------}} -->
            <div class="row setup-content" id="step-1">
                <div class="col-md-12">
                    <div class="col-md-12">
                        <div class="col-12">
                            <h5>ชื่อหัวข้องาน</h5>
                            <input type="text" id="name"  name="name" placeholder="กรอกชื่อหัวข้องานที่ทำ เช่น ชื่องานที่ลงประกวด, งานหนังสั้นนักศึกษา มหาวิทยาลัย" style="width:100%;height: 50px;background-color: #f4f4f4;box-sizing: border-box;font-family: Kanit;border: none;padding: 20px;color: #000000;border-radius: 15px;font-size: 18px;" />

                        </div>
                        <div class="col-12">
                            <h5 style="padding-top: 28px;">สถานะของงาน</h5>
{{--                            <input type="text" name="status" placeholder="กรอกสถานะสั้นๆ เช่น ด่วนมาก, สายลุย, ไม่เก่งก็ทำได้" style="width:100%;height: 50px;background-color: #f4f4f4;box-sizing: border-box;font-family: Kanit;border: none;padding: 15px;color: #000000;border-radius: 20px;font-size: 18px;" />--}}
                            <h5>tag</h5>
                        </div>

                        <div class="col-12">
                            <h5 style="padding-top: 28px;">รายละเอียดงานโดยรวม</h5>
                            <textarea type="text" name="detail" placeholder="กรอกรายละเอียดงานโดยรวมแบบสั้นๆ เช่น ต้องการคนมาช่วยเขียนบท เป็นงานถ่ายโฆษณาแบรนด์ดังจากเกาหลี วันเวลาคุยกันอีกทีครับ" style="width:100%;background-color: #f4f4f4;box-sizing: border-box;font-family: Kanit;border: none;padding: 20px;color: #000000;border-radius: 15px;font-size: 18px;" rows="5"></textarea>
                        </div>
                        <div class="col-12">
                            <h5 style="padding-top: 28px;">กำหนดวันเริ่ม/จบ Project</h5>
                            <div class="row">
                                <div class="col-4">
                                    <h6>เริ่ม : </h6>
                                    <div id="datepick" class="col-12 input-group date" data-provide="datepicker">
                                        <i class="fas">&#xf073;</i>&nbsp;&nbsp;<input type="text" class="form-control" name="start_date"  style="background-color: #f4f4f4;border-radius: 50px;border-color: transparent;font-family: Kanit" placeholder="mm/dd/yyy">
                                        <div class="input-group-addon">
                                            <span class="glyphicon glyphicon-th"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <h6>สิ้นสุด : </h6>
                                    <div id="datepick" class="col-12 input-group date" data-provide="datepicker">
                                        <i class="fas">&#xf073;</i>&nbsp;&nbsp;<input type="text" class="form-control" name="end_date" style="background-color: #f4f4f4;border-radius: 50px;border-color: transparent;font-family: Kanit" placeholder="mm/dd/yyy">
                                        <div class="input-group-addon">
                                            <span class="glyphicon glyphicon-th"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <br><br>

                        <div class="col-12">
                            <div class="text-center">
                                <button class="btn nextBtn btn-lg col-3" type="button"  style="background-color: #fbb040;color: #fff;border-radius: 25px;">ต่อไป</button>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

{{--            -------------------step2-------------------}}
            <div class="row setup-content" id="step-2">
                <div class="col-12">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <h5>1. Pre-Production</h5>
                                <p style="color: #6c757d">เลือกตำแหน่งที่ต้องการเพื่อนร่วมทีม
                                    (เลือกได้มากกว่า 1 ตำแหน่ง)</p>
                            </div>
                            <div class="col-md-3">
                                <h5 class="text-center">จำนวนคน</h5>
                                <p class="text-center" style="color: #6c757d">เลือกจำนวนแต่ละตำแหน่ง</p>
                            </div>
                            <div class="col-md-3">
                                <h5 class="text-center">กำหนดรายได้</h5>
                                <p class="text-center" style="color: #6c757d">เลือกอัตรารายได้/วัน</p>
                            </div>
                        </div>



                        @foreach ($positions as $row)
                        @if($row->type_id == 1)
                        <div class="row">

                            <div class="col-md-6">
                                <div class="box-checkboxx">
                                    <div class="box-checkListPosition">
                                        <label class="fillterCheck" style="font-size: 15px;">{{$row->position_name}}
                                        <input type="checkbox" value="{{$row->id}}" name="pre_position_id[]" id="pre_position_id" >
                                            <span class="checkmark" style="width: 20px; height: 20px; text-align: center;"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 ">
                                <div class="box-moneylow" style="width:240px;">
                                    <select class="custom-select" style="border-radius: 18px;background-color: #f4f4f4;border: none;" name="pre_person[]">
                                        <option >0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="box-moneylow" style="width:240px;">
                                    <select class="custom-select" style="border-radius: 18px;background-color: #f4f4f4;border: none;" name="pre_budget[]">
                                        <option >Choose...</option>
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
                            </div>
                        </div>



                        <br>
                        @endif
                        @endforeach
                        <div class="col-12">
                            <div class="text-center">
                                <button class="btn nextBtn col-3" type="button" style="background-color: #fbb040;color: #fff;border-radius: 25px;">ต่อไป</button>
                            </div>

                        </div>
                        <br>
                    </div>
                    </div>


            </div>


{{-----------------step3-----------------}}
            <div class="row setup-content" id="step-3">
                <div class="col-12">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <h5>2. Production</h5>
                                <p style="color: #6c757d">เลือกตำแหน่งที่ต้องการเพื่อนร่วมทีม
                                    (เลือกได้มากกว่า 1 ตำแหน่ง)</p>
                            </div>
                            <div class="col-md-3">
                                <h5 class="text-center">จำนวนคน</h5>
                                <p class="text-center" style="color: #6c757d">เลือกจำนวนแต่ละตำแหน่ง</p>
                            </div>
                            <div class="col-md-3">
                                <h5 class="text-center">กำหนดรายได้</h5>
                                <p class="text-center" style="color: #6c757d">เลือกอัตรารายได้/วัน</p>
                            </div>
                        </div>
                        @foreach ($positions as $row)
@if($row->type_id == 2)

                        <div class="row">
                            <div class="col-md-6">
                                <div class="box-checkboxx">
                                    <div class="box-checkListPosition">
                                        <label class="fillterCheck" style="font-size: 15px;">{{$row->position_name}}
                                        <input type="checkbox" value="{{$row->id}}" name="pro_position_id[]">
                                            <span class="checkmark" style="width: 20px; height: 20px; text-align: center;" ></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 ">
                                <div class="box-moneylow" style="width:240px;">
                                    <select class="custom-select" style="border-radius: 18px;background-color: #f4f4f4;border: none;" name="pro_person[]" >
                                        <option selected>0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="box-moneylow" style="width:240px;">
                                    <select class="custom-select" style="border-radius: 18px;background-color: #f4f4f4;border: none;" name="pro_budget[]">
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
                            </div>
                        </div>
                        @endif
                        @endforeach
                        <br>

                        <div class="col-12">
                            <div class="text-center">
                                <button class="btn nextBtn col-3" type="button" style="background-color: #fbb040;color: #fff;border-radius: 25px;">ต่อไป</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


{{-----------step4---------------}}
            <div class="row setup-content" id="step-4">
                <div class="col-12">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <h5>3. Post-Production</h5>
                                <p style="color: #6c757d">เลือกตำแหน่งที่ต้องการเพื่อนร่วมทีม
                                    (เลือกได้มากกว่า 1 ตำแหน่ง)</p>
                            </div>
                            <div class="col-md-3">
                                <h5 class="text-center">จำนวนคน</h5>
                                <p class="text-center" style="color: #6c757d">เลือกจำนวนแต่ละตำแหน่ง</p>
                            </div>
                            <div class="col-md-3">
                                <h5 class="text-center">กำหนดรายได้</h5>
                                <p class="text-center" style="color: #6c757d">เลือกอัตรารายได้/วัน</p>
                            </div>
                        </div>
@foreach ($positions as $row)
    @if($row->type_id == 3)

                        <div class="row">
                            <div class="col-md-6">
                                <div class="box-checkboxx">
                                    <div class="box-checkListPosition">
                                        <label class="fillterCheck" style="font-size: 15px;">{{$row->position_name}}
                                        <input type="checkbox" value="{{$row->id}}" name="post_position_id[]">
                                            <span class="checkmark" style="width: 20px; height: 20px; text-align: center;"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 ">
                                <div class="box-moneylow" style="width:240px;">
                                    <select class="custom-select" style="border-radius: 18px;background-color: #f4f4f4;border: none;" name="post_person[]">
                                        <option selected>0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="box-moneylow" style="width:240px;">
                                    <select class="custom-select" style="border-radius: 18px;background-color: #f4f4f4;border: none;" name="post_budget[]">
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
                            </div>
                        </div>

                        <br>

                        @endif
                        @endforeach
                        <div class="col-12">
                            <div class="text-center">
                                <button class="btn nextBtn col-3" type="button" onclick="myFunction()" style="background-color: #fbb040;color: #fff;border-radius: 25px;">ต่อไป</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


            {{--            -----------------------step5----------------------}}
            <div class="row setup-content" id="step-5">
                <div class="col-md-12">
                    <div class="col-md-12">
                        <div class="col-12">
                            <h4>รายละเอียดงานโดยรวม</h4>
                            <p>ต้องการคนมาช่วยเขียนบท และผู้ช่วยผู้กำกับกับช่างภาพลุยงานวันจริง เป็นงานถ่ายโฆษณาแบรนด์ดังจากเกาหลี สามารถ
                                เลือกวันที่สะดวกได้เลยครับ</p>
                        </div>
                        <div class="col-12">
                            <h4 style="padding-top: 28px;">วันเริ่ม/จบ Project</h4>
                            <div class="row">
                                <div class="col-4">
                                    <span style="color: #6c757d">เริ่ม :</span>&nbsp;<span>}</span>
                                </div>
                                <div class="col-4">
                                    <span style="color: #6c757d">สิ้นสุด :</span>&nbsp;<span>}</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <h4 style="padding-top: 28px;">รายละเอียดงานโดยรวม</h4>

                             <p id="pre_pos"></p>
                             {{-- <p id="name1"></p> --}}
                             <p id="text" style="display:none"></p>
                        </div>
                        <div class="col-12">
                            <h4 style="padding-top: 28px;">ภาพปกของงาน</h4>
                            <input type="file">

                        </div>



                        <br><br>

                        <div class="col-12">
                            <div class="text-center">
                                <button class="btn btn-lg col-3" type="submit" style="background-color: #fbb040;color: #fff;border-radius: 25px;">สร้างทีม</button>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </form>


    </div><!-- container -->

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>

    <script>
        $(document).ready(function () {
            var navListItems = $('div.setup-panel div a'),
                allWells = $('.setup-content'),
                allNextBtn = $('.nextBtn');
                // allBackBtn = $('.backBtn');

            allWells.hide();

            navListItems.click(function (e) {
                e.preventDefault();
                var $target = $($(this).attr('href')),
                    $item = $(this);

                if (!$item.hasClass('disabled')) {
                    navListItems.removeClass('btn-primary').addClass('btn-default');
                    $item.addClass('btn-primary');
                    allWells.hide();
                    $target.show();
                    $target.find('input:eq(0)').focus();
                }
            });

            allNextBtn.click(function(){
                var curStep = $(this).closest(".setup-content"),
                    curStepBtn = curStep.attr("id"),
                    nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                    curInputs = curStep.find("input[type='text'],input[type='url']"),
                    isValid = true;

                $(".form-group").removeClass("has-error");
                for(var i=0; i<curInputs.length; i++){
                    if (!curInputs[i].validity.valid){
                        isValid = false;
                        $(curInputs[i]).closest(".form-group").addClass("has-error");
                    }
                }

                if (isValid)
                    nextStepWizard.removeAttr('disabled').trigger('click');
            });

            $('div.setup-panel div a.btn-primary').trigger('click');
        });

        $(function () {
            $('#datepicker').datepicker({
                format: "dd/mm/yyyy",
                autoclose: true,
                todayHighlight: true,
                showOtherMonths: true,
                selectOtherMonths: true,
                autoclose: true,
                changeMonth: true,
                changeYear: true,
                orientation: "button"
            });
        });


        function myFunction() {
            var x =
                // document.getElementById("pre_position_id").value;

            document.getElementById(
              "pre_pos").innerHTML = x;
        }
        function myFunction2() {
  var checkBox = document.getElementById("pre_position_id");
  var text = document.getElementById("text");
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
     text.style.display = "none";
  }
}

    </script>


@endsection
