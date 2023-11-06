<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['nim','name','ipk','email', 'major'];

    // private static $students = [
    //     [
    //         'nim' => '0706012210015',
    //         'name' => 'Ida Bagus Radhita',
    //         'ipk' => 3.5,
    //         'email' => "iradhita@student.ciputra.ac.id",
    //         'major' => 'IMT'
    //     ],
    //     [
    //         'nim' => '0206012210016',
    //         'name' => 'Putra Keniten',
    //         'ipk' => 2.2,
    //         'email' => "pkeniten@student.ciputra.ac.id",
    //         'major' => 'VCD'
    //     ],
    //     [
    //         'nim' => '0506012210034',
    //         'name' => 'Nathan Darrell',
    //         'ipk' => 0.1,
    //         'email' => "ndarrel@student.ciputra.ac.id",
    //         'major' => 'COM'
    //     ]
    // ];

    // public static function allData(){
    //     return collect(self::$students);
    // }

    // public static function dataByID($nim){
    //     return self::allData()->firstWhere('nim', $nim);
    // }


}
