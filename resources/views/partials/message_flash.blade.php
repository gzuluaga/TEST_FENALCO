@if (session('status'))
	<div class="alert alert-success" role="alert">
	  <strong>Exito!</strong> {{ session('status') }}
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	    <span aria-hidden="true">&times;</span>
	  </button>
	</div>
@endif