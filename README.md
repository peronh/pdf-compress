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
## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/Webklex/laravel-pdfmerger.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/Webklex/translator/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/Webklex/laravel-pdfmerger.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/Webklex/laravel-pdfmerger.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/Webklex/laravel-pdfmerger.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/Webklex/laravel-pdfmerger
[link-travis]: https://travis-ci.org/Webklex/laravel-pdfmerger
[link-scrutinizer]: https://scrutinizer-ci.com/g/Webklex/laravel-pdfmerger/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/Webklex/laravel-pdfmerger
[link-downloads]: https://packagist.org/packages/Webklex/laravel-pdfmerger
[link-author]: https://github.com/webklex

