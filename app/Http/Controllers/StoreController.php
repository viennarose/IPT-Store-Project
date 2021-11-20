<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Store;
class StoreController extends Controller
{
    public function index(){
        $stores = Store::orderByRaw('name, net_worth')->limit(100)->get();
        return view('stores.index', ['stores' => $stores]);
    }
    public function create(){
        return view('stores.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'location' => 'required',
            'owner' => 'required',
            'net_worth' => 'required'
        ]);

        Store::create([
            'name' => $request['name'],
            'location' => $request['location'],
            'owner' => $request['owner'],
            'net_worth' => $request['net_worth']

        ]);

        return redirect('/stores')->with('info', 'A new store has been added.');
    }
}
