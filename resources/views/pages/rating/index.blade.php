@extends('layout.master')

@push('plugin-styles')
    <link href="{{ asset('assets/plugins/datatables-net-bs5/dataTables.bootstrap5.css') }}" rel="stylesheet" />
@endpush

@section('content')
    <div class="row">
        <div class="col-6 ">
            @include('components.breadcrums.index', [
                'array' => [
                    ['label' => 'Home', 'url' => '/home', 'active' => false],
                    ['label' => 'Hom2e', 'url' => '/hom12e', 'active' => false],
                    ['label' => 'Ho3me', 'url' => '/home12', 'active' => true],
                ],
            ])
        </div>

        <div class="col-6 text-end">
            <button type="button" class="btn btn-light btn-icon ">
                <i data-feather="filter"></i>
            </button>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="row m-4">
                    <div class="col-6">
                        <h2>Rating</h2>
                    </div>
                    <div class="col-6 text-end">
                        <button type="button" class="btn btn-primary btn-icon-text crud-modal"
                            data-crud-url="{{ route('rating.create') }}" data-crud-for="create" data-bs-toggle="modal"
                            data-crud-title="Create" data-bs-target="#crudModal">
                            <i class="btn-icon-prepend" data-feather="plus-circle"></i>
                            Add
                        </button>

                    </div>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        @include('components.skeletons.dataTable')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('custom-scripts')
    <script>
        $(document).ready(function() {
            renderDataTable("{{ route('rating.index') }}", '.table-responsive')
        });
    </script>
@endpush
