<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up()
    {
        Schema::table('carros', function (Blueprint $table) {
            $table->unsignedBigInteger('cliente_id'); // tipo compatível com o id do cliente
            $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade');
        });
    }
    
    public function down()
    {
        Schema::table('carros', function (Blueprint $table) {
            $table->dropForeign(['cliente_id']);
            $table->dropColumn('cliente_id');
        });
    }
};
