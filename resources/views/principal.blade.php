<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">

    <link rel="icon" href={{asset("favicon.jpg")}} type="image/x-icon">
    <link rel="shortcut icon" href={{asset("favicon.jpg")}} type="image/x-icon" />
    <link href="{{asset("../../css/bootstrap.css" )}}" rel="stylesheet" media="screen">
    <link href="{{asset("../../css/responsive.css" )}}" rel="stylesheet" media="screen">
    <link href="{{asset("../../css/camera.css" )}}" rel="stylesheet" media="screen">
    <link href="{{asset("../../css/stylehome.css" )}}" rel="stylesheet" media="screen">
    <link href="{{asset("http://fonts.googleapis.com/css?family=Open+Sans:400,600,700")}}" rel="stylesheet" type="text/css">
    <script src="{{asset("../../js/jquery.js")}}"></script>
    <script src="{{asset("../../js/jquery.easing.1.3.js")}}"></script>
    <script src="{{asset("../../js/camera.js")}}"></script>
    <script src="{{asset("../../js/jquery.ui.totop.js")}}"></script>

    <script>
        $(document).ready(function(){
            jQuery('.camera_wrap').camera();
        });
    </script>

    <!--[if (gt IE 9)|!(IE)]><!-->
    <script src="{{asset("../../js/jquery.mobile.customized.min.js")}}"></script>
    <!--<![endif]-->

    <!--[if lt IE 9] -->
    <link href="{{asset("../../css/docs.css" )}}" rel="stylesheet" media="screen">
    <link href="{{asset("../../css/ie.css" )}}" rel="stylesheet" media="screen">
    <![endif]-->
</head>

<body>
<!--==============================Header=================================-->
<header>
    <!--==============================Menu=================================-->
    <section id="nav_section">
        @yield('menu')
    </section>
</header>

<!--==============================Content=================================-->
<section id="content" class="main-content">
    @yield('contenido')
</section>

<!--==============================Footer=================================-->

<footer>
        <div class="span12">
            FUNMAV  ©  2018. ALL RIGHTS RESERVED. &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
        </div>
</footer>


<script type="text/javascript">
    $(document).ready(function()
    { $("#ajax-contact-form").submit(function() { var str = $(this).serialize(); $.ajax( { type: "POST", url: "contact.php", data: str, success: function(msg)
        { if(msg == 'OK') // Message Sent? Show the 'Thank You' message and hide the form
        { result = '<div class="notification_ok">Your message has been sent. Thank you!<br> <a href="#" onclick="freset();return false;">send another mail</a></div>'; $("#fields").hide(); } 							else
        { result = msg; } $("#note").html(result); }
    }); return false; }); });
    function freset()
    { 	$("#note").html(''); 	document.getElementById('ajax-contact-form').reset(); 	$("#fields").show();}

</script>

<script>
    jQuery(window).load(function()
    {
        $x = $(window).width();
        if($x > 1024)
        {
            jQuery("#content .row").preloader();
        }
        jQuery('.magnifier').touchTouch();
    });
</script>

<script>
    $(function(){

        var $container = $('#container');

        $container.isotope({
            itemSelector : '.element'
        });


        var $optionSets = $('#options .option-set'),
            $optionLinks = $optionSets.find('a');

        $optionLinks.click(function(){
            var $this = $(this);
            // don't proceed if already selected
            if ( $this.hasClass('selected') ) {
                return false;
            }
            var $optionSet = $this.parents('.option-set');
            $optionSet.find('.selected').removeClass('selected');
            $this.addClass('selected');

            // make option object dynamically, i.e. { filter: '.my-filter-class' }
            var options = {},
                key = $optionSet.attr('data-option-key'),
                value = $this.attr('data-option-value');
            // parse 'false' as false boolean
            value = value === 'false' ? false : value;
            options[ key ] = value;
            if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {
                // changes in layout modes need extra logic
                changeLayoutMode( $this, options )
            } else {
                // otherwise, apply new options
                $container.isotope( options );
            }

            return false;
        });


    });
</script>
<script src="{{asset("../../js/bootstrap.js")}}"></script>



</body>
</html>