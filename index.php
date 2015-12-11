<!DOCTYPE html>
<html>
	<head>
		<title> Analytics </title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/custom.css">

		<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
		<script type="text/javascript" src="js/angular.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/elevator.js"></script>
		<style>
			#elevator .table tr td:first-child{
				width:5px;
			}

			#elevator .table tr:nth-child(even){
				background-color:#777777;
				height:25px;
			}

			#elevator .table tr:nth-child(odd){
				height:100px;
			}
			.shaft{
				background-color: green;
				width: 100px;
				height:725px;
				position: relative;
			}
			.capsule{
				margin:5px;
				border:1px solid #ccc;
				height:100px;
				background-color:orange 
			}
		</style>
	</head>
	<body ng-app="loginApp">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-lg-6 col-xs-6">
					<div class="shaft pull-right">
						<div class="capsule"></div>
					</div>
				</div>
				<div class="col-sm-6 col-lg-6 col-xs-6">
					<div id="elevator">
						<table class="table table-bordered">
							<tr>
								<td><button class="btn btn-xs btn-danger">^</button></td>
								<td>1</td>
							</tr>
							<tr><td colspan="2"></td></tr>
							<tr>
								<td><button class="btn btn-xs btn-danger">^</button></td>
								<td>2</td>
							</tr>
							<tr>
								<td colspan="2"></td>
							</tr>
							<tr>
								<td><button class="btn btn-xs btn-danger">^</button></td>
								<td>3</td>
							</tr>
							<tr>
								<td colspan="2"></td>
							</tr>
							<tr>
								<td><button class="btn btn-xs btn-danger">^</button></td>
								<td>4</td>
							</tr>
							<tr>
								<td colspan="2"></td>
							</tr>
							<tr>
								<td><button class="btn btn-xs btn-danger">^</button></td>
								<td>5</td>
							</tr>
							<tr>
								<td colspan="2"></td>
							</tr>
							<tr>
								<td><button class="btn btn-xs btn-danger">^</button></td>
								<td>6</td>
							</tr>
						</table>
					</div>
				</div>
				<script>
					$(document).ready(function(){
						$.fn.elevator.eventSubscription();
					});
				</script>
			</div>
		</div>
	</body>
</html>