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
        Schema::create('product_attributes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id');
            $table->string('weight');
            $table->string('value');
            $table->timestamps();
        });

        DB::table('product_attributes')->insert(
            array(
                [
                    'product_id' => '1',
                    'weight' => '1 kg',
                    'value' => '1,20 EUR'
                ],
                [
                    'product_id' => '1',
                    'weight' => '2 kg',
                    'value' => '2,40 EUR'

                ],
                [
                    'product_id' => '2',
                    'weight' => '1 kg',
                    'value' => '0,80 EUR'
                ],
                [
                    'product_id' => '2',
                    'weight' => '2 kg',
                    'value' => '1,60 EUR'
                ],
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_attributes');
    }
};
