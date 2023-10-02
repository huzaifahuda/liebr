<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Liebr</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />

  <link rel="stylesheet" href="{{asset('panel/css/custom.css')}}">
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-red">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="{{asset('panel/img/logo.png')}}" alt="Logo" class="img-responsive w-50" />
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav d-flex w-100">
          <li class="nav-item px-1 mx-3 li-navbar">
            <a class="nav-link text-white active fw-semibold" aria-current="page" href="{{url('/')}}">Dashboard</a>
          </li>
          <li class="nav-item px-1 mx-3 li-navbar">
            <a class="nav-link text-white fw-semibold" href="#">Planning</a>
          </li>
          <li class="nav-item px-1 mx-3 li-navbar">
            <a class="nav-link text-white fw-semibold" href="{{url('/projects')}}">Projects</a>
          </li>
          <li class="nav-item px-1 mx-3 li-navbar">
            <a class="nav-link text-white fw-semibold" href="{{url('/checkout')}}">Checkout</a>
          </li>
          <li class="nav-item px-1 mx-3 li-navbar">
            <a class="nav-link text-white fw-semibold" href="{{route('flexpools.index')}}">Flex Pools</a>
          </li>
        </ul>
      </div>
      <div style="width: 200px;">
        <ul class="navbar-nav w-100">
          <li class="nav-item dropdown w-100">
            <a class="nav-link dropdown-toggle text-center text-white fw-semibold" href="#" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              {{-- <img src="{{asset('panel/img/user-regular.svg')}}" alt="user" srcset=""> --}}
              Liebr
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Add shift</a></li>
              <li><a class="dropdown-item" href="#">Add job</a></li>

              <div class="dropdown-divider"></div>
              <p style="padding: 4px 16px 0; margin: 0; font-size: 12px;">HELP</p>
              <li><a class="dropdown-item" href="#">Platform guide</a></li>
              <li><a class="dropdown-item" href="#">Help</a></li>
              <li><a class="dropdown-item" href="#">Send feedback</a></li>

              <div class="dropdown-divider"></div>
              <p style="padding: 4px 16px 0; margin: 0; font-size: 12px;">OTHERS</p>
              <li><a class="dropdown-item" href="#">Profile</a></li>
              <li><a class="dropdown-item" href="#">Companies</a></li>
              <li><a class="dropdown-item" href="#">Financial overview</a></li>
              <li><a class="dropdown-item" href="#">Statistics</a></li>
              <li><a class="dropdown-item" href="#">Blocked FreeFlexers</a></li>
              <li><a class="dropdown-item" href="#">IB47 declaration</a></li>
              <li><a class="dropdown-item" href="#">Export shift overview</a></li>
              <li><a class="dropdown-item" href="#">Notification</a></li>
              <li><a class="dropdown-item" href="#">Signout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>