<div>

    @if (session()->has('message'))
    <div class="alert alert-info">
        {{ session('message') }}
    </div>
    @endif

    <div class="card">
        {{-- Success is as dangerous as failure. --}}
        <div class="card-body">
            <h5 class="card-title">New Post</h5>
            <form wire:submit="save">
                <div class="mb-2">
                    <label for="body" class="visually-hidden">Body</label>
                    <textarea placeholder="test" wire:model="form.body" class="form-control" id="body"></textarea>

                    @error('form.body')
                        <small class="text-danger d-block m-1">{{$message}}</small>
                    @enderror
                </div>
                <div class="flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>    
</div>