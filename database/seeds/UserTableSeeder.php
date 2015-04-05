<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->where('id', '>', 1)->delete();
        User::create(['email' => 'foo@bar.com']);
        User::create(['email' => 'foo@bar1.com']);
        User::create(['email' => 'foo@bar2.com']);

        $this->call('MessageTableSeeder');
    }

}
