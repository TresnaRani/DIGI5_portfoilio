<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('social_media', function (Blueprint $table) {
            $table->id();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('facebook')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('dribble')->nullable();
            $table->string('youtube')->nullable();
            $table->string('tumble')->nullable();
            $table->string('kik')->nullable();
            $table->string('vine')->nullable();
            $table->string('telegram')->nullable();
            $table->string('behance')->nullable();
            $table->string('reddit')->nullable();
            $table->string('vimeo')->nullable();
            $table->string('snapchat')->nullable();
            $table->string('steam')->nullable();
            $table->string('pinterest')->nullable();
            $table->string('imo')->nullable();
            $table->string('skype')->nullable();
            $table->string('askme')->nullable();
            $table->string('blogger')->nullable();
            $table->string('tiktok')->nullable();
            $table->string('spotify')->nullable();
            $table->string('quora')->nullable();
            $table->string('wechat')->nullable();
            $table->string('stackoverflow')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('social_media');
    }
};
