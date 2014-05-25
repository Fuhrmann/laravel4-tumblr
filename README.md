## Laravel 4.1 Package for the Tumblr PHP SDK

Disclaimer: I'm new to this, and there may be problems.

## Installation
 1. Add the line to composer
 2. run `composer update`
 3. Add `\Unm\Laravel\Tumblr\TumblrServiceProvider` to your app.php file
 4. Run `php artisan config:publish unm/laravel4-tumblr`

## Configuration
Edit `app/config/packages/unm/laravel4-tumblr/config.php`. Update with your consumer key and secret. Optionally
    generate your access tokens.

## Generating Tokens
 1. Create your app with tumblr.
 2. Generate your consumer key and secrets
 3. [Optional] - Generate your token and token_secret to get full access to the api for your account.

## Debugging
Use the Tumblr API console when in doubt: https://api.tumblr.com/console//calls/user/info

