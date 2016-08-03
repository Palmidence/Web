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
  
  public static function isValidUsername($string) {
      return is_string($string) and strlen($string) >= 2 and strlen($string) <= 16 and ctype_alnum(str_replace('_', '', $string));
  }

 public static function isValidUuid($string) {
      return is_string(self::minifyUuid($string));
  }  
}
?>
