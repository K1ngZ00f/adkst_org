<?php
abstract class _view 
{
    public $_UniqueID;
    public $_LoremText;
    
    function __construct() 
    {
        $this->_UniqueID = uniqid("_view_");
        $this->_LoremText = "Aliquam vitae nibh vitae libero tempus gravida sed sollicitudin mauris. Morbi ut scelerisque leo. In gravida erat eu nunc tincidunt, sodales vehicula mi volutpat. Duis tincidunt aliquam mi porta congue. In quis laoreet diam. Donec vel risus commodo dolor gravida volutpat sed vel eros. In et tempus ex. Morbi nec ligula in ligula elementum ultrices eu a ligula. Maecenas condimentum lectus vestibulum elit facilisis,";
    }
    protected function TopContent()
    {
        $this->e( "<!-- TOP NAV -->" );
        $this->e( "<nav class='navbar navbar-expand-md navbar-dark fixed-top bg-dark'>" );
        $this->e(   "<a class='navbar-brand' href='https://ADKST.org'>ADKST.org</a>" );
        $this->e(   "<button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarsExampleDefault' aria-controls='navbarsExampleDefault' aria-expanded='false' aria-label='Toggle navigation'>" );
        $this->e(       "<span class='navbar-toggler-icon'></span>" );
        $this->e(   "</button>" );
        $this->e( "</nav>" );
    }
    protected function MainContent( ) 
    {
        $this->e( "<!-- MAIN BODY CONTENT -->" );
        $this->e( "<main role='main'>" );
        $this->e( "</main>" );
    }
    protected function BotContent()
    {
        $this->e( "<!-- BOTTOM PAGE FOOTER -->" );
        $this->e( "<footer class='container myFooter'>" );
        $this->e(   "<p>ALL RIGHTS RESERVED <br>" );
            $this->e(   "ADKST.org &copy; 2017-" . date('Y') . " | " );
            $this->e(   "<a class='text-reset' href='mailto:webmaster@adkst.org'>Mathieu (k1ng z00f) Payette</a>" );
        $this->e(   "</p>" );
        $this->e( "</footer>" );
    }
    
    public function e( $Mixed ) 
    {   
        if( is_array( $Mixed ) )
        {
            foreach ( $Mixed as $str ) 
            {
                echo $str;
                echo "\r\n";
            }
        }
        else 
        {
            echo $Mixed;
            echo "\r\n";
        }
    }
    /*
     * https://api.jquery.com/jquery.ajax/
     */
    public function GetJsAjax( $url, $elementID, $jsSuccess='', $jsFail='', $jsComplete='', $jsBefore='' )
    {
        
        $retStr = 
            "$.ajax({
                url: '".$url."', 
                method: 'GET',
                dataType: 'html',
                success: function(result,status,xhr) { 
                    $('$elementID').html( result );
                    ".$jsSuccess." ;
                }, 
                error: function(result,status,xhr) { ".$jsFail." ;}, 
                beforeSend: function(xhr) { ".$jsBefore." ;}, 
                complete: function(result,status,xhr) { ".$jsComplete." ;} 
            });";
        
        return $retStr;
    }
}

