<?php
/*
 * Constants referenced by @OA in the source codes.
 * Loaded via `openapi --bootstrap` 
 * Values fall back to the defaults declared in config.env.
 */
define('PUBLIC_ENDPOINT', getenv('PUBLIC_ENDPOINT') ?: 'http://127.0.0.1:5252');
define('STAC_ROOT_TITLE', getenv('STAC_ROOT_TITLE') ?: 'Welcome to resto');
define('STAC_ROOT_DESCRIPTION', getenv('STAC_ROOT_DESCRIPTION') ?: 'A metadata catalog and search engine for geospatialized data');
define('RESTO_VERSION', getenv('RESTO_VERSION') ?: 'dev');
