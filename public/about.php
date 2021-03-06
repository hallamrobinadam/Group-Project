<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/connect.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php include_once("../includes/templates/header.php"); ?>
<?php include_once("../includes/templates/nav.php"); ?>
<?php include("../includes/templates/banner.php"); ?>
            
        
<!-- Group member photo and small summary of the individual. -->
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h2> Adam Hale</h2>
                        <img src= "https://fbcdn-sphotos-f-a.akamaihd.net/hphotos-ak-xfp1/v/t1.0-9/10985274_10203779385430290_7669110639618425300_n.jpg?oh=aebec59d2ccadb5924b879633f4fd709&oe=555402A1&__gda__=1435135940_e164b5a28f90e31f7b6a47d562877705"  class="img-responsive"/>
                    <a class="list-group-item">Hi, my name is Adam Hale. I'm 18 and from Oxford. I am passionate about Social media, music and film. </a>               
                    
                    
                </div>
                <div class="col-lg-4">
                    <h2> Hallam Ager</h2>
                    <img src="https://scontent-lhr.xx.fbcdn.net/hphotos-xpa1/v/t1.0-9/10574274_10203109790842816_6906926752620006251_n.jpg?oh=f35ff3c69409fd1f2a0ff37397f7e3a6&oe=5585F929 "  class="img-responsive"/> 
                    <a class="list-group-item">Hi, my name is Hallam Ager. I'm 19 and from Norwich. I have keen interests in sports, music and all forms of media. </a>
                </div>
                <div class="col-lg-4">
                    <h2> Robin Osolinski</h2>
                    <img src="images/adamprofile.jpg" class="img-responsive"/> 
                    <a class="list-group-item">Hi my name's Robin Osolinski, I'm 20 and I'm from Sweden. My main interests are music, films and books. </a>
                </div>
            </div>
        </div>

<!-- Group photo and small summary of individuals role. -->


            <div class="container"> 
            <div class="row">
                <div class="col-lg-6">
                    
                    <img src="images/teamprofile.jpg" class="img-responsive"/>
                </div>
                    
            
                    <div class="col-md-6">
                        <div class="list-group">
                            <a href="#" class="list-group-item active">
                                Adam's Role
                            </a>
                            <a href="#" class="list-group-item">Adam helped with the code of the about page, our Wiki and our GitHub.</a>
                        </div>
                        
                        <div class="list-group">
                            <a href="#" class="list-group-item active">
                                Hallam's Role
                            </a>
                            <a href="#" class="list-group-item">Hallam coded the main page of the site, where each item can be seen.</a>
                        </div>

                        <div class="list-group">
                            <a href="#" class="list-group-item active">
                                Robin's Role
                            </a>
                            <a href="#" class="list-group-item">Robin helped with the visual elements, coming up with concepts for branding.</a>
                        </div>
                    </div>
                </div>
            </div>
            
<?php include_once("../includes/templates/footer.php"); ?>