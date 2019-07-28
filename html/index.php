<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>LeaseLabs</title>
    <link rel="stylesheet" href="../css/app.css">
    <meta name="viewport" content="width=width, initial-scale=1">
  </head>
  <body>
    <header>
        <div>
            <img id='lease-labs-logo' src='../images/leaselabs_logo_fullstack_rgb.png'>
            <div class='toggle'>
                <span>
                    <a onclick='ToggleCollapsedMenu()'>
                        <img height='25px' width='25px' src='../images/menu.png'>
                    </a>
                </span>
            </div>
        </div>
        <nav>
            <ul id='links' class='active'>
                <li>
                    <a href='#' class='navLink'>HOME</a>
                </li>
                <li>
                    <a href='#' class='navLink'>OUR WORK</a>
                </li>
                <li>
                    <a href='#' class='navLink'>ABOUT US</a>
                </li>
                <li>
                    <a href='#' class='navLink'>CONTACT US</a>
                </li>
                <li id='specialsLink'>
                    <a href='#' class='white'>SPECIALS</a>
                </li>
            </ul>
        </nav>
    </header>
    <hr>

    <main>
        <aside id='left-navigation'>
            <section class='left-navigation-section'>
                <div class='sub-nav-header'>
                    <div>SUBNAV</div>
                </div>
                <ul>
                    <li>
                        <a href="#">Link 1</a>
                    </li>
                    <li>
                        <a href="#">Link 2</a>
                    </li>
                    <li>
                        <a href="#">Link 3</a>
                    </li>
                </ul>
            </section>
            <section class='left-navigation-section'>
                <div class='sub-nav-header'>
                    <div>RELATED LINKS</div>
                </div>
                <ul>
                    <li>
                        <a href="#">Link 1</a>
                    </li>
                    <li>
                        <a href="#">Link 2</a>
                    </li>
                    <li>
                        <a href="#">Link 3</a>
                    </li>
                </ul>
            </section>
        </aside>
        <section id='pageContent'>
            <h1>HEADING 1</h1>
            <h4>
                <i>heading 2</i>
            </h4>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sagittis vitae et leo duis ut diam quam. Sit amet massa vitae tortor condimentum lacinia. Sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus. Ullamcorper eget nulla facilisi etiam dignissim diam quis. Quam quisque id diam vel quam elementum pulvinar etiam.
            </p>

            <p>
                Eu feugiat pretium nibh ipsum. Scelerisque in dictum non consectetur a erat nam at. At consectetur lorem donec massa sapien. Amet aliquam id diam maecenas ultricies mi eget mauris pharetra.
            </p>

            <p>
                Arcu cursus vitae congue mauris rhoncus. Et netus et malesuada fames ac turpis. Neque aliquam vestibulum morbi blandit. Rhoncus urna neque viverra justo nec ultrices. In mollis nunc sed id semper. Neque ornare aenean euismod elementum nisi quis eleifend quam.
            </p>

            <footer id='footer-image-section'>
                <div id='image1' class='footer-image' onmouseover="imageHover(1)" onmouseout="imageNoHover(1)">
                    <div class='image-hover'>
                        <h5 id='heading1' class='image-text'></h5>
                        <h6 id='description1' class='image-text'></h6>
                    </div>
                </div>
                <div id='image2' class='footer-image' onmouseover="imageHover(2)" onmouseout="imageNoHover(2)">
                    <div class='image-hover'>
                        <h5 id='heading2' class='image-text'></h5>
                        <h6 id='description2' class='image-text'></h6>
                    </div>
                </div>
                <div id='image3' class='footer-image' onmouseover="imageHover(3)" onmouseout="imageNoHover(3)">
                    <div class='image-hover'>
                        <h5 id='heading3' class='image-text'></h5>
                        <h6 id='description3' class='image-text'></h6>
                    </div>
                </div>
            </footer>
        </section>
    </main>

    <script src="../js/app.js"></script>
  </body>
</html>
