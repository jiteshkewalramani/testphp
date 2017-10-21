<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>

<!-- tab css -->
/* Tabs panel */
.tabbable-panel {
  border:1px solid #eee;
  padding: 10px;
}

/* Default mode */
.tabbable-line > .nav-tabs {
  border: none;
  margin: 0px;
}
.tabbable-line > .nav-tabs > li {
  margin-right: 60px;
}
.tabbable-line > .nav-tabs > li > a {
  border: 0;
  margin-right: 0;
  color: #737373;
}
.tabbable-line > .nav-tabs > li > a > i {
  color: #a6a6a6;
}
.tabbable-line > .nav-tabs > li.open, .tabbable-line > .nav-tabs > li:hover {
  border-bottom: 4px solid #fbcdcf;
}
.tabbable-line > .nav-tabs > li.open > a, .tabbable-line > .nav-tabs > li:hover > a {
  border: 0;
  background: none !important;
  color: #333333;
}
.tabbable-line > .nav-tabs > li.open > a > i, .tabbable-line > .nav-tabs > li:hover > a > i {
  color: #a6a6a6;
}
.tabbable-line > .nav-tabs > li.open .dropdown-menu, .tabbable-line > .nav-tabs > li:hover .dropdown-menu {
  margin-top: 0px;
}
.tabbable-line > .nav-tabs > li.active {
  border-bottom: 4px solid #f3565d;
  position: relative;
}
.tabbable-line > .nav-tabs > li.active > a {
  border: 0;
  color: #333333;
}
.tabbable-line > .nav-tabs > li.active > a > i {
  color: #404040;
}
.tabbable-line > .tab-content {
  margin-top: -3px;
  background-color: #fff;
  border: 0;
  border-top: 1px solid #eee;
  padding: 15px 0;
}
.portlet .tabbable-line > .tab-content {
  padding-bottom: 0;
}

/* Below tabs mode */

.tabbable-line.tabs-below > .nav-tabs > li {
  border-top: 4px solid transparent;
}
.tabbable-line.tabs-below > .nav-tabs > li > a {
  margin-top: 0;
}
.tabbable-line.tabs-below > .nav-tabs > li:hover {
  border-bottom: 0;
  border-top: 4px solid #fbcdcf;
}
.tabbable-line.tabs-below > .nav-tabs > li.active {
  margin-bottom: -2px;
  border-bottom: 0;
  border-top: 4px solid #f3565d;
}
.tabbable-line.tabs-below > .tab-content {
  margin-top: -10px;
  border-top: 0;
  border-bottom: 1px solid #eee;
  padding-bottom: 15px;
}

<!-- profile css -->


body {
  background: #F1F3FA;
}

/* Profile container */
.profile {
  margin: 20px 0;
}

/* Profile sidebar */
.profile-sidebar {
  padding: 20px 0 10px 0;
  background: #fff;
}

.profile-userpic img {
  float: none;
  margin: 0 auto;
  width: 50%;
  height: 20%;
  -webkit-border-radius: 50% !important;
  -moz-border-radius: 50% !important;
  border-radius: 50% !important;
}

.profile-usertitle {
  text-align: center;
  margin-top: 20px;
}

.profile-usertitle-name {
  color: #5a7391;
  font-size: 16px;
  font-weight: 600;
  margin-bottom: 7px;
}

.profile-usertitle-job {
  text-transform: uppercase;
  color: #5b9bd1;
  font-size: 12px;
  font-weight: 600;
  margin-bottom: 15px;
}

.profile-userbuttons {
  text-align: center;
  margin-top: 10px;
}

.profile-userbuttons .btn {
  text-transform: uppercase;
  font-size: 11px;
  font-weight: 600;
  padding: 6px 15px;
  margin-right: 5px;
}

.profile-userbuttons .btn:last-child {
  margin-right: 0px;
}
    
.profile-usermenu {
  margin-top: 30px;
}

.profile-usermenu ul li {
  border-bottom: 1px solid #f0f4f7;
}

.profile-usermenu ul li:last-child {
  border-bottom: none;
}

.profile-usermenu ul li a {
  color: #93a3b5;
  font-size: 14px;
  font-weight: 400;
}

.profile-usermenu ul li a i {
  margin-right: 8px;
  font-size: 14px;
}

.profile-usermenu ul li a:hover {
  background-color: #fafcfd;
  color: #5b9bd1;
}

.profile-usermenu ul li.active {
  border-bottom: none;
}

.profile-usermenu ul li.active a {
  color: #5b9bd1;
  background-color: #f6f9fb;
  border-left: 2px solid #5b9bd1;
  margin-left: -2px;
}

/* Profile Content */
.profile-content {
  padding: 20px;
  background: #fff;
  min-height: 460px;
}
</style>


</head>

<body>
<nav class="navbar navbar-default navbar-fixed-header">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">LiveYourPassion</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     <!-- <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul> -->
      <form class="navbar-form navbar-right">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>



<div class="container">
    <div class="row">
		<div class="col-md-12">
		<div class="tabbable-panel">
				<div class="tabbable-line">
		<ul class="nav nav-tabs ">
						<li class="active">
							<div class="btn-group">
								<a href="#tab_default_1" data-toggle="tab" class="btn btn-inverse"><i class="glyphicon glyphicon-home"></i></a>
						</li>
						
						<li>
	<div class="btn-group">
		<a href="#tab_default_2" data-toggle="tab" class="btn btn-inverse"><i class="glyphicon glyphicon-search"></i></a>
						</li>
						<li>
	
	<div class="btn-group">
		<a href="#tab_default_3" data-toggle="tab" class="btn btn-inverse"> <i class="glyphicon glyphicon-user"></i></a>
					</li>
					</ul>
					
					<div class="tab-content">
						<div class="tab-pane active" id="tab_default_1">
							<h4>Anand Thoughts</h4>
							
							<p>
								Duis autem eum iriure dolor in hendrerit in vulputate velit esse molestie consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.
							</p>
							<p>
								
						<!-- like and share button -->
						<div class="btn-toolbar">
						  <div class="btn-group">
							  <a href="#" class="btn btn-inverse disabled"><i class="glyphicon glyphicon-thumbs-up"></i></a>
							  <a href="#" class="btn btn-inverse disabled"><i class="glyphicon glyphicon-heart"></i></a>
							  <a href="#" class="btn btn-inverse disabled"><i class="glyphicon glyphicon-share-alt"></i></a>
						  </div>
						  <div class="btn-group">
							  <a href="#" class="btn btn-inverse disabled"><i class="glyphicon glyphicon-trash"></i></a>
						  </div>
						</div>	
						</p>
					
						<!-- Content  -->
						<h4>Nirav Thoughts</h4>
							<p>
								Duis autem eum iriure dolor in hendrerit in vulputate velit esse molestie consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.
							</p>
							<p>
								
						<!-- like and share button -->
						<div class="btn-toolbar">
						  <div class="btn-group">
							  <a href="#" class="btn btn-inverse disabled"><i class="glyphicon glyphicon-thumbs-up"></i></a>
							  <a href="#" class="btn btn-inverse disabled"><i class="glyphicon glyphicon-heart"></i></a>
							  <a href="#" class="btn btn-inverse disabled"><i class="glyphicon glyphicon-share-alt"></i></a>
						  </div>
						  <div class="btn-group">
							  <a href="#" class="btn btn-inverse disabled"><i class="glyphicon glyphicon-trash"></i></a>
						  </div>
						</div>	
						</p>
					
					
						<!-- content -->
						<p>
				<div>
    <h4>Sanket thoughts</h4>
				<p>'You ought to be ashamed of yourself for asking such a simple question,' added the Gryphon; and then they both sat silent and looked at poor Alice, who felt ready to sink into the earth. At last the Gryphon said to the Mock Turtle, 'Drive on, old fellow! Don't be all day about it!' and he went on in these words:
				'Yes, we went to school in the sea, though you mayn't believe it—'
				'I never said I didn't!' interrupted Alice.
				'You did,' said the Mock Turtle.</p>
				<div>
					<span class="badge">Posted 2012-08-02 20:47:04</span><div class="pull-right"><span class="label label-default">alice</span> <span class="label label-primary">story</span> <span class="label label-success">blog</span> <span class="label label-info">personal</span> <span class="label label-warning">Warning</span>
					<span class="label label-danger">Danger</span></div>         
				</div>
				</div>
				
				</p> 
				<!-- content -->
				<br>
				<!-- Content  -->
						<h4>Jitesh Thoughts</h4>
							<p>
								Duis autem eum iriure dolor in hendrerit in vulputate velit esse molestie consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.
							</p>
							<p>
								
						<!-- like and share button -->
						<div class="btn-toolbar">
						  <div class="btn-group">
							  <a href="#" class="btn btn-inverse disabled"><i class="glyphicon glyphicon-thumbs-up"></i></a>
							  <a href="#" class="btn btn-inverse disabled"><i class="glyphicon glyphicon-heart"></i></a>
							  <a href="#" class="btn btn-inverse disabled"><i class="glyphicon glyphicon-share-alt"></i></a>
						  </div>
						  <div class="btn-group">
							  <a href="#" class="btn btn-inverse disabled"><i class="glyphicon glyphicon-trash"></i></a>
						  </div>
						</div>	
						</p>
					
					
						</div>
				<!-- below text will be part of 2nd tab -->								
						<div class="tab-pane" id="tab_default_2">
							<p>
								Howdy, I'm in Tab 2.
							</p>
							<p>
								Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation.
							</p>
							<p>
								<a class="btn btn-warning" href="#" target="_blank">
									Click for more features...
								</a>
							</p>
						</div>
						<div class="tab-pane" id="tab_default_3">
							<!--<p>
								Howdy, I'm in Tab 3.
							</p>
							<p>
								Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat
							</p>
							<p>
								<a class="btn btn-info" href="#" target="_blank">
									Learn more...
								</a>
							</p> -->
							<!--profile -->
							<span>
							<div class="row profile">
						<div class="col-md-3">
							<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
						<div class="profile-userpic">
					<img src="https://image.flaticon.com/icons/svg/219/219988.svg" class="img-responsive" alt="">
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						XXX XXXXXX
					</div>
					<div class="profile-usertitle-job">
						Developer
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				<div class="profile-userbuttons">
					<button type="button" class="btn btn-success btn-sm">Follow</button>
					<button type="button" class="btn btn-danger btn-sm">Message</button>
				</div>
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
						<li class="active">
							<a href="#">
							<i class="glyphicon glyphicon-home"></i>
							Overview </a>
						</li>
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-user"></i>
							Account Settings </a>
						</li>
						<li>
							<a href="#" target="_blank">
							<i class="glyphicon glyphicon-ok"></i>
							Tasks </a>
						</li>
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-flag"></i>
							Help </a>
						</li>
					</ul>
				</div>
				<!-- END MENU -->
							</span>
						</div>
					</div>
				</div>
			</div>

			<!--<h3>Below Tab</h3>-->
		<!--	
			<div class="tabbable-panel">
				<div class="tabbable-line tabs-below">
					<div class="tab-content">
						<div class="tab-pane active" id="tab_below_1">
							<p>
								I'm in Tab 1.
							</p>
							<p>
								Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.
							</p>
							<p>
								Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat dolor in hendrerit in vulputate velit esse molestie consequat.
							</p>
							<p>
								<a class="btn btn-warning" href="#" target="_blank">
									Learn more...
								</a>
							</p>
						</div>
						<div class="tab-pane" id="tab_below_2">
							<p>
								Howdy, I'm in Tab 2.
							</p>
							<p>
								Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.
							</p>
							<p>
								<a class="btn btn-danger" href="#" target="_blank">
									Learn more...
								</a>
							</p>
						</div>
						<div class="tab-pane" id="tab_below_3">
							<p>
								Howdy, I'm in Tab 3.
							</p>
							<p>
								Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate.
							</p>
							<p>
								<a class="btn btn-info" href="#" target="_blank">
									Learn more...
								</a>
							</p>
						</div>
					</div>
					<ul class="nav nav-tabs">
						<li class="active">
							<a href="#tab_below_1" data-toggle="tab">
							Tab 1 </a>
						</li>
						<li class="">
							<a href="#tab_below_2" data-toggle="tab">
							Tab 2 </a>
						</li>
						<li>
							<a href="#tab_below_3" data-toggle="tab">
							Tab 3 </a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<br>
<br>-->

<!-- <nav class="navbar navbar-default navbar-fixed-bottom">
  <div class="container-fluid"> -->
    <!-- Brand and toggle get grouped for better mobile display -->
   <!-- <div class="navbar-footer">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">LiveYourPassion</a>
    </div>
-->
</body>
</html>