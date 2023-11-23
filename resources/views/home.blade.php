@extends('tablar::page')

@section('content')
<!-- Page header -->
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <!-- Page pre-title -->
                <h2 class="page-title">
                    Panel Principal
                </h2>
            </div>
        </div>
    </div>
</div>
<!-- Page body -->
<div class="page-body">
    <div class="container-xl">
        <div class="page-wrapper">
            <div class="page-body">
                <div class="container-xl">
                    <!-- Start Card Principal-->
                    <div class="row row-deck row-cards">

                        <div class="row row-cols-md-4">
                            <div class="col mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Título</h5>
                                        <div class="d-flex align-items-center">
                                            <p class="card-text">Texto al inicio</p>
                                            <i class="ti ti-user"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-3">
                                <div class="card">
                                    <!-- Contenido del card -->
                                </div>
                            </div>
                            <div class="col mb-3">
                                <div class="card">
                                    <!-- Contenido del card -->
                                </div>
                            </div>
                            <div class="col mb-3">
                                <div class="card">
                                    <!-- Contenido del card -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Card Principal-->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection