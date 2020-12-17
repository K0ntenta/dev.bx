<?php

interface Document
{
	public function printer(): void;
}

class TextDocument implements Document
{
	protected $text;

	public function __construct(string $text)
	{
		$this->text = $text;
	}

	public function printer(): void
	{
		echo "TextDocument: {$this->text}\n";
	}
}

class PdfDocument implements Document
{
	protected $text;

	public function setText(string $text): void
	{
		$this->text = $text;
	}

	public function printer(): void
	{
		echo "PdfDocument: {$this->text}\n";
	}
}

abstract class DocumentFactory
{
	protected $text;

	public function __construct(string $text)
	{
		$this->text = $text;
	}

	abstract public function createDocument(): Document;
}

class TextDocumentFactory extends DocumentFactory
{
	public function getText(): void
	{
		echo $this->text;
	}

	public function createDocument(): Document
	{
		$report = new TextDocument($this->text);
		return $report;
	}
}

class PdfDocumentFactory extends DocumentFactory
{
	public function createDocument(): Document
	{
		$report = new PdfDocument();
		$report->setText($this->text);
		return $report;
	}
}

class DocumentPrinter
{
	public const DOCUMENT_TYPE_TEXT = 'text';
	public const DOCUMENT_TYPE_PDF = 'pdf';

	public static function printDocument(DocumentFactory $docFactory): void
	{
		$report = $docFactory->createDocument();
		$report->printer();
	}

	public static function printDocumentByType(string $type, string $text): void
	{
		if ($type === self::DOCUMENT_TYPE_TEXT)
		{
			$factory = new TextDocumentFactory($text);
		}
		elseif ($type === self::DOCUMENT_TYPE_PDF)
		{
			$factory = new PdfDocumentFactory($text);
		}
		else
		{
			throw new \RuntimeException('Wrong document type');
		}
		self::printDocument($factory);
	}
}

$documentText = 'Document text here';

DocumentPrinter::printDocumentByType(DocumentPrinter::DOCUMENT_TYPE_TEXT, $documentText);
DocumentPrinter::printDocumentByType(DocumentPrinter::DOCUMENT_TYPE_PDF, $documentText);