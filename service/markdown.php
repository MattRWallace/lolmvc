<?php \Service

class Markdown {

	public static $parser;

	public function _construct() {
		#
		# Initialize the parser and return the result of its transform method.
		#
        	# Setup static parser variable.
        	if (!isset($this->parser)) {
                	$this->parser = new \Michelf\MarkdownExtra_Parser;
        	}
	}

	public function parse($md) {
                # Transform text using parser.
                return $this->parser->transform($md);
	}

}
