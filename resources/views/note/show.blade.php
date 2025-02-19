<x-layout>
    <h1>show</h1>
    <div>
        <p>Note: {{$note->created_at}}</p>
        <div>
            <a href="{{route('note.edit', $note)}}">Edit</a>
            <button>Delete</button>
        </div>
        <div>
            {{$note->note}}
        </div>
    </div>
</x-layout>
