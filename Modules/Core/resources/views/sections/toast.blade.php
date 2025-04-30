<style>
    .toast-container-center-top {
        position: fixed;
        top: 20px;
        /* فاصله از بالای صفحه */
        left: 50%;
        /* قرار گرفتن در وسط */
        transform: translateX(-50%);
        z-index: 1055;
        /* بالاتر از عناصر دیگر */
    }

    .toast-body {
        height: 100%;
        /* تنظیم ارتفاع برای مرکزیت عمودی */
    }
</style>
@if($errors->any())
    <div id="validationToast" class="toast bg-danger text-white toast-container-center-top" role="alert"
         aria-live="assertive" aria-atomic="true" data-bs-delay="300000">
        <div class="toast-header">
            <strong class="text-center">خطاهای اعتبارسنجی</strong>
            {{-- <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="بستن"></button>--}}
        </div>
        <div class="toast-body">
            <ul class="mb-0">
                لطفا خطا های اعتبار سنجی رو برطرف کنید و دوباره درخواست خود را ثبت کنید
            </ul>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var toastElement = document.getElementById('validationToast');
            var toast = new bootstrap.Toast(toastElement);
            toast.show();
        });
    </script>
@endif
@if(session('toast_message'))

    @if(session('toast_message'))
        <div id="liveToast"
             class="toast rounded-3 {{ session('status') == 'success' ? 'bg-teal' : '' }}{{ session('status') == 'error' ? 'bg-red' : '' }}  text-white toast-container-center-top"
             role="alert"
             aria-live="assertive" aria-atomic="true" data-bs-delay="3000">
            <div class="toast-body d-flex align-items-center justify-content-center">
                {{ session('toast_message') }}
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var toastElement = document.getElementById('liveToast');
                var toast = new bootstrap.Toast(toastElement);
                toast.show();
            });
        </script>
    @endif

@endif