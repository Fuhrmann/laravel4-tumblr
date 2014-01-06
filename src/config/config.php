<?php

return array(

    # You must register your app with Tumblr to get these keys
    # -
    'consumer_key' => '',
    'secret'       => '',

    # 'token' and 'token_secret' are optional, but you will need them if you want to use all of the
    # features of the Tumblr API.

    # Use this to generate your token and token_secret
    # - https://api.tumblr.com/console/calls/user/info

    # Some more information on how the next parts work.
    # - http://stackoverflow.com/questions/7665818/tumblr-api-2-where-is-the-oauth-token-and-oauth-token-secret

    'token'        => '',
    'token_secret' => '',

    "publish_routes" => true,
    'route_prefix' => 'tumblr'

);