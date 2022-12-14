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
        Schema::create('logins', function (Blueprint $table) {
            $table->id();
            $table->string('username', 255);
            $table->text('password');
            $table->integer('is_admin');
            $table->timestamps();
        });

        DB::statement("INSERT INTO logins VALUES(1, 'Admin', 'pepian', 1, '2022-9-20', '2022-9-20')");
        DB::statement("INSERT INTO logins VALUES(2, 'Cliente', 'pizza', 0, '2022-9-20', '2022-9-20')");
        DB::statement("INSERT INTO logins VALUES(3, 'superadmin', 'Farmacos', 2, '2022-9-20', '2022-9-20')");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('login');
    }
};
