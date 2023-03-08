@extends('dashboard.layouts.app')

@section('title', 'Customer')

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Customer</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ url('/home') }}">Dashboard</a></div>
                <div class="breadcrumb-item">Customer</div>
            </div>
        </div>

        @include('sweetalert::alert')
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Customers List</h4>
                            <div class="card-header-action">
                                <a href="{{ route('customer.create') }}" class="btn btn-primary btn-sm ">Add
                                    Customer</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table-striped table" id="customer-table">
                                    <thead>
                                        <tr>
                                            <th>Num.</th>
                                            <th>Name</th>
                                            <th>Email</th>
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
<script src="{{ asset('dashboard/library/sweetalert/dist/sweetalert.min.js') }}"></script>

<!-- Page Specific JS File -->
<script src="{{ asset('dashboard/js/page/modules-sweetalert.js') }}"></script>
<script>
    // Datatable User
    $(document).ready(function () {
        $('#customer-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route("customer.index") !!}',
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
                    data: 'email',
                    name: 'email'
                },
                {
                    data: 'action',
                    name: 'action'
                }
            ],
        });
    });

</script>
@endpush
