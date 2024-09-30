<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance; // Make sure this model exists
use Illuminate\Support\Facades\Response;

class AttendanceController extends Controller
{
    public function downloadCSV()
    {
        // Fetch the attendance data
        $attendanceData = Attendance::all(); // Adjust query as needed

        // Define the CSV file name
        $fileName = 'attendance_' . date('Ymd') . '.csv';

        // Create a file pointer
        $handle = fopen('php://output', 'w');

        // Set headers for the CSV file download
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename="' . $fileName . '"');
        
        // Add the CSV header row
        fputcsv($handle, ['Employee ID', 'Employee Name', 'Seat No', 'Phone Number', 'Email', 'Attendance']);

        // Add the attendance data to the CSV
        foreach ($attendanceData as $attendance) {
            fputcsv($handle, [
                $attendance->employee_id,
                $attendance->employee_name,
                $attendance->seat_no,
                $attendance->phone_number,
                $attendance->email,
                $attendance->attendance ? 'Present' : 'Absent'
            ]);
        }

        fclose($handle);
        exit;
    }
}
