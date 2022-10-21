<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Carbon\Carbon;

class UserController extends Controller
{
	public function index()
	{
		// $user = User::where('is_adminverifikator',1)->get();
		// return view('superadmin.Adminverivikator.index', compact('user'));
		$user = User::where([
            'is_superadmin' => 0,
            'is_adminverifikator' => 0,
            'is_admindistributor' => 0
        ])->get();
		return view('superadmin.User.index', compact('user'));
	}

	public function store(Request $request)
	{
		// $val = $request->validate([
		// 	'name' 		=> 'required', 'string', 'max:255',
        //     'email' 	=> 'required', 'string', 'email', 'max:255', 'unique:users',
        //     'password' 	=> 'required', 'string', 'min:8', 'confirmed',
		// ]);
		
		// $user = User::create($val);
		// $user->is_adminverifikator = '1';
		// $user->password = bcrypt($request->password);
		// $user->email_verified_at = Carbon::now();
		// $user->save();

		// return redirect()->back();
	}

	public function show($id)
	{
		//
	}

	public function edit($id)
	{
		// $user = User::find($id);
		// return view('superadmin.verifikator.edit', compact('user'));
	}

	public function update(Request $request, $id)
	{
		// $user = User::find($id);
		// $user->name = $request->name;
		// if(is_null($request->password)){
		// 	// 
		// }else{
		// 	$user->password = bcrypt($request->password);
		// }
		// $user->save();
		// return redirect()->route('superadmin.admin_verifikator.index');
	}

	public function destroy($id)
	{
		$user = User::find($id)->delete();
		return redirect()->back();

	}
}
