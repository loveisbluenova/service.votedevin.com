<ul>
@foreach($childs as $child)
	<li>
	    {{ $child->name }}
	@if(count($child->childs))
            @include('layouts.manageChild',['childs' => $child->childs])
        @endif
	</li>
@endforeach
</ul>