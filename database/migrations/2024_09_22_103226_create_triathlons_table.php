<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('triathlons', function (Blueprint $table) {
            $table->id();
            $table->string('Swim');
            $table->string('Bike');
            $table->string('Run');
            $table->string('TransitionOne');
            $table->string('TransitionTow');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('triathlons');
    }
};
