<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RoleUser extends Model
{
    // use HasFactory;
    use SoftDeletes;

    // declare table
    public $table = 'role_user';

    // this field must type date yyyy-mm-dd hh:mm:ss
    protected $dates = [
        'created_at',
        'update_at',
        'deleted_at',
    ];

    // declate fillable
    protected $fillable = [
        'role_id',
        'user_id',
        'created_at',
        'update_at',
        'deleted_at',
    ];

    // one to many
    public function role()
    {
        // 2 parameter (path model, field foreign key, field primary key form table hasMany/hasOne)
        return $this->belongsTo('App\Models\ManagementAccess\Role.php','role_id', 'id');
    }
    
    // one to many
    public function user()
    {
        // 2 parameter (path model, field foreign key, field primary key form table hasMany/hasOne)
        return $this->belongsTo('app\Models\User.php','user_id', 'id');
    }


}
