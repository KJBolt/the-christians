<form wire:submit.prevent='register' method="post">
    @csrf
    @if (session()->has('message'))
    <div class="alert alert-success">
        <p style="text-align: center">{{ session('message') }}</p>
    </div>
@endif
    <input type="text" class="form-control col-lg-7 col-md-5 col-sm-10" placeholder="Firstname" wire:model="firstName" value="{{ old('firstName') }}">
    @error('firstName') <p style="color: red; text-align:center;">{{ $message }}</p> @enderror

    <input type="text" class="form-control col-lg-7 col-md-5 col-sm-10" placeholder="LastName" wire:model="lastName" value="{{ old('lastName') }}">
    @error('lastName') <p style="color: red;text-align:center;">{{ $message }}</p> @enderror

    <input type="email" class="form-control col-lg-7 col-md-5 col-sm-10" placeholder="Email Address" wire:model="emailAddress" value="{{ old('emailAddress') }}">
    @error('emailAddress')<p style="color: red;text-align:center;">{{ $message }}</p>@enderror

    <textarea cols="30" rows="5" placeholder="Enter message here....." class="form-control col-lg-7 col-md-5 col-sm-10" wire:model="message">{{ old('message') }}</textarea>
    @error('message')<p style="color: red;text-align:center;">{{ $message }}</p>@enderror

    <button class="btn form-control col-lg-5 col-md-5 col-sm-10" type="submit">Submit</button>
</form>
