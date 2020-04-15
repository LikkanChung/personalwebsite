# LikkanChung.com

This is the source code to [likkanchung.com](https://likkanchung.com).

## Configuration

A number of files can be used to configure the site:

- `_config.yml`
    - site-wide configuration
- `_data/`
    - contains data used to render the site, e.g. the committee
- `_collections/news/`
    - contains markdown files for each newletter post
- `_assets`
    - location for all static assets

Aside from modifying the theme of the site or adding new functionality, no
changes outsides these files should need to be made.

## Scripts

A number of utility scripts exist under `_scripts/`. Their functionality
should be detailed at the top of each one in a comment.

## Development

First, ensure that `gem` is installed.

Install bundle:

    $ gem install bundle

Install required dependencies:

    $ bundle install --path vendor/bundle

Run jekyll server:

    $ bundle exec jekyll serve

The website should now serving at http://127.0.0.1:4000.
