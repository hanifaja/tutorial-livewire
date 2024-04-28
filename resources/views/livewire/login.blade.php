<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Login</h5>
            <form wire:submit = 'login'>
                <div class="mb-4">
                    <label for="email" class="form-label">Email</label>
                    <input class="form-control" wire:model='form.email' type="email" name="email" id="email">
                    @error('form.email')
                        <small class="text-danger d-block mr-1">{{$message}}</small>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password" class="form-label">Password</label>
                    <input class="form-control" wire:model='form.password' type="password" name="password" id="password">
                    @error('form.password')
                        <small class="text-danger d-block mr-1">{{$message}}</small>
                    @enderror
                </div>
                <button class="btn btn-primary" type="submit">Login</button>
            </form>
        </div>
    </div>
</div>
