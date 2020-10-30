@extends('backend.layouts_backend.dashboard')

@section('content')

<div class="container-fluid page__heading-container">
    <div class="page__heading d-flex align-items-center">
        <div class="flex">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Usuarios</li>
                </ol>
            </nav>
            <h1 class="m-0">Administracion de usuarios</h1>
        </div>
        
    </div>
</div>

<div class="container-fluid ">
   <div class="row card-group-row">
        <div class="col-lg-12 col-md-12 card-group-row__col">
            <div class="card card-group-row__card card-body card-body-x-lg flex-row align-items-center">
                <div class="flex">
                    <div class="card-header__title text-muted mb-2">
                        @include('partials.message_flash')
                    </div>

               @include('administracion_usuarios.usuarios.list')
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

{{-- @stack('css') --}}
@push('scripts')
	<script src="{{ asset('vendors/fontawesome-5.14.0/js/all.js') }}" ></script>
    
@endpush 

@push('css')
	<link rel="stylesheet" href="{{ asset('vendors/fontawesome-5.14.0/css/all.css') }}">
    
@endpush 