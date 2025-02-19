<x-layout>
    <h1>Edit me</h1>
    <div>
        <form action="{{route('note.update', $note)}}" method="POST">
            <textarea name="note">{{$note->note}}</textarea>
            <div>
                <a href="{{route('note.index')}}">Cancel</a>
                <button>Submit</button>
            </div>
        </form>
    </div>
</x-layout>

