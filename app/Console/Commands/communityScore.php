<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Form;
use App\User;

class communityScore extends Command
{
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'communityScore';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Calculates the community behavior this week';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function handle()
	{
		$users = User::all();
		$totalMultiplier = 0;
		$totalScore = 0;
		$count = 0;

		foreach ($users as $user) {
			if (Form::where('user_id', '=', $user->id)->exists()) {
				\Log::info('Dit moet 2x loggen');
				$user->score = Form::where('user_id', '=', $user->id)
						->orderBy('created_at', 'DESC')
						->first()->score;
				$totalMultiplier += $user->multiplier;
			}
		}
		foreach ($users as $user) {
			if (Form::where('user_id', '=', $user->id)->exists()) {
				\Log::info('Dit moet ook 2x loggen, userId: ' . $user->id . ' met multiplier ' . $user->multiplier .  ' heeft score ' . $user->score);
				$user->multiplierPercentage = (($user->multiplier / $totalMultiplier) * 100);
				$totalScore += ($user->score * $user->multiplierPercentage);
			}
		}
		$totalScore /= 100;
		\Log::info($totalScore);
	}
}