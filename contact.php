<?php
/**
/* Template Name: Contact
 *
 * Displays Only Contact template
 *
 * @package WordPress
 * @subpackage webino
 * @since webino 1.0
 */
 get_header(); ?>

    <section class="upcoming-seminar pb--md-0 padding-top padding-bottom" id="seminer-schedule">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-header-1">
                        <h2 class="title">
                            <span class="underline-text">
                                <a href="#0"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/schedule/contact.png" alt="schedule"></a>
                            </span>
                        </h2>
                    </div>
                </div>
            </div>


            <form>
                <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group"><label class="control-label"></label><input type="text" name="" placeholder="First Name" class="form-control" required/></div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group"><label class="control-label"></label><input type="text" name="" placeholder="Last Name" class="form-control" required/></div>
                    </div>
                </div>
                                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group"><label class="control-label"></label><input type="email" name="" placeholder="Enter E-mail Address" class="form-control" required/></div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group"><label class="control-label"></label><input type="text" name="" placeholder="Mobile/Whatsapp Number" class="form-control" required/></div>
                    </div>
                </div>
                  <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group"><textarea class="form-control rounded-0" id="exampleFormControlTextarea1" rows="5"></textarea></div>
                    </div>
                    
                </div>
               <button name="" type="submit" class="btn btn-primary">Submit</button> 
            </div>
            </form>
    </section>

<?php get_footer(); ?>