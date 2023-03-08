@extends('dashboard.layouts.app')

@section('title', 'Incoming Packaging')

@push('style')
<!-- CSS Libraries -->
<link rel="stylesheet" href="{{ asset('dashboard/library/datatables/media/css/jquery.dataTables.min.css') }}">
@endpush

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Packaging</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ url('/home') }}">Dashboard</a></div>
                <div class="breadcrumb-item">Incoming</div>
            </div>
        </div>
        @include('sweetalert::alert')
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Kemasan SMU</h4>
                            <div class="card-header-action">
                                <a href="{{ route('incoming.create')}}" class="btn btn-primary btn-sm">Add new</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <button class="btn btn-primary" id="addBulk" name="addBulk">Create Invoice</button>
                            <br>
                            <br>
                            <div class="table-responsive">
                                <table class="table table-striped" id="incoming-table">
                                    <thead>
                                        <tr>
                                            <!-- <th class="text-center">
                                                <div class="custom-checkbox custom-control">
                                                    <input type="checkbox" data-checkboxes="mygroup"
                                                        data-checkbox-role="dad" class="custom-control-input"
                                                        id="checkbox-all">
                                                    <label for="checkbox-all"
                                                        class="custom-control-label">&nbsp;</label>
                                                </div>
                                            </th> -->
                                            <th>No.</th>
                                            <th>Kategori</th>
                                            <th>AWB Num.</th>
                                            <th>Dest.</th>
                                            <th>Piece(s)</th>
                                            <th>Weight</th>
                                            <th>Agent</th>
                                            <th>Action</th>
                                            <!-- <th>Post Date</th> -->
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                        <div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="ModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form action="" method="post" class="form-horizontal" id="sample_form">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="ModalLabel">Confirmation</h5>
                                            <button class="btn-close" data-dismiss="modal" aria-label="Close">
                                                <span>&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <h4>Are you sure?</h4>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button class="btn btn-danger" name="confirm_ok"
                                                id="confirm_ok">Yes</button>
                                        </div>
                                    </form>
                                </div>
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

<!-- Page Specific JS File -->
<script src="{{ asset('dashboard/js/page/modules-datatables.js') }}"></script>
<script>
    // Datatable User
    $(document).ready(function () {
        $('#incoming-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route("incoming.index") !!}',
            select: {
                style: 'os',
                selector: 'td:first-child'
            },
            columns: [
                // {
                //     data: 'checkbox',
                //     name: 'checkbox',
                //     orderable: false,
                //     searchable: false
                // }, 
                {
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'type_of_goods',
                    name: 'type_of_goods',
                    orderable: true
                },
                {
                    data: 'awb_num',
                    name: 'awb_num'
                },
                {
                    data: 'origin',
                    name: 'origin'
                },
                {
                    data: 'pieces',
                    name: 'pieces'
                },
                {
                    data: 'weight',
                    name: 'weight',
                    orderable: true
                },
                {
                    data: 'agent',
                    name: 'agent'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                }
            ],
        });

        var user_id;

        $(document).on('click', '.delete', function () {
            user_id = $(this).attr('id');
            $('#confirmModal').modal('show');
        });

        // $('#confirm_ok').click(function() {
        //     $.ajax({
        //         url: "incoming/destroy/"+user_id,
        //         beforeSend: function() {
        //             $('#confirm_ok').text('Deleting...');
        //         },
        //         success: function(data) {
        //             setTimeout(function() {
        //                 $('#confirmModal').modal('hide');
        //                 $('#');
        //             });
        //         }
        //     });
        // });

        $(document).on('click', '#addBulk', function () {
            var id = [];
            if (confirm("Are you sure?")) {
                $('.items:checked').each(function () {
                    id.push($(this).val());
                });

                if (id.length > 0) {
                    $.ajax({
                        url: "{{ route('incoming.remove_all')}}",
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        method: "get",
                        data: {
                            id: id
                        },
                        success: function (data) {
                            console.log(data);
                            alert(data);
                            window.location.assign("incoming");
                        },
                        error: function (data) {
                            var errors = data.responseJSON;
                            console.log(errors);
                        }
                    });
                } else {
                    alert("Please select atleast one checkbox");
                }
            }
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
