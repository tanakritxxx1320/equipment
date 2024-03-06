<?php

namespace Database\Seeders;

use App\Models\type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = ['อาคารถาวร', 'อาคารชั่วครว', 'สิ่งก่อสร้างใช้คอนกรีตเสริมเหล็ก', 'สิ่งก่อสร้างใช้ไม้หรือวัสดุอื่นเป็นส่วนประกอบหลัก', 'ครุภัณฆ์สำนักงาน', 'ครุภัณฆ์โรงงาน', 'ครุภัณฆ์ก่อสร้าง', 'ครุภัณฆ์วิทยาศาสตร์และการแพทย์', 'คอมพิวเตอร์', 'ครุภัณฆ์', 'ครุภัณฆ์งานบ้านงานครัว', 'ครุภัณฆ์กีฬา', 'ครุภัณฆ์สนาม'];
        array_map(fn($type) => Type::insert(['type_name' => $type]), $types);
    }
}
