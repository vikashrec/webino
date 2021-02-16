<?php
/**
/* Template Name: Apply
 *
 * Displays Only Apply template
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
                                training & placement
                            </span>
                        </h2>
                    </div>
                </div>
            </div>
            <form>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                         <div class="form-group"><label class="control-label">First Name</label><input type="text" name="" placeholder="" class="form-control" required/></div>   
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group"><label class="control-label">Last Name</label><input type="text" name="" placeholder="" class="form-control" required/></div>  
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group"><label class="control-label">E-mail</label><input type="email" name="" placeholder="" class="form-control" required/></div>  
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group"><label class="control-label">Mobile Number</label><input type="number" name="" placeholder="" class="form-control" required/></div> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                         <div class="form-group"><label class="control-label">Gender</label><select class="form-control" name=""><option value="X">Option</option><option value="M">Male</option><option value="F">Female</option></select></div> 
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group"><label class="control-label">DOB</label><input type="date" name="" class="form-control" required/></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                        <div class="form-group"><label class="control-label">Objactive</label><textarea class="form-control rounded-0" id="exampleFormControlTextarea1" rows="3"></textarea></div>
                    </div></div>
                    <div class="row">
                        <div class="col-sm-12">
                           <div class="form-group"><label class="control-label">Skill</label>
                            <div class="form-check"><label class="form-check-label"><input type="checkbox" class="form-check-input" name="[]" value="Website">HTML,CSS,Bootstrep</label></div>
                            <div class="form-check"><label class="form-check-label"><input type="checkbox" class="form-check-input" name="[]" value="wordpress">Wordpress</label></div>
                            <div class="form-check"><label class="form-check-label"><input type="checkbox" class="form-check-input" name="[]" value="Php">PHP</label></div>
                            <div class="form-check"><label class="form-check-label"><input type="checkbox" class="form-check-input" name="[]" value="Php">Python</label></div>
                            <div class="form-check"><label class="form-check-label"><input type="checkbox" class="form-check-input" name="[]" value="Sql">SQL</label></div>
                            <div class="form-check"><label class="form-check-label"><input type="checkbox" class="form-check-input" name="[]" value="Larave">Laravel</label></div>
                            <div class="form-check"><label class="form-check-label"><input type="checkbox" class="form-check-input" name="[]" value="android">Android Development</label></div>
                            <div class="form-check"><label class="form-check-label"><input type="checkbox" class="form-check-input" name="[]" value="sap">SAP</label></div>
                            <div class="form-check"><label class="form-check-label"><input type="checkbox" class="form-check-input" name="[]" value="DTP">Graphics Design</label></div>
                            <div class="form-check"><label class="form-check-label"><input type="checkbox" class="form-check-input" name="[]" value="GC">Good Communication Skill</label></div></div> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group"><label class="control-label">Payment expectation (Annually in INR )</label><input type="text" name="" placeholder="" class="form-control" /></div>
                        </div>
                        <div class="col-sm-6">
                            
                        </div>
                    </div>
                    <button name="" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
    </section>

<?php get_footer(); ?>