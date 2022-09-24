<table class="price__table" style="margin-top: 2rem">
    <tbody class="price__tbody" x-ref="searchBlocksDiv">
    @foreach($malfunctions as $malfunction)
        <tr class="price__table-row" data-name="{{ $malfunction->name }}" style="background: white">
            <td>
                <a href="{{ $malfunction->route() }}" style="width: 100%; height: 100%; display: block">{{ $malfunction->name }}</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
