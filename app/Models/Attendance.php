<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    // Define the table if it's different from the plural form of the model name
    protected $table = 'attendances'; // Adjust if needed

    // Define fillable fields or other model properties as required
    protected $fillable = ['employee_id', 'employee_name', 'seat_no', 'phone_number', 'email', 'attendance'];
}
