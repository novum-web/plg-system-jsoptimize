# plg-system-jsoptimize

**System - JS Optimize** is a lightweight Joomla plugin that minifies and defers JavaScript loading to improve Core Web Vitals and PageSpeed Insights scores.

## Features

- Defers non-critical JavaScript with the `defer` attribute
- Optional minification (strips comments and whitespace)
- Per-script exclusion list
- No third-party dependencies
- Works with Gantry 5, Cassiopeia, Helix Ultimate and YOOtheme templates

## Requirements

- Joomla 4.4, 5.x or 6.x
- PHP 7.4+ (8.x recommended)

## Installation

1. Download the latest release ZIP from the [releases page](../../releases).
2. Install via **Extensions → Manage → Install** in your Joomla administrator.
3. Enable the plugin under **System → Plugins → System - JS Optimize**.

## Configuration

| Option | Description |
|---|---|
| **Defer JavaScript** | Adds the `defer` attribute to eligible script tags. |
| **Minify JS** | Removes comments and whitespace from inline and external scripts. |
| **Exclude Scripts** | One URL fragment per line. Matching scripts are left untouched. |

## Changelog

See [CHANGELOG.md](CHANGELOG.md).

## License

GNU General Public License version 2 or later.
