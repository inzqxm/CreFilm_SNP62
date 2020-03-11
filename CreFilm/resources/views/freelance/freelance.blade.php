@extends('layouts.app')
@section('content')

    <div class="container" style="font-family: Kanit;">
        <div class="row">
            <div class="col-6">
                <div class="box-headPage">
                    <p class="text-left">รวมคนหางาน</p>
                </div>
            </div><!-- col 1 -->
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
                    @foreach ($users as $user)
                        @if($user->name != 'admin')
                            <div class="col-md-4 col-6">
                        <div class="boxProfileAllPage">
                            <div class="boxImgProfileAll">
                                <img src="uploads/img_profile/default-avatar.jpg" width="250px">
                            </div><!-- box-teammer -->
                            <div class="boxViewProfileAll">
                                <a href="/profile/{{$user->id}}" class="btn btn-primary"><i class="fas fa-chevron-right"></i></a>
                            </div>
                            <div class="boxTextProfileAll">
                                <h4>{{$user->name}}</h4>
                                <p class="d-none d-md-block">ความสามารถ :</p>
                                <a href="#"><button style="width: 64px; height: 25px; border-radius: 15px; border: solid 1px #ffffff; background-color: #000000; font-size: 13px; text-align: center; color: #ffffff; font-weight: lighter;">ช่างภาพ</button></a>
                                <a href="#"><button style="width: 50px; height: 25px; border-radius: 15px; border: solid 1px #ffffff; background-color: #000000; font-size: 13px; text-align: center; color: #ffffff; font-weight: lighter;">อีก 3</button></a>
                            </div>
                        </div>
                    </div><!-- col-4 -->
                        @endif
                    @endforeach
                </div><!-- row -->
            </div><!-- col-9 -->


        </div><!-- row -->


    </div><!-- container -->






@endsection
