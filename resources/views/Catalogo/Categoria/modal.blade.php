<div class="modal fade modal-slide-in-right" aria-hidden="true"
role="dialog" tabindex="-1" id="modal-delete-{{$categoria->id}}">
<!--(dois chavetas) Form::Open(array('action'=>array('CategoriaController@destroy',$categoria->id),'method'=>'delete'))}} -->
{!! Form::model( $categoria, [ 'route' => [ 'categorias.destroy', $categoria->id] , 'class' => 'form', 'method' => 'PUT' ]) !!}

	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" 
				aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
				<h4 class="modal-title">Apagar Categoria</h4>
			</div>
			<div class="modal-body">
				<p>Confirme se deseja apagar a categoria</p>
				<div class="form-group">
					<label>Nome</label>
					{!! Form::text('nome', $categoria->nome, [ 'class' => 'form-control', 'placeholder' => 'Nome', 'readonly']) !!}
				</div>
				<div class="form-group">
					<label>Descrição</label>
					{!! Form::textarea('descricao', $categoria->descricao, [ 'class' => 'form-control', 'placeholder' => 'Descrição', 'rows' => '3', 'readonly']) !!}
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
				{!! Form::submit('Confirmar', [ 'class' => 'btn btn-danger pull-right' ]) !!}
			</div>
		</div>
	</div>
{{Form::Close()}}
</div>