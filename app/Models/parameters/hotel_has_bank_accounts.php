<?php

namespace App\Models\parameters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hotel_has_bank_accounts extends Model
{
    use HasFactory;
    public $timestamps=false;
    public $table = 'hotel_has_bank_accounts';
}
