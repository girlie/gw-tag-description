<?php
/*
Name: Tag Description
Author: GirlieWorks, LLC
Description: Display Tag Description
Version: 1.2
Class: gwthesis_tag_description
*/

class gwthesis_tag_description extends thesis_box {
	public $templates = array('archive');

	protected function translate() {
		$this->title = __('Tag Description', $this->_class);
	}

	public function html() {
		if (is_tag()) {
		?>
		<div class="tagdesc"><?php echo tag_description(); ?></div>
		<?php }
	}
}
