<div>
    <div class="form-group">
        <label for="{{ $name }}">{{ $label }}</label>
        <select type="text" id="{{ $name }}" name="{{ $name }}" class="form-control @error($name) is-invalid @enderror" >
            <option disabled selected>{{ $placeholder }}</option>
            @foreach($iterable as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
        </select>
        @error($name)
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>
