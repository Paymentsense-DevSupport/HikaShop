<?php
/**
 * @package	HikaShop for Joomla!
 * @version	2.3.3
 * @author	hikashop.com
 * @copyright	(C) 2010-2014 HIKARI SOFTWARE. All rights reserved.
 * @license	GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
defined('_JEXEC') or die('Restricted access');
?><tr>
	<td class="key">
		<label for="data[payment][payment_params][api]">
			<?php echo JText::_( 'API' ); ?>
		</label>
	</td>
	<td>
		<?php
		$values = array();
		$values[] = JHTML::_('select.option', 'direct',JText::_('Direct'));
		$values[] = JHTML::_('select.option', 'hosted',JText::_('Hosted'));
		
		echo JHTML::_('select.genericlist',   $values, "data[payment][payment_params][api]" , 'class="inputbox" size="1"', 'value', 'text', @$this->element->payment_params->api ); ?>
	</td>
</tr>
<tr>
	<td class="key">
		<label for="data[payment][payment_params][merchantid]">
			<?php echo JText::_('Merchant ID:'); ?>	
		</label>
	</td>
	<td>
		<input type="text" name="data[payment][payment_params][merchantid]" value="<?php echo @$this->element->payment_params->merchantid; ?>" />
	</td>
</tr>
<tr>
	<td class="key">
		<label for="data[payment][payment_params][password]">
			<?php echo JText::_( 'Password:' ); ?>
		</label>
	</td>
	<td>
		<input type="text" name="data[payment][payment_params][password]" value="<?php echo @$this->element->payment_params->password; ?>" />
	</td>
</tr>
<tr>
	<td class="key">
		<label for="data[payment][payment_params][sharedkey]">
			<?php echo JText::_('PreSharedKey:'); ?>
		</label>
	</td>
	<td>
		<input type="text" name="data[payment][payment_params][sharedkey]" value="<?php echo @$this->element->payment_params->sharedkey; ?>" />
	</td>
</tr>

<tr>
	<td class="key">
		<label for="data[payment][payment_params][instant_capture]">
		  Transaction Type 
		</label>
		
		
	</td>
	<td>
	   <?php 
		$values = array();
		$values[] = JHTML::_('select.option', 'SALE',JText::_('SALE'));
		$values[] = JHTML::_('select.option', 'PREAUTH',JText::_('PREAUTH '));

		echo JHTML::_('select.genericlist',   $values, "data[payment][payment_params][instant_capture]" , 'class="inputbox" size="1"', 'value', 'text', @$this->element->payment_params->instant_capture ); ?>
		
	</td>
</tr>
<!-- MANDATORY PART -->
<tr>
	<td class="key">
		<label for="data[payment][payment_params][cv2mandatory]">
			<?php echo JText::_( 'CV2_MANDATORY' ); ?>
		</label>
	</td>
	<td>
		<?php echo JHTML::_('hikaselect.booleanlist', "data[payment][payment_params][cv2mandatory]" , '',@$this->element->payment_params->cv2mandatory	); ?>
	</td>
</tr>
<tr>
	<td class="key">
		<label for="data[payment][payment_params][address1mandatory]">
			<?php echo JText::_( 'ADDRESS1_MANDATORY' ); ?>
		</label>
	</td>
	<td>
		<?php echo JHTML::_('hikaselect.booleanlist', "data[payment][payment_params][address1mandatory]" , '',@$this->element->payment_params->address1mandatory	); ?>
	</td>
</tr>
<tr>
	<td class="key">
		<label for="data[payment][payment_params][citymandatory]">
			<?php echo JText::_( 'CITY_MANDATORY' ); ?>
		</label>
	</td>
	<td>
		<?php echo JHTML::_('hikaselect.booleanlist', "data[payment][payment_params][citymandatory]" , '',@$this->element->payment_params->citymandatory	); ?>
	</td>
</tr>
<tr>
	<td class="key">
		<label for="data[payment][payment_params][postcodemandatory]">
			<?php echo JText::_( 'POSTCODE_MANDATORY' ); ?>
		</label>
	</td>
	<td>
		<?php echo JHTML::_('hikaselect.booleanlist', "data[payment][payment_params][postcodemandatory]" , '',@$this->element->payment_params->postcodemandatory	); ?>
	</td>
</tr>
<tr>
	<td class="key">
		<label for="data[payment][payment_params][statemandatory]">
			<?php echo JText::_( 'STATE_MANDATORY' ); ?>
		</label>
	</td>
	<td>
		<?php echo JHTML::_('hikaselect.booleanlist', "data[payment][payment_params][statemandatory]" , '',@$this->element->payment_params->statemandatory	); ?>
	</td>
</tr>
<tr>
	<td class="key">
		<label for="data[payment][payment_params][countrymandatory]">
			<?php echo JText::_( 'COUNTRY_MANDATORY' ); ?>
		</label>
	</td>
	<td>
		<?php echo JHTML::_('hikaselect.booleanlist', "data[payment][payment_params][countrymandatory]" , '',@$this->element->payment_params->countrymandatory	); ?>
	</td>
</tr>
<!-- END OF MANDATORY PART -->


<tr>
	<td class="key">
		<label for="data[payment][payment_params][debug]">
			<?php echo JText::_( 'DEBUG' ); ?>
		</label>
	</td>
	<td>
		<?php echo JHTML::_('hikaselect.booleanlist', "data[payment][payment_params][debug]" , '',@$this->element->payment_params->debug	); ?>
	</td>
</tr>

<tr>
	<td class="key">
		<label for="data[payment][payment_params][invalid_status]">
			<?php echo JText::_( 'INVALID_STATUS' ); ?>
		</label>
	</td>
	<td>
		<?php echo $this->data['order_statuses']->display("data[payment][payment_params][invalid_status]",@$this->element->payment_params->invalid_status); ?>
	</td>
</tr>
<tr>
	<td class="key">
		<label for="data[payment][payment_params][verified_status]">
			<?php echo JText::_( 'VERIFIED_STATUS' ); ?>
		</label>
	</td>
	<td>
		<?php echo $this->data['order_statuses']->display("data[payment][payment_params][verified_status]",@$this->element->payment_params->verified_status); ?>
	</td>
</tr>
