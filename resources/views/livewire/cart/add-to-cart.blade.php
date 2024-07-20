{{-- <div>
    <form wire:submit.prevent="addToCart">
        <x-plus-minus-button :stock="$product->stock" wire:model="quantity" />
        <button type="submit" class="btn btn-black btn-medium text-uppercase mt-3 me-5">Add to cart</button>
    </form>
</div> --}}
{{-- <div>
    <form wire:submit.prevent="addToCart">
        <div class="stock-button-wrap pt-3">
            <div class="input-group product-qty">
                <span class="input-group-btn">
                    <button type="button" class="quantity-left-minus btn btn-number" data-type="minus" data-field="">
                        -
                    </button>
                </span>
                <input type="text" id="quantity" wire:model="quantity" class="form-control input-number" value="1" min="1" max="{{ $product->stock }}">
                <span class="input-group-btn">
                    <button type="button" class="quantity-right-plus btn btn-number" data-type="plus" data-field="">
                        +
                    </button>
                </span>
            </div>
        </div>
        <button type="submit" class="btn btn-black btn-medium text-uppercase mt-3 me-5">Add to cart</button>
    </form>
</div>
    <script>
    document.addEventListener('DOMContentLoaded', () => {
        const productStock = @json($product->stock); // Dynamically set product stock value from PHP
        const quantityInput = document.getElementById('quantity');
        const plusButton = document.querySelector('.quantity-right-plus');
        const minusButton = document.querySelector('.quantity-left-minus');

        quantityInput.max = productStock;

        plusButton.addEventListener('click', () => {
            let currentValue = parseInt(quantityInput.value);
            let max = parseInt(quantityInput.max);
            if (currentValue < max) {
                quantityInput.value = currentValue + 1;
                Livewire.emit('quantityUpdated', quantityInput.value); // Emit an event to Livewire
            }
        });

        minusButton.addEventListener('click', () => {
            let currentValue = parseInt(quantityInput.value);
            let min = parseInt(quantityInput.min);
            if (currentValue > min) {
                quantityInput.value = currentValue - 1;
                Livewire.emit('quantityUpdated', quantityInput.value); // Emit an event to Livewire
            }
        });
    });

</script> --}}
<div>
    <form wire:submit.prevent="addToCart">
        <div class="stock-button-wrap pt-3">
            <div class="input-group product-qty">
                <span class="input-group-btn">
                    <button type="button" wire:click="decrement" class="quantity-left-minus btn btn-number" data-type="minus" data-field="">
                        -
                    </button>
                </span>
                <input type="text" id="quantity" wire:model="quantity" class="form-control input-number" value="1" min="1" max="{{ $product->stock }}">
                <span class="input-group-btn">
                    <button type="button"   wire:click="increment" class="quantity-right-plus btn btn-number" data-type="plus" data-field="">
                        +
                    </button>
                </span>
            </div>
        </div>
        <button type="submit" class="btn btn-black btn-medium text-uppercase mt-3 me-5">Add to cart</button>
    </form>
</div>
