<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

class GenerateWeeklyUserReport extends Command
{
    protected $signature = 'report:weekly-users';
    protected $description = 'Generate a weekly report of new users and send via email';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        // Get users created in the last 7 days
        $users = User::where('created_at', '>=', Carbon::now()->subDays(7))->get();

        // Prepare CSV data
        $csvData = [];
        $csvData[] = ['ID', 'Name', 'Email', 'Created At'];
        foreach ($users as $user) {
            $csvData[] = [$user->id, $user->name, $user->email, $user->created_at];
        }

        // Create CSV file
        $filePath = storage_path('app/public/weekly_user_report.csv');
        $file = fopen($filePath, 'w');
        foreach ($csvData as $row) {
            fputcsv($file, $row);
        }
        fclose($file);

        // Send email with CSV file
        Mail::raw('Please find the attached weekly report of new users.', function ($message) use ($filePath) {
            $message->to('info@waliiftransport.com')
                    ->subject('Weekly New Users Report')
                    ->attach($filePath);
        });

        $this->info('Weekly user report generated and emailed successfully.');
    }
}
