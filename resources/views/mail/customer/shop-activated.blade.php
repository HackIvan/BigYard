@component('mail::message')
# Congratulations

Your shop is now active,
Go on and Sell on the BigYard

@component('mail::button', ['url' => route('shops.show', $shop->id)])
View Shop
@endcomponent

Thanks,<br>
{{ config('app.name') }} Team
@endcomponent
