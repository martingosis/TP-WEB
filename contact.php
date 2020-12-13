<?php

    $msg = '';
    
    if(isset($_POST['submit'])){
        
        require_once 'swift-mailer/vendor/autoload.php';
        require_once 'swift-mailer/info.php';
            
    // Create the Transport
   $transport = (new Swift_SmtpTransport('smtp.mail.yahoo.com', 25))
  ->setUsername('EMAIL')
  ->setPassword('PASS')
    ;

    // Create the Mailer using your created Transport
   $mailer = new Swift_Mailer($transport);

    // Create a message
   $message = (new Swift_Message('Form Submission'))
  ->setFrom([EMAIL => 'martin'])
  ->setTo($_POST['email'])
  ->setBody($_POST['message']);

    // Send the message
   $result = $mailer->send($message);
        
        if(!$result){
            
            $msg = '<div class=alert alert-danger text-center >
                something went wrong
                </div>';
                
            }else{
            
            
            $msg = '<div class=alert alert-seccess text-center >
                Messege Sent Successfully
                </div>';
            
            }
                
    
}
    

?>

<?php  
   $seccion="Contactenos";
	include("inc/header.php");
?>


	<!-- banner-2 -->
	<div class="page-head_agile_info_w3l">

	</div>
	<!-- //banner-2 -->
	<!-- page -->
	
	<!-- //page -->

	<!-- contact -->
	<div class="contact py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>C</span>ontact
				<span>U</span>s
			</h3>
			<!-- //tittle heading -->
			
			<!-- form -->
			<form action="" method="post">
				<div class="contact-grids1 w3agile-6">
					<div class="row">
					  <div><?= $msg; ?></div>
						<div class="col-md-6 col-sm-6 contact-form1 form-group">
							<label class="col-form-label">Name</label>
							<input type="text" class="form-control" name="name" placeholder="" required="">
						</div>
						<div class="col-md-6 col-sm-6 contact-form1 form-group">
							<label class="col-form-label">E-mail</label>
							<input type="email" class="form-control" name="email" placeholder="" required="">
						</div>
						<div class="col-md-6 col-sm-6 contact-form1 form-group">
							<label class="col-form-label">Phone</label>
							<input  class="form-control" name="phone" placeholder="" required="number">
						</div>
					</div>
					<div class="contact-me animated wow slideInUp form-group">
						<label class="col-form-label">Message</label>
						<textarea name="message" class="form-control" placeholder="Escriba su mensaje..." required=""> </textarea>
					</div>
					<div>
						<input type="submit" name="submit" value="send">
					</div>
				</div>
			</form>

		</div>
	</div>
	

	<?php  
	include("inc/footer.php");
?>
