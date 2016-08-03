<?
class API{
  public static function getStatus() {
    $json = self::fetchJson('https://status.mojang.com/check');
        if (is_array($json)) {
            $status = array();
            foreach ($json as $array) {
                if (!empty($array)) {
                    list($key, $value) = each($array);
                    $status[$key] = $value;
                }
            }
            return $status;
        }
        return false;
  }
}
?>
