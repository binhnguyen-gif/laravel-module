<ul class="metismenu" id="menu-bar">
    @foreach(admin_menu(\Menu::get('admin_menu_primary')->sortBy('order')->roots()) as $menu)
        @if($menu->hasChildren())
            @if(check_permission_child($menu->children()))
            <li>
                <a href="javascript: void(0);">
                    <i data-feather="{{ $menu->attr('icon') }}" class="icon-dual"></i>
                    <span> {{ $menu->title }} </span>
                    <span class="menu-arrow"></span>
                </a>
                <ul class="nav-second-level" aria-expanded="false">
                    @foreach($menu->children() as $subMenu)
                        @if($subMenu->attr('permission'))
                            @rolecan($subMenu->attr('permission'))
                            <li>
                                <a href="{!! $subMenu->url() !!}">{{ $subMenu->title }}</a>
                            </li>
                            @endrolecan
                        @else
                            <li>
                                <a href="{!! $subMenu->url() !!}">{{ $subMenu->title }}</a>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </li>
            @endif
        @else
                <li>
                    <a href="{{ $menu->url() }}">
                        <i data-feather="{{ $menu->attr('icon') }}" class="icon-dual"></i>
                        <span> {{ $menu->title }} </span>
                    </a>
                </li>
        @endif
    @endforeach
