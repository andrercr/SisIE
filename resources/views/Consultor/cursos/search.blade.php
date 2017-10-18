{!!Form::open(array(
	'url'			=>	'consultor/cursos',
	'method'		=>	'GET',
	'autocomplete'	=>	'off',
	'role'			=>	'search'
	))!!}

	<div class="box-tools">
		<div class="input-group input-group-sm" style="width: 200;">

			<input type="text" name="searchText" class="form-control pull-right" placeholder="Buscar..." value="(duas chaves)$searchText(duas chaves)">

			<div class="input-group-btn">
				<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
			</div>
		</div>
	</div>

{{Form::close()}}
