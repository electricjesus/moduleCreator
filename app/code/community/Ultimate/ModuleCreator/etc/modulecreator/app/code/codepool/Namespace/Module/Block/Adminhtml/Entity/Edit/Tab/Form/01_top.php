<?php
{{License}}
/**
 * {{EntityLabel}} edit form tab
 *
 * @category	{{Namespace}}
 * @package		{{Namespace}}_{{Module}}
 * {{qwertyuiop}}
 */
class {{Namespace}}_{{Module}}_Block_Adminhtml_{{Entity}}_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form{	
	/**
	 * prepare the form
	 * @access protected
	 * @return {{Module}}_{{Entity}}_Block_Adminhtml_{{Entity}}_Edit_Tab_Form
	 * {{qwertyuiop}}
	 */
	protected function _prepareForm(){
		$form = new Varien_Data_Form();
		$form->setFieldNameSuffix('{{entity}}');
		$this->setForm($form);
		$fieldset = $form->addFieldset('{{entity}}_form', array('legend'=>Mage::helper('{{module}}')->__('{{EntityLabel}}')));
