<div class="row p-3">

    <select class="js-example-basic-single {{ $column }}  " id="{{ $name }}" name="{{ $name }}"
        placeholder="{{ $placeholder }}" style="width:100% !important;">
        <option> {{ $placeholder }}</option>
        @foreach ($options as $child)
            {{-- @if ($content == $child->id)
                <option value={{ $child->id }} selected>{{ $child->name }}</option>
            @else --}}
            <option value={{ $child['id'] }}>{{ $child['name'] }}</option>
            {{-- @endif --}}
            @foreach ($child['parent_id'] as $children)
                {{-- @if ($content == $children->id)
                    <option value={{ $children->id }} selected>{{ $child->name . ' > ' . $children->name }}</option>
                @else --}}
                <option value={{ $children['id'] }}>{{ $child['name'] . ' > ' . $children['name'] }}</option>
                {{-- @endif --}}

                @foreach ($children['parent_id'] as $grandchildren)
                    {{-- @if ($content == $grandchildren->id)
                        <option value={{ $grandchildren->id }} selected>
                            {{ $child->name . ' > ' . $children->name . ' > ' . $grandchildren->name }}</option>
                    @else --}}
                    <option value={{ $grandchildren['id'] }}>
                        {{ $child['name'] . ' > ' . $children['name'] . ' > ' . $grandchildren['name'] }}</option>
                    {{-- @endif --}}
                @endforeach
            @endforeach
        @endforeach
    </select>
    @error($name)
        <div class="row">
            <p class="input-invalid-text">تکایە{{ $label }} تۆمار بکە </p>
        </div>
    @enderror
    <style>
        .select2-container {
            padding: 0px !important;
            outline: none !important;
        }

        .select2-search__field {
            outline: none !important;
        }

        .select2-selection {
            box-shadow: none !important;
            border: none !important;
            border-bottom: 1px solid #e0e0e0 !important;
            border-radius: 0px !important;
            height: 42px !important;
        }
    </style>
    <script>
        $("#" + '{{ $name }}').select2({
            placeholder: "{{ $label }}",
            allowClear: true,
            theme: 'bootstrap-5',

        });
    </script>
</div>
