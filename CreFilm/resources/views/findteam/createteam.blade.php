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
                    <p style="color: #6c757d">รายละเอียดของทีม</p>
                </div>
                <div class="stepwizard-step">
                    <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                    <p style="color: #6c757d">Pre-Production</p>
                </div>
                <div class="stepwizard-step">
                    <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                    <p style="color: #6c757d">Production</p>
                </div>
                <div class="stepwizard-step">
                    <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
                    <p style="color: #6c757d">Post-Production</p>
                </div>
                <div class="stepwizard-step">
                    <a href="#step-5" type="button" class="btn btn-default btn-circle" disabled="disabled">5</a>
                    <p style="color: #6c757d">ยืนยันรายละเอียดของทีม</p>
                </div>
            </div>
        </div>

        <br>

        <form role="form" action="" method="post">

{{--            -----------------------step1----------------------}}
            <div class="row setup-content" id="step-1">
                <div class="col-md-12">
                    <div class="col-md-12">
                        <div class="col-12">
                            <h4>ชื่อหัวข้องาน</h4>
                            <input type="text" name="fname" placeholder="กรอกชื่อหัวข้องานที่ทำ เช่น ชื่องานที่ลงประกวด, งานหนังสั้นนักศึกษา มหาวิทยาลัย" style="width:100%;height: 50px;background-color: #f4f4f4;box-sizing: border-box;font-family: Kanit;border: none;padding: 20px;color: #000000;border-radius: 15px;font-size: 18px;" />
                        </div>
                        <div class="col-12">
                            <h4 style="padding-top: 28px;">สถานะของงาน</h4>
{{--                            <input type="text" name="lname" placeholder="กรอกสถานะสั้นๆ เช่น ด่วนมาก, สายลุย, ไม่เก่งก็ทำได้" style="width:100%;height: 50px;background-color: #f4f4f4;box-sizing: border-box;font-family: Kanit;border: none;padding: 15px;color: #000000;border-radius: 20px;font-size: 18px;" />--}}
                            <h4>tag jaaaa</h4>
                        </div>
{{--                        <div class="form-group">--}}
{{--                            <label class="control-label">Email</label>--}}
{{--                            <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Email" />--}}
{{--                        </div>--}}
                        <div class="col-12">
                            <h4 style="padding-top: 28px;">รายละเอียดงานโดยรวม</h4>
                            <textarea type="text" name="lname" placeholder="กรอกรายละเอียดงานโดยรวมแบบสั้นๆ เช่น ต้องการคนมาช่วยเขียนบท เป็นงานถ่ายโฆษณาแบรนด์ดังจากเกาหลี วันเวลาคุยกันอีกทีครับ" style="width:100%;background-color: #f4f4f4;box-sizing: border-box;font-family: Kanit;border: none;padding: 20px;color: #000000;border-radius: 15px;font-size: 18px;" rows="5"></textarea>
                        </div>
                        <div class="col-12">
                            <h4 style="padding-top: 28px;">กำหนดวันเริ่ม/จบ Project</h4>
                            <div class="col-1 boxTextCreatH4">
                                <h6>เริ่ม</h6>
                            </div>
                            <div id="datepick" class="col-4 input-group date" data-provide="datepicker">
                                <i class="fas">&#xf073;</i>&nbsp;&nbsp;<input type="text" class="form-control" style="background-color: #f4f4f4;border-radius: 50px;border-color: transparent;font-family: Kanit" placeholder="mm/dd/yyy">
                                <div class="input-group-addon">
                                    <span class="glyphicon glyphicon-th"></span>
                                </div>
                            </div>
                            <div class="col-1 boxTextCreatH4">
                                <h6>สิ้นสุด</h6>
                            </div>
                            <div id="datepick" class="col-4 input-group date" data-provide="datepicker">
                                <i class="fas">&#xf073;</i> &nbsp;&nbsp; <input type="text" class="form-control" style="background-color: #f4f4f4;border-radius: 50px;border-color: transparent;font-family: Kanit;" placeholder="mm/dd/yyy">
                                <div class="input-group-addon">
                                    <span class="glyphicon glyphicon-th"></span>
                                </div>
                            </div>
                        </div>



                        <br><br>

                        <div class="col-12">
                            <div class="text-center">
                                <button class="btn nextBtn btn-lg col-3" type="button" style="background-color: #fbb040;color: #fff;border-radius: 25px;">ต่อไป</button>
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

                        <div class="row">
                            <div class="col-md-6">
                                <div class="box-checkboxx">
                                    <div class="box-checkListPosition">
                                        <label class="fillterCheck" style="font-size: 15px;">position_name
                                            <input type="checkbox">
                                            <span class="checkmark" style="width: 20px; height: 20px; text-align: center;"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 ">
                                <div class="box-moneylow" style="width:240px;">
                                    <select class="custom-select" style="border-radius: 18px;background-color: #f4f4f4;border: none;">
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
                                    <select class="custom-select" style="border-radius: 18px;background-color: #f4f4f4;border: none;">
                                        <option selected>Choose...</option>
                                        <option value="1">300</option>
                                        <option value="2">400</option>
                                        <option value="3">500</option>
                                        <option value="4">600</option>
                                        <option value="5">700</option>
                                        <option value="6">800</option>
                                        <option value="7">900</option>
                                        <option value="8">1,000</option>
                                        <option value="9">2,000</option>
                                        <option value="10">3,000</option>
                                        <option value="11">4,000</option>
                                        <option value="12">5,000</option>
                                        <option value="13">10,000</option>
                                        <option value="14">15,000</option>
                                        <option value="15">20,000</option>
                                        <option value="16">25,000</option>
                                        <option value="17">30,000</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <br>

                        <div class="col-12">
                            <div class="text-center">
                                <button class="btn nextBtn col-3" type="button" style="background-color: #fbb040;color: #fff;border-radius: 25px;">ต่อไป</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


{{-----------------step3-----------------}}
            <div class="row setup-content" id="step-3">
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

                        <div class="row">
                            <div class="col-md-6">
                                <div class="box-checkboxx">
                                    <div class="box-checkListPosition">
                                        <label class="fillterCheck" style="font-size: 15px;">position_name
                                            <input type="checkbox">
                                            <span class="checkmark" style="width: 20px; height: 20px; text-align: center;"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 ">
                                <div class="box-moneylow" style="width:240px;">
                                    <select class="custom-select" style="border-radius: 18px;background-color: #f4f4f4;border: none;">
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
                                    <select class="custom-select" style="border-radius: 18px;background-color: #f4f4f4;border: none;">
                                        <option selected>Choose...</option>
                                        <option value="1">300</option>
                                        <option value="2">400</option>
                                        <option value="3">500</option>
                                        <option value="4">600</option>
                                        <option value="5">700</option>
                                        <option value="6">800</option>
                                        <option value="7">900</option>
                                        <option value="8">1,000</option>
                                        <option value="9">2,000</option>
                                        <option value="10">3,000</option>
                                        <option value="11">4,000</option>
                                        <option value="12">5,000</option>
                                        <option value="13">10,000</option>
                                        <option value="14">15,000</option>
                                        <option value="15">20,000</option>
                                        <option value="16">25,000</option>
                                        <option value="17">30,000</option>
                                    </select>
                                </div>
                            </div>
                        </div>

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

                        <div class="row">
                            <div class="col-md-6">
                                <div class="box-checkboxx">
                                    <div class="box-checkListPosition">
                                        <label class="fillterCheck" style="font-size: 15px;">position_name
                                            <input type="checkbox">
                                            <span class="checkmark" style="width: 20px; height: 20px; text-align: center;"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 ">
                                <div class="box-moneylow" style="width:240px;">
                                    <select class="custom-select" style="border-radius: 18px;background-color: #f4f4f4;border: none;">
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
                                    <select class="custom-select" style="border-radius: 18px;background-color: #f4f4f4;border: none;">
                                        <option selected>Choose...</option>
                                        <option value="1">300</option>
                                        <option value="2">400</option>
                                        <option value="3">500</option>
                                        <option value="4">600</option>
                                        <option value="5">700</option>
                                        <option value="6">800</option>
                                        <option value="7">900</option>
                                        <option value="8">1,000</option>
                                        <option value="9">2,000</option>
                                        <option value="10">3,000</option>
                                        <option value="11">4,000</option>
                                        <option value="12">5,000</option>
                                        <option value="13">10,000</option>
                                        <option value="14">15,000</option>
                                        <option value="15">20,000</option>
                                        <option value="16">25,000</option>
                                        <option value="17">30,000</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <br>

                        <div class="col-12">
                            <div class="text-center">
                                <button class="btn nextBtn col-3" type="button" style="background-color: #fbb040;color: #fff;border-radius: 25px;">ต่อไป</button>
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
                            <textarea type="text" name="lname" placeholder="กรอกรายละเอียดงานโดยรวมแบบสั้นๆ เช่น ต้องการคนมาช่วยเขียนบท เป็นงานถ่ายโฆษณาแบรนด์ดังจากเกาหลี วันเวลาคุยกันอีกทีครับ" style="width:100%;background-color: #f4f4f4;box-sizing: border-box;font-family: Kanit;border: none;padding: 20px;color: #000000;border-radius: 15px;font-size: 18px;" rows="5"></textarea>
                        </div>
                        <div class="col-12">
                            <h4 style="padding-top: 28px;">ภาพปกของงาน</h4>

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
    </script>


@endsection
