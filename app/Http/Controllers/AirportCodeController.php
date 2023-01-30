<?php

namespace App\Http\Controllers;

use App\Models\AirportCode;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class AirportCodeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function data()
    {
        return DataTables::of(AirportCode::query())->toJson();
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            return DataTables::of(AirportCode::query()
            ->where('countryCode', '=', 'ID')
            ->orderBy('name'))
            ->addColumn('action', function($data) {
                $url_edit = url('airport_code/'.$data->id.'/edit');
                $url_delete = route('airport_code.destroy', $data->id);

                $button = '<a href="'.$url_edit.'" class="btn btn-primary btn-sm">Edit</a>';
                $button .= '<span>&nbsp;</span><a href="'.$url_delete.'" class="btn btn-danger btn-sm show_confirm">Delete</a>';

                return $button;
            })
            ->addIndexColumn()
            ->rawColumns(['status', 'action'])
            ->make(true);
        }
        return view ('dashboard.pages.airport_code.index',[
            'type_menu' => 'data_master'
        ]);
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AirportCode  $airportCode
     * @return \Illuminate\Http\Response
     */
    public function show(AirportCode $airportCode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AirportCode  $airportCode
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = AirportCode::findOrFail($id);
        $country_codes = AirportCode::select('countryCode')->groupBy('countryCode')->get();
        $country_names = AirportCode::select('countryName')->groupBy('countryName')->get();

        // dd($country_codes);exit;

        return view('dashboard.pages.airport_code.edit', [
            'type_menu' => 'data_master'
        ])->with([
            'item' => $item,
            'country_codes' => $country_codes,
            'country_names' => $country_names
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AirportCode  $airportCode
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();

        AirportCode::find($id)->update([
            'name' => $data["name"],
            'code' => $data["code"],
            'countryCode' => $data["countryCode"],
            'countryName' => $data["countryName"],
        ]);

        toast('Data Airport of '.$data["name"].' updated successfully', 'success');

        return redirect()->route('airport_code.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AirportCode  $airportCode
     * @return \Illuminate\Http\Response
     */
    public function destroy(AirportCode $airportCode)
    {
        //
    }
}
