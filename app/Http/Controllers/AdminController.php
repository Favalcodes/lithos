<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function register(){
      return view('website\backend\Auth\register');
    }

    public function login(){
        return view('website.backend.Auth.login');
    }

    public function postRegister(Request $request){
        $this->validate($request,[
            'email'=>'email|required|unique:users',
            'name'=> 'required',
            'password'=>'required|min:4'
        ]);
        $email = $request['email'];
        $name = $request['name'];
        $password = bcrypt($request['password']);

        $admin= New Admin();
        $admin->email=$email;
        $admin->name=$name;
        $admin->password=$password;
        
        if ($admin->save()) {
            // Auth::gaurd('admin')->login($admin);
            return 'saved';
            
        }
    }
  
      public function postLogin(Request $request){
        $this->validate($request,[
            'email'=>'email|required',
            'password'=>'required'
        ]);

        if(Auth::guard('admin')->attempt(['email'=>$request['email'],'password'=>$request['password']])){
            return redirect()->route('backend.index');
            // return Auth::guard('admin')->user();
        }
      }

      public function logOut(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
      }
  

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }


}
