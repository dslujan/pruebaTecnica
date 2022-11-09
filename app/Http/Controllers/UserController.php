<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules;

class UserController extends Controller
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request){
        $user = User::select("*", "password")->where("id", $request->id)->first();
        
        return $datos = json_encode($user);
        echo '{"success": true, "data": '.$datos.'}';
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
    public function update(Request $request)
    {
        User::where('id', $request->id)
        ->update([
            'rfc' => $request->rfc,
            'phone' => $request->phone,
            'notas' => $request->notas,
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return Redirect::back()->with('success','Registro creado satisfactoriamente');
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

    public function all_user(){
        $user = User::all();
        return response()->json($user);
    }

    public function unique_user($id){
        $user = User::where('id', $id)->first();
        return response()->json($user);
    }

    public function insert_user(Request $request){
        dd('Hola');
        try {
            $validator = Validator::make($request->all(),[
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
                'phone' => ['required', 'string', 'max:255'],
                'notas' => ['required'],
                'rfc' => ['required'],
            ]);

            if($validator->fails()){
                return $response['response'] = $validator->messages();
            }
    
            $user = User::create([
                'rfc' => $request->rfc,
                'phone' => $request->phone,
                'notas' => $request->notas,
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
        } catch( \Exception $e){
            return $response['response'] = $e;
        }
    }
}
