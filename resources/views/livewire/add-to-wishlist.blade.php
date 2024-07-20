{{-- <form id="delete_form" method="post"
action="{{ route('wishlist.destroy', $wishlist) }}">
@method('delete')
@csrf --}}
{{-- <button  wire:click="delete($wishlist)" type="submit" class="btn btn-link text-danger">
    <i class="btn-medium text-uppercase me-3 mt-4 fa-solid fa-heart"></i>
</button> --}}
{{-- <button wire:click="deleteWishlist" type="button" class="btn btn-link text-danger">
    <i class="btn-medium text-uppercase me-3 mt-4 fa-solid fa-heart"></i>
</button> --}}
<div>
    @if ($wishlist === null)
        <button wire:click="addWishlist" type="button" class="btn btn-link text-danger">
            <i class="btn-medium text-uppercase me-3 mt-4 fa-regular fa-heart"></i>
        </button>
    @else
        <button wire:click="deleteWishlist" type="button" class="btn btn-link text-danger">
            <i class="btn-medium text-uppercase me-3 mt-4 fa-solid fa-heart"></i>
        </button>
    @endif
</div>

{{-- </form> --}}
