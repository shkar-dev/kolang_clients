<div class="{{ $column }}">
    <div class="form-group custom-input-password">
        <label>{{ $label }}</label>
        <input type="password" class="form-control input" placeholder="{{ $placeholder }}" name="{{ $name }}">
    </div>
    @error($name)
        <div class="alert alert-danger m-0 client_form_error">{{ $message }}</div>
    @enderror
</div>
