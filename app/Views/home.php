<section id="home-jumbotron" class="section jumbotron jumbotron-fluid  vertical-center ">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <h2 class="home-headline clip mb-0">Emmanuel Sogelola</h2>
                <h2 class="text-color">
                    <b class="typewrite" data-period="2000" data-type='["Software Developer.","Game Developer.","Data Science Enthusiast."]'>
                        <span class="wrap"> </span>
                    </b>
                </h2>
                <p class="mt-3">
                    <span class="ti-book"></span> I'm currently a student at Georgebrown College studying Computer Programming.
                    <br><span class="ti-layers-alt"></span> Proficient in Java, C++, C# and Python.
                    <br><span class="ti-layout"></span> Occasionally developing web apps using various frameworks (Django/Flask, React, ASP.NET, PHP).
                </p>
                <div class="widget footer-widget mt-0">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="https://www.linkedin.com/in/emmanuelsogelola/" target="_blank"><i class="ti-linkedin mr-3"></i></a>
                        </li>
                        <li class="list-inline-item"><a href="https://twitter.com/_esog" target="_blank"><i class="ti-twitter mr-3"></i></a>
                        </li>
                        <li class="list-inline-item"><a href="https://github.com/esogelola/" target="_blank"><i class="ti-github mr-3"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <img class="heading-img" style="  max-width: 100%;" src="static/img/main_computer.png">
            </div>
        </div>
    </div>
</section>

<section class="section skills-home" id="skills">
    <div class="container">
        <div class="row" class="aos-init aos-animate" data-aos="fade-up">
            <div class="col-lg-6">
                <h2 class="mb-2 float">Skills</h2>
                <p class="mb-5"></p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <div class="skills-item mb-5" data-aos="fade-left">
                    <i class="ti-layout-media-right-alt"></i>
                    <h4 class="my-3">Language Proficiency</h4>
                    <p>Specialized understanding of <b>Java</b> and a high proficiency in other languages such as <b>C++</b>, <b>C#</b> and <b>Python.</b></p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="skills-item mb-5" data-aos="fade-left" data-aos-delay="450">
                    <i class="ti-desktop"></i>
                    <h4 class="my-3">Web Frameworks</h4>
                    <p>Developed web apps using <b>Django</b>, <b>ASP.Net</b>, <b>React</b>, <b>NodeJS</b> and PHP Frameworks such as <b>Laravel</b> and <b>CodeIgniter</b>.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="skills-item mb-5 mb-lg-0" data-aos="fade-left" data-aos-delay="750">
                    <i class="ti-settings"></i>
                    <h4 class="my-3">Tools </h4>
                    <p><b>Visual Studio</b> for C++ and C# development. <b>Eclipse</b> for Java based applications. <b>MySQL Workbench</b> for database management and <b>JIRA</b>, <b>Slack</b>, <b>Git</b> and <b>Trello</b> for Agile Project Management.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="skills-item" data-aos="fade-left" data-aos-delay="750">
                    <i class="ti-stats-up"></i>
                    <h4 class="my-3">Data Science</h4>
                    <p>Experience using statistical computer languages such as <b>Python</b>, <b>SQL</b> and <b>Ruby</b> to manipulate data and draw insights from large data sets.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="skills-item mb-5" data-aos="fade-left" data-aos-delay="950">
                    <i class="ti-game"></i>
                    <h4 class="my-3">Game Development</h4>
                    <p>Developed numerous games in <b>Unity</b>, <b>Unreal</b>, <b>GameMaker</b>, <b>libGDX</b> and <b>lwjgl</b>. Read and utilized <em>Game Engine Architecture</em> by <em>Jason Gregory</em> and developed a light weight game engine from scratch.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="skills-item mb-5 mb-lg-0" data-aos="fade-left" data-aos-delay="1050">
                    <i class="ti-package"></i>
                    <h4 class="my-3">Additional Skills</h4>
                    <p>Through school I have learned <b>Database Management</b>, <b>Linux Fundamanetals</b>, <b>Programming Design Patterns</b>, <b>Software Development Life Cycle</b> and the importance of <b>Scrum</b>. </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section" id="projects">
    <div class="container">
        <div class="row" class="aos-init aos-animate" data-aos="fade-up">
            <div class="col-lg-6">
                <h2 class="mb-2 float ">Projects</h2>
                <p class="mb-5"></p>
            </div>



            <div class="col-md-12 col-lg-6 text-left text-lg-right" data-aos="fade-up" data-aos-delay="150">
                <div id="filters" class="filters">
                    <a href="#" data-filter="*" class="active">All</a>
                    <a href="#" data-filter=".java">Java</a>
                    <a href="#" data-filter=".web, .asp, .django, .flask, .php">Web</a>
                    <a href="#" data-filter=".C, .cpp, .csharp">C++/C#</a>
                    <a href="#" data-filter=".py, .python">Python</a>
                </div>
            </div>
        </div>
        <div id="portfolio-grid" class="row no-gutter" data-aos="fade-up" data-aos-delay="200">
            <p class="text-center  <?= count($projects) > 0 ? 'd-none' : ''; ?>">No projects available.</p>
            <?php foreach ($projects as $project) : ?>
                <div class="portfolio-item <?php foreach (explode(",", $project['project_type']) as $attr) echo $attr . " " ?> col-sm-6 col-md-4 col-lg-4 mb-4">
                    <a href="<?= base_url("/project/" . url_title($project['project_name'], '_', TRUE)) ?>" class="portfolio-item-wrap">
                        <div class="portfolio-info">
                            <h3 style="color: white"><?= $project['project_name'] ?></h3>
                            <span><?= explode(",", $project['project_type'])[0] ?></span>
                        </div>
                        <img class="img-fluid" src="<?= $project_model->getImages(url_title($project['project_name'], '_', TRUE))[0]['real_path'] ?>">
                    </a>
                </div>
            <?php endforeach ?>

        </div>

    </div>
    </div>
</section>
<section class="section " id="Contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2 class="mb-2 float ">Contact</h2>
                <p class="mb-5">Leave a message below, I'd love to hear from you!</p>
            </div>
        </div>
    </div>

    <div class="container " id="contactForm">
        <form class="email" role="form" method="post" id="contactForm" data-toggle="validator" action="/sendEmail" data-aos="fade-right" data-aos-duration="750">
            <div class="form-group label-floating">
                <label class="control-label" for="name">Name</label>
                <input class="form-control" id="name" type="text" name="name" value="" required data-error="Please enter your name">
            </div>
            <div class="form-group label-floating">
                <label class="control-label" for="email">Email</label>
                <input class="form-control" id="email" type="email" name="email" value="" required data-error="Please enter your Email">


            </div>
            <div class="form-group label-floating">
                <label class="control-label">Subject</label>
                <input class="form-control" id="msg_subject" type="text" name="subject" value="" required data-error="Please enter your message subject">

            </div>
            <div class="form-group label-floating">
                <label for="message" class="control-label">Message</label>
                <textarea class="form-control" rows="3" id="message" name="message" required data-error="Write your message"></textarea>
            </div>

            <div class="form-submit mt-5">
                <button class="btn" type="submit" name="contactSubmit" id="form-submit" value="submit"><i class="fas fa-envelope"></i> Send Message</button>
                <div class="h3 text-center hidden"></div>
                <div class="clearfix"></div>
            </div>
        </form>

    </div>
</section>
