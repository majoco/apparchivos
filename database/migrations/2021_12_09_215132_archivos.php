<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Archivos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('archivos', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->integer('user_id');
            $table->string('nombre');
            $table->string('file')->nullable();
            $table->string('descripcion');            
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down($file)
    {
        $archivo = Archivo::Where('file', $file)->findOrFail();
        $pathToFile = storage_path("app/public/storage/subfolder".$archivo->id."/".$archivo->file);
        return response()->download($pathToFile);
    }
}
