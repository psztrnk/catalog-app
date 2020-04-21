# Catalog

Catalog is a PHP + MySql application to manage your home library. If you don't care about who hosts your stuff, choose LibraryThing. If you want complex, almost library-like stuff, go for OpenBiblio, Koha or Evergreen. But if you want to own your book data and you would keep it simple without all the functionalities too much for an average user, Catalog is for you.

Read on, or see [the Catalog Wiki](https://github.com/psztrnk/catalog/wiki) for more information.

## Features

With Catalog, you can
- add new books with
	- title,
	- author(s),
	- ISBN number,
	- publisher,
	- year of publishing,
	- genre(s),
	- cover image,
	- description and
	- location;
- edit and delete existing books;
- manage books lent based on
	- who did you lend it to and
	- when did you lend it;
- browse your collection based on
	- authors,
	- publishers,
	- years of publishing,
	- genres and 
	- lent status;
- manage your ebooks with ebook file upload;
- search your collection based on all fields (simple search) or only certain fields (smart search);
- protect your data from unwanted eyes with built-in authentication;
- Hungarian users are also able to import Hungarian books' data from the Moly website (Moly API Key required).

## Requirements

- PHP 7.0+ with `mod_rewrite` enabled
- MySql 5.6+

## Installation

1. Download and unpack the `.zip` or clone this repository.
2. Rename the top level folder to your liking (eg. `catalog`).
3. Upload the folder to the desired location on your web server.
	1. Make sure that your `ebooks` folder's permissions are set to `755`.
4. Visit the folder in your browser (eg. `http://example.com/catalog`).
5. Follow the on-screen instructions.
	1. You don't need to create the database before intallation. Catalog will create it for you with all the necessary tables, if the user you specified has the sufficient previleges.
	2. If you get a PDO exception stating that your user is not privileged to create the database, head over to your PHPMyAdmin or CPanel and create the database manually. Then enter the name of the database to the setup.
	3. Please bear in mind, that the database name may only contain fhe following characters: `0-9`, `a-z`, `A-Z`, `$`, `_`.
6. Click the button and you're done. Have fun.
7. (See also: [catalog_load-data](https://github.com/psztrnk/catalog_load-data))

## Roadmap

If developed further, the below features will be implemented to future versions of Catalog.
- [x] Ebook management. Implementing a `doctype`, possibly an upload functionality for ebook files. Would be nice to have a remote backup of my ebooks along with their data (Catalog already has blank columns in the database for this).
- [ ] Import for books in English (or other languages). While Moly import handles Hungarian books, I'm still to find a proper source for books in other languages (WorldCat? Goodreads? Google Books? Other?). If you have suggestions, don't keep it for yourself.
- [ ] Multi-user. Currently I don't really see the point in a multi-user application, but who knows. Catalog already has an unused `owner` column in the database.

## Third-party code

- Catalog is build upon the excellent [Kirby Toolkit](https://github.com/getkirby/toolkit) written by Bastian Allgeier and available under the MIT License.
- Catalog uses [jQuery](https://github.com/jquery/jquery) created by the JS Foundation and available under the MIT License.
- Catalog uses [jQuery.fn.sortElements](https://github.com/padolsey-archive/jquery.fn/tree/master/sortElements) by James Padolsey, available under the Public Domain (unlicense).
- Catalog uses [Font Awesome](http://fontawesome.io/) icons cerated by Dave Gandy and available under the SIL Open Font License/MIT License.
- Catalog uses [php-fileupload-class](https://github.com/lodev09/php-fileupload-class) written by Jovanni Lo and available under the MIT License.

For licensing information of the above third-party components please see `THIRDPARTYREADME.md`.

## License

Catalog is released under the MIT License. Full text of the license can be found in the `LICENSE` file.
