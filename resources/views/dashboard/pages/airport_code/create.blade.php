@extends('dashboard.layouts.app')

@section('title', 'Add Airport')

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Airports</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ url('/home') }}">Dashboard</a></div>
                <div class="breadcrumb-item active"><a href="{{ route('airport_code.index') }}">Airports</a></div>
                <div class="breadcrumb-item">Add</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>New Airport Data</h4>
                        </div>
                        <form action="{{ route('airport_code.store') }}" method="post">
                            @csrf
                            @method('POST')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                                </div>
                                <div class="form-group">
                                    <label for="">Code</label>
                                    <input type="text" class="form-control" name="code" value="{{ old('code') }}">
                                </div>
                                <div class="form-group">
                                    <label for="">Country Code</label>
                                    <select name="countryCode" id="countryCode" class="form-control select2">
                                        <option>Choose Country</option>
                                        @foreach($country_codes as $code)
                                        <option value="{{ $code->countryCode }}"
                                            {{ $code->countryCode == old('countryCode') ? 'selected' : '' }}>
                                            {{ $code->countryCode }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Country Name</label>
                                    <select name="countryName" id="countryName" class="form-control select2">
                                        @foreach($country_names as $name)
                                        <option value="{{ $name->countryName }}"
                                            {{ $name->countryName == old('countryName')? 'selected' : '' }}>
                                            {{ $name->countryName }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button type="submit" class="btn btn-primary">Save</button>
                                <a href="{{ url('/airport_code') }}" class="btn btn-warning">Back</a>
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
<script type="text/javascript">
    $(document).ready(function () {
        $("#countryCode").select2();
    });

    $(document).ready(function () {
        $("#countryName").select2();
    });

</script>
@endpush
