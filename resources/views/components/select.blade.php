@props(['name', 'label', 'list'])

<div class="form-group">
  <label for="{{ $label }}">{{ $label }}</label>
  <select id="{{ $name }}" class="form-control" wire:model="{{ $name }}">
      <option value="">Select {{ $label }}</option>
      @foreach ($list as $id => $name)
          <option value="{{ $id }}">{{ $name }}</option>
      @endforeach
  </select>
  @error("{{ $name }}")
      <span class="text-danger">{{ $message }}</span>
  @enderror
</div>