@extends('dashboard.layouts.app')

@section('title', 'Add new Incoming Packaging')

@push('style')
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"> -->

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
        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>New Incoming</h4>
                        </div>
                        <form action="{{ route('incoming.store') }}" method="post">
                            @csrf
                            @method('POST')
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="">Airline</label>
                                        <input type="text" class="form-control" name="airline"
                                            value="{{ old('airline') }}" placeholder="ex: LaraAir" autofocus>
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="">Flight Number</label>
                                        <input type="text" class="form-control" name="flight_num"
                                            value="{{ old('flight_num') }}" placeholder="ex: LA-001">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="">Origin</label>
                                        <select name="origin" id="origin" class="form-control select2" required>
                                            <option value="">--Choose--</option>
                                            @foreach($items as $item)
                                            <option value="{{ $item->code}}">{{ $item->name }} ({{ $item->code }})
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="">Destination</label>
                                        <input type="text" class="form-control" name="destination" value="CGK" readonly>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="">Flight Date</label>
                                        <input type="date" name="flight_date" id="flight_date" class="form-control"
                                            value="{{ old('flight_date') }}">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="Dept. Time">Arrival Time</label>
                                        <input type="time" name="arrival_time" id="arrival_time" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="">AWB Date</label>
                                        <input type="date" name="awb_date" id="awb_date" class="form-control"
                                            value="{{ old('awb_date') }}">
                                    </div>
                                </div>
                                <div class="table-responsive col-12">
                                    <table class="table table-striped" id="dynamicRow">
                                        <thead>
                                            <tr>
                                                <th>Jenis</th>
                                                <th>AWB</th>
                                                <th>Nama Agen</th>
                                                <th>Penerima</th>
                                                <th>Koli</th>
                                                <th>Berat</th>
                                                <th>Komoditi</th>
                                                <th>+</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <select name="addMore[0][jenis_barang]" id="" class="form-control"
                                                        placeholder="choose">
                                                        <option value="Direct">Direct</option>
                                                        <option value="Partial">Partial</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" name="addMore[0][awb_num]">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control"
                                                        name="addMore[0][nama_agen]">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control"
                                                        name="addMore[0][nama_penerima]">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" name="addMore[0][koli]">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" name="addMore[0][berat]">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control"
                                                        name="addMore[0][commodity]">
                                                </td>
                                                <td>
                                                    <button type="button" class="btn" name="add" id="add">+</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button type="submit" class="btn btn-primary pull-right">Simpan</button>
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
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        var i = 0;

        $("#add").click(function () {
            ++i;
            $("#dynamicRow").append(
                '<tr><td><select name="addMore[' + i +
                '][jenis_barang]" id="" class="form-control"><option value="Direct">Direct</option><option value="Partial">Partial</option></select></td><td><input type="text" class="form-control" name="addMore[' +
                i + '][awb_num]"></td><td><input type="text" class="form-control" name="addMore[' +
                i +
                '][nama_agen]"></td><td><input type="text" class="form-control" name="addMore[' +
                i +
                '][nama_penerima]"></td><td><input type="text" class="form-control" name="addMore[' +
                i + '][koli]"></td><td><input type="text" class="form-control" name="addMore[' + i +
                '][berat]"></td><td><input type="text" class="form-control" name="addMore[' + i +
                '][commodity]"></td><td><button type="button" class="btn remove-tr">-</button></td></tr>'
            );
        });

        $(document).on('click', '.remove-tr', function () {
            $(this).parents('tr').remove();
        });
    });

</script>
