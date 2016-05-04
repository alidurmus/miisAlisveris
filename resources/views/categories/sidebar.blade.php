@foreach ($categories as $category)
<a href="{{ url('/category', $category->slug) }}" class="list-group-item">{{ $category->name }}</a>
@endforeach