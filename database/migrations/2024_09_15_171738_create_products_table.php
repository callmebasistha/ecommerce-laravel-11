<?php

use App\StockEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Stringable;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->primary('id');
            $table->string('name');
            $table->index('name');
            $table->string('slug');
            $table->foreignId('category_id');
            $table->foreignId('brand_id');
            $table->longText('short_description');
            $table->fullText('short_description');
            $table->longText('description');
            $table->fullText('description');
            $table->double('price', 15, 8)->nullable();
            $table->double('sale_price', 15, 8)->nullable();
            $table->string('sku')->nullable();
            $table->integer('quantity')->unsigned();
            $table->enum('stock', array_column(StockEnum::cases(), 'value'));
            // $table->enum('stock', [StockEnum::INSTOCK, StockEnum::OUTOFSTOCK]);
            $table->boolean('featured')->nullable()->default(false);
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
