<?php

namespace Database\Seeders;

use App\Models\BookCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('book_categories')->delete();

        $booksCategories = [
            [
                'id' => '1', 'name' => 'Fiction','status' => 1
            ],
            [
                'id' => '2', 'name' => 'Mystery','status' => 1
            ],
            [
                'id' => '3', 'name' => 'Romance','status' => 1
            ],
            [
                'id' => '4', 'name' => 'Science fiction','status' => 1
            ],
            [
                'id' => '5', 'name' => 'Fantasy','status' => 1
            ],
            [
                'id' => '6', 'name' => 'Historical fiction','status' => 1
            ],
            [
                'id' => '7', 'name' => 'Biography','status' => 1
            ],
            [
                'id' => '8', 'name' => 'Self-help','status' => 1
            ],
            [
                'id' => '9', 'name' => 'Travel','status' => 1
            ],
            [
                'id' => '10', 'name' => 'Thriller','status' => 1
            ],
            [
                'id' => '11', 'name' => 'Poetry','status' => 1
            ],
            [
                'id' => '12', 'name' => 'Philosophy','status' => 1
            ],
            [
                'id' => '13', 'name' => 'Science','status' => 1
            ],
            [
                'id' => '14', 'name' => 'Psychology','status' => 1
            ],
            [
                'id' => '15', 'name' => 'Non-fiction','status' => 1
            ]
        ];

        foreach ($booksCategories as $booksCategories) {
            BookCategory::create($booksCategories);
        }
    }
}
