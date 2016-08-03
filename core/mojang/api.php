<?
function profile($username)
{
  $json = file_get_contents('https://api.mojang.com/users/profiles/minecraft/' . $username);
  if(!empty($json)){
    $data = json_decode($json, true);
    if(is_array($data) and !empty($data)){
      return $data;
    }
  }
}

function fix_uuid($uuid)
{
  if(is_string($uuid)){
    $minified = str_replace('-', '', $uuid);
    if(strlen($minified) === 32){
      return $minified;
    }
  }
}
?>
