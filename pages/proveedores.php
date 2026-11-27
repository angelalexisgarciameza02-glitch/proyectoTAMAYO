<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Proveedores - Dulce Nube</title>

<link rel="stylesheet" href="../css/proveedores.css">

</head>
<body>

<div class="layout">

    <aside class="sidebar">

        <h2>dulce nube</h2>

        <ul>
            <li>Resumen</li>
            <li>Ventas</li>
            <li>Inventario</li>
            <li class="activo">Proveedores</li>
            <li>Reportes</li>
            <li>Clientes</li>
        </ul>

        <div class="footer-menu">
            <small>Centro de ayuda</small>
            <p>Sucursal Centro</p>
        </div>

    </aside>

    <main class="main">

        <div class="topbar">

            <h3>Proveedores · Dulce Nube</h3>

            <button class="btn-primary">
                Añadir proveedor
            </button>

        </div>

        <div class="contenido">

            <h1>Juntos, endulzamos más.</h1>

            <p>
                Gestiona tus proveedores y mantén cada entrega bajo control.
            </p>

            <div class="cards">

                <div class="card">

                    <span>Proveedores registrados</span>

                    <h2>6</h2>

                    <small>6 con productos en catálogo</small>

                </div>

                <div class="card">

                    <span>Entregas programadas</span>

                    <h2>4</h2>

                    <small>Dentro de los próximos días</small>

                </div>

                <div class="card">

                    <span>Reposiciones prioritarias</span>

                    <h2>3</h2>

                    <small>Stock por reabastecer</small>

                </div>

            </div>

            <div class="tabla-proveedores">

                <div class="tabla-header">

                    <input
                        type="text"
                        placeholder="Buscar proveedor..."
                    >

                    <select>
                        <option>Todas las categorías</option>
                    </select>

                    <select>
                        <option>Todas las entregas</option>
                    </select>

                </div>

                <table>

                    <thead>

                        <tr>
                            <th>Proveedor</th>
                            <th>Contacto</th>
                            <th>Suministro</th>
                            <th>Próxima entrega</th>
                            <th>Estado</th>
                        </tr>

                    </thead>

                    <tbody>

                        <tr>
                            <td>Dulces del Valle</td>
                            <td>Laura Mendoza</td>
                            <td>Gomitas y caramelos</td>
                            <td>23 Oct 2026</td>
                            <td><span class="estado bueno">Al corriente</span></td>
                        </tr>

                        <tr>
                            <td>Chocolates Casa Real</td>
                            <td>Roberto Sánchez</td>
                            <td>Chocolates</td>
                            <td>21 Oct 2026</td>
                            <td><span class="estado alerta">Re confirmar</span></td>
                        </tr>

                        <tr>
                            <td>Paletas Arcoíris</td>
                            <td>Elena Ruiz</td>
                            <td>Paletas</td>
                            <td>19 Oct 2026</td>
                            <td><span class="estado bueno">Programada</span></td>
                        </tr>

                        <tr>
                            <td>Nubes y Sabores</td>
                            <td>Miguel Castro</td>
                            <td>Malvaviscos</td>
                            <td>25 Oct 2026</td>
                            <td><span class="estado bueno">Programada</span></td>
                        </tr>

                        <tr>
                            <td>Confitería La Estrella</td>
                            <td>Patricia Vega</td>
                            <td>Dulces surtidos</td>
                            <td>---</td>
                            <td><span class="estado pendiente">Sin pedido</span></td>
                        </tr>

                    </tbody>

                </table>

            </div>

            <div class="alerta">

                Hay 3 productos que necesitan reposición.

            </div>

        </div>

    </main>

</div>

</body>
</html>