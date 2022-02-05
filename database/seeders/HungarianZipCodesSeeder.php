<?php

use Illuminate\Database\Seeder;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;

class HungarianZipCodesSeeder extends Seeder
{
    /** @var string */
    private $file = __DIR__ . '../external/Iranyitoszam-Internet_uj.json';

    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->getFileContent() as $key => $data) {
            if ($key === 'Települések') {
                DB::table(Config::get('hungarian_zip_codes.table_name'))->updateOrInsert(
                    ['zip_code' => $data['IRSZ']],
                    [
                        'zip_code' => $data['IRSZ'],
                        'city' => $data['Település'],
                    ]);
            }
            if ($key === 'Bp.u.') {
                DB::table(Config::get('hungarian_zip_codes.table_name'))->updateOrInsert(
                    ['zip_code' => $data['IRSZ']],
                    [
                        'zip_code' => $data['IRSZ'],
                        'city' => 'Budapest',
                        'district' => $data['KER']
                    ]);
            }
            if ($key === 'Miskolc u.') {
                DB::table(Config::get('hungarian_zip_codes.table_name'))->updateOrInsert(
                    ['zip_code' => $data['IRSZ']],
                    [
                        'zip_code' => $data['IRSZ'],
                        'city' => 'Miskolc',
                    ]);
            }
            if ($key === 'Debrecen u.') {
                DB::table(Config::get('hungarian_zip_codes.table_name'))->updateOrInsert(
                    ['zip_code' => $data['IRSZ']],
                    [
                        'zip_code' => $data['IRSZ'],
                        'city' => 'Debrecen',
                    ]);
            }
            if ($key === 'Szeged u.') {
                DB::table(Config::get('hungarian_zip_codes.table_name'))->updateOrInsert(
                    ['zip_code' => $data['IRSZ']],
                    [
                        'zip_code' => $data['IRSZ'],
                        'city' => 'Szeged',
                    ]);
            }
            if ($key === 'Pécs u.') {
                DB::table(Config::get('hungarian_zip_codes.table_name'))->updateOrInsert(
                    ['zip_code' => $data['IRSZ']],
                    [
                        'zip_code' => $data['IRSZ'],
                        'city' => 'Szeged',
                    ]);
            }
            if ($key === 'Győr u.') {
                DB::table(Config::get('hungarian_zip_codes.table_name'))->updateOrInsert(
                    ['zip_code' => $data['IRSZ']],
                    [
                        'zip_code' => $data['IRSZ'],
                        'city' => 'Győr',
                    ]);
            }
        }
    }

    private function getFileContent()
    {
        return File::get($this->file);
    }
}
