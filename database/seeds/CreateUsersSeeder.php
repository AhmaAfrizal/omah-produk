<?php

use Illuminate\Database\Seeder;
use App\User;
use Carbon\Carbon;

class CreateUsersSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$user = [
			[
				'name'			=> 'Super Admin',
				'email'			=> 'superadmin@argiacyber.com',
				'is_superadmin'	=> '1',
				'email_verified_at' => Carbon::now(),
				'password'		=> bcrypt('123456'),
			],
			[
				'name'					=> 'Admin Verifikator',
				'email'					=> 'adminverifikator@argiacyber.com',
				'is_adminverifikator'	=> '1',
				'email_verified_at' => Carbon::now(),
				'password'				=> bcrypt('123456'),
			],
			[
				'name'					=> 'Admin Distributor',
				'email'					=> 'admindistributor@argiacyber.com',
				'is_admindistributor'	=> '1',
				'email_verified_at' => Carbon::now(),
				'password'				=> bcrypt('123456'),
			],
			[
				'name'		=> 'User login biasa',
				'email'		=> 'userbiasa@argiacyber.com',
				'email_verified_at' => Carbon::now(),
				'password'	=> bcrypt('123456'),
			],
		];
  
		foreach ($user as $key => $value) {
			User::create($value);
		}
	}
}
