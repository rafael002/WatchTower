<!DOCTYPE html>
<html>
    <head>
        <title></title>
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
						<div class="row">
							<div class="col-md-12">
								<ol class="breadcrumb">
								  <li><a href="/">Home</a></li>
								  <li><span>Cadastro de indicadores</span></li>
								</ol>
							</div>
						</div>

						<form action="/indicators/new/save/" method="post" >
							
							<input type="hidden" name="_token" value="{{ Session::token() }}">

							<div class="form-group">
								<label for="name">Nome:</label>
								<input type="text" id="name" name="name" class="form-control observed" placeholder="Nome">
							</div>

							<div class="form-group">
								<label for="lastName">Sobrenome:</label>
								<input type="text" id="lastName" name="lastName" class="form-control observed" placeholder="Sobrenome">
							</div>


							<div class="form-group">
								<label for="function">Function:</label>
								<select id="function" name="funcion" class="form-control" >
									<option value="null">Select a function</option>
									@foreach( App\Models\Funct::all() as $function )
										<option value="{{ $function->id }}">{{ $function->name }}</option>
									@endforeach
								</select>
							</div>


							<div class="form-group">
								<label for="email">E-Mail:</label>
								<input type="text" id="email" name="email" class="form-control observed" placeholder="E-Mail">
							</div>
							<div id="info-np"></div>
							<div class="form-group">
								<label for="telephone">Telefone:</label>
								<input type="text" id="telephone" name="telephone" class="form-control" placeholder="(11) 0000-0000">
							</div>

							<div class="form-group">
								<label for="cellphone">Celular:</label>
								<input type="text" id="cellphone" name="cellphone" class="form-control observer-submit" placeholder="(11) 90000-0000">
							</div>

							<button type="submit" id="sendData" class="btn btn-primary">Cadastrar</button>			
						</form>
					</div>
				</div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<script src="/js/sweetalert.min.js"></script>
    </body>
</html>
