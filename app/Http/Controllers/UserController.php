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
            return DataTables::of(User::query())->toJson();
        }

        return view('dashboard.pages.user.index', [
            'type_menu' => 'data_master'
        ]);
    }
}
