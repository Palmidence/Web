//If lang is in english
function date_time($timestamp)
{
 return date('F jS, Y - g:i a', strtotime($timestamp));
}
