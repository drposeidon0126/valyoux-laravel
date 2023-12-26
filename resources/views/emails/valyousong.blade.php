@component('mail::message')

Your 0.02VXD has been deducted from your wallet. your remaining balance is {{ (float)auth()->user()->wallet - 0.02 }}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
