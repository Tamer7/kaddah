
    <div x-data="{ isOpen: false, nestedOpen: null }" @mouseenter="isOpen = true" @mouseleave="isOpen = false" class="dropdown-container">
        <div class="dropdown browse-products-dropdown mr-4 hover:text-blue-500 " @mouseenter="isOpen = true" @mouseleave="isOpen = false">

            <a href="#" class="dropdown-toggle link">
                <svg class="float-left mr-4" fill="#000000" width="30px" height="30px" id="Glyph" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M29,16c0,1.104-0.896,2-2,2H11c-1.104,0-2-0.896-2-2s0.896-2,2-2h16C28.104,14,29,14.896,29,16z" id="XMLID_352_"/><path d="M29,6c0,1.104-0.896,2-2,2H11C9.896,8,9,7.104,9,6s0.896-2,2-2h16C28.104,4,29,4.896,29,6z" id="XMLID_354_"/><path d="M29,26c0,1.104-0.896,2-2,2H11c-1.104,0-2-0.896-2-2s0.896-2,2-2h16C28.104,24,29,24.896,29,26z" id="XMLID_356_"/><path d="M3,6c0,1.103,0.897,2,2,2s2-0.897,2-2S6.103,4,5,4S3,4.897,3,6z" id="XMLID_358_"/><path d="M3,16c0,1.103,0.897,2,2,2s2-0.897,2-2s-0.897-2-2-2S3,14.897,3,16z" id="XMLID_360_"/><path d="M3,26c0,1.103,0.897,2,2,2s2-0.897,2-2s-0.897-2-2-2S3,24.897,3,26z" id="XMLID_362_"/></svg>
                    Browse Products
                <svg class="float-right ml-12" xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" viewBox="0 0 24 24" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.7071 14.7071C12.3166 15.0976 11.6834 15.0976 11.2929 14.7071L6.29289 9.70711C5.90237 9.31658 5.90237 8.68342 6.29289 8.29289C6.68342 7.90237 7.31658 7.90237 7.70711 8.29289L12 12.5858L16.2929 8.29289C16.6834 7.90237 17.3166 7.90237 17.7071 8.29289C18.0976 8.68342 18.0976 9.31658 17.7071 9.70711L12.7071 14.7071Z" fill="#000000"/>
                </svg>
            </a>

            <div x-show.transition="isOpen" class="dropdown-box absolute mt-2 bg-white shadow-md rounded-md py-4 pl-4" style="min-width: 10rem;" @mouseenter="isOpen = true" @mouseleave="isOpen = false">

                <!-- Dropdown content -->
                <ul class="menu vertical-menu">

                    @foreach($items as $index => $item)
                        <li class="relative" @mouseenter="nestedOpen = {{ $item->order }}" @mouseleave="nestedOpen = null">
                            <a href="{{ $item->url }}" class="block">{{ $item->title }}</a>
                            @if($item->children->isNotEmpty())
                                <div x-show.transition="nestedOpen === {{ $item->order }}" class="dropdown nested-dropdown bg-white shadow-md rounded-md absolute top-0 left-full mt-0 p-3 m-1" style="min-width: 20rem;" @mouseenter="isOpen = true" @mouseleave="isOpen = false">

                                    <h4 class="title">{{$item->title}}</h4>

                                    <ul>
                                    @foreach($item->children as $child)
                                        <li>
                                            <a href="{{ $child->url }}" class="block">{{ $child->title }}</a>
                                            <!-- Add more levels if needed -->
                                        </li>
                                    @endforeach
                                    </ul>
                                </div>
                            @endif
                        </li>
                    @endforeach

                </ul>

            </div>
        </div>
    </div>
