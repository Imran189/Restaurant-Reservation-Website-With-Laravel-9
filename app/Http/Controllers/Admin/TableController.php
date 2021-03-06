<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Table;
use Illuminate\Http\Request;

class TableController extends Controller
{
    public function index(){
        $tables = Table::all();
        return view('admin.tables.tables', compact('tables'));
    }
}
