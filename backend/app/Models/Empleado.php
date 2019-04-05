<?php
    
    namespace App\Models;
    
    use Backpack\CRUD\CrudTrait;
    use Illuminate\Database\Eloquent\Model;
    
    class Empleado extends Model
    {
        use CrudTrait;
        
        /*
        |--------------------------------------------------------------------------
        | GLOBAL VARIABLES
        |--------------------------------------------------------------------------
        */
        const ACTIVE_STATUS = 'ACTIVO';
        const INACTIVE_STATUS = 'INACTIVO';
        
        protected $table = 'empleados';
        // protected $primaryKey = 'id';
        // public $timestamps = false;
        // protected $guarded = ['id'];
        protected $fillable = ['nombres',
            'apellidos',
            'identificacion',
            'fecha_nacimiento',
            'correo',
            'telefono',
            'direccion',
            'estado',];
        // protected $hidden = [];
        protected $dates = ['delete_at'];
        
        /*
        |--------------------------------------------------------------------------
        | FUNCTIONS
        |--------------------------------------------------------------------------
        */
        
        /*
        |--------------------------------------------------------------------------
        | RELATIONS
        |--------------------------------------------------------------------------
        */
        public function asignaciones() {
            return $this->hasMany(Asignacion::class);
        }
        
        /*
        |--------------------------------------------------------------------------
        | SCOPES
        |--------------------------------------------------------------------------
        */
        
        /*
        |--------------------------------------------------------------------------
        | ACCESORS
        |--------------------------------------------------------------------------
        */
        
        /*
        |--------------------------------------------------------------------------
        | MUTATORS
        |--------------------------------------------------------------------------
        */
    }
