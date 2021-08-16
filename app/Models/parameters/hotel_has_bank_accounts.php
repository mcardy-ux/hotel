<?php

namespace App\Models\parameters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class hotel_has_bank_accounts extends Model
{
    use HasFactory;
    public $timestamps=false;
    public $table = 'hotel_has_bank_accounts';

    public static function DropByHotel($id){
        $reg = DB::table('hotel_has_bank_accounts')->where('data_hotel_id', '=', $id)->delete();
        if($reg){
            return true;
        }else{
            return false;
        }
    }
}
