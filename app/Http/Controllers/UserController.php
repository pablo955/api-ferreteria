<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Validator;
use App\Helpers\JwtAuth;


class UserController extends Controller
{
    //

    public function register(Request $request){
        /**
     * Create user
     *
     * @param  [string] name
     * @param  [string] email
     * @param  [string] password
     *
     * @return [string] json
     */

        $json = $request->input('json',null);
        $param = json_decode($json);
        $param_array = json_decode($json,true); //array

        if(!empty($param) && !empty($param_array)){
            $validate = Validator::make($param_array , [
                'name'  => 'required|string',
                'email' => 'required|string|email|unique:users',
                'password' => 'required'
            ]);

            if($validate->fails()){
                return response()->json([
                    "success" => false,
                    "status" => 'error',
                    'message' => 'El usuario no se ah creado.',
                    'error' => $validate->errors()
                ],400);
            }else{
                $pass = hash('sha256', $param->password);
                $user = new User([
                    'name' => $param_array['name'],
                    'email' => $param_array['email'],
                    'password' => $pass,
                ]);

                $user->save();

                return response()->json([
                    "success" => true,
                    "data" => $user,
                    'message' => 'Usuario se ah creado con éxito!'
                ],201);
            }
        }else{
            return response()->json([
                "success" => false,
                "status" => 'error',
                'message' => 'Los datos enviados no son correctos',
            ],400);
        }
    }

    public function login(Request $request){
        $jwtAuth = new JwtAuth();

        $json = $request->input('json' , null);
        $params = json_decode($json);
        $param_array = json_decode($json , true);

        $validate = Validator::make($param_array , [
            'email' => 'required|string|email',
            'password' => 'required'
        ]);

        if($validate->fails()){
            return response()->json([
                "success" => false,
                "status" => 'error',
                'message' => 'El usuario no se ah podido identificar.',
                'error' => $validate->errors()
            ],400);
        }
        else{
            $pass = hash('sha256' , $params->password);

            $signup = $jwtAuth->signup($params->email , $pass);

            if(!empty($params->getToken)){
                $signup = $jwtAuth->signup($params->email , $pass, true);
            }
        }


        return response()->json($signup);
    }

    public function update(Request $request){
        $token = $request->header('Authorization');

        $jwtAuth = new JwtAuth();

        $json = $request->input('json' , null);
        $param_array = json_decode($json,true);

        $checkToken = $jwtAuth->checkToken($token);


        if($checkToken && !empty($param_array)){

            $dataUser = $jwtAuth->checkToken($token,true);
            $validate = Validator::make($param_array , [
                'name'  => 'required|string',
                'email' => 'required|string|email|unique:users,'.$dataUser->sub
            ]);


            unset($param_array['id']);
            unset($param_array['password']);
            unset($param_array['create_ad']);
            unset($param_array['remember_token']);

            $user_update = User::where('id' , $dataUser->sub)->update($param_array);

            return response()->json([
                "success" => true,
                "data" => $user_update,
                'message' => 'Usuario se ah modificado con éxito!'
            ],200);
        }else{
            return response()->json([
                "success" => false,
                "status" => 'error',
                'message' => 'El usuario no esta identificado.'
            ],400);
        }
    }
}
