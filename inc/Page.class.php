<?php
    class Page {

        /**
         * html openning tag always first
         * @return string
         */
        public static function PageHead() : string {

            $htmlHead = '
            <!DOCTYPE html>
            <html lang="en">
            
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" href="../Home/css/style.css">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
                <title>Document</title>
            </head>
            
            <body>
            ';

            return $htmlHead;
        } 

        /**
         * Html closing tag always last
         * @return string
         */
        public static function PageEnd() : string {

            $htmlEnd = '
                </body>
            </html>
            ';

            return $htmlEnd;
        }

        /**
         * header function printer
         * @return string
         */
        public static function PageHeader() : string {

            $htmlHeader = '
            <header>
                <section>
                    <h1>
                        PROGAMER    
                    </h1>
                    <a href="#">Login</a>
                    <details>
                        <summary class="fa-solid fa-bars"></summary>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Store</a></li>
                            <li><a href="#">Login</a></li>
                            <li><a href="#">Community</a></li>
                        </ul>
                    </details>
                </section>
                <nav>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Store</a></li>
                        <li><a href="#">Community</a></li>
                    </ul>
                </nav>
            </header>
            ';

            return $htmlHeader;
        }

        /**
         * footer function printer
         * @return string
         */
        public static function PageFooter() : string {

            $htmlFooter = '
            <footer>
                <section>
                    <p>All copyrights reserved to <a href="#">YourWebsite</a></p>
                </section>
            </footer>
            ';

            return $htmlFooter;
        }

        /**
         * store gallery function printer
         * @return string
         */
        public static function PageStoreGallery( $product ) : string {

            $htmlStoreGallery = '
            <div class="store-gallery" >
                <section>
                    <figure>
                        <img src='.$product->img.' alt='.$product->alt.'>
                        <figcaption>
                            <h3>'.$product->name.'</h3>
                            <span>'.$product->price.'</span>
                            <button>Add to the cart <i class="fa-solid fa-cart-shopping"></i></button>
                        </figcaption>
                    </figure>
                </section>
            </div>
            ';

            return $htmlStoreGallery;
        }
    }