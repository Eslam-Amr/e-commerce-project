<div>
    <form wire:submit.prevent="addToCart">
        <x-plus-minus-button :stock="$product->stock" wire:model="quantity" />
        <button type="submit" class="btn btn-black btn-medium text-uppercase mt-3 me-5">Add to cart</button>
    </form>
</div>
