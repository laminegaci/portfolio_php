<?php require_once('../private/initialize.php');?>

<?php require_once('../private/shared/header.php');?>

<div class="container-fluid">
    <nav id="nav">
        <div class="logo">
           <img src="images/logo3.png" alt="">
        </div>
        <ul class="navbar">
           
            <li> <a href="#projects" class="link">projects</a></li>
            <li><a href="#services" class="link">Services</a></li>
            <li><a href="#propos" class="link">A propos</a></li>
            <li><a href="#contact" class="link">contact</a></li>
       
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
</nav><!-- end nav -->
    
    <div class="accueil" id="acccueil">
        <div class="text">
            <h1 class="titre">Developpeur Web FULL STACK </h1>
        
            <p class="description">
                Salut! Je m'appelle GAci mohamed lamine, <br/>Algerien habité a alger, je suis un developpeur web spécialisée 
                dans la création et la refonte<br/>  de sites web et apllication web<br/>
                Je travaille avec :<br/>
                
            </p>
            
            <p class="competence"><i>HTML/CSS | Bootstrap | Semantic UI | JQuerry | PHP | Mysql </i></p>
            
            
           
        </div>
        <!-- end class text -->
        <div class="reseau-sociaux">
        
             
            <a href="http://google.com" rel="noopener noreferrer" target="_blank">
           
            <i class="fab fa-facebook-square"></i>
            
            </a>
            
            <a href="http://google.com" rel="noopener noreferrer" target="_blank">
            
            <i class="fab fa-instagram"></i>
            
            </a>
            <a href="http://google.com" rel="noopener noreferrer" target="_blank">
            
            <i class="fab fa-youtube"></i>
            
            </a>
            <a href="http://google.com" rel="noopener noreferrer" target="_blank">
            
            <i class="fab fa-github"></i>
            
            </a>

        </div> <!-- end class reseau-sociaux -->
        <div class="button top" >
           <a href="#acccueil"> <i class="fas fa-angle-double-up fa-3x" id="button_top" ></i></a>
           
        </div>
        
    </div><!-- end class accueil -->
    
    <section class="section_project" id="projects">
            <h1 class="titre">Mes projets</h1>
            
            <div class="ui container">
                <div class="cards_projets">
                    
                    <?php for ($i=1; $i <= 5; $i++) { 
                        echo '
                        
                        <div class="ui medium image">
                            <div class="ui dimmer">
                                <div class="content">
                                <h2 class="ui inverted header">Title</h2>
                                <div class="ui primary button">Add</div>
                                <div class="ui button">View</div>
                                </div>
                            </div>
                            <img class="ui image" src="images/hd_ffab35efe49bf028b5e735620f5068ea.jpg">
                         </div>
                        
                        ';
                    } ?>
                    
                   
                    
                </div>
                
            </div><!-- end container -->

    </section><!-- end section_project -->

    <section class="section_services" id="services">
            <div class="ui container">
                
           
                <h1 class="titre">Services</h1>
              
                <div class="services">
                    <div >
                    <i class="far fa-object-group fa-5x"></i>
                        <h2>Website Design</h2>

                    </div>
                    <div >
                    <i class="fas fa-code fa-5x"></i>
                        <h2>website development</h2>

                    </div>
                    <div >
                    <i class="fas fa-mobile-alt fa-5x" ></i>
                        <h2>Responsive Web Design</h2>

                    </div>
                    <div >
                        <i class="fab fa-accusoft fa-5x"></i>
                        <h2>App Design</h2>

                    </div>
                </div>
        

            </div><!-- end container -->
    </section><!-- end section_services -->

    <section class="section_propos" id="propos">
            <div class="ui container">
                
           
                <h1 class="titre">A propos</h1>
                <p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
                <div class="services">
                    <div >

                    </div>
                </div>
        

            </div><!-- end container -->
    </section><!-- end section_propos -->
     

</div>

<script>

$('.event.example .image')
  .dimmer({
    on: 'hover'
  })
;

const navSlid = () => {
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.navbar');
    const navLinks = document.querySelectorAll('.navbar li');
    const navbar = document.getElementById('nav');

    burger.addEventListener('click', () => {
            //toggle
            nav.classList.toggle("nav-active");
            navbar.style.background = 'linear-gradient(to right, #20002c, #cbb4d4)';
            //animate line
            navLinks.forEach((link, index)=>{
                if(link.style.animation){
                    link.style.animation = '';
                } else {
                    link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.5}s`;

                }
            }); 
            //burger animat
            burger.classList.toggle('toggle');
    });  
     
     
}

navSlid();

    var nav = document.getElementById('nav');
    var button_top = document.getElementById('button_top');
    

    window.onscroll = function(){
        if(window.pageYOffset > 50) {
            nav.style.background = 'linear-gradient(to right, #20002c, #cbb4d4)';
            nav.style.boxShadow = '0px 0px 32px 1px rgba(255, 255, 255)';
            button_top.style.color = 'rgb(255,255,255)';
        }else {
            nav.style.background = "transparent";
            nav.style.boxShadow = '0px 10px 32px 18px rgba(255, 255, 255,0)';
            button_top.style.color = 'rgb(255,255,255,0)';    
            
        }
    }

</script>

<?php //require_once('../private/shared/footer.php');?>
