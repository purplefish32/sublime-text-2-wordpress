##Sublime Text WordPress Package

Sublime Text WordPress Package is a collection of WordPress snippets and autocompletions for Sublime Text

### Features

Autocomplete for:

    WP version : 4.2.2

    Functions    : 2506
    Filters      : 1105
    Actions      : 533
    Classes      : 245
    Constants    : 502
    Capabilities : WordPress Core Capabilities


### Notes

Deprecated functions have been removed

The first "tab" deletes all parameters instead of having to tab through each one:

- First Tab-->Select all parameters
- Each Tab Thereafter-->Selects each individual parameter or block

Actions or Filter add two version of the completion only this not is dynamic name

Include plugin Akismet (v3.1.2), Default themes for completions ( functions, actions, filters, constants and classes )

Defaults Themes:

	classic        : v1.6
	default        : v1.7.2
	twentyten      : v1.9
	twentyeleven   : v2.1
	twentytwelve   : v1.7
	twentythirteen : v1.5
	twentyfourteen : v1.4
	twentyfifteen  : v1.2

### Snippets

Some updated snippets use the same name as the function, the autocomplete will show an "ALL Options" selection. For example to
register a custom post type you would write `register_post...`. Please review the snippets `<tabTrigger>` to see how to call the rest.

~~
### Special thanks

Original TextMate author : [Gipetto](https://github.com/Gipetto/wordpress.tmbundle)

Original scraper : [@ericandrewlewis](https://github.com/purplefish32/sublime-text-2-wordpress-scraper )

Latest scraper :[@wycks](https://github.com/wycks/SublimeText-WordPress-Autocomplete)
~~
### Tip
~~
Sublime won't autocomplete PHP files when there is no closing `?>` tags , so in "Preferences-->Settings-User" add this snippet:

    "auto_complete_selector": "source, text",
~~
Tested on Sublime Text v3092

###  Install instructions

Just install via package control (WordPress) or clone into your sublime-text package directory for original package

Temporarily you can install this package manually add this repository in Package Control until the official package is upgraded.
Search sublime-text-wordpress and install, if is available Oficial Package WordPress, remove or disabled for clean completions
