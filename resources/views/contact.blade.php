@extends('template')
@section('main')
    <div class="contact-container">
        <div class="ilustration">
            <img class="illustration-img" src="assets/contact-illustration.png" alt="" width="800px">
        </div>
        <div class="contact">
            <h1>Review</h1>
            <p>Silahkan lengkapi informasi dibawah ini</p>
            <h4>Your Information</h4>

            <form action="https://formsubmit.co/fonzolydio@gmail.com" method="POST">
                <input type="hidden" name="_captcha" value="false">
                <input type="hidden" name="_next" class="next">
                <div class="form-container">
                    <div class="input-container">
                        <div class="icon">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="form-input">
                            <input class="input-item" type="text" name="name" id="name" placeholder=" ">
                            <label for="name" class="form-label">Nama</label>
                        </div>
                    </div>

                    <div class="input-container">
                        <div class="icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="form-input">
                            <input class="input-item" type="text" name="city" id="city" placeholder=" ">
                            <label for="city" class="form-label">Alamat</label>
                        </div>
                    </div>

                    <div class="input-container">
                        <div class="icon">
                            <i class="far fa-envelope-open"></i>
                        </div>
                        <div class="form-input">
                            <input class="input-item" type="text" name="email" id="email" placeholder=" ">
                            <label for="email" class="form-label">Email</label>
                        </div>
                    </div>

                    <div class="textarea-container">
                        <div class="icon">
                            <i class="fas fa-comment"></i>
                        </div>
                        <div class="form-textarea">
                            <textarea class="textarea" type="text" name="message" id="message" cols="52" rows="8" placeholder=" "></textarea>
                            <label for="message" class="form-label">Pesan</label>
                        </div>
                    </div>

                </div>
                <input type="submit" value="Submit" class="submit">
            </form>
        </div>
    </div>

    <div class="modal-container">
        <div class="modal">
            <img src="assets/rocket.png" alt="">
            <h3>Message Sent</h3>
            <p>Thank you for submitting. We will reply it soon.</p>
            <!-- <span class="close-modal">x</span> -->
        </div>
    </div>
@endsection
