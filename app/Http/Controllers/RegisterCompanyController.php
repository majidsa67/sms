<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyRequest;
use App\Models\RegisterCompany;
use App\Models\User;
use Illuminate\Http\Request;
use function Faker\Provider\pt_BR\check_digit;

class RegisterCompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = RegisterCompany::all();

        return view('/auth/index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/auth/register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $input = $request->all();
//        $input['trend'] = $request->input('trend');
//        $checked=$input['Accept_rules'];
//        if ($checked==1) {
//        RegisterCompany::create($input);
//        return back();

            $inputs = $request->all();
            $this->validate($request, [
                'name' => 'required',
                'company_email' => 'required|email|unique:users',
                'password' => 'required|confirmed',
                'trend' => 'required',
                'office_address' => 'required',
                'Laboratory_address' => 'required',
                'office_phone_number' => 'required|numeric|min:8|max:11',
                'IDPay' => 'min:26|max:26',
            ]);
            $inputs['password'] = bcrypt($request->password);
//            if ($inputs['Accept_rules']=check_digit(1)) {
                $user = RegisterCompany::create($inputs);
                auth()->login($user);
                return redirect('/auth/index');
//            }

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
}
