    <div class="col-lg-5">
        <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s">
            <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="POST">
                <input type="hidden" name="action" value="form_fazle_home">
                <div class="row g-3">
                    <div class="col-xl-12">
                        <input name="name" type="text" class="form-control bg-light border-0" placeholder="Your Name" style="height: 55px;">
                    </div>
                    <div class="col-12">
                        <input name="email" type="email" class="form-control bg-light border-0" placeholder="Your Email" style="height: 55px;">
                    </div>
                    <div class="col-12">
                        <select name="service" class="form-select bg-light border-0" style="height: 55px;">
                            <option selected>Select A Service</option>
                            <option value="Custom Software Development">Custom Software Development</option>
                            <option value="IT Consulting and Support">IT Consulting and Support</option>
                            <option value="Cloud Computing Services">Cloud Computing Services</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <textarea name="message" class="form-control bg-light border-0" rows="3" placeholder="Message"></textarea>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-dark w-100 py-3" type="submit">Request A Quote</button>
                    </div>
                </div>
            </form>
        </div>
    </div>