<?php

    use App\Models\Catelogue;
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    return new class extends Migration {

        /**
         * Run the migrations.
         */
        public function up(): void
        {
            Schema::create('products', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->foreignIdFor(Catelogue::class)->constrained();
                $table->string('slug')->unique();
                $table->string('sku')->unique();
                $table->string('img_thumbnail')->nullable();
                $table->double('price_regular');
                $table->double('price_sale')->nullable();
                $table->string('description')->nullable();
                $table->text('content')->nullable();
                $table->string('material')->nullable();
                $table->text('user_manual')->nullable();
                $table->unsignedBigInteger('views')->default(0);
                //                $table->enum('status', ['draft','peding_review'])->default(true);
                $table->boolean('is_active')->default(true);
                $table->boolean('is_hot_deal')->default(false);
                $table->boolean('is_good_deal')->default(false);
                $table->boolean('is_new')->default(false);
                $table->boolean('is_show_home')->default(false);

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
