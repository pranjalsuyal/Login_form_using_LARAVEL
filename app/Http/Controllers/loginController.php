<?php

namespace App\Http\Controllers;

use Users;
use DB;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

class loginController extends BaseController
{
    public function login(Request $req){
      $username = $req->input('username');
      $password = $req->input('password');

      $hashed_password =password_hash($password, PASSWORD_DEFAULT); //crypt($password);
      $checkLogin = DB::table('users')->where(['username'=>$username,'password'=>$password])->get();
      if(count($checkLogin)>0){
        $message = array(
          "Name"=>"$username",
          "Password"=>"$password"
        );
        return json_encode($message);
        echo "Successful Login !<br />";
        echo "Hello  ".$username."<br />";
        echo "Password".$hashed_password."<br />";
        print_r($req->input());
      }
      else{
        echo "UnSuccessful Login , Details must be wrong";
      }
    }
}

?>
