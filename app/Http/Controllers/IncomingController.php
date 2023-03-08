<?php

namespace App\Http\Controllers;

use App\Models\AirportCode;
use App\Models\Customer;
use App\Models\Incoming;
use Yajra\DataTables\Facades\DataTables;

use Illuminate\Http\Request;

class IncomingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            return DataTables::of(Incoming::query()
                ->orderBy('id', 'DESC'))
                // ->addColumn('checkbox', function ($data) {
                //     $checkbox = "
                //         <div class='custom-checkbox custom-control'>
                //             <input type='checkbox' data-checkboxes='mygroup' class='custom-control-input' id='items' name='items[]' value='$data->id'>
                //             <label for='items' class='custom-control-label'>&nbsp;$data->id</label>
                //         </div>";
                        
                //     return $checkbox;
                // })
                ->addColumn('action', function($data) {
                    $url_edit = route('incoming.edit', $data->id);
                    $url_delete = route('incoming.destroy', $data->id);
                    // $url_inv = route('incoming.billing', $data->id);

                    $button = '<a href="'.$url_edit.'" class="btn btn-primary btn-sm">Edit</a>';
                    $button .= '<span>&nbsp;</span><a href="'.$url_delete.'" class="btn btn-danger btn-sm show_confirm">Delete</a>';

                    return $button;
                })
            ->addIndexColumn()
            ->rawColumns(['status', 'action', 'checkbox'])
            ->make(true);
        }
        return view ('dashboard.pages.incoming.index', [
            'type_menu' => 'incoming'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = Customer::all()->sortBy('name');
        $items = AirportCode::query()->where('countryCode', '=', 'ID')->orderBy('name')->get();
        return view('dashboard.pages.incoming.create', [
            'type_menu' => 'incoming',
            'items' => $items,
            'customers' => $customers
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        foreach ($request->addMore as $key => $value) {

            Incoming::create([
                'airline' => $request->airline,
                'flight_number' => $request->flight_num,
                'origin' => $request->origin,
                'destination' => $request->destination,
                'flight_date' => $request->flight_date,
                'arrival_time' => $request->arrival_time,
                'awb_date' => $request->awb_date,
                'type_of_goods' => $value["jenis_barang"],
                'awb_num' => $value["awb_num"],
                'agent' => $value["nama_agen"],
                'consignee' => $value["nama_penerima"],
                'pieces' => $value["koli"],
                'weight' => $value["berat"],
                'commodity' => $value["commodity"],
                'acceptance' => auth()->user()->id
            ]);
        }
        
        toast('New Incoming Data added successfully', 'success');

        return redirect()->route('incoming.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function remove_all(Request $request) 
    {
        $user_id_array = $request->input('id');

        var_dump($user_id_array);exit;
    }

    public function create_invoice(Request $request)
    {
        
    }
}
