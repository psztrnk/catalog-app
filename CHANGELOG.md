# Changelog

## v1.1
Conditional menu items.
- Import menu item is displayed only if a Moly API key is set in `config.php`.
- Lent books menu item is displayed only if there is at least one lent book in the collection.
- Ebooks menu item is displayed only if there is at least one ebook in the collection.

Support for books in foreign languages
- Added a new form field for "Language" when adding/editing collection items.
- Added a new form field for "Original title" when adding/editing collection items.
- Books in a given language can be queried by clicking on the name of the language at an item record.
- By clicking on original title, all translations of the given item is displayed.
- Items in certain languages can be searched with the `lang:` prefix.
- Searches with `title:` prefix also returns items that have the term in their original titles.

Support for series
- Added a new form field for series title, if the item is part of a series.
- Added a new form field to indicate the volume number for the item in the series.
- Clicking on the series title on an item page displayes all items in the given series.
- Series titles can be searched with the `series:` prefix.

Update script
- Added an update script to simplify updates

Other changes
- Added `CHANGELOG.md`.

## v1.0.1
Catalog now supports multi-paragraph texts in Description field (thank you, hemmond).

## v1.0
Initial release.
