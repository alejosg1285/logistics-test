<?php
    
    use App\Models\Empleado;
    use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombres', 50);
            $table->string('apellidos', 50);
            $table->string('identificacion', 30);
            $table->date('fecha_nacimiento');
            $table->string('correo', 50);
            $table->integer('telefono');
            $table->string('direccion', 150);
            $table->enum('estado', ['ACTIVO', 'INACTIVO'])->default(Empleado::ACTIVE_STATUS);
            $table->softDeletes();
            
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
        Schema::dropIfExists('empleados');
    }
}
