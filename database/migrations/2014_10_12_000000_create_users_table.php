<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->integer('file_no')->nullable();
            $table->string('member_name')->nullable();
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('address')->nullable();
            $table->string('permanent_address')->nullable();
            $table->integer('phone_no_1')->nullable();
            $table->integer('phone_no_2')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->bigInteger('national_id')->nullable();
            $table->string('profession')->nullable();
            $table->string('office_address')->nullable();
            $table->string('designation')->nullable();
            $table->string('nominee_name')->nullable();
            $table->string('relation_with_member')->nullable();
            $table->integer('building_no')->nullable();
            //$table->string('payment')->nullable(), note;
            $table->integer('total_amount')->nullable();
            $table->integer('no_of_installment')->nullable();

            $table->integer('total_installment_amount')->nullable();

            $table->date('installment_start_from')->nullable();
            $table->string('description')->nullable();
            $table->text('nominee_image')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->integer('booking_money')->nullable();

            $table->date('booking_money_paid_date')->nullable();
            $table->date('booking_money_due_date')->nullable();
            
            $table->integer('down_payment')->nullable();

            $table->date('down_payment_paid_date')->nullable();
            $table->date('down_payment_due_date')->nullable();

            $table->integer('car_parking')->nullable();

            $table->date('car_parking_paid_date')->nullable();
            $table->date('car_parking_due_date')->nullable();

            $table->string('land_filling_1')->nullable();
            
            $table->date('land_filling_1_paid_date')->nullable();
            $table->date('land_filling_1_due_date')->nullable();

            $table->string('land_filling_2')->nullable();

            $table->date('land_filling_2_paid_date')->nullable();
            $table->date('land_filling_2_due_date')->nullable();

            $table->string('building_pilling')->nullable();
            
            $table->date('building_pilling_paid_date')->nullable();
            $table->date('building_pilling_due_date')->nullable();

            $table->integer('first_roof_casting')->nullable();
            
            $table->date('first_roof_paid_date')->nullable();
            $table->date('first_roof_due_date')->nullable();

            $table->integer('finishing_work')->nullable();
            
            $table->date('finishing_work_paid_date')->nullable();

            $table->integer('after_handover_money')->nullable();
            $table->date('after_handover_paid_date')->nullable();
            //Paid
            $table->integer('booking_money_paid')->nullable();
            $table->integer('down_payment_paid')->nullable();
            $table->integer('car_parking_paid')->nullable();
            $table->integer('land_filling_1_paid')->nullable();
            $table->integer('land_filling_2_paid')->nullable();
            $table->integer('building_pilling_paid')->nullable();
            $table->integer('first_roof_casting_paid')->nullable();
            $table->integer('finishing_work_paid')->nullable();
            $table->integer('after_handover_money_paid')->nullable();
            

            //Payment
            $table->string('payment_total_amount')->nullable();
            $table->string('payment_booking_money')->nullable();
            $table->string('payment_down_payment')->nullable();
            $table->string('payment_car_parking')->nullable();
            $table->string('payment_land_1st')->nullable();
            $table->string('payment_land_2nd')->nullable();
            $table->string('payment_building_pilling')->nullable();
            $table->string('payment_1st_floor_roof_casting')->nullable();
            $table->string('payment_finishing_work')->nullable();
            $table->string('payment_after_handover_money')->nullable();

            //Note
            $table->string('total_amount_note')->nullable();
            $table->string('booking_money_note')->nullable();
            $table->string('down_payment_note')->nullable();
            $table->string('car_parking_note')->nullable();
            $table->string('land_filling_1_note')->nullable();
            $table->string('land_filling_2_note')->nullable();
            $table->string('building_pilling_note')->nullable();
            $table->string('roof_casting_note')->nullable();
            $table->string('finishing_work_note')->nullable();      
            $table->string('after_handover_money_note')->nullable();       


            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->text('profile_photo_path')->nullable();
            $table->integer('due_amount')->nullable();;          
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
        Schema::dropIfExists('users');
    }
}
