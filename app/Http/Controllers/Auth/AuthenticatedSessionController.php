<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Models\Kela AS Kelas;
use Firebase\JWT\JWT;
use Illuminate\Support\Facades\Cookie;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Session;

class AuthenticatedSessionController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth:apiWeb,apiManager,apiGuru,apiSiswa'], ['except' => ['store', 'create']]);
    }
    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function createNewToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth($this->guardName())->factory()->getTTL() * 60,
            'user' => auth($this->guardName())->user(),
        ]);
    }
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // TODO: SEHARUSNYA BUKAN KYK GINI TAPI KARENA DEADLINE
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required|string',
        ]);

        $data =  ["username" => $request->username, "password" => $request->password];
        $jwt = JWT::encode($data, "1342423424324324234"); // set cookie
        //Session::set('user_data', $jwt);
        setcookie("user_data", $jwt, time() + (86400 * 30), "/"); // 86400 = 1 day
    
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        if (!$token = auth('apiManager')->attempt(['nik' => $request->username, 'password' => $request->password])) {
            if (!$token = auth('apiGuru')->attempt(['nik' => $request->username, 'password' => $request->password])) {
                if (!$token = auth('apiSiswa')->attempt(['nipd' => $request->username, 'password' => $request->password])) {
                    if (!$token = auth('apiWeb')->attempt(['email' => $request->username, 'password' => $request->password])) {
                        return response()->json(['error' => 'Unauthorized'], 401);
                    } else {
                        Config::set('jwt.user', 'App\Models\User');
                        Config::set('auth.providers.users.model', \App\Models\User::class);
                    }
                } else {
                    Config::set('jwt.user', 'App\Models\Siswa');
                    Config::set('auth.providers.users.model', \App\Models\Siswa::class);
                }
            } else {
                Config::set('jwt.user', 'App\Models\Guru');
                Config::set('auth.providers.users.model', \App\Models\Guru::class);
            }
        } else {
            Config::set('jwt.user', 'App\Models\Manager');
            Config::set('auth.providers.users.model', \App\Models\Manager::class);
        }
        return response()->json(['redirect' => route(Str::after(Str::lower($this->guardName()), 'api') . '.dashboard'), $this->createNewToken($token)], 200);

        // return redirect()->back();
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        auth($this->guardName())->logout();
        return response()->json(['message' => 'successfully signed out'], 200);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->createNewToken(auth($this->guardName())->refresh());
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function userProfile()
    {
       // $userdata = JWT::decode($_COOKIE['user_data'],"1342423424324324234", array('HS256')); // take user & password

        //hapus ini jika $_COOKIE['user_data'] sudah ada isinya
        $encode_cookies = JWT::encode(["username" => "1920100259" ,"password" =>"password"], "1342423424324324234"); // take user & password
        $userdata = JWT::decode($encode_cookies,"1342423424324324234", array('HS256')); // take user & password

        // $auth_token = // need token here
        if($this->guardName() == "apiSiswa"){
            $kelas = Kelas::where('id', auth($this->guardName())->user()["kelas_id"])->first();
            $token= [
                "token" =>  $_COOKIE['token_user'],
                "auth"=>$userdata,
                "user_data"=>auth($this->guardName())->user(),
                "role" => $this->guardName(),
                "kelas" => $kelas,
            ];
            $jwt = JWT::encode($token,"1342423424324324234");
            return response()->json(["token" => $jwt], 200)->header("Access-Control-Allow-Origin",  "*");;
        }
        $token =[
            "token" => $_COOKIE['token_user'],
            "auth" => $userdata,
            "user_data"=>auth($this->guardName())->user(),
            "role"=>$this->guardName(),
        ];
        $jwt = JWT::encode($token, "1342423424324324234");
        return response()->json(["token" => $jwt], 200)->header("Access-Control-Allow-Origin",  "*");;
    }

    /**
     * Get the Guard Name.
     *
     *
     */
    private function guardName()
    {
        if (!$guard = auth('apiManager')->check()) {
            if (!$guard = auth('apiGuru')->check()) {
                if (!$guard = auth('apiSiswa')->check()) {
                    if (!$guard = auth('apiWeb')->check()) {
                        return;
                    }
                    return 'apiWeb';
                }
                return 'apiSiswa';
            }
            return 'apiGuru';
        }
        return 'apiManager';
    }
}
