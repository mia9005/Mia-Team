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
                <link rel="stylesheet" href="../Mia-Team/css/style.css">
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
        public static function PageStoreCatalog( $productList ) : string {

            $htmlStoreCatalog = '<div class="store-gallery">';

            $htmlStoreCatalog .= self::storeFilter();
            $htmlStoreCatalog .= self::storeCatalog($productList);
                
            $htmlStoreCatalog .='</div>';

            return $htmlStoreCatalog;
        }

        public static function storeFilter(){
            $htmlStoreFilter = '
            <article>
                <form action="" method="GET">
                    <select name="sortBy">
                        <option selected disabled>-->Select Option<--</option>
                        <option value="name">Name</option>
                        <option value="price">Price</option>
                        <option value="id">Id</option>
                    </select>
                    <button type="submit">Sort</button>
                </form>                     
            </article>';

            return $htmlStoreFilter;
        }

        public static function storeCatalog( $productList ){

            $htmlStoreCatalog = '<section>';

            foreach($productList as $product){
                $htmlStoreCatalog .='
                <figure>
                    <img src='.$product->img.' alt='.$product->alt.'>
                    <figcaption>
                        <h3>'.$product->name.'</h3>
                        <span>$'.$product->price.'</span>
                        <button>Add to the cart <i class="fa-solid fa-cart-shopping"></i></button>
                    </figcaption>
                </figure>';
            }
            $htmlStoreCatalog .= '<section/>';

            return $htmlStoreCatalog;
        }

        /**
         * store product function printer
         * @return string
         */
        public static function PageProduct( $product ) : string {
            $row = "";
            $htmlStoreProduct = '
            <div class="store-product">
                <section>
                    <figure>
                        <img src='.$product->img.' alt='.$product->alt.' >
                    </figure>
                    <article>
                        <h2>'.$product->name.'</h2>
                        <p>product description Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, nisi.</p>
                        <span>$'.$product->price.'</span>
                        <button>Add to the cart <i class="fa-solid fa-cart-shopping"></i></button>
                    </article>
                </section>
            </div>
            ';

            return $htmlStoreProduct;
        }
    }