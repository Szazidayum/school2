<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Task;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('description', 151);
            $table->date('end_date')->default('2022-09-06');
            $table->integer('status');
            $table->foreignId('user_id')->references('id')->on('users');
            $table->timestamps();
        });


        Task::create(['title' => "Adatbázis tervezés", 'description' => 'raktár db létrehozása','user_id' => 1, 'status' => 1]);

        Task::create(['title' => "Végpontok", 'description' => 'listázás','user_id' => 1, 'end_date'=>'2022-09-06' ,'status' => 1]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
