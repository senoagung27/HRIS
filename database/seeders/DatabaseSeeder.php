<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\User;
use App\Models\StokJubelio;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\UserSeeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        // StokJubelio::factory(20)->create();
        // insert data ke table pegawai
        // DB::table('stok_jubelios')->insert([
        // 	'nama_tenant' => 'Dingin Segar',
        // 	'sku_number' => 'INDM2235',
        // 	'nama_barang' => 'Indomie Soto',
        // 	'lokasi_gudang' => 'Jakarta Selatan',
        // 	'nama_mp' => 'Shopee',
        // 	'total_stok' => 5
        // ]);
        // DB::table('stok_jubelios')->insert([
        // 	'nama_tenant' => 'Dingin Segar',
        // 	'sku_number' => 'INDM2232',
        // 	'nama_barang' => 'Indomie Ayam Bawang',
        // 	'lokasi_gudang' => 'Jakarta Selatan',
        // 	'nama_mp' => 'Shopee',
        // 	'total_stok' => 5
        // ]);
        // DB::table('stok_jubelios')->insert([
        // 	'nama_tenant' => 'Dingin Segar',
        // 	'sku_number' => 'DK2234',
        // 	'nama_barang' => 'Indomie Ayam Bawang',
        // 	'lokasi_gudang' => 'Jakarta Selatan',
        // 	'nama_mp' => 'Shopee',
        // 	'total_stok' => 5
        // ]);

        // DB::table('stok_jubelios')->insert([
        // 	'nama_tenant' => 'Dingin Segar',
        // 	'sku_number' => 'DK2233',
        // 	'nama_barang' => 'Indomie Kari Ayam',
        // 	'lokasi_gudang' => 'Jakarta Selatan',
        // 	'nama_mp' => 'Shopee',
        // 	'total_stok' => 5
        // ]);


        // DB::table('stok_f_f_s')->insert([
        // 	'nama_tenant' => 'Dingin Segar',
        // 	'sku_number' => 'INDM2235',
        // 	'nama_barang' => 'Indomie Soto',
        // 	'lokasi_gudang' => 'Jakarta Selatan',
        // 	'total_stok' => 5
        // ]);
        // DB::table('stok_f_f_s')->insert([
        // 	'nama_tenant' => 'Dingin Segar',
        // 	'sku_number' => 'INDM2232',
        // 	'nama_barang' => 'Indomie Ayam Bawang',
        // 	'lokasi_gudang' => 'Jakarta Selatan',
        // 	'total_stok' => 5
        // ]);
        // DB::table('stok_f_f_s')->insert([
        // 	'nama_tenant' => 'Dingin Segar',
        // 	'sku_number' => 'DK2234',
        // 	'nama_barang' => 'Indomie Ayam Bawang',
        // 	'lokasi_gudang' => 'Jakarta Selatan',
        // 	'total_stok' => 3
        // ]);

        // DB::table('stok_f_f_s')->insert([
        // 	'nama_tenant' => 'Dingin Segar',
        // 	'sku_number' => 'DK2233',
        // 	'nama_barang' => 'Indomie Kari Ayam',
        // 	'lokasi_gudang' => 'Jakarta Selatan',
        // 	'total_stok' => 5
        // ]);
        // StokJubelio::factory()
        //     ->count(50)
        //     ->hasPosts(1)
        //     ->create();

        // User::factory()->create([
        //     'name' => 'Super Admin',
        //     'email' => 'admin@gmail.com',
        //     'password' => Hash::make('12341234'),
        //     'remember_token' => Str::random(10)
        // ]);
        $this->call(CreateAdminUserSeeder::class);
    }
}
