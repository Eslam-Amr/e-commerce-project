                                    @auth('seller')

@if ($status == 'pending')

<center class="mt-3">

    <div>
        <h2 style="color: green">
            {{ $status }}
        </h2>
    </div>
</center>

@endif
@if ($status == 'rejected')

<center class="mt-3">

    <div>
        <h2 style="color: red">
            {{ $status }}
        </h2>
    </div>
</center>

@endif
@endauth
