<div>
    <div class="container">
        @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
            <button type="button" class="close" data-dismiss="alert">x</button>
        </div>
        @endif
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Posts') }}
                        <div class="float-right">
                            <a href="{{route('posts.create')}}" class="btn btn-primary"> Create new post </a>
                        </div>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Title</th>
                                    <th scope="col">Post text</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($posts as $post)
                                <tr>
                                    <td>{{$post->title}}</td>
                                    <td>{{$post->post_text}}</td>
                                    <td>
                                        <a href="{{route('posts.edit', $post->id)}}" class="btn btn-sm btn-success"> Edit </a>
                                        <button type="button" onclick="deletePost({{$post->id}})" class="btn btn-sm btn-danger">Delete</button>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="3">No posts found</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                        {{$posts->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function deletePost(id) {
            if (confirm("Are you sure to delete this record?"))
                Livewire.emit('deletePost', id);
        }
    </script>
</div>
