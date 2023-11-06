<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campus extends Model
{
    use HasFactory;

    //later, this should be from database
    private static $campuses = [
        [
            'id' => 1,
            'name' => 'UC Surabaya',
            'address' => 'UC Boulevard, Citraland',
            'city' => 'Surabaya',
            'phone' => '021-3921-2847'
        ],
        [
            'id' => 2,
            'name' => 'UC Makassar',
            'address' => 'Makassar City',
            'city' => 'Makassar',
            'phone' => '021-2113-127'
        ]
    ];

    public static function allData(){
        return collect(self::$campuses);
    }

    public static function dataWithCode($id){
        return self::allData()->firstWhere('id', $id);
    }
}
