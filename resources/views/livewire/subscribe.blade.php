<form wire:submit.prevent='submit' method="post">
    @csrf
    <div class="input-group mb-3">
        <input type="email" wire:model='email' placeholder=" Email Address..">
        <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="submit">Subscribe</button>
        </div>
    </div>
    @error('email')
        <p style="color: red">{{ $message }}</p>
    @enderror

    @if (session()->has('message'))
        <p style="color: green">{{ session('message') }}</p>
    @endif
</form>
