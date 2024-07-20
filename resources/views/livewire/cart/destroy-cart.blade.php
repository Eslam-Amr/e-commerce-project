{{-- <div>
    @foreach($cart->products as $product)
        <div class="cart-item">
            <p>{{ $product->name }}</p>
            <button wire:click="removeFromCart({{ $product->id }})" class="btn btn-danger">
                Remove from Cart
            </button>
        </div>
    @endforeach
</div> --}}
<button wire:click="destroy" style="cursor: pointer;">
    <svg class="close" width="38px">
        <use xlink:href="#close"></use>
    </svg>
</button>

{{-- <script>
    document.addEventListener('livewire:load', function () {
    Livewire.on('cartUpdated', function () {
        // Logic to refresh the cart view, e.g., using AJAX
        // Or refresh the page:
        window.location.reload();
    });
});

</script> --}}







    {{-- <form id="delete_form" action="{{ route('cart.destroy', $product->id) }}"
        method="post">
        @method('delete') <!-- Method spoofing for DELETE request -->
        @csrf <!-- CSRF token for security --> --}}

        {{-- <a href="javascript:$('form#delete_form').submit();">
            <svg class="close" width="38px">
                <use xlink:href="#close"></use>
            </svg>
        </a> --}}

        {{-- <button type="submit"></button> --}}
    {{-- </form> --}}
