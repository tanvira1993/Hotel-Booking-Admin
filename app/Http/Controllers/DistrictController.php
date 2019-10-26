<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Districts;
use Response;
use DB;
use Validator;

class DistrictController extends Controller
{
	public function createDistrict (Request $request)
	{
		$rules = [
			'info' => 'required| min:3',
			'name' => 'required | min:3 | unique:districts,district_name',
			'divisionId' => 'required | numeric',
		];

		$messages = [
			'name.required' => 'Name is required!',
			'info.required' => 'Info is required!',
			'name.unique' => 'This name already has taken.',
			'divisionId.required' => 'Division is required!',
			

		];

		$validation = Validator::make($request->all(), $rules, $messages);

        // redirect on validation error
		if ($validation->fails()) {
			$errorMsgString = implode("<br/>",$validation->messages()->all());
			return Response::json(array('success' => false, 'heading' => 'Validation Error', 'message' => $errorMsgString), 400);
		}

		DB::beginTransaction();

		try {

			$district = new Districts;
			$district->district_name = $request->name;
			$district->district_summary = $request->info;
			$district->division_id = $request->divisionId;
			
			if($district->save()){
				DB::commit();
				return Response::json(array('success' => TRUE, 'data' => $district), 200);
			}

			else{

				DB::rollback();
				return Response::json(array('success' => FALSE, 'heading' => 'Insertion Failed', 'message' => 'District could can not be created!'), 400);

			}
		}
		catch (\Exception $e) {
			//echo $e;
			DB::rollback();
			return Response::json(array('success' => FALSE, 'heading' => 'Insertion Failed', 'message' => 'District could can not be created!'), 400);
		}
		

	}

	public function getAllDistricts(){

		$districtList = Districts::select('districts.*')->get();
		return Response::json(['success' => true, 'data' => $districtList], 200);
	}


}
