# funcs-js

[![NPM Version](http://img.shields.io/npm/v/funcs-js.svg?style=flat)](https://www.npmjs.org/package/funcs-js) [![Build Status](https://travis-ci.org/sagiegurari/funcs-js.svg)](http://travis-ci.org/sagiegurari/funcs-js) [![Coverage Status](https://coveralls.io/repos/sagiegurari/funcs-js/badge.svg)](https://coveralls.io/r/sagiegurari/funcs-js) [![Known Vulnerabilities](https://snyk.io/test/github/sagiegurari/funcs-js/badge.svg)](https://snyk.io/test/github/sagiegurari/funcs-js) [![Inline docs](http://inch-ci.org/github/sagiegurari/funcs-js.svg?branch=master)](http://inch-ci.org/github/sagiegurari/funcs-js) [![License](https://img.shields.io/npm/l/funcs-js.svg?style=flat)](https://github.com/sagiegurari/funcs-js/blob/master/LICENSE) [![Total Downloads](https://img.shields.io/npm/dt/funcs-js.svg?style=flat)](https://www.npmjs.org/package/funcs-js) [![Dependency Status](https://david-dm.org/sagiegurari/funcs-js.svg)](https://david-dm.org/sagiegurari/funcs-js) [![devDependency Status](https://david-dm.org/sagiegurari/funcs-js/dev-status.svg)](https://david-dm.org/sagiegurari/funcs-js?type=dev)

> Function wrappers for enhanced behavior.

* [Overview](#overview)
* [Usage](#usage)
  * [once](#usage-once)
  * [maxTimes](#usage-maxTimes)
  * [async](#usage-async)
  * [delay](#usage-delay)
  * [isFunction](#usage-isFunction)
  * [noop](#usage-noop)
  * [ensure](#usage-ensure)
* [Installation](#installation)
* [API Documentation](docs/api.md)
* [Contributing](.github/CONTRIBUTING.md)
* [Release History](#history)
* [License](#license)

<a name="overview"></a>
## Overview
The funcs-js provides different utility functions which enable to wrap functions and modify their behavior.

This library requires no external dependencies, and it is supported for both browser and node.js environments.

<a name="usage"></a>
## Usage
In order to use the library in browser, you first must add the relevant dependency:

```html
<script type="text/javascript" src="funcs.js"></script>
```

When using an AMD loader (such as RequireJS) or CommonJS type loader, the funcs object is not automatically defined on the window scope.

For node.js, simply require the module as follows:

````js
var funcs = require('funcs-js');
````

<a name="usage-once"></a>
<!-- markdownlint-disable MD009 MD031 MD036 -->
### 'funcs.once(fn, [options]) ⇒ function'
Ensures the provided function is invoked only once.<br>
This is the same as calling funcs.maxTimes(fn, 1)<br>
This function output can be chained with other funcs apis.

**Example**  
````js
var onlyOnceCallback = funcs.once(callback);

//can also chain multiple modifications (chained functions do not require original function as argument)
var asyncOnceCallback = funcs.once(callback).async();
````
<!-- markdownlint-enable MD009 MD031 MD036 -->

<a name="usage-maxTimes"></a>
<!-- markdownlint-disable MD009 MD031 MD036 -->
### 'funcs.maxTimes(fn, times, [options]) ⇒ function'
Wraps the provided function and ensures it is invoked no more than the provided amount.<br>
This function output can be chained with other funcs apis.

**Example**  
````js
var onlyOnceCallback = funcs.maxTimes(callback, 1);

//can also chain multiple modifications (chained functions do not require original function as argument)
var delayedMaxTimesCallback = funcs.maxTimes(callback, 5).delay(500);
````
<!-- markdownlint-enable MD009 MD031 MD036 -->

<a name="usage-async"></a>
<!-- markdownlint-disable MD009 MD031 MD036 -->
### 'funcs.async(fn, [options]) ⇒ function'
Ensures the function is invoked only in the next cycle.<br>
This is the same as calling funcs.delay(fn, 0)<br>
This function output can be chained with other funcs apis.

**Example**  
````js
var asyncCallback = funcs.async(callback);

//can also chain multiple modifications (chained functions do not require original function as argument)
var asyncOnceCallback = funcs.async(callback).once();
````
<!-- markdownlint-enable MD009 MD031 MD036 -->

<a name="usage-delay"></a>
<!-- markdownlint-disable MD009 MD031 MD036 -->
### 'funcs.delay(fn, [delay], [options]) ⇒ function'
Trigger the actual function only after the provided delay.<br>
This function output can be chained with other funcs apis.

**Example**  
````js
var delayedCallback = funcs.delay(callback, 500);

//can also chain multiple modifications (chained functions do not require original function as argument)
var delayedMaxTimesCallback = funcs.delay(callback, 500).maxTimes(5);
````
<!-- markdownlint-enable MD009 MD031 MD036 -->

<a name="usage-isFunction"></a>
<!-- markdownlint-disable MD009 MD031 MD036 -->
### 'funcs.isFunction([fn]) ⇒ Boolean'
Returns true if the provided argument is a function.

**Example**  
````js
var isFn = funcs.isFunction(myFunction);

funcs.isFunction(function () {}); //true
funcs.isFunction(); //false
funcs.isFunction(5); //false
funcs.isFunction(true); //false
````
<!-- markdownlint-enable MD009 MD031 MD036 -->

<a name="usage-noop"></a>
<!-- markdownlint-disable MD009 MD031 MD036 -->
### 'funcs.noop() ⇒ undefined'
Empty function.

<!-- markdownlint-enable MD009 MD031 MD036 -->

<a name="usage-ensure"></a>
<!-- markdownlint-disable MD009 MD031 MD036 -->
### 'funcs.ensure([fn]) ⇒ function'
Ensures a return function.<br>
If a function is provided, it will be returned, otherwise a noop function will be returned.

**Example**  
````js
var handler = funcs.ensure(maybeHandler);
````
<!-- markdownlint-enable MD009 MD031 MD036 -->

<a name="installation"></a>
## Installation
Run npm install in your project as follows:

```sh
npm install --save funcs-js
```

Or if you are using bower, you can install it as follows:

```sh
bower install funcs-js --save
```

## API Documentation
See full docs at: [API Docs](docs/api.md)

## Contributing
See [contributing guide](.github/CONTRIBUTING.md)

<a name="history"></a>
## Release History

| Date        | Version | Description |
| ----------- | ------- | ----------- |
| 2018-08-05  | v1.0.17 | Maintenance |
| 2017-04-28  | v1.0.1  | Offical release |
| 2017-04-28  | v0.0.6  | Docs |
| 2017-04-28  | v0.0.5  | Rename package as funcs-js |
| 2017-04-27  | v0.0.1  | Initial release |

<a name="license"></a>
## License
Developed by Sagie Gur-Ari and licensed under the Apache 2 open source license.
