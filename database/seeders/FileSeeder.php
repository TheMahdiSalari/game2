<?php

namespace Database\Seeders;

use App\Models\File;
use Illuminate\Database\Seeder;

class FileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file_generate = new File();
        $file_generate->create([
            "name" => "img1.png",
            "file"  => "1653539786.png",
            "file_path" => "asset/image/phpChXn9K",
            "size" => "337626",
            "format" => "png",
            "dimension" => "1920 * 1080"
            ]);

        $file_generate->create([
            "name" => "img2.png",
            "file"  => "1653539792.png",
            "file_path" => "asset/image/phpez9iGV",
            "size" => "108181",
            "format" => "png",
            "dimension" => "1600 * 900"
        ]);

        $file_generate->create([
            "name" => "img3.png",
            "file"  => "1653539799.png",
            "file_path" => "asset/image/phpvkGFYG",
            "size" => "546741",
            "format" => "png",
            "dimension" => "1920 * 1200"
        ]);

        $file_generate->create([
            "name" => "img4.jpg",
            "file"  => "1653540581.jpg",
            "file_path" => "asset/image/phpQ8O3x4",
            "size" => "60900",
            "format" => "jpg",
            "dimension" => "2560 * 1600"
        ]);

        $file_generate->create([
            "name" => "img5.png",
            "file"  => "1653539814.png",
            "file_path" => "asset/image/phpGTFKd7",
            "size" => "365118",
            "format" => "png",
            "dimension" => "1600 * 1000 "
        ]);

        $file_generate->create([
            "name" => "img6.png",
            "file"  => "1653539820.png",
            "file_path" => "asset/image/php7CLikB",
            "size" => "117100",
            "format" => "png",
            "dimension" => "1440 * 900"
        ]);

        $file_generate->create([
            "name" => "img7.jpg",
            "file"  => "1653540589.jpg",
            "file_path" => "asset/image/phpYB44vv",
            "size" => "345281",
            "format" => "jpg",
            "dimension" => "2560 * 1440"
        ]);

        $file_generate->create([
            "name" => "img8.png",
            "file"  => "1653539870.png",
            "file_path" => "asset/image/phpAJPcA1",
            "size" => "1330000",
            "format" => "png",
            "dimension" => "3968 * 2976"
        ]);

        $file_generate->create([
            "name" => "img9.jpg",
            "file"  => "1653540597.jpg",
            "file_path" => "asset/image/phpTzFAhS",
            "size" => "29850",
            "format" => "jpg",
            "dimension" => "1920 * 1200"
        ]);

        $file_generate->create([
            "name" => "img10.jpg",
            "file"  => "1653540644.jpg",
            "file_path" => "asset/image/phpBfmXBQ",
            "size" => "861225",
            "format" => "jpg",
            "dimension" => "2560 * 1600"
        ]);
    }
}
