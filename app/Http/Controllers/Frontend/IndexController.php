<?php

namespace App\Http\Controllers\Frontend;

use App\Helpers\SoapHelper;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $sectors = SoapHelper::getSector();
        // dd($sectors);
        return view('frontend.home.index', compact('sectors'));
    }

    public function searchFlight(Request $request)
    {
        $data = [
            'from' => $request->from,
            'to'  => $request->to,
            'flightDate' => date('d-m-Y', strtotime($request->flightDate)),
            'type' => $request->type,
            'returnDate' => date('d-m-Y', strtotime($request->returnDate)),
            'nationality' => $request->nationality,
            'adult' => $request->adult,
            'child' => $request->child
        ];

        // dd($data);

        $flights = SoapHelper::checkFlightStatus($data);
        // dd($flights);

        $dateRange = CarbonPeriod::create(date('Y-m-d'), Carbon::now()->addDays(10)->format('Y-m-d'))->toArray();

        return view('frontend.domestic.search', compact('dateRange', 'flights'));
    }
}
