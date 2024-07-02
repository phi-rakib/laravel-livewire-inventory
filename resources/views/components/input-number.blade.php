@props(['name', 'label'])

<div class="form-group">
  <label for="{{ $label }}">{{ $label }}</label>
  <input type="number" id="{{ $name }}" class="form-control" wire:model="{{ $name }}">
  @error("{{ $name }}")
      <span class="text-danger">{{ $message }}</span>
  @enderror
</div>