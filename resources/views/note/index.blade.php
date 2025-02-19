<x-layout>
    <h1>index</h1>
    <div>
        <a href="{{route('note.create')}}">create</a>
        <div>
            @foreach ($notes as $note)
                <div>
                    <div>{{Str::words($note->note, 30)}}</div>
                    <a href="{{route('note.show', $note)}}">view</a>
                    <a href="{{route('note.edit', $note)}}">edit</a>
                    <button>delete</button>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
