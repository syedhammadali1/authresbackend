$editRoute = function ($param) {
return route('tags.edit', $param);
};
$deleteRoute = function ($param) {
return route('tags.destroy', $param);
};

<li class="nav-item {{ active_class(['/' . $url]) }}">
    @dd(url($url))
    @isset($children)
    <a class="nav-link" data-bs-toggle="collapse" href="#{{ @$collapseId }}" role="button" aria-expanded="{{ is_active_route([$url]) }}" aria-controls="{{ @$collapseId }}">
        <i class="link-icon" data-feather="{{ $icon }}"></i>
        <span class="link-title">{{ @$title }}</span>
        <i class="link-arrow" data-feather="chevron-down"></i>
    </a>
    <div class="collapse {{ show_class([$url]) }}" id="{{ @$collapseId }}">
        <ul class="nav sub-menu">
            @foreach ($children as $item)
            <li class="nav-item">
                <a href="/{{ $item['url'] }}" class="nav-link {{ active_class($item['url']) }}">{{ $item['title'] }}</a>
            </li>
            @endforeach
        </ul>
    </div>
    @else
    <a href="{{ '/' . @$url }}" class="nav-link">
        <i class="link-icon" data-feather="{{ @$icon }}"></i>
        <span class="link-title">{{ @$title }}</span>
    </a>
    @endisset

</li>
