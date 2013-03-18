<?php
/*
Template Name: Contact
*/
?>

<?php
if(isset($_POST['submitted'])) {
	if(trim($_POST['contactName']) === '') {
		$nameError = 'Please enter your name.';
		$hasError = true;
	} else {
		$name = trim($_POST['contactName']);
	}

	if(trim($_POST['email']) === '')  {
		$emailError = 'Please enter your email address.';
		$hasError = true;
	} else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['email']))) {
		$emailError = 'You entered an invalid email address.';
		$hasError = true;
	} else {
		$email = trim($_POST['email']);
	}

	if(trim($_POST['comments']) === '') {
		$commentError = 'Please enter a message.';
		$hasError = true;
	} else {
		if(function_exists('stripslashes')) {
			$comments = stripslashes(trim($_POST['comments']));
		} else {
			$comments = trim($_POST['comments']);
		}
	}

	if(!isset($hasError)) {
		$emailTo = get_option('of_email');
		if (!isset($emailTo) || ($emailTo == '') ){
			$emailTo = get_option('admin_email');
		}
		$subject = 'From '.$name;
		$body = "Name: $name \n\nEmail: $email \n\nComments: $comments";
		$headers = 'From: '.$name.' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

		mail($emailTo, $subject, $body, $headers);
		$emailSent = true;
	}

} ?>
<?php get_header(); ?>

<!-- INFO BLOCK WRAP -->
<div id="gallery-block-wrap">

<!-- ROW INFO BLOCK -->
<div class="row" id="single-block">

	<!-- TWELVE COLUMNS -->
	<div class="twelve columns" id="single-top">
	
		<?php if ( $contacttag = get_option('of_contact_tagline') ) { ?>
	
			<h1 id="single-title"><?php echo stripslashes ( $contacttag); ?>
		
			<?php if (get_option('of_stars') == 'true') { ?>
			<br/><span class="single-star">&#9733;</span>
		<?php } ?>
		
		</h1>
	
		<?php } else { ?>

		<h1 id="single-title">jQuery Contact Form
		
		<?php if (get_option('of_stars') == 'true') { ?>
		<br/><span class="single-star">&#9733;</span>
		<?php } ?>
		
		</h1>
	
		<?php } ?>
		
	<!-- END TWELVE COLUMNS -->
	</div>

<!-- ROW INFO BLOCK -->
</div>

</div>
	
	<div class="row" id="single-block">
	
		<div class="three columns contact" id="single-sidebar">
	
			<?php require (TEMPLATEPATH . '/framework/includes/single-sidebar.php'); ?>
	
		</div>
		
		<div class="nine columns contact">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				
				<div class="clear"></div>

					<div class="entry-content">
                    
						<?php the_content(); ?>
                        
						<?php if(isset($emailSent) && $emailSent == true) { ?>

                            <div class="thanks">
                                <p><?php _e('Thanks, your email was sent successfully.', 'framework') ?></p>
                            </div>
        
                        <?php } else { ?>
                
                            <?php if(isset($hasError) || isset($captchaError)) { ?>
                                <p class="error"><?php _e('Sorry, an error occured.', 'framework') ?><p>
                            <?php } ?>
            
                            <form action="<?php the_permalink(); ?>" id="contactForm" method="post" class="clearfix">
                                <ul class="contactform">
                                    <li><label for="contactName"><?php _e('Name:', 'framework') ?></label>
                                        <input type="text" name="contactName" id="contactName" value="<?php if(isset($_POST['contactName'])) echo $_POST['contactName'];?>" class="required requiredField large input-text" />
                                        <?php if($nameError != '') { ?>
                                            <span class="error"><?php echo $nameError; ?></span> 
                                        <?php } ?>
                                    </li>
                        
                                    <li><label for="email"><?php _e('Email:', 'framework') ?></label>
                                        <input type="text" name="email" id="email" value="<?php if(isset($_POST['email']))  echo $_POST['email'];?>" class="required requiredField email large input-text" />
                                        <?php if($emailError != '') { ?>
                                            <span class="error"><?php echo $emailError; ?></span>
                                        <?php } ?>
                                    </li>
                        
                                    <li class="textarea"><label for="commentsText"><?php _e('Message:', 'framework') ?></label>
                                        <textarea name="comments" id="commentsText" rows="20" cols="30" class="required requiredField form.nice textarea"><?php if(isset($_POST['comments'])) { if(function_exists('stripslashes')) { echo stripslashes($_POST['comments']); } else { echo $_POST['comments']; } } ?></textarea>
                                        <?php if($commentError != '') { ?>
                                            <span class="error"><?php echo $commentError; ?></span> 
                                        <?php } ?>
                                    </li>
                        
                                    <li class="button">
                                        <input type="hidden" name="submitted" id="submitted" value="true" />
                                        <button name="submit" type="submit" id="submit" tabindex="5"><span class="icon"><span class="arrow"></span></span><?php _e('Send Email', 'framework') ?></button>
                                    </li>
                                </ul>
                            </form>
                        <?php } ?>
					
					</div>

				
				</div>

				<?php endwhile; endif; ?>
		
		</div>
	
	</div><!-- #container -->

<?php get_footer(); ?>