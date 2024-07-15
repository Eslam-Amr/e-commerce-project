<div class="search-popup">
    <div class="search-popup-container">

        <form role="search" class="search-form" action="{{ route('user.product.index') }}" method="GET">
            <input type="search" id="search-form" class="search-field" placeholder="Type and press enter"
                name="filter[search]" value="{{ request('filter.search') }}" />
            <button type="submit" class="search-submit"><svg class="search">
                    <use xlink:href="#search"></use>
                </svg></button>
        </form>

        <h5 class="cat-list-title">Browse Categories</h5>

        <ul class="cat-list">

            {{-- @foreach ($categories as $category)
                <li class="cat-list-item">
                    <a href="{{ route('user.product.index')->fullUrlWithQuery(['filter[category.name]' => $category->name, 'page' => 1]) }}"
                        title="{{ $category->name }}">{{ $category->name }}</a>
                </li>
            @endforeach --}}
            @foreach ($categories as $category)
            <li class="cat-list-item">
                <a href="{{ route('user.product.index', ['filter[category.name]' => $category->name, 'page' => 1]) }}"
                   title="{{ $category->name }}">{{ $category->name }}</a>
            </li>
        @endforeach

        </ul>

    </div>
</div>

{{--
 <li class="cat-list-item">
  <a href="#" title="Mobile Phones">Mobile Phones</a>
</li>
<li class="cat-list-item">
  <a href="#" title="Smart Watches">Smart Watches</a>
</li>
<li class="cat-list-item">
  <a href="#" title="Headphones">Headphones</a>
</li>
<li class="cat-list-item">
  <a href="#" title="Accessories">Accessories</a>
</li>
<li class="cat-list-item">
  <a href="#" title="Monitors">Monitors</a>
</li>
<li class="cat-list-item">
  <a href="#" title="Speakers">Speakers</a>
</li>
<li class="cat-list-item">
  <a href="#" title="Memory Cards">Memory Cards</a>
</li> --}}
