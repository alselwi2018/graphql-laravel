<?php

namespace App\Http\Controllers;

use App\Models\breed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class BreedController extends Controller
{

    /**
     * get Breed from url
     *
     * @return void
     */
    public function getBreed()
    {
        $breed = Http::get('https://dog.ceo/api/breed/hound/images');
        return view('breed.list',['breeds' => json_decode($breed)]);
    }

    /**
     * random Image using api url
     *
     * @return void
     */
    public function randomImage()
    {
        $rand = Http::get('https://dog.ceo/api/breeds/image/random');
        return view('breed.random',['random' => json_decode($rand)]);
    }

    public function byBreed($id)
    {
        $breeds = Http::get('https://dog.ceo/api/breed/hound/afghan/images/random/'.$id);
        return view('breed.breed',['breeds'=>json_decode($breeds)]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('breed.breedstore.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $data = Http::get('https://dog.ceo/api/breeds/list');
        foreach(json_decode($data)->message as $key => $listing){
            //$time = implode(', ', $listing->times);
           // dd($listing);
         $breed =  breed::updateOrCreate( ['breed'=>$key]);
        }
         $k = 'breed_logs';
        $breed = Cache::get($k);
        Session::flash('success', 'Data has been saved successfully!');
        return   redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\breed  $breed
     * @return \Illuminate\Http\Response
     */
    public function show(breed $breed)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\breed  $breed
     * @return \Illuminate\Http\Response
     */
    public function edit(breed $breed)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\breed  $breed
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$breed)
    {
        Http::put(`https://dog.ceo/api/breed/hound/afghan/images/random/{$breed}`);



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\breed  $breed
     * @return \Illuminate\Http\Response
     */
    public function destroy(breed $breed)
    {
        //
    }
}
