<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Divisions;
use Response;
use DB;
use Validator;

class DivisionController extends Controller
{
	public function createDivision (Request $request)
	{
		

		$rules = [
			'name' => 'required| min:3| unique:divisions,division_name',
			'info' => 'required',
			

		];

		$messages = [
			'name.required' => 'Name is required!',
			'info.required' =>'Info is required'

		];

		$validation = Validator::make($request->all(), $rules, $messages);

        // redirect on validation error
		if ($validation->fails()) {
			$errorMsgString = implode("<br/>",$validation->messages()->all());
			return Response::json(array('success' => false, 'heading' => 'Validation Error', 'message' => $errorMsgString), 400);
		}

		DB::beginTransaction();

		try {

			$division = new Divisions;
			$division->division_name = $request->name;
			$division->division_info = $request->info;
			


			if($division->save()){
				DB::commit();
				return Response::json(array('success' => TRUE, 'data' => $division), 200);
			}

			else{

				DB::rollback();
				return Response::json(array('success' => FALSE, 'heading' => 'Insertion Failed', 'message' => 'Divison could can not be created!'), 400);

			}

		}
		
		catch (\Exception $e) {
			
			DB::rollback();
			return Response::json(array('success' => FALSE, 'heading' => 'Insertion Failed', 'message' => 'Divison could can not be created!'), 400);
		}
		

	}

	
	

}
