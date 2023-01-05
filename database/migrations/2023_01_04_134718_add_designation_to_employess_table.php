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
        Schema::table('employess', function (Blueprint $table) {
            $table->string('designation')->nullable()->after('email');
            $table->integer('members' )->nullable()->change();
            $table->string('email',100)->change();
            $table->renameColumn('username', 'name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('employess', function (Blueprint $table) {
            $table->dropColumn('designation');
        });
    }
};
