<div class="dropdown-box">
    <ul class="menu vertical-menu category-menu">       
        @foreach($items as $index => $item)
        <li>
            <a href="{{$item->url}}">
                {{$item->title}}
            </a>
            <ul class="megamenu">
                <li>
                    <h4 class="menu-title">{{$item->title}}</h4>
                    <hr class="divider">
                    <ul>
                        @foreach($item->children as $child)
                            @if($loop->count >= 11)
                                @if($loop->iteration <= 10)
                                <li>
                                    <a href="{{$child->url}}">{{$child->title}}</a>
                                </li>
                                @endif
                            @else
                                @if($loop->iteration <= 7)
                                <li>
                                    <a href="{{$child->url}}">{{$child->title}}</a>
                                </li>
                                @endif
                            @endif
                            
                        @endforeach
                    </ul>
                </li>
                @if(count($item->children) > 10)
                <li>
                    <h4 class="menu-title">Vast Category</h4>
                    <hr class="divider">
                    <ul>
                        @if($loop->count > 6 AND $loop->count < 11)
                            @foreach($item->children as $child)
                                @if($loop->iteration > 6)
                                <li>
                                    <a href="{{$child->url}}">{{$child->title}}</a>
                                </li>
                                @endif
                            @endforeach
                        @else
                            @foreach($item->children as $child)
                                @if($loop->iteration > 10)
                                <li>
                                    <a href="{{$child->url}}">{{$child->title}}</a>
                                </li>
                                @endif
                            @endforeach
                        @endif
                    </ul>
                </li>
                @endif
                <?php
                    $data = substr($item->url, strpos($item->url, "/category/") + 10);
                ?>
                <li id="menu-{{$data}}">
                </li>
            </ul>
        </li>
        @endforeach
        
        <li>
            <a href="/category"
                class="font-weight-bold text-primary text-uppercase ls-25">
                View All Products<i class="w-icon-angle-right"></i>
            </a>
        </li>
    </ul>
</div>
