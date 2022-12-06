<?php
  require_once("conexao.php");
  $comando = "SELECT * FROM fit";
  $enviar=mysqli_query($conn, $comando);
  $resultado = mysqli_fetch_all($enviar, MYSQLI_ASSOC);
  foreach ($resultado as $fit) {
    $logix=$fit['logixc'];
    $fluig=$fit['fluigs'];
    $rds=$fit['rdss'];
    $email=$fit['emails'];
    $otrs=$fit['otrss'];
    $ibmvault=$fit['ibmvaults'];
    $servicedesk=$fit['servicedesks'];
    $sgu=$fit['sgus'];
  }
    ?>

<!DOCTYPE html>
    <html style="font-size: 16px;" lang="en" class="u-responsive-xl"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="cache-control" content="no-cache">
    <title>Status | Universal</title>
    <link rel="stylesheet" href="./nicepage.css" media="screen">
    <link rel="stylesheet" href="./nicepage-site.css" media="screen">
    <link rel="stylesheet" href="./Page-2.css" media="screen">
    <script class="u-script" type="text/javascript" src="./jquery-3.5.1.min.js.baixados" defer=""></script>
    <script class="u-script" type="text/javascript" src="./nicepage.js.baixados" defer=""></script>
    <link id="u-theme-google-font" rel="stylesheet" href="./css">
    <link id="u-page-google-font" rel="stylesheet" href="./css(1)">
    <meta name="theme-color" content="#478ac9">
    <link rel="icon" type="image/png" href="https://www.universal.org/wp-content/uploads/2021/10/apple-touch-icon-precomposed.png"/>
 
  </head>
  <link rel="icon" type="image/png" href="https://www.universal.org/wp-content/uploads/2021/10/apple-touch-icon-precomposed.png"/>

    <body class="u-body u-xl-mode" data-lang="pt-br">
      <section class="u-align-center u-clearfix u-container-align-center u-image u-shading u-section-1" id="sec-fde7" data-image-width="1920" data-image-height="2813">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h2 class="u-align-center u-text u-text-default u-text-palette-2-base u-text-1"> Sistemas Universal<br>
        </h2>
        <p class="u-align-center u-text u-text-body-color u-text-2"> Confira abaixo o status das aplicações Universal</p>
        <div class="u-expanded-width u-list u-list-1">
          <div class="u-repeater u-repeater-1">
             <div class="u-align-center u-container-align-center u-container-style u-list-item u-repeater-item u-shape-rectangle u-white u-list-item-1" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1"><a href="//sistemas.universal.org.br">
                <div alt="" class="u-border-5 u-border-palette-2-base u-image u-image-circle u-image-1" data-image-width="309" data-image-height="309"></div>
                <h5 class="u-align-center u-text u-text-3">RDS</h5>
                <div class="u-align-left u-social-icons u-spacing-13 u-social-icons-1"> <h5 class="<?php echo $rds; ?>"><input type="text" value="<?php echo $rds; ?>">  </h5></a> 
                  </a>
                 </div>
              </div>
            </div>
            <div class="u-align-center u-container-align-center u-container-style u-list-item u-repeater-item u-shape-rectangle u-white u-list-item-2" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2"><a href="//office.com">
                <div alt="" class="u-border-5 u-border-palette-2-base u-image u-image-circle u-image-2" data-image-width="309" data-image-height="309"></div>
                <h5 class="u-align-center u-text u-text-6"> Outlook</h5>
                <div class="u-align-left u-social-icons u-spacing-13 u-social-icons-2"><h5 class="<?php echo $email; ?>"><input type="text" value="<?php echo $email; ?>">  </h5>
                   </a>
                   </a>
                </div>
              </div>
            </div>
            <div class="u-align-center u-container-align-center u-container-style u-list-item u-repeater-item u-shape-rectangle u-white u-list-item-3" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3"><a href="//fluig.universal.org.br">
                <div alt="" class="u-border-5 u-border-palette-2-base u-image u-image-circle u-image-3"  src="" href="https://fluig.universal.org.br"></div>
                <h5 class="u-align-center u-text u-text-9">Fluig</h5>
                <div class="u-align-left u-social-icons u-spacing-13 u-social-icons-3"><h5 class="<?php echo $fluig; ?>"><input type="text" value="<?php echo $fluig; ?>">  </h5>
                  </a>
                  </div>
              </div>
            </div>
            <div class="u-align-center u-container-align-center u-container-style u-list-item u-repeater-item u-shape-rectangle u-white u-list-item-4" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-4"><a href="//sistemas.universal.org.br">
                <div alt="" class="u-border-5 u-border-palette-2-base u-image u-image-circle u-image-4" data-image-width="206" data-image-height="206"></div>
                <h5 class="u-align-center u-text u-text-12">Logix</h5>
                <div class="u-align-left u-social-icons u-spacing-13 u-social-icons-4"><h5 class="<?php echo $logix; ?>"><input type="text" value="<?php echo $logix; ?>">  </h5>
                  </a>
                </div>
              </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-repeater-item u-shape-rectangle u-white u-list-item-5" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-5"><a href="//sgu.universal.org.br">
                <div alt="" class="u-border-5 u-border-palette-2-base u-image u-image-circle u-image-5" data-image-width="206" data-image-height="206"></div>
                <h5 class="u-align-center u-text u-text-15">SGU</h5>
                <div class="u-align-left u-social-icons u-spacing-13 u-social-icons-5"><h5 class="<?php echo $sgu; ?>"><input type="text" value="<?php echo $sgu; ?>">  </h5>
                  </a>
                </div>
              </div>
            </div>
            <div class="u-align-center u-container-align-center u-container-style u-list-item u-repeater-item u-shape-rectangle u-white u-list-item-6" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-6"><a href="//helpdesk-otrs.universal.org.br">
                <div alt="" class="u-border-5 u-border-palette-2-base u-image u-image-circle u-image-6" data-image-width="309" data-image-height="309"></div>
                <h5 class="u-align-center u-text u-text-18">OTRS</h5>
                <div class="u-align-left u-social-icons u-spacing-13 u-social-icons-6"><h5 class="<?php echo $otrs; ?>"><input type="text" value="<?php echo $otrs; ?>">  </h5>
                  </a>
                  </a>
                </div>
              </div>
            </div>
            
            <div class="u-align-center u-container-align-center u-container-style u-list-item u-repeater-item u-shape-rectangle u-white u-list-item-7" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-7">
                <div alt="" class="u-border-5 u-border-palette-2-base u-image u-image-circle u-image-7" data-image-width="309" data-image-height="309"></div>
                <h5 class="u-align-center u-text u-text-21"> IBM Vault</h5>
                <div class="u-align-left u-social-icons u-spacing-13 u-social-icons-7"><h5 class="<?php echo $ibmvault; ?>"><input type="text" value="<?php echo $ibmvault; ?>">  </h5>
                   </a>
                </div>
              </div>
            </div>
            <div class="u-align-center u-container-align-center u-container-style u-list-item u-repeater-item u-shape-rectangle u-white u-list-item-8" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-8"><a href="//servicedesk.universal.org.br">
                <div alt="" class="u-border-5 u-border-palette-2-base u-image u-image-circle u-image-8" data-image-width="309" data-image-height="309"></div>
                <h5 class="u-align-center u-text u-text-24">Service-Desk</h5>
                <div class="u-align-left u-social-icons u-spacing-13 u-social-icons-8"><h5 class="<?php echo $servicedesk; ?>"><input type="text" value="<?php echo $servicedesk; ?>">  </h5>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <p class="u-align-center u-text u-text-body-alt-color u-text-default u-text-27">Status Universal <a href="" class="u-active-none u-border-1 u-border-hover-white u-border-no-left u-border-no-right u-border-no-top u-border-white u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn u-button-link u-button-style u-hover-none u-none u-radius-0 u-text-body-alt-color u-top-left-radius-0 u-top-right-radius-0 u-btn-1" target="_blank"></a>
        </p>
        <div><p> sldahaslhlkhsa</p> sdsadsadsadsa</div>
      </div>
     
</div>
<div class="textonovo"> <a> dsakjdhaskdjhsjka</a></div>
    </section>
    
  
    
    <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="" target="_blank">
        <span>Teste</span>
      </a>
      <p class="u-text">
        <span>Teste</span>
      </p>
      <a class="u-link" href="" target="_blank">
        <span>Teste</span>
      </a>. 
      
    </section>
  
<style>

</style>
  </body>
  </html>