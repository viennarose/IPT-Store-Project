<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stores Project</title>
    <link rel="stylesheet" href="{{asset ('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{asset ('css/style.css') }}">
    <script> src="{{asset('js/bootstrap.js')}}"</script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-info px-5">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{url ('/')}}">Stores Database</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="d-flex" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="<?= url('/')?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= url('/stores')?>">Stores</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= url('/users')?>">Users</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</nav>
<div class="container">
    @yield('content')
</div>
</body>
</html>