<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProposalProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'proposal_products', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->integer('proposal_id');
            $table->integer('product_id');
            $table->float('quantity')->default('0.00');
            $table->string('tax')->default('0');
            $table->float('discount')->default('0.00');
            $table->decimal('price', 15, 2)->default('0.00');
            $table->timestamps();
        }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proposal_products');
    }
}
