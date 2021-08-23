

function go(link) {
  if (confirm( 'Are you sure' )) {
    windows.location.href = link;
  }
}

function report() {
  Swal.fire({
    position: '',
    icon: 'success',
    title: 'Your Reporting has been send ',
    showConfirmButton: false,
    timer: 1500
  })
}

