@extends('layout.master')

@push('plugin-styles')
    <link href="{{ asset('assets/plugins/datatables-net-bs5/dataTables.bootstrap5.css') }}" rel="stylesheet" />
@endpush

@section('content')
    <div class="row">
        <div class="col-6 ">
            <nav aria-label="breadcrumb align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Library</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Data</li>
                </ol>
            </nav>
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
                <div class="card-body">
                    <h1 class="card-title">Posts</h1>
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
            $.ajax({
                url: "{{ route('dummy') }}",
                type: "GET",
                dataType: 'html',
                success: function(response) {
                    setTimeout(() => {
                        $('.table-responsive').html(response);
                    }, 1000);
                }
            });
        });
    </script>
@endpush
