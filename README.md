<h1 align="center">Kirby Preview Files</h1>
<h3 align="center">Enable file thumbnail preview in the panel sidebar</h3>

<div align="center">
    <img alt="version" src="https://img.shields.io/badge/version-0.1.0-green.svg?style=flat-square"/>
    <img alt="kirby_version" src="https://img.shields.io/badge/kirby-2.0+-red.svg?style=flat-square"/>
    <img alt="license" src="https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square"/>
    <br>
    <br>
    <br>
    <br>
    <img alt="preview" src="https://github.com/brocessing/kirby-previewfiles/blob/assets/preview.gif?raw=true">
</div>

<br>
<br>

## Installation

Use one of the alternatives below.

### 1. Using [`kirby-webpack`](https://github.com/brocessing/kirby-webpack)

Simply use the built-in **Kirby Package Manager** by running:

```sh
$ npm run kirby:add
$ [?] Git URL: https://github.com/brocessing/kirby-previewfiles
$ [?] Module name: previewfiles
$ [?] Category: fields
```

### 2. Kirby CLI

If you are using the [Kirby CLI](https://github.com/getkirby/cli) you can install this plugin by running the following commands in your shell:

```sh
$ cd path/to/kirby
$ kirby plugin:install brocessing/kirby-previewfiles
```

### 3. Clone or download

1. [Clone](https://github.com/brocessing/kirby-previewfiles.git) or [download](https://github.com/brocessing/kirby-previewfiles/archive/master.zip) this repository.
2. Unzip the archive if needed and rename the folder to `previewfiles`.

**Make sure that the plugin folder structure looks like this:**

```text
site/fields/previewfiles/
```

### 4. Git Submodule

If you know your way around Git, you can download this plugin as a submodule:

```sh
$ cd path/to/kirby
$ git submodule add https://github.com/brocessing/kirby-previewfiles site/fields/previewfiles
```

## Setup

### Blueprint

To enable file preview for a given page, add the following code to its blueprint: 

```yaml
fields:
  previewfiles:
    type: previewfiles
```

## Requirements

- [**Kirby**](https://getkirby.com/) 2.0+

## Disclaimer

This field is provided "as is" with no guarantee. Use it at your own risk and always test it yourself before using it in a production environment. If you find any issues, please [create a new issue](https://github.com/brocessing/kirby-previewfiles/issues/new).

## License

[MIT](https://opensource.org/licenses/MIT)

It is discouraged to use this field in any project that promotes racism, sexism, homophobia, animal abuse, violence or any other form of hate speech.
