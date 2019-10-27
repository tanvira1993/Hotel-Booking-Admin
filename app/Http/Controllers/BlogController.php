<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Blogs;
use Response;
use DB;
use Validator;

class BlogController extends Controller
{
	public function createBlog (Request $request)
	{
		

		$rules = [
			'title' => 'required| min:5| unique:blogs,blog_title',
			'divisionId' => 'required | numeric',
			'districtId' => 'required | numeric',
			'author' => 'required',
			'summary' => 'required',
			'mainbody' => 'required',
		];

		$messages = [
			'title.required' => 'Blog tittle is required!',
			'title.unique' => ' Tittle is already taken!',
			'districtId.required' => 'District is required!',
			'divisionId.required' => 'Division is required!',
			'author.required' => 'Author name is required!',
			'summary.required' => 'Summary is required!',
			'mainbody.required' => 'Blog body is required!'

		];

		$validation = Validator::make($request->all(), $rules, $messages);

        // redirect on validation error
		if ($validation->fails()) {
			$errorMsgString = implode("<br/>",$validation->messages()->all());
			return Response::json(array('success' => false, 'heading' => 'Validation Error', 'message' => $errorMsgString), 400);
		}


		DB::beginTransaction();

		try {

			$blog = new Blogs;
			$blog->district_id = $request->districtId;
			$blog->division_id = $request->divisionId;
			$blog->blog_title = $request->title;
			$blog->author = $request->author;		
			$blog->blog_summary = $request->summary;
			$blog->blog_body = $request->mainbody;
			$blog->user_id = $request->header('idUser');


			if($blog->save()){
				DB::commit();
				return Response::json(array('success' => TRUE, 'data' => $blog), 200);
			}

			else{

				DB::rollback();
				return Response::json(array('success' => FALSE, 'heading' => 'Insertion Failed', 'message' => 'Blog could can not be created!'), 400);

			}

		}
		
		catch (\Exception $e) {
			//echo $e;
			DB::rollback();
			return Response::json(array('success' => FALSE, 'heading' => 'Insertion Failed', 'message' => 'Blog could can not be created!'), 400);
		}
		
}

public function getAllBlogs(){

		$blogList = Blogs::select('blogs.*')->get();
		return Response::json(['success' => true, 'data' => $blogList], 200);
	}
	
}
