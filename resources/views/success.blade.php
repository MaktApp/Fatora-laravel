<style>
    
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 20%;
}
</style>

<?php 

if ($chkStatus == true  && $orderId != "") // To ensure that Fatora gateway which issued that request
{
    ?>
    <div class = "center">
				<i class="fa fa-check-circle" aria-hidden="true"></i>
				Thank you, your order will process soon
	</div>
				
    <?php
    
}

?>