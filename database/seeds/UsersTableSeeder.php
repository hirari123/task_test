<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // クエリビルダ
        // ログインするユーザーの初期値の設定
        DB::table('users')->insert([
            [
            'name' => 'ししし',
            'email' => 'sisisi@sisisi.com',
            'password' => Hash::make('password123'),
            ],
            [
            'name' => 'こここ',
            'email' => 'kokoko@kokoko.com',
            'password' => Hash::make('password123'),
            ],
            [
            'name' => 'くくく',
            'email' => 'kukuku@kukuku.com',
            'password' => Hash::make('password123'),
            ],
    
         ]);
    }
}
