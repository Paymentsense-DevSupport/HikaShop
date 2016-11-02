<div class="hikashop_paymentsense_end" id="hikashop_paymentsense_end">
	<span id="hikashop_paymentsense_end_message" class="hikashop_paymentsense_end_message">
		<?php echo JText::sprintf('PLEASE_WAIT_BEFORE_REDIRECTION_TO_X',$method->payment_name).'<br/>'. JText::_('CLICK_ON_BUTTON_IF_NOT_REDIRECTED');?>
	</span>
	<span id="hikashop_paymentsense_end_spinner" class="hikashop_paymentsense_end_spinner">
		<img src="<?php echo HIKASHOP_IMAGES.'spinner.gif';?>" />
	</span>
	<br/>
	<form id="hikashop_paymentsense_form" name="hikashop_paymentsense_form" action="https://mms.paymentsensegateway.com/Pages/PublicPages/PaymentForm.aspx" method="post">
		<div id="hikashop_paymentsense_end_image" class="hikashop_paymentsense_end_image">
			<input id="hikashop_paymentsense_button" type="submit" value="<?php echo JText::_('PAY_NOW');?>" name="" alt="<?php echo JText::_('PAY_NOW');?>" />
		</div>
		<?php
			foreach( $vars as $name => $value ) {
				echo '<input type="hidden" name="'.$name.'" value="'.htmlspecialchars((string)$value).'" />';
			}
			$doc =& JFactory::getDocument();
			$doc->addScriptDeclaration("window.addEvent('domready', function() {document.getElementById('hikashop_paymentsense_form').submit();});");
			JRequest::setVar('noform',1);
		?>
	</form>
</div>