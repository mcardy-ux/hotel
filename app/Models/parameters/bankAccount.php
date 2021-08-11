<?php

namespace App\Models\parameters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class bankAccount extends Model
{
    use HasFactory;

    public function getEncodeIDAttribute()
    {
        return \Hashids::encode($this->id);
    }

    public static function getBankAccountDuplicate($num){
        $reg = DB::table('bank_accounts')
        ->select('id')
        ->where('numeroCuenta','=',$num)
        ->count();
        
        if ($reg>0) {
           return true;
        }else {
           return false;
        }
    }

    //RELACION DE MUCHOS A MUCHOS
    /**
     * The roles that belong to the bankAccount
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function data_hotel(): BelongsToMany
    {
        return $this->belongsToMany(data_hotel::class);
    }
}
