# Windmill Theme
An extensible WordPress theme for developers and designers

> [!WARNING]
> This repository is in active beta development. Large and breaking changes may be made.

## What is This Project?
Windmill Theme is a starter Wordpress theme intended to give you a clean base to build new themes on top of.

The theme is designed to be easily extendable while setting some sensible defaults.

## What is the Windmill Project
The Windmill project is a suite of tools designed to streamline and enhance the process of authoring Wordpress themes with the [full site editor](https://wordpress.org/documentation/article/site-editor/).

The project currently includes: [Windmill Theme](https://github.com/maxcaplan/windmill-theme), [Windmill Blocks](https://github.com/maxcaplan/windmill-blocks), and [Windmill Data](https://github.com/maxcaplan/windmill-data)

## Features
- Default light and dark color palettes
- Default spacing scale
- Default typography and font styles
- Default templates for all basic page types
- Full editor controls by default
- Javascript and PostCSS build system
- Normalized styles for default Wordpress styles
- IDE tooling configuration for Wordpress coding standards

## How to Use This Theme
Windmill theme can be used on it's own as a theme. If you are building a more complex website or need to extend Windmill Theme, it is recommended to make a **child theme**.

You can learn more about child themes from [this Wordpress article](https://developer.wordpress.org/themes/advanced-topics/child-themes/).

## Requirements
### Installation
- Wordpress: ^6.9
- PHP: ^8.3

### Development
- composer: ^2.9.2
- node: ^24.11.1
- pnpm: ^10.28.2

## Installation
Windmill theme does not currently provide a prepackaged release.

## Setup
Clone the repository into the `wp-contet/themes/` directory of a Wordpress installation

```bash
git clone https://github.com/maxcaplan/windmill-theme.git
```

In the `windmill-theme` directory, install `pnpm` and `composer` dependencies

```bash
cd windmill-theme
pnpm install
composer install
```

Build the theme

```bash
pnpm run build
```

Windmill Theme can now be activated from the Wordpress admin panels **appearance** menu
