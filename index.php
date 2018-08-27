<?php

defined('_JEXEC') or die;


/** @var JDocumentHtml $this */

$app  = JFactory::getApplication();
$user = JFactory::getUser();
$doc = JFactory::getDocument();






// Output as HTML5
$this->setHtml5(true);
// Detecting Active Variables
$option   = $app->input->getCmd('option', '');
$view     = $app->input->getCmd('view', '');
$layout   = $app->input->getCmd('layout', '');
$task     = $app->input->getCmd('task', '');
$itemid   = $app->input->getCmd('Itemid', '');
$sitename = htmlspecialchars($app->get('sitename'), ENT_QUOTES, 'UTF-8');

if ($task === 'edit' || $layout === 'form')
{
	$fullWidth = 1;
}
else
{
	$fullWidth = 0;
}


// Add template js
JHtml::_('script', 'template.js', array('version' => 'auto', 'relative' => true));

// Add html5 shiv
JHtml::_('script', 'jui/html5.js', array('version' => 'auto', 'relative' => true, 'conditional' => 'lt IE 9'));

// Add Stylesheets
JHtml::_('stylesheet', 'template.css', array('version' => 'auto', 'relative' => true));


?>



<!DOCTYPE html>
<html>

    <head>
        <title>Agma Theme</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link type="text/css" rel="stylesheet" href="templates/agmaTheme/css/bootstrap.min.css" >
        <link type="text/css" rel="stylesheet" href="templates/agmaTheme/css/icon/font/css/open-iconic-bootstrap.min.css" >
        <link  rel="stylesheet" media="screen"  href="templates/agmaTheme/css/superfish.css" >
        <link type="text/css" rel="stylesheet" href="templates/agmaTheme/css/style.css" >


    </head>

    <body>
        
        <header class="container shadow p-3 mb-2 bg-white rounded mt-3 " role="banner">
                <div class="row">   
                        <div class="col"> 
                            <img src="templates/agmaTheme/images/logo_lahlou.gif" class="img-fluid">
                        </div>
                
                        <div  class="col-auto">

                                <nav class="nav">
                                <jdoc:include type="modules" name="nav" style="html5" /> 
                                     </nav>
                                    

                            <div class="text-right mr-3 mt-1">
                                  <img src="templates/agmaTheme/images/facebook.png" class="img-fluid mt-1">
                                  <img src="templates/agmaTheme/images/linkedin.png" class="img-fluid mt-1">
                            </div>
                           

                                 <jdoc:include type="modules" name="search" style="html5" /> 
               
                             
                        </div>
                     </div>
                     <div class="row mt-1">
                        <div class="col-12 text-center">
                            
                                <div class="menu-menu2-container  d-flex justify-content-center"><ul id="menu-menu2" class="sf-menu"><li id="menu-item-1769" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1769"><a href="#">AGMA QUI SOMMES NOUS?</a>
                                    <ul class="sub-menu">
                                        <li id="menu-item-1775" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1775"><a href="#">le mot du président</a></li>
                                        <li id="menu-item-1776" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1776"><a href="#">Notre mission</a></li>
                                        <li id="menu-item-1777" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1777"><a href="#">Notre gouvernance</a></li>
                                        <li id="menu-item-1778" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1778"><a href="#">Finances et actionnaires</a>
                                        <ul class="sub-menu">
                                            <li id="menu-item-1779" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1779"><a href="#">Nos chiffres clés</a></li>
                                        </ul>
                                    </li>
                                        <li id="menu-item-1780" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1780"><a href="#">Le Systeme de Management de la Qualite</a>
                                        <ul class="sub-menu">
                                            <li id="menu-item-1781" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1781"><a href="#">Certification</a></li>
                                            <li id="menu-item-1782" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1782"><a href="#">Politique Qualité</a></li>
                                        </ul>
                                    </li>
                                    </ul>
                                    </li>
                                    <li id="menu-item-1770" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1770"><a href="#">ASSURANCE ENTREPRISES</a></li>
                                    <li id="menu-item-1771" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1771"><a href="#">ASSURANCE PARTICULIERS</a></li>
                                    <li id="menu-item-1772" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1772"><a href="#">CONSEIL EN ASSURANCE &#038; REASSURANCE</a></li>
                                    <li id="menu-item-1773" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1773"><a href="#">L&#8217;ESSENTIEL DE L&#8217;ASSURANCE</a></li>
                                    <li id="menu-item-1774" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1774"><a href="#">COMMUNICATION FINANCIERE</a></li>
                                    </ul></div>

                        </div>
                     </div>   
        </header>
        
        <div class="container shadow p-2 mb-2 bg-white rounded">

<div class="row">

    <div class="col-md-8">
       <!--Slide -->

       <div class="row mt-1">
            <div class="col-5">
             
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Mot du Président</h5>
                    <p class="card-text">Bienvenue sur le site d'AGMA , votre assureur conseil de référence !</p>
                  <div class="text-right">
                    <a href="#" class="btn btn-primary"> <span class="oi oi-plus"></span> Lire plus</a>
                  </div>
                  </div>
                </div>
                <div class="card mt-1">
                      <div class="card-header">Actualités</div>
                      <div class="card-body text-center">
                        
                               <!--Chihaja -->



                      <div class="text-right mt-2">
                           <a href="#" class="btn btn-primary"> <span class="oi oi-plus"></span> Tous les articles</a>  
                      </div>
                      </div>
                      
                </div>

            </div>
            <div class="col-7 " >
              <ul class="nav nav-tabs">
                  <li class="nav-item" >
                    <a class="nav-link active" data-toggle="tab" href="#home" style="background-color:#B3DD59; color:white;font-weight:bold;width:140px;text-align:center;">Conseils en assurance</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#menu1" style="background-color:#1a97d1; color:white;font-weight:bold;width:140px;text-align:center;">L’essentiel de l’assurance</a>
                  </li>
                
              </ul>

                <div class="tab-content">
                      <div class="tab-pane container active" id="home" style="background-color:#B3DD59;height:250px;">
                        <h6>Conseils en assurance</h6>
                        <a href="#"><span class="oi oi-caret-right" aria-hidden="true"> </span> Habitations et moyens de protection contre le feu</a>
                          <div>
                                Voici quelques conseils simples pour se protéger contre les incendies : Veillez à ce...
                          </div>
                          <a href="#"><span class="oi oi-caret-right" aria-hidden="true"> </span> Conseils et prevention sur la route des vacances</a>
                          <div>
                                Pour éviter les surprises de dernière minute et partir dans les meilleures...
                          </div>
                      </div>
                      <div class="tab-pane container fade" id="menu1" style="background-color:#1a97d1;height:250px;">
                        <h6>Lexique essentiel de l'assurance</h6>
                        <a href="#" style="color:white;"><span class="oi oi-caret-right" aria-hidden="true"> </span> Lexique</a>
                        <div>
                        ACCESSOIRES      Somme due par le souscripteur à l'assureur en sus de la...
                        </div>
                        
                      </div>
                </div>
              </div>
              
       </div>

    </div>
    <div class="col-md-4">
               <!--Side bar -->

    </div>
    

</div>

</div>

        <jdoc:include type="modules" name="footer" style="html5" /> 


        <script src="templates/agmaTheme/js/jquery-3.3.1.min.js"></script>
        <script src="templates/agmaTheme/js/popper.min.js"></script>
        <script src="templates/agmaTheme/js/bootstrap.min.js"></script>
        <script src="templates/agmaTheme/js/hoverIntent.js"></script>
        <script src="templates/agmaTheme/js/superfish.js"></script>
        <script src="templates/agmaTheme/js/supersubs.js"></script>
        
        <script>

                jQuery(document).ready(function(){
                    jQuery('ul.sf-menu').supersubs({
                        minWidth:	12,	 // minimum width of submenus in em units
                        maxWidth:	27,	 // maximum width of submenus in em units
                        extraWidth:	1	 // extra width can ensure lines don't sometimes turn over
                                         // due to slight rounding differences and font-family
                    }).superfish();		 // call supersubs first, then superfish, so that subs are
                                         // not display:none when measuring. Call before initialising
                                         // containing tabs for same reason.
                });
            
            </script>


    </body>

</html>
