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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('publisherId');
            $table->string('name');
            $table->string('price');
            $table->unsignedInteger('stock');
            $table->integer('discountRate')->default(0);
            $table->boolean('isPc');
            $table->boolean('isPs');
            $table->boolean('isXbox');
            $table->string('descriptionHead');
            $table->longText('description');
            $table->longText('systemRequirementsText');
            $table->longText('photoUrls');
            $table->foreign('publisherId')->references('id')->on('publishers')->onDelete('cascade');
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
        Schema::dropIfExists('products');
    }
};
