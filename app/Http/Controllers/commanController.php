<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\multiimage;

class commanController extends Controller
{
    public function multiImage()
    {
        $multiple = multiimage::all();
    	return view('common.multiImage',compact('multiple'));
    }

    public function imageUpload(Request $request)
    {

        // $this->validate($request,[
        //         'imageupload'=>'required|mimes:jpeg,png,jpg,gif,svg|max:2048'
        //     ]);

    	if($request->hasFile('imageupload'))
    	{
    		foreach ($request->imageupload as $img) {
    			$name = $img->getClientOriginalName();
                $filename = rand(100,200).$name;
    			$img->storeAs('public/multi',$filename);

    			$data = new multiimage();
    			$data->image = $filename;
    			$data->save();
    		}
    	}
    	session()->flash('message','Images Upload Successfully...');
        return redirect('/multiImage');
    }
}
