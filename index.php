<?php
include 'layout/header.php';
?>
        <!-- Hero Section -->
        <section id="home" class="hero-section">
            <div class="hero-overlay">
                <div class="container">
                    <div class="row justify-content-center text-center">
                        <div class="col-lg-8">
                            <h1 class="fw-bold text-white mb-4 dd">
                                Discover Beautiful Pakistan
                            </h1>
                            <p class="lead text-white mb-5 cd">
                                Experience the rich culture, stunning
                                landscapes, and warm hospitality of Pakistan
                                through our curated travel services.
                            </p>
                            <button
                                class="btn btn-primary btn-lg me-3 bothBtnDesktop"
                                onclick="scrollToServices()"
                            >
                                <i class="fas fa-search me-2"></i>Explore
                                Services
                            </button>
                            <a
                                href="#about"
                                class="btn btn-outline-light btn-lg bothBtnDesktop"
                            >
                                <i class="fas fa-info-circle me-2"></i>Learn
                                More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Categories Section -->
        <section class="py-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center mb-5">
                        <h2 class="dd welcomeHead">Service Categories</h2>
                        <p class="text-muted cd">
                            Explore a variety of travel options tailored to your
                            needs, whether you're planning a relaxing getaway, a
                            business trip, or an adventurous escape. From flight
                            bookings and hotel reservations.
                        </p>
                    </div>
                </div>
                <div class="row g-3" id="categoriesContainer">
                    <!-- Categories will be populated by JavaScript -->
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section id="services" class="py-5">
            <div class="container">
                <div class="row mb-4">
                    <div class="col-12 text-center">
                        <h2 class="dd welcomeHead">Our Services</h2>
                        <p class="text-muted cd">
                            Select a city to explore available services
                        </p>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-md-6 mx-auto">
                        <select
                            class="form-select form-select-lg"
                            id="cityDropdown"
                        >
                            <option value="">Select a City</option>
                        </select>
                    </div>
                </div>

                <!-- Welcome Message -->
                <div id="welcomeMessage" class="text-center py-5">
                    <i
                        class="fas fa-map-marked-alt fa-3x text-green-primary mb-3"
                    ></i>
                    <h3 class="dd welcomeHead">
                        Welcome to StayScape Services
                    </h3>
                    <p class="text-muted cd">
                        Select a city above to discover amazing travel services
                        and experiences.
                    </p>
                </div>

                <!-- Services Display -->
                <div id="servicesSection" style="display: none">
                    <h3 id="cityTitle" class="mb-4"></h3>
                    <div class="row g-4" id="servicesContainer">
                        <!-- Services will be populated by JavaScript -->
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="py-5 bg-light">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h2 class="mb-4 dd">About StayScape Services</h2>
                        <p class="mb-4 cd">
                            We are dedicated to showcasing the beauty and
                            diversity of Pakistan through carefully curated
                            travel experiences. From the bustling streets of
                            Karachi to the serene mountains of Skardu, we
                            connect travelers with authentic local services.
                        </p>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <i
                                        class="fas fa-check-circle text-green-primary me-3"
                                    ></i>
                                    <span>Verified Service Providers</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <i
                                        class="fas fa-check-circle text-green-primary me-3"
                                    ></i>
                                    <span>24/7 Customer Support</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <i
                                        class="fas fa-check-circle text-green-primary me-3"
                                    ></i>
                                    <span>Best Price Guarantee</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <i
                                        class="fas fa-check-circle text-green-primary me-3"
                                    ></i>
                                    <span>Secure Booking System</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img
                            src="https://images.pexels.com/photos/2246476/pexels-photo-2246476.jpeg"
                            alt="Pakistan Landscape"
                            class="img-fluid rounded shadow"
                        />
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center mb-5">
                        <h2 class="fw-bold dd welcomeHead">Contact Us</h2>
                        <p class="text-muted cd">
                            Get in touch with us for any queries or assistance
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <form id="contactForm">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="name" class="form-label"
                                        >Name</label
                                    >
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="name"
                                        name="name"
                                        placeholder="Name"
                                        required
                                    />
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label"
                                        >Email</label
                                    >
                                    <input
                                        type="email"
                                        class="form-control"
                                        id="email"
                                        placeholder="Email"
                                        name="email"
                                        required
                                    />
                                </div>
                                <div class="col-12">
                                    <label for="subject" class="form-label"
                                        >Subject</label
                                    >
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="subject"
                                        placeholder="Subject"
                                        name="subject"
                                        required
                                    />
                                </div>
                                <div class="col-12">
                                    <label for="message" class="form-label"
                                        >Message</label
                                    >
                                    <textarea
                                        class="form-control"
                                        id="message"
                                        name="message"
                                        placeholder="Message"
                                        rows="5"
                                        required
                                    ></textarea>
                                </div>
                                <div class="col-12 text-center">
                                    <button
                                        type="submit"
                                        class="btn btn-primary btn-lg"
                                    >
                                        <i class="fas fa-paper-plane me-2"></i
                                        >Send Message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

<?php
include 'layout/footer.php';
?>

