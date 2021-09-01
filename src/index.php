<?php
//header('Content-Type: application/json');
require_once '../vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('/');
//$twig = new \Twig\Environment($loader, ['cache' => './cache',]);
$twig = new \Twig\Environment($loader);

$cURLConnection = curl_init('https://maqe.github.io/json/authors.json');
curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

$apiAuthorsResponse = curl_exec($cURLConnection);
curl_close($cURLConnection);

$cURLConnection = curl_init('https://maqe.github.io/json/posts.json');
curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

$apiPostResponse = curl_exec($cURLConnection);
curl_close($cURLConnection);

$authors = json_decode($apiAuthorsResponse);
$posts = json_decode($apiPostResponse);

foreach($posts as $post){
    $auth = array_values(array_filter($authors,function($author) use ($post){
        return $author->id == $post->author_id;
    }));

    if(count($auth)){
        $post->author_name = $auth[0]->name;
        $post->author_avatar = $auth[0]->avatar_url;
        $post->author_role = $auth[0]->role;
        $post->author_place = $auth[0]->place;
    }

    $date =  new DateTime($post->created_at);
    $post->created_at = $date->format('l, F j, Y H:i');

}

echo $twig->render('index.html.twig', ['posts' => $posts]);
