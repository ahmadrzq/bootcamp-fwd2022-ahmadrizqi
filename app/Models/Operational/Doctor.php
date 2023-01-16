<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Doctor extends Model
{
    // use HasFactory;
    use SoftDeletes;

    // declare table
    public $table = 'doctor';

    // this field must type date yyyy-mm-dd hh:mm:ss
    protected $dates = [
        'created_at',
        'update_at',
        'deleted_at',
    ];

    // declate fillable
    protected $fillable = [
        'specialist_id',
        'user_id',
        'name',
        'fee',
        'photo',
        'created_at',
        'update_at',
        'deleted_at',
    ];

    // one to many
    public function specialist()
    {
        // 2 parameter (path model, field foreign key, field primary key form table hasMany/hasOne)
        return $this->belongsTo('App\Models\MasterData\Specialist','specialist_id', 'id');
    }

    //one to many
    public function appointment()
    {
        // 2 parameter (path model, field foreign key)
        return $this->hasMany('App\Models\Operational\Appointment.php','doctor_id');
    }

    public function user(){
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
}
