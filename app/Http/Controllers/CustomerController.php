<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {   
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            return Datatables::of(Customer::query()->orderBy('name'))
                ->addColumn('action', function($data) {
                    $url_edit = url('customer/'.$data->id.'/edit');
                    $url_delete = route('customer.destroy', $data->id);

                    $button = '<a href="'.$url_edit.'" class="btn btn-primary btn-sm">Edit</a>';
                    $button .= '<span>&nbsp;</span><a href="'.$url_delete.'" class="btn btn-danger btn-sm show_confirm">Delete</a>';

                    $button .= "<form action='".$url_delete."' method='post' class='d-inline' id='hapus-data'>
                    <input type='hidden' name='_method' value='delete' /><button class='btn btn-danger btn-sm' type='' id='swal-6'><i class='fa fa-trash'></i></button>
                    </form>";

                    return $button;
                })
            ->addIndexColumn()
            ->rawColumns(['status', 'action'])
            ->make(true);
        }
        return view ('dashboard.pages.customer.index', [
            'type_menu' => 'data_master'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pages.customer.create', [
            'type_menu' => 'data_master'
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
        $data = $request->all();

        Customer::create([
            'name' => $data["name"],
            'email' => $data["email"],
            'phone' => $data["phone"],
            'tax_number' => $data["tax_number"],
            'city' => $data["city"],
            'zipcode' => $data["zipcode"],
            'address' => $data["address"]
        ]);

        toast('Data Customer of '.$data["name"].' added successfully', 'success');

        return redirect()->route('customer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Customer::findOrFail($id);

        return view('dashboard.pages.customer.edit', [
            'type_menu' => 'data_master'
        ])->with([
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();

        Customer::find($id)->update([
            'name' => $data["name"],
            'email' => $data["email"],
            'phone' => $data["phone"],
            'tax_number' => $data["tax_number"],
            'city' => $data["city"],
            'zipcode' => $data["zipcode"],
            'address' => $data["address"]
        ]);

        toast('Data of '.$data["name"].' updated successfully', 'success');

        return redirect()->route('customer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
