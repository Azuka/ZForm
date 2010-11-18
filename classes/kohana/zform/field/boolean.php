<?php defined('SYSPATH') or die('No direct script access.');

/**
 * ZForm: a boolean field implementation. Displays a checkbox
 *
 * @package    ZForm
 * @category   Field
 * @author     Azuka Okuleye
 * @copyright  (c) 2009 Azuka Okuleye
 * @license    http://zahymaka.com/license.html
 */
class Kohana_ZForm_Field_Boolean extends ZForm_Field
{
	protected $_config = array(
		'true_value'  => 1,
		'false_value' => 0,
	);

	public function render()
	{
		return Form::checkbox(
			$this->_name,
			$this->_config['true_value'],
			1,
			$this->_attributes +
			array(
				'id' => $this->_id,
			)
		);
	}

	public function  db_value()
	{
		return $this->_value ? $this->_config['true_value'] : $this->_config['false_value'];
	}
}