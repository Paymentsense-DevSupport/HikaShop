<div class="hikashop_paymentsense_thankyou" id="hikashop_paymentsense_thankyou">
	<span id="hikashop_paymentsense_thankyou_message" class="hikashop_paymentsense_thankyou_message">
		<?php echo JText::_('THANK_YOU_FOR_PURCHASE');
		if(!empty($return_url)){
			echo '<br/><a href="'.$return_url.'">'.JText::_('GO_BACK_TO_SHOP').'</a>';
		}?>
	</span>
</div>
<?php 
if(!empty($return_url)){
	$doc =& JFactory::getDocument();
	$doc->addScriptDeclaration("window.addEvent('domready', function() {window.location='".$return_url."'});");
}