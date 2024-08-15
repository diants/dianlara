@auth
   <form action="{{ route('comments.store') }}" method="POST">
       @csrf
       <textarea name="body" required></textarea>
       <button type="submit">Submit</button>
   </form>
@endauth

@foreach ($comments as $comment)
   <div>
       <p>{{ $comment->body }}</p>
       @can('update', $comment)
           <form action="{{ route('comments.update', $comment) }}" method="POST">
               @csrf
               @method('PUT')
               <textarea name="body">{{ $comment->body }}</textarea>
               <button type="submit">Edit</button>
           </form>
       @endcan
       @can('delete', $comment)
           <form action="{{ route('comments.destroy', $comment) }}" method="POST">
               @csrf
               @method('DELETE')
               <button type="submit">Delete</button>
           </form>
       @endcan
   </div>
@endforeach