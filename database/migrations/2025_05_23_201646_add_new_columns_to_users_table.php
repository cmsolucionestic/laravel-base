<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('role_id')->after('id');
            $table->integer('password_exp')->after('password');
            $table->integer('password_exp_time')->nullable()->after('password_exp');
            $table->timestamp('password_exp_date')->nullable()->after('password_exp_time');
            $table->integer('active')->after('remember_token');
            $table->integer('online')->after('active');
            $table->integer('created_user_id')->after('online');
            $table->integer('updated_user_id')->after('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('role_id', 'password_exp', 'password_exp_time', 'password_exp_date', 'active', 'online', 'created_user_id', 'update_user_id');
        });
    }
};
