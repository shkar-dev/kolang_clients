<div class="{{ $column }}">
    <label for="inputField2">{{ $label }}</label>
    <div class="form-group custom-input-select  ">
        <select class="form-select input" aria-label="Default select example" name="{{ $name }}">
            <option>{{ $placeholder }}</option>

            @foreach ($options as $item)
                <option value="{{ $item['value'] }}">{{ $item['name'] }}</option>
            @endforeach

        </select>
        @error($name)
            <div class="alert alert-danger m-0 client_form_error">{{ $message }}</div>
        @enderror
    </div>
</div>
