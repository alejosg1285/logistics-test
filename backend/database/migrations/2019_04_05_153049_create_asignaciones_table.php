<?php
    
    use App\Models\Asignacion;
    use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsignacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('empleado_id')->unsigned();
            $table->integer('cargo_id')->unsigned();
            $table->enum('estado', ['ACTUAL', 'INACTIVA'])->default(Asignacion::ASIGNACION_ACTUAL);
            $table->softDeletes();
    
            $table->foreign('empleado_id')->references('id')->on('empleados');
            $table->foreign('cargo_id')->references('id')->on('cargos');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asignaciones');
    }
}
