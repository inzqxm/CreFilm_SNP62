<?php

use Illuminate\Database\Seeder;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('positions')->insert([
            [
                "position_name" => "ผู้อำนวยการสร้าง - Producer",
                "type_id" => 1,
            ],[
                "position_name" => "ผู้กำกับ - Director",
                "type_id" => 1,
            ],[
                "position_name" => "ผู้เขียนบท - Screenwriter",
                "type_id" => 1,
            ],[
                "position_name" => "ผู้กำกับฝ่ายศิลป์ - Art Director",
                "type_id" => 1,
            ],[
                "position_name" => "ผู้กำกับนักแสดง - Casting Director",
                "type_id" => 1,
            ],[
                "position_name" => "ผู้จัดหาสถานที่ถ่ายทำ - Location Manager",
                "type_id" => 1,
            ],[
                "position_name" => "ผู้ออกแบบเครื่องแต่งกาย - Costume Designer",
                "type_id" => 1,
            ],[
                "position_name" => "ผู้ช่วยผู้กำกับ - Assistant Director",
                "type_id" => 2,
            ],[
                "position_name" => "ผู้กำกับภาพ - Director of Photography",
                "type_id" => 2,
            ],[
                "position_name" => "ผู้ปรับโฟกัสระยะถ่าย - Focus puller",
                "type_id" => 2,
            ],[
                "position_name" => "ผู้กำกับเสียง - Director of Audiography",
                "type_id" => 2,
            ],[
                "position_name" => "ผู้ควบคุมแสง - Gaffer",
                "type_id" => 2,
            ],[
                "position_name" => "ผู้แต่งหน้าและทำผม -  Make-up and Hair Designer",
                "type_id" => 2,
            ],[
                "position_name" => "นักแสดงหญิง - Actress",
                "type_id" => 2,
            ],[
                "position_name" => "นักแสดงชาย - Actor",
                "type_id" => 2,
            ],[
                "position_name" => "ผู้ดูแลอุปกรณ์ประกอบฉาก - Property Master",
                "type_id" => 2,
            ],[
                "position_name" => "ผู้ดูแลไมค์บูม - Boom Operator",
                "type_id" => 2,
            ],[
                "position_name" => "ผู้บันทึกเสียงและมิกซ์เสียง - Sound Mixer",
                "type_id" => 2,
            ],[
                "position_name" => "ช่างภาพเบื้องหลัง - Stills Photographer / Behind the scene photographer and videographer",
                "type_id" => 2,
            ],[
                "position_name" => "ผู้ตัดต่อลำดับภาพ - Editor",
                "type_id" => 3,
            ],[
                "position_name" => "ผู้ปรับแต่งสี - Colorist",
                "type_id" => 3,
            ],
        ]);
    }
}
