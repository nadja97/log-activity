<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('log_model_activities', function (Blueprint $table) {
            $table->increments('id')->unique()->index();
            $table->integer('subject_id')->unsigned()->index();
            $table->string('subject_type', 150)->index();
            $table->string('name', 191);
            $table->text('before')->nullable();
            $table->text('after')->nullable();
            $table->integer('user_id')->unsigned()->index();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::drop('log_model_activities');
    }
};
