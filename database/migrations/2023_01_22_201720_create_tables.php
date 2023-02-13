<?php

use App\Models\Composer;
use App\Models\Ensemble;
use App\Models\EnsembleType;
use App\Models\Instrument;
use App\Models\Publisher;
use App\Models\Rehearsal;
use App\Models\Role;
use App\Models\Score;
use App\Models\User;
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
    public function up(): void
    {
        Schema::create('scores', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->boolean('complete_score');
            $table->foreignIdFor(Composer::class);
            $table->foreignIdFor(EnsembleType::class);
            $table->foreignIdFor(Publisher::class);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('composers', function (Blueprint $table) {
           $table->id();
           $table->string('first_name');
           $table->string('last_name');
           $table->date('date_of_birth')->nullable('true');
           $table->date('date_of_death')->nullable('true');
           $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('publishers', function (Blueprint $table) {
           $table->id();
           $table->string('publisher_name');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('ensemble_types', function (Blueprint $table) {
           $table->id();
           $table->string('ensemble_type');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('ensembles', function (Blueprint $table) {
           $table->id();
           $table->string('ensemble_name');
           $table->foreignIdFor(EnsembleType::class);
           $table->string('ensemble_description')->nullable('true');
           $table->foreignIdFor(Rehearsal::class);
           $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('rehearsals', function (Blueprint $table) {
            $table->id();
            $table->string('location_name')->nullable('true');
            $table->string('location_street_address');
            $table->string('location_city');
            $table->string('location_province');
            $table->string('location_country');
            $table->string('location_postal_code');
            $table->string('rehearsal_day');
            $table->time('rehearsal_time');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('instruments', function (Blueprint $table) {
            $table->id();
            $table->string('instrument');
            $table->string('chair')->nullable('true');
        });

        Schema::create('instrument_score', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Score::class);
            $table->foreignIdFor(Instrument::class);
            $table->string('filename')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('role', function (Blueprint $table) {
           $table->id();
           $table->string('role_name');
           $table->string('permissions');
           $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('role_user', function (Blueprint $table) {
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Role::class);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('music_checkouts', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Score::class);
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Ensemble::class);
            $table->dateTime('checked_out');
            $table->dateTime('checked_in')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('scores');
        Schema::dropIfExists('composers');
        Schema::dropIfExists('publishers');
        Schema::dropIfExists('ensemble_types');
        Schema::dropIfExists('ensembles');
        Schema::dropIfExists('rehearsals');
        Schema::dropIfExists('instruments');
        Schema::dropIfExists('instrument_score');
        Schema::dropIfExists('role');
        Schema::dropIfExists('role_user');
        Schema::dropIfExists('music_checkouts');
    }
};
