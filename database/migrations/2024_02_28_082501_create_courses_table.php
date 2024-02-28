<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration {
    public function up() {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('banner_url');
            $table->integer('attendees_count')->unsigned()->default(0);
            $table->timestamps();
    });
}
public function down() {
    Schema::dropIfExists('courses');
}  
}