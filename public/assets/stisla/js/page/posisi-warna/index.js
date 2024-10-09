/**
 * Event untuk 'index' di halaman 'posisi-warna'
 */

"use strict"

$(document).ready(() => {
    const btnHapusItem = $("a[id=\"btn-hapus-item\"]")

    btnHapusItem.on("click", (event) => {
        event.preventDefault()

        const dialog = Swal.mixin({
            customClass: {
                confirmButton: "btn btn-primary mr-2",
                cancelButton: "btn btn-default"
            },
            buttonsStyling: false
        })

        dialog.fire({
            title: "Hapus Data",
            text: "Kamu yakin mau ngehapus data ini?",
            icon: "question",
            showCancelButton: true,
            confirmButtonText: "Ya",
            cancelButtonText: "Enggak"
        }).then((result) => {
            if (result.value)
            {
                $.ajax ({
                    type: "post",
                    url: $(event.currentTarget).attr("href"),
                    data: {
                        "_method": "DELETE",
                        "_token": $("meta[name='csrf-token']").attr("content")
                    },
                    success: (response) => {
                        const toast = Swal.mixin({
                            toast: true,
                            position: "top-end",
                            showConfirmButton: false,
                            timer: 1500,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.onmouseenter = Swal.stopTimer
                                toast.onmouseleave = Swal.resumeTimer
                            }
                        })

                        toast.fire({
                            icon: "success",
                            title: response.message
                        })

                        $(event.currentTarget).parent().parent().remove()
                    }
                })

            }
        })
    })
})
