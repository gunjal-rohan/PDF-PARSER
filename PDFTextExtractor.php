<?php

use Spatie\PdfToText\Pdf;

//convert pdf to text

class PDFTextExtractor
{
    private $text;

    public function load($file)
    {
        $path = 'c:/Program Files/Git/mingw64/bin/pdftotext';
        $this->text = Pdf::getText($file,$path);
    }

    public function extractText()
    {
        return $this->text;
    }
}
?>
