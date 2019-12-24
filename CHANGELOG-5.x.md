# Changelog for 5.x

This changelog references the relevant changes (bug and security fixes) done to `orchestra/contracts`.

## Unreleased

### Added

* Added `Orchestra\Contracts\Installation\Specification::error()` return type to `?array`.

### Changes

* Changed `Orchestra\Contracts\Installation\Installation::make()` return type to `void` instead of `bool`.

### Removed

* Remove deprecated `Orchestra\Contracts\Installation\Installation::bootInstallerFilesForTesting()`.
