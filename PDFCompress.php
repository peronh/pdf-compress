<?php

namespace Everest\PDFCompress;

class PDFCompress
{
	protected $files = [];

	public function AddFile($source_pdf_file){
		if( file_exists($source_pdf_file) ){
			$this->files[] = $source_pdf_file;
		}
	}

	public function CompressFile($dest_pdf_file = ""){
		if( $dest_pdf_file == "" ){
			return ("Invalid output destination.");
			exit();
		}

		if( count($this->files) <= 0 ){
			return ("No PDF files to be compress.");
			exit();
		}
		$cmd = 'gs -sDEVICE=pdfwrite -dCompatibilityLevel=1.4 -dPDFSETTINGS=/ebook -dNOPAUSE -dQUIET -dBATCH -sOutputFile='.$dest_pdf_file. ' '.$dest_pdf_file.' ';
		foreach ($this->files as $file) {
			if( file_exists($file) || $file !== "" ){
				$cmd .= $file." ";
			}
		}

		$results = shell_exec($cmd);
		return ("PDF files successfully merged.");
		exit();

	}
}