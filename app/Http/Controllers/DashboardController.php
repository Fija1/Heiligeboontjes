<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Form;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Form $form)
    {
//        $weekNumber = $form::all('weekNumber');
        $userScore = $form::all('score');

        $scoreSum = 0;
        foreach ($userScore as $score) {

            $scoreSum += $score->score;

        }
        $scoreAll = ceil($scoreSum / count($userScore));
//
//        echo $weekNumber;
//        echo $userScore;

        return view('dashboard.index', compact('scoreAll'));
    }
}
