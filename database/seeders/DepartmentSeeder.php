<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collect(['Teknik', 'Matematika & Ilmu Pengatahuan Alam', 'Hukum', 'Ilmu Pertanian',])
            ->each(function ($dept) {
                Department::create(['name' => $dept]);
            });
    }
}
