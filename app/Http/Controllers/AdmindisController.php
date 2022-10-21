<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Carbon\Carbon;

class AdminverifikatorController extends Controller
{
	public function index()
	{
		$user = User::where('is_admindistributor',1)->get();
		return view('superadmin.distributor.index', compact('user'));
	}

	public function store(Request $request)
	{
		$val = $request->validate([
			'name' 		=> 'required', 'string', 'max:255',
            'email' 	=> 'required', 'string', 'email', 'max:255', 'unique:users',
            'password' 	=> 'required', 'string', 'min:8', 'confirmed',
		]);
		
		$user = User::create($val);
		$user->is_admindistributor = '1';
		$user->password = bcrypt($request->password);
		$user->email_verified_at = Carbon::now();
		$user->save();

		return redirect()->back();
	}

	public function show($id)
	{
		//
	}

	public function edit($id)
	{
		$user = User::find($id);
		return view('superadmin.distributor.edit', compact('user'));
	}

	public function update(Request $request, $id)
	{
		$user = User::find($id);
		$user->name = $request->name;
		if(is_null($request->password)){
			// 
		}else{
			$user->password = bcrypt($request->password);
		}
		$user->save();
		return redirect()->route('superadmin.admin_dis.index');
	}

	public function destroy($id)
	{
		$user = User::find($id)->delete();
		return redirect()->back();

	}
}
