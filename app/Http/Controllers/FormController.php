<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Auth;

use App\Form;
use App\User;

class FormController extends Controller
{
	/**
	 * Create a new controller instance.
	 */

	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index()
	{
		return view('form.index');
	}

	public function save(Request $request, Form $form, User $user)
	{
		$resultThisWeek = $request->co2totaal;

		if (Form::where('user_id', '=', Auth::user()->id)->exists()) {
			$resultLastWeek = Form::where('user_id', Auth::user()->id)
					->orderBy('created_at', 'DESC')
					->first()->score;

			$multiplier = User::where('id', Auth::user()->id)
					->first()->multiplier;

			if ($resultThisWeek <= $resultLastWeek) {
				$multiplier += 0.15;
			} else {
				$multiplier -= 0.05;
			}

			User::where('id', Auth::user()->id)
					->update(['multiplier' => $multiplier]);
		}

		$form->user_id = Auth::user()->id;
		$form->score = $resultThisWeek;
		$form->weeknumber = date('W');
		$form->save();

		Session::flash('status', 'Form has been saved!');

		return redirect('/profile');
	}

	public function fetch(Form $form)
	{
		$user_id = Auth::user()->id;
		$results = $form::where('user_id', $user_id)->get();

		return $results;
//        return json_encode($results);

	}

}