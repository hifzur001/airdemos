        <!-- Footer -->
        <footer class="bg-dark text-white py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 mb-4">
                        <h5 class="fw-bold mb-3 dd">
                            <i class="fas fa-home me-2"></i>StayScape
                        </h5>
                        <p class="text-white cd">
                            Discover the beauty of Pakistan through our
                            comprehensive travel services and authentic local
                            experiences.
                        </p>
                        <div class="social-links">
                            <a href="#" class="text-white me-3"
                                ><i class="fab fa-facebook-f"></i
                            ></a>
                            <a href="#" class="text-white me-3"
                                ><i class="fab fa-twitter"></i
                            ></a>
                            <a href="#" class="text-white me-3"
                                ><i class="fab fa-instagram"></i
                            ></a>
                            <a href="#" class="text-white"
                                ><i class="fab fa-youtube"></i
                            ></a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 mb-4 text-white">
                        <h6 class="fw-bold mb-3">Quick Links</h6>
                        <ul class="list-unstyled">
                            <li>
                                <a
                                    href="#home"
                                    class="text-white text-decoration-none"
                                    >Home</a
                                >
                            </li>
                            <li>
                                <a
                                    href="#services"
                                    class="text-white text-decoration-none"
                                    >Services</a
                                >
                            </li>
                            <li>
                                <a
                                    href="#about"
                                    class="text-white text-decoration-none"
                                    >About</a
                                >
                            </li>
                            <li>
                                <a
                                    href="#contact"
                                    class="text-white text-decoration-none"
                                    >Contact</a
                                >
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <h6 class="fw-bold mb-3">Services</h6>
                        <ul class="list-unstyled">
                            <li>
                                <a
                                    href="#"
                                    class="text-white text-decoration-none"
                                    >Accommodation</a
                                >
                            </li>
                            <li>
                                <a
                                    href="#"
                                    class="text-white text-decoration-none"
                                    >Transportation</a
                                >
                            </li>
                            <li>
                                <a
                                    href="#"
                                    class="text-white text-decoration-none"
                                    >Tours & Experiences</a
                                >
                            </li>
                            <li>
                                <a
                                    href="#"
                                    class="text-white text-decoration-none"
                                    >Adventure Activities</a
                                >
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 mb-4">
                        <h6 class="fw-bold mb-3">Contact Info</h6>
                        <div class="contact-info">
                            <p class="text-white mb-2">
                                <i class="fas fa-map-marker-alt me-2"></i>
                                Islamabad, Pakistan
                            </p>
                            <p class="text-white mb-2">
                                <i class="fas fa-phone me-2"></i>
                                +92 300 1234567
                            </p>
                            <p class="text-white mb-2">
                                <i class="fas fa-envelope me-2"></i>
                                info@pakistantravel.com
                            </p>
                        </div>
                    </div>
                </div>
                <hr class="my-4" />
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <p class="text-white mb-0">
                            &copy; 2025 StayScape Services. All rights reserved.
                        </p>
                    </div>
                    <div class="col-md-6 text-md-end">
                        <a href="#" class="text-white text-decoration-none me-3"
                            >Privacy Policy</a
                        >
                        <a href="#" class="text-white text-decoration-none"
                            >Terms of Service</a
                        >
                    </div>
                </div>
            </div>
        </footer>

        <!-- Service Modal -->
        <div class="modal fade" id="serviceModal" tabindex="-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header border-0">
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                        ></button>
                    </div>
                    <div class="modal-body p-0">
                        <div class="position-relative">
                            <img
                                id="modalImage"
                                src="/placeholder.svg"
                                alt="Service Image"
                                class="img-fluid w-100"
                                style="height: 300px; object-fit: cover"
                            />
                            <div class="position-absolute top-0 start-0 m-3">
                                <span
                                    id="modalBadge"
                                    class="badge service-badge"
                                ></span>
                            </div>
                            <div class="position-absolute bottom-0 end-0 m-3">
                                <div
                                    class="bg-dark bg-opacity-75 text-white px-2 py-1 rounded"
                                >
                                    <i
                                        class="fas fa-star text-warning me-1"
                                    ></i>
                                    <span id="modalRatingOverlay"></span>
                                </div>
                            </div>
                        </div>
                        <div class="p-4">
                            <h4 id="modalTitle" class="fw-bold mb-3"></h4>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <p class="mb-2">
                                        <i
                                            class="fas fa-map-marker-alt text-green-primary me-2"
                                        ></i>
                                        <span id="modalLocation"></span>
                                    </p>
                                    <p class="mb-2">
                                        <i
                                            class="fas fa-star text-warning me-2"
                                        ></i>
                                        <span id="modalRating"></span> Rating
                                    </p>
                                </div>
                                <div class="col-md-6 text-md-end">
                                    <h5
                                        class="text-green-primary fw-bold"
                                        id="modalPrice"
                                    ></h5>
                                    <p class="text-muted mb-0">
                                        <i class="fas fa-tag me-1"></i>
                                        <span id="modalServiceTypeText"></span>
                                    </p>
                                </div>
                            </div>
                            <div class="mb-4">
                                <h6 class="fw-bold mb-3">Service Features</h6>
                                <div class="row g-2" id="serviceFeatures">
                                    <!-- Features will be populated by JavaScript -->
                                </div>
                            </div>
                            <div class="d-grid">
                                <button
                                    class="btn btn-primary btn-lg"
                                    onclick="initiateBooking()"
                                >
                                    <i class="fas fa-calendar-check me-2"></i
                                    >Book Now
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    

        <!-- Go to Top Button -->
        <button
            id="goToTop"
            class="btn btn-primary rounded-circle position-fixed"
            style="bottom: 20px; right: 20px; z-index: 1000; display: none"
        >
            <i class="fas fa-arrow-up"></i>
        </button>

        <!-- WhatsApp Button -->
        <a
            href="https://wa.me/923001234567"
            target="_blank"
            class="whatsapp-btn position-fixed"
            style="bottom: 80px; right: 20px; z-index: 1000"
        >
            <i class="fab fa-whatsapp"></i>
        </a>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"
            integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw=="
            crossorigin="anonymous"
        ></script>
        <script src="script.js"></script>
    </body>
</html>