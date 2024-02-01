<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Enterprise;
use App\Models\Image;
use App\Models\Offer;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Admin::factory()->create();
        Enterprise::factory()->create();
        Offer::create([
            'name' => 'Foto/Video',
            'price' => 'od 1500 PLN'
        ]);
        Offer::create([
            'name' => 'Inspekcja Termowizyjna',
            'price' => 'od 1000 PLN'
        ]);
        Offer::create([
            'name' => 'Pomiar zanieszczyczeń PM10 oraz PM2.5',
            'price' => '500 PLN'
        ]);
        Offer::create([
            'name' => 'Modelowanie 3D',
            'price' => 'od 1500 PLN'
        ]);
        Offer::create([
            'name' => 'Fotogrametria',
            'price' => 'od 3000 PLN'
        ]);
        Image::create([
            'tags' => 'drone, mountain, goldenhour',
            'file_path' => 'images/aerial-4540834_640.jpg'
        ]);
        Image::create([
            'tags' => 'drone, beach, topdown',
            'file_path' => 'images/beach-4816249_640.jpg'
        ]);
        Image::create([
            'tags' => 'drone, beach, sunset, topdown',
            'file_path' => 'images/beach-island-7054907_640.jpg'
        ]);
        Image::create([
            'tags' => 'drone, topdown, forest',
            'file_path' => 'images/drone-4605203_640.jpg'
        ]);
        Image::create([
            'tags' => 'drone, forest, foggy',
            'file_path' => 'images/fog-6122490_640.jpg'
        ]);
        Image::create([
            'tags' => 'drone, topdown, road',
            'file_path' => 'images/road-4564817_640.png'
        ]);
        Image::create([
            'tags' => 'drone, lake, yacht',
            'file_path' => 'images/waters-3189595_640.jpg'
        ]);
        Image::create([
            'tags' => 'drone, topdown, road, autumn',
            'file_path' => 'images/way-3793595_640.jpg'
        ]);
    }
}
