 <!-- Login Modal -->
 <div class="modal fade" id="loginModal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Login</h5>
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                        ></button>
                    </div>
                    <div class="modal-body">
                        <form id="loginForm">
                            <div class="mb-3">
                                <label for="loginEmail" class="form-label"
                                    >Email</label
                                >
                                <input
                                    type="email"
                                    class="form-control"
                                    id="loginEmail"
                                    required
                                />
                            </div>
                            <div class="mb-3">
                                <label for="loginPassword" class="form-label"
                                    >Password</label
                                >
                                <input
                                    type="password"
                                    class="form-control"
                                    id="loginPassword"
                                    required
                                />
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>
                            </div>
                        </form>
                        <div class="text-center mt-3">
                            <p>
                                Don't have an account?
                                <a
                                    href="#"
                                    onclick="showRegisterModal()"
                                    class="bothBtnLink"
                                    >Register here</a
                                >
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Register Modal -->
        <div class="modal fade" id="registerModal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Register</h5>
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                        ></button>
                    </div>
                    <div class="modal-body">
                        <form id="registerForm">
                            <div class="mb-3">
                                <label for="registerName" class="form-label"
                                    >Full Name</label
                                >
                                <input
                                    type="text"
                                    class="form-control"
                                    id="registerName"
                                    required
                                />
                            </div>
                            <div class="mb-3">
                                <label for="registerEmail" class="form-label"
                                    >Email</label
                                >
                                <input
                                    type="email"
                                    class="form-control"
                                    id="registerEmail"
                                    required
                                />
                            </div>
                            <div class="mb-3">
                                <label for="registerPhone" class="form-label"
                                    >Phone Number</label
                                >
                                <input
                                    type="tel"
                                    class="form-control"
                                    id="registerPhone"
                                    required
                                />
                            </div>
                            <div class="mb-3">
                                <label for="registerPassword" class="form-label"
                                    >Password</label
                                >
                                <input
                                    type="password"
                                    class="form-control"
                                    id="registerPassword"
                                    required
                                />
                            </div>
                            <div class="mb-3">
                                <label for="confirmPassword" class="form-label"
                                    >Confirm Password</label
                                >
                                <input
                                    type="password"
                                    class="form-control"
                                    id="confirmPassword"
                                    required
                                />
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </form>
                        <div class="text-center mt-3">
                            <p>
                                Already have an account?
                                <a href="#" onclick="showLoginModal()"
                                    >Login here</a
                                >
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>