<div class="{{ $column }}">
    <label>{{ $label }}</label>
    <div class="form-group custom-input-text">
        <input type="text" class="form-control input" placeholder="{{ $placeholder }}" name="{{ $name }}">
    </div>
    @error($name)
        <div class="alert alert-danger m-0 client_form_error">{{ $message }}</div>
    @enderror
</div>