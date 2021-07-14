<div>
    <div class="form-group">
        <label for="{{ $name }}">{{ $label }}</label>
        <select type="text" id="{{ $name }}" name="{{ $name }}" class="form-control @error($name) is-invalid @enderror">
            <option disabled selected>{{ $placeholder }}</option>
            @foreach($iterable as $item)
                <option value="{{ $item->id }}" @if(old($name) == $item->id) selected @endif >{{ $item->name }}</option>
            @endforeach
        </select>
        @error($name)
        <span class="invalid-feedback font-weight-light" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>
