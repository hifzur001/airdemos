<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>StayScape Services - Discover Beautiful Pakistan</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
            rel="stylesheet"
        />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"
            integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w=="
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <!-- Navigation -->
        <nav
            class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top"
        >
            <div class="container">
                <a
                    class="navbar-brand fw-bold text-green-primary dd"
                    href="./index"
                >
                    <i class="fas fa-home me-2"></i>StayScape
                </a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNav"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="./index"
                                >Home</a
                            >
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./services"
                                >Services</a
                            >
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./contact"
                                >Contact</a
                            >
                        </li>
                    </ul>
                    <div class="navbar-nav">
                        <div id="authButtons" class="d-flex gap-2">
                            <button
                                class="btn btn-outline-primary btn-sm"
                                onclick="showLoginModal()"
                            >
                                Login
                            </button>
                            <button
                                class="btn btn-primary btn-sm"
                                onclick="showRegisterModal()"
                            >
                                Register
                            </button>
                        </div>
                        <div id="userMenu" class="dropdown d-none">
                            <button
                                class="btn btn-outline-primary dropdown-toggle"
                                type="button"
                                data-bs-toggle="dropdown"
                            >
                                <i class="fas fa-user me-1"></i
                                ><span id="userName"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    <a
                                        class="dropdown-item"
                                        href="my-bookings"
                                        ><i class="fas fa-calendar me-2"></i>My
                                        Bookings</a
                                    >
                                </li>
                                <li>
                                    <a
                                        class="dropdown-item"
                                        href="#"
                                        onclick="logout()"
                                        ><i class="fas fa-sign-out-alt me-2"></i
                                        >Logout</a
                                    >
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
