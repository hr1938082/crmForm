<html lang="en"
    class="wf-lato-n4-active wf-exo2-n6-active wf-exo2-n7-active wf-exo2-n5-active wf-exo2-n4-active wf-lato-n7-active wf-active">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Order Now | Assignment Master</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">
    <!-- fontawesome -->
    <link rel="stylesheet" href="./assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Exo+2:400,500,600,700%7CLato:400,700"
        media="all">
</head>

<body cz-shortcut-listen="true">
    <div class="top-menu">
        <nav class="navbar navbar-expand-md fixed-top pl-0 pr-0">
            <div class="container-fluid">
                <a href="/"><img src="./assets/images/logo/logo.png" alt="Assignment Master Logo"
                        class="img-fluid m-t-10"></a>
                <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse"
                    data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="fas fa-align-justify"></i></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="number d-none d-lg-block">
                        <li><a target="_blank" href="tel:00443330112717"><i class="fas fa-phone fa-flip-horizontal"></i>
                                +44 333 011 2717</a></li>
                        <li><a target="_blank" href="https://wa.me/443330112717"><i class="fab fa-whatsapp"></i> +44 333
                                011 2717</a></li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item ">
                            <a class="nav-link" href="/">HOME <span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="/about-us/" id="dropdown01" aria-haspopup="true"
                                aria-expanded="false">About Us</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown01">
                                <a class="dropdown-item" href="/why-choose-us/">Why Choose Us</a>
                                <a class="dropdown-item" href="/guarantee/">Guarantee</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Services</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown02">
                                <a class="dropdown-item" href="/essay-writing/">Essay Writing</a>
                                <a class="dropdown-item" href="/dissertation-writing/">Dissertation Writing</a>
                                <a class="dropdown-item" href="/coursework-writing/">Coursework Writing</a>
                                <a class="dropdown-item" href="/thesis-writing/">Thesis Writing</a>
                                <a class="dropdown-item" href="/research-paper-writing/">Research Paper</a>
                                <a class="dropdown-item" href="/case-study-writing/">Case Study</a>
                                <a class="dropdown-item" href="/buy-essay-online/">Buy Essay Online</a>
                                <a class="dropdown-item" href="/custom-essay/">Custom Essay</a>
                            </div>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="/pricing/">PRICING<span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="/contact-us/">Contact us <span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item d-none d-sm-block d-md-none hide-nav ">
                            <a class="nav-link" href="/reviews/">
                                Reviews
                            </a>
                        </li>
                        <li class="nav-item d-none d-sm-block d-md-none hide-navactive">
                            <a class="nav-link" href="/order-now/">Order Now <span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item d-none d-sm-block d-md-none hide-nav">
                            <a class="nav-link" href="/login/">Login <span class="sr-only"></span></a>
                        </li>
                    </ul>
                    <a class="link-review d-none d-lg-block" href="/reviews/">
                        <span class="review-rating">4.9/<small style="font-size:68%;">5</small></span>
                        <span class="review-stars">
                            <span>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                            Reviews
                        </span>
                    </a>
                    <a href="/order-now/" class="btn btn-ordernow d-none d-lg-block active">Order Now</a>
                    <a href="/login/" class="btn btn-signin d-none d-lg-block "><i class="fas fa-sign-in-alt"></i>
                        Login</a>
                </div>
            </div>
        </nav>
    </div>
    <section class="am-order-form m-t-100">
        <div class="container">
            <div class="row">
                <div id="cover-spin"></div>
                <form accept-charset="UTF-8" method="POST" id="form" action="../classes/Order.php"
                    enctype="multipart/form-data">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5 offset-md-1">
                                <div class="form-group">
                                    <label class="control-label">Paper Type</label>
                                    <select class="form-control" id="paper_type" name="order[paper_type]" required="">
                                        <option value="" disabled="disabled" selected="selected">Select Paper Type
                                        </option>
                                        <option value="Essay">Essay</option>
                                        <option value="Term paper">Term paper</option>
                                        <option value="Research paper">Research paper</option>
                                        <option value="Course Work">Course Work</option>
                                        <option value="Thesis">Thesis</option>
                                        <option value="Thesis Proposal">Thesis Proposal </option>
                                        <option value="Assignment">Assignment</option>
                                        <option value="Exposition Writing">Exposition Writing </option>
                                        <option value="Critical analysis">Critical analysis </option>
                                        <option value="Reflection paper">Reflection paper </option>
                                        <option value="Reflective Essay">Reflective Essay </option>
                                        <option value="Analytical Essay">Analytical Essay </option>
                                        <option value="Brief Overview">Brief Overview </option>
                                        <option value="Response Essay">Response Essay </option>
                                        <option value="Response paper">Response paper </option>
                                        <option value="Argumentative Essay">Argumentative Essay </option>
                                        <option value="Contrast Essay">Contrast Essay </option>
                                        <option value="Research Essay">Research Essay </option>
                                        <option value="Literature Review">Literature Review </option>
                                        <option value="Dissertation">Dissertation</option>
                                        <option value="Dissertation Chapter - Abstract">Dissertation Chapter - Abstract
                                        </option>
                                        <option value="Dissertation Chapter - Introduction">Dissertation Chapter -
                                            Introduction Chapter</option>
                                        <option value="Dissertation Chapter - Literature Review">Dissertation Chapter -
                                            Literature Review</option>
                                        <option value="Dissertation Chapter - Methodology">Dissertation Chapter -
                                            Methodology</option>
                                        <option value="Dissertation Chapter - Result">Dissertation Chapter - Result
                                        </option>
                                        <option value="Dissertation Chapter - Discussion">Dissertation Chapter -
                                            Discussion</option>
                                        <option value="Capstone Project">Capstone Project</option>
                                        <option value="Dissertation Chapter">Dissertation Chapter</option>
                                        <option value="Reflective Writing">Reflective Writing</option>
                                        <option value="Report">Report</option>
                                        <option value="Proofreading">Proofreading</option>
                                        <option value="Lab Report">Lab Report</option>
                                        <option value="PowerPoint Presentation">PowerPoint Presentation</option>
                                        <option value="Reaction Paper">Reaction Paper</option>
                                        <option value="Rewriting">Rewriting</option>
                                        <option value="Press Release">Press Release</option>
                                        <option value="Statement of Purpose">Statement of Purpose</option>
                                        <option value="Letter of Recommendation">Letter of Recommendation</option>
                                        <option value="Project">Project</option>
                                        <option value="Book Report">Book Report</option>
                                        <option value="Book Review">Book Review</option>
                                        <option value="Movie Review">Movie Review</option>
                                        <option value="Research Proposal">Research Proposal </option>
                                        <option value="Case Study">Case Study</option>
                                        <option value="Article">Article</option>
                                        <option value="Article Critique">Article Critique </option>
                                        <option value="Annotated Bibliography">Annotated Bibliography </option>
                                        <option value="Speech / Presentation">Speech / Presentation </option>
                                        <option value="Power Point Presentation (without speaker notes)">Power Point
                                            Presentation (without speaker notes) </option>
                                        <option value="Power Point Presentation (with speaker notes)">Power Point
                                            Presentation (with speaker notes) </option>
                                        <option value="Admission Essays">Admission Essays </option>
                                        <option value="Admission Services - Editing">Admission Services - Editing
                                        </option>
                                        <option value="Scholarship Essay">Scholarship Essay </option>
                                        <option value="Personal Statement">Personal Statement </option>
                                        <option value="News Release">News Release</option>
                                        <option value="Biography">Biography</option>
                                        <option value="Business Plan">Business Plan</option>
                                        <option value="EBooks">EBooks</option>
                                        <option value="Editing">Editing</option>
                                        <option value="Formatting">Formatting</option>
                                        <option value="Quiz">Quiz</option>
                                        <option value="Multiple Choice Questions (Non Time Framed)">Multiple Choice
                                            Questions (Non Time Framed) </option>
                                        <option value="Multiple Choice Questions (Time Framed)">Multiple Choice
                                            Questions (Time Framed) </option>
                                        <option value="Math Problem">Math Problem</option>
                                        <option value="Paraphrasing">Paraphrasing</option>
                                        <option value="Resume">Resume</option>
                                        <option value="Cover Letter">Cover Letter</option>
                                        <option value="Poster">Poster</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
                                <div class="type-of-service">
                                    <div class="form-group">
                                        <label class="control-label">Academic Level</label>
                                        <select class="form-control" id="academic_level" name="order[academic_level]"
                                            required="">
                                            <option value="" disabled="disabled" selected="selected">Select Academic Level
                                            </option>
                                            <option value="A-Level / College">A-Level / College</option>
                                            <option value="Undergraduate / Diploma">Undergraduate / Diploma</option>
                                            <option value="Master">Master</option>
                                            <option value="PhD">PhD</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5 offset-md-1">
                                <div class="form-group">
                                    <label class="control-label">Subject</label>
                                    <select id="subject" class="form-control" name="order[subject]" data-parsley-group="block0"
                                        required="">
                                        <option value="">Select Your Subject</option>
                                        <option value="Accounting">Accounting</option>
                                        <option value="Anthropology">Anthropology</option>
                                        <option value="Art and Architecture">Art and Architecture</option>
                                        <option value="Aviation">Aviation</option>
                                        <option value="Biology">Biology</option>
                                        <option value="Business">Business</option>
                                        <option value="CIPD">CIPD</option>
                                        <option value="Criminal Law">Criminal Law</option>
                                        <option value="Chemistry">Chemistry</option>
                                        <option value="Child Care">Child Care</option>
                                        <option value="Communications">Communications</option>
                                        <option value="Computer Science">Computer Science</option>
                                        <option value="English ">English </option>
                                        <option value="Ethics ">Ethics </option>
                                        <option value="Economics">Economics</option>
                                        <option value="Education">Education</option>
                                        <option value="Electronics">Electronics</option>
                                        <option value="Engineering">Engineering</option>
                                        <option value="Family and Consumer Science">Family and Consumer Science</option>
                                        <option value="Film and Theatre Studies">Film and Theatre Studies</option>
                                        <option value="Finance">Finance</option>
                                        <option value="Geography">Geography</option>
                                        <option value="Government and Politics">Government and Politics</option>
                                        <option value="Health Care ">Health Care </option>
                                        <option value="HND">HND</option>
                                        <option value="History">History</option>
                                        <option value="Hospitality">Hospitality</option>
                                        <option value="Human Resource">Human Resource</option>
                                        <option value="International Relations">International Relations</option>
                                        <option value="Literature ">Literature </option>
                                        <option value="Logistics ">Logistics </option>
                                        <option value="Law">Law</option>
                                        <option value="Management">Management</option>
                                        <option value="Marketing">Marketing</option>
                                        <option value="Mathematics">Mathematics</option>
                                        <option value="Mass communication">Mass communication</option>
                                        <option value="Medical ">Medical </option>
                                        <option value="Media Studies">Media Studies</option>
                                        <option value="Music">Music</option>
                                        <option value="Nursing">Nursing</option>
                                        <option value="Philosophy">Philosophy</option>
                                        <option value="Physics">Physics</option>
                                        <option value="Programming Language">Programming Language</option>
                                        <option value="Project Management">Project Management</option>
                                        <option value="Psychology">Psychology</option>
                                        <option value="Public Relations">Public Relations</option>
                                        <option value="Real Estate">Real Estate</option>
                                        <option value="Recruitment">Recruitment</option>
                                        <option value="Supply Chain">Supply Chain</option>
                                        <option value="Religion">Religion</option>
                                        <option value="Science">Science</option>
                                        <option value="Social Science">Social Science</option>
                                        <option value="Sociology">Sociology</option>
                                        <option value="Sport Science">Sport Science</option>
                                        <option value="Statistics">Statistics</option>
                                        <option value="Strategy and Planning">Strategy and Planning</option>
                                        <option value="Tourism">Tourism</option>
                                        <option value="World Literature">World Literature</option>
                                        <option value="Zoology">Zoology</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
                                <div class="type-of-service">
                                    <div class="form-group">
                                        <label class="control-label">Expected Result</label>
                                        <select class="form-control"
                                            id="expected_result" name="order[expected_result]" required="">
                                            <option>Select your Expected Result</option>
                                            <option value="Pass">Pass</option>
                                            <option value="C">C</option>
                                            <option value="B">B</option>
                                            <option value="A">A</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-10 offset-1 col-lg-10 col-xl-10">
                                <div class="form-group">
                                    <label class="control-label">Paper Topic</label>
                                    <input type="text" class="form-control" placeholder="Your Paper Topic"
                                        name="order[paper_topic]" id="paper_topic" required="" value="">
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5 offset-md-1">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                        <div class="form-group">
                                            <div class="">
                                                <label class="text-left">Number of Pages</label>
                                                <div id="con-1">
                                                    <span class="input-number-decrement"
                                                        id="input-number-decrement-pages"><i
                                                            class="fas fa-minus"></i></span>
                                                    <input class="input-number" id="number_of_pages" 
                                                        name="order[number_of_pages]" type="number" value="0" required=""
                                                        pattern="[0-9]" min="0" max="800"
                                                        title="Only Number Allowed Between 0 to 800">
                                                    <span class="input-number-increment"
                                                        id="input-number-increment-pages"><i
                                                            class="fas fa-plus"></i></span>
                                                    <span class="text-center wordCounts"
                                                        style="display: block; color: #fff;"><span
                                                            id="wordCounts"></span> Words</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                        <div class="form-group">
                                            <div class="">
                                                <label class="text-left">Number of Posters</label>
                                                <div id="con-1">
                                                    <span class="input-number-decrement" id="input-poster-decrement"><i
                                                            class="fas fa-minus"></i></span>
                                                    <input id="no_of_poster" class="input-number" name="order[no_of_poster]"
                                                        type="number" value="0" required="" pattern="[0-9]" readonly=""
                                                        min="0" max="50" title="Only Number Allowed Between 0 to 50">
                                                    <span class="input-number-increment"
                                                        id="input-poster-increment"><i class="fas fa-plus"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                        <div class="form-group">
                                            <label class="control-label">Deadline</label>
                                            <select class="form-control" style="margin-bottom: 10px !important;"
                                                id="deadline" name="order[deadline]" required="">
                                                <option value="" disabled="disabled" selected="selected">Deadline
                                                </option>
                                                <option value="15">15 Days</option>
                                                <option value="10">10 Days</option>
                                                <option value="7">7 Days</option>
                                                <option value="5">5 Days</option>
                                                <option value="3">3 Days</option>
                                                <option value="2">48 Hours</option>
                                                <option value="1">24 Hours</option>
                                                <option value="12">12 Hours</option>
                                                <!--<option value="6"  >6 Hours</option> -->
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                        <div class="form-group">
                                            <label class="control-label">Format of Citation</label>
                                            <select class="form-control" style="margin-bottom: 10px !important;"
                                                id="style" name="order[style]" required="">
                                                <option value="" disabled="disabled" selected="selected">Citation
                                                </option>
                                                <option value="APA Referencing">APA Referencing</option>
                                                <option value="CBE Referencing">CBE Referencing</option>
                                                <option value="Chicago Referencing">Chicago Referencing</option>
                                                <option value="Harvard Referencing">Harvard Referencing</option>
                                                <option value="MLA Referencing">MLA Referencing</option>
                                                <option value="Oxford Referencing">Oxford Referencing</option>
                                                <option value="Turabian Referencing">Turabian Referencing</option>
                                                <option value="Vancouver Referencing">Vancouver Referencing</option>
                                                <option value="Other Referencing">Other Referencing</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                        <div class="form-group">
                                            <div class="">
                                                <label class="text-left">No of Citations</label>
                                                <div id="con-1">
                                                    <span class="input-number-decrement"
                                                        id="input-citation-decrement"><i
                                                            class="fas fa-minus"></i></span>
                                                    <input id="no_of_reference" class="input-number"
                                                        name="order[no_of_reference]" type="number" value="1" required=""
                                                        pattern="[0-9]" min="1" max="50"
                                                        title="Only Number Allowed Between 1 to 50">
                                                    <span class="input-number-increment"
                                                        id="input-citation-increment"><i class="fas fa-plus"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                        <div class="form-group">
                                            <div class="">
                                                <label class="text-left">PowerPoint Slides</label>
                                                <div id="con-1">
                                                    <span class="input-number-decrement" id="input-slider-decrement"><i
                                                            class="fas fa-minus"></i></span>
                                                    <input id="ppt_slides" class="input-number" readonly=""
                                                        name="order[ppt_slides]" type="number" value="0" required=""
                                                        pattern="[0-9]" min="0" max="50"
                                                        title="Only Number Allowed Between 0 to 50">
                                                    <span class="input-number-increment" id="input-slider-increment"><i
                                                            class="fas fa-plus"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 offset-md-1 offset-lg-1 offset-xl-1">
                                <div class="form-group">
                                    <label class="control-label">Upload Your Files:</label>
                                </div>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <label for="file_upload" class="label-file"><i
                                                class="fas fa-cloud-upload-alt"></i> Upload File
                                            <input type="file" name="file[]" id="file_upload" class="d-none" multiple>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-3">
                                            <span class="label-price">
                                                Per PPT Slides:<br>$<span class="text-bold" id="ppt-slide">0</span>
                                            </span>
                                            <input type="hidden" id="ppt-slide-input" name="order[ppt-slide-input]">
                                        </div>
                                        <div class="col-3">
                                            <span class="label-price">
                                                Per Page Cost:<br>$<span class="text-bold" id="per-page-cost">0</span>
                                            </span>
                                            <input id="per-page-cost-input" type="hidden" name="order[per-page-cost-input]" value="0">
                                        </div>
                                        <div class="col-3">
                                            <span class="label-price">
                                                Per Poster Cost:<br>$<span class="text-bold"
                                                    id="per-poster-price">0</span>
                                            </span>
                                            <input type="hidden" id="per-poster-price-input" name="order[per-poster-price-input]">
                                        </div>
                                        <div class="col-3">
                                            <span class="label-price">
                                                Total Cost:<br>$<span class="text-bold" id="total-cost">0</span>
                                            </span>
                                            <input type="hidden" id="total-cost-input" name="order[total-cost]">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 offset-md-1">
                                <span class="h3 p-t-10 p-b-10">Details</span>
                            </div>
                            <div class="col-12 col-sm-12 col-md-10 col-lg-10 col-xl-10 offset-md-1">
                                <div class="form-group m-b-20">
                                    <textarea name="project[description]" id="details" class="form-control" placeholder="Details"
                                        style="margin-top: 0px; margin-bottom: 0px; height: 120px;"
                                        required=""></textarea>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-10 col-lg-10 col-xl-10 offset-md-1">
                                <span class="h3 p-t-10 p-b-10">Contact Information</span>
                            </div>
                            <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5 offset-md-1">
                                <div class="form-group m-b-20">
                                    <input type="text" placeholder="Enter Your First Name" name="firstname" id="firstname"
                                        class="form-control information-control" required="" value="">
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
                                <div class="form-group m-b-20">
                                    <input placeholder="Enter Your Last Name" type="text" name="lastname" id="lastname"
                                        class="form-control information-control" required="" value="">
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5 offset-md-1">
                                <div class="form-group m-b-20">
                                    <input type="email" placeholder="Enter Your Email"
                                        name="email" id="email" class="form-control information-control" value="">
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
                                <div class="form-group m-b-20">
                                    <input type="text" placeholder="Enter Your Mobile No."
                                        name="phone" id="phone" class="form-control information-control" value="">
                                </div>
                            </div>
                            <div class="col-6 offset-3">
                                <input type="button" id="submitOrder" value="Submit" class="btn btn-success btn-block">
                            </div>
                        </div>
                    </div>
                </form>
                <form action="https://forms.globaltech360.com/stripe_form.php" method="post">
                    <input type="hidden" disabled id="id" name="id"/>
                    <input type="hidden" disabled id="amount" name="amount"/>
                    <input type="submit" class="d-none" disabled id="submit" name="submit"/>
                </form>
                    <input type="hidden" disabled value="<?php 
                    if(isset($_GET["id"])){echo $_GET["id"];} 
                    ?>" id="idget" name="idget"/>
                    <input type="hidden" disabled value="<?php 
                    if(isset($_GET["amount"])){echo $_GET["amount"];} 
                    ?>" id="amountget" name="amountget"/>
            </div>
        </div>
        
        <script
            src="https://www.paypal.com/sdk/js?client-id=AcPJxq9j9HE0KGScwb39CMnAtNld7UAuTWXV-iA9UnV74Xc-EcHn0OgQ21zm2hklSmno9tRnPtC0tiJr">
        </script>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close py-2 px-2" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        
      <div class="modal-body">
        <button type="button" id="submitPayment" class="btn btn-block btn-info">Pay now</button>
            <p class="text-info font-italic text-center"><small class="text-muted">Pay via</small> Stripe</p>
        <hr>
        <div id="paypal-button-container"></div>
      </div>
    </div>
  </div>
</div>
    </section>
    <section class="gurantees-am">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <span class="h2 text-center p-b-50">Assignment Master Guarantees A Flawless Online Help
                        Experience</span>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                    <div class="circle text-center mx-auto">
                        <img src="./assets/images/icons/paper-done.png" class="img-fluid" alt="Plagiarism Free Work">
                    </div>
                    <span class="h3 p-t-10 text-center">Original Work Free Of Plagiarism</span>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                    <div class="circle text-center mx-auto">
                        <img src="./assets/images/icons/money-back-guaranteed.png" class="img-fluid"
                            alt="Money Back Guaranteed">
                    </div>
                    <span class="h3 p-t-10 text-center">Money Back Guarantee</span>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                    <div class="circle text-center mx-auto">
                        <img src="./assets/images/icons/no-hidden-charges.png" class="img-fluid"
                            alt="No Hidden Charges">
                    </div>
                    <span class="h3 p-t-10 text-center">No Hidden Charges</span>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                    <div class="circle text-center mx-auto">
                        <img src="./assets/images/icons/secure-identity.png" class="img-fluid"
                            alt="Identity Protection">
                    </div>
                    <span class="h3 p-t-10 text-center">Safety Of Your Identity</span>
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <div class="clearfix"></div>
    <footer>
        <div class="container">
            <div class="row no-gutters">
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <span class="h2">Disclaimer</span>
                    <p>Assignmentmaster.co.uk is the online custom assignment writing company offering its services to
                        the students. Our services are only intended for the help, and all the papers provided are for
                        the reference purpose only.</p>
                    <ul class="social">
                        <li><a target="_blank" href="https://www.facebook.com/Assignment-Master-303955270028161/"> <span
                                    class="d-none">Facebook</span><i class="fab fa-facebook-f"></i></a></li>
                        <li><a target="_blank" href="https://twitter.com/MastersHelpUk"><span
                                    class="d-none">Twitter</span><i class="fab fa-twitter"></i></a></li>
                    </ul>
                </div>
                <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                            <span class="h2">Useful Links</span>
                            <ul>
                                <li><a href="/about-us/">About Us</a></li>
                                <li><a href="/blog/">Blog</a></li>
                                <li><a href="/faq/">FAQ's</a></li>
                                <li><a href="/pricing/">Pricing</a></li>
                                <li><a href="/order-now/">Order Now</a></li>
                                <li><a href="/reviews/">Reviews</a></li>
                                <li><a href="/contact-us/">Contact us</a></li>
                                <li><a href="/sitemap/">Sitemap</a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                            <span class="h2">Useful Links</span>
                            <ul>
                                <li><a href="/buy-assignment/">Buy Assignment</a></li>
                                <li><a href="/do-my-assignment/">Do My Assignment</a></li>
                                <li><a href="/write-my-essay/">Write My Essay</a></li>
                                <li><a href="/college-assignment/">College Assignment</a></li>
                                <li><a href="/university-assignment/">University Assignment</a></li>
                                <li><a href="/hnd-assignment/">HND Assignment</a></li>
                                <li><a href="/btec-assignment/">BTEC Assignment</a></li>
                                <li><a href="/nursing-assignment-essay/">Nursing Assignment</a></li>
                                <li><a href="/mba-assignment-help/">MBA Assignment</a></li>
                                <li><a href="/law-assignment-help/">Law Assignment</a></li>
                                <li><a href="/cipd-assignment-help/">CIPD Assignment</a></li>
                                <li><a href="/business-assignment-help/">Business Assignment</a></li>
                                <li><a href="/phd-writing-service/">PHD Writing</a></li>
                                <li><a href="/academic-writing-services/">Academic Writing</a></li>
                                <li><a href="/open-university-assignment/">Open university</a></li>
                                <li><a href="/term-paper-writing/">Term Paper Writing</a></li>
                                <li><a href="/personal-statement-writing/">Personal Statement Writing</a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                            <span class="h2">Useful Links</span>
                            <ul>
                                <li><a href="/privacy-policy/">Privacy Policy</a></li>
                                <li><a href="/refund-policy/">Refund Policy</a></li>
                                <li><a href="/revision-policy/">Revision Policy</a></li>
                                <li><a href="/cookie-policy/">Cookie Policy</a></li>
                                <li><a href="/why-choose-us/">Why Choose Us</a></li>
                                <li><a href="/terms-and-conditions/">Terms &amp; conditions</a></li>
                                <li><a href="/guarantee/">Guarantee</a></li>
                                <li><a href="/login/">Student login</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                    <span class="h2">Contact Us</span>
                    <ul class="">
                        <li><a href="tel:00443330112717"><i class="fas fa-phone fa-flip-horizontal"></i> +44 333 011
                                2717</a></li>
                        <li><a target="_blank" href="https://wa.me/443330112717"><i class="fab fa-whatsapp"></i> +44 333
                                011 2717</a></li>
                        <li><a target="_blank" href="mailto:support@assignmentmaster.co.uk"><i
                                    class="far fa-envelope"></i>support@assignmentmaster.co.uk</a></li>
                    </ul>
                    <img src="./assets/images/payment.png" class="img-fluid" alt="Secure Payments Methods">
                </div>
            </div>
        </div>
    </footer>
    <div class="clearfix"></div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <span class="d-block text-center">Copyright © 2015 - 2021 AssignmentMaster.co.uk - All Right
                        Reserved</span>
                </div>
            </div>
        </div>
    </div>
    <script src="./assets/js/jquery.js"></script>
    <script src="./assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- custom js file -->
    <script type="module" src="./assets/js/script1.js"></script>
</body>

</html>