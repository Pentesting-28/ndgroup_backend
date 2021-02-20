<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		/*UserAdmin*/
        $userAdmin = User::where('email','admin@admin.com')->first();

        if($userAdmin){$userAdmin->delete();}

        $userAdmin = User::create([
	        'name' => 'admin',
	        'email' => 'admin@admin.com',
            'email_verified_at' => now(),
	        'password' => Hash::make('Admin123')
        ]);
    }
}
