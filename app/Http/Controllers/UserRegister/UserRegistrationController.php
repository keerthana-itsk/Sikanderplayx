<?php

namespace App\Http\Controllers\UserRegister;

use App\Http\Controllers\Controller;
use App\Models\LeadSource;
use App\Models\PlatForm;
use App\Models\UserRegistration;
use App\Models\bank_detail;
use App\Models\deposit;
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
        $data = $request->validate([
            'user_name' => 'required',
            'name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'alternative_mobile' => 'required',
            'dob' => 'required',
            'location' => 'required',
            'lead_source' => 'required',
            'account_name.*' => 'nullable|string', // Use dot notation for array fields
            'account_number.*' => 'nullable|string', // Use dot notation for array fields
            'ifsc_code.*' => 'nullable|string', // Use dot notation for array fields
            'bank_name.*' => 'nullable|string', // Use dot notation for array fields
            'platform' => 'required',
            'utr' => 'required',
            'deposit_amount' => 'required',
            'bonus' => 'required',
            'total_deposit_amount' => 'required',
            'image' => 'required',
        ]);


        $userRegistration = UserRegistration::create([
            'user_id' => $request->input('user_name'),
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'mobile' => $request->input('mobile'),
            'alternative_mobile' => $request->input('alternative_mobile'),
            'dob' => $request->input('dob'),
            'location' => $request->input('location'),
            'lead_source_id' => $request->input('lead_source'),

        ]);
        // dd($userRegistration);
        $accountNames = $request->input('account_name');
        $accountNumbers = $request->input('account_number');
        $ifscCodes = $request->input('ifsc_code');
        $bankNames = $request->input('bank_name');

        foreach ($accountNames as $key => $accountName) {
            if (!empty($accountName)) {
                $data = [
                    'user_id' => $userRegistration->id,
                    'account_number' => $accountNumbers[$key],
                    'ifsc_code' => $ifscCodes[$key],
                    'bank_name' => $bankNames[$key],
                ];

                // Use updateOrInsert to handle duplicates by account_number
                bank_detail::updateOrInsert(
                    ['account_number' => $accountNumbers[$key]],
                    $data
                );
            }
        }



        // dd('success');

        $depositData = [
            'user_id' => $userRegistration->id,
            'platform_id' => $request->input('platform'),
            'utr' => $request->input('utr'),
            'deposit_amount' => $request->input('deposit_amount'),
            'bonus' => $request->input('bonus'),
            'total_deposit_amount' => $request->input('total_deposit_amount'),
        ];

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images');
            $depositData['image'] = $imagePath;
        }

        $deposit = deposit::create($depositData);


        return redirect()->route('UserRegister.index');
    }

    public function edit()
    {
        $data = User::get();
        $lead_source = LeadSource::get();

        return view('UserRegister.create', compact('data','lead_source'));
    }
}
