<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Student;
use App\Mail\ExamReminderMail;
use Illuminate\Support\Facades\Mail;

class SendExamReminder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * php artisan exam:reminder
     */
    protected $signature = 'exam:reminder';

    /**
     * The console command description.
     */
    protected $description = 'Send exam reminder email to all students for upcoming exam on 2025-08-15';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $students = Student::all();

        if ($students->isEmpty()) {
            $this->info('No students found.');
            return;
        }

        foreach ($students as $student) {
            Mail::to($student->email)->send(new ExamReminderMail($student));
            $this->info("Reminder sent to: {$student->email}");
        }

        $this->info('All reminders have been sent successfully.');
    }
}
