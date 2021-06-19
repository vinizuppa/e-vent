<?php

namespace App\Http\Controllers;

use App\Models\Configuration;
use Illuminate\Http\Request;

class ConfigurationController extends Controller
{

    public function index()
    {
        return view('admin.configurations.index', [
            'configurations' => Configuration::all()
        ]);
    }

    public function create()
    {
        $configurations = Configuration::all();
        return view('admin.configurations.create', [
            'configurations' => $configurations
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'pixKey' => 'required|string',
            'pixMerchantName' => 'required|string',
            'pixMerchantCity' => 'required|string'
        ]);
        Configuration::upsert([
            ['label' => 'Chave Pix', 'name' => 'pixKey', 'value' => $request->pixKey],
            ['label' => 'Nome recebedor Pix', 'name' => 'pixMerchantName', 'value' => $request->pixMerchantName],
            ['label' => 'Cidade recebedor Pix', 'name' => 'pixMerchantCity', 'value' => trim(strtoupper($request->pixMerchantCity))]
        ], ['name'], ['label', 'value']);
        return redirect()->route('configurations.index');
    }

}
