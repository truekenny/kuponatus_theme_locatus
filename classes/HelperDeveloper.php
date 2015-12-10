<?
class HelperDeveloper {
    static function isDevelop() {
        return strpos(strtolower($_SERVER['HTTP_HOST']), 'locatus.loc') !== false;
    }
}
