<?php

class Utils
{
    static function base64_to_jpeg($base64_string, $output_file)
    {
        // $data[ 0 ] == "data:image/png;base64"
        // $data[ 1 ] == <actual base64 string>
        $data = explode(',', $base64_string);

        if (count($data) > 1 && strpos($base64_string, 'base64') > 0) {
            $ifp = fopen($output_file, 'wb');
            fwrite($ifp, base64_decode($data[1]));
            fclose($ifp);
            return $output_file;
        }

        return $base64_string;
    }

    static function array_select_columns($arr, $columns)
    {
        return array_map(function ($a) use ($columns) {
            return array_intersect_key($a, array_flip($columns));
        }, $arr);
    }

    static function array_unselect_columns($arr, $columns)
    {
        return array_map(function ($a) use ($columns) {
            return array_diff_key($a, array_flip($columns));
        }, $arr);
    }

    static function array_sort($array, $on, $order = SORT_ASC)
    {

        $new_array = array();
        $sortable_array = array();

        if (count($array) > 0) {
            foreach ($array as $k => $v) {
                if (is_array($v)) {
                    foreach ($v as $k2 => $v2) {
                        if ($k2 == $on) {
                            $sortable_array[$k] = $v2;
                        }
                    }
                } else {
                    $sortable_array[$k] = $v;
                }
            }

            switch ($order) {
                case SORT_ASC:
                    asort($sortable_array);
                    break;
                case SORT_DESC:
                    arsort($sortable_array);
                    break;
            }

            foreach ($sortable_array as $k => $v) {
                $new_array[$k] = $array[$k];
            }
        }

        return $new_array;
    }

    static function compare_array($a, $b, $column)
    {
        $a_c = array_column($a, $column);
        $b_c = array_column($b, $column);

        $diff = array_diff($a_c, $b_c);

        $data = [];
        foreach ($diff as $key => $item) {
            $data[$key] = $a[$key];
        }

        return $data;
    }

    static function my_array_intersect($a, $b, $column)
    {
        $a_c = array_column($a, $column);
        $b_c = array_column($b, $column);

        $intersect = array_intersect($a_c, $b_c);

        $data = [];
        foreach ($intersect as $key => $item) {
            $data[$key] = $a[$key];
        }

        return $data;
    }

    static function array_make_column_key($array, $column, $remove_column = false)
    {
        $result = [];
        foreach ($array as $key => $value) {
            $result[$value[$column]] = $value;
            if ($remove_column)
                unset($result[$value[$column]][$column]);
        }
        return $result;
    }

    static function array_make_key_value_pair($array, $key_column, $value_column)
    {
        $result = [];
        foreach ($array as $key => $value) {
            $result[$value[$key_column]] = $value[$value_column];
        }
        return $result;
    }

    static function recursiveSearchFiles($folder, $pattern, $flags = 0)
    {
        $dir = new RecursiveDirectoryIterator($folder);
        $ite = new RecursiveIteratorIterator($dir);
        $files = new RegexIterator($ite, $pattern, RegexIterator::GET_MATCH, 0);
        $fileList = [];
        foreach ($files as $file) {
            $fileList = array_merge($fileList, $file);
        }
        return $fileList;
    }

    static function getClassFilename($class)
    {
        return (new ReflectionClass($class))->getFileName();
    }

}