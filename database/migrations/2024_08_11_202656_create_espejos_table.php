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
        Schema::create('espejos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre');
            $table->string('descripcion');
            $table->string('precio');
            $table->string('modelo');
            $table->string('diseño');
            $table->string('forma');
            $table->string('proveedor');
            $table->string('dimensiones');
            $table->string('stock');
            $table->string('material');
            $table->string('color');
            $table->string('peso');
            $table->string('imagen');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('espejos');
    }
};
