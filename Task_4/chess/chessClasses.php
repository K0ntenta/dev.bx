<?php

abstract class Figure
{
	protected $line,$column;
	public function __construct($a, $b)
	{
		if ((is_numeric($a) and $a >= 1 and $a <= 8) and
			(is_numeric($b) and $b >= 1 and $b <= 8))
		{
			$this->column = $a;
			$this->line = $b;
		}
		else
		{
			exit('Ошибка ввода');
		}
	}
	abstract public function check($column, $line);
}

class Rook extends Figure
{
	public function __construct($a, $b)
	{
		parent::__construct($a, $b);
	}
	public function check($column, $line): string
	{
		if ($line == $this->line or $column == $this->column)
		{
			return 'ДА';
		}
		else
		{
			return 'НЕТ';
		}
	}
}