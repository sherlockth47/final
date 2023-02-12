<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('item_name');
            $table->string('item_address1');
            $table->string('item_address2');
            $table->string('item_structure');
            $table->string('item_usage');
            $table->string('img_path');
            $table->datetime('published');
            $table->string('item_select1');
            $table->string('item_select2');
            $table->string('item_select3');
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
        Schema::dropIfExists('books');
    }
};
