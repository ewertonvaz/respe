<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('respe_usuarios', function (Blueprint $table) {
            $table->dropColumn('reg_entpess');
            $table->dropColumn('reg_saipess');
            $table->dropColumn('cons_visdia');
            $table->dropColumn('cons_visper');
            $table->dropColumn('consvis');
            $table->dropColumn('exc_visrea');
            $table->dropColumn('exc_vis');
            $table->id();
            $table->string('name')->default('A DEFINIR');
            //$table->renameColumn('SENHA', 'password');
            //$table->string('password');
            $table->string('email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        //
        Schema::table('respe_usuarios', function (Blueprint $table) {
            $table->dropTimestamps();
            $table->dropColumn('remember_token');
            $table->dropColumn('id');
            $table->dropColumn('name');
            $table->dropColumn('email');
            $table->dropColumn('email_verified_at');
            $table->string('reg_entpess')->default('1');
            $table->string('reg_saipess')->default('1');
            $table->string('cons_visdia')->default('0');
            $table->string('cons_visper')->default('0');
            $table->string('consvis')->default('0');
            $table->string('exc_visrea')->default('0');
            $table->string('exc_vis')->default('0');
        });
    }
}
