@component('mail::message')
    # Hello {{ $student->name }},

    This is a friendly reminder about your **upcoming exam**.

    📅 **Date:** August 15, 2025
    📌 **Topic:** Final Exam – Please be prepared.

    We wish you the best of luck! 🍀

    @component('mail::button', ['url' => 'https://your-school-portal.com/exams'])
        View Exam Details
    @endcomponent

    Thanks,
    {{ config('app.name') }}
@endcomponent
