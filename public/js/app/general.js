var divLoading = $("#divLoading");
const Toast = Swal.mixin({
  toast: true,
  position: "top-end",
  showConfirmButton: false,
  showCloseButton: true,
  timer: 3000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener("mouseenter", Swal.stopTimer);
    toast.addEventListener("mouseleave", Swal.resumeTimer);
  },
});
function limitar(e, contenido, caracteres) {
  var unicode = e.keyCode ? e.keyCode : e.charCode;
  if (
    unicode == 8 ||
    unicode == 46 ||
    unicode == 13 ||
    unicode == 9 ||
    unicode == 37 ||
    unicode == 39 ||
    unicode == 38 ||
    unicode == 40
  )
    return true;

  if (contenido.length >= caracteres) return false;

  return true;
}

function cerrar() {
  $(".div_search").hide("slow");
}
