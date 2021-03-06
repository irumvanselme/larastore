<div class="form-group">
    <label for="{{ $name }}">{{ $label }}</label>
    <input type="text" id="{{ $name }}" name="{{ $name }}" class="form-control @error($name) is-invalid @enderror" value="{{ old($name) }}" placeholder="{{ $placeholder }}">
    @error($name)
        <span class="invalid-feedback font-weight-light" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
