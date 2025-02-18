<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->varchar('code');
            $table->string('name');
            $table->string('slug');
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->text('description')->nullable();
            $table->decimal('slae_price', 10, 2);
            $table->decimal('reguler_price', 10, 2);
            $table->integer('stock_quantity');
            $table->string('image')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
};


