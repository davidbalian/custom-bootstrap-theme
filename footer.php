</main>
                <?php get_sidebar(); ?>
            </div>
        </div>

        <footer class="site-footer bg-dark text-white py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 mb-3 mb-md-0">
                        <h5>About Us</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Sed do eiusmod tempor.</p>
                    </div>
                    <div class="col-md-3 mb-3 mb-md-0">
                        <h5>Quick Links</h5>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-white text-decoration-none">Home</a></li>
                            <li><a href="#" class="text-white text-decoration-none">Services</a></li>
                            <li><a href="#" class="text-white text-decoration-none">Portfolio</a></li>
                            <li><a href="#" class="text-white text-decoration-none">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 mb-3 mb-md-0">
                        <h5>Contact Info</h5>
                        <ul class="list-unstyled">
                            <li>Email: info@example.com</li>
                            <li>Phone: +1 (123) 456-7890</li>
                            <li>Address: 123 Main St, City, Country</li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h5>Follow Us</h5>
                        <ul class="list-unstyled d-flex">
                            <li class="me-3"><a href="#" class="text-white text-decoration-none">FB</a></li>
                            <li class="me-3"><a href="#" class="text-white text-decoration-none">TW</a></li>
                            <li class="me-3"><a href="#" class="text-white text-decoration-none">IG</a></li>
                        </ul>
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
