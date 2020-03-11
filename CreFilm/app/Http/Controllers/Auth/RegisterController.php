<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Faker\Provider\Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index(){

    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {

        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],

            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
//        $request = app('request');
//        if($request->hasfile('img_profile')){
//            $img_profile = $request->file('img_profile');
//            $avatar = Date('YmdHis'). '.' . $img_profile->getClientOriginalExtension();
//            $request->file('img_profile')->resize(300, 300)->save( public_path('/uploads/img_profile' . $avatar) );
//        }
//        dd($avatar);

//        $request = request();
//
//        $profileImage = $request->file('img_profile');
//        $extension = $request->file('img_profile')->getClientOriginalName();
//        $profileImageSaveAsName = Date('YmdHis').Auth::id()."-profile.".$extension;
//
//        $upload_path = '/uploads/img_profile';
//        $profile_image_url = $upload_path . $profileImageSaveAsName;
//        $success = $profileImage->move($upload_path, $profileImageSaveAsName);
//
//        dd($profile_image_url);
        return User::create([
            'name' => $data['name'],
//            'img_profile' => $profile_image_url,
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
