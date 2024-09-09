<?php

namespace App\Http\Controllers;

use App\Models\Emargement;
use App\Models\Person;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    //index
    public function index()
    {
        return inertia('index/Index');
    }


    public function markAttendance(Request $request)
    {
        $matricule = $request->input('matricule');
        $person = Person::where('matricule', $matricule)->first();

        if (!$person) {
            return response()->json(['message' => 'Person not found'], 404);
        }

        $attendance = new Emargement();
        $attendance->person_id = $person->id;
        $attendance->date = Carbon::now()->format('Y-m-d');
        $attendance->time_in = Carbon::now();
        $attendance->save();

        return response()->json($attendance);
    }

    public function workHours()
    {
        $persons = Person::with('attendances')->get();
        $workHours = $persons->map(function ($person) {
            return [
                'name' => $person->name,
                'hours' => $person->attendances->sum('hours_worked'), // Assurez-vous que 'hours_worked' est calculé dans le modèle Attendance
            ];
        });

        return response()->json($workHours);
    }
}
