var route = document.getElementsByName("routeName")[0].getAttribute("content");
var base = location.protocol + "//" + location.host;

document.addEventListener("DOMContentLoaded", () => {
    var btn_search = document.getElementById("btn_search");
    var form_search = document.getElementById("form_search");
    if (btn_search) {
        btn_search.addEventListener("click", (e) => {
            e.preventDefault();
            if (form_search.style.display === "block") {
                form_search.style.display = "none";
            } else {
                form_search.style.display = "block";
            }
        });
    }
    if (route == "product_edit") {
        var btn_product_file_image = document.getElementById(
            "btn_product_file_image"
        );
        var product_file_image = document.getElementById("product_file_image");

        btn_product_file_image.addEventListener("click", () => {
            product_file_image.click();
        });

        product_file_image.addEventListener("change", () => {
            document.getElementById("form_product_gallery").submit();
        });
    }
    document.getElementsByClassName("lk-" + route)[0].classList.add("active");

    var btn_delete = document.getElementsByClassName("btn-delete");
    for (let i = 0; i < btn_delete.length; i++) {
        btn_delete[i].addEventListener("click", deleteobj);
    }
});

if (route == "product_edit" || route == "product_add") {
    ClassicEditor.create(document.querySelector("#editor")).catch((error) => {
        console.error(error);
    });
}
const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
        confirmButton: "btn btn-success",
        cancelButton: "btn btn-danger",
    },
    buttonsStyling: false,
});

function deleteobj(e) {
    e.preventDefault();
    let object = this.getAttribute("data-object");
    let action = this.getAttribute("data-action");
    let path = this.getAttribute("data-path");
    let url = base + "/" + path + "/" + object + "/" + action;
    let icon, title, text, confirmButtonText, cancelButtonText;
    if (action == "delete") {
        icon = "warning";
        text = "Puedes revertir esta accion";
        title = "¿Estas seguro en eliminar este producto?";
        confirmButtonText = 'Si, Eliminalo!'
        cancelButtonText ='No, Cancelar!'
    }
    if (action == "restore") {
        icon = "info";
        text = "";
        title = "¿Estas seguro de restaurar este producto?";
        confirmButtonText = 'Si, Restauralo!'
        cancelButtonText ='No, Cancelar!'
    }
    swalWithBootstrapButtons
        .fire({
            title: title,
            text: text,
            icon: icon,
            showCancelButton: true,
            confirmButtonText: confirmButtonText,
            cancelButtonText: cancelButtonText,
            reverseButtons: true,
        })
        .then((result) => {
            if (result.isConfirmed) {
                window.location.href = url;
            }
        });
}
