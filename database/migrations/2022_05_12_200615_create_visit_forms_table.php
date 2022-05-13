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
        Schema::create('visit_forms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->constrained();
            $table->string('diet_visit_date')->nullable();
            $table->string('drugs_visit_date')->nullable();
            $table->string('drugs_general_health')->nullable();
            $table->string('diet_general_health')->nullable();
            $table->boolean('is_on_diet_to_lose_weight');
            $table->boolean('is_on_drugs');
            $table->text('diet_comments');
            $table->text('drugs_comments');
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
        Schema::dropIfExists('visit_forms');
    }
};
