<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechNova | Nuevo Producto</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>

        body{
            background:#f4f7fb;
            font-family:'Poppins',sans-serif;
        }

        .header{
            background:linear-gradient(135deg,#0d6efd,#0a58ca);
            color:white;
            padding:30px;
            border-radius:15px;
            margin-top:30px;
            margin-bottom:30px;
            box-shadow:0 10px 25px rgba(0,0,0,.15);
        }

        .card{
            border:none;
            border-radius:15px;
            box-shadow:0 8px 20px rgba(0,0,0,.08);
        }

        .btn{
            border-radius:10px;
        }

        footer{
            margin-top:40px;
            background:#212529;
            color:white;
            text-align:center;
            padding:20px;
        }

    </style>

</head>

<body>

<div class="container">

    <div class="header">

        <h1>
            <i class="bi bi-cpu-fill"></i>
            TechNova
        </h1>

        <p class="lead mb-0">
            Registrar Nuevo Producto
        </p>

    </div>

    <div class="card">

        <div class="card-header bg-primary text-white">

            <h4 class="mb-0">
                <i class="bi bi-plus-circle"></i>
                Nuevo Producto
            </h4>

        </div>

        <div class="card-body">

            @if ($errors->any())

            <div class="alert alert-danger">

                <strong>Se encontraron errores:</strong>

                <ul class="mb-0">

                    @foreach ($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach

                </ul>

            </div>

            @endif

            <form action="{{ route('productos.store') }}" method="POST">

                @csrf

                <div class="mb-3">

                    <label class="form-label">Nombre del Producto</label>

                    <input
                        type="text"
                        name="nombre"
                        class="form-control"
                        placeholder="Ej. Laptop HP"
                        required>

                </div>

                <div class="mb-3">

                    <label class="form-label">Descripción</label>

                    <textarea
                        name="descripcion"
                        rows="4"
                        class="form-control"
                        placeholder="Descripción del producto"
                        required></textarea>

                </div>

                <div class="mb-3">

                    <label class="form-label">Categoría</label>

                    <input
                        type="text"
                        name="categoria"
                        class="form-control"
                        placeholder="Ej. Laptops"
                        required>

                </div>

                <div class="row">

                    <div class="col-md-6">

                        <div class="mb-3">

                            <label class="form-label">Precio (RD$)</label>

                            <input
                                type="number"
                                step="0.01"
                                name="precio"
                                class="form-control"
                                required>

                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="mb-3">

                            <label class="form-label">Stock</label>

                            <input
                                type="number"
                                name="stock"
                                class="form-control"
                                required>

                        </div>

                    </div>

                </div>

                <div class="text-center">

                    <button class="btn btn-success btn-lg">

                        <i class="bi bi-check-circle"></i>

                        Guardar Producto

                    </button>

                    <a href="{{ route('productos.index') }}" class="btn btn-secondary btn-lg">

                        <i class="bi bi-arrow-left-circle"></i>

                        Volver

                    </a>

                </div>

            </form>

        </div>

    </div>

</div>

<footer>

    <h5>TechNova</h5>

    <small>

        Sistema de Gestión de Productos Tecnológicos

    </small>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
