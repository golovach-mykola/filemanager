<?php

namespace App\Engine;


class File
{
    static private $repository = '/var/www/html/files/';

    public static function put(array $file): bool {
        if (!is_dir(self::$repository)) {
            mkdir(self::$repository);
        }
        return move_uploaded_file($file['tmp_name'], self::$repository.$file['name']);

    }

    public static function get(string $filename) {
        return file_get_contents(self::$repository.$filename);
    }

    public static function fileList(): array {

        return array_values(array_diff(scandir(self::$repository), array('..', '.')));
    }

    public static function delete(string $filename): bool {
        return unlink(self::$repository.$filename);
    }
}