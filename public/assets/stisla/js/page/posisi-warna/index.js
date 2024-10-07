/**
 * Event untuk 'index' di halaman 'posisi-warna'
 */

"use strict"

$(document).ready(() => {
    const btnHapusItem = $("a[id=\"btn-hapus-item\"]")

    btnHapusItem.on("click", (event) => {
        event.preventDefault()

        $(event.currentTarget).parent().parent().remove()
    })
})
