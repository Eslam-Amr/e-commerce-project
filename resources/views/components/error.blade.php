@if (session('error'))
<style>
    /* Custom CSS for SweetAlert2 toast */
    .swal2-container {
        z-index: 2000 !important;
    }
    .swal2-popup.swal2-toast.swal2-show.success-toast {
        background-color: #28a745 !important; /* Green color for success */
    }
    .swal2-popup.swal2-toast.swal2-show.error-toast {
        background-color: #dc3545 !important; /* Red color for error */
    }
</style> 
<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-right',
            iconColor: 'white',
            customClass: {
                popup: 'error-toast'
            },
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
        });
        Toast.fire({
            icon: 'error',
            title: "{{ session('error') }}"
        });
    });
</script>
@endif