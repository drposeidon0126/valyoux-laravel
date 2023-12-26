@component('mail::message')
# Earn Reward

{{Auth::user()->first_name}} {{Auth::user()->last_name}} is paying you ${{$request['quantity2']}} to listen to his song. listen and earn money on Valyou X .


@component('mail::button', ['url' => ''])
    Click here to listen song
@endcomponent


Thanks,<br>
{{ config('app.name') }}
@endcomponent
