<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <link href="scripts/main.css" type="text/css" media="screen" rel="stylesheet" >
        <link href="scripts/mainindex.css" type="text/css" media="screen" rel="stylesheet" >
        
        <title>the HAPPENING</title>
        
        
        <script src="scripts/jquery.js" type="text/javascript" > </script>
        <script src="scripts/slideshow.js" type="text/javascript"></script>
        <script>
        
        $(document).ready(function(){
            
            //$('.menuitem').hide();
            $('#image_rotate').innerfade({ 
                	speed: 3000, 
                        timeout: 7000, 
                        type: 'sequence', 
                        containerheight: '300px'
                });
                
                var obj=null;
            function deblurT(obj) {
                $(obj).css({'color':'#000','text-shadow': '0 0 5px rgba(0,0,0,0)'});
            };
            
            function blurT(obj) {
                $(obj).css({'border-width':'0px 0px 0px 0px','color':'#cfcfcf','text-shadow': '0 0 6px rgba(0,0,0,0.5)'}); 
            };     
            
            
        $('.menuitem').mouseenter(function(){
            deblurT(this);
                        
        });
        
        $('.menuitem').mouseleave(function(){
            blurT(this);
                });
        });
    
        </script>
    </head>
    <body>
        <div id="header">
            <div class="wraper">
                <div id="logo">
                    <img src="sitedata/logo.jpg"/>
                </div>
                
                <div id="menubar">
                    <div id="activemenuitem">All events</div>
                    <div class="menuitem">Around me</div>
                    
                    <div class="menuitem"> About us</div>
                </div>
                
            </div>
        </div>
        
        <div id="main">
            <div class="wraper">
                <div id="slidshow">
                    <ul id="image_rotate" style="list-style: none;">
                        <li><img src="sitedata/img1.jpg"></li>
                        <li><img src="sitedata/img2.jpg"></li>
                        <li><img src="sitedata/img3.jpg"></li>
                    </ul> 
                </div>
                
                <div id="aboutsite" class="cf">
                    <div class="text">
                    hello world! this is a web-site to make your event management experience more AMAZING! <br/>
                    using this site, you will be able to share even, attract more public, and easily manage entries for event..
                    
                    </div> 
                </div>
                
                <div id="forms">
                     Sign up
                    <form id="signup" action=" " method="POST">
                        <table>
                            <tr><td>email</td><td>: <input type="text" name="mail"/></td></tr>
                            <tr><td>password</td><td>: <input type="text" name="pass1"/></td></tr>
                            <tr><td>varify <br/> password</td><td>: <input type="text" name="pass2"/></td></tr>
                            <tr><td></td><td> &nbsp;&nbsp; <input type="submit" value="sign me up!">  </td></tr>
                        </table>
                    </form>
                    
                </div>
                
            </div>
        </div>
    </body>
</html>
