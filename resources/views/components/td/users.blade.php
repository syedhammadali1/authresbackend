@isset($modelItem)
    <td>{{ $modelItem->email }}</td>
    <td>{{ @$modelItem->role->name }}</td>
@endisset
