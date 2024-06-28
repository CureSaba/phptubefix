<?php
$default_range_size = 9437184;  // 9MB
function json2header($ary)
{
    $result = [];
    foreach ($ary as $key => $value) {
        $header = $key . ": " . $value;
        array_push($result, $header);
    }
    return $result;
}
function _execute_request(
    $url,
    $method = 'POST',
    $headers = '{}',
    $data = Null
) {
    $base_headers = '{"User-Agent": "Mozilla/5.0", "accept-language": "en-US,en"}';
    $base_headers = array_merge(json_decode($base_headers,true), json_decode($headers,true));
    $base_headers = json2header($base_headers);
    /*
    if data and not isinstance(data, bytes): // encode data for request
            data = bytes(json.dumps(data), encoding="utf-8")
    */
    if (substr(mb_strtolower($url, 'UTF-8'), 0, 4) == "http") {
        $request = curl_init();
        curl_setopt($request, CURLOPT_RETURNTRANSFER, True);
        curl_setopt($request, CURLOPT_URL, $url);
        curl_setopt($request, CURLOPT_CUSTOMREQUEST, mb_strtoupper($method));
        curl_setopt($request, CURLOPT_HTTPHEADER, $base_headers);
        curl_setopt($request, CURLOPT_POSTFIELDS, $data);
        $result = curl_exec($request);
        return $result;
    } else {
        echo "Invalid URL";
    }
}