<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesPermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles_permissions', function (Blueprint $table) {
            // https://laravel.com/docs/8.x/migrations#column-method-unsignedBigInteger
            $table->unsignedBigInteger('role_id');
            $table->unsignedBigInteger('permission_id');
            //https://laravel.com/docs/8.x/migrations#dropping-indexes
            //https://dev.mysql.com/doc/refman/8.0/en/create-table-foreign-keys.html
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
            $table->foreign('permission_id')->references('id')->on('permissions')->onDelete('cascade');
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
        Schema::dropIfExists('roles_permissions');
    }
}
