
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
						<select name="idUser" ng-model="resetPassInfo.idUser" class="form-control select2dropdown" style="width: 100%;">
							<option value="">Select User</option>
							<option ng-repeat="(key, value) in usersList" value="@{{value.user_id}}">@{{value.name}}</option>
						</select>
					</div>
					<!-- /.form-group -->
					<div class="form-group">
						<label>Blog Title</label>		

						<input type="text" class="form-control" id="password" name="password" ng-model="resetPassInfo.password" placeholder="Reset Password">

					</div>
					<!-- /.form-group -->
				</div>

				<!-- /.col -->
				<div class="col-md-6">
					<div class="form-group">
						<label>District</label>						
						<select name="idUser" ng-model="resetPassInfo.idUser" class="form-control select2dropdown" style="width: 100%;">
							<option value="">Select User</option>
							<option ng-repeat="(key, value) in usersList" value="@{{value.user_id}}">@{{value.name}}</option>
						</select>
					</div>
					<!-- /.form-group -->
					<div class="form-group">
						<label>Author</label>		

						<input type="text" class="form-control" id="password" name="password" ng-model="resetPassInfo.password" placeholder="Reset Password">

					</div>
					<!-- /.form-group -->
				</div>
				<!-- /.col -->
			</div>

		</form>
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
			<form>
				<textarea class="textarea" placeholder="Place some text here"
				style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
			</form>
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
			<form>
				<textarea class="textarea" placeholder="Place some text here"
				style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
			</form>
		</div>
	</div>
	<div >
		<button type="submit" ng-click="createForceResetPass()" class="btn btn-info pull-left"> Submit</button>
	</div>
</section>