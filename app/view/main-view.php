<?php
include '_view.php'; 

class main_view extends _view
{
    function __construct()
    {
        parent::__construct();
    }
    public function PrintHTML()
    {
        $this->TopContent();
        $this->MainContent();
        $this->BotContent();
    }
    protected function TopContent()
    {
        $onClick = $this->GetJsAjax( "../../app/control/main-control.php?ajax=test", ".Div-MainContent", "alert('sucess!');" );
        
        $this->e( "<!-- TOP NAV -->" );
        $this->e( "<nav class='navbar navbar-expand-md navbar-dark fixed-top bg-dark'>" );
        $this->e(   "<a class='navbar-brand' href='#' onclick=\"$onClick\">ADKST</a>" );
        $this->e(   "<button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarsExampleDefault' aria-controls='navbarsExampleDefault' aria-expanded='false' aria-label='Toggle navigation'>" );
        $this->e(       "<span class='navbar-toggler-icon'></span>" );
        $this->e(   "</button>" );
        $this->e(   "<div class='collapse navbar-collapse' id='navbarsExampleDefault'>" );
        $this->e(       "<ul class='navbar-nav mr-auto'>" );
        $this->e(           "<li class='nav-item active'>" );
        $this->e(               "<a class='nav-link' href='https://ADKST.org'>Home <span class='sr-only'>(current)</span></a>" );
        $this->e(           "</li>" );
        
        // @todo get from DB table
        $this->e(           "<li class='nav-item dropdown'>" );
        $this->e(               "<a class='nav-link dropdown-toggle' href='#' id='dropdown01' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>Projects</a>" );
        $this->e(               "<div class='dropdown-menu' aria-labelledby='dropdown01'>
                                    <a class='dropdown-item' href='#'>ADKST.org (CMS)</a>
                                    <a class='dropdown-item' href='#'>BIG Data (SQL)</a>
                                    <a class='dropdown-item' href='#'>Game Servers (RCON)</a>
                                    <a class='dropdown-item disabled' href='#'>L33t H4x0r (Linux-Kali)</a>
                                </div>" );
        $this->e(           "</li>" );
        
        $this->e(           "<li class='nav-item disabled'>" );
        $this->e(               "<a class='nav-link disabled' href='#'>My Account</a>" );
        $this->e(           "</li>" );
        $this->e(       "</ul>" );
        $this->e(       "<form class='form-inline my-2 my-lg-0'>" );
        $this->e(           "<input class='form-control mr-sm-2' type='email' placeholder='Your e-mail' aria-label='EMAIL'>" );
        $this->e(           "<button class='btn btn-outline-success my-2 my-sm-0 disabled' type='button'>Login</button>" );
        $this->e(       "</form>" );
        
        $this->e(   "</div>" );
        $this->e( "</nav>" );
    }
    
    protected function MainContent( )
    {
        $this->e( "<!-- MAIN BODY CONTENT -->" );
        $this->e( "<main role='main'>" );
            $this->PrintJumbotron();
        $this->e( "<!-- Example row of columns -->" );
        $this->e( "<div class='container'>" );
        $this->e(   "<div class='row'>" );
        
            $this->PrintProjBox( $this->GetProjectArray(1) );
            $this->PrintProjBox( $this->GetProjectArray(2) );
            $this->PrintProjBox( $this->GetProjectArray(3) );
            
        $this->e(   "</div> <hr>" );
        $this->e( "</main>" );
    }

    protected function GetProjectArray( $ProjectID = 0 )
    {
       /*
        * HARDCODED FOR NOW
        * @todo get from DB Projects table
        */
        $ret = [
            'id' => 0,
            'name' => "", 
            'title' => "", 
            'subTitle' => "", 
            'desc' => "", 
            'html' => "",
            'img' => "",
            'url' => "",
        ];
        switch($ProjectID) 
        {
            default :
                $ret = [
                    'id' => 0,
                    'name' => "Unknown_Project", 
                    'title' => "ERROR", 
                    'subTitle' => "Unknown project.", 
                    'desc' => $this->_LoremText, 
                    'html' => "<p>".$this->_LoremText."</p>",
                    'img' => "",
                    'url' => ""
                ];
                break;
                
            case 1:
                $ret = [
                    'id' => 1,
                    'name' => "BiglyData", 
                    'title' => "Data, BIGLY Data", 
                    'subTitle' => "Web Scraping & Computational stats.", 
                    'desc' => $this->_LoremText, 
                    'html' => "<p>".$this->_LoremText."</p>",
                    'img' => "",
                    'url' => ""
                ];
                break;
            
            case 2:
                $ret = [
                    'id' => 2,
                    'name' => "TheftMorality", 
                    'title' => "Ethical Hacking", 
                    'subTitle' => "Introduction to Linux & Kali Tools", 
                    'desc' => $this->_LoremText, 
                    'html' => "<p>".$this->_LoremText."</p>",
                    'img' => "",
                    'url' => ""
                ];
                break;
            
            case 3:
                $ret = [
                    'id' => 3,
                    'name' => "AdminAbuse", 
                    'title' => "Game Servers", 
                    'subTitle' => "Remote Consoles & Mod Creation", 
                    'desc' => $this->_LoremText, 
                    'html' => "<p>".$this->_LoremText."</p>",
                    'img' => "",
                    'url' => ""
                ];
                break;
        }
        
        return $ret;
    }

    protected function PrintProjBox( $projArr = [] )
    {
        return;
        if( empty($projArr) )
            $projArr = $this->GetProjectArray (0);
        
        $modalID = $this->_UniqueID . "Modal_" . $projArr['name'];

        $this->e( "<div class='col-md-4'>" );
        $this->e(   "<h2 style='text-align:center; text-decoration: underline;'>" . $projArr['title'] . "</h2>" );
        $this->e(   "<h5>" . $projArr['subTitle'] . "</h5>" );
        $this->e(   $projArr['html'] );
        $this->e(   "<p style='text-align: center;'>" );
        $this->e(       "<btn class='' role='button' data-lightbox='example-1'>" );
        $this->e(           "<a class='btn btn-secondary modal-a' role='button' href='#$modalID' >View details &raquo;</a>" );
        $this->e(       "</btn>" );
        $this->e(   "</p>" );
        $this->e( "</div>" );

        $this->e( "<!-- HIDDEN " . $projArr['name'] . " MODAL CONTENT -->" );
        $this->e( "<div style='display: none;'>" );
        $this->e(   "<div id='$modalID' style='padding:10px; background:#fff;'>" );
        $this->e(       "<p><strong>" . $projArr['title'] . "</strong></p>" );
        $this->e(       "<p>" . $projArr['desc'] . "</p>" );
        $this->e(   "</div>" );
        $this->e( "</div>" );
        $this->e( "<!-- END OF " . $projArr['name'] . " MODAL CONTENT -->" );
    }

    function PrintJumbotron($h1Text = 'Hey, you!')
    {
        $aArr['adkst']      = "<a href='https://adkst.org/' target='_self' class='link'>ADKST</a>";
        $aArr['iis']        = "<a href='https://www.iis.net/' target='_blank' class='link'><i>Microsoft's I.I.S.</i></a>";
        $aArr['winsrv']     = "<a href='https://www.microsoft.com/' target='_blank' class='link'> <i>Windows Server 2016</i></a>";
        $aArr['ionos']      = "<a href='https://www.ionos.com/web-hosting?ac=OM.US.USf11K357085T7073a&kwk=525519930' target='_blank' class='link'>IONOS</a>";
        $aArr['azure']      = "<a href='https://azure.microsoft.com/' target='_blank' class='link'><i>Microsoft Azure Cloud</i></a>";
        $aArr['mysql']      = "<a href='https://www.mysql.com/' target='_blank' class='link'><i>MySQL 5.5</i></a>";
        $aArr['php']        = "<a href='https://www.php.net/' target='_blank' class='link'><i>PHP 7.5</i></a>";
        $aArr['linkedin']   = "<a class='btn btn-primary btn-lg' href='https://www.linkedin.com/in/mathieu-payette-prog-fullstack/' target='_blank' role='button'>K1ng... z00f?</a>";
        $aArr['contactMe']  = "<a class='' href='mailto:webmaster@adkst.org'>Don't hesitate to contact me :)</a>";

        
        $this->e(   "<div class='jumbotron'>" );
        $this->e(       "<div class='container' style='padding: 10px;'>" ); 
        $this->e(           "<h1 class='display-3'>" . $h1Text . "</h1>" );
        $this->e(           "<p>Welcome to " . $aArr['adkst'] . ",</p>");
        $this->e(           "<p>" );
        $this->e(               "<b>K1ng z00f's</b> (<i>moi-même's</i>) multi-purposed (has beaucoup functions ...lol...) <a href='https://en.wikipedia.org/wiki/Sandbox_(software_development)' target='_blank'>Development Sandbox</a> "
                                . "exploiting " . $aArr['winsrv']." and " . $aArr['iis'] . "...\r\n");
        $this->e(               $aArr['adkst']." is home to a growing number of my <u>ambitious web-dev projects</u>." );
        $this->e(               "My metaphorical <b>t00lb0x</b> if-you-will includes <u><i>compétences</i></u> such as " . $aArr['mysql'].", " . $aArr['php'].", "  );
        $this->e(               $aArr['azure'].", <u><i>Etcetera</i><sub>[...]</sub></u> " . "TBH, I'm simply trying to keep myself occupied in a productive manner during the <b><u>P4nD3m1c</u></b>... So... I shall humbly showcase my <i>main d'oeuvre</i> FTW  ¯\_(ツ)_/¯<br>\r\n" );
        $this->e(           "</p><hr>" );
        $this->e(           "<p style='text-align: center;'>" );
        $this->e(               $aArr['linkedin']."<br>" );
        $this->e(               "<sub>" . $aArr['contactMe']);
        $this->e(               "if you have any comments / questions / <s>concerns</s> suggestions" );
        $this->e(           "</sub></p>" );
        $this->e(       "</div>" );
        $this->e(   "</div>" );
    }
    
}

