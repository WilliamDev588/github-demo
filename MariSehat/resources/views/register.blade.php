<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <link rel="stylesheet" href="/css/temp.css" />

    <title>Hello, world!</title>
</head>
<body style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark shadow-sm navbar fixed-top" style="background-color: #a748aa">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="" alt="JH Furniture" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link @yield('homeNav')" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield('viewNav')" href="/view">View</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield('loginNav')" href="/login">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield('registNav')" href="/regist">@yield('lastNav')</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Akhir Navbar -->
<div class="content">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit veniam commodi maxime cum excepturi in ipsam voluptate. Repellendus ut eos incidunt in, doloremque officia error accusamus pariatur voluptas natus unde amet aspernatur
    consectetur aliquam, impedit asperiores voluptates dignissimos est dolorum odit ipsa cum quam exercitationem? Tempore velit voluptatibus unde eveniet?
</div>
<div class="content mt-5 vh-100">
<!-- @yield('content') -->
    <div class="container">
        <h2 class="row justify-content-center m-3" style="color: #a748aa">Login</h2>
        <h4>Register</h4>
        <form action="/register" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <table >
                <tr>
                    <td>username</td>
                    <td><input type="text" name="username" id=""></td>
                </tr>
                <tr>
                    <td>email</td>
                    <td><input type="email" name="email" id=""></td>
                </tr>
                <tr>
                    <td>password</td>
                    <td><input type="password" name="password" id="" placeholder="Input Password"></td>
                </tr>
                <tr>
                    <td colspan="2"><button type="submit">Regist</button></td>
                </tr>
            </table>
        </form>
    </div>

    <!-- Footer -->
    <footer class="text-center" style="color: white; background-color: #a748aa">
        <p>Copyright &copy; Raymond R 20-2</p>
    </footer>
    <!-- Akhir Footer -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
