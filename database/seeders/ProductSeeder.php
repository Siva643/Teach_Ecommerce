<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name'=>'Oppo Mobile',
                'price'=>'300',
                'description'=>'good mobile',
                'category'=>'Mobile',
                'gallery'=>'https://m.media-amazon.com/images/I/51i84+E-LgL._AC_SR400,600_.jpg'
            ],
            [
                'name'=>'Oppo Mobile',
                'price'=>'300',
                'description'=>'good mobile',
                'category'=>'Mobile',
                'gallery'=>'https://m.media-amazon.com/images/I/51i84+E-LgL._AC_SR400,600_.jpg'
            ],
            [
                'name'=>'Oppo Mobile',
                'price'=>'300',
                'description'=>'good mobile',
                'category'=>'Mobile',
                'gallery'=>'https://m.media-amazon.com/images/I/51i84+E-LgL._AC_SR400,600_.jpg'
            ],
            [
                'name'=>'Oppo Mobile',
                'price'=>'300',
                'description'=>'good mobile',
                'category'=>'Mobile',
                'gallery'=>'https://m.media-amazon.com/images/I/51i84+E-LgL._AC_SR400,600_.jpg'
            ],
            [
                'name'=>'Oppo Mobile',
                'price'=>'300',
                'description'=>'good mobile',
                'category'=>'Mobile',
                'gallery'=>'https://m.media-amazon.com/images/I/51i84+E-LgL._AC_SR400,600_.jpg'
            ],
            [
                'name'=>'Oppo Mobile',
                'price'=>'300',
                'description'=>'good mobile',
                'category'=>'Mobile',
                'gallery'=>'https://m.media-amazon.com/images/I/51i84+E-LgL._AC_SR400,600_.jpg'
            ],
            [
                'name'=>'Oppo Mobile',
                'price'=>'300',
                'description'=>'good mobile',
                'category'=>'Mobile',
                'gallery'=>'https://m.media-amazon.com/images/I/51i84+E-LgL._AC_SR400,600_.jpg'
            ],
            [
                'name'=>'Oppo Mobile',
                'price'=>'300',
                'description'=>'good mobile',
                'category'=>'Mobile',
                'gallery'=>'https://m.media-amazon.com/images/I/51i84+E-LgL._AC_SR400,600_.jpg'
            ],
            [
                'name'=>'Oppo Mobile',
                'price'=>'300',
                'description'=>'good mobile',
                'category'=>'Mobile',
                'gallery'=>'https://m.media-amazon.com/images/I/51i84+E-LgL._AC_SR400,600_.jpg'
            ],
            [
                'name'=>'Oppo Mobile',
                'price'=>'300',
                'description'=>'good mobile',
                'category'=>'Mobile',
                'gallery'=>'https://m.media-amazon.com/images/I/51i84+E-LgL._AC_SR400,600_.jpg'
            ],
            [
                'name'=>'Oppo Mobile',
                'price'=>'300',
                'description'=>'good mobile',
                'category'=>'Mobile',
                'gallery'=>'https://m.media-amazon.com/images/I/51i84+E-LgL._AC_SR400,600_.jpg'
            ],

        ]);
    }
}
