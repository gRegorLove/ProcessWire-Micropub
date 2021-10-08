# ProcessWire-Micropub
**Version 0.0.1 is under development currently.**

This module is an alpha version. It currently serves as a proof of concept for receiving Micropub requests and verifying the IndieAuth access token.

This module will be expanded over time to support the [Micropub specification](https://micropub.spec.indieweb.org/)

## Requirements
* PHP 7+
* ProcessWire 3

## Installation
* Upload the plugin files to the `/site/modules` directory
* Install the module from the ProcessWire admin
* Copy the template files from `/extras/templates` into your `/site/templates` directory
* Verify that the plugin installed public page "micropub-endpoint"
* Update the home page template, adding the module’s `getLinkElements` to the `<head>` element:

```html
<head>
	<?=$modules->get('ProcessMicropub')->getLinkElements();?>
</head>
```

This should result in a `<link>` element in the source HTML:

```html
<head>
	<link rel="micropub" href="/micropub-endpoint/">
</head>
```

# License
Copyright 2021 by gRegor Morrill. Licensed under the MIT license https://opensource.org/licenses/MIT

