<div class="form-group">
    <label for="name">name</label>
    <input type="text" wire:model="name" id="name"
        class="form-control @error('name') is-invalid @enderror">
    @error('name')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
<div class="form-group">
    <label for="specialization">Specialization</label>
    <input type="text" wire:model="specialization" id="specialization"
        class="form-control @error('specialization') is-invalid @enderror">
    @error('specialization')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    <label for="bio">biography</label>
    <textarea wire:model="bio" id="bio" class="form-control @error('bio') is-invalid @enderror"></textarea>
    @error('bio')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    <label for="phone">Phone</label>
    <input type="text" wire:model="phone" id="phone" class="form-control @error('phone') is-invalid @enderror">
    @error('phone')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    <label for="email">Email</label>
    <input type="email" wire:model="email" id="email" class="form-control @error('email') is-invalid @enderror">
    @error('email')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    <label for="address">Address</label>
    <input type="text" wire:model="address" id="address"
        class="form-control @error('address') is-invalid @enderror">
    @error('address')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    <label for="photo">Photo</label>
    <input type="file" wire:model="photo" id="photo"
        class="form-control-file @error('photo') is-invalid @enderror">
    @error('photo')
        <span class="text-danger">{{ $message }}</span>
    @enderror
    @if ($photo)
        <img src="{{ $photo->temporaryUrl() }}" alt="Preview" class="mt-2" style="max-width: 150px;">
    @elseif (isset($this->doctor_id) && ($doctor = \App\Models\Doctor::find($this->doctor_id) && $doctor->photo))
        <img src="{{ asset('storage/' . $doctor->profile_picture) }}" alt="Current Photo" class="mt-2"
            style="max-width: 150px;">
    @endif
</div>
