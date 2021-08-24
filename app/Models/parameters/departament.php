<?php

namespace App\Models\parameters;

use App\Models\User;
use App\Models\parameters\data_hotel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class departament extends Model
{
    use HasFactory;

    public function data_hotel(){
        return $this->belongsTo(data_hotel::class, 'rel_hotel');
    }

    public static function getDataUsersActive(){
        $users=User::select('id','name as value')
        ->where('status',1)->get();
        return $users;
    }
    public static function getHotels(){
        $hotels=data_hotel::select('id','razonComercial as value')
        ->get();
        return $hotels;
    }
    public static function getEmail($id){
        $email=User::select('email')
        ->where('id',$id)->first();
        return $email;
    }
}
