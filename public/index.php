<?php require_once('../private/initialize.php');?>
<?php $page_title = 'Portfolio'; ?>
<?php require_once(SHARED_PATH . '/header.php');?>
<?php
if($_SESSION['waslat']){
    echo 
    '<script>
        alert("c bon la79at");
    </script>';
    $_SESSION['waslat'] = false;
}


?>
<div class="container-fluid">
    <nav id="nav">
        <div class="logo">
          <a href="#accueil"> <img class="" src="images/logo3.png" alt="" id="logo"></a>
        </div>
        <ul class="navbar">
           
            <li> <a href="#projects" class="link">projets</a></li>
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
    
    <div class="accueil" id="accueil">
        <div class="text intro">
            <div class="hello_area" data-aos="fade-right" data-aos-duration="3000" >
            
                <h1 class="titre" >𝓗𝓮𝓵𝓵𝓸..! <br> 𝓙𝓮 𝓶'𝓪𝓹𝓹𝓮𝓵𝓵𝓮 𝓛𝓪𝓶𝓲𝓷𝓮  </h1>
                <p class="description"><i class="quote teal left icon"></i>Je suis un Developpeur Web <br>
                FULL STACK Front-End & Back-End <br> à Alger. <br>
                Bienvenue sur mon portfolio!  <i class="quote teal right icon"></i></p>
                <a href="#contact">Contactez moi</a>
            </div><!-- end class hello_area -->
            <div>
            
                <img src="images/pc1.png" alt="mkch" data-aos="fade-left" data-aos-easing="ease-in-back" data-aos-duration="3000" >
                   
            </div>
        </div><!-- end class text -->
        <div class="button top" >
           <a href="#accueil" > <i class="fas fa-angle-double-up fa-2x" id="button_top"></i></a>
           
        </div>
        
    </div><!-- end class accueil -->
    
    <section class="section_project" id="projects">
            <h1 class="titre" >Mes projets</h1>
            <hr>
                 
                <div class="projets">
                    <?php
                    for($i=0;$i<1;$i++){
                        echo '<div class="item">
                        <div class="face1">
                        <img src="images/Capture.png" alt="">
                        </div>
                         
                         <div class="face2">
                         <h3>Application</h3>
                         <p>application de gestiuon clientèle realisé avec html5/css3 php</p>
                         </div>
                     </div>
 
                     <div class="item">
                         <div class="face1">
                        <img src="images/Capture1.png" alt="">
                        </div>
                         
                         <div class="face2">
                         <h3>Site Web DMC</h3>
                         <p>application de gestiuon clientèle realisé avec html5/css3 php</p>
                         </div>
                     </div>
 
                     <div class="item">
                         <div class="face1">
                         <img src="images/Capture3.png" alt="">
                         </div>
                         
                         <div class="face2">
                         <h3>Site web RuePc</h3>
                         <p>application de gestiuon clientèle realisé avec html5/css3 php</p>
                         </div>
                     </div>
 ';
                    }
                    ?>
                  

                </div>
              
               <form action="" method="POST">
                        <button class="ui orange button">Voir Plus ...</button>
                </form> 
                            
           

    </section><!-- end section_project -->

    <section class="section_services" id="services">
            <h1 class="titre">Services</h1>
            <hr>
            <div class=" container">
       
                <div class="services">
                   
                    <div class="svs_item" data-aos="fade-up">
                        <div class="line line1"></div><!-- line1 -->
                            <div class="service">
                                <i class="edit big icon"></i>
                                <h3>Conception graphique</h3>
                                    <p>Création de logo, maquettes design de tous supports web (prototypage)
                                        est créée sur mesure pour répondre aux besoins de votre cible.</p>
                                   
                            </div>
                        <div class="line line2"></div><!-- line1 -->
                    </div>
                    <div class="svs_item" data-aos="fade-up">
                        <div class="line line1"></div><!-- line1 -->
                            <div class="service">
                                <i class="code big icon" ></i>
                                <h3>Développement web</h3>
                                    <p>développer tous types de sites internet :
                                         site vitrine, site catalogue, site e-commerce, 
                                         responsive site web sur mesure .</p>

                            </div>
                        <div class="line line2"></div><!-- line1 -->
                    </div>

                   
                    <div class="svs_item" data-aos="fade-up">
                        <div class="line line1"></div><!-- line1 -->
                            <div class="service">
                                <i class="mobile alternate big icon"></i>
                                <h3>RESPONSIVE DESIGN</h3>
                                <p>Compatible tous supports, tablette & application mobile.</p>

                            </div>
                        <div class="line line2"></div><!-- line1 -->
                    </div>
                    
                    <div class="svs_item" data-aos="fade-up">
                        <div class="line line1"></div><!-- line1 -->
                            <div class="service">
                                <i class="images outline big icon"></i>
                                <h3>INTÉGRATION WEB</h3>
                                <p>Des intégrations HTML / CSS
                                respectueuses des standards du Web.</p>

                            </div>
                        <div class="line line2"></div><!-- line1 -->
                    </div>
                    <div class="svs_item" data-aos="fade-up">
                        <div class="line line1"></div><!-- line1 -->
                            <div class="service">
                                <i class="code big icon"></i>
                                <h3>DÉVELOPPEMENTS SPÉCIFIQUES</h3>
                                <p>Des outils adaptés à votre coeur de métier,
                                applications & solutions personnalisées.</p>

                            </div>
                        <div class="line line2"></div><!-- line1 -->
                    </div>
                    <div class="svs_item" data-aos="fade-up">
                        <div class="line line1"></div><!-- line1 -->
                            <div class="service">
                                <i class="database big icon"></i>
                                <h3>GESTION DE BASE DONNEE</h3>
                                <p>Des outils adaptés à votre coeur de métier,
                                applications & solutions personnalisées.</p>

                            </div>
                        <div class="line line2"></div><!-- line1 -->
                    </div>
                </div>
        

            </div><!-- end container -->
    </section><!-- end section_services -->

    <section class="section_propos" id="propos">
        <h1 class="titre">A propos</h1>
        <hr>
            
            <div class="propos">
                <div class="my_photo" data-aos="fade-right" data-aos-duration="3000">
                    <img src="images/IMG_0571.png" alt="">
                </div>
                <div class="details" data-aos="fade-left" data-aos-duration="3000">
                <p class="description">
                    Salut! Je m'appelle GAci mohamed lamine, <br/>Algerien habité a alger, je suis un developpeur web<br/> spécialisée 
                    dans la création et la refonte<br/>  de sites web et apllication web<br/>
                    Je travaille avec :<br/>
                    
                </p>
            
                <p class="competence">HTML/CSS | Bootstrap | Semantic UI | JQuerry | PHP | Mysql</p>

                
                <marquee behavior="" direction="left" height="80" width="500">  𝓙𝓮 𝓼𝓾𝓲𝓼 𝓭é𝓿𝓮𝓵𝓸𝓹𝓹𝓮𝓾𝓻 𝔀𝓮𝓫 𝓲𝓷𝓭é𝓹𝓮𝓷𝓭𝓪𝓷𝓽</marquee>
                </div>
                

            </div>
        
            
           
    </section><!-- end section_propos -->

    <section class="section_contact" id="contact">
        <h1 class="titre">Contact</h1>
        <hr>
            <div class="ui container">
                
                <div class="contacts">
                   
                        <div class="left">
                                <p>
                                Si vous êtes intéressé à travailler ensemble, remplissez le formulaire ci-dessous et 
                                décrivez votre projet. Je vous répondrai dès que possible.<br> s'il vous plaît, attendez 
                                quelques jours pour que je réponde
                                </p>
                        </div>
                        <div class="right">
                            <div class="form-control">
                                <form method="POST" action="administrateur/messages/add_message.php" class="form">
                                        <div class="field" data-aos="fade-left"   data-aos-delay="300"
                                                        data-aos-offset="0"  data-aos-easing="ease-in-back">
                                            <input class="field-input" type="text" name="nom" placeholder="Nom">
                                        </div>
                                        <div class="field" data-aos="fade-left"   data-aos-delay="300"
                                                         data-aos-offset="0"  data-aos-easing="ease-in-back">
                                            <input class="field-input" type="text" name="prenom" placeholder="prenom">
                                        </div>
                                        <div class="field" data-aos="fade-left"   data-aos-delay="300"
                                                        data-aos-offset="0"  data-aos-easing="ease-in-back">
                                            <input class="field-input" type="text" name="email" placeholder="e-mail">
                                        </div>
                                        <div class="field" data-aos="fade-left"   data-aos-delay="300"
                                                        data-aos-offset="0"  data-aos-easing="ease-in-back">
                                        <textarea class="field-input message" row="6" placeholder="Message" name="message"></textarea>
                                        </div>
                                        <input type="submit" value="Annuler" class="btn annuler" data-aos="fade-left"   data-aos-delay="300"
                                                        data-aos-offset="0"  data-aos-easing="ease-in-back">
                                        <input type="submit" value="Envoyer" class="btn envoyer" data-aos="fade-left"   data-aos-delay="300"
                                                        data-aos-offset="0"  data-aos-easing="ease-in-back">
                                   
                                </form>
                            </div>
                        <!-- <marquee behavior="" direction="down" height="100" width="200" bgcolor="white">  Scrolling text</marquee> -->
                        </div>
                       
                   

                   
                   
                </div>
        

            </div><!-- end container -->
    </section><!-- end section_contact -->

    <footer>
        <div class="ui container">
            <div class="footer_content">
                <div class="left">
                    <img src="images/logo3.png" alt="">
                    <ul>
                        <li>projets</li>
                        <li>services</li>
                        <li>a propos</li>
                        <li>contact</li>
                    </ul>
                </div>
                <div class="middle">
                    
                   <h3>Langue</h3>
                   <ul>
                       <li>Français</li>
                   </ul>
                </div>
                <div class="right">
                    <h3>Me contactez</h3>
                        <ul>
                            <li><i class="map marker alternate icon"></i>Adresse : Souidania - Alger - Algerie</li>
                            <li><i class="phone icon"></i>Tel : 0699472366</li>
                            <li><i class="envelope open icon"></i>Email : mohamed61laine@gmail.com</li>
                            <li>
                                <div class="reseau-sociaux">
            
                                <a href="https://web.facebook.com/mohamed.lamine.dev?ref=bookmarks" rel="noopener noreferrer" target="_blank">
                            
                                <i class="fab fa-facebook-square"></i>
                                
                                </a>
                                
                                <a href="https://www.instagram.com/med_lam.lamine/?hl=en" rel="noopener noreferrer" target="_blank">
                                
                                <i class="fab fa-instagram"></i>
                                
                                </a>
                                
                                <a href="http://google.com" rel="noopener noreferrer" target="_blank">
                                
                                <i class="fab fa-github"></i>
                                
                                </a>

                                </div> <!-- end class reseau-sociaux -->
                            </li>
                            
                        </ul>
                   
                </div>
            </div>
            <hr class="footer-hr">
            <p class="copyright"> 2019-2020 Mon Portfolio  -Tous les droits sont réservés.</p>
        </div>
      

       <!-- <div style="width:200px;  height:200px; background-color:#D14233;">
            <figure class="imghvr-push-up" style="background-color:white;">
            <img src="images/pc1.png">
            <figcaption>
               <form action="">
                    <input type="submit">
                    <input type="submit">
               </form>
            </figcaption>
            </figure>
       </div> -->
             
    </footer><!-- end footer -->

     

</div>

<script>



const navSlid = () => {
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.navbar');
    const navLinks = document.querySelectorAll('.navbar li');
    const navbar = document.getElementById('nav');
   

    burger.addEventListener('click', () => {
            //toggle
            nav.classList.toggle("nav-active");
            navbar.style.background = '#333';
            
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
            nav.style.background = '#333';
            nav.style.boxShadow = '0px 0px 32px 1px rgba(255, 255, 255)';
            nav.style.height = "6vh";
            document.getElementById('logo').style.width = '40%'
            button_top.style.color = '#53b4e5';
            button_top.style.border = "1px solid #53b4e5";
            button_top.style.borderRadius = "50%";
           
            
           
        }else {
            nav.style.background = "transparent";
            nav.style.boxShadow = '0px 10px 32px 18px rgba(255, 255, 255,0)';
            nav.style.height = "8vh";
            document.getElementById('logo').style.width = '50%'
            document.getElementById('logo').style.transition = '0.5s'
            button_top.style.color = 'rgb(255,255,255,0)'; 
            button_top.style.border = "none";
           
            
        }
    }

</script>

<?php require_once(SHARED_PATH . '/footer.php');?>
