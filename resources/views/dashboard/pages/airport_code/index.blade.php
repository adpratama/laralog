@extends('dashboard.layouts.app')

@section('title', 'IATA Airport Code')

@push('style')
<!-- CSS Libraries -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
@endpush

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>IATA Airport Code</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ url('/home') }}">Dashboard</a></div>
                <div class="breadcrumb-item">Airport Codes</div>
            </div>
        </div>
        @include('sweetalert::alert')
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Airport List</h4>
                            <div class="card-header-action">
                                <a href="{{ route('airport_code.create') }}" class="btn btn-primary btn-sm ">Add
                                    Airport</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table-striped table" id="airport-table">
                                    <thead>
                                        <tr>
                                            <th>Num.</th>
                                            <th>Name</th>
                                            <th>Code</th>
                                            <th>Country Code</th>
                                            <th>Country Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@push('scripts')
<!-- JS Libraies -->
<script src="{{ asset('dashboard/library/datatables/media/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('dashboard/library/jquery-ui-dist/jquery-ui.min.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

<script>
    // Datatable User
    $(document).ready(function () {
        $('#airport-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route("airport_code.index") !!}',
            columns: [{
                    data: 'DT_RowIndex',
                    orderable: false,
                    searchable: false
                },
                // {
                //     data: 'id',
                //     name: 'id'
                // },
                {
                    data: 'name',
                    name: 'name',
                    orderable: true
                },
                {
                    data: 'code',
                    name: 'code'
                },
                // {
                //     data: 'stateCode',
                //     name: 'stateCode'
                // },
                {
                    data: 'countryCode',
                    name: 'countryCode'
                },
                {
                    data: 'countryName',
                    name: 'countryName'
                },
                {
                    data: 'action',
                    name: 'action'
                }
            ],
        });
    });

    // Sweet alert confirm delete
    $('.show_confirm').click(function (event) {
        var form = $(this).closest("form");
        var name = $(this).data("name");
        event.preventDefault();
        swal({
                title: "Are you sure want to delete this record?",
                text: "If you delete this, it will be gone forever",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    form.submit();
                }
            });
    });

</script>
@endpush
