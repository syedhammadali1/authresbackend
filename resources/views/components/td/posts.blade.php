@isset($modelItem)
    <td>{{ @$modelItem->user->name }}</td>
    <td>{{ @$modelItem->title }}</td>
    <td>{{ @$modelItem->description }}</td>
    <td>{{ @$modelItem->status }}</td>
    <td>
        @foreach (@$modelItem->categories as $category)
            <h5 class="d-inline">
                <span class="badge bg-primary"> {{ $category->name }}</span>
            </h5>
        @endforeach
    </td>
    <td>
        @foreach (@$modelItem->tags as $tag)
            <h5 class="d-inline">
                <span class="badge bg-primary"> {{ $tag->name }}</span>
            </h5>
        @endforeach
    </td>
@endisset
