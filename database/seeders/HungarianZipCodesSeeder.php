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
        foreach ($this->getFileContent() as $key => $settlements) {
            if ($key === 'Települések') {
                foreach ($settlements as $settlement) {
                    if(isset($settlement['Településrész'])) {
                        $settlementsArray = [
                            'settlement' => $settlement['Településrész'],
                            'parent_settlement' => $settlement['Település'],
                        ];
                    } else {
                        $settlementsArray = [
                            'settlement' => $settlement['Település'],
                        ];
                    }
                    DB::table(Config::get('hungarian-zip-codes.table_name'))->updateOrInsert(
                        ['zip_code' => $settlement['IRSZ']],
                        $settlementsArray
                    );
                }
            }
            if ($key === 'Bp.u.') {
                foreach ($settlements as $settlement) {
                    DB::table(Config::get('hungarian-zip-codes.table_name'))->updateOrInsert(
                        ['zip_code' => $settlement['IRSZ']],
                        [
                            'zip_code' => $settlement['IRSZ'],
                            'settlement' => 'Budapest',
                            'district' => $settlement['KER']
                        ]);
                }
            }
            if ($key === 'Miskolc u.') {
                foreach ($settlements as $settlement) {
                    DB::table(Config::get('hungarian-zip-codes.table_name'))->updateOrInsert(
                        ['zip_code' => $settlement['IRSZ']],
                        [
                            'zip_code' => $settlement['IRSZ'],
                            'settlement' => 'Miskolc',
                        ]);
                }
            }
            if ($key === 'Debrecen u.') {
                foreach ($settlements as $settlement) {
                    DB::table(Config::get('hungarian-zip-codes.table_name'))->updateOrInsert(
                        ['zip_code' => $settlement['IRSZ']],
                        [
                            'zip_code' => $settlement['IRSZ'],
                            'settlement' => 'Debrecen',
                        ]);
                }
            }
            if ($key === 'Szeged u.') {
                foreach ($settlements as $settlement) {
                    DB::table(Config::get('hungarian-zip-codes.table_name'))->updateOrInsert(
                        ['zip_code' => $settlement['IRSZ.']],
                        [
                            'zip_code' => $settlement['IRSZ.'],
                            'settlement' => 'Szeged',
                        ]);
                }
            }
            if ($key === 'Pécs u.') {
                foreach ($settlements as $settlement) {
                    DB::table(Config::get('hungarian-zip-codes.table_name'))->updateOrInsert(
                        ['zip_code' => $settlement['IRSZ.']],
                        [
                            'zip_code' => $settlement['IRSZ.'],
                            'settlement' => 'Szeged',
                        ]);
                }
            }
            if ($key === 'Győr u.') {
                foreach ($settlements as $settlement) {
                    DB::table(Config::get('hungarian-zip-codes.table_name'))->updateOrInsert(
                        ['zip_code' => $settlement['IRSZ']],
                        [
                            'zip_code' => $settlement['IRSZ'],
                            'settlement' => 'Győr',
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
