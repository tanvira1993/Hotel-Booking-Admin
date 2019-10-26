<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use Response;
use DB;
use Validator;

class DivisionController extends Controller
{
	public function saveAdmin (Request $request)
	{
		

		$rules = [
			'name' => 'required| min:3',
			'email' => 'required | email | unique:users,email',
			'phone' => 'required | numeric',
			'role' => 'required | numeric',
			'position' => 'required',
			'password' => 'required | min:2',
			'repass' => 'required | same:password',
			'project'=> 'required| numeric'

		];

		$messages = [
			'name.required' => 'Name is required!',
			'email.required' => 'Email is required!',
			'email.unique' => 'This Email already has taken.',
			'mobile.required' => 'Phone Number is required!',
			'role.required' => 'User Role is required!',
			'position.required' => 'Job Position is required!',
			'password.required'=> 'PassWord is required',
			'password.min' => 'password needs at least 2 character',
			'repass.required'=> 'ReEnter PassWord',
			'repass.same'=> 'PassWord Did not match',
			'project' =>'Project is required'

		];

		$validation = Validator::make($request->all(), $rules, $messages);

        // redirect on validation error
		if ($validation->fails()) {
			$errorMsgString = implode("<br/>",$validation->messages()->all());
			return Response::json(array('success' => false, 'heading' => 'Validation Error', 'message' => $errorMsgString), 400);
		}

		DB::beginTransaction();

		try {

			$user = new User;
			$user->name = $request->name;
			$user->email = $request->email;
			$user->phone = $request->phone;
			$user->position = $request->position;		
			$user->password = Hash::make($request->password);
			$user->id_user_roles= $request->role;
			$user->id_project=$request->project;


			if($user->save()){
				DB::commit();
				return Response::json(array('success' => TRUE, 'data' => $user), 200);
			}

			else{

				DB::rollback();
				return Response::json(array('success' => FALSE, 'heading' => 'Insertion Failed', 'message' => 'Admin could can not be created!'), 400);

			}

		}
		
		catch (\Exception $e) {
			echo $e;
			DB::rollback();
			return Response::json(array('success' => FALSE, 'heading' => 'Insertion Failed', 'message' => 'Admin could can not be created!'), 400);
		}
		

	}

	
	public function getAllUserId()
	{
		$usersList = User::select('users.*')->get();
		return Response::json(['success' => true, 'data' => $usersList], 200);
	}

}
