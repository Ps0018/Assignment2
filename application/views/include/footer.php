<!-- General JS Scripts -->
  <script src="<?= base_url().'assets/js/app.min.js'?>"></script>
 
  <!-- Template JS File -->
  <script src="<?= base_url().'assets/js/scripts.js'?>"></script>
  <!-- Custom JS File -->
  <script src="<?= base_url().'assets/js/custom.js'?>"></script>
  <script type="text/javascript">
      $(document).ready(function(){
    		$('#add_category').click(function(){
    			var data = $('.add_category').html();
    			$('.append_category').append(data);
    		});
    		$(document).on("click",".remove", function(){
    			console.log($(this).parent().parent().remove());
    		});
      });
  </script>