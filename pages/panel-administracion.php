<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Panel de administración</title>

<link rel="stylesheet" href="../css/global.css">

</head>
<body>

<div class="container">

    <aside class="sidebar">

        <div>

            <div class="logo">
                <h2>dulce nube</h2>
                <span>UN MUNDO DE DULCES</span>
            </div>

            <div class="menu">

                <ul>

                    <li class="active">Resumen</li>
                    <li>Ventas</li>
                    <li>Inventario</li>
                    <li>Proveedores</li>
                    <li>Reportes</li>
                    <li>Clientes</li>

                </ul>

            </div>

        </div>

        <div class="footer-branch">

            <strong>Sucursal Centro</strong>
            <br>
            <small>Tu rincón más dulce</small>

        </div>

    </aside>

    <main class="main">

        <div class="topbar">

            <h3>Resumen · Dulce Nube</h3>

            <div>
                María García
            </div>

        </div>

        <div class="content">

            <div style="display:flex;justify-content:space-between;align-items:center;">

                <div>

                    <h1>¡Buenos días, María!</h1>

                    <p>
                        Aquí tienes el resumen de tu tienda de hoy.
                    </p>

                </div>

                <button class="btn-pink">
                    + Nueva venta
                </button>

            </div>

            <div class="cards">

                <div class="card">
                    <small>Ventas del día</small>
                    <div class="card-value">—</div>
                </div>

                <div class="card">
                    <small>Ingresos del día</small>
                    <div class="card-value">—</div>
                </div>

                <div class="card">
                    <small>Productos con stock bajo</small>
                    <div class="card-value">—</div>
                </div>

                <div class="card">
                    <small>Clientes atendidos</small>
                    <div class="card-value">—</div>
                </div>

            </div>

            <div class="grid-main">

                <div class="panel">

                    <div class="panel-header">
                        Ventas recientes
                    </div>

                    <table>

                        <thead>

                            <tr>
                                <th>Producto</th>
                                <th>Cant.</th>
                                <th>Total</th>
                                <th>Estado</th>
                            </tr>

                        </thead>

                        <tbody>

                            <tr>
                                <td>Gomitas ositos</td>
                                <td>3 uds</td>
                                <td>$135</td>
                                <td>
                                    <span class="status success">
                                        Completada
                                    </span>
                                </td>
                            </tr>

                            <tr>
                                <td>Paleta arcoíris</td>
                                <td>5 uds</td>
                                <td>$160</td>
                                <td>
                                    <span class="status success">
                                        Completada
                                    </span>
                                </td>
                            </tr>

                            <tr>
                                <td>Trufas de chocolate</td>
                                <td>2 uds</td>
                                <td>$76</td>
                                <td>
                                    <span class="status warning">
                                        Pendiente
                                    </span>
                                </td>
                            </tr>

                        </tbody>

                    </table>

                </div>

                <div>

                    <div class="panel quick">

                        <h3>Accesos rápidos</h3>

                        <div class="quick-item">
                            Ver inventario
                        </div>

                        <div class="quick-item">
                            Proveedores
                        </div>

                        <div class="quick-item">
                            Reportes
                        </div>

                    </div>

                    <div class="panel quick" style="margin-top:15px;">

                        <h3>Alertas de stock</h3>

                        <br>

                        <div class="stock-item">
                            Trufas de chocolate
                        </div>

                        <div class="stock-item">
                            Chocolate con almendras
                        </div>

                        <div class="stock-item">
                            Gomitas agridulces
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </main>

</div>

</body>
</html>