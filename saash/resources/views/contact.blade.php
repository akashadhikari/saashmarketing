<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
            <div class="page-title">
                <h2>Contact with us</h2>
                <p>Ready to get started? That's great! Give us a call or drop us a Message and we will get back to you as soon as possible!</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-md-4">
            <address class="side-icon-boxes">
                <div class="side-icon-box">
                    <div class="side-icon">
                        <img src="images/location-arrow.png" alt="">
                    </div>
                    <p><strong>Address: </strong> Box 564, Disneyland <br />USA</p>
                </div>
                <div class="side-icon-box">
                    <div class="side-icon">
                        <img src="images/phone-arrow.png" alt="">
                    </div>
                    <p><strong>Telephone: </strong>
                        <a href="callto:8801812726495">+8801812726495</a> <br />
                        <a href="callto:8801687420471">+8801687420471</a>
                    </p>
                </div>
                <div class="side-icon-box">
                    <div class="side-icon">
                        <img src="images/mail-arrow.png" alt="">
                    </div>
                    <p><strong>E-mail: </strong>
                        <a href="mailto:youremail@example.com">info@saashmarketing.com</a> <br />
                        <a href="mailto:youremail@example.com">example@mail.com</a>
                    </p>
                </div>
            </address>
        </div>
        <div class="col-xs-12 col-md-8">
            <form action="/plan" id="contact-form" method="post" class="contact-form">
                @csrf
                <div class="form-double">
                    <input type="text" id="form-name" name="form-name" placeholder="Your name" class="form-control" required="required">
                    <input type="email" id="form-email" name="form-email" class="form-control" placeholder="E-mail address" required="required">
                </div>
                <input type="text" id="form-subject" name="form-subject" class="form-control" placeholder="Message topic">
                <textarea name="message" id="form-message" name="form-message" rows="5" class="form-control" placeholder="Your message" required="required"></textarea>
                <button type="submit" class="button">Submit</button>
            </form>
        </div>
    </div>
</div>
