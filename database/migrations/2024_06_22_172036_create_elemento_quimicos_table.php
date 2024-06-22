<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void   
    {
        Schema::create('elemento_quimicos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Nome' , 50);
            $table->string('SimboloQuimico' , 2);
            $table->integer('NumeroAtomico');
            $table->decimal('MassaAtomica' , 10, 6);
            $table->string('EstadoFisico' , 20);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('elemento_quimicos');
    }
};
