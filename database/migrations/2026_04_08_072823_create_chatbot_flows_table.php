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
        Schema::create('chatbot_flows', function (Blueprint $table) {
            $table->id();
            $table->integer('group_id');
            $table->integer('sequence');
            $table->string('query_name');
            $table->json('choices')->nullable();
            $table->json('goto')->nullable(); 
            $table->json('type')->nullable();
            $table->json('action')->nullable();
            $table->tinyInteger('is_active')->nullable();
            $table->tinyInteger('is_submit')->nullable();
            $table->tinyInteger('is_ticket')->nullable();
            $table->integer('created_by');
            $table->integer('updated_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chatbot_flows');
    }
};
