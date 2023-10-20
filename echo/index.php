<?php 
if(isset($_GET['delay']))
{
   usleep ($_GET['delay']*1000);
}
if(isset($_GET['size']))
{
   $size = $_GET['size'];
   $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
   $charactersLength = strlen($characters);
   $data = '';
   for ($i = 0; $i < $size; $i++) 
   {
      $data .= $characters[rand(0, $charactersLength - 1)];
   }
}
else
   $data=0;


$headers =  "[".json_encode(array_change_key_case(getallheaders(), CASE_LOWER))."]";

header("HTTP/1.1 200 OK");
header("content-type: application/json");

echo '{
   "Project": "My Echo Project",
   "Project": "https://github.com/skenderidis/docker-images/echo",
   "Server Address": "'.$_SERVER['SERVER_ADDR'].'",
   "Server Port": "'.$_SERVER['SERVER_PORT'].'",
   "Request Method": "'.$_SERVER['REQUEST_METHOD'].'",
   "Request URI": "'.$_SERVER['REQUEST_URI'].'",
   "Query String": "'.$_SERVER['QUERY_STRING'].'",
   "Headers": '.$headers.',
   "Remote Address": "'.$_SERVER['REMOTE_ADDR'].'",
   "Remote Port": "'.$_SERVER['REMOTE_PORT'].'",
   "Timestamp": "'.$_SERVER['REQUEST_TIME'].'",
   "Data": "'.$data.'"
}';


?>