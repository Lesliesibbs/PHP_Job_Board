<?php include 'inc/header.php'; ?>


<!-- Intro Banner
================================================== -->
<!-- add class "disable-gradient" to enable consistent background overlay -->
<div class="intro-banner" data-background-image="images/home-background.jpg">
    <div class="container">

        <!-- Intro Headline -->
        <div class="row">
            <div class="col-md-12">
                <div class="banner-headline">
                    <h3>
                        <strong>Hire experts or be hired for any job, any time.</strong>
                        <br>
                        <span>Thousands of small businesses use <strong class="color">Hireo</strong> to turn their ideas into reality.</span>
                    </h3>
                </div>
            </div>
        </div>

        <!-- Search Bar -->
        <div class="row">
            <div class="col-md-12">
                <form method="GET" action="index.php">

                    <div class="intro-banner-search-form margin-top-95">
                        <!-- Search Field -->
                        <div class="intro-search-field with-autocomplete">
                            <label for="autocomplete-input" class="field-title ripple-effect">What Field?</label>
                            <select class="selectpicker" name="categories">
                                <?php foreach ($categories as $category) : ?>
                                    <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                                <?php endforeach; ?>
                            </select>

                        </div>

                        <!-- Search Field -->
                        <div class="intro-search-field">
                            <label for="intro-keywords" class="field-title ripple-effect">What job you want?</label>
                            <select class="selectpicker" data-live-search="true">
                                <option>Hot Dog</option>
                            </select>
                        </div>

                        <!-- Button -->
                        <div class="intro-search-button">
                            <input type="submit" class="button ripple-effect" value="Search" />
                        </div>

                    </div>
                </form>
            </div>
        </div>

        <!-- Stats -->
        <div class="row">
            <div class="col-md-12">
                <ul class="intro-stats margin-top-45 hide-under-992px">
                    <li>
                        <strong class="counter">1,586</strong>
                        <span>Jobs Posted</span>
                    </li>
                    <li>
                        <strong class="counter">3,543</strong>
                        <span>Tasks Posted</span>
                    </li>
                    <li>
                        <strong class="counter">1,232</strong>
                        <span>Freelancers</span>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</div>


<!-- Content
================================================== -->

<!-- Features Jobs -->
<div class="section gray margin-top-45 padding-top-65 padding-bottom-75">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">

                <!-- Section Headline -->
                <div class="section-headline margin-top-0 margin-bottom-35">
                    <h3><?php echo $title; ?></h3>
                    <a href="jobs-list-layout-full-page-map.html" class="headline-link">Browse All Jobs</a>
                </div>

                <!-- Jobs Container -->
                <div class="listings-container compact-list-layout margin-top-35">
                    <?php foreach ($jobs as $job) : ?>
                        <!-- Job Listing -->
                        <a href="single-job-page.html" class="job-listing with-apply-button">

                            <!-- Job Listing Details -->
                            <div class="job-listing-details">

                                <!-- Logo -->
                                <div class="job-listing-company-logo">
                                    <img src="images/company-logo-01.png" alt="">
                                </div>

                                <!-- Details -->
                                <div class="job-listing-description">
                                    <h3 class="job-listing-title"> <?php echo $job->job_title; ?> </h3>

                                    <!-- Job Listing Footer -->
                                    <div class="job-listing-footer">
                                        <ul>
                                            <li><i class="icon-material-outline-business"></i> <?php echo $job->company; ?> <div class="verified-badge" title="Verified Employer" data-tippy-placement="top"></div>
                                            </li>
                                            <li><i class="icon-material-outline-location-on"></i> <?php echo $job->location; ?> </li>
                                            <li><i class="icon-material-outline-business-center"></i> Full Time</li>
                                            <li><i class="icon-material-outline-access-time"></i> <?php echo $job->post_date; ?> </li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Apply Button -->
                                <span class="list-apply-button ripple-effect">Apply Now</span>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>

                <!-- Jobs Container / End -->

            </div>
        </div>
    </div>
</div>
<!-- Featured Jobs / End -->

<!-- Category Boxes -->
<div class="section margin-top-65">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">

                <div class="section-headline centered margin-bottom-15">
                    <h3>Popular Job Categories</h3>
                </div>

                <!-- Category Boxes Container -->
                <div class="categories-container">
                    <?php foreach ($categories as $category) : ?>
                        <!-- Category Box -->
                        <a href="jobs-grid-layout-full-page.html" class="category-box">
                            <div class="category-box-icon">
                                <i class="icon-line-awesome-file-code-o"></i>
                            </div>
                            <div class="category-box-counter">612</div>
                            <div class="category-box-content">
                                <h3><?php echo $category->name; ?> </h3>
                                <p>Software Engineer, Web / Mobile Developer & More</p>
                            </div>
                        </a>
                    <?php endforeach; ?>

                </div>

            </div>
        </div>
    </div>
</div>
<!-- Category Boxes / End -->




<?php include 'inc/footer.php'; ?>