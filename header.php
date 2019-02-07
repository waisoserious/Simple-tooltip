<script type="text/javascript">
$(document).ready(function(){$(".series").each(function(){var e=$(this),t=e.attr("rel");e.qtip({content:{text:'<img class="" src="<?php echo get_template_directory_uri(); ?>/inc/img/loader.gif" alt="Loading gan..." />',ajax:{url:"<?php echo get_template_directory_uri(); ?>/tooltip.php",type:"POST",loading:!1,data:"id="+t}},show:"mouseover",hide:{delay:200,fixed:!0},position:{target:"mouse",viewport:$(window)}})})});
</script>
