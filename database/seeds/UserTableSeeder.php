<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->truncate();
        $num = 3;
        for ($i = 1; $i <= $num; $i++) {
            $data = [
                'name' => 'foo'.$i,
                'email' => "foo@bar{$i}.com",
                'password' => bcrypt('123456'),
            ];

            User::create($data);
        }

        $admin_data = [
            'name' => 'liyu',
            'email' => 'liyu001989@gmail.com',
            'password' => bcrypt('123456'),
        ];

        User::create($admin_data);

        $this->call('MessageTableSeeder');
    }
}
