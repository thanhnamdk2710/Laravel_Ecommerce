<div class="might-like-section">
    <div class="container">
        <h2>You might also like...</h2>
        <div class="might-like-grid">
            @foreach($mightAlsoLike as $product)
            <a href="{{ route('shop.show', $product->slug) }}" class="might-like-product">
                <img src="{{ asset('img/macbook-pro.png') }}" alt="product">
                <div class="might-like-product-name">{{ $product->name }}</div>
                <div class="might-like-product-price">${{ number_format($product->price / 100, 2) }}</div>
            </a>
            @endforeach
        </div>
    </div>
</div>
