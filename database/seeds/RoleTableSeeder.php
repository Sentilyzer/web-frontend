<?php

use Illuminate\Database\Seeder;
use Sentilyzer\Role;

class RoleTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(
            array(
                'name' => 'Super User'
            ),
            array(
                'name' => 'Project Admin'
            )
        );
    }

}
