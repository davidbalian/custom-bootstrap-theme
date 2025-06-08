</main>
                <?php get_sidebar(); ?>
            </div>
        </div>

        <footer class="site-footer bg-dark text-white py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 mb-3 mb-md-0">
                        <h5>About Us</h5>
                        <p>We are a creative agency providing innovative solutions for your business. Our team is passionate about design and technology.</p>
                        <h6 class="mt-4">Our Social</h6>
                        <div class="d-flex gap-3">
                            <a href="#" class="text-white fs-4"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="text-white fs-4"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="text-white fs-4"><i class="bi bi-linkedin"></i></a>
                            <a href="#" class="text-white fs-4"><i class="bi bi-github"></i></a>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3 mb-md-0">
                        <h5>Recent News</h5>
                        <ul class="list-unstyled">
                            <li><strong>New Office Opening</strong><br><small class="text-muted">June 22, 2023</small></li>
                            <li class="mt-2"><strong>Website Redesign Launched</strong><br><small class="text-muted">May 14, 2023</small></li>
                            <li class="mt-2"><strong>Team Retreat in Bali</strong><br><small class="text-muted">February 10, 2023</small></li>
                        </ul>
                    </div>
                    <div class="col-md-3 mb-3 mb-md-0">
                        <h5>Custom Footer Menu</h5>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-white text-decoration-none">How can we help you, Number?</a></li>
                            <li><a href="#" class="text-white text-decoration-none">We have Mission & Vision, bro</a></li>
                            <li><a href="#" class="text-white text-decoration-none">Take a look at our Portfolio</a></li>
                            <li><a href="#" class="text-white text-decoration-none">Get a quote on your new project</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h5>Sign Up for Newsletter</h5>
                        <p>Sign up for our monthly newsletter and stay informed on new services and projects. There will be some freebies along the way. We do not spam!</p>
                        <form class="d-flex">
                            <input type="email" class="form-control me-2" placeholder="Email Address">
                            <button class="btn btn-primary" type="submit">&gt;</button>
                        </form>
                    </div>
                </div>
                <hr class="my-4 border-white-50">
                <div class="text-center">
                    <p>&copy; <?php echo date_i18n( 'Y' ); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.</p>
                </div>
            </div>
        </footer>

        <?php wp_footer(); ?>
    </body>
</html>
