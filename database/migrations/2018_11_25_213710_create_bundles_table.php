<?php

use App\Bundle;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBundlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(Bundle::TABLE, function (Blueprint $table) {
            $table->increments(Bundle::ID);
            $table->string(Bundle::NAME);
            $table->string(Bundle::DIR);
            $table->tinyInteger(Bundle::STATUS)->default(1);
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
        Schema::dropIfExists(Bundle::TABLE);
    }
}
