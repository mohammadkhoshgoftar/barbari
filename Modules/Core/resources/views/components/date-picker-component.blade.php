<div class="persian-datepicker-wrapper">
    <label class="mb-2" for="{{ $id }}">{{ $label }}</label>
    <input
            id="{{ $id }}"
            name="{{ $name }}"
            type="text"
            class="{{ $inputClass }}"
            value="{{ $value }}"
            {{ $enable ?? 'disabled' }}
            placeholder="{{ $placeholder }}"
    />
</div>

<link rel="stylesheet" href="{{ asset('package/persianDatePicker/kamadatepicker.min.css') }}">

@push('js')
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('package/persianDatePicker/kamadatepicker.min.js') }}"></script>
    <script>

        {{--$('#{{$id}}').persianDatepicker({!! $options !!});--}}
        {{--kamaDatepicker('{{$id}}'/*, { buttonsColor: "red", forceFarsiDigits: true }*/);--}}

        kamaDatepicker("{{ $id }}", {
            buttonsColor: "red",
            forceFarsiDigits: true,
            closeAfterSelect: true,
            nextButtonIcon: "fa fa-arrow-circle-right",
            previousButtonIcon: "fa fa-arrow-circle-left",
            markToday: true,
            markHolidays: true,
            highlightSelectedDay: true,
            sync: false,
            gotoToday: false,
            placeholder: "string",
        });
    </script>
@endpush

