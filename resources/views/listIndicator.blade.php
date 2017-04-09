<?php use Carbon\carbon; ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Relatorio</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" href="/css/sweetalert.css">
    </head>
    <body>
        <div class="container-fluid">
            <div class="content" style="margin-top:10px;"> 
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Project "Watchtower"</h3>
					</div>
					<div class="panel-body">
						<div class="col-md-12">
							<ol class="breadcrumb">
							  <li><a href="/">Home</a></li>
							  <li><span>Indicator's list</span></li>
							</ol>	
						</div>
						<div class="col-md-6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Select an indicator</h3>
								</div>
								<div class="panel-body">
								
									<table class="table table-striped">
									  <thead>
										<tr>
										  <th>Indicator</th>
										  <th>Detail</th>
										</tr>
									  </thead>
										@foreach( $indicators as $row )
											<tr id="frame_{{$row->id}}">
											  <td>{{ $row->givenName . " " }} {{ $row->lastName }}</td>
											  <td>
													Detail
											  </td>
											</tr>
										@endforeach
									</table>
									<div class="text-center">
									{!! $indicators->render() !!}
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-md-6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Details</h3>
								</div>
								<div class="panel-body">
									<div id="detail-content">
				
										<div class="form-group">
											<label>Name:</label>
											<div class="well well-sm" id="cliente"></div>
										</div>
										
										<div class="form-group">
											<label>Function:</label>
											<div class="well well-sm" id="function"></div>
										</div>
										
										<div class="form-group">
											<label>E-mail:</label>
											<div class="well well-sm" id="email"></div>
										</div>

										<div class="form-group">
											<label>Telephone:</label>
											<div class="well well-sm" id="telephone"></div>
										</div>

										<div class="form-group">
											<label>Cellphone:</label>
											<div class="well well-sm" id="cellphone"></div>
										</div>
										
										<button type="button" class="btn btn-danger fim" ><i class="glyphicon glyphicon-remove" style="color:white;"></i>&nbsp Remove</button>
										<button type="button" class="btn btn-primary fim" ><i class="glyphicon glyphicon-pencil" style="color:white;"></i>&nbsp Edit</button>										
									</div>
								</div>
							</div
						</div>
					</div>
				</div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<script src="/js/sweetalert.min.js"></script>
    </body>
</html>
