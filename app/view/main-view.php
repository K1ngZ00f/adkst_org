<?php
require './app/view/_view.php'; 
class main_view extends _view
{
    function __construct()
    {
        parent::__construct();
        
        // Print Defaul HTML DOM on Construct
        $this->TopContent();
        $this->MainContent();
        
    }
    
    public function MainContent( )
    {
        $hrefArr = [];
        $hrefArr['linkedin']    = "https://www.linkedin.com/in/mathieu-payette-prog-fullstack/";
        $hrefArr['adkst']       = "https://ADKST.org";
        $hrefArr['iis']         = "https://www.iis.net/";
        $hrefArr['winsrv']      = "https://www.microsoft.com/en-us/windows-server";
        $hrefArr['ionos']       = "https://IONOS.com";
        $hrefArr['azure']       = "https://azure.microsoft.com/en-us/";
        $hrefArr['mysql']       = "https://dev.mysql.com/";
        $hrefArr['php']         = "https://www.php.net/";

        echo "<!-- MAIN BODY CONTENT -->";
            echo "<main role='main'>";
                echo "<!-- Main jumbotron for a primary marketing message or call to action -->";

                echo "<div class='jumbotron'>

                      <div class='container' style='padding: 10px;'> 
                        <h1 class='display-3'>Hello, world!</h1>"
                        . "<p>" // 
                            . "Welcome to <a href='".$hrefArr['adkst']."' target='_self' class='link'>ADKST</a>, <hr>"
                            . "My very own personal web-server utilizing <a href='".$hrefArr['iis']."' target='_blank' class='link'><i>Microsoft's I.I.S.</i></a> " 
                            . "on <a href='".$hrefArr['winsrv']."' target='_blank' class='link'> <i>Windows Server 2016</i></a>. " // 
                            . "This server is hosted by <a href='".$hrefArr['ionos']."' target='_blank' class='link'>IONOS</a> " 
                            . " on a <a href='".$hrefArr['azure']."' target='_blank' class='link'><i>Cloud-Based Windows Platform</i></a>. "
                            . "<a href='".$hrefArr['adkst']."' target='_self' class='link'>ADKST.org</a> is host to many of my standalone Web-Dev Projects (Sandboxes). "
                            . "Running <a href='".$hrefArr['mysql']."' target='_blank' class='link'><i>MySQL 5.5</i></a> " 
                            . "and <a href='".$hrefArr['php']."' target='_blank' class='link'><i>PHP 7.5</i></a>; " 
                            . "<a href='".$hrefArr['azure']."' target='_blank' class='link'><i>Microsoft's cloud</i></a> will certainly help me stay busy during the <b>p4nD3m1c</b>! "
                            . "<br> "
                        . "</p>
                            <p style='text-align: center;'>
                                <a class='btn btn-primary btn-lg' href='".$hrefArr['linkedin']."' target='_blank' role='button'>Who am I?</a>
                                <br>
                                <sub>Feel free to <a class='text-reset' href='mailto:webmaster@adkst.org'>contact me</a> " 
                                    . "if you have any comments / questions / contributions / <s>concerns</s>.</sub>
                            </p>
                      </div>
                    </div>";

                echo "<div class='container'>
                      <!-- Example row of columns -->
                      <div class='row'>";

                    echo "<div class='col-md-4' style='border: 1px solid black;'>
                              <h2 style='text-align:center; text-decoration: underline;'>Data, BIGLY Data</h2>
                              <h5>Web Scraping & Computational stats.</h5>
                              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                              <hr><p style='text-align: right;'><a class='btn btn-secondary' href='#' role='button'>View details &raquo;</a></p>
                            </div>";

                    echo "<div class='col-md-4'>
                          <h2 style='text-align:center; text-decoration: underline;'>Game Servers</h2>
                          <h5>Remote Consoles & Mod Creation</h5>
                          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                          <p style='text-align: right;'><a class='btn btn-secondary' href='#' role='button'>View details &raquo;</a></p>
                        </div>";


                    $elProjBTN = ""
                            . "<btn class='' role='button' data-lightbox='example-1'>"
                                . "<a class='btn btn-secondary btn_Proj3' role='button' href='#inline_Proj3' >View details &raquo;</a>"
                            . "</btn>";


                    echo "<div class='col-md-4'>
                          <h2 style='text-align:center; text-decoration: underline;'>Ethical Hacking</h2>
                          <h5>Introduction to Linux & Kali Tools</h5>
                          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                          <p style='text-align: right;'>$elProjBTN</p>" 
                          . ""
                        . "</div>";

                echo "</div>";
                echo "<hr>";
                echo "</div>";
            echo "</main>";
    }
    
    
    
    public function TopContent()
    {
        $hrefArr['adkst'] = "https://ADKST.org";
        echo "<!-- TOP NAV -->";
        echo "<nav class='navbar navbar-expand-md navbar-dark fixed-top bg-dark'>";
            echo "<a class='navbar-brand' href='".$hrefArr['adkst']."'>ADKST.org</a>";

            echo "<button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarsExampleDefault' aria-controls='navbarsExampleDefault' aria-expanded='false' aria-label='Toggle navigation'>
                  <span class='navbar-toggler-icon'></span>
                </button>";

                echo "<div class='collapse navbar-collapse' id='navbarsExampleDefault'>";
                    echo "<ul class='navbar-nav mr-auto'>";

                    echo "<li class='nav-item active'>
                      <a class='nav-link' href='".$hrefArr['adkst']."'>Home <span class='sr-only'>(current)</span></a>
                    </li>";

                    echo "<li class='nav-item dropdown'>
                        <a class='nav-link dropdown-toggle' href='#' id='dropdown01' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>Projects</a>
                        <div class='dropdown-menu' aria-labelledby='dropdown01'>
                          <a class='dropdown-item' href='#'>ADKST.org (CMS)</a>
                          <a class='dropdown-item' href='#'>BIG Data (SQL)</a>
                          <a class='dropdown-item' href='#'>Game Servers (RCON)</a>
                          <a class='dropdown-item disabled' href='#'>L33t H4x0r (Linux-Kali)</a>
                        </div>
                      </li>";

                    echo "<li class='nav-item disabled'>
                        <a class='nav-link disabled' href='#'>My Account</a>
                      </li>";

                echo "</ul>";

                echo "<form class='form-inline my-2 my-lg-0'>";
                echo "<input class='form-control mr-sm-2' type='email' placeholder='e-Mail' aria-label='EMAIL'>";
                echo "<button class='btn btn-outline-success my-2 my-sm-0' type='submit'>Login</button>";
                echo "</form>";


            echo "</div>";
        echo "</nav>";

        return;
    }
    
    public function BotContent()
    {
        echo "<!-- BOTTOM PAGE FOOTER -->";
        echo "<footer class='container myFooter'>";
        echo "<p>";
            echo "ALL RIGHTS RESERVED";
            echo "<br>";
            echo "ADKST.org &copy; 2017-".date('Y') . " | ";
            echo "<a class='text-reset' href='mailto:webmaster@adkst.org'>Mathieu 'k1ng z00f' Payette</a>";
        echo "</p>";
        echo "</footer>";
        echo "
                <!-- HIDDEN POPUP content -->
                <!--<div style='display: none;'>

                    <div id='inline_Proj3' style='padding:10px; background:#fff;'>
                        <p><strong>PROJECT 3.</strong></p>
                    </div> 

                </div>";
    }
    
    
}

