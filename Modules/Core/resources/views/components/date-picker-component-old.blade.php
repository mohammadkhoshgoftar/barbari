<div class="persian-datepicker-wrapper">
    <label class="mb-2" for="{{ $id }}">{{ $label }}</label>
    <input
            id="{{ $id }}"
            name="{{ $name }}"
            type="text"
            class="persian-datepicker-input {{ $inputClass }}"
            value="{{ $value }}"
            {{ $enable ?? 'disabled' }}
            placeholder="{{ $placeholder }}"
    />
</div>

<link rel="stylesheet" href="{{ asset('package/persianDatePicker/persian-datepicker.min.css') }}">

@push('js')
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('package/persianDatePicker/persian-date.min.js') }}"></script>
    <script src="{{ asset('package/persianDatePicker/persian-datepicker.min.js') }}"></script>
    <script>

        $('#{{$id}}').persianDatepicker({!! $options !!});
    </script>
@endpush

