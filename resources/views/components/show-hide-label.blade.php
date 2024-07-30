@if ($product->hide == 1)
<center>
    <div>
        <h2 style="color: red">{{ __('website/admin.hided') }}</h2>
    </div>
</center>
@else
<center>
    <div>
        <h2 style="color: green ">{{ __('website/admin.not-hided') }}</h2>
    </div>
</center>
@endif
