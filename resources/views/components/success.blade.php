@if (session('success'))
    <style>
        /* Custom CSS for SweetAlert2 toast */
        .swal2-container {
            z-index: 2000 !important;
        }

        .swal2-popup.swal2-toast.swal2-show.colored-toast {
            background-color: #28a745 !important;
            /* Green color for success */
            /* color: white; Ensure text color is readable on green background */
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-right',
                iconColor: 'green',
                customClass: {
                    popup: 'colored-toast'
                },
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
            });
            Toast.fire({
                icon: 'success',
                title: "{{ session('success') }}"
            });
        });
    </script>
@endif
