<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    // use HasFactory;
    use SoftDeletes;

    // declare table
    public $table = 'transaction';

    // this field must type date yyyy-mm-dd hh:mm:ss
    protected $dates = [
        'created_at',
        'update_at',
        'deleted_at',
    ];

    // declate fillable
    protected $fillable = [
        'appointment_id',
        'config_payment',
        'fee_doctor',
        'fee_specialist',
        'fee_hospital',
        'sub_total',
        'vat',
        'total',
        'created_at',
        'update_at',
        'deleted_at',
    ];

    // one to one
    public function appointment()
    {
        // 2 parameter (path model, field foreign key, field primary key form table hasMany/hasOne)
        return $this->belongsTo('App\Models\Operational\Appointment','appointment_id', 'id');
    }
}
