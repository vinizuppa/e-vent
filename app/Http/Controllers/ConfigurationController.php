<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Configuration;
use App\Utils\Pix\Payload;

class ConfigurationController extends Controller
{

    public function index()
    {
        $pixKey = Configuration::firstWhere('name', 'pixKey')->value;
        $merchantName = Configuration::firstWhere('name', 'pixMerchantName')->value;
        $merchantCity = Configuration::firstWhere('name', 'pixMerchantCity')->value;
        $payload = ($pixKey == '' || $merchantName == '' || $merchantCity == '') ? '' : (new Payload())
            ->setPixKey($pixKey)
            ->setDescription('Teste Pix Event')
            ->setMerchantName($merchantName)
            ->setMerchantCity($merchantCity)
            ->setAmount(0.01)
            ->setTxid('testePix')->getPayload();
        return view('admin.configurations.index', [
            'configurations' => Configuration::all(),
            'payload' => $payload
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
