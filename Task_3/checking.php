<?php

function checking($path, $list)
{
	$currentDir = opendir($path);
	while ($element = readdir($currentDir))
	{
		$absolutePath = $path.'/'.$element;
		if (in_array($element, ['.','..']))
		{
			continue;
		}
		if (is_dir($absolutePath))
		{
			$list['dirs'][$element]['is_readable'] = is_readable($absolutePath);
			$list['dirs'][$element]['is_writeable'] = is_writeable($absolutePath);
		}
		elseif (is_file($absolutePath))
		{
			$list['files'][$element]['is_readable'] = is_readable($absolutePath);
			$list['files'][$element]['is_writeable'] = is_writeable($absolutePath);
			$list['files'][$element]['filesize'] = filesize($absolutePath);
		}
	}
	closedir($currentDir);
	return $list;
}