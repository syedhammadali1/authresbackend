<div class="p-4">
    @for ($i = 1; $i <= 4; $i++)
        <div class="mx-1
         @if ($i == 1 || $i == 4) @else my-4 @endif ">
            <div class="skeleton skeleton-button"></div>
            <div class="skeleton skeleton-index" style="height: 20px"></div>
        </div>
    @endfor
</div>
