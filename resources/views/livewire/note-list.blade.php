<div class="grid flex-1 grid-cols-2 p-10 prose">
    <div class="flex flex-col">
        @foreach ($notes as $note)
            <button wire:click="showNote({{ $note->id }})" class="mt-10 focus:bg-pink-500">{{ $note->title }}</button>
        @endforeach
    </div>
    <div>
        {{ $viewing->body }}
    </div>
</div>
