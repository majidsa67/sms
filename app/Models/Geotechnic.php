<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Geotechnic extends Model
{
    use HasFactory;

    protected $fillable = [
        'map_order_registration_number',
        'total_building_area',
        'type_of_land',
        'total_number_of_floors',
        'occupancy_level_downstairs',
        'number_of_underground_floors',
        'guard_structure',
        'upload_and_cut_in_place',
        'in_well_vibration_test',
        'bedrock',
        'drilling_surcharge',
        'number_of_payment',
    ];
}
