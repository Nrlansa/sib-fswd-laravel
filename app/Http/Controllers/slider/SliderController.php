<?php

namespace App\Http\Controllers\slider;

use Illuminate\Http\Request;
use App\Models\slider\Slider;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    function index()
    {
        $data['list_slider'] = Slider::all();
        return view('slider.index', $data);
    }
    function create()
    {
        return view('slider.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'url' => 'required',
            'banner' => 'required|image|max:2048', 
        ]);

        $imagePath = $request->file('banner')->store('sliders', 'public');

        $slider = new Slider();
        $slider->name =  request('name');
        $slider->name =  request('name');
        $slider->url =  request('url');
        $slider->banner = $imagePath ;

        
        $slider->save();

        return redirect('/slider')->with('success', 'Gambar berhasil ditambahkan');
    }
    public function show(Slider $slider)
    {
        $data['slider'] = $slider;
        return view('slider.show', $data);
    }
    public function destroy(Slider $slider)
    {
        if ($slider->banner) {
            
            Storage::delete($slider->banner);
        }

        $slider->delete();

        return redirect('/slider')->with('success', 'Data slider berhasil dihapus');
    }
}
