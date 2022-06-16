<?php

namespace App\Http\Controllers;
use App\Models\khanhtest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class khanhggController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:create|edit articles',['only'=>['edit']]);
        $this->middleware('permission:create|read',['only'=>['show']]);
       // $this->middleware('permission:edit articles',['only'=>['index']]);
    }

    public function index()
    {
       //$news = DB::table('khanhtests')->select('*')->get();
       //return view('khanh.list',compact('news'));

       $news = khanhtest::all();
       return view('khanh.list',compact('news'));
    }
    public function indexColumn(){
        $news = DB::table('khanhtests')->select('address')->get();
        return view('khanh.column',compact('news'));
    }

    public function create()
    {
        return view('khanh.create');
    }


    public function store(Request $request)
    {
        $this->validate(request(),[
            'name'=>'required',
            'address'=>'required|max:100'
    ]);
        $a = new khanhtest;
        $a->name = $request->name;
        $a->address = $request->address;
        $a->save();
       // return 'them thanh cong';
        session()->flash('success','Thêm thành công');
        return redirect()->action([khanhggController::class,'create']);
    }

    public function show($id)
    {
        $news = khanhtest::where('id', '=', $id)->get();
        return view('khanh.infor', compact('news'));
    }


    public function edit($id)
    {

       $news = khanhtest::find($id);
        return view('khanh.update', compact('news'));
    }


    public function update(Request $request, $id)
    {
        $this->validate(request(),[
            'name'=>'required',
            'address'=>'required|max:100'
        ]);
        $news = khanhtest::find($id);
        $news->name = $request->name;
        $news->address=$request->address;
        $news->save();
       // return 'nhap thanh cong';
        return redirect()->action([khanhggController::class,'index']);
    }

    public function destroy($id)
    {
        $news = khanhtest::find($id);
        $news->delete();
        return redirect()->action([khanhggController::class,'index']);
    }
}
