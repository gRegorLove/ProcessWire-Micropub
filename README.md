# ProcessWire-Micropub
**Version 0.0.1 is under development currently.**

A [ProcessWire](https://processwire.com) module to enable [Micropub](https://micropub.spec.indieweb.org/) publishing to your site using third-party clients.

This module is currently a beta version. It will create the basic post types (rsvp, repost, like, video, photo, bookmark, note, and article) by generating the HTML in the `body` field. Developers can hook methods to write "recipes" for more advanced handling of requests, e.g. saving data in different fields. Feedback is welcome and appreciated!

## Requirements
* PHP 7+
* ProcessWire 3

## Installation
* Upload the plugin files to the `/site/modules` directory
* Install the module from the ProcessWire admin
* Copy the template files from `/extras/templates` into your `/site/templates` directory
* Verify that the plugin installed public page "Micropub Endpoint"
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

## Changelog
* [Changelog](CHANGELOG.md)

# Licenses
Copyright 2022 by gRegor Morrill. Licensed under the MIT license https://opensource.org/licenses/MIT

This project also uses code with the following copyright and licenses:
* [p3k-micropub library](https://github.com/aaronpk/p3k-micropub) Copyright 2018 by Aaron Parecki. Licensed under the MIT license.

