<?php
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\MultipartStream;

require 'vendor/autoload.php';

$key = 'Bearer 8c5bbd20b3600ce91f5fadda3a668cf267f3562c76daa21d5bae0846eefaf0a2';

/** create new project */
/*$project_data = [
'name' => '3NDO',
'adminEmail' => 'abdelazem1581996@gmail.com',
'anonymousCanUpload' => false,
'anonymousCanDownload ' => false
];
$json_data = json_encode($project_data);
$httpClient = new Client([
    'headers' => ['Content-Type' =>'application/json','Authorization'=> $key],
    'body' => $json_data
]);
$sendRequestAndGetResponse = $httpClient->post("https://api.wistia.com/v1/projects.json");
$finalResponse = json_decode($sendRequestAndGetResponse->getBody(), true);
dd($finalResponse);*/

/** list all projects */
/*$httpClient = new Client([
    'headers' => ['Content-Type' =>'application/json','Authorization'=> $key],
]);
$sendRequestAndGetResponse = $httpClient->get("https://api.wistia.com/v1/projects.json");
$finalResponse = json_decode($sendRequestAndGetResponse->getBody(), true);
dd($finalResponse);*/

/** get details & media about project by hashedId (74io6qlc8d) */
/*$httpClient = new Client([
    'headers' => ['Content-Type' =>'application/json','Authorization'=> $key],
]);
$sendRequestAndGetResponse = $httpClient->get("https://api.wistia.com/v1/projects/74io6qlc8d.json");
$finalResponse = json_decode($sendRequestAndGetResponse->getBody(), true);
dd($finalResponse);*/

/** update existing project by hashedId (20nt3tphb6) */
/*$project_data_updated = [
    'name' => 'PHP DEVELOPMENT',
    'adminEmail' => 'abdallakaramdev@gmail.com',
    'anonymousCanUpload' => true,
    'anonymousCanDownload ' => true
];
$project_data_updated_json = json_encode($project_data_updated);
$httpClient = new Client([
    'headers' => ['Content-Type' =>'application/json','Authorization'=> $key],
    'body'    => $project_data_updated_json
]);
$sendRequestAndGetResponse = $httpClient->put("https://api.wistia.com/v1/projects/20nt3tphb6.json");
$finalResponse = json_decode($sendRequestAndGetResponse->getBody(), true);
dd($finalResponse);*/

/** delete existing project by hashedId (20nt3tphb6) */
/*$httpClient = new Client([
    'headers' => ['Content-Type' =>'application/json','Authorization'=> $key],
]);
try {
    $sendRequestAndGetResponse = $httpClient->delete("https://api.wistia.com/v1/projects/20nt3tphb6.json");
    $finalResponse = json_decode($sendRequestAndGetResponse->getBody(), true);
    dd($finalResponse);
}catch (\GuzzleHttp\Exception\RequestException $e) {
    dd($e->getMessage());
}*/

/** get list medias */
/*$httpClient = new Client([
    'headers' => ['Content-Type' =>'application/json','Authorization'=> $key],
]);
$sendRequestAndGetResponse = $httpClient->get("https://api.wistia.com/v1/medias.json");
$finalResponse = json_decode($sendRequestAndGetResponse->getBody(), true);
dd($finalResponse);
$finalResponse[0]['assets'][0]['url'];*/

/** get single media */
/*$httpClient = new Client([
    'headers' => ['Content-Type' =>'application/json','Authorization'=> $key],
]);
$sendRequestAndGetResponse = $httpClient->get("https://api.wistia.com/v1/medias/tcg2euz6to.json");
$finalResponse = json_decode($sendRequestAndGetResponse->getBody(), true);
echo '<iframe width="420" height="315" src="'.$finalResponse['assets'][0]['url'].'"></iframe>';
dd($finalResponse);*/

/** update single media */
/*$media_data_updated = [
    'name' => 'updated media name',
    'description' => 'updated media description'
];
$media_data_updated_json = json_encode($media_data_updated);
$httpClient = new Client([
    'headers' => ['Content-Type' =>'application/json','Authorization'=> $key],
    'body'    => $media_data_updated_json
]);
$sendRequestAndGetResponse = $httpClient->put("https://api.wistia.com/v1/medias/tcg2euz6to.json");
$finalResponse = json_decode($sendRequestAndGetResponse->getBody(), true);
dd($finalResponse);*/

/** delete single media */
/*$httpClient = new Client([
    'headers' => ['Content-Type' =>'application/json','Authorization'=> $key],
]);
$sendRequestAndGetResponse = $httpClient->delete("https://api.wistia.com/v1/medias/tcg2euz6to.json");
$finalResponse = json_decode($sendRequestAndGetResponse->getBody(), true);
dd($finalResponse);*/

/** get media status */
/*$httpClient = new Client([
    'headers' => ['Content-Type' =>'application/json','Authorization'=> $key],
]);
$sendRequestAndGetResponse = $httpClient->get("https://api.wistia.com/v1/medias/gd2ofy9v7j/stats.json");
$finalResponse = json_decode($sendRequestAndGetResponse->getBody(), true);
dd($finalResponse);*/

/** upload file media by url only(image) to specific project by hashed id project */
/*$request = [
    'url' => 'https://www.youtube.com/watch?v=jhFDyDgMVUI',
    'api_password' => '8c5bbd20b3600ce91f5fadda3a668cf267f3562c76daa21d5bae0846eefaf0a2',
    'project_id' => '74io6qlc8d',
    'name' => 'new new name',
    'description' => 'new new media description'
];
$httpClient = new Client(['headers' => ['Content-Type' =>'application/x-www-form-urlencoded']]);
try {
    $sendRequestAndGetResponse = $httpClient->post("https://upload.wistia.com",[
        'form_params' => $request
    ]);
    $finalResponse = json_decode($sendRequestAndGetResponse->getBody(), true);
    dd($finalResponse);
}catch (Exception $exception) {
    dd($exception->getMessage());
}*/



/** upload videos and images to pai (end-point) */
$endPointUrl = "https://upload.wistia.com";
$fileData = curl_file_create('video1583207737.mp4','video/mp4','video');
$objectData =
    [
    'file' => $fileData,
    'api_password' => '8c5bbd20b3600ce91f5fadda3a668cf267f3562c76daa21d5bae0846eefaf0a2',
    'project_id' => '74io6qlc8d',
    'name' => 'video',
    'description' => 'new new media description'
];

$curlConnection = curl_init();
curl_setopt($curlConnection, CURLOPT_URL,$endPointUrl);
curl_setopt($curlConnection, CURLOPT_HTTPHEADER,array('Content-Type: multipart/form-data'));
curl_setopt($curlConnection, CURLOPT_RETURNTRANSFER,true);
curl_setopt($curlConnection, CURLOPT_POST,true);
curl_setopt($curlConnection, CURLOPT_POSTFIELDS,$objectData);
$response = curl_exec($curlConnection);
dd($response);
curl_close($curlConnection);


