<?php
session_start();
// Include Librari Google Client (API)
include_once 'google-api/Google_Client.php';
include_once 'google-api/contrib/Google_Oauth2Service.php';
$client_id = '475751506310-24frqe0atp8k1thcoglcjbaquogfmtbi.apps.googleusercontent.com'; // Google client ID
$client_secret = 'gASW__w6aybVhx5XIfSTXCxz'; // Google Client Secret
$redirect_url = 'http://localhost/Web%20Lanjut/Praktikum%201/google.php'; // Callback URL
// Call Google API
$gclient = new Google_Client();
$gclient->setApplicationName('Web With OAuth'); // Set dengan Nama Aplikasi Kalian
$gclient->setClientId($client_id); // Set dengan Client ID
$gclient->setClientSecret($client_secret); // Set dengan Client Secret
$gclient->setRedirectUri($redirect_url); // Set URL untuk Redirect setelah berhasil login
$google_oauthv2 = new Google_Oauth2Service($gclient);
