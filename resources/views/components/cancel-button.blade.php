{{-- @dd($appearFlag) --}}
@if ($appearFlag)

<form action="{{ route('user.order.cancel',$order) }}" method="POST" class="d-inline">
    @csrf
    @method("PUT")
    <button type="submit" class="btn btn-secondary">Cancel</button>
</form>

@endif
