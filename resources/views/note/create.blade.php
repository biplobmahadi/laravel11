<x-layout>
    <h1>create me</h1>
    <div>
        <form action="{{route('note.store')}}" method="POST">
            @csrf
            <textarea name="note"></textarea>
            <div>
                <a href="{{route('note.index')}}">Cancel</a>
                <button>Submit</button>
            </div>
        </form>
    </div>
</x-layout>
