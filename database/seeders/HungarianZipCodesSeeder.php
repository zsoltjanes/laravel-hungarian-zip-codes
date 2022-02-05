<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

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
                foreach ($data as $record) {
                    DB::table(Config::get('hungarian-zip-codes.table_name'))->updateOrInsert(
                        ['zip_code' => $record['IRSZ']],
                        [
                            'zip_code' => $record['IRSZ'],
                            'city' => $record['Település'],
                        ]);
                }
            }
            if ($key === 'Bp.u.') {
                foreach ($data as $record) {
                    DB::table(Config::get('hungarian-zip-codes.table_name'))->updateOrInsert(
                        ['zip_code' => $record['IRSZ']],
                        [
                            'zip_code' => $record['IRSZ'],
                            'city' => 'Budapest',
                            'district' => $record['KER']
                        ]);
                }
            }
            if ($key === 'Miskolc u.') {
                foreach ($data as $record) {
                    DB::table(Config::get('hungarian-zip-codes.table_name'))->updateOrInsert(
                        ['zip_code' => $record['IRSZ']],
                        [
                            'zip_code' => $record['IRSZ'],
                            'city' => 'Miskolc',
                        ]);
                }
            }
            if ($key === 'Debrecen u.') {
                foreach ($data as $record) {
                    DB::table(Config::get('hungarian-zip-codes.table_name'))->updateOrInsert(
                        ['zip_code' => $record['IRSZ']],
                        [
                            'zip_code' => $record['IRSZ'],
                            'city' => 'Debrecen',
                        ]);
                }
            }
            if ($key === 'Szeged u.') {
                foreach ($data as $record) {
                    DB::table(Config::get('hungarian-zip-codes.table_name'))->updateOrInsert(
                        ['zip_code' => $record['IRSZ.']],
                        [
                            'zip_code' => $record['IRSZ.'],
                            'city' => 'Szeged',
                        ]);
                }
            }
            if ($key === 'Pécs u.') {
                foreach ($data as $record) {
                    DB::table(Config::get('hungarian-zip-codes.table_name'))->updateOrInsert(
                        ['zip_code' => $record['IRSZ.']],
                        [
                            'zip_code' => $record['IRSZ.'],
                            'city' => 'Szeged',
                        ]);
                }
            }
            if ($key === 'Győr u.') {
                foreach ($data as $record) {
                    DB::table(Config::get('hungarian-zip-codes.table_name'))->updateOrInsert(
                        ['zip_code' => $record['IRSZ']],
                        [
                            'zip_code' => $record['IRSZ'],
                            'city' => 'Győr',
                        ]);
                }
            }
        }
    }

    /**
     * Get the Json file content as json
     *
     * @return string
     */
    private function getFileContent()
    {
        return json_decode(File::get($this->file), true);
    }
}
