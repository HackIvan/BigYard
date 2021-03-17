@component('mail::message')
# Seller Account Activation

Please activate my account for selling on your website.
Here are the details below. <br>
Shop Name : {{$shop->name}} <br>
Shop Owner : {{$shop->Owner->name}}


@component('mail::button', ['url' => '/admin/shops'])
Manage Shops
@endcomponent

Thanks,<br>

{{-- {{ config('app.name') }} --}}

@yield('mailtemp')
@endcomponent


