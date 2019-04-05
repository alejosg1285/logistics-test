<?php
    
    namespace App\Models;
    
    use Backpack\CRUD\CrudTrait;
    use Illuminate\Database\Eloquent\Model;
    
    class Asignacion extends Model
    {
        use CrudTrait;
        
        /*
        |--------------------------------------------------------------------------
        | GLOBAL VARIABLES
        |--------------------------------------------------------------------------
        */
        const ASIGNACION_ACTUAL = 'ACTUAL';
        const ASIGNACION_INACTIVA = 'INACTIVA';
        
        protected $table = 'asignacions';
        // protected $primaryKey = 'id';
        // public $timestamps = false;
        // protected $guarded = ['id'];
        protected $fillable = ['empleado_id',
            'cargo_id',
            'estado',];
        // protected $hidden = [];
        protected $dates = ['delete_id'];
        
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
        public function empleado() {
            return $this->belongsTo(Empleado::class);
        }
        
        public function cargo() {
            return $this->belongsTo(Cargo::class);
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
