<table id="dataTableExample" class="table">
    <thead>
        <tr>
            <th>#</th>
            @foreach ($th as $thItem)
                <th>{{ $thItem }}</th>
            @endforeach
            @isset($actionBtn)
                <th class="text-end">Actions</th>
            @endisset
        </tr>
    </thead>
    <tbody>
        @foreach ($model as $key => $modelItem)
            <tr>
                <td>{{ $modelItem->id }}</td>

                @isset($td)
                    @foreach ($td as $tdItem)
                        {{-- @dd($modelItem->$tdItem->name) --}}
                        <td>{{ $modelItem->$tdItem }}</td>
                    @endforeach
                @else
                    @include('components.td.' . $forModel)
                @endisset



                @isset($actionBtn)
                    <td class="text-end">
                        <button type="button" class="btn btn-primary btn-icon crud-modal" data-crud-for="edit"
                            data-crud-url="{{ route($forModel . '.edit', $modelItem->id) }}" data-bs-toggle="modal"
                            data-crud-title="Edit" data-bs-target="#crudModal">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-edit">
                                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                            </svg>
                        </button>

                        <button type="submit" class="btn btn-danger btn-icon delete-crud"
                            data-delete-route={{ route($forModel . '.destroy', $modelItem->id) }}
                            data-index-route="{{ route($forModel . '.index') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-delete">
                                <path d="M21 4H8l-7 8 7 8h13a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2z"></path>
                                <line x1="18" y1="9" x2="12" y2="15"></line>
                                <line x1="12" y1="9" x2="18" y2="15"></line>
                            </svg>
                        </button>
                    </td>
                @endisset
            </tr>
        @endforeach
    </tbody>
</table>

<script src="{{ asset('assets/plugins/datatables-net/jquery.dataTables.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-net-bs5/dataTables.bootstrap5.js') }}"></script>
<script src="{{ asset('assets/js/data-table.js') }}"></script>
