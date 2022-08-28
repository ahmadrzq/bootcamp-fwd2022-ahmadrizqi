<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PermissionRole extends Model
{
    // use HasFactory;
    use SoftDeletes;

    // declare table
    public $table = 'permission_role';

    // this field must type date yyyy-mm-dd hh:mm:ss
    protected $dates = [
        'created_at',
        'update_at',
        'deleted_at',
    ];

    // declate fillable
    protected $fillable = [
        'permission_id',
        'role_id',
        'created_at',
        'update_at',
        'deleted_at',
    ];

    // one to many
    public function permission()
    {
        // 2 parameter (path model, field foreign key, field primary key form table hasMany/hasOne)
        return $this->belongsTo('App\Models\ManagementAccess\Permission.php','permission_id', 'id');
    }
    
    // one to many
    public function role()
    {
        // 2 parameter (path model, field foreign key, field primary key form table hasMany/hasOne)
        return $this->belongsTo('app\Models\ManagementAccess\Role.php','role_id', 'id');
    }
}
