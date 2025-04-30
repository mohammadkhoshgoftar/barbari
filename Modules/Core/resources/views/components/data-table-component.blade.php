<div class="card adminuiux-card mt-3 mb-3">
    <div class="card-body pt-0">
        <table id="dataTable{{$table}}" class="table w-100 nowrap">
            <thead>
            <tr>
                @foreach($columns as $column)
                    <th
                            @if(isset($column['breakpoints']))
                                data-breakpoints="{{ $column['breakpoints'] }}"
                            @endif
                            @if(isset($column['class']))
                                class="{{ $column['class'] }}"
                            @endif
                    >
                        {{ $column['name'] }}
                    </th>
                @endforeach
            </tr>
            </thead>
        </table>
    </div>
</div>

<script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
        $('#dataTable{{$table}}').DataTable({
            processing: true,
            serverSide: true,
            bDestroy: true,
            stateSave: true,
            ajax: '{{ $route }}',
            columns: [
                    @foreach($columns as $column)
                {
                    data: '{{ $column['data'] }}',
                    name: '{{ $column['name'] }}',
                    title: '{{ $column['label'] ?? $column['name'] }}',
                    @if(isset($column['orderable']) && !$column['orderable'])
                    orderable: false,
                    @endif
                            @if(isset($column['searchable']) && !$column['searchable'])
                    searchable: false,
                    @endif
                },
                @endforeach
            ],
            responsive: true,
            "language": {
                "lengthMenu": "نمایش _MENU_ رکورد در هر صفحه",
                "zeroRecords": "هیچ موردی یافت نشد",
                "info": "نمایش صفحه _PAGE_ از _PAGES_",
                "infoEmpty": "رکوردی موجود نیست",
                "infoFiltered": "(فیلتر شده از _MAX_ رکورد)",
                "search": "جستجو:",
                "paginate": {
                    "first": "اول",
                    "last": "آخر",
                    "next": "بعدی",
                    "previous": "قبلی"
                },
                "loadingRecords": "در حال بارگذاری...",
                "processing": "در حال پردازش...",
                "emptyTable": "اطلاعاتی در جدول وجود ندارد"
            }
        });
    });
</script>
