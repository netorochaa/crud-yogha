<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('city', 50);
            $table->char('occupant', 2);
            $table->char('bedroom', 2);
            $table->char('restroom', 2);
            $table->string('internet', 3)->nullable();
            $table->string('pool', 3)->nullable();

            $table->unsignedInteger('type_id');
			$table->foreign('type_id')->references('id')->on('types');
            $table->softDeletes();
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::disableForeignKeyConstraints();	
        Schema::dropIfExists('properties');
    }
}
