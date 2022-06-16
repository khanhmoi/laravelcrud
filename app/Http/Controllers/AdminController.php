<?php

namespace App\Http\Controllers;

use App\Models\khanhtest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:create|edit articles',['only'=>['edit']]);
        // $this->middleware('permission:create|read',['only'=>['show']]);
        // $this->middleware('permission:edit articles',['only'=>['index']]);
    }
    public function index()
    {
        return view('admin.login');
    }

    public function dashboard()
    {
        //echo 'khánh chíp';
        return view('admin.ad_layout');
    }
    public function list()
    {
        $news = khanhtest::all();
        return view('admin.list',compact('news'));
    }

    public function create()
    {
        return view('admin.add');
    }

    public function store(Request $request)
    {
        $new = new khanhtest;
        $new->name = $request->name;
        $new->address = $request->address;
        $new->save();
        return redirect()->route('admin.create');

    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $new = khanhtest::find($id);
        return view('admin.update',compact('new'));
    }

    public function update(Request $request, $id)
    {
        $new = khanhtest::find($id);
        $new->name = $request->name;
        $new->address = $request->address;
        $new->save();
        return redirect()->route('list');

    }


    public function destroy($id)
    {
        $new = khanhtest::find($id);
        $new->delete();
        return redirect()->route('list');

    }

    public function lg(){
        Auth::logout();
        return redirect()->route('admin.index');
    }
}
