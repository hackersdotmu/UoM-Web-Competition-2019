# node-later

[![NPM Version](http://img.shields.io/npm/v/node-later.svg?style=flat)](https://www.npmjs.org/package/node-later) [![Build Status](https://travis-ci.org/sagiegurari/node-later.svg)](http://travis-ci.org/sagiegurari/node-later) [![Coverage Status](https://coveralls.io/repos/sagiegurari/node-later/badge.svg)](https://coveralls.io/r/sagiegurari/node-later) [![Known Vulnerabilities](https://snyk.io/test/github/sagiegurari/node-later/badge.svg)](https://snyk.io/test/github/sagiegurari/node-later) [![Inline docs](http://inch-ci.org/github/sagiegurari/node-later.svg?branch=master)](http://inch-ci.org/github/sagiegurari/node-later)<br>
[![License](https://img.shields.io/npm/l/node-later.svg?style=flat)](https://github.com/sagiegurari/node-later/blob/master/LICENSE) [![Total Downloads](https://img.shields.io/npm/dt/node-later.svg?style=flat)](https://www.npmjs.org/package/node-later) [![Dependency Status](https://david-dm.org/sagiegurari/node-later.svg)](https://david-dm.org/sagiegurari/node-later) [![devDependency Status](https://david-dm.org/sagiegurari/node-later/dev-status.svg)](https://david-dm.org/sagiegurari/node-later?type=dev)

> Defer function calls to the start of the next cycle.

* [Overview](#overview)
* [Usage](#usage)
* [Installation](#installation)
* [API Documentation](docs/api.md)
* [Contributing](.github/CONTRIBUTING.md)
* [Release History](#history)
* [License](#license)

<a name="overview"></a>
## Overview
Invoke functions in the next cycle.<br>
You have multiple node.js APIs to run a function later, for example process.nextTick, setImmediate and setTimeout.<br>
Each of those will invoke the provided function at a different time.<br>
This library enables to extract the "best" API which enables to run a provided function **as soon as possible** based on the currently node.js runtime version.

<a name="usage"></a>
## Usage

```js
//first you must require this library as follows:
var later = require('node-later');

//get a defer function based on current node.js version
var defer = later();

//or get a defer function based on a specific node.js version
defer = later('0.10.0'); //let be compatible with node.js 0.10 regardless of our current node.js runtime

//or get a defer function which is IO safe (will prevent stack overflow errors)
defer = later(true);

//use defer function
defer(onCallback() {
  //do something
});
```

<a name="installation"></a>
## Installation
In order to use this library, just run the following npm install command:

```sh
npm install --save node-later
```

## API Documentation
See full docs at: [API Docs](docs/api.md)

## Contributing
See [contributing guide](.github/CONTRIBUTING.md)

<a name="history"></a>
## Release History

| Date        | Version | Description |
| ----------- | ------- | ----------- |
| 2018-06-13  | v1.0.13 | Maintenance |
| 2017-04-28  | v1.0.0  | Offical release |
| 2017-04-28  | v0.0.1  | Initial release |

<a name="license"></a>
## License
Developed by Sagie Gur-Ari and licensed under the Apache 2 open source license.
