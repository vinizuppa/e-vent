<?php

namespace Database\Seeders;

use App\Models\Activity;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\Models\Configuration;
use App\Models\Event;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'eventfatec@gmail.com',
            'password' => Hash::make('senhaadmin123456'),
            'group' => 'Organizador'
        ]);

        Event::factory()
            ->count(10)
            ->for($admin)
            ->has(Activity::factory()->count(5))
            ->create();

        User::create([
            'name' => 'Renan da Mota Ciciliato',
            'email' => 'renanciciliato@gmail.com',
            'password' => Hash::make('@renandmc93'),
            'phone' => '18997128461',
            'document_name' => 'CPF',
            'document_number' => '41838639888',
            'group' => 'Participante'
        ]);

        User::create([
            'name' => 'Danilo Perez',
            'email' => 'ddanilopperez1997@gmail.com',
            'password' => Hash::make('danilo123456'),
            'phone' => '1490809989',
            'document_name' => 'CPF',
            'document_number' => '12345678999',
            'group' => 'Participante'
        ]);

        User::create([
            'name' => 'Vinicius Zuppa',
            'email' => 'vcordeiro12@gmail.com',
            'password' => Hash::make('123456789'),
            'phone' => '18999998888',
            'document_name' => 'CPF',
            'document_number' => '987654322111',
            'group' => 'Participante'
        ]);

        Configuration::upsert([
            ['label' => 'Chave Pix', 'name' => 'pixKey', 'value' => ''],
            ['label' => 'Nome recebedor Pix', 'name' => 'pixMerchantName', 'value' => ''],
            ['label' => 'Cidade recebedor Pix', 'name' => 'pixMerchantCity', 'value' => '']
        ], ['name'], ['label', 'value']);
    }
}
