<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $fillable=[
        'company_name',
        'license_number',
        'membership_number',
        'signature_number',
        'Responsible_side',
        'trend',
        'CEO_name',
        'CEO_lastname',
        'CEO_id',
        'CEO_phone_number',
        'boss_name',
        'boss_lastname',
        'boss_id',
        'boss_phone_number',
        'member_name',
        'member_lastname',
        'member_id',
        'member_phone_number',
        'Laboratory_address',
        'Laboratory_phone_number',
        'office_address',
        'office_phone_number',
        'company_email',
        'IDPay',
        'Insurance_number',
        'password',
        'password_confirmation',
        'Accept_rules',
        'phone'
];
    public function setTrendAttribute($value)

    {

        $this->attributes['trend'] = json_encode($value);

    }
}
