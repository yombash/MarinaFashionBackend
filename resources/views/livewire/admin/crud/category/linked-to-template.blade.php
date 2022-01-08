<div>
    <table class="table">
        <tbody wire:sortable="updateLinked">
            @forelse($linked as $id => $name)
                <tr wire:sortable.item="{{$id}}" wire:key="category-{{$template_id}}-{{$id}}">
                    <td wire:sortable.handle>{{$name}}</td>
                </tr>
            @empty
            @endforelse
            <tr wire:sortable.item="0" wire:key="category-{{$template_id}}">
                <td class="text-center">-------</td>
            </tr>
            @forelse($not_linked as $id => $name)
                <tr wire:sortable.item="{{ $id }}" wire:key="category-{{$template_id}}-{{$id}}">
                    <td wire:sortable.handle>{{$name}}</td>
                </tr>
            @empty
            @endforelse
        </tbody>
    </table>
</div>
