<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::create(['name' => 'Admin', 'email' => 'admin@yambakar.com', 'password' => 'password', 'role' => 'admin']);
        User::create(['name' => 'Azzhel', 'email' => 'azzha@siswa.com', 'password' => 'password', 'role' => 'siswa', 'kelas' => 'XII RPL 2']);

        Book::create(['title' => 'Turunnya hujan', 'author' => 'Siri', 'publisher' => 'Erlang', 'year' => 2026, 'stock' => 6]);
        Book::create(['title' => 'Papua masih ada', 'author' => 'Saya', 'publisher' => 'Gramedia', 'year' => 2025, 'stock' => 5]);
        Book::create(['title' => 'Indonesia sedang tiak baiak-baik saja', 'author' => 'saca', 'publisher' => 'Tumbler', 'year' => 2027, 'stock' => 100]);
    }
}