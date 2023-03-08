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
                            Edit Customer Data of &nbsp;<h4> {{ $item->name }}</h4>
                        </div>
                        <form action="{{ route('customer.update', $item->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="">Name</label>
                                        <input type="text" class="form-control" name="name" value="{{ $item->name }}">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="">Email</label>
                                        <input type="email" class="form-control" name="email"
                                            value="{{ $item->email }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="">Phone</label>
                                        <input type="text" class="form-control" name="phone" value="{{ $item->phone }}">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="">Tax Number</label>
                                        <input type="text" class="form-control" name="tax_number"
                                            value="{{ $item->tax_number}}" required minlength="15">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="">City</label>
                                        <input type="text" class="form-control" name="city" value="{{ $item->city }}">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="">Zipcode</label>
                                        <input type="text" class="form-control" name="zipcode"
                                            value="{{ $item->zipcode }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <label for="">Address</label>
                                        <textarea name="address" id="address" cols="30" rows="40"
                                            class="form-control">{{ $item->address }}</textarea>
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
