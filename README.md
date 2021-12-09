# Pdf compress

## Installation
```
    composer require peronh/pdf-compress
```
## Highlights

can be used without any framework.

## Example Usage

```php
// Import Class
use Peronh\PDFCompress\PDFCompress;

// and now you can use library

$pdf = new PDFCompress();
$pdf->AddFile('path/to/source_pdf_file.pdf');
$pdf->CompressFile($obj->getFilePath('path/to/dest_pdf_file.pdf', 'default_ebook');

```
## Additional option 

```
screen   (screen-view-only quality, 72 dpi images)
ebook    (low quality, 150 dpi images)
printer  (high quality, 300 dpi images)
prepress (high quality, color preserving, 300 dpi imgs)
default  (almost identical to /screen)

```

Enjoy and leave star if you like it :)
