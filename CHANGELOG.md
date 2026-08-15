# Changelog

## 1.0.0 First release

- feat: add a failure summary at the end of pest/phpunit report, simple list of all failed and skipped tests
- feat: Lists all **failed** and **errored** tests by name after the run
- feat: Lists all **skipped** and **todo** tests with their reason
- feat: Outputs to `STDERR` so it is never captured by Pest's output buffering
- feat: Decodes Pest's internal method name encoding (`__pest_evaluable__`) into readable test names
- requirements: Works with PHPUnit 10 to 13, Pest 2 to 5
