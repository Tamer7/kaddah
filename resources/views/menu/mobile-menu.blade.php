@foreach($items as $index => $item)
    <li>
        <a href="{{$item->url}}">
            <i class="{{$item->icon_class}}"></i>{{$item->title}}
        </a>
        @if($item->children)
        <ul>
            @foreach($item->children as $child)
            <li>
                <a href="{{$child->url}}">{{$child->title}}</a>
            </li>
            @endforeach
            
        </ul>
        @endif
    </li>
@endforeach