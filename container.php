<!--[ /.container main]-->
<div class="container-fluid p_top">
<!-- [ Post Body ] -->
<div class="container-fluid m-t-10">
	<div class="row">
	
		<!-- [ row-1 ] -->
		<div class="col-md-3">
		<div class="row">
		
			<!-- cards -->
			<div class="col-md-12">
				<div class="panel panel-default panel-fill">
					<div class="panel-heading"> 
						<h3 class="panel-title">Personal Information</h3> 
					</div>
					<div class="panel-body">
							Panel content
					</div>
				</div>
			</div>
			
			<div class="col-md-12">
				<div class="panel panel-default panel-fill">
				<div class="panel-heading"> 
					<h3 class="panel-title">Personal Information</h3> 
				</div>
					<div class="panel-body">
						Panel content
					</div>
				</div>
			</div>
		
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body">
						Panel content
					</div>
				</div>
			</div>
		
		</div>
		</div>
		<!-- [ /. row-1 ] -->
		
		<!-- [ row-2 ] -->
		<div class="col-md-6">
		<div class="row">
		
			<!-- [ cards ] -->
			
			<div class="col-md-12">
				<div class="panel panel-default panel-fill" >
					<!-- BEGIN Portlet PORTLET-->
				<div class="portlet p-t-10"  style="margin-bottom:0px; padding-bottom:0px;">
					<div class="portlet-title">
						<div class="caption caption-purple">
							<a href="" style="padding: 10px;" class="p-0 dropdown-toggle dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					                    <img src="./img/user_profile/0001.jpg" class="img-circle post-usr-pic">
							</a>
							<i class="glyphicon glyphicon-pushpin"></i>
							<span class="caption-subject bold font-yellow-crusta uppercase">
							Tabs 
							</span>
							<span class="caption-helper">more samples...</span>
						</div>
					</div>
					<div class="portlet-body">
						<div class="tab-content">
							<div class="tab-pane active" id="portlet_tab1">
								<form class="form" role="form" method="post" action="" accept-charset="UTF-8" id="login-nav" >
									<input type="text" class="form-control m-b-10" name="user_post" placeholder="Share your art" required="" style="height:100px">
								</form>
							</div>
							<div class="tab-pane" id="portlet_tab2">
								<form class="form" role="form" method="post" action="" accept-charset="UTF-8" id="login-nav" >
									<input type="text" class="form-control m-b-10" name="user_post" placeholder="Share your art" required="" style="height:100px">
								</form>
							</div>
							<div class="tab-pane" id="portlet_tab3">
								<form class="form" role="form" method="post" action="" accept-charset="UTF-8" id="login-nav" >
									<input type="text" class="form-control m-b-10" name="user_post" placeholder="Share your art" required="" style="height:100px">
								</form>
								</div>
						</div>
					</div>
					<div class="portlet-title" style="margin-bottom:0px">
						<div class="caption ">
							<a class="btn waves-effect waves-light" type="submit">Log In</a>
							<a class="btn waves-effect waves-light" type="submit">Log In</a>
						</div>
						<ul class="nav nav-tabs">
							<li>
								<a href="#portlet_tab3" data-toggle="tab">
								Tab 3 </a>
							</li>
							<li>
								<a href="#portlet_tab2" data-toggle="tab">
								Tab 2 </a>
							</li>
							<li class="active">
								<a href="#portlet_tab1" data-toggle="tab">
								Tab 1 </a>
							</li>
						</ul>
					</div>
				</div>
				<!-- END Portlet PORTLET-->
				</div>
			</div>
			
			<div class="col-md-12">
				<div class="panel panel-default panel-fill" data-toggle="modal" data-target="#myModal">
					<div class="panel-heading"> 
						<h3 class="panel-title">Post #1</h3> 
					</div>
					<div class="panel-body">
							Panel content
					</div>
				</div>
			        <!-- [ Modal - card-expanded ]-->
				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					  <h4 class="modal-title" id="myModalLabel">Modal title</h4>
				      </div>
				      <div class="modal-body">
				        <?php
					echo "UserName : ".$_SESSION['UserName'] . "</br>";				
					echo "UserEmail : ".$_SESSION['UserEmail'] . "</br>";
					echo "UserContact : ".$_SESSION['UserContact'] . "</br>";
					echo "UserCity : ".$_SESSION['UserCity'] . "</br>";
					echo "UserClass : ".$_SESSION['UserClass'] . "</br>"; 
					echo "testVar : ".$_SESSION['testVar'] . "</br>";
					?>
				      </div>
				      <div class="modal-footer">
				        <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				        <button type="button" class="btn btn-primary">Save changes</button>-->
				      </div>
				    </div>
				  </div>
				 </div>
				<!-- [ /. Modal - card-expanded ]-->
			</div>
		
			<div class="col-md-12">
				<div class="panel panel-default panel-fill">
					<div class="panel-heading"> 
						<h3 class="panel-title">Post #2 <small>Ayuit Biu</small></h3> 
					</div>
					<div class="about-info-p">
					<div class="panel-body">
						<strong>Full Name</strong>
						<p class="text-muted">Panel content</p>
					</div>
					</div>
				</div>
			</div>
			<!-- [ /. cards ] -->
		</div>
		</div>
		<!-- [ /. row-2] -->
		
		<!-- [ row-3 ] -->
		<div class="col-md-3">
		<div class="row">
		
			<!-- [ cards ] -->
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading"> 
						 <h3 class="panel-title">Post #2 <small>Ayuit Biu</small></h3> 
					</div>
					<div class="panel-body">
						Panel content
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body">
						Panel content
					</div>
				</div>
			</div>
			<!-- [ /. cards ] -->
		</div>
		</div>
		<!-- [ /. row-3 ] -->
	</div>
</div>
<!-- [ /. Post Body ] -->