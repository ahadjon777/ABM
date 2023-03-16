<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $set = Setting::where('id', 1)->first();
        return view('admin.layout.setting.index', compact('set'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setting $setting)
    {
        $setting = Setting::where('id', 1)->first();
        $request->validate([
            'logo' => 'mimes:jpeg,bmp,png,gif,svg'
        ]);

        if($request->hasFile('logo')){
            $image_path = $request->file('logo')->store('image');
            $setting->update([
                'brand_name'=>$request->brand_name,
                'site_status'=>$request->site_status,
                'site_name'=>$request->site_name,
                'status_mess'=>$request->status_mess,
                'site_info'=>$request->site_info,
                'name'=>$request->name,
                'company_name'=>$request->company_name,
                'email'=>$request->email,
                'phone_number'=>$request->phone_number,
                'message'=>$request->message,
                'instagram'=>$request->instagram,
                'youtube'=>$request->youtube,
                'twitter'=>$request->twitter,
                'telegram'=>$request->telegram,
                'logo'=>$image_path
            ]);
            return redirect(route('admin.setting'));
        }
        $setting->update([
            'brand_name'=>$request->brand_name,
            'site_status'=>$request->site_status,
            'site_name'=>$request->site_name,
            'status_mess'=>$request->status_mess,
            'site_info'=>$request->site_info,
            'name'=>$request->name,
            'company_name'=>$request->company_name,
            'email'=>$request->email,
            'phone_number'=>$request->phone_number,
            'message'=>$request->message,
            'instagram'=>$request->instagram,
            'youtube'=>$request->youtube,
            'twitter'=>$request->twitter,
            'telegram'=>$request->telegram,
        ]);
       return redirect(route('admin.setting'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
