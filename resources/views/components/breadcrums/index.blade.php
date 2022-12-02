<nav aria-label="breadcrumb align-self-center">
    <ol class="breadcrumb breadcrumb-dot">
        @foreach ($array as $item)
            <li class="breadcrumb-item @if ($item['active']) active @endif">
                @if ($item['active'])
                    {{ $item['label'] }}
                @else
                    <a href="{{ $item['url'] }}">{{ $item['label'] }}</a>
                @endif
            </li>
        @endforeach
    </ol>
</nav>
