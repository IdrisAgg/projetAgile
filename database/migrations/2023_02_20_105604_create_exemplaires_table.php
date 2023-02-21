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
        Schema::create('exemplaires', function (Blueprint $table) {
            $table->id();
            $table->date("date_retour")->nullable();
            $table->foreignId("biblio_id")->constrained("bibliotheques","id")->onDelete("cascade");
            $table->foreignId("ouvrage_id")->constrained("ouvrages","id")->onDelete("cascade");
            $table->foreignId("user_id")->nullable()->constrained("users","id")->onDelete("cascade");
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
        Schema::dropIfExists('exemplaires');
    }
};
