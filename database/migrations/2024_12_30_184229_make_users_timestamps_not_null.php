<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->timestamp('created_at')->useCurrent()->nullable(false)->change();
            $table->timestamp('updated_at')->useCurrent()->nullable(false)->change();
        });
    }

    public function down(): void
    {
        // do not revert
    }
};
