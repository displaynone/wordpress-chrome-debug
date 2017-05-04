# WordPress Web Console Debugger

Log errors, info or messages in the Google Chrome and Firefox Web Console. It uses [chromephp](https://github.com/ccampbell/chromephp) library by [Craig Campbell](https://github.com/ccampbell)

## Instalation

* Download, install and active the plugin
* Use in any script you want

## Usage

```php
// Normal debug
_debug($var, 'log');

// Info message
_debug($var, 'info');

// Warn message
_debug($var, 'warn');

// Error message
_debug($var, 'error');

// Message in table format
_debug(
  array(
    'idx_1' => 'val_1',
    'idx_2' => 'val_2',
    'idx_3' => 'val_3'
  ), 'table');

// Groups
_debug('New group', 'group');
_debug($var1, 'info');
_debug($var2, 'error');
// ...
_debug('', 'groupEnd');
```

