<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provinces')->truncate();
        DB::table('districts')->truncate();
        DB::table('wards')->truncate();
        DB::table('school_levels')->truncate();
        DB::table('majors')->truncate();

        $handle = fopen(database_path() . '/seeders/data/province.csv', 'r');
        $isHeader = false;
        while ($data = fgetcsv($handle)) {
            if ($isHeader) {
                $isHeader = false;
                continue;
            }
            DB::table('provinces')->insert(
                [
                    "id" => $data[0],
                    "name" => $data[1],
                    "code" => $data[2],
                ]
            );
        }

        $handle = fopen(database_path() . '/seeders/data/district.csv', 'r');
        $isHeader = false;
        while ($data = fgetcsv($handle)) {
            if ($isHeader) {
                $isHeader = false;
                continue;
            }
            DB::table('districts')->insert(
                [
                    "id" => $data[0],
                    "name" => $data[1],
                    "prefix" => $data[2],
                    "province_id" => $data[3],
                ]
            );
        }

        $handle = fopen(database_path() . '/seeders/data/ward.csv', 'r');
        $isHeader = false;
        while ($data = fgetcsv($handle)) {
            if ($isHeader) {
                $isHeader = false;
                continue;
            }
            DB::table('wards')->insert(
                [
                    "id" => $data[0],
                    "name" => $data[1],
                    "prefix" => $data[2],
                    "province_id" => $data[3],
                    "district_id" => $data[4],
                ]
            );
        }

        DB::table('school_levels')->insert(
            [
                [ "id" => 1, "name" => 'Đại học' ],
                [ "id" => 2, "name" => 'Cao đẳng' ],
                [ "id" => 3, "name" => 'Trung Cấp' ],
                [ "id" => 4, "name" => 'Trường Nghề' ],
                [ "id" => 5, "name" => 'THPT' ],
                [ "id" => 6, "name" => 'THCS' ],
                [ "id" => 7, "name" => 'Tiểu học' ],
                [ "id" => 8, "name" => 'Mầm non' ]
            ]
        );
        DB::table('majors')->insert(
            [
                [ "id" => 1, "name" => 'Ngành Dịch Vụ' ],
                [ "id" => 2, "name" => 'Ngành Quản Trị Kinh Doanh' ],
                [ "id" => 3, "name" => 'Ngành Khách Sạn - Nhà Hàng' ],
                [ "id" => 4, "name" => 'Ngành IT' ],
                [ "id" => 5, "name" => 'Ngành Du Lịch' ],
                [ "id" => 6, "name" => 'Ngành Cơ Khí' ],
                [ "id" => 7, "name" => 'Ngành Kỹ Thuật' ],
                [ "id" => 8, "name" => 'Ngành Tài chính - Ngân hàng' ],
                [ "id" => 9, "name" => 'Ngành CSKH' ]
            ]
        );
    }
}
