<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MainSeeder extends Seeder
{
    public function run()
    {
        $this->call('UsersSeeder');
        $this->call('MatkulSeeder');
        $this->call('DosenSeeder');
        $this->call('StafSeeder');
        $this->call('MahasiswaSeeder');
        $this->call('HistoryPerkuliahanSeeder');
    }
}
