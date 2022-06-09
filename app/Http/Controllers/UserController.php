<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmail;
use App\Models\File;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\Session\Session;


class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view( 'authentication/sign_up' , compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(array $data)
    {
        return User::create([
            'firstname' => $data['first-name'],
            'lastname' => $data['last-name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return string
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $email = $request->get('email');
//        $results = DB::select('select * from users where email = :email' , ['email' => $email]);
        $results = User::where('email', $email)->get();
//        dd($results);
        if ($results->count()){
            $userObject = $results->load('profiles.tiers.files')->first();
            $profile = $userObject->profiles->first();
            if ($profile) {
                $tier = $profile->tiers()->first();
                $option = $tier['option'];
                if ($tier) {
                    $files = $tier->files()->get()->toArray();
                    foreach ($files as $file) {
                        if ($file['pivot']['type'] == "background") {
                            $filePath = $file['file_path'];
                            Cache::put("user_login_token".$results->first()->id, rand(1000,9999), 180);
                            SendEmail::dispatch(
                                $results->first()->email,
                                Cache::get('user_login_token'.$results->first()->id, 'default')
                            );
//                            $this->dispatch(SendEmail::class);
                            $session = new Session();
                            $session->set('file_path', $filePath);
                            $session->set('email', $results->first()->email);
                            $session->set('user_id', $results->first()->id);
                            $session->set('option', $option);
                            return Redirect::route('login_confirm');
                        }
                    }
                }
            }

        }
        else {
            return back();
        }


    }

    public function getToken(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request, $id)
    {
        //
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

//    public function customLogin(Request $request)
//    {
//        $request->validate([
//            'email' => 'required',
//        ]);
//
//        $credentials = $request->only('email');
//        if (Auth::attempt($credentials)) {
//            return redirect()->intended('profile')
//                ->withSuccess('Signed in');
//        }
//
//        return redirect("login")->withSuccess('Login details are not valid');
//    }


    public function customRegistration(Request $request)
    {
        $request->validate([
            'first-name' => 'required',
            'last-name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
//        dd($data);
        $check = $this->create($data);

        return redirect("successlogin")->withSuccess('You have signed-in');
    }

    public function dashboard()
    {
        if(Auth::check()){
            return view('successlogin');
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }

    public function signOut() {
        Session::flush();
        Auth::logout();

        return Redirect('register');
    }

    public function info()
    {
        $info = User::with('profile.tiers.files')->get()->toArray();
        dd($info);
    }

}
