Joseki/LeanMapper-extension [![Build Status](https://secure.travis-ci.org/Joseki/LeanMapper-extension.png?branch=master)](http://travis-ci.org/Joseki/LeanMapper-extension)
===========================


Requirements
------------

Joseki/LeanMapper-extension requires PHP 5.3 or higher.

- [LeanMapper >= 2.1](http://www.leanmapper.com/)


Installation
------------

The best way to install Joseki/LeanMapper-extension is using  [Composer](http://getcomposer.org/):

```
"require": {
    "joseki/leanmapper-extension": "~1.0"
},
"minimum-stability": "dev",
"prefer-stable": true
```

With Nette stable 2.1 or newer, this is how you install the extension

```
LeanMapperExtension: Joseki\LeanMapper\DI\Extension

LeanMapperExtension:
    host: host
    username: username
    password: password
    driver: driver
    database: database
    # optional
    lazy: TRUE
    profiler: TRUE
```

Tutorial
--------

Need help? Read [tutorial](https://github.com/Joseki/LeanMapper-extension/wiki/_pages)!
