<?php

namespace App\Http\Controllers;

use App\Models\Responden;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RespondenController extends Controller
{
    public function index(Request $request)
    {
        $query = Responden::query();

        if (!$request->has('start_date') || !$request->has('end_date')) {
            $oldestResponden = Responden::oldest('created_at')->first();
            $newestResponden = Responden::latest('created_at')->first();

            $dates = [
                'start_date' => $oldestResponden ? $oldestResponden->created_at->format('Y-m-d') : Carbon::now()->subYear()->format('Y-m-d'),
                'end_date' => $newestResponden ? $newestResponden->created_at->format('Y-m-d') : Carbon::now()->format('Y-m-d')
            ];

            return redirect()->route('responden.index', array_merge($request->all(), $dates));
        }

        $startDate = Carbon::parse($request->start_date)->subDay()->startOfDay()->toDateTimeString();
        $endDate = Carbon::parse($request->end_date)->addDay()->endOfDay()->toDateTimeString();

        $query->whereBetween('created_at', [$startDate, $endDate]);

        if ($request->has('search')) {
            $searchTerm = $request->search;
            $query->where(function ($subquery) use ($searchTerm) {
                $subquery->where('name', 'like', "%$searchTerm%")
                    ->orWhere('gender', 'like', "%$searchTerm%")
                    ->orWhere('age', 'like', "%$searchTerm%")
                    ->orWhere('education', 'like', "%$searchTerm%")
                    ->orWhere('job', 'like', "%$searchTerm%");
            });
        }

        if (isset($request->age)) {
            if ($request->age == 'Remaja') {
                $age = [17, 19];
            } elseif ($request->age == 'Dewasa') {
                $age = [20, 59];
            } elseif ($request->age == 'Lansia') {
                $age = [60, 200];
            }
            $query->whereBetween('age', $age);
        }

        if (isset($request->gender)) {
            $query->where('gender', $request->gender);
        }

        if (isset($request->education)) {
            $query->where('education', $request->education);
        }

        if (isset($request->job)) {
            $query->where('job', $request->job);
        }

     

        $respondens = $query->latest()->paginate($request->per_page ?? 5);

        return view('pages.dashboard.responden.index', compact('respondens'));
    }

    public function show(Responden $responden)
    {
        return view('pages.dashboard.responden.show', compact('responden'));
    }
    public function update(Request $request,$id) {
       
        $responden = Responden::findOrFail($id);
        $responden->update([
            'created_at'         => $request->tgl_pengisian,
            'updated_at'   => $request->tgl_pengisian,
        ]);
        return redirect()->back()->with(['success' => 'Data Berhasil Diubah!']);
    }
}
