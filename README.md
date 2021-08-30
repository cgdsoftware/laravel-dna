# DNA to Laravel Model

## Installation
```
composer require familytree365/laravel-dna
```

## Usage

### via Command Line
```
php artisan dna:import /path/to/your/dna/file.dna
```

### via Facade
```
use FamilyTree365\LaravelDna\Facades\DnaParserFacade;
$filename = '/path/to/your/dna/file.dna';
DnaParserFacade::parse($filename, true);
```

### via Instantiation
```
use \FamilyTree365\LaravelDna\Utils\DnaParser;
$filename = '/path/to/your/dna/file.dna';
$parser = new DnaParser();
$parser->parse($filename, true);
```

## Documentation

### `parse()` Method
The `parse()` method takes three parameters, `string $filename`, `bool $progressBar = false`
and `string $conn` 
If you set `$progressBar` to true, a ProgressBar will be output to `php://stdout`, which is useful when you are calling
the parser from Artisan commands.

## Contributing 

Pull requests are welcome, as are issues.

## Contributors



## License

MIT License (see License.md). This means you must retain the copyright and permission notice is all copies, or 
substantial portions of this software. 
