@if ($hide)

<div class="d-flex  ">
    <div class=" product-title">
        <form id="hide" method="post" class="d-inline" action="{{ route('admin.product-request.hide', $product) }}">
            @csrf
            @method('put')
            <a href="javascript:$('form#hide').submit();" class="btn btn-danger mx-2 ">{{ __('website/admin.hide') }}</a>
        </form>
    </div>
</div>
@else
<div class="d-flex  ">
    <div class=" product-title">
        <form id="unhide" method="post" class="d-inline" action="{{ route('admin.product-request.unhide', $product) }}">
            @csrf
            @method('put')
            <a href="javascript:$('form#unhide').submit();" class="btn btn-success mx-2 ">{{ __('website/admin.unhide') }}</a>
        </form>
    </div>
</div>
@endif
