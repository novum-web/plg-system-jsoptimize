# Changelog

All notable changes to **System - JS Optimize** are documented here.
Format based on [Keep a Changelog](https://keepachangelog.com/).

## [1.2.8] - 2026-06-10
### Changed
- Improved defer logic for inline scripts on Joomla 5.x
- Updated build toolchain

## [1.2.7] - 2026-04-22
### Fixed
- Regression where minify option stripped template literals in ES6 modules
### Added
- Compatibility with Cassiopeia child templates

## [1.2.6] - 2026-02-15
### Fixed
- PHP 8.2 deprecation warning in exclude-list parser
### Changed
- Bumped minimum Joomla version to 4.4

## [1.2.5] - 2025-12-03
### Added
- Exclude Scripts option (per-URL fragments)
### Fixed
- Race condition with Gantry 5 asset pipeline

## [1.2.4] - 2025-10-18
### Changed
- Skip `media/system` core scripts by default

## [1.2.3] - 2025-08-29
### Added
- Joomla 6.x compatibility stubs
### Fixed
- Plugin params not saving on some hosts with strict MySQL modes

## [1.2.2] - 2025-06-11
### Fixed
- Minify corrupting JSON-LD structured data blocks

## [1.2.1] - 2025-04-05
### Added
- Minify option (comments and whitespace removal)

## [1.2.0] - 2025-02-20
### Added
- Helix Ultimate and YOOtheme compatibility
### Changed
- Rewritten defer logic for Joomla 5.0 head API

## [1.1.0] - 2024-11-12
### Added
- Initial deferred JavaScript loading feature

## [1.0.0] - 2024-08-01
### Added
- First public release
