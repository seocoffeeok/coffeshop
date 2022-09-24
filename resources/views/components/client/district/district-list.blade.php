<table class="price__table" style="margin-top: 2rem">
    <tbody class="price__tbody" x-ref="searchBlocksDiv">
    @foreach($districts as $district)
        <tr class="price__table-row" data-name="{{ $district->name }}">
            <td>
                <a href="{{ $district->route() }}" style="width: 100%; height: 100%; display: block">{{ $district->name }}</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
