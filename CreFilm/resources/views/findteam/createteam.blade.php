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
                            <h3>ชื่อหัวข้องาน</h3>
                            <input type="text" name="fname" placeholder="กรอกชื่อหัวข้องานที่ทำ เช่น ชื่องานที่ลงประกวด, งานหนังสั้นนักศึกษา มหาวิทยาลัย" style="width:100%;height: 50px;background-color: #f4f4f4;box-sizing: border-box;font-family: Kanit;border: none;padding: 20px;color: #000000;border-radius: 15px;font-size: 18px;" />
                        </div>
                        <div class="col-12">
                            <h3 style="padding-top: 28px;">สถานะของงาน</h3>
                            <input type="text" name="lname" placeholder="กรอกสถานะสั้นๆ เช่น ด่วนมาก, สายลุย, ไม่เก่งก็ทำได้" style="width:100%;height: 50px;background-color: #f4f4f4;box-sizing: border-box;font-family: Kanit;border: none;padding: 15px;color: #000000;border-radius: 20px;font-size: 18px;" />
                        </div>
{{--                        <div class="form-group">--}}
{{--                            <label class="control-label">Email</label>--}}
{{--                            <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Email" />--}}
{{--                        </div>--}}
                        <div class="col-12">
                            <h3 style="padding-top: 28px;">รายละเอียดงานโดยรวม</h3>
                            <textarea type="text" name="lname" placeholder="กรอกรายละเอียดงานโดยรวมแบบสั้นๆ เช่น ต้องการคนมาช่วยเขียนบท เป็นงานถ่ายโฆษณาแบรนด์ดังจากเกาหลี วันเวลาคุยกันอีกทีครับ" style="width:100%;background-color: #f4f4f4;box-sizing: border-box;font-family: Kanit;border: none;padding: 20px;color: #000000;border-radius: 15px;font-size: 18px;" rows="5"></textarea>
                        </div>
                        <div class="col-12">
                            <h3 style="padding-top: 28px;">กำหนดวันเริ่ม/จบ Project</h3>
                            <div class="col-1 boxTextCreatH4">
                                <h4>เริ่ม</h4>
                            </div>
                            <div id="datepick" class="col-4 input-group date" data-provide="datepicker">
                                <input type="text" class="form-control">
                                <div class="input-group-addon">
                                    <span class="glyphicon glyphicon-th"></span>
                                </div>
                            </div>
                            <div class="col-1 boxTextCreatH4">
                                <h4>จบ</h4>
                            </div>
                            <div id="datepick" class="col-4 input-group date" data-provide="datepicker">
                                <input type="text" class="form-control">
                                <div class="input-group-addon">
                                    <span class="glyphicon glyphicon-th"></span>
                                </div>
                            </div>
                        </div>



                        <br><br>

                        <div class="col-12">
                            <div class="text-center">
                                <button class="btn nextBtn btn-lg col-3" type="button" style="background-color: #fbb040;color: #fff;border-radius: 25px;">Next</button>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

{{--            -------------------step2-------------------}}
            <div class="row setup-content" id="step-2">
                <div class="col-xs-6 col-md-offset-3">
                    <div class="col-md-12">
                        <h2 style="padding-top: 28px;">รายละเอียดงานโดยรวม</h2>
                        <div class="form-group">
                            <label class="control-label">Company Name</label>
                            <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Company Name" />
                        </div>
                        <div class="form-group">
                            <label class="control-label">Company Address</label>
                            <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Company Address"  />
                        </div>


                        <div class="col-12">
                            <div class="text-center">
                                <button class="btn nextBtn col-3" type="button" style="background-color: #fbb040;color: #fff;border-radius: 25px;">Next</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row setup-content" id="step-3">
                <div class="col-xs-6 col-md-offset-3">
                    <div class="col-md-12">
                        <h3> Step 3</h3>
                        <button class="btn btn-success btn-lg pull-right" type="submit">Submit</button>
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
