<?php

namespace Core;

class TemplateEngine
{
	public $file;
	public $content;
	public $replaced;

	public function __construct($file){
		$this->file = $file;
	}

	public function replace(){
		$records = [];
		$bleh = ["one", "two", "three"];
		$replacements = ["/({{)(.*)(}})/" => "<h1> $2 </h1>", 
		"/(\@)(\bif)(\(.*\))(\s.*)(\s\@elseif)(\(.*\))(\s.*)(\s\@else)(\s.*)(\s\@endif)/" => " <?php if($3): ?> I have one record!<?php elseif($6): ?>I have multiple records! <?php else:?>I don't have any records<?php endif;?>",
		"/(\@)(\bforeach)(.*)(\s.*)(\s\@endforeach)/"=>"<?php foreach$3:?><p>This is user <?= htmlentities(\"Yo\")?></p><?php endforeach;?>",
		"/(\@)(\bisset|\bempty)(.*)(\s.*)(\s\@)(\bendisset|\bendempty)/"  => "<?php if($2$3): ?> $4 <?php endif;?>"
	];
	$content = file_get_contents($this->file);
		foreach ($replacements as $pattern => $replacement) {
			$content = preg_replace($pattern, $replacement, $content);
		}
		return eval('?>'.$content);
	}
}