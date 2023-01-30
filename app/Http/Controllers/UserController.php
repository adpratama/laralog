<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            
            return DataTables::of(User::query()->orderBy('name'))
            ->addColumn('action', function($data) {
                $url_edit = url('user/'.$data->id.'/edit');
                $url_delete = route('user.destroy', $data->id);

                $button = '<a href="'.$url_edit.'" class="btn btn-primary btn-sm">Edit</a>';
                $button .= '<span>&nbsp;</span><a href="'.$url_delete.'" class="btn btn-danger btn-sm show_confirm">Delete</a>';

                return $button;
            })
            ->addIndexColumn()
            ->rawColumns(['status', 'action'])
            ->make(true);
        }

        return view('dashboard.pages.user.index', [
            'type_menu' => 'data_master'
        ]);
    }

    public function create()
    {
        return view('dashboard.pages.user.create');
    }

    public function edit($id)
    {
        $item = User::findOrFail($id);
        return view ('dashboard.pages.user.edit', [
            'type_menu' => 'data_master'
        ])
        ->with([
            'item' => $item
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();

        User::find($id)->update([
            'name' => $data["name"],
            'email' => $data["email"]
        ]);

        toast('Data user '.$data["name"].' updated successfully', 'success');

        return redirect()->route('user.index');
    }

    public function destroy($id)
    {
        var_dump($id);exit;
    }
}
