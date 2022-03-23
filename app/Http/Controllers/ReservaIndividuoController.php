<?php

namespace App\Http\Controllers;

use App\Models\front\reservaIndividuo;
use Illuminate\Http\Request;

use App\Models\parameters\data_hotel;
use App\Models\parameters\tipo_documento;
use App\Models\parameters\tipoCliente;
use App\Models\parameters\regimen;
use App\Models\parameters\formasPago;
use App\Models\parameters\location;
use App\Models\parameters\TipoHabitaciones;
use App\Models\parameters\claseHabitaciones;
use App\Models\front\huesped;
use App\Models\front\agencias;
use App\Models\parameters\temporada;
use App\Models\parameters\habitacion;

class ReservaIndividuoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('datos.reservas_individuo.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $avaliable_hotels = data_hotel::getHotels();
        $count_Hotel = data_hotel::CountHotel();
        //Selects
        $tipo_docs = tipo_documento::getTipoDocumentos();
        $tipoCliente = tipoCliente::getTipoCliente();
        $regimenes = regimen::getRegimenes();
        $formaPago = formasPago::getFormaPago();
        $paises = location::getPaises();
        $tiposHabitaciones = TipoHabitaciones::getTipo();
        $acomodaciones = claseHabitaciones::getClases();
        return view('datos.reservas_individuo.create', [
            'avaliable_hotels' => $avaliable_hotels,
            'count_Hotel' => $count_Hotel,
            'tipo_docs' => $tipo_docs,
            'tipoCliente' => $tipoCliente,
            'regimenes' => $regimenes,
            'formaPago' => $formaPago,
            'paises' => $paises,
            'tiposHabitaciones' => $tiposHabitaciones,
            'acomodaciones' => $acomodaciones,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\front\reservaIndividuo  $reservaIndividuo
     * @return \Illuminate\Http\Response
     */
    public function show(reservaIndividuo $reservaIndividuo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\front\reservaIndividuo  $reservaIndividuo
     * @return \Illuminate\Http\Response
     */
    public function edit(reservaIndividuo $reservaIndividuo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\front\reservaIndividuo  $reservaIndividuo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, reservaIndividuo $reservaIndividuo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\front\reservaIndividuo  $reservaIndividuo
     * @return \Illuminate\Http\Response
     */
    public function destroy(reservaIndividuo $reservaIndividuo)
    {
        //
    }
    public function findGuest($id)
    {
        $query = huesped::all()->where("id", "=", $id)->first();
        return $query;
    }
    public function findAgencia($id)
    {
        $query = agencias::select('id', 'nombre')->where("id", "=", $id)->first();
        return $query;
    }

    public function findHabitacion($id)
    {
        $query = habitacion::select('id', 'num_habitacion')->where("id", "=", $id)->first();
        return $query;
    }

    public function findPlan($id)
    {
        $query = regimen::all()->where("id", "=", $id)->first();
        return $query;
    }
    public function findFullDataGuest($id)
    {
        $query = huesped::getFullDataJoins($id);
        return $query;
    }
    public function calculateValue($data)
    {
        $value = temporada::identifySeason($data);
        return $value;
    }

    public function getDataManyGuests($data)
    {

        $array = explode(',', $data);
        $selectedOption = $array[0]; // Option One:  Search for Identification
        $parameter = $array[1]; // Second Option: Search for name
        $id_hotel = $array[2];

        $parameter = strtoupper(str_replace(" ", "", $parameter));

        if ($selectedOption == 1) {
            $Guests = huesped::searchById($parameter, $id_hotel);
        } elseif ($selectedOption == 2) {
            $Guests = huesped::searchByName($parameter, $id_hotel);
        }

        return datatables($Guests)
            ->addColumn('empty', function () {
                return '  ';
            })
            ->addColumn('actions', function ($Guests) {
                return '<input class="form-check-input" type="radio" name="Huespedes" id="Guest_' . $Guests->id . '" value="' . $Guests->id . '">';
            })
            ->addColumn('idNumber', function ($Guests) {
                $tipo = tipo_documento::getDocumentosById($Guests->tipo_doc)->codigo;
                return $tipo . " - " . $Guests->numero_doc;
            })
            ->addColumn('fullName', function ($Guests) {
                return $Guests->primer_nombre . " " . $Guests->segundo_nombre . " " . $Guests->primer_apellido . " " . $Guests->segundo_apellido;
            })
            ->addColumn('nationality', function ($Guests) {
                $nation = location::getPaisById($Guests->nacionalidad);
                if (!empty($nation->pais)) {
                    return $nation->pais;
                } else {
                    return '';
                }
            })
            ->addColumn('typeGuest', function ($Guests) {
                $typeGuest = tipoCliente::getTipoClienteById($Guests->tipo_huesped);
                if (!empty($typeGuest)) {
                    return $typeGuest->value . " - " . $typeGuest->secvalue;
                } else {
                    return '';
                }
            })
            ->rawColumns(['empty', 'idNumber', 'fullName', 'typeGuest', 'nationality', 'actions'])
            ->make(true);
    }
    public function getDataManyAgencias($data)
    {
        $array = explode(',', $data);
        $selectedOption = $array[0]; // Option One:  Search for Identification
        $parameter = $array[1]; // Second Option: Search for name

        $parameter = str_replace(" ", "", $parameter);
        if ($selectedOption == 1) {
            $Agencias = agencias::searchById($parameter);
        } elseif ($selectedOption == 2) {
            $Agencias = agencias::searchByName($parameter);
        }
        return datatables($Agencias)
            ->addColumn('empty', function () {
                return '  ';
            })
            ->addColumn('actions', function ($Agencias) {
                return '<input type="radio" name="Agencia" id="Agencia_' . $Agencias->id . '" value="' . $Agencias->id . '">';
            })
            ->addColumn('idNumber', function ($Agencias) {
                return $Agencias->nit . " - " . $Agencias->digitoVerificacion;
            })

            ->rawColumns(['empty', 'idNumber', 'actions'])
            ->make(true);
    }
    public function getDataManyPlans($data)
    {
        $array = explode(',', $data);
        $selectedOption = $array[0]; // Option One:  Search for Identification
        $parameter = $array[1]; // Second Option: Search for name

        $parameter = str_replace(" ", "", $parameter);
        if ($selectedOption == 1) {
            $Planes = regimen::searchByCode($parameter);
        } elseif ($selectedOption == 2) {
            $Planes = regimen::searchByDesc($parameter);
        }
        return datatables($Planes)

            ->addColumn('actions', function ($Planes) {
                return '<input class="form-check-input" type="radio" name="Plan" id="Plan_' . $Planes->id . '" value="' . $Planes->id . '">';
            })
            ->addColumn('Components', function ($Planes) {
                $components = regimen::getComponentsByRegimen($Planes->id);
                $ListComponents = "";
                foreach ($components as $item) {
                    $ListComponents = $ListComponents . '<span class="badge badge-pill badge-outline-primary mb-1">' . $item->value . ' - ' . $item->secvalue . '</span>';
                }
                return $ListComponents;
            })

            ->rawColumns(['Components', 'actions'])
            ->make(true);
    }
    public function getDataManyHabs($data)
    {
        $array = explode(',', $data);
        $id_hotel = $array[0];
        $tipo_hab = $array[1];

        $Habitaciones = habitacion::searchHabs($id_hotel, $tipo_hab);
        return datatables($Habitaciones)

            ->addColumn('empty', function () {
                return '  ';
            })
            ->addColumn('capacity', function ($Habitaciones) {
                if ($Habitaciones->capacidad_huespedes > 1) {
                    return $Habitaciones->capacidad_huespedes . ' Personas';
                } elseif ($Habitaciones->capacidad_huespedes == 1) {
                    return $Habitaciones->capacidad_huespedes . ' Persona';
                } else {
                    return $Habitaciones->capacidad_huespedes;
                }
            })
            ->addColumn('actions', function ($Habitaciones) {
                return '<input type="radio" name="Habitaciones" id="Habitacion_' . $Habitaciones->id . '" value="' . $Habitaciones->id . '">';
            })

            ->rawColumns(['empty', 'actions', 'capacity'])
            ->make(true);
    }
}
