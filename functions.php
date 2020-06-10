<?php 
add_action('wp_footer', 'js_script');

function js_script(){

?>
<script src="https://unpkg.com/sweetalert2@7.20.1/dist/sweetalert2.all.js"></script>
<script type="text/javascript">

(function ($) {
$( '.single_add_to_cart_button' ).on( 'click', function( event ) {


  if(!$(this).hasClass('disabled'))
  {
    event.preventDefault();
    var form = $(this).parents('form');

    swal({
      title: '',
      html: "<h3>This date is tentative. You will be contacted by our inspection coordinator with more information.</h3>",
      showConfirmButton: true,
      showCancelButton: true,
      cancelButtonText:"Cancel",
      allowOutsideClick: false,
      width: 600,
    }).then((result) =>{
    if (result.value) {
      form.submit();
      
    }
    else if (result.dismiss === Swal.DismissReason.cancel) {
      //console.log(result.dismiss);
      return false;
      }
    });
  }
});
})(jQuery);
</script>
<?php
}