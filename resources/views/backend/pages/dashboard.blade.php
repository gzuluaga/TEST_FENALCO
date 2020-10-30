@extends('backend.layouts_backend.dashboard')

@section('content')
<div class="container-fluid page__heading-container">
    <div class="page__heading d-flex align-items-center">
        <div class="flex">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
            </nav>
            <h1 class="m-0">Dashboard</h1>
        </div>
        <a href="" class="btn btn-success ml-3">Indicadores</a>
    </div>
</div>


<div class="container-fluid page__container">
   <div class="row card-group-row">
     
         <div class="col-lg-4 col-md-12 card-group-row__col">
            <div class="card card-group-row__card card-body card-body-x-lg flex-row align-items-center">
                <div class="flex">
                    <div class="card-header__title text-muted mb-2">10</div>
                    <div class="text-amount">
                        1
                    </div>
                    
                </div>
                <div><i class="material-icons icon-muted icon-40pt ml-3">perm_identity</i></div>
            </div>
        </div>
    </div>
{{-- 
    <div class="row card-group-row">
         <div class="col-lg-6 col-md-6 card-group-row__col">
            <div class="card card-group-row__card card-body card-body-x-lg flex-row align-items-center">
                <div id="donutchart" style="width: 100%; height: 500px;"></div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 card-group-row__col">
            <div class="card card-group-row__card card-body card-body-x-lg flex-row align-items-center">
                <div id="donutchart2" style="width: 100%; height: 500px;"></div>
            </div>
        </div>
    </div> --}}
</div>
@endsection

@push('js')
 
@endpush 

@push('css')    
@endpush 