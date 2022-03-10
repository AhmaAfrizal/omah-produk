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
		return view('superadmin.verifikator.index');
	}

	public function store(Request $request)
	{
		$val = $request->validate([
			'name' 		=> 'required', 'string', 'max:255',
            'email' 	=> 'required', 'string', 'email', 'max:255', 'unique:users',
            'password' 	=> 'required', 'string', 'min:8', 'confirmed',
		]);
		
		$user = User::create($val);
		$user->is_adminverifikator = '1';
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
		//
	}

	public function update(Request $request, $id)
	{
		//
	}

	public function destroy($id)
	{
		//
	}
}
