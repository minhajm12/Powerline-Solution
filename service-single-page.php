<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single Page</title>

    <!-- bootstrap CDN link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Owl Carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <!-- Home Style -->
    <link rel="stylesheet" href="assets/css/home.css">

</head>

<body>

    <?php include 'inc/header.php'; ?>

    <div id="service-single-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 d-flex order-2 order-md-2 order-lg-1 flex-column justify-content-center pe-lg-5 pe-md-0 pe-0" data-aos="fade-right" data-aos-delay="" data-aos-duration="1000">
                    <h1>Engineering Procurement & Construction</h1>
                    <p>Powerline Solutions is a leading Utility, Infrastructure, Oil and Gas, Water and Waste Water Contractor with in-house specialties for Engineering, Procurement, and Construction of Civil, Mechanical, Electrical, Instrumentation, Controls and Automation disciplines</p>
                    <p>Powerline has successfully completed several prestigious EPC projects of various utilities, of which following are the major ongoing and executed projects by Powerline within last 2 years in the Middle East</p>

                </div>
                <div class="col-lg-5 col-md-12 order-1 order-md-1 order-lg-2 p-md-5">
                    <div class="position-relative">
                        <img src="assets/img/service-img/epc.jpg" alt="" class="w-100" data-aos="zoom-in-right" data-aos-delay="200" data-aos-duration="1000">
                        <!-- <img src="assets/img/service-img/before-img.png" alt="" class="w-100 before"> -->
                        <span class="before d-none d-md-block" data-aos="zoom-in-left" data-aos-delay="400" data-aos-duration="1000"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div id="service-list-items">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 px-md-5 px-lg-0" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">
                    <img src="assets/img/service-img/single-service-img.jpg" alt="" class="w-100">
                    <span class="before"></span>
                </div>
                <div class="col-lg-7 col-md-12 d-flex flex-column justify-content-center ps-4 ps-md-0 ps-lg-5 pt-md-5 pt-lg-0 pt-5" data-aos="fade-left" data-aos-delay="400" data-aos-duration="1000">
                    <ul>
                        <li><img src="assets/img/logo-top.png" alt="" class="list-img">Construction of 132/13.8kV Substation @ Rabwa, Hail and Gazala –National Grid Saudi Arabia</li>
                        <li><img src="assets/img/logo-top.png" alt="" class="list-img">Protection modification for 115KV Cable feeders – Marafiq Yanbu Saudi Arabia</li>
                        <li><img src="assets/img/logo-top.png" alt="" class="list-img">3 Nos Feed mills in Dammam, Dammam port, Al Kharj – ARSCO Saudi Arabia</li>
                        <li><img src="assets/img/logo-top.png" alt="" class="list-img">230KV Substation – SADARA Jubail</li>
                        <li><img src="assets/img/logo-top.png" alt="" class="list-img">10 MW Aramco Solar Power Project – ARAMCO Dhahran Saudi Arabis</li>
                        <li><img src="assets/img/logo-top.png" alt="" class="list-img">Shamal 120 MLD wastewater treatment plant – Ashgal, Doha Qatar</li>
                        <li><img src="assets/img/logo-top.png" alt="" class="list-img">Doha South 40 MLD Wastewater treatment plant – Ashgal, Dha south Qatar</li>
                        <li><img src="assets/img/logo-top.png" alt="" class="list-img">Pumping Station at Qadsiya and Al Lulayya at Khurfukhan – SEWA, Dubai</li>
                        <li><img src="assets/img/logo-top.png" alt="" class="list-img">Jabel Ali Habab Pumping station PH1 – Dewa Jebel Ali, Dubai</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>




    <div id="service-single-list">
        <div class="container">
            <h2 data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">Product and Services</h2>
            <div class="d-flex align-items-start side-tab flex-column flex-lg-row">

                <div class="nav flex-column nav-pills me-3 me-lg-0 col-lg-3 col-12 make-sticky" id="v-pills-tab" role="tablist" aria-orientation="vertical" data-aos="zoom-in-right" data-aos-delay="0" data-aos-duration="1000">
                    <button class="nav-link active" id="v-pills-tab1-tab" data-bs-toggle="pill" data-bs-target="#v-pills-tab1" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Engineering</button>
                    <button class="nav-link" id="v-pills-tab2-tab" data-bs-toggle="pill" data-bs-target="#v-pills-tab2" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Procurement</button>
                    <button class="nav-link" id="v-pills-tab3-tab" data-bs-toggle="pill" data-bs-target="#v-pills-tab3" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Project Management</button>
                    <button class="nav-link" id="v-pills-tab4-tab" data-bs-toggle="pill" data-bs-target="#v-pills-tab4" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Construction</button>
                    <button class="nav-link" id="v-pills-tab5-tab" data-bs-toggle="pill" data-bs-target="#v-pills-tab5" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Commissioning And Start-Up</button>
                    <button class="nav-link" id="v-pills-tab6-tab" data-bs-toggle="pill" data-bs-target="#v-pills-tab6" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Operation And Maintenance</button>
                </div>

                <div class="tab-content col-lg-9 col-12" id="v-pills-tabContent" data-aos="zoom-in-left" data-aos-delay="400" data-aos-duration="1000">

                    <div class="tab-pane fade show active" id="v-pills-tab1" role="tabpanel" aria-labelledby="v-pills-tab1-tab">
                        <p>Powerline has in hose capability to perform following Engineering packages</p>
                        <h5 class="py-4 py-md-3">Basic Engineering Packages</h5>
                        <ul>
                            <li><img src="assets/img/logo-top.png" alt="" class="list-img">Basic Engineering Package involving PFDs, P&IDs, Process Datasheets.</li>
                            <li><img src="assets/img/logo-top.png" alt="" class="list-img">Power system studies and load flow analysis</li>
                            <li><img src="assets/img/logo-top.png" alt="" class="list-img">Harmonic studies, on-site measurements, software simulation and solutions for power system harmonics</li>
                            <li><img src="assets/img/logo-top.png" alt="" class="list-img">Techno Commercial feasibility studies</li>
                            <li><img src="assets/img/logo-top.png" alt="" class="list-img">Energy and utility management safety studies and risk assessment</li>
                        </ul>
                        <h5 class="py-4 py-md-3">Detailed Engineering Packages</h5>
                        <ul>
                            <li><img src="assets/img/logo-top.png" alt="" class="list-img">Plant layout</li>
                            <li><img src="assets/img/logo-top.png" alt="" class="list-img">Piping layout, stress analysis and isometrics</li>
                            <li><img src="assets/img/logo-top.png" alt="" class="list-img">Civil structural and architectural</li>
                            <li><img src="assets/img/logo-top.png" alt="" class="list-img">Rotating equipment’s and packages</li>
                            <li><img src="assets/img/logo-top.png" alt="" class="list-img">Insulation, painting and refractories</li>
                            <li><img src="assets/img/logo-top.png" alt="" class="list-img">Electrical instrumentation and controls</li>
                            <li><img src="assets/img/logo-top.png" alt="" class="list-img">Heating ventilation and air-conditioning</li>
                            <li><img src="assets/img/logo-top.png" alt="" class="list-img">Lighting, small power and low current systems</li>
                        </ul>
                    </div>

                    <div class="tab-pane fade" id="v-pills-tab2" role="tabpanel" aria-labelledby="v-pills-tab2-tab">
                        <ul>
                            <li><img src="assets/img/logo-top.png" alt="" class="list-img">Vendor evaluation</li>
                            <li><img src="assets/img/logo-top.png" alt="" class="list-img">Procurement of Major equipment’s</li>
                            <li><img src="assets/img/logo-top.png" alt="" class="list-img">Manufacturing release, Quality control and factory inspections</li>
                            <li><img src="assets/img/logo-top.png" alt="" class="list-img">Shipping, clearance and site delivery</li>
                        </ul>
                    </div>

                    <div class="tab-pane fade" id="v-pills-tab3" role="tabpanel" aria-labelledby="v-pills-tab3-tab">
                        <ul>
                            <li><img src="assets/img/logo-top.png" alt="" class="list-img">Planning and scheduling</li>
                            <li><img src="assets/img/logo-top.png" alt="" class="list-img">Cost control</li>
                            <li><img src="assets/img/logo-top.png" alt="" class="list-img">Material managements</li>
                            <li><img src="assets/img/logo-top.png" alt="" class="list-img">Document control</li>
                            <li><img src="assets/img/logo-top.png" alt="" class="list-img">Resources management</li>
                            <li><img src="assets/img/logo-top.png" alt="" class="list-img">Discipline coordination and progress reporting</li>
                        </ul>
                    </div>

                    <div class="tab-pane fade" id="v-pills-tab4" role="tabpanel" aria-labelledby="v-pills-tab4-tab">
                        <ul>
                            <li><img src="assets/img/logo-top.png" alt="" class="list-img">Construction/Erection Supervision</li>
                            <li><img src="assets/img/logo-top.png" alt="" class="list-img">Construction management</li>
                            <li><img src="assets/img/logo-top.png" alt="" class="list-img">Equipment’s and material storage</li>
                            <li><img src="assets/img/logo-top.png" alt="" class="list-img">Commissioning and start-up assistance</li>
                            <li><img src="assets/img/logo-top.png" alt="" class="list-img">Quality control</li>
                            <li><img src="assets/img/logo-top.png" alt="" class="list-img">Safety and training</li>
                        </ul>
                        <h5 class="py-4 py-md-3">Mechanical and Pipe Line Projects</h5>
                        <p>Powerline Mechanical - Oil & Gas Division undertakes following jobs from various prestigious clients</p>
                        <ul>
                            <li><img src="assets/img/logo-top.png" alt="" class="list-img">All types of piping, welding fabrication and erection projects</li>
                            <li><img src="assets/img/logo-top.png" alt="" class="list-img">Own fully equipped welding workshop with highly skilled personnel fully trained and qualified staff to meet all your engineering needs for the piping projects including external and internal coating, hydro-testing, x-ray for welded joints, in an on-site welding, wrapping etc</li>
                            <li><img src="assets/img/logo-top.png" alt="" class="list-img">Mechanical piping, HVAC and Firewater system works.</li>
                            <li><img src="assets/img/logo-top.png" alt="" class="list-img">We are able to do any general maintenance on pipelines like the changing and repair as well as pressure testing of various types of valves, installation and changing of flow meters, air valves, etc</li>
                        </ul>
                        <p>Powerline solutions has secured many prestigious projects from Saudi Aramco, SABIC, SEC, MARAFIQ, PETRO RABIG and reputed Multinational EPC companies</p>
                        <h5 class="py-4 py-md-3">Electrical</h5>
                        <p>Powerline Solutions Electrical , Instrumentation, Controls and Automation Division has undertaken major power projects with utilities , oil and gas segments on the design & engineering, coordination, execution and installation and commissioning of high voltage & low voltage electrical equipment (380 KV - 480V), instrumentation, controls and automation works for various projects including Power plants, Desalination plants, HV Substations, Process plants, Load Centres, Electrical Control Rooms, Generator House</p>
                        <ul>
                            <li><img src="assets/img/logo-top.png" alt="" class="list-img">All types of electrical power transmission and distribution projects</li>
                            <li><img src="assets/img/logo-top.png" alt="" class="list-img">Complete installation, testing, and commissioning of electrical equipment for HV/MV/ LV substations.</li>
                            <li><img src="assets/img/logo-top.png" alt="" class="list-img">Complete installation, testing, and commissioning of electrical and Instrumentation equipment and devices for Industrial Projects in oil and gas fields.</li>
                            <li><img src="assets/img/logo-top.png" alt="" class="list-img">Industrial Electrification, instrumentation and communication jobs can perform in its full satisfaction of the client.</li>
                            <li><img src="assets/img/logo-top.png" alt="" class="list-img">We have our own fully equipped workshop and instrument shop with highly skilled personnel to meet all your engineering needs for the Industrial Electrification and instrument calibration services</li>
                        </ul>
                        <h5 class="py-4">Civil</h5>
                        <p>Our Civil Division undertakes several Industrial Oil & Gas - heavy civil engineering jobs detailed below,</p>
                        <ul>
                            <li><img src="assets/img/logo-top.png" alt="" class="list-img">All types of construction activities involved in industrial, petrochemical, power, transportation, housing, water and land development projects.</li>
                            <li><img src="assets/img/logo-top.png" alt="" class="list-img">All types of Fabrication and installation of steel and concrete structures.</li>
                            <li><img src="assets/img/logo-top.png" alt="" class="list-img">Earthwork, Roads, runways, asphalt payment and building finishing works including interior and exterior designed finishing works.</li>
                            <li><img src="assets/img/logo-top.png" alt="" class="list-img">Pile foundation, mat, raft, independent, anchors and machine foundations.</li>
                            <li><img src="assets/img/logo-top.png" alt="" class="list-img">Airports, Costal retaining, embankments, Drainage, harbor, water supply, works can be done.</li>
                            <li><img src="assets/img/logo-top.png" alt="" class="list-img">All Civil expertized work categories can be performed as well.</li>
                            <li><img src="assets/img/logo-top.png" alt="" class="list-img">All types of drywall and retaining constructions.</li>
                        </ul>
                        <p class="py-3 py-md-4 py-lg-5">The Civil Division is supported by the In-house Electro Mechanical Department, which undertakes the design/engineering, installation, testing and commissioning of the Mechanical - Heating, Ventilation, and Air conditioning, Small Power and Lighting and Plumbing works for the Buildings including specialized BMS, Kitchen and Laundry systems.</p>
                    </div>
                    <div class="tab-pane fade" id="v-pills-tab5" role="tabpanel" aria-labelledby="v-pills-tab5-tab">
                        <p>Commissioning & Start-Up is the last visible step of a project execution process. It moves the project from the “end of construction” to the “commercial operation” status. This phase covers initial and primary dynamic tests, including guarantee performance tests.</p>
                        <p class="py-4 py-md-3">Powerline Solutions dedicated commissioning and start-up team Initiated right from the beginning of design phase, Commissioning & Start-Up activity aims to validate the construction integrity and confirms that the facilities are delivered in a safe, reliable and operational condition for a complete customer satisfaction.</p>
                    </div>
                    <div class="tab-pane fade" id="v-pills-tab6" role="tabpanel" aria-labelledby="v-pills-tab6-tab">
                        <p>Powerline is known for providing professional services with technically qualified manpower to various clients to handle maintenance and operation related to Power, Oil and Gas, Petrochemical, water and waste water plants</p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- CONTACT SECTION -->
    <?php include 'inc/contact-cta.php'; ?>
    <!-- CONTACT SECTION END -->

    <!-- FOOTER SECTION -->
    <?php include 'inc/footer.php'; ?>
    <!-- FOOTER SECTION END -->



    <!-- J-QUERY CDN -->
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>

    <!-- Bootstrap CDN Script -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <!-- OWL Carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>

    <!-- MAIN JS -->
    <script src="assets/js/main.js"></script>

</body>

</html>