<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Muhamad Nauval Azhar">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="This is a login page template based on Bootstrap 5">
    <title>Bootstrap 5 Login Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&family=Poppins&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>

<body>


<style>
body{
  background-image:url("img/214603.webp");
  width: 100%;
    height: 100%;
    font-family: 'Poppins', sans-serif;
    background-repeat: no-repeat;
}
.hola{
    justify-content: center;
    align-items: center;
    display: flex;
    margin-top: 16px;
    color: #1E90FF;
    font-weight: bold;
   
    

}

</style>
<br>
<h1 class="hola">Veterinaria Marvin</h1>


    <section class="h-100">
        <div class="container h-100">
            <div class="row justify-content-sm-center h-100">
            <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
            <div class="text-center my-5">
             <img src="img/perritoblanco.png" alt="logo" width="200">
                    </div>
            <div class="card shadow-lg">
            <div class="card-body p-5">
                
             <h1 class="fs-4 card-title fw-bold mb-4">Login <i class="bi bi-capsule-pill"></i></h1>
             
             
            <form action="principal.php" method="POST" class="needs-validation" novalidate="" autocomplete="off">
            <div class="mb-3">
            <label class="mb-2 text-muted" for="email">Email</label>
            <i class="bi bi-person-check"></i>
         <input id="email" type="email" class="form-control" name="email" value="" required
                                        autofocus>
                                        
             <div class="invalid-feedback">Email is invalid
           </div>
       </div>

         <div class="mb-3">
        <div class="mb-2 w-100">
       <label class="text-muted" for="password">Password</label>
       <i class="bi bi-bag-dash"></i>
        
        </div>
         <input id="password" type="password" class="form-control" name="password" required>
        <div class="invalid-feedback">Password is required
   </div>
                                </div>

        <div class="d-flex align-items-center">
        <div class="form-check">
         <input type="checkbox" name="remember" id="remember" class="form-check-input">
         <label for="remember" class="form-check-label">Remember Me</label>
          </div>
           <button type="submit" class="btn btn-primary ms-auto">  Login</button>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer py-3 border-0">
                            <div class="text-center">
                                
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-5 text-muted"> <strong> Copyright &copy; Marvin Galeano &mdash; Univo </strong>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    <script src="js/login.js"></script>
</body>

</html>