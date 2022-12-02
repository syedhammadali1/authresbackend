<a class="card" id="card-link" target="_blank">
    <table class="table">
        <tbody>
            @for ($i = 0; $i < 10; $i++)
                <tr>
                    <td class="w-4">
                        <div class="skeleton skeleton-index"></div>
                    </td>
                    <td>
                        <div class="skeleton skeleton-text"></div>
                    </td>
                    <td>
                        <div class="skeleton skeleton-text"></div>
                    </td>
                    <td>
                        <div class="skeleton skeleton-text"></div>
                    </td>
                    <td class="">
                        <div class="skeleton skeleton-button ms-auto"></div>
                    </td>
                </tr>
            @endfor
        </tbody>
    </table>
</a>
