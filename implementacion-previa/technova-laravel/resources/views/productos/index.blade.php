<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechNova | Gestión de Productos</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>

        body{
            font-family:'Poppins',sans-serif;
            background:#f4f7fb;
        }

        .hero{
            background:linear-gradient(135deg,#0d6efd,#0a58ca);
            color:white;
            border-radius:15px;
            padding:40px;
            margin-top:30px;
            margin-bottom:30px;
            box-shadow:0px 10px 25px rgba(0,0,0,.15);
        }

        .hero h1{
            font-weight:700;
        }

        .card-info{
            border:none;
            border-radius:15px;
            box-shadow:0px 5px 15px rgba(0,0,0,.10);
            transition:.3s;
        }

        .card-info:hover{
            transform:translateY(-5px);
        }

        .table{
            background:white;
            border-radius:10px;
            overflow:hidden;
        }

        .btn{
            border-radius:10px;
        }

        footer{
            margin-top:50px;
            background:#212529;
            color:white;
            padding:20px;
            text-align:center;
        }

    </style>

</head>

<body>

<div class="container">

    <!-- ENCABEZADO -->

    <div class="hero">

        <div class="row align-items-center">

            <div class="col-md-8">

                <h1>
                    <i class="bi bi-cpu-fill"></i>
                    TechNova
                </h1>

                <p class="lead">
                    Sistema de Gestión de Productos Tecnológicos
                </p>

                <p>
                    Administra de forma rápida y sencilla el inventario de equipos tecnológicos.
                </p>

                <a href="{{ route('productos.create') }}" class="btn btn-light btn-lg">

                    <i class="bi bi-plus-circle"></i>

                    Nuevo Producto

                </a>

            </div>

            <div class="col-md-4 text-center">

                <i class="bi bi-laptop display-1"></i>

            </div>

        </div>

    </div>

    <!-- TARJETAS -->

    <div class="row mb-4">

        <div class="col-md-4">

            <div class="card card-info text-center p-4">

                <h3>

                    <i class="bi bi-box-seam text-primary"></i>

                </h3>

                <h5>Total Productos</h5>

                <h2>{{ $productos->count() }}</h2>

            </div>

        </div>

        <div class="col-md-4">

            <div class="card card-info text-center p-4">

                <h3>

                    <i class="bi bi-currency-dollar text-success"></i>

                </h3>

                <h5>Inventario Activo</h5>

                <h2>{{ $productos->sum('stock') }}</h2>

            </div>

        </div>

        <div class="col-md-4">

            <div class="card card-info text-center p-4">

                <h3>

                    <i class="bi bi-award text-warning"></i>

                </h3>

                <h5>Empresa</h5>

                <h2>TechNova</h2>

            </div>

        </div>

    </div>

    <!-- TABLA -->

    <div class="card shadow">

        <div class="card-header bg-primary text-white">

            <h4 class="mb-0">

                <i class="bi bi-list-ul"></i>

                Listado de Productos

            </h4>

        </div>

        <div class="card-body">

            <table class="table table-hover table-bordered align-middle">

                <thead class="table-dark">

                <tr>

                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Categoría</th>
                    <th>Precio</th>
                    <th>Stock</th>
                    <th width="180">Acciones</th>

                </tr>

                </thead>

                <tbody>

                @forelse($productos as $producto)

                    <tr>

                        <td>{{ $producto->id_productos }}</td>

                        <td>{{ $producto->nombre }}</td>

                        <td>{{ $producto->categoria }}</td>

                        <td>RD$ {{ number_format($producto->precio,2) }}</td>

                        <td>{{ $producto->stock }}</td>

                        <td>

                            <a href="{{ route('productos.edit',$producto->id_productos) }}"
                               class="btn btn-warning btn-sm">

                                <i class="bi bi-pencil-square"></i>

                                Editar

                            </a>

                            <form action="{{ route('productos.destroy',$producto->id_productos) }}"
                                  method="POST"
                                  style="display:inline;">

                                @csrf
                                @method('DELETE')

                                <button class="btn btn-danger btn-sm"
                                        onclick="return confirm('¿Desea eliminar este producto?')">

                                    <i class="bi bi-trash"></i>

                                    Eliminar

                                </button>

                            </form>

                        </td>

                    </tr>

                @empty

                    <tr>

                        <td colspan="6" class="text-center">

                            No existen productos registrados.

                        </td>

                    </tr>

                @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

<footer>

    <h5>TechNova</h5>

    <p class="mb-0">

        Sistema de Gestión de Productos Tecnológicos

    </p>

    <small>

        © {{ date('Y') }} TechNova. Todos los derechos reservados.

    </small>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>



