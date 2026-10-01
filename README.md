# pest-failure-summary

![Stable](https://img.shields.io/github/release/magicoli/pest-failure-summary?label=stable&color=green&include_prerelease&)
![GitHub Tag](https://img.shields.io/github/tag/magicoli/pest-failure-summary?label=latest&include_prereleases)
![GitHub commits since latest release](https://img.shields.io/github/commits-since/magicoli/pest-failure-summary/latest?label=dev&)
![PHP](https://img.shields.io/badge/PHP-8.1+-7884bf)
![phpunit](https://img.shields.io/badge/phpunit-10--13-ff2d20)
[![License](https://img.shields.io/badge/license-AGPL--3.0-552b55)](LICENSE)
![GitHub Downloads (all assets, all releases)](https://img.shields.io/github/downloads/magicoli/pest-failure-summary/total)
![Latest Version on Packagist](https://img.shields.io/packagist/v/magicoli/pest-failure-summary?label=Packagist)
![Packagist Downloads](https://img.shields.io/packagist/dt/magicoli/pest-failure-summary?label=Packagist%20dl)
[![Donate](https://img.shields.io/badge/-Donate-yellow)](https://magiiic.org/donate/)

A PHPUnit/Pest extension that prints a concise failure and skipped summary at the end of the test run.

Without it, failures are buried among hundreds of lines of output and you have to scroll up to find them. With it, a short list appears after the duration line — regardless of how tests are launched (`php artisan test`, `pest`, or bare `phpunit`).

## Features

- Lists all **failed** and **errored** tests by name after the run
- Lists all **skipped** and **todo** tests with their reason
- Outputs to `STDERR` so it is never captured by Pest's output buffering
- Decodes Pest's internal method name encoding (`__pest_evaluable__`) into readable test names
- Works with PHPUnit 10 to 13, Pest 2 to 5

## Installation

```bash
composer require --dev magicoli/pest-failure-summary
```

Register the extension in `phpunit.xml`:

```xml
<extensions>
    <bootstrap class="Magicoli\PestFailureSummary\FailureSummaryExtension"/>
</extensions>
```

No other configuration needed. Run your tests normally and the summary appears after the duration line when there are failures or skipped tests.

## Example output

```
Tests:    2 failed, 1 skipped, 14 passed (38 assertions)
Duration: 4.21s

  Failed/Skipped Summary

  Failed:
  ✗ booking sync → it maps room IDs to units
  ✗ booking sync → it deduplicates by email and dates

  Skipped:
  – auth → admin can access settings → todo
```

## License

AGPL-3.0-or-later — see [LICENSE](LICENSE).
