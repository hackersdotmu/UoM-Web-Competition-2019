## Functions

<dl>
<dt><a href="#later">later([ioSafe])</a> ⇒ <code>function</code></dt>
<dd><p>Returns a defer function.</p>
</dd>
<dt><a href="#later">later([comptibleVersion])</a> ⇒ <code>function</code></dt>
<dd><p>Returns a defer function.</p>
</dd>
</dl>

<a name="later"></a>

## later([ioSafe]) ⇒ <code>function</code>
Returns a defer function.

**Kind**: global function  
**Returns**: <code>function</code> - A defer function  
**Access**: public  

| Param | Type | Default | Description |
| --- | --- | --- | --- |
| [ioSafe] | <code>Boolean</code> | <code>false</code> | True ensure IO safe implementation which will prevent stack overflow errors |

**Example**  
```js
//get a defer function
var defer = later();

//use defer function
defer(onCallback() {
  //do something
});
```
<a name="later"></a>

## later([comptibleVersion]) ⇒ <code>function</code>
Returns a defer function.

**Kind**: global function  
**Returns**: <code>function</code> - A defer function  
**Access**: public  

| Param | Type | Default | Description |
| --- | --- | --- | --- |
| [comptibleVersion] | <code>String</code> | <code>process.version.substring(1)</code> | The nodejs version the defer function should be compatible with |

**Example**  
```js
//get a defer function based on current nodejs version
var defer = later();

//use defer function
defer(onCallback() {
  //do something
});

//get a defer function based on a specific node.js version
defer = later('0.10.0'); //let be compatible with node.js 0.10 regardless of our current node.js runtime

//use defer function
defer(onCallback() {
  //do something
});
```
