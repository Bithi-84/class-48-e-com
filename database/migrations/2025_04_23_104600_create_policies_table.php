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
        Schema::create('policies', function (Blueprint $table) {
            $table->id();
            $table->longtext('privacy_policy')->nullable;
            $table->longtext('terms_conditions')->nullable;
            $table->longtext('refund_policy')->nullable;
            $table->longtext('payment_policy')->nullable;
            $table->longtext('about_us')->nullable;
            $table->longtext('return_process')->nullable;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('policies');
    }
};
