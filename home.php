<?php include('loginscript.php');?>
<?php $page = 'home'; ?>
<?php include('header.php');?>

    <script type='text/javascript'>
        $(document).ready(function(){
            // cache the window object
            $window = $(window);

            $('section[data-type="background"]').each(function(){
                // declare the variable to affect the defined data-type
                var $scroll = $(this);

                $(window).scroll(function() {
                    // HTML5 proves useful for helping with creating JS functions!
                    // also, negative value because we're scrolling upwards
                    var yPos = -($window.scrollTop() / $scroll.data('speed'));

                    // background position
                    var coords = '50% '+ yPos + 'px';

                    // move the background
                    $scroll.css({ backgroundPosition: coords });
                }); // end window scroll
            });  // end section function
        }); // close out script
        </script>

    <section id="intro" data-speed="6" data-type="background" class="text-center">
            <h1>Welcome To Clive's Blog</h1>
            <p class="lead">This is my personal blog where I write about various interests of mine. </p>
    </section>

    <div class="container">

        <hr>

        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Hello.</h3></div>
                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
                        Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis
                        dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan.
                        Aliquam in felis sit amet augue.
                    </div>
                    <div class="panel-footer text-right"><a href="#" class="btn btn-default">More</a></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Hello.</h3></div>
                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
                        Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis
                        dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan.
                        Aliquam in felis sit amet augue.
                    </div>
                    <div class="panel-footer text-right"><a href="#" class="btn btn-default">More</a></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Hello.</h3></div>
                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
                        Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis
                        dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan.
                        Aliquam in felis sit amet augue.
                    </div>
                    <div class="panel-footer text-right"><a href="#" class="btn btn-default">More</a></div>
                </div>
            </div>
        </div><!--/row-->

        <hr>

    </div><!--/container-->

    <div class="divider"></div>

    <section id="home" data-speed="4" data-type="background">

    </section>

    <div class="divider"></div>

    <div class="container">
        <hr>
        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Hello.</h3></div>
                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
                        Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis
                        dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan.
                        Aliquam in felis sit amet augue.
                    </div>
                    <div class="panel-footer text-right"><a href="#" class="btn btn-default">More</a></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Hello.</h3></div>
                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
                        Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis
                        dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan.
                        Aliquam in felis sit amet augue.
                    </div>
                    <div class="panel-footer text-right"><a href="#" class="btn btn-default">More</a></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Hello.</h3></div>
                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
                        Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis
                        dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan.
                        Aliquam in felis sit amet augue.
                    </div>
                    <div class="panel-footer text-right"><a href="#" class="btn btn-default">More</a></div>
                </div>
            </div>
        </div>
        </hr>
    </div><!--/container-->

    <div class="divider"></div>

    <!--parallax 2 -->
    <section id="about" data-speed="6" data-type="background">

    </section>
    <!--/parallax 2-->
<?php include('footer.php');?>