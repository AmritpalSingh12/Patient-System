@extends('layouts.app')
<!-- ======= Hero Section ======= -->
@section('hero')
    <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

            <!-- Slide 1 -->
            <div class="carousel-item active" style="background-image: url({{asset('assets/img/slide/slide-1.jpg')}})">
                <div class="container">
                    <h2>Welcome to <span>West Bromwich Partnership for Health</span></h2>
                    <p>In April 2011, West Bromwich Partnerships for Health (W.B.P.H) began. We federate within our group of surgeries to offer our patients a wide range of services within our local area; our team endeavour to offer you the patients the very best service.

                        Should you wish to discuss any area of the practice or service we offer please do not hesitate to contact the Practice Manager on 0121 553 0757.</p>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item" style="background-image: url({{asset('assets/img/slide/slide-2.jpg')}})">
                <div class="container">
                    <h2>Safe, Secure, Together</h2>
                    <p>All of our services, content and processes follow a strict set of clinical guidelines, ensuring a safe environment for patient care.

                        Your personal information and any medical records are protected with the highest standards of online security.

                        Patient Access is now available to any UK patient. Join today and benefit from a faster, smarter way to manage your healthcare.</p>
                </div>
            </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

    </div>
</section><!-- End Hero -->
@endsection
@section('main')
    <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon"><i class="fas fa-heartbeat"></i></div>
                        <h4 class="title"><a href="">Book your doctor's appointments swiftly</a></h4>
                        <p class="description">At home, work or play, the PBS app puts you instantly in control of your personal health 24/7.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon"><i class="fas fa-pills"></i></div>
                        <h4 class="title"><a href="">Check medical records on the go</a></h4>
                        <p class="description">With PBS your personal medical records move with you, so you can check them online, anytime.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon"><i class="fas fa-thermometer"></i></div>
                        <h4 class="title"><a href="">Take care of your family</a></h4>
                        <p class="description">Looking after your children or caring for a loved one? PBS allows you to manage your family's health quickly and easily.</p>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Featured Services Section -->


    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>About Us</h2>
                <p>Our vision is to improve healthcare access for patients and
                    clinics by delivering proven solutions to improve efficiency and communication supported by healthcare industry best practice.</p>
            </div>

            <div class="row">
                <div class="col-lg-6" data-aos="fade-right">
                    <img src="{{asset('assets/img/about.jpg')}}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
                    <h3>From the beginning</h3>
                    <p class="fst-italic">
                        PBS was founded in 2023 and from day one has received excellent feedback by providing solutions that are easy to use for both patients and clinics coupled with excellent customer support. We work with a range of Hospital and Clinics across NHS in UK and HSE in Ireland to enable more efficient patient centered processes. PBS has met the needs of Hospitals and Clinics to deliver on growing patient expectations to deliver more efficient and accessible healthcare appointments cost effectively.
                    </p>
                    <h3>PBS Solutions</h3>
                    <p class="fst-italic">
                        PBS is a Cloud based SaaS platform built on proven mobile and internet technologies. Allowing clinics to communicate available appointments for patients to manage their next visit online and improve communication flow while delivering operational excellence and improved efficiencies.

                        PBS is a flexible and innovative platform which applies to many Healthcare Clinic scenarios enabling new ways for healthcare clinics to better manage their availability and patient specific information through improved patient engagement and communication pre and post.
                    </p>
                    <h3>PBS Team</h3>
                    <p class="fst-italic">
                        Our growing team has the right mix of Healthcare, Business and IT experience and is comfortable working with small Clinic and large Hospitals. We keep in constant contact with our Customers to ensure we continually develop our solution to meet their growing requirements and to simplify any repetitive tasks and continuous innovation.

                        PBS have extensive experience of providing product and service innovation to meet customers’ needs within the Healthcare Industry and our short and long term development roadmap is prioritised to meet with our Customer requirements.
                    </p>


                </div>
            </div>

        </div>
    </section><!-- End About Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services services">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Services</h2>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon"><i class="fas fa-heartbeat"></i></div>

                    <h4 class="title"><a href="">Cervical Smears</a></h4>
                    <p class="description">Smears are recommended every 3 years for women between 25 and 65 except those who have had hysterectomy. This test is quick and painless and is carried out by the Practice Nurse.

                        A recall system is now in operation, and we will contact you when your next smear is due. However, we encourage Women to attend every 3 years for repeat smear.</p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon"><i class="fas fa-pills"></i></div>
                    <h4 class="title"><a href="">Child Surveillance Service</a></h4>
                    <p class="description">W.B.P.H carry out child development checks for children under school age, which includes a 6 week baby check and a 3 year development check.

                    </p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon"><i class="fas fa-hospital-user"></i></div>
                    <h4 class="title"><a href="">Contraception Services</a></h4>
                    <p class="description">Full range of contraceptive services are provided by us and we are prepared to counsel and refer women for terminations and are willing to offer a confidential service to women aged under 16 years.</p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon"><i class="fas fa-dna"></i></div>
                    <h4 class="title"><a href="">Health Checks</a></h4>
                    <p class="description">Regular health checks for patients include advice about weight management, smoking, exercise, gynaecological problems, menopause, stress and many other facets of health care and disease prevention.

                    </p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon"><i class="fas fa-wheelchair"></i></div>
                    <h4 class="title"><a href="">Nursing Services</a></h4>
                    <p class="description">The nurse practitioner is available 2 and half days a week to give nursing advice on Chronic Disease Management and minor illnesses. She is also there to give help and support to bereaved families and carers of the disabled and terminally ill.

                    </p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon"><i class="fas fa-notes-medical"></i></div>
                    <h4 class="title"><a href="">Minor Surgery</a></h4>
                    <p class="description">Minor operations are carried out at doctors discretion in the treatment area of the surgery by appointment.

                    </p>
                </div>
            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <section>
        <div class="row d-flex justify-content-center">
            <div class="col-md-10 col-xl-8 text-center">
                <h3 class="mb-4">Testimonials</h3>
                <p class="mb-4 pb-2 mb-md-5 pb-md-0">

                </p>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-md-4 mb-5 mb-md-0">
                <div class="d-flex justify-content-center mb-4">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(1).webp"
                         class="rounded-circle shadow-1-strong" width="150" height="150" />
                </div>
                <h5 class="mb-3">Maria Smantha</h5>
                <h6 class="text-primary mb-3">Patient</h6>
                <p class="px-xl-3">
                    <i class="fas fa-quote-left pe-2"></i>I recently visited the West Bromwich Partnership for Health and had a great experience. The service was excellent, and the doctors were very knowledgeable and helpful.

                    I would definitely recommend this GP to anyone in need of medical assistance.
                </p>
                <ul class="list-unstyled d-flex justify-content-center mb-0">
                    <li>
                        <i class="fas fa-star fa-sm text-warning"></i>
                    </li>
                    <li>
                        <i class="fas fa-star fa-sm text-warning"></i>
                    </li>
                    <li>
                        <i class="fas fa-star fa-sm text-warning"></i>
                    </li>
                    <li>
                        <i class="fas fa-star fa-sm text-warning"></i>
                    </li>
                    <li>
                        <i class="fas fa-star-half-alt fa-sm text-warning"></i>
                    </li>
                </ul>
            </div>
            <div class="col-md-4 mb-5 mb-md-0">
                <div class="d-flex justify-content-center mb-4">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(2).webp"
                         class="rounded-circle shadow-1-strong" width="150" height="150" />
                </div>
                <h5 class="mb-3">Lisa Cudrow</h5>
                <h6 class="text-primary mb-3">Student</h6>
                <p class="px-xl-3">
                    <i class="fas fa-quote-left pe-2"></i>I have used Doctor hospital multiple times, and I have always been extremely satisfied with the service they provide. The doctors are professional and take the time to listen to my concerns. They also have a wide variety of services that they offer, so I can find the perfect one for me.

                    The GP is conveniently located, and the staff is always willing to help. I never feel like I am waiting long for my turn or for them to answer any of my questions.

                    Overall, I would highly recommend Doctor to anyone in need of quality medical care.
                </p>
                <ul class="list-unstyled d-flex justify-content-center mb-0">
                    <li>
                        <i class="fas fa-star fa-sm text-warning"></i>
                    </li>
                    <li>
                        <i class="fas fa-star fa-sm text-warning"></i>
                    </li>
                    <li>
                        <i class="fas fa-star fa-sm text-warning"></i>
                    </li>
                    <li>
                        <i class="fas fa-star fa-sm text-warning"></i>
                    </li>
                    <li>
                        <i class="fas fa-star fa-sm text-warning"></i>
                    </li>
                </ul>
            </div>
            <div class="col-md-4 mb-0">
                <div class="d-flex justify-content-center mb-4">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(9).webp"
                         class="rounded-circle shadow-1-strong" width="150" height="150" />
                </div>
                <h5 class="mb-3">John Smith</h5>
                <h6 class="text-primary mb-3">Technician</h6>
                <p class="px-xl-3">
                    <i class="fas fa-quote-left pe-2"></i>I recently had the unfortunate experience of being hospitalized. It was an extremely harrowing experience, and I couldn't have done it without the excellent service provided by the doctors at the hospital.

                    They were always available to answer any questions I had, and they made sure that I was well-informed about my condition and what to expect. They also made sure that I was comfortable and had everything I needed.

                    In short, the doctors at the hospital were top-notch, and I would highly recommend them to anyone in need of quality medical care.
                </p>
                <ul class="list-unstyled d-flex justify-content-center mb-0">
                    <li>
                        <i class="fas fa-star fa-sm text-warning"></i>
                    </li>
                    <li>
                        <i class="fas fa-star fa-sm text-warning"></i>
                    </li>
                    <li>
                        <i class="fas fa-star fa-sm text-warning"></i>
                    </li>
                    <li>
                        <i class="fas fa-star fa-sm text-warning"></i>
                    </li>
                    <li>
                        <i class="far fa-star fa-sm text-warning"></i>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    </section><!-- End Testimonials Section -->

    <!-- ======= Doctors Section ======= -->
    <section id="doctors" class="doctors section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Doctors</h2>
            </div>

            <div class="row">

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="100">
                        <div class="member-img">
                            <img src="{{asset('assets/img/doctors/doctors-1.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Walter White</h4>
                            <span>Chief Medical Officer</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="200">
                        <div class="member-img">
                            <img src="{{asset('assets/img/doctors/doctors-2.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Sarah Jhonson</h4>
                            <span>Anesthesiologist</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="400">
                        <div class="member-img">
                            <img src="{{asset('assets/img/doctors/doctors-4.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Amanda Jepson</h4>
                            <span>Neurosurgeon</span>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Doctors Section -->


    <!-- ======= Frequently Asked Questioins Section ======= -->
    <section id="faq" class="faq section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Frequently Asked Questions</h2>
                <p></p>
            </div>

            <ul class="faq-list">

                <li>
                    <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Will all registered patients automatically be able to see their coded information? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                    <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            Patients cannot see their detailed coded record until the practice lets them by opening up access. Patients have to ask their practice for access and the practice should have a process for how to register patients. Before patients can register, the practice needs to confirm that the patient is who they say they are. When the patient is registered, but before they are given online access to their detailed coded record, the practice will need to check the record to ensure that no third party information is disclosed or any other information that may cause harm to the patient or any other person.
                        </p>
                    </div>
                </li>

                <li>
                    <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Can a practice give access to records to children and young people? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                    <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            Each practice decides if it wants to offer online services to children and from what age that access should be allowed. You can find more information on this in the GP online services practice toolkit which has been produced by the Royal College of General Practitioners in collaboration with NHS England.</p>
                    </div>
                </li>

                <li>
                    <div data-bs-toggle="collapse" href="#faq3" class="collapsed question"> Are promotional materials available in other languages? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                    <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            Unfortunately we do not provide materials in other languages. It is the practice’s responsibility to adapt for their practice population.


                        </p>
                    </div>
                </li>

                <li>
                    <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Can patients use email accounts that they share with other family members?

                        <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                    <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            Some patients share their email address with another person, this can be a problem when setting passwords or changing information. Please make sure patients understand the risks around having a shared email address when using GP online services.
                        </p>
                    </div>
                </li>


    </section><!-- End Frequently Asked Questioins Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <h2>Contact</h2>
            </div>

        </div>

        <div>
            <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d77691.78351198135!2d-2.070409402583354!3d52.51772362834524!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4870981c517c849b%3A0x6e7aecf7098b384f!2sWest%20Bromwich%20Partnership%20for%20Health!5e0!3m2!1sen!2suk!4v1678628330387!5m2!1sen!2suk" frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="container">

            <div class="row mt-5">

                <div class="col-lg-6">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="info-box">

                                <h3>Our Address</h3>
                                <p>40 Izons Rd</p>
                                <p>West Bromwich</p>
                                <p>B70 8PG</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box mt-4">

                                <h3>Email Us</h3>
                                <p>info@NHS.com<br>contact@izons.com</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box mt-4">

                                <h3>Call Us</h3>
                                <p>01215530757</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="">
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="">
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required="">
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="7" placeholder="Message" required=""></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->
@endsection
<!-- ======= Footer ======= -->
