
function succesSave(pesan){
    Swal.fire({
        position: "center",
        icon: "success",
        title: "Your work has been saved",
        text: pesan,
        showConfirmButton: false,
        timer: 1500
      });
}

function succesDelete(pesan){
    Swal.fire({
        position: "center",
        icon: "success",
        title: "Your work has been Delete",
        text: pesan,
        showConfirmButton: false,
        timer: 1500
      });
}