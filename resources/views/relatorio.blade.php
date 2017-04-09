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
						<h3 class="panel-title">Westwing</h3>
					</div>
					<div class="panel-body">
						<div class="col-md-12">
							<ol class="breadcrumb">
							  <li><a href="/">Home</a></li>
							  <li><span>Relatório</span></li>
							</ol>	
						</div>
						<div class="col-md-6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Chamados</h3>
								</div>
								<div class="panel-body">
								 <form method="GET" action="/relatorio/" name="filtro">
									<div class="row">
										 <div class="col-md-12">
											<label>Filtrar por:</label>
										 </div>
										 <div class="col-md-4">
											  <select id="filtro-email" name="f_email" class="form-control filter">
													<option value="">E-mail</option>
													@foreach (App\Models\Cliente::distinct()->orderBy('clientes.email', 'asc')->get() as $cl)
														<option value="{{ $cl->id }}">{{ $cl->email }}</option>
													@endforeach
											</select>
										</div>
										<div class="col-md-4">
										  <select id="filtro-pedidos_id" name="f_pedidos_id" class="form-control filter">
												<option value="">Número do pedido</option>
												@foreach (App\Models\Pedido::distinct()->orderBy('pedidos.numero_pedido', 'asc')->get() as $p)
													<option value="{{ $p->id }}">{{ $p->numero_pedido }}</option>
												@endforeach
										  </select>
										</div>
										<div class="col-md-4">
											<button type="submit" class="btn btn-primary btn-group-justified" >Filtrar</button>
										</div>
									</form>
									</div>
									<table class="table table-striped">
									  <thead>
										<tr>
										  <th>Nº pedido</th>
										  <th>E-mail</th>
										  <th>Data:</th>
										  <th>Detalhar</th>
										</tr>
									  </thead>
										@foreach( $chamados as $row )
											<tr id="frame_{{$row->id}}">
											  <td>{{ $row->numero_pedido }}</td>
											  <td>{{ str_limit($row->email, 15) }}</td>
											  <td>{{ $row->created_at->format('d/m/y H:i:s') }}</td>
											  <td><button id="{{$row->id}}" class="btn btn-primary btn-xs btn-detail">Detalhar</button></td>
											</tr>
										@endforeach
									</table>
									<div class="text-center">
									{!! $chamados->render() !!}
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-md-6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Detalhe</h3>
								</div>
								<div class="panel-body">
									<div id="detail-content">
				
										<div class="form-group">
											<label>Cliente:</label>
											<div class="well well-sm" id="cliente"></div>
										</div>
										
										<div class="form-group">
											<label>E-mail:</label>
											<div class="well well-sm" id="email"></div>
										</div>

										<div class="form-group">
											<label>Data de abertura:</label>
											<div class="well well-sm" id="data"></div>
										</div>

										<div class="form-group">
											<label>Pedido:</label>
											<div class="well well-sm" id="pedido"></div>
										</div>
									
										<div class="form-group">
											<label>Título:</label>
											<div class="well well-sm"id="titulo"></div>
										</div>
										
										<div class="form-group">
											<label>Observação:</label>
											<div class="well well-sm" id="observacao"></div>
										</div>
										<button type="button" class="btn btn-primary fim" > Excluir chamado </button>										
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
		<!-- separei o meu javascript nesse arquivo -->
		<script src="/js/relatorio.js"></script>
    </body>
</html>
