<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<!-- CSS only -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

	<!-- JS, Popper.js, and jQuery -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<div class="row mx-auto" style="width: 400px;">
			<div class="col-md-6">
				<h4>Chatting APP</h4>
			</div>
		</div>

		<!-- START of Search Field By Username -->
		<form action="" method="POST">
			<div class="form-row">
			    <div class="col-md-8">
			      	<input type="text" class="form-control" placeholder="Search by username...">
			    </div>
			    <div class="col-md-2">
			      	<button type="button" class="btn btn-outline-success">Success</button>
			    </div>
			 </div>
		</form>
		<!-- END of Search Field By Username -->

		<div class="row">
			
			<div class="col-md-6" style="margin-top: 75px;">
				<table class="table table-striped">
				  	<thead>
				    	<tr>
				      		<th scope="col">First</th>
				      		<th scope="col">Last</th>
				      		<th scope="col">Handle</th>
				      		<th scope="col">Action</th>
				    	</tr>
				  	</thead>
				  	<tbody>
				    	<tr>
					      	<td>Mark</td>
					      	<td>Otto</td>
					      	<td>@mdo</td>
					      	<td><button type="button" class="btn btn-outline-success">Chat</button></td>
				    	</tr>
				    	<tr>
				      		<td>Jacob</td>
				      		<td>Thornton</td>
				      		<td>@fat</td>
				      		<td><button type="button" class="btn btn-outline-success">Chat</button></td>
				    	</tr>
				    	<tr>
				      		<td>Larry</td>
				      		<td>the Bird</td>
				      		<td>@twitter</td>
				      		<td><button type="button" class="btn btn-outline-success">Chat</button></td>
				    	</tr>
				  	</tbody>
				</table>
			</div>
			<div class="col-md-6"style="margin-top: 75px;">
				<table class="table table-striped">
				  	<thead>
				    	<tr>
				      		<th scope="col">First</th>
				      		<th scope="col">Last</th>
				      		<th scope="col">Handle</th>
				    	</tr>
				  	</thead>
				  	<tbody>
				    	<tr>
					      	<th scope="row">1</th>
					      	<td>Mark</td>
					      	<td>Otto</td>
					      	<td>@mdo</td>
				    	</tr>
				    	<tr>
				      		<th scope="row">2</th>
				      		<td>Jacob</td>
				      		<td>Thornton</td>
				      		<td>@fat</td>
				    	</tr>
				    	<tr>
				      		<th scope="row">3</th>
				      		<td>Larry</td>
				      		<td>the Bird</td>
				      		<td>@twitter</td>
				    	</tr>
				  	</tbody>
				</table>
			</div>

		</div>
	</div>


</body>
</html>