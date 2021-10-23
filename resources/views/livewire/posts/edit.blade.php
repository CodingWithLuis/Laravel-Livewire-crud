<div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Update post</div>
                    <div class="card-body">
                        <form wire:submit.prevent="update">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" wire:model="title" class="form-control" id="title" placeholder="Enter a title">
                                @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label for="post_text">Post text</label>
                                <textarea cols="80" rows="6" class="form-control" wire:model="post_text" name="post_text">
                                </textarea>
                                @error('post_text') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Edit</button>
                            <a href="{{route('posts.index')}}" class="btn btn-danger">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
