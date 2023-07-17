<h3>Default Route in Laravel</h3>

<a href="{{ route('product') }}">Product</a>
<a href="{{ route('categories.index') }}">Categories</a>
<a href="{{ route('news.index') }}">News</a>
<a href="{{ route('map.index') }}">Maps</a>


<li><a href="{{ route('product.show', ['id' => 1]) }}">Product 1</a></li>
<li><a href="{{ route('product.show', ['id' => 2]) }}">Product 2</a></li>
<li><a href="{{ route('product.show', ['id' => 3]) }}">Product 3</a></li>

