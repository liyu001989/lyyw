<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class UserTableSeeder extends Seeder {

    public function run()
    {
    	DB::table('users')->truncate();
        $num = 3;
        for($i = 0; $i<$num; $i++) {
            $data = [
                'name' => 'foo'.$i,
                'email' => "foo@bar{$i}.com",
                'password' => bcrypt('123456')
            ];

            User::create($data);
        }

        $this->call('MessageTableSeeder');
    }

}
