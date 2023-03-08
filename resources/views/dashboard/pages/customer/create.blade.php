@extends('dashboard.layouts.app')

@section('title', 'Add Customer')

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Customers</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ url('/home') }}">Dashboard</a></div>
                <div class="breadcrumb-item active"><a href="{{ route('customer.index') }}">Customers</a></div>
                <div class="breadcrumb-item">Add Customer</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>New Customer</h4>
                        </div>
                        <form action="{{ route('customer.store') }}" method="post">
                            @csrf
                            @method('POST')
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="">Name</label>
                                        <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="">Email</label>
                                        <input type="email" class="form-control" name="email"
                                            value="{{ old('email') }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="">Phone</label>
                                        <input type="text" class="form-control" name="phone" value="{{ old('phone') }}">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="">Tax Number</label>
                                        <input type="text" class="form-control" name="tax_number"
                                            value="{{ old('tax_number') }}"
                                            data-inputmask="'mask': '9999 9999 9999 9999'" required minlength="15">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="">City</label>
                                        <input type="text" class="form-control" name="city" value="{{ old('city') }}">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="">Zipcode</label>
                                        <input type="text" class="form-control" name="zipcode"
                                            value="{{ old('zipcode') }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <label for="">Address</label>
                                        <textarea name="address" id="address" cols="30" rows="40"
                                            class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button type="submit" class="btn btn-primary">Save</button>
                                <a href="{{ url('/customer') }}" class="btn btn-warning">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@push('scripts')
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.1.60/inputmask/jquery.inputmask.js"></script>
<script>
    $(document).ready(function () {
        $(":input").inputmask();
    });

</script> -->
@endpush
