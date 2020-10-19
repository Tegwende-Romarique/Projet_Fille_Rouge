<?php
namespace App\Http\Controllers\SupperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    use AuthenticatesUsers;

    protected $guard = 'SupperAdmin';

    protected $redirectTo = '/supperadmin/';

    protected function guard()
    {
        return Auth::guard($this->guard);
    }

    public function showLoginForm() 
    {
        return view('SupperAdmin.login');
    }

    

}