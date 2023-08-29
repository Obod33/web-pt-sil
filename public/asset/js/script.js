$(document).on('click', '#btn-edit', function () {
    $('.modal-body #id-asset').val($(this).data('id'));
    $('.modal-body #aset').val($(this).data('aset'));
    $('.modal-body #nama').val($(this).data('nama'));
    $('.modal-body #tipe').val($(this).data('tipe'));
    $('.modal-body #vendor').val($(this).data('vendor'));
    $('.modal-body #lokasi').val($(this).data('lokasi'));
    $('.modal-body #unit_pemakai').val($(this).data('unit_pemakai'));
    $('.modal-body #qr_code').val($(this).data('qr_code'));
})

// Sweet Alert 2
const swal = $('.swal').data('swal');
if (swal) {
    Swal.fire({
        title: 'Data Berhasil',
        text: swal,
        icon: 'success'
    })
}

$(document).on('click', '.btn-hapus', function(e){
   // hentikan aksi default
   e.preventDefault();
   const href = $(this).attr('href');
   
    Swal.fire({
        title: 'Apa anda yakin?',
        text: "Data yang telah dihapus tidak dapat di kembalikan!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, hapus!'
      }).then((result) => {
        if (result.isConfirmed) {
          document.location.href= href;
        }
      }) 
})

$(document).on('click', '#btn-detail', function () {
  $('.table table-striped #id-detail').val($(this).data('id'));
  $('.table table-striped #aset').val($(this).data('aset'));
  $('.table table-striped #nama').val($(this).data('nama'));
  $('.table table-striped #tipe').val($(this).data('tipe'));
  $('.table table-striped #unit_pemakai').val($(this).data('unit_pemakai'));
})






//rafli
window.addEventListener('DOMContentLoaded', event => {

  // Navbar shrink function
  var navbarShrink = function () {
      const navbarCollapsible = document.body.querySelector('#mainNav');
      if (!navbarCollapsible) {
          return;
      }
      if (window.scrollY === 0) {
          navbarCollapsible.classList.remove('navbar-shrink')
      } else {
          navbarCollapsible.classList.add('navbar-shrink')
      }

  };

  // Shrink the navbar 
  navbarShrink();

  // Shrink the navbar when page is scrolled
  document.addEventListener('scroll', navbarShrink);

  // Activate Bootstrap scrollspy on the main nav element
  const mainNav = document.body.querySelector('#mainNav');
  if (mainNav) {
      new bootstrap.ScrollSpy(document.body, {
          target: '#mainNav',
          offset: 74,
      });
  };

  // Collapse responsive navbar when toggler is visible
  const navbarToggler = document.body.querySelector('.navbar-toggler');
  const responsiveNavItems = [].slice.call(
      document.querySelectorAll('#navbarResponsive .nav-link')
  );
  responsiveNavItems.map(function (responsiveNavItem) {
      responsiveNavItem.addEventListener('click', () => {
          if (window.getComputedStyle(navbarToggler).display !== 'none') {
              navbarToggler.click();
          }
      });
  });

});