@isset($modelItem)
    <td>{{ $modelItem->name }}</td>
    <td>{{ @$modelItem->type->name }}</td>
@endisset
