<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Message;

class MessageTableSeeder extends Seeder {

	public function run()
	{
        DB::table('messages')->truncate();
        $users = User::all();

        foreach($users as $user) {
        	$message = new message;
			$message->content = 'foobar';
			$message->user()->associate($user);
			$message->save();
        }
	}

}
