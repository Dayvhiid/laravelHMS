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
        Schema::create('vitals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_code');
            $table->foreign('patient_code')->references('pid')->on('patient_infos');
            // case history
            $table->text('cc');
            $table->text('pohx');
            $table->text('lee');
            $table->text('pmhx');
            $table->text('pfohx');
            // visual activity
            $table->string('odunaided');
            $table->string('odpinhole');
            $table->string('odaxis');
            $table->string('osunaided');
            $table->string('ospinhole');
            $table->string('osaxis');
            // lensometry
            $table->string('lodsph');
            $table->string('lodcyl');
            $table->string('lodaxis');
            $table->string('lodva');
            $table->string('lossph');
            $table->string('loscyl');
            $table->string('losaxis');
            $table->string('losva');
            $table->string('addsph');
            $table->string('addcyl');
            $table->string('addaxis');
            $table->string('addva');
            // auto_refraction
            $table->string('arodsphere');
            $table->string('arodcyl');
            $table->string('arodaxis');
            $table->string('arossphere');
            $table->string('aroscyl');
            $table->string('arosaxis');
            // retinoscopy
            $table->string('rodsph');
            $table->string('rodcyl');
            $table->string('rodaxis');
            $table->string('rossph');
            $table->string('roscyl');
            $table->string('rosaxis');
            // Subjection Refraction
            $table->string('srodsphere');
            $table->string('srodcyl');
            $table->string('srodaxis');
            $table->string('srodva');
            $table->string('srodadd');
            $table->string('srodnva');
            // Final Rx
            $table->string('fodsph');
            $table->string('fodcyl');
            $table->string('fodaxis');
            $table->string('fodva');
            $table->string('fodadd');
            $table->string('fodnva');
            // Examination 
            $table->string('eyelidod');
            $table->string('eyelidos');
            $table->string('conjuctivaod');
            $table->string('conjuctivaos');
            $table->string('corneaod');
            $table->string('corneaos');
            $table->string('pupilod');
            $table->string('pupilos');
            $table->string('irisod');
            $table->string('irisos');
            $table->string('lensod');
            $table->string('lensos');
            $table->string('vitreousod');
            $table->string('vitreousos');
            $table->string('cdratiood');
            $table->string('cdratioos');
            $table->string('macularod');
            $table->string('maculaos');
            // iop
            $table->string('odccct');
            $table->string('odnct');
            $table->string('oscct');
            $table->text('osnct');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vitals');
    }
};
