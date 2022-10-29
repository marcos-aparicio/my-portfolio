<?php 
//connecting to github api
$github_url = "https://api.github.com/users/marcos-aparicio/repos";
$req = curl_init($github_url);
curl_setopt($req, CURLOPT_URL,$github_url);
curl_setopt($req, CURLOPT_RETURNTRANSFER,true);
curl_setopt($req, CURLOPT_RETURNTRANSFER,true);

$headers = array(
    "User-Agent: marcos-aparicio",
    "Accept: application/vnd.github+json",
    "Authentication: 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"
);
curl_setopt($req, CURLOPT_HTTPHEADER,$headers);


$response = curl_exec($req);
$my_projects = json_decode($response,true);
var_dump($my_projects);
foreach($my_projects as $project){
    $stmt = $conn->prepare("INSERT INTO github_projects(name,description,language,url) VALUES(:name,:description,:language,:url)");
    $stmt->execute([
        ":name"=>$project['name'],
        ":description"=>$project['description'],
        ":language"=>$project['language'],
        ":url"=>$project['html_url'],
    ]);

}
?>