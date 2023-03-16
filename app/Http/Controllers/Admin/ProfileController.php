<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Profile;
use App\Models\Admin\Setting;
use Hamcrest\Core\Set;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = Profile::where(['id' => auth()->user()->id])->first();
        return view('admin.layout.profile.index', compact('profile'));
    }

    public function notification()
    {

        return view('admin.layout.profile.changePassword');
    }

    public function connection()
    {
        $setting = Setting::find(1)->first();
        return view('admin.layout.profile.connection', compact('setting'));
    }

    public function update(Request $request)
    {
        $profile = Profile::where('user_id', auth()->user()->id)->first();
//        dd($request->all());
        $profile->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'organization' => $request->organization,
            'ph_number' => $request->ph_number,
            'address' => $request->address,
            'state' => $request->state,
            'zip_code' => $request->zip_code,
            'country' => $request->country,
            'language' => $request->language,
            'time_zone' => $request->time_zone,
            'currency' => $request->currency
        ]);
//        dd($profile);
        return redirect(route('admin.profile'))->with('success', 'profile updated');
    }
    public function social($name, Request $request){
        switch ($name)
        {
            case "google" : {
                $setting = Setting::where('id', 1)->first();
                $setting->update([
                   'google' => $request->google,
                ]);
                return redirect(route('admin.connection'));

            }
            case "slack" : {
                $setting = Setting::where('id', $name)->first();
                $setting->update([
                    'slack'=>$request->slack
                ]);
            }
            case "github" : {
                $setting = Setting::where('id', $name)->first();
                $setting->update([
                    'github'=>$request->github
                ]);
            }
            case "mailchimp" :{
                $setting = Setting::where('id', $name)->first();
                $setting->update([
                   'mailchimp'=>$request->mailchimp
                ]);
            }
            case "asana" :{
                $setting = Setting::where('id', $name)->first();
                $setting->update([
                    'asana'=>$request->asana
                ]);
            }
            case "facebook" :{
                $setting = Setting::where('id', $name)->first();
                $setting->update([
                    'facebook'=>$request->facebook
                ]);
            }
            case "twitter" :{
                $setting = Setting::where('id', $name)->first();
                $setting->update([
                    'twitter'=>$request->twitter
                ]);
            }
            case "instagram" :{
                $setting = Setting::where('id', $name)->first();
                $setting->update([
                    'instagram'=>$request->instagram
                ]);
            }
            case "telegram" :{
                $setting = Setting::where('id', $name)->first();
                $setting->update([
                    'telegram'=>$request->telegram
                ]);
            }
            case "youtube" :{
                $setting = Setting::where('id', $name)->first();
                $setting->update([
                    'youtube'=>$request->youtube
                ]);
            }
        }
    }



}
