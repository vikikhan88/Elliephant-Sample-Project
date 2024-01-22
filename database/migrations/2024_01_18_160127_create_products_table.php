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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string("name",250)->nullable();
            $table->float("price", 10, 2)->nullable();
            $table->text("description")->nullable();
            $table->text("feature_image")->nullable();
            $table->text("gallery_image")->nullable();
            $table->float("shipping_cost", 10, 2)->nullable();
            $table->addColumn('tinyInteger', 'product_status', ['length' => 1, 'default' => '1']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
