<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>TVP Noticias</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
            crossorigin="anonymous"
        />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
            crossorigin="anonymous"
        />
    </head>
    <body>
        <!--BARRA DE NAVEGACIÓN -->
        <header class="header-section">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid navbar-brand">
                    <img
                        src="{{ asset('images/Portada/tvplogo-foto.png') }}"
                        style="height: 50px; width: 50px"
                        alt="Logo"
                    />
                    <button
                        class="navbar-toggler"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                        style="background-color: aliceblue"
                    >
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div
                        class="collapse navbar-collapse"
                        id="navbarSupportedContent"
                    >
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a
                                    class="nav-link navbar-brand"
                                    aria-current="page"
                                    href="#"
                                    >Noticias</a
                                >
                            </li>
                            <li class="nav-item">
                                <a class="nav-link navbar-brand" href="#"
                                    >TV En Vivo</a
                                >
                            </li>
                            <li class="nav-item">
                                <a class="nav-link navbar-brand" href="#"
                                    >Recetas</a
                                >
                            </li>
                            <li class="nav-item">
                                <a class="nav-link navbar-brand" href="#"
                                    >Programas</a
                                >
                            </li>
                            <li class="nav-item">
                                <a class="nav-link navbar-brand" href="#"
                                    >Experiencias</a
                                >
                            </li>
                        </ul>
                        <form class="d-flex" role="search">
                            <input
                                class="form-control me-2"
                                type="search"
                                placeholder="Search"
                                aria-label="Search"
                            />
                            <button
                                class="btn btn-outline-success"
                                type="submit"
                            >
                                Search
                            </button>
                        </form>
                    </div>
                </div>
            </nav>
        </header>

        <!--FIN DE LA NAVBAR-->

        <!--CONTENEDOR-->

        <!--NOVEDADES-->
        <div class="image-list-container">
            <h2 class="section-title">Novedades</h2>
            <div class="container">
                <div class="row flex-nowrap overflow-auto">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card m-3">
                            <img
                                src="{{ asset('images/Novedades/nov1.jpg') }}"
                                class="card-img"
                                alt="..."
                            />
                            <div class="bg-black text-center">
                                Footer estará el título
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card m-3">
                            <img
                                src="{{ asset('images/Novedades/nov2.jpg') }}"
                                class="card-img"
                                alt="..."
                            />
                            <div class="bg-black text-center">
                                Footer estará el título
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card m-3">
                            <img
                                src="{{ asset('images/Novedades/nov3.jpg') }}"
                                class="card-img"
                                alt="..."
                            />
                            <div class="bg-black text-center">
                                Footer estará el título
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card m-3">
                            <img
                                src="{{ asset('images/Novedades/nov4.jpg') }}"
                                class="card-img"
                                alt="..."
                            />
                            <div class="bg-black text-center">
                                Footer estará el título
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card m-3">
                            <img
                                src="{{ asset('images/Novedades/nov5.jpg') }}"
                                class="card-img"
                                alt="..."
                            />
                            <div class="bg-black text-center">
                                Footer estará el título
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--CONFERENCIAS-->
        <div class="image-list-container">
            <h2 class="section-title">Conferencias</h2>
            <div class="container">
                <div class="row flex-nowrap overflow-auto">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card m-3">
                            <img
                                src="{{
                                    asset('images/Conferencias/conf1.jpg')
                                }}"
                                class="card-img"
                                alt="..."
                            />
                            <div class="bg-black text-center">
                                Footer estará el título
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card m-3">
                            <img
                                src="{{
                                    asset('images/Conferencias/conf2.jpg')
                                }}"
                                class="card-img"
                                alt="..."
                            />
                            <div class="bg-black text-center">
                                Footer estará el título
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card m-3">
                            <img
                                src="{{
                                    asset('images/Conferencias/conf3.jpg')
                                }}"
                                class="card-img"
                                alt="..."
                            />
                            <div class="bg-black text-center">
                                Footer estará el título
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card m-3">
                            <img
                                src="{{
                                    asset('images/Conferencias/conf4.jpg')
                                }}"
                                class="card-img"
                                alt="..."
                            />
                            <div class="bg-black text-center">
                                Footer estará el título
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card m-3">
                            <img
                                src="{{
                                    asset('images/Conferencias/conf5.jpg')
                                }}"
                                class="card-img"
                                alt="..."
                            />
                            <div class="bg-black text-center">
                                Footer estará el título
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- WEBINAR -->
        <div class="image-list-container">
            <h2 class="section-title">Webinar</h2>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-6">
                        <div class="card text-bg-dark m-3">
                            <img
                                src="{{ asset('images/Webinar/3.jpg') }}"
                                class="card-img"
                                alt="..."
                                style="height: 310px; width: 100%"
                            />
                            <div class="card-img-overlay">
                                <h5 class="card-title">Noticias del momento</h5>
                                <p class="card-text">
                                    Balasos en la sierra se salen de control
                                </p>
                                <p class="card-text">
                                    <small>10/06/2023</small>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="row">
                            <div class="col-6">
                                <div class="card text-bg-dark m-3">
                                    <img
                                        src="{{
                                            asset('images/Webinar/2.jpg')
                                        }}"
                                        class="card-img"
                                        alt="..."
                                        style="height: 140px; width: 100%"
                                    />
                                    <div class="card-img-overlay">
                                        <h5 class="card-title">
                                            Noticias del momento
                                        </h5>
                                        <p class="card-text">
                                            Balasos en la sierra se salen de
                                            control
                                        </p>
                                        <p class="card-text">
                                            <small>10/06/2023</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card text-bg-dark m-3">
                                    <img
                                        src="{{
                                            asset('images/Webinar/1.jpg')
                                        }}"
                                        class="card-img"
                                        alt="..."
                                        style="height: 140px; width: 100%"
                                    />
                                    <div class="card-img-overlay">
                                        <h5 class="card-title">
                                            Noticias del momento
                                        </h5>
                                        <p class="card-text">
                                            Balasos en la sierra se salen de
                                            control
                                        </p>
                                        <p class="card-text">
                                            <small>10/06/2023</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card text-bg-dark m-3">
                                    <img
                                        src="{{
                                            asset('images/Webinar/4.jpg')
                                        }}"
                                        class="card-img"
                                        alt="..."
                                        style="height: 140px; width: 100%"
                                    />
                                    <div class="card-img-overlay">
                                        <h5 class="card-title">
                                            Noticias del momento
                                        </h5>
                                        <p class="card-text">
                                            Balasos en la sierra se salen de
                                            control
                                        </p>
                                        <p class="card-text">
                                            <small>10/06/2023</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card text-bg-dark m-3">
                                    <img
                                        src="{{
                                            asset('images/Webinar/5.jpg')
                                        }}"
                                        class="card-img"
                                        alt="..."
                                        style="height: 140px; width: 100%"
                                    />
                                    <div class="card-img-overlay">
                                        <h5 class="card-title">
                                            Noticias del momento
                                        </h5>
                                        <p class="card-text">
                                            Balasos en la sierra se salen de
                                            control
                                        </p>
                                        <p class="card-text">
                                            <small>10/06/2023</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- EVENTOS -->
        <div class="image-list-container">
            <h2 class="section-title">Eventos</h2>
            <div class="container">
                <div class="row flex-nowrap overflow-auto">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card m-3">
                            <img
                                src="{{ asset('images/Eventos/eve1.jpg') }}"
                                class="card-img"
                                alt="..."
                            />
                            <div class="bg-black text-center">
                                Footer estará el título
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card m-3">
                            <img
                                src="{{ asset('images/Eventos/eve2.jpg') }}"
                                class="card-img"
                                alt="..."
                            />
                            <div class="bg-black text-center">
                                Footer estará el título
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card m-3">
                            <img
                                src="{{ asset('images/Eventos/eve3.jpg') }}"
                                class="card-img"
                                alt="..."
                            />
                            <div class="bg-black text-center">
                                Footer estará el título
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card m-3">
                            <img
                                src="{{ asset('images/Eventos/eve4.jpg') }}"
                                class="card-img"
                                alt="..."
                            />
                            <div class="bg-black text-center">
                                Footer estará el título
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card m-3">
                            <img
                                src="{{ asset('images/Eventos/eve5.jpg') }}"
                                class="card-img"
                                alt="..."
                            />
                            <div class="bg-black text-center">
                                Footer estará el título
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br />
        <!-- FORMULARIO -->
        <div class="container mb-5">
            <h3 class="text-center">Contacto</h3>
            <div class="row">
                <div
                    class="col-md-6 offset-md-3 col-lg-4 offset-lg-2 d-flex justify-content-center align-items-center"
                >
                    <div class="text-center">
                        <h3>¡Nos encantaría estar en contacto contigo!</h3>
                        <p>
                            Tenemos diferentes formas para que podamos
                            contactarnos y recibir la asistencia que necesitas.
                            Para empezar, puedes utilizar nuestro formulario en
                            línea. Es muy sencillo de usar, solo debes completar
                            los campos requeridos con tu nombre, ciudad, correo
                            electrónico y número de teléfono. Una vez que envíes
                            el formulario, nos comprometemos a responderte en el
                            menor tiempo posible. Nuestro equipo estará
                            encantado de brindarte la ayuda que necesitas.
                        </p>
                    </div>
                </div>
                <div
                    class="col-md-6 offset-md-3 col-lg-4 offset-lg-2 d-flex justify-content-center"
                >
                    <form action="javascript:void(0)" method="POST">
                        <div class="mb-3">
                            <label for="nombre" class="form-label"
                                >Nombre:</label
                            >
                            <input
                                type="text"
                                class="form-control form-control-sm"
                                id="nombre"
                                name="nombre"
                                required
                            />
                        </div>
                        <div class="mb-3">
                            <label for="ciudad" class="form-label"
                                >Ciudad:</label
                            >
                            <input
                                type="text"
                                class="form-control form-control-sm"
                                id="ciudad"
                                name="ciudad"
                                required
                            />
                        </div>
                        <div class="mb-3">
                            <label for="correo" class="form-label"
                                >Correo:</label
                            >
                            <input
                                type="email"
                                class="form-control form-control-sm"
                                id="correo"
                                name="correo"
                                required
                            />
                        </div>
                        <div class="mb-3">
                            <label for="celular" class="form-label"
                                >Celular:</label
                            >
                            <input
                                type="tel"
                                class="form-control form-control-sm"
                                id="celular"
                                name="celular"
                                required
                            />
                        </div>
                        <button
                            id="subm"
                            onclick="save()"
                            class="btn btn-primary"
                        >
                            Enviar
                        </button>
                        <div id="message-container"></div>
                    </form>
                </div>
            </div>
        </div>

        <!--SCRIPT BOOTSTRAP-->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
            crossorigin="anonymous"
        ></script>

        <script>
            function save() {
                event.preventDefault();

                fetch("/api/save", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": "{{ csrf_token() }}",
                    },
                    body: JSON.stringify({
                        nombre: document.getElementById("nombre").value,
                        ciudad: document.getElementById("ciudad").value,
                        correo: document.getElementById("correo").value,
                        celular: document.getElementById("celular").value,
                    }),
                })
                    .then((response) => {
                        showAlert(
                            "success",
                            "Información Correcta, en breve nos comunicaremos"
                        );
                        document.getElementById("nombre").value = "";
                        document.getElementById("ciudad").value = "";
                        document.getElementById("correo").value = "";
                        document.getElementById("celular").value = "";
                    })
                    .catch((error) => {
                        console.error(error);
                        showAlert(
                            "danger",
                            "Ocurrió un error en la solicitud, Revise que los datos sean correctos."
                        );
                    });
            }

            function showAlert(type, message) {
                var alert = document.createElement("div");
                alert.classList.add("alert", "alert-" + type);
                alert.textContent = message;

                var messageContainer =
                    document.getElementById("message-container");
                messageContainer.innerHTML = "";
                messageContainer.appendChild(alert);
            }
        </script>
    </body>

    <style type="text/css">
        .card-img {
            background-color: black;
            object-fit: cover;
            width: 100%;
            height: 200px;
        }
        .image-container {
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-left: 200px;
            margin-right: 200px;
        }

        .fixed-size {
            width: 200px;
            height: 150px;
            object-fit: contain;
        }
        .image-list-container {
            margin-top: 50px;
            margin-left: 150px;
            margin-right: 150px;
        }
        .section-title {
            font-size: 24px;
            color: white;
            margin-bottom: 10px;
        }
        form input[type="text"],
        form input[type="email"],
        form input[type="tel"] {
            font-size: 14px;
            padding: 6px 12px;
            width: 400px;
        }
        .header-section {
            background: linear-gradient(
                    to bottom,
                    rgba(0, 0, 0, 0),
                    90%,
                    rgba(0, 0, 0, 0.9)
                ),
                url("https://admin.tvpacifico.mx/images/noticias/294470-190542.webp");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center top;
            background-blend-mode: multiply;
            height: 600px;
        }

        .navbar {
            background-color: transparent;
            background-image: url("https://admin.tvpacifico.mx/images/noticias/294470-190542.webp");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center top;
        }

        .navbar-brand,
        body,
        h1,
        h2,
        h3 {
            color: white;
        }
        body {
            background: black;
        }
    </style>
</html>
