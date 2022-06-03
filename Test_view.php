<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 550px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #dddddd;
      height: 750px;
    }
        
    /* On small screens, set height to 'auto' for the grid */
    @media screen and (max-width: 767px) {
      .row.content {height: auto;} 
    }
	div.container-fluid{
		margin-top:0px;
	}
	li  a{
		border-bottom:2px solid silver;
		}
  </style>
</head>
<body style="background-color:#f1f1f1">
<?php include('header.php');?>
<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-2 sidenav hidden-xs">
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="<?php echo base_url('login/home')?>"> <span class="glyphicon glyphicon-home"></span> Navigation Homepage</a></li>
        <li><a href="#section2"><span class="glyphicon glyphicon-pencil"></span> UPLOAD TITLES</a></li>
        <li><a href="#section2"><span class="glyphicon glyphicon-file"></span> UPLOAD PROPOSAL</a></li>
        <li><a href="#section2"><span class="glyphicon glyphicon-folder-open"> TITLES</a></li>
        <li><a href="#section3"><span class="glyphicon glyphicon-folder-open"></span> PROPOSAL</a></li>
        <li><a href="<?php echo base_url('welcome/index')?>"><span class="glyphicon glyphicon-th-list"></span> SUPERVISORS LIST</a></li>
        <li><a href="<?php echo base_url('welcome/student_list_Edu')?>"><span class="glyphicon glyphicon-user"></span>MANAGE STUDENTS</a></li>
<li><a href="<?php echo base_url('welcome/allocate_edu');?>"><span class="glyphicon glyphicon-user"></span>ALLOCATE STUDENT</a></li>
            <li><a href="<?php echo base_url('login/logout')?>"> <span class="glyphicon glyphicon-log-out"></span> LOG OUT</a></li>
	</ul><br>
    </div>
    
    <div class="col-sm-9">
      <div class="well">
	  
        <div class="alert alert-success">
	          <h4 style="text-color:white;text-transform:uppercase">WELCOME: <?php echo $this->session->userdata('first_name');?><?php echo " ";?><?php echo $this->session->userdata('last_name');?></h4>
        <h4 style="text-color:white;text-transform:uppercase"><?php echo $this->session->userdata('position');?><?php echo " ";?></h4>
		</div>
		<?php
if($this->session->flashdata('success'))
{
	echo $this->session->flashdata('success');
}
?><?php include('ajax.php');?>
	  </div>
    </div>
	<div class="col-sm-9">
      <div class="well">
       <div class="container">    

<div class="col-md-9">
<div class="panel panel-default">
<div class="panel panel-heading main-color-bg alert alert-info">
<center><h4 class="panel-title">RMIS OVERVIEW SUMMARY</h4></center>
</div>
<div class="panel-body">
<div class="col-md-3">
<div class="well dash-box">
<h2 style="font-family:aria"><span class="glyphicon glyphicon-user" aria-hidden="true"></span><br><?php echo $results;?></h2>
<h4 style="font-family:aria"> Allocated student</h2>
</div>
</div>
<div class="col-md-3">
<div class="well dash-box">
<h2 style="font-family:aria"><span class="glyphicon glyphicon-user" aria-hidden="true"></span><br><?php echo $result;?></h2>
<h4 style="font-family:aria">Registered supervisors</h2>
</div>
</div>
<div class="col-md-3">
<div class="well dash-box">
<h2 style="font-family:aria"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span><br><?php echo $result1;?></h2>
<h4 style="font-family:aria"> Submitted titles</h2>
</div>
</div>
<div class="col-md-3">
<div class="well dash-box">
<h2 style="font-family:aria"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span><br>0</h2>
<h4 style="font-family:Times New Roman"> Submitted proposal</h2>
</div>
</div>

</div>
</div>
</div>
</div>
</div>
    </div>
	
  </div>
</div>
<?php include('footer.php');?>

</body>
</html>