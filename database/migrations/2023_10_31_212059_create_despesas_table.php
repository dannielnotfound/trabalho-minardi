<?php

use App\Enums\EnumDespesaStatus;
use App\Enums\EnumDespesaTipo;
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
        Schema::create('despesas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('titulo');
            $table->text('descricao');
            // $table->boolean('recorrente');
            // $table->date('dia_util_recorrencia')->nullable();
            $table->double('valor', 10, 2);
            $table->date('vencimento');
            $table->string('categoria')->nullable();
            $table->enum('tipo_despesa', array_column(EnumDespesaTipo::cases(),'name'));
            $table->enum('status', array_column(EnumDespesaStatus::cases(), 'name'));
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('despesas');
    }
};
