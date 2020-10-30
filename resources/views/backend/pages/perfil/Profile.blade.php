@extends('backend.layouts_backend.dashboard')

@section('content')


<div class="container-fluid page__heading-container">
    <div class="page__heading d-flex align-items-center">
        <div class="flex">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ URL::to('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
                </ol>
            </nav>
            <h1 class="m-0">{{ $title }}</h1>
        </div>
    </div>
</div>


<div class="container-fluid page__container">
   <div class="row card-group-row">
        <div class="col-lg-12 col-md-12 card-group-row__col">
            <div class="card card-group-row__card card-body card-body-x-lg flex-row align-items-center">
                <div class="flex">
                    <div class="card-header__title text-muted mb-2">
                    	@include('partials.message_flash')
                    </div>
                   	
         
			{{  Form::open(['url' => 'store_profesiones','autocomplete'=>'off', 'method' => 'POST', 'files' => true]) }}
		
		{!! Form::token() !!}
                   	<div class="row">
                   		<div class="col-md-6 col-xs-12 col-sm-6 col-lg-6">
                   			<div class="group-form">
                   				<label>Nombre de usuario: <b style="color: #FF0505;">*</b></label>
                   				<input type="text" class="form-control" name="nbrprofesion" value="{{ old('nbrvante', $user->name) }}">
                   				@error('nbrprofesion') <span> <b style="color: #DC0000;">  {{ $message }}</b></span> @enderror
                   			</div>	
                   		</div>
                   		<div class="col-md-6 col-xs-12 col-sm-6 col-lg-6">
                   			<div class="group-form">
                   				<label>Email: <b style="color: #FF0505;">*</b></label>
                   				<input type="email" class="form-control" name="nbrprofesion" value="{{ old('nbrvante', $user->email) }}" readonly>
                   				@error('nbrprofesion') <span> <b style="color: #DC0000;">  {{ $message }}</b></span> @enderror
                   			</div>	
                   		</div>
                   	</div>
                   	<br>
                   	<div class="row">
                   		<div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                   			<div class="alert alert-success" role="alert">
							  <strong>Si no desea cambiar la contraseña</strong> dejar los campos en blanco
							</div>
                   		</div>
                   	</div>
                   	<div class="row">
                   		<div class="col-md-6 col-xs-12 col-sm-6 col-lg-6">
                   			<div class="group-form">
                   				<label>Contraseña: <b style="color: #FF0505;">*</b></label>
                   				<input type="password" class="form-control" name="nbrprofesion" value="{{ old('nbrvante') }}">
                   				@error('nbrprofesion') <span> <b style="color: #DC0000;">  {{ $message }}</b></span> @enderror
                   			</div>	
                   		</div>
                   		<div class="col-md-6 col-xs-12 col-sm-6 col-lg-6">
                   			<div class="group-form">
                   				<label>Confirmar Contraseña: <b style="color: #FF0505;">*</b></label>
                   				<input type="password" class="form-control" name="nbrprofesion" value="{{ old('nbrvante') }}">
                   				@error('nbrprofesion') <span> <b style="color: #DC0000;">  {{ $message }}</b></span> @enderror
                   			</div>	
                   		</div>
                   	</div>
                   	<br>
                   	<div class="row">
                   		<div class="col-6">
                   			<div class="group-form">
                   				<button class="btn btn-success">Enviar</button>
                   			</div>	
                   		</div>
                   	</div>
         {!!Form::close()!!}

                  	
                </div>
            </div>
        </div>
    </div>
</div>


@endsection