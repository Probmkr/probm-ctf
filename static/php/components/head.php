<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title><?php echo $home ? SITE_TITLE . " | Welcome!" : $title . " | " . SITE_TITLE; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/public/css/base/root.css">
  <link rel="stylesheet" href="/public/css/base/container.css">
  <link rel="stylesheet" href="/public/css/base/main.css">
  <link rel="stylesheet" href="/public/css/base/header.css">
  <link rel="stylesheet" href="/public/css/base/footer.css">
  <link rel="stylesheet" href="/public/css/base/form.css">
  <link rel="stylesheet" href="./style.css">
  <link rel="icon" href="/public/img/favicon.ico">
  <?php echo $customHead; ?>
</head>


<body>
  <div class="container">