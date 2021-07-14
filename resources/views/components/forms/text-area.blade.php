<div class="form-group">
    <label for="{{ $name }}">{{ $label }}</label>
    <textarea rows="6" type="text" id="{{ $name }}" name="{{ $name }}" class="form-control @error($name) is-invalid @enderror">
        {{ old($name) }}
    </textarea>
    @error($name)
    <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
