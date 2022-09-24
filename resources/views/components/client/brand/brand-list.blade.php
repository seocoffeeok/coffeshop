<div class="brands__body" x-ref="searchBlocksDiv">
    @foreach($brands as $brand)
        <x-client.brand.item :brand="$brand"/>
    @endforeach
</div>
