<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Task;

return new class extends Migration
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
            $table->string("title", 50);
            $table->longText("description", 150);
            $table->date("end_date")->default("2022-09-10");
            $table->foreignId("user_id")->references("id")->on("users");
            $table->integer("status")->default(0);
            $table->timestamps();
        });

        Task::create(['title' => 'Első HTML oldal létrehozása', 'description'=> 'Hozd létre az alap HTML oldalt', "user_id"=>1, 'status'=>1]);
        Task::create(['title' => 'Adatbázis tervezés', 'description'=> 'Adatbázis tervezése','end_date'=>"2022-10-12", "user_id"=>2]);
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
};
