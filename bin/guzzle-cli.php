#!/usr/bin/env php
<?php
/**
 * Created by PhpStorm.
 * User: suse
 * Date: 2019-02-22
 * Time: 10:58
 */

use GuzzleCli\Cli;

define('ROOT_PATH', dirname(__DIR__));
define('EXEC_PATH', getcwd());
require ROOT_PATH . '/vendor/autoload.php';

//选项
$options = getopt("r::", [
    // 读取http请求文件
    'read',
]);

if (isset($options['r'])) {
    $filename       = $options['r'];
    $file_full_path = sprintf('%s/%s', EXEC_PATH, $filename);
    (new Cli($file_full_path))->send();
} else {
    GuzzleCli\print_guzzle_cli_usage();
}