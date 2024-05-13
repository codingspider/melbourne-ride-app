<li class="dynamicMenu">
    <a href="{{ url($menu->url) }}" class="@if (count($menu->children) > 0) @endif">
        {{ $menu->name }}
    </a>

    @if (count($menu->children) > 0)
        <ul>
            @foreach ($menu->children as $submenu)
                <li>
                    <a href="{{ url($submenu->url) }}">{{ $submenu->name }}</a>
                </li>
            @endforeach
        </ul>
    @endif
</li>
