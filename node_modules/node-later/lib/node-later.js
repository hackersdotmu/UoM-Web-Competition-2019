'use strict';

var semver = require('semver');

/*eslint-disable valid-jsdoc*/
//jscs:disable jsDoc
/**
 * Returns a defer function.
 *
 * @function
 * @alias later
 * @public
 * @param {Boolean} [ioSafe=false] - True ensure IO safe implementation which will prevent stack overflow errors
 * @returns {function} A defer function
 * @example
 * ```js
 * //get a defer function
 * var defer = later();
 *
 * //use defer function
 * defer(onCallback() {
 *   //do something
 * });
 * ```
 *
 * @also
 *
 * Returns a defer function.
 *
 * @function
 * @alias later
 * @public
 * @param {String} [comptibleVersion=process.version.substring(1)] - The nodejs version the defer function should be compatible with
 * @returns {function} A defer function
 * @example
 * ```js
 * //get a defer function based on current nodejs version
 * var defer = later();
 *
 * //use defer function
 * defer(onCallback() {
 *   //do something
 * });
 *
 * //get a defer function based on a specific node.js version
 * defer = later('0.10.0'); //let be compatible with node.js 0.10 regardless of our current node.js runtime
 *
 * //use defer function
 * defer(onCallback() {
 *   //do something
 * });
 * ```
 */
var later = function (comptibleVersionOrIOSafe) {
    var deferFn = process.nextTick;

    if (comptibleVersionOrIOSafe) {
        if (typeof comptibleVersionOrIOSafe === 'boolean') {
            deferFn = setImmediate;
        } else if (semver.lt(comptibleVersionOrIOSafe, '0.12.0')) {
            deferFn = setImmediate;
        }
    } else if (semver.lt(later.nodejsVersion, '0.12.0')) {
        deferFn = setImmediate;
    }

    return deferFn;
};
//jscs:enable jsDoc
/*eslint-enable valid-jsdoc*/

later.nodejsVersion = process.version.substring(1);

module.exports = later;
