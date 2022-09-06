<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamps();
        });

        User::create(['name' => 'Kis Józsi', 'email'=> 'kisjozsi@gmail.com']);
        User::create(['name' => 'Nagy Imre', 'email'=> 'nagyimre@gmail.com']);
        User::create(['name' => 'Lakatos Tamás', 'email'=> 'diak1@gmail.com']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
