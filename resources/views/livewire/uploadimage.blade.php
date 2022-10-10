<div>
  <label class="form-label" for="{{ $componentId }}">{{ $componentId }}</label>
  <input type="file" wire:model="files" id="{{ $componentId }}" name="{{ $componentId }}" class="form-control">
  <button class="btn btn-secondary" wire:click="save" type="button" @if (!$files) disabled @endif>
    Submit
  </button>
  @if (!empty($imgPath))
    <img src="{{ asset("/storage/{$imgPath}") }}" alt="" width="200px">
  @endif
  @error($componentId)
    <div class="invalid-feedback d-block">
      {{ $message }}
    </div>
  @enderror
</div>
