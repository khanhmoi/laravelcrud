<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserController extends Controller
{

    public function index()
    {
        //tao role vs permission
        //$role = Role::create(['name' => 'admin']);
        //$permission = Permission::create(['name' => 'create']);


        //gan permission cho role
        //$role = Role::find(2);
        //$permission = Permission::find(5);
        //$role->givePermissionTo($permission);


        //
       // $user = User::find(1);
        //$user->assignRole('admin');

       // $user = User::find(2);
        //$user->givePermissionTo('edit articles');
        $users = User::all();
        return view('hanh.listuser',compact('users'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
