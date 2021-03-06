<?php

require_once('phpmailer/class.phpmailer.php');

$mail = new PHPMailer();

if( isset( $_POST['template-contactform-submit'] ) AND $_POST['template-contactform-submit'] == 'submit' ) {
    
    if( $_POST['template-contactform-name'] != '' AND $_POST['template-contactform-email'] != '' AND $_POST['template-contactform-subject'] != '' AND $_POST['template-contactform-message'] != '' ) {
        
        $name = $_POST['template-contactform-name'];
        
        $email = $_POST['template-contactform-email'];
        
        $service = $_POST['template-contactform-service'];
        
        $subject = $_POST['template-contactform-subject'];
        
        $message = $_POST['template-contactform-message'];
        
        $botcheck = $_POST['template-contactform-botcheck'];
        
        $toemail = 'noreply@semicolonweb.com'; // Your Email Address
        
        $toname = 'SemiColon'; // Your Name
        
		$body = "Name: $name \n\nEmail: $email \n\nService: $service \n\nMessage: $message";
        
        if( $botcheck == '' ) {
        
            $mail->SetFrom( $email , $name );
    
            $mail->AddReplyTo( $email , $name );
            
            $mail->AddAddress( $toemail , $toname );
            
            $mail->Subject = $subject;
            
            $mail->MsgHTML( $body );
            
            $sendEmail = $mail->Send();
            
            if( $sendEmail == true ):
            
                echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>We have <strong>successfully</strong> received your Message and will get Back to you as soon as possible.</div>';
            
            else:
                
                echo '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button>Email <strong>could not</strong> be sent due to some Unexpected Error. Please Try Again later.<br /><br /><strong>Reason:</strong><br />' . $mail->ErrorInfo . '</div>';
            
            endif;
        
        } else {
            
            echo '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button>Bot <strong>Detected</strong>.! Clean yourself Botster.!</div>';
            
        }
        
    } else {
        
        echo '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button>Please <strong>Fill up</strong> all the Fields and Try Again.</div>';
    
    }
    
} else {

    echo '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button>An <strong>unexpected error</strong> occured. Please Try Again later.</div>';

}

?>