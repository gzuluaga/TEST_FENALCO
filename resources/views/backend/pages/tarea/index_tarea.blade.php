@extends('backend.layouts_backend.dashboard')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="background: #033c73 !important; color: #FFFFFF !important;">Crear Tarea</div>
                <div class="card-body">
                  @include('backend.pages.tarea.crud.list')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection