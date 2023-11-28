@extends('tablar::page')

@section('title')
Marcas
@endsection

@section('content')
<!-- Page header -->
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <!-- Page pre-title -->
                <h2 class="page-title">
                    {{ __('Marca') }}
                </h2>
            </div>
            <!-- Page title actions -->
            <div class="col-12 col-md-auto ms-auto d-print-none">
                <div class="btn-list">
                    <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#createBrandModal">
                        <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <line x1="12" y1="5" x2="12" y2="19" />
                            <line x1="5" y1="12" x2="19" y2="12" />
                        </svg>
                        Nueva Marca
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page body -->
<div class="page-body">
    <div class="container-xl">
        @if(config('tablar','display_alert'))
        @include('tablar::common.alert')
        @endif
        <div class="row row-deck row-cards">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Lista de Marcas</h3>
                    </div>
                    <div class="card-body border-bottom py-3">
                        <div class="d-flex">
                            <div class="text-muted">
                                Mostrar
                                <div class="mx-2 d-inline-block">
                                    <input type="text" class="form-control form-control-sm" value="10" size="3" aria-label="Invoices count">
                                </div>
                                entradas
                            </div>
                            <div class="ms-auto text-muted">
                                Buscar:
                                <div class="ms-2 d-inline-block">
                                    <input type="text" class="form-control form-control-sm" id="searchTable" aria-label="Search category">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive min-vh-100">
                        <table class="table card-table table-vcenter text-nowrap datatable">
                            <thead>
                                <tr>
                                    <th class="w-1"><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select all invoices"></th>
                                    <th class="w-1">No.
                                        <!-- Download SVG icon from http://tabler-icons.io/i/chevron-up -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-sm text-dark icon-thick" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <polyline points="6 15 12 9 18 15" />
                                        </svg>
                                    </th>

                                    <th>Marca</th>
                                    <th>Estado</th>

                                    <th class="w-1"></th>
                                </tr>
                            </thead>

                            <tbody>
                                @forelse ($brands as $brand)
                                <tr>
                                    <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select brand"></td>
                                    <td>{{ ++$i }}</td>

                                    <td>{{ $brand->brand }}</td>
                                    <td>
                                        <span class="{{ $brand->status == 1 ? 'bg-success text-white rounded  p-2' : 'bg-danger text-white rounded  p-2' }}">{{ $brand->status_text }}</span>
                                    </td>

                                    <td>
                                        <div class="btn-list flex-nowrap">
                                            <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#brandDetailsModal_{{ $brand->id }}" data-brand-id="{{ $brand->id }}"><i class="ti ti-eye"></i></button>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#updateBrandModal_{{ $brand->id }}" data-brand-id="{{ $brand->id }}"><i class="ti ti-file-diff"></i></button>
                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal_{{ $brand->id }}" data-brand-id="{{ $brand->id }}"><i class="ti ti-trash"></i></button>

                                        </div>
                                </tr>

                                <!-- Modal de confirmación de eliminación -->
                                <div class="modal fade" id="confirmDeleteModal_{{ $brand->id }}" tabindex="-1" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="confirmDeleteModalLabel">Confirmar Eliminación</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                ¿Estás seguro de que deseas eliminar esta Marca?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                                <form action="{{ route('brands.destroy', $brand->id) }}" method="POST" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal Editar -->
                                <div class="modal fade" id="updateBrandModal_{{ $brand->id }}" tabindex="-1" aria-labelledby="updateBrandModalLabel" aria-hidden="true">
                                    @if(config('tablar','display_alert'))
                                    @include('tablar::common.alert')
                                    @endif
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="updateBrandModalLabel">Actualizar Marca</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="POST" action="{{ route('brands.update', $brand->id) }}" id="ajaxForm" role="form" enctype="multipart/form-data">
                                                    {{ method_field('PATCH') }}
                                                    @csrf
                                                    @include('brand.form')
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal Mostrar -->
                                <div class="modal fade" id="brandDetailsModal_{{ $brand->id }}" tabindex="-1" aria-labelledby="brandDetailsModalLabel" aria-hidden="true">
                                    @if(config('tablar','display_alert'))
                                    @include('tablar::common.alert')
                                    @endif
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="brandDetailsModalLabel">Detalles de la Marca</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- Información de la categoría en el modal -->
                                                <div class="form-group">
                                                    <strong>Marca:</strong>
                                                    <input type="text" class="form-control" value="{{ $brand->brand}}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <strong>Estado:</strong>
                                                    <span class="form-control">{{ $brand->status == 1 ? 'Activo' : 'Inactivo' }}</span>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @empty
                                <td>No Data Found</td>
                                @endforelse
                            </tbody>

                        </table>
                        <!-- Modal para crear nueva marca-->
                        <div class="modal fade" id="createBrandModal" tabindex="-1" aria-labelledby="createBrandModalLabel" aria-hidden="true">
                            @if(config('tablar','display_alert'))
                            @include('tablar::common.alert')
                            @endif
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="createBrandModalLabel">Nueva Marca</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Formulario para crear una nueva categoría -->
                                        <form method="POST" action="{{ route('brands.store') }}" id="ajaxForm" role="form" enctype="multipart/form-data">
                                            @csrf
                                            @include('brand.create')
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer d-flex align-items-center">
                        {!! $brands->links('tablar::pagination') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection