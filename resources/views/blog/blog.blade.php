
<section class="content-header">
	<h1>
		Blog
		<small>Blog panel</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Blog</a></li>
		<li class="active">Dashboard</li>
	</ol>
</section>
<section class="content">

	<div class="box-body">
		<form id="Blog-form" name="BlogForm" novalidate>
			<div class="row">				
				<div class="col-md-6">
					<div class="form-group">
						<label>Division</label>						
						<select id="divisionId" name="divisionId" ng-model="blogInfo.divisionId" class="form-control select2dropdown" style="width: 100%;">
								<option value="">Select Division</option>
								<option ng-repeat="(key, value) in divisionList" value="@{{value.division_id}}">@{{value.division_name}}</option>
							</select>
					</div>
					<!-- /.form-group -->
					<div class="form-group">
						<label>Blog Title</label>		

						<input type="text" class="form-control" id="title" name="title" ng-model="blogInfo.title" placeholder="Blog Title ">

					</div>
					<!-- /.form-group -->
				</div>

				<!-- /.col -->
				<div class="col-md-6">
					<div class="form-group">
						<label>District</label>						
						<select id="districtId" name="districtId" ng-model="blogInfo.districtId" class="form-control select2dropdown" style="width: 100%;">
							<option value="">Select District</option>
							<option ng-repeat="(key, value) in districtList" value="@{{value.district_id}}">@{{value.district_name}}</option>
						</select>
					</div>
					<!-- /.form-group -->
					<div class="form-group">
						<label>Author</label>		

						<input type="text" class="form-control" id="author" name="author" ng-model="blogInfo.author" placeholder="Author Name">

					</div>
					<!-- /.form-group -->
				</div>
				<!-- /.col -->
			</div>

			
			<!-- /.row -->
		</div> 
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">Blog Summary
					<small>less than 500 words</small>
				</h3>
				<!-- tools box -->
				<div class="pull-right box-tools">

				</div>
				<!-- /. tools -->
			</div>
			<!-- /.box-header -->
			<div class="box-body pad">
				
				<textarea class="textarea" id="summary" name="summary" ng-model="blogInfo.summary" placeholder="Place some text here" 
				style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
				
			</div>
		</div>
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">Main Body
					<small>less than 3000 words</small>
				</h3>
				<!-- tools box -->
				<div class="pull-right box-tools">

				</div>
				<!-- /. tools -->
			</div>
			<!-- /.box-header -->
			<div class="box-body pad">
				
				<textarea class="textarea" id="mainbody" name="mainbody" ng-model="blogInfo.mainbody" placeholder="Place some text here"
				style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
				
			</div>
		</div>
		<div >
			<button type="submit" ng-click="createBlog()" class="btn btn-info pull-left"> Post</button>
		</div>
	</form>
	<pre>
		@{{blogInfo| json}}
	</pre>
</section>