<?php

namespace App\Http\Controllers\UserRegister;

use App\Http\Controllers\Controller;
use App\Models\LeadSource;
use App\Models\PlatForm;
use App\Models\User;
use Illuminate\Http\Request;

class UserRegistrationController extends Controller
{
    public function index()
    {
        return view('UserRegister.index');
    }

    public function create()
    {
        $data = User::get();
        $lead_source = LeadSource::get();
        $platform = PlatForm::get();


        return view('UserRegister.create', compact('data','lead_source', 'platform'));
    }

    public function store(Request $request)
    {


      $request->validate([
            'user_name'=>'required',
            'name'=>'required',
            'email'=>'required',
            'mobile'=>'required',
            'alternative_mobile'=>'required',
            'dob'=>'required',
            'location'=>'required',
            'lead_source'=>'required',
            'location'=>'required',
            'email'=>'required',
            'email'=>'required',
            'email'=>'required',
            'email'=>'required',
            'email'=>'required',
         ]);

    //      $input=[
    //         'name'=>$request['name'],
    //         'code'=>$request['code'],
    //     ];
    //     ModelsLeadSource::create($input);
    //     return redirect()->route('lead.index');

    }

    public function edit()
    {
        $data = User::get();
        $lead_source = LeadSource::get();

        return view('UserRegister.create', compact('data','lead_source'));
    }
}
