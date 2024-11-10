<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ctrl+Wear</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
            <div class="container-fluid container">
                <a class="navbar-brand" href="#">Ctrl+Wear</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Produtos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sobre Nós</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contato</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a href="login.php" class="btn btn-primary">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="container">
        <div class="row align-items-center mb-5">
            <div class="col-6">
                <h1>Bem-vindo à Ctrl+Wear!</h1>
                <p style="max-width: 60ch;">Descubra a melhor moda com a Ctrl+Wear. Oferecemos uma ampla variedade de roupas e acessórios para todos os estilos. Explore nossa coleção e encontre o que combina com você!</p>
            </div>
            <div id="carouselExampleIndicators" class="carousel slide mb-4 col-6" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active ratio ratio-16x9">
                        <img src="https://images.unsplash.com/photo-1543087903-1ac2ec7aa8c5?q=80&w=1798&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100 rounded object-fit-cover" alt="Image 1">
                    </div>
                    <div class="carousel-item ratio ratio-16x9">
                        <img src="https://images.unsplash.com/photo-1529374255404-311a2a4f1fd9?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100 rounded object-fit-cover" alt="Image 2">
                    </div>
                    <div class="carousel-item ratio ratio-16x9">
                        <img src="https://images.unsplash.com/photo-1523199455310-87b16c0eed11?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100 rounded object-fit-cover" alt="Image 3">
                    </div>
                    <div class="carousel-item ratio ratio-16x9">
                        <img src="https://images.unsplash.com/photo-1571153041245-5c72320bc914?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100 rounded object-fit-cover" alt="Image 4">
                    </div>
                    <div class="carousel-item ratio ratio-16x9">
                        <img src="https://images.unsplash.com/photo-1617034938931-8c2c522ef33d?q=80&w=1931&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100 rounded object-fit-cover" alt="Image 5">
                    </div>
                    <div class="carousel-item ratio ratio-16x9">
                        <img src="https://images.unsplash.com/photo-1566677914817-56426959ae9c?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100 rounded object-fit-cover" alt="Image 6">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h2>Nossos Produtos</h2>
                <p>Confira nossa coleção exclusiva de roupas e acessórios.</p>
                <a href="" class="btn btn-primary">Ver Produtos</a>
            </div>
            <div class="col-md-6">
                <h2>Sobre Nós</h2>
                <p>Saiba mais sobre a Ctrl+Wear e nossa missão.</p>
                <a href="" class="btn btn-secondary">Saiba Mais</a>
            </div>
        </div>
    </main>
    <footer class="mt-4 text-center">
        <p>&copy; 2023 Ctrl+Wear. Todos os direitos reservados.</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>