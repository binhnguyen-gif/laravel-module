<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCoreMenuItem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_item', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('menu_id');
            $table->string('name');
            $table->string('icon')->nullable();
            $table->string('class')->nullable();
            $table->enum('target', ['_blank', '_self'])->default('_self');
            $table->nullableMorphs('builder');
            $table->string('url')->nullable();
            $table->nestedSet();
            $table->timestamps();

            $table->foreign('menu_id')->references('id')
                ->on('menu')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu_item');
    }
}
