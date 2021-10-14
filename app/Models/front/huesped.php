<?php

namespace App\Models\front;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class huesped extends Model
{
    use HasFactory;
    protected $fillable=[
        'validacion_registro',
        'id_registro',
    'numero_doc',
    'tipo_doc',
    'lugar_exp',
    'ciudad_exp',
    'fecha_nacimiento',
    'primer_nombre',
    'segundo_nombre',
    'primer_apellido',
    'segundo_apellido',
    'genero',
    'direccion',
    'nacionalidad',
    'ciudad',
    'telefono',
    'celular',
    'email',
    'tipo_huesped',
    'tarifa',
    'forma_pago',
    'rel_hotel'];

    public function getEncodeIDAttribute()
    {
        return \Hashids::encode($this->id);
    }
    public static function getPorcentajeDatosCompletados($id){
        $cantidad = huesped::where('id','=',$id)->get();
        $contador=0;
        foreach($cantidad as $campo){
            if($campo->validacion_registro==1){
                $campo->numero_doc==null?$contador+=1:false;
            }
            $campo->lugar_exp==null?$contador+=1:false;
            $campo->ciudad_exp==null?$contador+=1:false;
            $campo->segundo_nombre==null?$contador+=1:false;
            $campo->segundo_apellido==null?$contador+=1:false;
            $campo->nacionalidad==null?$contador+=1:false;
            $campo->ciudad==null?$contador+=1:false;
            $campo->celular==null?$contador+=1:false;
            $campo->fecha_nacimiento==null?$contador+=1:false;
        }
        $contador=13-$contador;
        $porcentaje=(($contador*100)/13);
        $porcentaje=round($porcentaje,0);
        $porcentaje=number_format($porcentaje, 0);
        return $porcentaje;

    }
}
