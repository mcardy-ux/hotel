<?php

namespace App\Models\parameters;

use App\Models\User;
use App\Models\parameters\data_hotel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class departament extends Model
{
    use HasFactory;
    public function getEncodeIDAttribute()
    {
        return \Hashids::encode($this->id);
    }
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
    public static function getByHotel($hotel){
        $data=departament::select('id','nombre as value')
        ->where('rel_hotel',$hotel)->get();
        return $data;
    }
    
    public static function getDeptosWithUsers(){
        $data=departament::select('id','nombre','rel_hotel','created_by','created_at')
        ->get();
        return $data;
    }
    public static function getDepartamentsWithHotel(){
        $data=departament::select('departaments.id as id','data_hotels.razonComercial as value','departaments.nombre as secvalue')
        ->leftJoin('data_hotels','data_hotels.id','=','departaments.rel_hotel')
        ->orderBy('departaments.rel_hotel')
        ->get();
        return $data;
    }
    public static function getDepartamentsWithHotelById($id){
        $data=departament::select('departaments.id as id','data_hotels.razonComercial as value','departaments.nombre as secvalue')
        ->leftJoin('data_hotels','data_hotels.id','=','departaments.rel_hotel')
        ->orderBy('departaments.rel_hotel')
        ->where('departaments.id','=',$id)
        ->get();
        return $data;
    }
    public static function Existe_Dptos()
    {
        $reg = departament::select('id')
        ->count();
        
        if ($reg==0) {
           return false;
        }else {
           return true;
        }
    }
}
