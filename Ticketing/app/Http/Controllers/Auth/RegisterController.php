<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
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
    protected $redirectTo = '/jambolife';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
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
            'FirstName' => 'required|max:100',
            'LastName' => 'required|max:100',
            'OtherName' => 'required|max:100',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|same:pin_confirm',
            'pin_confirm' =>'required|min:6',
            'UserType' => 'required|max:12',
            'IdNumber' => 'required|max:15|unique:users',
            'dob' => 'required',
        ]);
    }


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'FirstName' => $data['FirstName'],
            'LastName' => $data['LastName'],
            'OtherName' => $data['OtherName'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'UserType' => $data['UserType'],
            'IdNumber' =>$data['IdNumber'],
            'dob' => $data['dob'],
]);
}

    }