<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyRequest;
use App\Models\Register;
use App\Models\Token;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function doRegister(CompanyRequest $request)
    {
        $messages=[];
        $data = $request->all();
        $validator= Validator::make($data,$messages);
        if ($validator->fails()){
            return back()->with('errors',$validator);
        }
        $data['password'] = bcrypt($request->password);
        if (!$request->has('Accept_rules')) {
            return back()->with('error','با خطا مواجه شد. مجدد امتحان کنید.');
        } elseif ($data['Accept_rules'] =true) {
            Register::create($data);
            return redirect()->route('index')->with('success','با موفقیت ارسال شد.');
        }


    }


    public function loginPhone()
    {
        return view('auth.login');
    }

    public function doLoginPhone(Request $request)
    {
        $data = $request->all();
        $this->validate($request, [
            'phone' => 'required|exists:users',
        ]);
        $user = User::where('phone', $request->input('phone'))->first();
        $token = Token::create([
            'user_id' => $user->id
        ]);
        $rememberMe = (!empty($request->remember_me)) ? TRUE : FALSE;
        if ($token->sendCode()) {

            \session()->put("code_id", $token->id);
            \session()->put("user_id", $user->id);
           \session()->put("remember", $rememberMe);
            return redirect()->route('verify')->with('success','کد با موفقیت ارسال شد');
        }
        $token->delete();
        return redirect()->route('loginPhone')->withErrors([
            "Unable to send verification code"
        ]);
    }

    public function verify()
    {
        return view('auth.login');
    }

    public function doVerify(Request $request)
    {
        $this->validate($request, [
            'code' => 'required|numeric'
        ]);
        if (!\session()->has('code_id') || !\session()->has('user_id'))
            redirect()->route('loginPhone');
        $token = Token::where('user_id', \session()->get('user_id'))->find(\session()->get('code_id'));
        if (!$token || empty($token->id))
            redirect()->route('loginPhone');
        if (!$token->isValid())
            redirect()->back()->withErrors('The code is either expired or used.');
        if ($token->code !== $request->input('code'))
            redirect()->back()->withErrors('The code is wrong.');
        $token->update(['used' => true]);
        $user = User::find(\session()->get('user_id'));
        $rememberMe = \session()->get('remember');
        \auth()->login($user, $rememberMe);
        return redirect()->route('index')->with('success','وارد شدید');
    }

    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect()->route('loginPhone');
    }

}
