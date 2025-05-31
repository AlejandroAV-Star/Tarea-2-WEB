<?php
class plantilla
{
    public static $instancia = null;

    public static function aplicar(): plantilla
    {
        if (self::$instancia == null) {
            self::$instancia = new plantilla();
        }
        return self::$instancia;
    }

    public function __construct()
    {
        ?>
        <!DOCTYPE html>
        <html lang="es">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Tarea 2 - WEB</title>
            <!-- Bootstrap CSS 5.3.0 -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
        </head>

        <body>
            <div class="container">
                <a href="index.php" style="text-decoration: none; color: inherit;">
                    <h1 class="mt-5">Mi Contenido Consumido</h1>
                </a>
                <p>Lista de Contenido Audiovisual o Literario que he consumido</p>
                <div style="min-height: 400px;">
                    <?php
    }


    public function __destruct()
    {
        ?>
                </div>
                <div class="text-center">
                    <hr>
                    Derechos Fumados &copy; <?php echo date("Y"); ?> Por Snoop Dogg
                </div>
            </div>
        </body>

        </html>
        <?php
    }


}